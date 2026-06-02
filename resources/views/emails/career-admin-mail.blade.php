<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Career Submission</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .footer { font-size: 12px; color: #555; margin-top: 30px; }
    </style>
</head>
<body>
    <p><strong>New career application received:</strong></p>

    <ul>
        <li><strong>Name:</strong> {{ $email_data['name'] }}</li>
        <li><strong>Cell No:</strong> {{ $email_data['cellno'] }}</li>
        <li><strong>Position Applied:</strong> {{ $email_data['position'] }}</li>
        @if(!empty($email_data['coverletter']))
            <li><strong>Cover Letter:</strong> {{ $email_data['coverletter'] }}</li>
        @endif
        @if(!empty($email_data['cfma']))
            <li><strong>Additional Note:</strong> {{ $email_data['cfma'] }}</li>
        @endif
    </ul>

    <p>The applicant's resume is attached to this email.</p>

    <div class="footer">
        Warm regards,<br>
        YouExcel Team<br>
        Suite: 503-505, 5th Floor, Al Samad Tower,<br>
        Block 13-B, Gulshan-e-Iqbal, Main University Road,<br>
        Karachi, Pakistan.
    </div>
</body>
</html>
