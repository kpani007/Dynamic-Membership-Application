{{--$answer = $responses->where('field_id', $detail->field->id)->first()['answer'] --}} 
<div class="form-group form-float">
    <div class="form-line">
        <select class="form-control show-tick" name="{{$field->slug}}">
            @foreach($continents as $continent)
            <optgroup label="{{$continent->name}}">
                @foreach($continent->countries->sortBy('name') as $country)
               <option @if($answer == $country->name) selected="selected" @endif value="{{$country->name}}">{{$country->name}} ({{$country->native}})</option>
                @endforeach
            </optgroup>
            @endforeach
        </select>
        <label class="form-label">{{$field->question}}</label>
    </div>
</div>
