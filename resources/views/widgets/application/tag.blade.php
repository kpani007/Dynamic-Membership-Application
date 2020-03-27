<div class="form-group form-float">
    <div class="form-group demo-tagsinput-area">
         <p>{{$field->question}}</p>
        <div class="form-line">
            <input type="text" class="form-control" data-role="tagsinput" value="{{$responses->where('field_id', $field->id)->first()['answer']}}" name="{{$field->slug}}">
        </div>
        {{-- @if($detail->help_info !="") --}}
        <div class="help-info">{{$other_info['HelpInfo']}}</div>
        {{-- @endif --}}
    </div>
</div>