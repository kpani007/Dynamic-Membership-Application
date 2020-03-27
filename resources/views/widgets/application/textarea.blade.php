<div class="form-group form-float">
    <div class="form-line">
        <textarea name="{{$field->slug}}"  cols="30" rows="3" class="form-control" {{--$detail->field->validation_rule}} {{$detail->field->is_required ==1 ? 'required' : '' --}}>{{$responses->where('field_id', $field->id)->first()['answer']}}</textarea>
        <label class="form-label">{{$field->question}}</label>
    </div>
    <div class="help-info">{{$other_info['HelpInfo']}}</div>
</div>
