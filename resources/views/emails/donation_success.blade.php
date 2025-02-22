<!-- resources/views/emails/donation_success.blade.php -->
<p>Dear Donor,</p>
<p>Thank you for your generous donation!</p>
<p>You can download your donation receipt here: <a href="{{ $donationUrl }}">{{ $donationUrl }}</a></p>
<p>Best Regards,<br>{{ config('app.name') }}</p>
