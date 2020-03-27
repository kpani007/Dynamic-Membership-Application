<div class="form-group form-float">
    <div class="form-line">
        <input type="text" class="form-control" value="{{$responses->where('field_id', $field->id)->first()['answer']}}" name="{{$field->slug}}"  pattern="(([+][(]?[0-9]{1,3}[)]?)|([(]?[0-9]{4}[)]?))\s*[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?([-\s\.]?[0-9]{3})([-\s\.]?[0-9]{3,4})"/>
        <label class="form-label">{{$field->question}}</label>
    </div>
   {{-- @if($detail->help_info !="") --}}
    <div class="help-info">{{$other_info['HelpInfo']}}</div>
    {{-- @endif --}}
</div>
