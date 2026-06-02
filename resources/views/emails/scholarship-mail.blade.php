<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scholarship Request Received – YouExcel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .email-container {
            max-width: 650px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 30px;
            border-radius: 8px;
        }
        .content {
            margin-top: 10px;
            font-size: 15px;
            line-height: 1.6;
        }
        .footer {
            font-size: 12px;
            color: #555;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
        .highlight {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="content">
            <h4>Subject: Scholarship Request Received – YouExcel</h4>

            <p>Dear <strong>{{ $email_data['full_name'] }}</strong>,</p>

            <p>Thank you for submitting your scholarship request. We have received your application successfully and our admissions team will review it shortly.</p>

            <p><strong>Submitted Details:</strong></p>
            <ul>
                <li><span class="highlight">Email:</span> {{ $email_data['email'] }}</li>
                <li><span class="highlight">Phone:</span> {{ $email_data['phone'] }}</li>
                <li><span class="highlight">Course Name:</span> {{ $email_data['course_name'] }}</li>
                <li><span class="highlight">Current Education:</span> {{ $email_data['current_education'] }}</li>
                <li><span class="highlight">Date of Birth:</span> {{ $email_data['dob'] }}</li>
                <li><span class="highlight">Employment Status:</span> {{ $email_data['employement_status'] }}</li>
                @if ($email_data['employement_status'] === 'Employed')
                <li><span class="highlight">Company:</span> {{ $email_data['company_name'] }}</li>
                <li><span class="highlight">Designation:</span> {{ $email_data['designation'] }}</li>
                @endif
                <li><span class="highlight">Reason for Applying:</span> {{ $email_data['reason'] }}</li>
            </ul>

            <p>We will get back to you with the status of your application as soon as possible.</p>

            <p>If you have any questions, feel free to reach us at <a href="mailto:support@youexceltraining.com">support@youexceltraining.com</a> or call <strong>+92 336 2586699</strong>.</p>

            <p>Best regards,<br><strong>YouExcel Team</strong></p>
        </div>

        <div class="footer">
            YouExcel Training Center<br>
            Suite: 503-505, 5th Floor, Al Samad Tower,<br>
            Block 13-B, Gulshan-e-Iqbal, Main University Road,<br>
            Karachi, Pakistan.
        </div>
    </div>
</body>
</html>
