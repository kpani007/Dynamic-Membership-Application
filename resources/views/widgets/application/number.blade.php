<div class="input-group spinner" data-trigger="spinner" >
    <div class="form-group ">
        <p>{{$field->question}}</p>
        <div class="form-line ">
        <input type="text" class="form-control" name="{{$field->slug}}" value={{$responses->where('field_id', $field->id)->first()['answer']}} data-rule="quantity"/>
    </div>
    </div>
    <span class="input-group-addon">
        <a href="javascript:;" class="spin-up" data-spin="up">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
        <a href="javascript:;" class="spin-down" data-spin="down">
            <i class="glyphicon glyphicon-chevron-down"></i>
        </a>
    </span>
</div>