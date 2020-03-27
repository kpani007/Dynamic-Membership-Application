@extends('layouts.app')
@section('content')
<div class="header bg-blue">
    <h4 class="panel-title">{{ __('Terms and Conditions of membership') }}</h4>
</div>
<div class="text-left">
    <ul class="list-group">
        <li class="list-group-item">Members must remain in good standing with the legally recognized and approved higher education authority in the country in which they operate.</li>
        <li class="list-group-item">Members will only be admitted on payment of the appropriate annual subscription.</li>
        <li class="list-group-item">Subscriptions are payable annually on <b>1 August</b>.</li>
        <li class="list-group-item">Membership is provisional, subject to the approval of the AAU Governing Board.</li>
        <li class="list-group-item">Membership admissions can take as long as 6 months after the submission of an application.</li>
        <li class="list-group-item">Member institutions are responsible for any unpaid subscription payments and may be subject to suspension if they fail to make any such payments.</li>
        <li class="list-group-item">The AAU reserves the right to revoke the membership of any institution that is in breach of any conditions of membership.</li>
    </ul>
    <p>In applying to become a member of the Association of African Universities, the applicant institution undertakes to observe and perform all the conditions and provisions for the time being in force, or at any time hereafter to be duly brought into force, Constitution, By-Laws and Regulations of the AAU, and nominates the undermentioned person (Vice-Chancellor, President, Principal, Rector, Executive Head) to be its representative until further notice in the event of its admission as a member.</p>
</div>
 <div class="header bg-blue">
        <h4 class="panel-title">{{ __('Confidentiality') }}</h4>
</div>
<div class="text-left">
     <p>The AAU will not sell, share, or rent your personal information to any third party. We will use your email address to send emails to you only in connection with the provision of member services and other related services and products. Please read our Data Privacy Policy</p>
</div>
@endsection