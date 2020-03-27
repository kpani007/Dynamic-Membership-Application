<div class="form-group form-float">
    <div class="form-line">
        <select class="form-control show-tick" name="{{$field->slug}}">
           @if ($other_info)
                @foreach($other_info['Options'] as $option)
                    <option @if($answer==$option['Variant']) selected="selected" @endif value="{{$option['Variant']}}">{{$option['Variant']}}</option>
                @endforeach
           @endif
        </select>
        <label class="form-label">{{ $field->question}}</label>
    </div>
</div>