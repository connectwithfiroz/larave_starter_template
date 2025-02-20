<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $formData['number'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>
</body>
</html>
