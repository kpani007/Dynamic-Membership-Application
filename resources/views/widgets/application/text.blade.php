<div class="form-group form-float">
    <div class="form-line">
        <input type="{{$field->input_type->name}}" class="form-control" value="{{$responses->where('field_id', $field->id)->first()['answer']}}" name="{{$field->slug}}"  @include('layouts.validation_rule')/>
        <label class="form-label">{{$field->question}}</label>
    </div>
   {{-- @if($detail->help_info !="") --}}
    <div class="help-info">{{$other_info['HelpInfo']}}</div>
    {{-- @endif --}}
</div>
