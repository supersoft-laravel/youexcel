<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Contact Submission</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .footer { font-size: 12px; color: #555; margin-top: 30px; }
    </style>
</head>
<body>
    <p><strong>New Contact Submission Received</strong></p>

    <p><strong>Name:</strong> {{ $email_data['name'] }}</p>
    <p><strong>Email:</strong> {{ $email_data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $email_data['phone'] }}</p>
    <p><strong>Courses Interested:</strong> {{ $email_data['coursesintrested'] }}</p>
    <p><strong>Message:</strong><br>{{ $email_data['comments'] }}</p>

    <div class="footer">
        This email was automatically sent by the contact form on the YouExcel Training website.
    </div>
</body>
</html>
