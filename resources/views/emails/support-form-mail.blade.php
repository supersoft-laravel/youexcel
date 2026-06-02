<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>YouExcel Training Opportunity</title>
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

        .header {
            text-align: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            margin-top: 20px;
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

        a {
            color: #007bff;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 4px;
            text-decoration: none;
        }

        ul {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!--<div class="header">-->
        <!--    <img src="https://youexceltraining.com/logo.png" alt="YouExcel Logo">-->
        <!--</div>-->

        <div class="content">

            <p>Dear <strong>{{ $email_data['name'] }}</strong>,</p>

            <p>
                Thank you for reaching out to YouExcel Support.
            </p>

            <p>
                We’ve received your request and our team is currently reviewing the details. One of our support representatives will contact you shortly via email or WhatsApp using the information you provided.
            </p>
            <p>We appreciate your patience and thank you for being a part of YouExcel.</p>
        </div>

        <div class="footer">
            Warm regards,<br>
            YouExcel Support Team<br>
            Email: Support@youexceltraining.com<br>
            Cell: +92 334 5669933
        </div>
    </div>
</body>

</html>
