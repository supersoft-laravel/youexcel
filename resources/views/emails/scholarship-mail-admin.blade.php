<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Scholarship Request Received – YouExcel</title>
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
            <h4>Subject: New Scholarship Request – YouExcel</h4>

            <p>A new scholarship request has been submitted. Below are the details:</p>

            <ul>
                <li><span class="highlight">Name:</span> {{ $email_data['full_name'] }}</li>
                <li><span class="highlight">Email:</span> {{ $email_data['email'] }}</li>
                <li><span class="highlight">Phone:</span> {{ $email_data['phone'] }}</li>
                <li><span class="highlight">Course:</span> {{ $email_data['course_name'] }}</li>
                <li><span class="highlight">Current Education:</span> {{ $email_data['current_education'] }}</li>
                <li><span class="highlight">DOB:</span> {{ $email_data['dob'] }}</li>
                <li><span class="highlight">Address:</span> {{ $email_data['address'] }}</li>
                <li><span class="highlight">Employment Status:</span> {{ $email_data['employement_status'] }}</li>
                <li><span class="highlight">Company:</span> {{ $email_data['company_name'] }}</li>
                <li><span class="highlight">Designation:</span> {{ $email_data['designation'] }}</li>
                <li><span class="highlight">Reason:</span> {{ $email_data['reason'] }}</li>
            </ul>

            <p>Please log in to the admin panel to view or process this request.</p>

            <p>--<br>This is an automated notification from the Scholarship Request System.</p>
        </div>

        <div class="footer">
            YouExcel Training Center<br>
            support@youexceltraining.com<br>
            +92 336 2586699
        </div>
    </div>
</body>
</html>
