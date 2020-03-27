@php use Illuminate\Support\Facades\Auth;
    $section_count = 1;
    $field_count = 1;
    $required_fields_count = 0;
    $response_count = 0; 
@endphp
@extends('layouts.template')
@section('content')
 <div class="header">
    <h2>
        <b>{{strtoupper($institution->name_english)}} - {{$institution->application_id}}</b>
    </h2>
 </div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      @foreach ($sections as $section)
      @php
          $required_fields_count +=  $section->fields->where('required', 'Yes')->count();
      @endphp
          <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="heading{{$section->id}}">
                    <h4 class="panel-title">
                        <a {{$section_count== 1?'class="collapsed"':''}} role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$section->id}}" {{$section_count++== 1?'aria-expanded=true' : 'aria-expanded=false'}} aria-controls="collapse{{$section->id}}">
                            <i class="material-icons">layers</i>{{$section->title}}
                        </a>
                    </h4> 
                </div>
                <div id="collapse{{$section->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$section->id}}">
                    <div class="panel-body">
                        <div class="body table-responsive">
                            <table class="table-sm  table table-bordered {{$section->fields->count() >1?'table-striped table-hover table-responsive-xl':''}}">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Field</th>
                                        <th>Response</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($section->fields->where('status', 'Active')->sortBy('order') as $field)
                                    @php
                                        $answer = $responses->where('field_id', $field->id)->first()['answer'];
                                    @endphp
                                        <tr>
                                            <td>{{$field_count++}}</td>
                                            <td>{{$field->question}}</td>
                                            <td>
                                                @if (!is_null($answer)  || !empty($answer))
                                                    @php
                                                        $response_count +=1; 
                                                    @endphp
                                                    @switch($field->input_type->name)
                                                    @case('matrix')
                                                        @include('widgets.review.matrix')
                                                        @break
                                                    @default
                                                        {!!$answer!!}
                                                @endswitch
                                                @else
                                                   @if ($field->required == 'Yes')
                                                        <p class="col-pink font-italic font-bold">This field is required</p>
                                                   @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
          </div>
      @endforeach
  </div>
  <div class="text-center">
          <p class="col-pink font-italic font-bold" >{{$response_count < $required_fields_count?'You cannot submit this application, because you have unfilled fields' : ""}}</p>
  </div>
<div class="text-center">
    <button class="btn btn-primary  waves-effect" type="submit" @if($response_count < $required_fields_count) disabled="disabled" data-toggle="tooltip" data-placement="top" title="Your application is incomplete" @endif onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Submit Application
    </button>
</div>
<form id="submit-form" action="{{ route('review.store') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
