<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YouExcel Training</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .footer { font-size: 12px; color: #555; margin-top: 30px; }
    </style>
</head>
<body>
    <p>Dear {{ $email_data['name'] }},</p>

    <p>Thank you for applying for the <strong>{{ $email_data['position'] }}</strong> role at YouExcel.
We have successfully received your application, and our recruitment team will review it in due course.</p>

    <p>
        If your qualifications align with our requirements, we will contact you regarding the next steps in the selection process.
    </p>

    <p>We appreciate your interest in joining YouExcel and wish you success in your career.</p>

    <div class="footer">
        Best regards,<br>
        HR Department,<br>
        YouExcel<br>
        Suite: 503-505, 5th Floor, Al Samad Tower,<br>
        Block 13-B, Gulshan-e-Iqbal, Main University Road,<br>
        Karachi, Pakistan.
    </div>
</body>
</html>
