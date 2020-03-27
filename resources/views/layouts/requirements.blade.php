@php
    $field_count = 1;
@endphp
@foreach($sections as $section)
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="header">
                <a href="{{route('apply.show', $section->slug)}}">
                    <h2>
                        <b>{{$section->title}}</b>
                    </h2>
                </a>
                @if ($section->description !='nil')
                <br />
                    <li class="list-group-item">{{$section->description}}</li>
                @endif
            </div>
            <div class="body">
                <ul class="list-group">
                @foreach($section->fields->where('status', 'Active') as $field)
                    <li class="list-group-item">{{$field_count++}}. {{$field->question}} {{$field->required == 'Yes' ?'*': ''}}
                    @switch($field->input_type->name)
                        @case('matrix')
                        @include('widgets.start.matrix')
                            @break
                    @endswitch
                     </li>
                @endforeach
                </ul>
            </div>
         </div>
    </div>                       
@endforeach