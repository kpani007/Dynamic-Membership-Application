@if ($other_info)
    @switch($field->input_type->name)
        @case('text')
            @foreach ($other_info['ValidationRule'] as $key=>$value)
                {{$key.'='.$value.' '}}
            @endforeach
            @break
    @endswitch
@endif 