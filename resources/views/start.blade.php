@extends('layouts.template')
@section('content')
<div class="text-right">
    <a href="{{url('apply/'.$sections->first()->slug)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Start Application</a>
</div>
<p class="header">
    We are glad your institution has expressed interest in joining the <b>Association Of African Universities</b>. All fields are <b><u>required</u></b>, unless otherwise stated. Uncompleted forms can be saved, exited and continued at another time. The application form consists of <b>{{$sections->count()}} sections</b>. After every section click on ‘<b>save and continue</b>’ to proceed with your application. Also ensure that all fields are filled in completely and correctly. Please make sure you have read the <a href="https://www.aau.org/members/how-to-join-aau/" target="_blank">Instructions</a> clearly and also refer to the <a href="http://www.aau.org/subs/membership/" target="_blank">Membership List</a> to ensure that your institution is not already a member
</p>
    @include('layouts.requirements')
<div class="text-right">
<a href="{{url('apply/'.$sections->first()->slug)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Start Application</a>
</div>
@endsection