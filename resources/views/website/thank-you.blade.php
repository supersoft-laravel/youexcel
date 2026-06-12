<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You | YouExcelTraining.com</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --primary-blue: #044389;
        --primary-blue-dark: #03356d;
        --accent-blue: #6ca0dc;
        --light-blue: #e9f2fc;
        --dark-gray: #333333;
        --medium-gray: #666666;
        --light-gray: #f4f6f9;
        --white: #ffffff;
        --border-gray: #dcdcdc;
        --success-green: #28a745;
        --urgent-red: #e74c3c;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Open Sans", sans-serif;
        background-color: var(--light-gray);
        color: var(--dark-gray);
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
      }

      .thank-you-section {
        flex: 1;
        display: flex;
        align-items: center;
        padding: 50px 0;
      }

      .thank-you-card {
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 50px;
        max-width: 700px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        overflow: hidden;
      }

      .check-circle {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: var(--success-green);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        position: relative;
      }

      .check-icon {
        color: var(--white);
        font-size: 50px;
      }

      .thank-you-title {
        font-family: "Montserrat", sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 20px;
      }

      .thank-you-message {
        font-size: 18px;
        color: var(--medium-gray);
        margin-bottom: 20px;
        line-height: 1.8;
      }

      /* NEW REGISTRATION NOTICE STYLES */
      .registration-notice {
        background-color: #fff9e6;
        border: 2px solid #ffcc00;
        border-radius: 10px;
        padding: 25px;
        margin: 30px 0;
        text-align: center;
        position: relative;
      }
      
      .notice-title {
        font-family: "Montserrat", sans-serif;
        font-size: 22px;
        font-weight: 700;
        color: var(--urgent-red);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      
      .notice-title i {
        margin-right: 10px;
        font-size: 26px;
      }
      
      .notice-content {
        text-align: left;
        font-size: 18px;
        line-height: 1.8;
        color: #5c3d00;
      }
      
      .notice-item {
        display: flex;
        margin-bottom: 15px;
        align-items: flex-start;
      }
      
      .notice-item i {
        margin-right: 12px;
        font-size: 20px;
        min-width: 24px;
        color: var(--primary-blue);
      }
      
      .deadline-highlight {
        background-color: #ffebee;
        border-radius: 6px;
        padding: 8px 15px;
        display: inline-block;
        color: var(--urgent-red);
        font-weight: 600;
        margin-top: 10px;
        border: 1px dashed var(--urgent-red);
      }
      
      .whatsapp-link {
        color: var(--primary-blue);
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px dashed var(--primary-blue);
        transition: all 0.2s;
      }
      
      .whatsapp-link:hover {
        color: var(--primary-blue-dark);
        border-bottom: 1px solid var(--primary-blue-dark);
      }
      /* END NEW STYLES */

      .action-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
      }

      .btn {
        display: inline-block;
        padding: 14px 32px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 16px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-family: "Montserrat", sans-serif;
        cursor: pointer;
      }

      .btn-primary {
        background: var(--primary-blue);
        color: var(--white);
        border: 2px solid var(--primary-blue);
      }

      .btn-primary:hover {
        background: var(--primary-blue-dark);
        border-color: var(--primary-blue-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
      }

      .btn-secondary {
        background: transparent;
        color: var(--primary-blue);
        border: 2px solid var(--primary-blue);
      }

      .btn-secondary:hover {
        background: var(--light-blue);
        transform: translateY(-2px);
      }

      .decoration {
        position: absolute;
        z-index: -1;
        opacity: 0.1;
      }

      .decoration-circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: var(--accent-blue);
        position: absolute;
      }

      .circle-1 {
        top: -80px;
        left: -80px;
      }

      .circle-2 {
        bottom: -100px;
        right: -70px;
      }

      @media (max-width: 768px) {
        .thank-you-card {
          padding: 30px 20px;
        }

        .thank-you-title {
          font-size: 28px;
        }

        .thank-you-message {
          font-size: 16px;
        }
        
        .registration-notice {
          padding: 20px 15px;
        }
        
        .notice-title {
          font-size: 20px;
        }
        
        .notice-content {
          font-size: 16px;
        }

        .action-buttons {
          flex-direction: column;
          align-items: center;
        }

        .btn {
          width: 100%;
          text-align: center;
          margin-bottom: 10px;
        }
      }
    </style>
  </head>
  <body>
    <section class="thank-you-section">
      <div class="container">
        <div class="thank-you-card">
          <div class="decoration decoration-circle circle-1"></div>
          <div class="decoration decoration-circle circle-2"></div>

          <div class="check-circle">
            <i class="fas fa-check check-icon"></i>
          </div>

          <h1 class="thank-you-title">Thank You for Contacting Us!</h1>

            @if(request()->has('project'))
                <!-- NEW REGISTRATION NOTICE SECTION -->
                <!--<div class="registration-notice">-->
                <!--    <h2 class="notice-title">-->
                <!--        <i class="fas fa-exclamation-circle"></i> Complete Your Registration Before-->
                <!--    </h2>-->
                <!--    <h2 class="notice-title">-->
                <!--        7th Dec 2025-->
                <!--    </h2>-->
                    
                <!--    <div class="notice-content">-->
                <!--        <div class="notice-item">-->
                <!--            <i class="fas fa-map-marker-alt"></i>-->
                <!--            <div>Visit YouExcel today OR WhatsApp at -->
                <!--                <a href="https://wa.me/923362586699" class="whatsapp-link">0336-2586699</a>-->
                <!--            </div>-->
                <!--        </div>-->
            
                <!--        <div class="notice-item">-->
                <!--            <i class="fas fa-clock"></i>-->
                <!--            <div>Timings: 9:00 AM – 8:00 PM (Seven days a week)</div>-->
                <!--        </div>-->
            
                <!--        <div class="notice-item">-->
                <!--            <i class="fas fa-envelope"></i>-->
                <!--            <div>Check your email now — we've sent you important next steps to complete your admission</div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="registration-notice">                     
                    <h2 class="notice-title">
                        <i class="fas fa-exclamation-circle"></i> You still have to apply in NAVTTC Portal. Therefore, your registration is incomplete.
                    </h2>
                
                    <div class="notice-content">
                
                        <div class="notice-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>You can also visit YouExcel to register</div>
                        </div>
                
                        <div class="notice-item">
                            <i class="fas fa-clock"></i>
                            <div>Timings: 9:00 AM – 8:00 PM (Seven days a week)</div>
                        </div>
                
                        <div class="notice-item">
                            <i class="fab fa-whatsapp"></i>
                            <div>WhatsApp for more details:
                                <a href="https://wa.me/923346699336" class="whatsapp-link">0334-6699336</a>
                            </div>
                        </div>
                
                        <div class="notice-item">
                            <i class="fas fa-envelope"></i>
                            <div>Check your email now — we've sent you important next steps to complete your admission</div>
                        </div>
                
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="https://youexceltraining.com/" class="btn btn-primary">
                      <i class="fas fa-home"></i> Return to Homepage
                    </a>
                    <a
                      href="https://youexceltraining.com/faqs-navttcsotb1"
                      class="btn btn-secondary"
                    >
                      <i class="fas fa-book"></i> Visit FAQs
                    </a>
                  </div>
            @else
                <!-- Default Thank You Message -->
                <p class="thank-you-message">
                    We've received your submission and our team will get back to you shortly. At YouExcel, we're committed to helping you transform your career with our expert-led training programs.
                </p>
                <!--<p class="thank-you-message">-->
                <!--    We've received your submission and our team will get back to you-->
                <!--    shortly. At YouExcelTraining, we're committed to helping you master-->
                <!--    Excel and transform your career with our expert-led courses.-->
                <!--</p>-->
                  <div class="action-buttons">
                    <a href="https://youexceltraining.com/" class="btn btn-primary">
                      <i class="fas fa-home"></i> Return to Homepage
                    </a>
                    <a
                      href="https://youexceltraining.com/courses"
                      class="btn btn-secondary"
                    >
                      <i class="fas fa-book"></i> Explore Our Courses
                    </a>
                  </div>
            @endif


        </div>
      </div>
    </section>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-313717537"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-313717537');
    </script>
    
    <!-- Event snippet for Thankyou-Page conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-313717537/mL_oCNXXsugaEKHmy5UB',
          'value': 1.0,
          'currency': 'PKR'
      });
    </script>
  </body>
</html>