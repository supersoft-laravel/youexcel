@extends('website.app', ['title' => 'Career Connect'])

@section('content')

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
        padding: 80px 0;
    }

    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff9800;
        border-radius: 2px;
    }

    .section-title p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 30px auto 0;
        color: #fff;
        opacity: 0.9;
    }
    /* INFO TEXT */
    .career-connect-section .info-text {
      text-align: center;
      max-width: 850px;
      margin: 60px auto 40px;
      font-size: 1.1rem;
      line-height: 1.7;
      color: #000;
    }

    /* CARD DESIGN */
    .career-connect-section .card-box {
      border: none;
      border-radius: 16px;
      padding: 40px 25px;
      background: #fff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: all 0.35s ease;
      position: relative;
      overflow: hidden;
    }

    .career-connect-section .card-box::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 4px;
      background: #ff9800;
      top: 0;
      left: 0;
      transition: 0.4s;
      opacity: 0;
    }

    .career-connect-section .card-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .career-connect-section .card-box:hover::before {
      opacity: 1;
    }

    .career-connect-section .card-icon {
      width: 70px;
      height: 70px;
      background-color: rgba(0, 168, 232, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 25px;
      color: #ff9800;
      font-size: 28px;
    }

    .career-connect-section .card-title {
      font-weight: 700;
      font-size: 1.3rem;
      color: var(--primary);
      margin-bottom: 15px;
    }

    .career-connect-section .card-text {
      color: #000;
      font-size: 1rem;
      margin-bottom: 25px;
    }

    .career-connect-section .btn-youexcel {
      background-color: #ff9800;
      color: #fff;
      font-weight: 600;
      border-radius: 30px;
      padding: 10px 30px;
      transition: all 0.3s ease;
      border: none;
    }

    .career-connect-section .btn-youexcel:hover {
      background-color: var(--primary);
      color: #fff;
      transform: scale(1.05);
    }
</style>

<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative mt-5">
                    <h2>Career Connect</h2>
                    <p>Connecting talent, opportunity, and growth</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container career-connect-section">
    <p class="info-text">
        The YouExcel Career Connect platform links our students, alumni, and industry partners
        to meaningful career opportunities — empowering professional growth, mentorship,
        and real-world success.
    </p>

    <!-- Cards -->
    <div class="row justify-content-center g-4 mb-5">
        <div class="col-md-4">
            <div class="card-box">
                <div class="card-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h5 class="card-title">For Students & Alumni</h5>
                <p class="card-text">Explore exclusive job opportunities, build your network, and connect with industry experts.</p>
                <a href="{{ route('career.connect.form', ['formType' => 'student_alumni']) }}" class="btn btn-youexcel">Get Started</a>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="card-box">
                <div class="card-icon">
                    <i class="bi bi-lightbulb-fill"></i>
                </div>
                <h5 class="card-title">Career Guidance</h5>
                <p class="card-text">Receive personalized career advice, mentoring, and skill development support.</p>
                <a href="{{ route('career.connect.form', ['formType' => 'career_guidance']) }}" class="btn btn-youexcel">Get Started</a>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="card-box">
                <div class="card-icon">
                    <i class="bi bi-building-fill-gear"></i>
                </div>
                <h5 class="card-title">For Employers</h5>
                <p class="card-text">Partner with YouExcel to discover, engage, and hire top-performing professionals.</p>
                <a href="{{ route('career.connect.form', ['formType' => 'employer_partnership']) }}" class="btn btn-youexcel">Get Started</a>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Show delivery options only when Courier selected -->
<script>

</script>