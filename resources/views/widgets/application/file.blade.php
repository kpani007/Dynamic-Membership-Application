<div class="body">
    <label class="form-label">{{$field->question}}</label>
    <div class="form-group">
        <input name="{{$field->slug}}" type="file"  accept=".pdf, .jpeg, .jpg, .png" />
    </div>
    <p class="form-label">File types allowed -.pdf, .jpeg, .jpg, & .png. Maximum size is 2M.</p>
</div>
<label class="form-label">{{$responses->where('field_id', $field->id)->first()['answer']}}</label>
