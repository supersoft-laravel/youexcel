@extends('website.app', ['title'=>'Policies'])

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
    
    @media print {

        body * {
            visibility: hidden;
        }
    
        .policyContainer,
        .policyContainer * {
            visibility: visible;
        }
    
        .policyContainer {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    
        #printpagebutton {
            display: none;
        }
    }
</style>

<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>Policies</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="policyContainer">
        <section class="py-3">
             <div class="container">
                 <div class="row">
                        <!-- <div class="col-lg-2"></div> -->
                        <div class="col-lg-10 ">
                   
                         <h2 class="border-title2 mb-3">REFUND POLICY</h2>
                        </div>
                       
                         
              <div class="col-lg-2 ">
                                <input class="btn btn-success" id="printpagebutton" type="button" value="Print"
                                onclick="printpage()" style="float: right;"/>
                        </div>
                            
            <p>Except as required by law, payments are non-refundable, including fees and other charges.</p>
            <br>
           <p>Exemptions</p>
           <p>
               Under the laws applicable in your jurisdiction, you may qualify for a refund if you are a citizen of the European Union. 
               As a citizen of the European Union, you are entitled to a full refund during the 14 days after the subscription begins.
           </p>
           <br>
               <p>
               Note: This 14-day period begins when the training course starts,
               i.e. the day you have paid for the subscription fees, and not on the day you first started with your training.
           </p>
           <br>
               <p>
               For any further assistance, please mention your query on <a href="contact">Contact Us page.</a>
           </p>
             </div>
             </div>
        </section>
        
        <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- <div class="col-lg-2"></div> -->
                        <div class="col-lg-12 ">
                   
                            <h2 class="border-title2 mb-3">OTHER POLICIES</h2>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 mt-5 mb-5">
                        <div id="access-arrangements"></div>
                        <h3>Policy for Access Arrangements:</h3>
                        <span id="appeals-procedure"></span>
                        <ul class="mb-5 mt-5">
                            <li>Access arrangements
                                <ul>
                                    <li>Lift services are available with wheel chair access for special needs assistance
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        <h3>Appeals procedure:</h3>
                        <p>Any member of the staff, trainer or trainee – may be an aspirant for training or job has a fair
                            chance of
                            appeal to the Chief Executive Officer if he/she feels aggrieved of any decision of the
                            management. The
                            CEO is accessible through email or any messaging service.
                        </p>
                        <h5>When an appeal is sent below information is required from the learner:</h5>
                        <ul>
                            <li id="diversity-policy">Full name</li>
                            <li>Date of birth</li>
                            <li>Registration number</li>
                            <li>The name of the programme</li>
                            <li>A brief description of the reason for the appeal</li>
                        </ul>
    
                        <h3 class="mt-5">Diversity policy:</h3>
                        <ul>
                            <li>Learners have the right to be treated fairly and equitably; </li>
                            <li>There is equal access to education for learners; </li>
                            <li>Learners are entitled to a study environment free from unlawful discrimination, harassment,
                                vilification, bullying or other adverse and inappropriate behaviours; </li>
                            <li>Diversity is respected and appreciated as contributing to the richness of the teaching and
                                learning
                                environment; and</li>
                            <li>Learners have the right to raise complaints in good faith under YouExcel's complaints
                                procedure
                                without fear of retaliation or victimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

<script>
    function printpage() {
        window.print();
    }
</script>

@endsection