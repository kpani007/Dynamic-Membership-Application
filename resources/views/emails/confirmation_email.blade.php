@component('mail::message')

Dear {{$institution->name_english}},

Thank you for applying to join the Association of African Universities. This is to acknowledge receipt of your application. Kindly note that the AAU Governing Board will review your application and feedback will be sent to you within <b>the next 6 months</b>.

If you have any questions, please email {{setting('officers.membership_officer_name')}}, via <a href="mailto:{{setting('officers.membership_officer_email_address')}}">{{setting('officers.membership_officer_email_address')}}</a> or send WhatsApp message by clicking on the number [{{setting('officers.membership_officer_whatsapp')}}](https://web.whatsapp.com/send?phone={{setting('officers.membership_officer_whatsapp')}}&text=).

In the meantime please visit and like our social media pages.

<a href="https://tv.aau.org/" target="_blank">AAU TV</a> | <a href="https://twitter.com/aau_67" target="_blank">Twitter</a> | <a href ="https://www.facebook.com/AAU67" target="_blank">Facebook</a>




Yours in the Service of Higher Education in Africa,<br>
<!-- {{ config('app.name') }} -->
SECRETARY GENERAL <br />
Association of African Universities.
@endcomponent
