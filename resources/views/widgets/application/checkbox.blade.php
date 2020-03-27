@php
    $other_info = json_decode($field->other_info, true);
$answers = explode(',',$answer);
@endphp
<label class="form-label">{{$field->question}}</label>
@foreach($other_info['Options'] as $option)
<div class="input-group input-group-lg">
    <input name="{{$field->slug.'[]'}}" type="checkbox" id="{{$option['Id']}}" class="chk-col-blue" value="{{$option['Variant']}}" {{in_array($option['Variant'], $answers) ? 'checked=checked':''}} />
    <label for="{{$option['Id']}}">{{$option['Variant']}}</label>
</div>
@endforeach