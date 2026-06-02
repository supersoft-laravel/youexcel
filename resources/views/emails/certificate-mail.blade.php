<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certificate Collection/Delivery Request Received – YouExcel</title>
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

        a {
            color: #007bff;
            text-decoration: none;
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
            <h4>Subject: Certificate Collection/Delivery Request Received – YouExcel</h4>

            <p>Dear <strong>{{ $email_data['full_name'] }}</strong>,</p>

            <p>Thank you for submitting the Certificate Delivery/Collection Form.</p>

            <p>We have successfully received your details and payment (if applicable). Our team will now begin processing your request.</p>

            <p><strong>Details You Provided:</strong></p>
            <ul>
                <li><span class="highlight">Course:</span> {{ $email_data['course_name'] }}</li>
                <li><span class="highlight">Batch:</span> {{ $email_data['batch_number'] }}</li>
                <li><span class="highlight">Delivery Mode:</span> {{ $email_data['delivery_mode'] }}</li>
                <li><span class="highlight">Delivery Option:</span> {{ $email_data['delivery_option'] }}</li>
            </ul>

            <p><strong>For On-campus Collection:</strong> Please visit YouExcel between <strong>Monday to Sunday</strong>. The office timings are <strong>9am to 5pm</strong>.</p>

            <p><strong>For Courier Delivery:</strong> Your certificate will be dispatched within <strong>3–5 working days</strong>. A tracking number will be shared with you once available.</p>

            <p>If you selected <strong>international delivery</strong>, our team will reach out to you shortly to confirm the delivery charges.</p>

            <p>If you have any questions, feel free to email us at <a href="mailto:support@youexceltraining.com">support@youexceltraining.com</a> or call us at <strong>+92 336 2586699</strong>.</p>

            <p>Thank you for choosing <strong>YouExcel</strong> as your learning partner.</p>

            <p>Best Wishes,<br><strong>YouExcel Team</strong></p>
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
