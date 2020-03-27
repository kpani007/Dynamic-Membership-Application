@php
    $other_infos = json_decode($field->other_info, true);
@endphp
@if ($other_infos)
    <div class="body table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                     @foreach($other_infos[0]['Columns'] as $column)
                        <th>{{$column['Header']}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
               @foreach ($other_infos[1]['Rows'] as $row)
                   <tr>
                      @foreach ($other_infos[0]['Columns'] as $column)
                           <td>
                                @if ($column['InputType'] =='Label')
                               <b> {{$row['RowLabel']}}</b>                         
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