<!DOCTYPE html>
<html>
<head>
    <title>Verify your email address</title>
</head>
<body>
    <h1>Verify your email address</h1>
    <p>Thank you for registering! Please click the link below to verify your email address:</p>
    <a href="{{ url('verify-email/'. $user->email_verification_token) }}">Verify Email Address</a>
</body>
</html>