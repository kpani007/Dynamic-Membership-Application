@component('mail::message')
Dear {{$institution->name_english}},

Thank you for updating your information. This is to acknowledge receipt of your updates.

If you have any questions, please email {{setting('officers.membership_officer_name')}}, via <a href="mailto:{{setting('officers.membership_officer_email_address')}}">{{setting('officers.membership_officer_email_address')}}</a> or send WhatsApp message by clicking on the number [{{setting('officers.membership_officer_whatsapp')}}](https://web.whatsapp.com/send?phone={{setting('officers.membership_officer_whatsapp')}}&text=).

{{-- We look forward to you joining the AAU Family. --}}
Visit and like our social media pages.

<a href="https://tv.aau.org/" target="_blank">AAU TV</a> | <a href="https://twitter.com/aau_67" target="_blank">Twitter</a> | <a href ="https://www.facebook.com/AAU67" target="_blank">Facebook</a>


Thanks,<br>
Association of African Universities.
@endcomponent
