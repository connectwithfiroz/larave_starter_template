<!-- resources/views/emails/donation_success.blade.php -->
<p>Dear Volunteer,</p>
<p>Thank you for your registration!</p>
<p>You can download your registration receipt here: <a href="{{ $data['receipt_url'] }}">{{ $data['receipt_url'] }}</a></p>
<p>Best Regards,<br>{{ config('app.name') }}</p>
