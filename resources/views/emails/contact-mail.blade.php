<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form submission from the website.</h2>
    <p>Date: {{ Now() }}</p>
    <p>Name: {{ $details['name'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html>