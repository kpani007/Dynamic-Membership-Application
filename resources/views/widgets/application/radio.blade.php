<div class="form-group">
    @if ($other_info)
        @foreach ($other_info['Options'] as $option)
            <input type="radio" name="{{$field->slug}}" id="{{$option['Variant']}}" class="with-gap">
            <label for="{{$option['Variant']}}">{{$option['Variant']}}</label>
        @endforeach
    @endif
</div>