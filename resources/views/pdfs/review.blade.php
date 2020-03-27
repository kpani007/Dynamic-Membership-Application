<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>{{setting('site.title')}} -  {{$institution->name_english }}</title>
  </head>
  <body>
      <p>{{$institution->name_english }}, our application has been received, print or download a copy of this file</p>
     <img src="{{public_path("images/aau_logo.png")}}" alt="AAU log" class="responsive"/>
    <h3>AAU Membership Application Form for {{$institution->name_english}} - {{$institution->application_id}}</h3>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Fields</th>
            <th>Response</th>
        </tr>
      </thead>
      <tbody>
        @php
          $row_count = 1;
        @endphp
        @foreach ($sections as $section)
          @foreach ($section->fields->where('status', 'Active')->sortBy('order') as $field)
            @php
              $answer = $responses->where('field_id', $field->id)->first()['answer'];
            @endphp
             <tr>
               <td>{{$row_count++}}</td>
                <td>{{$field->question}}</td>
                <td>
                @switch($field->input_type->name)
                  @case('matrix')
                    {{-- @include('widgets.review.matrix') --}}
                      @break
                    @default
                    {!!$answer!!}
                @endswitch
              </td>
            </tr>
          @endforeach
        @endforeach
      </tbody>
    </table>
  </body>
</html>