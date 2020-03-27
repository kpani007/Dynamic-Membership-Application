@php
    $answers = json_decode($answer, true);
@endphp
@if ($other_info)
    <label class="form-label">{{$field->question}}</label>
    <div class="body table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                     @foreach($other_info[0]['Columns'] as $column)
                        <th>{{$column['Header']}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
               @foreach ($other_info[1]['Rows'] as $row)
                   <tr>
                      @foreach ($other_info[0]['Columns'] as $column)
                           <td>
                                @if ($column['InputType'] =='Label')
                               <b> {{$row['RowLabel']}}</b>
                            @else
                                @switch($column['InputType'])
                                    @case('table-quantity')
                                        <div class="input-group spinner" data-trigger="spinner">
                                             <div class="form-line">
                                                <input type="text" class="form-control text-center" name="{{$field->slug.'['. Str::slug('row-'.$row["Id"]).']'.'['.Str::slug('column-'.$column["Id"]).']'}}" value="{{$answers[Str::slug('row-'.$row["Id"])][Str::slug('column-'.$column["Id"])]}}" data-rule="quantity"/>
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
                                        @break
                                    @default
                                        <div class="form-line">
                                            <input type="{{$column['InputType']}}" class="form-control"  name="{{$field->slug.'['. Str::slug('row-'.$row["Id"]).']'.'['.Str::slug('column-'.$column["Id"]).']'}}" value="{{$answers[Str::slug('row-'.$row['Id'])][Str::slug('column-'.$column["Id"])]}}"/>
                                        </div>
                                @endswitch
                            @endif
                           </td>
                      @endforeach
                   </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="body table-responsive">
        <label class="form-label">{{__('errors.invalid_json')}}</label>
    </div>
@endif