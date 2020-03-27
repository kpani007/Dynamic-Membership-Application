<div class="form-group form-float">
    <div class="form-line" id="bs_datepicker_container">
        <input type="text" class="form-control" value="{{$responses->where('field_id', $field->id)->first()['answer']}}" name="{{$field->slug}}" {{--$detail->field->is_required ==1 ? 'required' : ''--}} />
        <label class="form-label">{{$field->question}}</label>
    </div>
   {{-- @if($detail->help_info !="")
    <div class="help-info">{{$detail->help_info}}</div>
    @endif --}}
</div>
