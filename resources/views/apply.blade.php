@extends('layouts.template')
@section('content')
@php
    $section_slug = Request::segment(2);
    $sections = $sections->where('slug', $section_slug);
    // $details = $sections->where('section.id', $section_id)->first()->field_details->where('field.is_published', 1);
    // if($institution->status != 'Not Submitted')
    // {
    //     $sections = $sections->where('is_updatable', 'Yes');
    // }
@endphp
<br />
@if ($sections->count() > 0)
    <form method="post" action="{{route('apply.store')}}" enctype="multipart/form-data">
        <div class="header">
        @include('layouts.section_navigation')
        </div>
        <div class="header">
            <h2>
                <b>{{strtoupper($sections->first()['title'])}}</b>
            </h2>
            @if ($sections->first()['description'] !='nil')
                <br />
                <li class="list-group-item"><p class="col-blue font-italic">{{$sections->first()['description']}}</p></li>
            @endif
        </div>
        @csrf
        <div class="header">
            @foreach ($sections as $section)
                @foreach ($section->fields->where('status', 'Active')->sortBy('order') as $field)
                @php
                    $other_info = json_decode($field->other_info, true);
                    $answer = $responses->where('field_id', $field->id)->first()['answer'];
                @endphp
                @include($field->input_type->widget_location)
                @endforeach
            @endforeach
        </div>
        <br />
        @include('layouts.section_navigation')
    </form>
    @else
        <label class="form-label">The page you're looking for doesn't exist</label>
    @endif
@endsection