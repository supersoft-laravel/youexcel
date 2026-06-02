<style>
        .section-header {
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
            color: white !important;
            padding: 180px 0 40px 0 !important;
            /*margin-top: 120px;*/
            position: relative !important;
            overflow: hidden !important;
        }

        .section-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            padding-bottom: 0px;
        }

        .section-title h2 {
            font-weight: 700;
            color: #fff;
            font-size: 2rem;
            margin-bottom: 20px;
            position: relative;
            line-height: 1.4;
        }

        .section-title p {
            font-size: 1.25rem;
            max-width: 900px;
            margin: 0 auto 10px;
            color: #fff;
            opacity: 0.95;
        }

        .main-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            /* box-shadow: 0 12px 30px rgba(0, 0, 0, .08); */
        }

        /* HERO VIDEO */
        .hero-video {
            border-radius: 14px;
            overflow: hidden;
            /*height: 300px;*/
        }

        .hero-video iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* PRICE CARD */
        .price-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 26px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            text-align: center;
        }

        .price {
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: center;
        }

        .price-lumpsum {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .apply-btn {
            display: block;
            text-align: center;
            width: 100%;
            background: #f8a223;
            color: #fff;
            border: none;
            border-radius: 40px;
            padding: 5px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 26px;
        }

        .apply-btn:hover {
            background: #000;
        }
        
        .apply-btn2 {
            display: block;
            text-align: center;
            width: 100%;
            background: #fff;
            color: #000;
            border: 1px solid #000;
            border-radius: 40px;
            padding: 5px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 26px;
        }

        .apply-btn2:hover {
            border: 1px solid #f8a223;
            background: #f8a223;
            color: #fff;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #8f8f8f;
            font-size: 14px;
        }

        .info-row strong {
            font-weight: 600;
        }

        /* TABS */
        .nav-tabs .nav-link {
            font-weight: 600;
            color: #000;
            margin: 2px;
            border: 1px solid #f8a223;
            border-radius: 6px;
        }

        .nav-tabs .nav-link:hover {
            background: #f8a223;
            color: #fff;
            border-radius: 6px;
        }

        .nav-tabs .nav-link.active {
            background: #f8a223;
            color: #fff;
            border-radius: 6px;
        }

        .tab-content {
            padding-top: 20px;
        }

        /* PDF SECTION */
        .pdf-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .08);
            overflow: hidden;
        }

        .pdf-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 18px;
            background: #f5f7f9;
            border-bottom: 1px solid #ddd;
        }

        .pdf-header h6 {
            font-weight: 700;
        }

        .pdf-viewer {
            width: 100%;
            height: 520px;
        }

        .pdf-viewer iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* SALIENT FEATURES – CLEAN MATCH */
        .salient-wrapper {
            background: #ffffff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .06);
        }

        .salient-card {
            height: 100%;
            background: #fff;
            border-radius: 14px;
            padding: 28px 22px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, .06);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .salient-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, .12);
        }

        .salient-card img {
            width: 56px;
            margin-bottom: 18px;
        }

        .salient-card h6 {
            font-weight: 600;
            margin-bottom: 8px;
            color: #212529;
        }

        .salient-card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 0;
        }

        /* OUTCOMES SECTION */
        .outcomes-wrapper {
            background: #ffffff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .06);
        }

        .outcome-card {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 20px 18px;
            background: #f8f9fa;
            border-radius: 12px;
            border-left: 5px solid transparent;
            height: 100%;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .outcome-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, .1);
        }

        .outcome-card i {
            font-size: 22px;
            margin-top: 2px;
        }

        .outcome-card p {
            font-size: 14.5px;
            color: #333;
            margin-bottom: 0;
            line-height: 1.5;
        }

        /* Border Colors */
        .border-primary {
            border-left-color: #0d6efd;
        }

        .border-purple {
            border-left-color: #6610f2;
        }

        .border-success {
            border-left-color: #198754;
        }

        .border-warning {
            border-left-color: #fd7e14;
        }

        .border-danger {
            border-left-color: #dc3545;
        }

        .border-info {
            border-left-color: #20c997;
        }

        /*Trainer Section */
        .trainer-section {
            background: #f8f9fa;
        }

        .trainer-title {
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-block;
            padding-bottom: 8px;
            border-bottom: 3px solid #ffc107;
        }

        .trainer-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .trainer-name {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .trainer-card p {
            font-size: 15px;
            color: #555;
            line-height: 1.8;
        }

        .trainer-image-wrapper {
            position: relative;
            display: inline-block;
        }

        .trainer-image-wrapper img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ffc107;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            display: block;
        }

        .trainer-badge {
            position: absolute;
            top: 10px;
            /* distance from top of image */
            right: 10px;
            /* distance from right edge of image */
            background: #ffc107;
            color: #000;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            white-space: nowrap;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Value Additions Section */
        .value-section {
            background: #f8f9fa;
        }

        .value-title {
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding-bottom: 8px;
            border-bottom: 3px solid #ffc107;
            display: inline-block;
        }

        .value-card {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            height: 100%;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            border-left: 5px solid;
        }

        .value-card i {
            font-size: 22px;
            margin-top: 3px;
        }

        .value-card p {
            margin: 0;
            font-size: 15px;
            color: #444;
            line-height: 1.6;
        }

        .text-purple {
            color: #6f42c1;
        }
    </style>