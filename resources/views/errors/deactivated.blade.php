<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Account Deactivated | YouExcel Training</title>
    <!-- Bootstrap 5 CSS + Icons + Google Fonts for refined typography -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Font: Inter for modern, clean look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
            margin: 0;
        }

        /* main card / wrapper – soft elevated panel */
        .deactivation-card {
            max-width: 640px;
            width: 100%;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(0px);
            border-radius: 2rem;
            box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.2), 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
            padding: 2.2rem 1.8rem 2.8rem 1.8rem;
            border: 1px solid rgba(255,255,255,0.5);
        }

        @media (min-width: 576px) {
            .deactivation-card {
                padding: 2.8rem 2.5rem 3.2rem 2.5rem;
            }
        }

        .emoji-shield {
            font-size: 5.5rem;
            line-height: 1.2;
            background: linear-gradient(145deg, #e11d48, #be123c);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-shadow: 0 5px 12px rgba(190, 18, 60, 0.12);
            display: inline-block;
            margin-bottom: 0.25rem;
        }

        .status-badge {
            background: #fee2e2;
            color: #b91c1c;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.3rem 1rem;
            border-radius: 40px;
            display: inline-block;
            letter-spacing: 0.3px;
            backdrop-filter: blur(2px);
        }

        .btn-custom-primary {
            background: #0f3b5f;
            border: none;
            font-weight: 500;
            padding: 0.7rem 1.5rem;
            border-radius: 60px;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .btn-custom-primary:hover {
            background: #0b2e4a;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(15, 59, 95, 0.2);
        }

        .btn-custom-danger {
            background: #e11d48;
            border: none;
            font-weight: 500;
            padding: 0.7rem 1.5rem;
            border-radius: 60px;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .btn-custom-danger:hover {
            background: #be123c;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(225, 29, 72, 0.2);
        }

        .support-text {
            font-size: 0.95rem;
            color: #334155;
            background: #f8fafc;
            padding: 0.6rem 1rem;
            border-radius: 80px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .illustration-meta {
            max-width: 220px;
            opacity: 0.9;
            filter: drop-shadow(0 12px 18px rgba(0,0,0,0.06));
        }

        hr {
            opacity: 0.4;
            width: 80px;
            margin: 1.2rem auto;
        }

        a {
            text-decoration: none;
        }

        /* subtle spacing */
        .action-buttons {
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-note {
            font-size: 0.75rem;
            color: #6c757d;
        }

        /* hover effect on card */
        .deactivation-card:hover {
            box-shadow: 0 30px 50px -15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="deactivation-card text-center">
    <div class="mb-3">
        <span class="status-badge"><i class="bi bi-shield-exclamation me-1"></i> Access restricted</span>
    </div>

    <!-- main heading -->
    <h1 class="mb-3 fw-bold" style="color: #0c2e42; font-size: 1.9rem;">Your Account Has Been <span style="color: #e11d48;">Deactivated</span></h1>
    
    <!-- description paragraph -->
    <p class="mb-4 text-secondary px-2" style="font-size: 1rem; max-width: 480px; margin-left: auto; margin-right: auto;">
        It looks like your account is currently inactive. Please contact our support team if you believe this is a mistake or need assistance.
    </p>
    
    <div class="d-flex action-buttons justify-content-center mb-4">
        <a href="#" class="btn btn-custom-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </div>
    
    <!-- hidden logout form (POST to logout route) -->
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
    </form>
    
    <!-- help note: quick support reference -->
    <div class="support-text mx-auto mb-4">
        <i class="bi bi-envelope-paper"></i>
        <span>support@youexceltraining.com</span>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>