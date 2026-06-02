@extends('website.app', ['title'=>'Privacy Policy'])

@section('content')

<section class="pt-5 mt-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="row">
                    <!-- <div class="col-lg-2"></div> -->
                    <div class="col-lg-10 ">
                        
                        <h2>PRIVACY POLICY</h2>
                    </div>
                      <div class="col-lg-2 ">
                          <input class="btn btn-success" id="printpagebutton" type="button" value="Print"
                            onclick="printpage()" style="float: right;" />
                         </div> 
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-12 printPage">
                        <h3>Please read YouExcel's privacy policy.</h3>
                        <p>This Privacy Policy explains how YouExcel collects, uses, discloses, and retains personal
                            information, including information collected through websites, blogs, apps (including but
                            not limited
                            to messaging services), and our correspondence with you and when providing you with our
                            training
                            courses, services or other products etc.</p>
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse1">
                                            1. Your Consent
</a>
                                    </h5>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        By giving consent to the privacy policy YouExcel, it shell be construed that you
                                        have fully
                                        comprehended the privacy policy and agree to abide by all the condition
                                        mentioned therein. You
                                        may withdraw your consent at any time, subject to legal or contractual
                                        restrictions and on reasonable
                                        notice to YouExcel, but then you might not be able to proceed with your intended
                                        interactions or
                                        transactions with YouExcel or receive the full benefits of YouExcel’s training
                                        programs, service and
                                        other products etc. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse2">
                                            2.Data Controller
</a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse show" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        For purposes of the General Data Protection Regulation (the “GDPR”), YouExcel
                                        shall be the data
                                        controller under the data protection law in respect of your personal information
                                        collected and used
                                        through your use of the website, products, and services.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse3">
                                            3.Personal Information Defined
</a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        In this Privacy Policy, “personal information” means information about you and
                                        which identifies
                                        you, such as your name and email address, but does not include (to the extent
                                        permitted by law)
                                        information that is publicly available in a telephone directory or the business
                                        contact information that
                                        enables an individual to be contacted at a place of business. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse4">
                                            4. Personal Information YouExcel
                                            <span class="privacy-br">Collects</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse show" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Personal Information YouExcel</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Personal contact information </td>
                                                    <td>Name, personal address, personal email address, and personal
                                                        telephone number</td>
                                                </tr>
                                                <tr>
                                                    <td>Business contact information</td>
                                                    <td>Name, business address, business email address, and business
                                                        telephone number</td>
                                                </tr>
                                                <tr>
                                                    <td>Account information</td>
                                                    <td>Username and account preferences</td>
                                                </tr>
                                                <tr>
                                                    <td>Payment information </td>
                                                    <td>Payment card number (credit or debit card), bank
                                                        account number, billing address, or other financial
                                                        account numbers and account details</td>
                                                </tr>
                                                <tr>
                                                    <td>Financial aid application information</td>
                                                    <td>Contact information, link to social media profile,
                                                        education and employment information, annual
                                                        income, country of residence, aid preferences, answers
                                                        to questions about your financial situation, and academic or
                                                        professional achievements </td>
                                                </tr>
                                                <tr>
                                                    <td>Course and enrolment information</td>
                                                    <td>Online registration information, record of attendance,
                                                        and assessments
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Social Media</td>
                                                    <td>Information relating to your social media profiles,
                                                        including (but not limited to) LinkedIn</td>
                                                </tr>
                                                <tr>
                                                    <td>Other information you provide to us </td>
                                                    <td>For example, if you write a review of our programs,
                                                        submit a “Contact Us” form, or provide other
                                                        information to us in the course of your use of our
                                                        websites, products, or services
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse5">
                                            5. How YouExcel Collects Information
</a>
                                    </h5>
                                    
                                </div>
                                <div id="collapse5" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <h5 class="mt-3">(a) Information You Provide</h5>
                                        <p>You may be asked to voluntarily give your personal information to YouExcel
                                            when you interact with
                                            YouExcel. This information may be provided:</p>
                                        <ol>
                                            <li>in the course of communications between you and us (including by phone,
                                                email, chat, in
                                                person, via social media, website, or otherwise);
                                            </li>
                                            <li>when you register for an account;
                                            </li>
                                            <li>when you request information about or use a program or service
                                                provided by us;
                                            </li>
                                            <li>when you subscribe to a newsletter;</li>
                                            <li>when you attend alumni programs or the events organized or participated
                                                by YouExcel;</li>
                                            <li>when you report a problem with our websites, products our services.</li>
                                        </ol>
                                        <p class="mt-4">In certain circumstances, you can choose not to provide certain
                                            requested personal information, but
                                            then you might not be able to proceed with your intended interaction or
                                            transaction with YouExcel or
                                            otherwise receive the full benefit of the desired program or service.</p>

                                        <p class="mt-4">If you give YouExcel the personal information of another
                                            individual, then you are solely responsible
                                            for complying with all applicable laws, including obtaining the individual’s
                                            valid consent regarding
                                            your collection and disclosure of the personal information to YouExcel and
                                            to YouExcel’s use,
                                            disclosure, and retention of the personal information.</p>

                                        <h5 class="mt-3">(b) Automated Collection</h5>
                                        <p >YouExcel may automatically collect certain information regarding
                                            your use of YouExcel’s websites,
                                            such as the dates and times that you use the websites, the browsers,
                                            operating systems, software and
                                            devices that you use to access the websites, and details of your use of the
                                            websites.</p>

                                        <p class="mt-4">YouExcel’s websites, email messages, and advertisements may use
                                            technologies (e.g. cookies, web
                                            beacons, tokens, pixels, or tags) to collect information that assists
                                            YouExcel to improve its programs,
                                            products, services, communications, and advertising and to prevent fraud.
                                            YouExcel may use
                                            information collected through technological means to recognize you as a user
                                            of YouExcel’s
                                            websites, to facilitate and improve your use of YouExcel’s websites, to
                                            confirm that messages have
                                            been delivered to and opened by you, and to provide you with targeted
                                            advertisements. You may
                                            choose to decline or disable cookies in your web browser or device permits,
                                            but doing so may affect
                                            your ability to access or use certain features of a website. More
                                            information about cookies used for
                                            interest-based advertising is set out in section 5(c) below.
                                        </p>
                                        <p class="mt-4">Some of the information automatically collected by technological
                                            means is non-personal information
                                            (because the information does not identify you), and YouExcel will deal with
                                            that non-personal
                                            information as explained below in this Privacy Policy unless applicable law
                                            requires otherwise</p>

                                        <h5 class="mt-3">(c) Cookies</h5>

                                        <p>Cookies are small files that a site or its service provider transfers to your
                                            computer’s hard drive
                                            through your Web browser (if you allow) that enables the website’s or
                                            service provider’s systems to
                                            recognize your browser and capture and remember certain information. This
                                            enables us to provide
                                            you with improved services and future courses. We may also use cookies to
                                            help us compile
                                            aggregate data about site traffic and site interaction so that we can offer
                                            better site experiences and
                                            tools in the future. You can find out more about how to manage cookies here:
                                        </p>
                                        <a
                                            href="www.allaboutcookies.org/manage-cookies">www.allaboutcookies.org/manage-cookies</a>

                                        <p class="mt-4">You may choose to decline or disable cookies if your web browser
                                            permits, but doing so may affect
                                            your ability to access or use certain features of YouExcel’s websites.
                                            However, you will still be able
                                            to apply for any course, training program or service.</p>

                                        <h5 class="mt-3">(d)Internet-Based Advertising</h5>

                                        <p>YouExcel may use internet-based advertising services (sometimes called
                                            “remarketing” or
                                            “retargeting”) provided by third-party vendors (such as Google, Bing,
                                            LinkedIn, and Facebook) to
                                            display advertisements on third-party websites and social media sites
                                            visited by users of a YouExcel
                                            website. Advertising vendors (such as Google, Bing, LinkedIn and Facebook)
                                            use cookies, pixels or
                                            tokens – unique identifiers of a web browser on a specific computer that are
                                            installed on the
                                            computer when it accesses YouExcel websites – to display ads based on the
                                            computer’s past access
                                            to YouExcel websites. You can opt out of Google’s use of cookies by visiting
                                            Google’s Ads
                                            Settings. You can also opt out of a remarketing use of cookies by visiting
                                            the Network Advertising
                                            Initiative’s consumer opt-out page. For more information, including details
                                            of how to block these
                                            cookies specifically, please see</p>
                                        <a
                                            href="https://support.google.com/analytics/answer/181881">https://support.google.com/analytics/answer/181881</a>

                                        <h5 class="mt-3">(e) Information from Other Sources</h5>

                                        <p>YouExcel may collect personal information from various publicly available
                                            sources and other third
                                            parties that are lawfully entitled to share your personal information with
                                            YouExcel.</p>
                                        <p class="mt-4">If YouExcel refers you to an independent business then YouExcel
                                            may collect from that independent
                                            business, your personal / business information to update your confidential
                                            profile.</p>
                                        <p class="mt-4">YouExcel may combine your personal information collected through
                                            various sources.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">

                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse6">
                                            6. How YouExcel Uses Personal <span class="privacy-br">Information</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <h5 class="mt-3">(a) General</h5>
                                        <p>Under data protection law, we can only use your personal information if we
                                            have a proper reason for
                                            doing so, for example:</p>

                                        <ul class="mt-4">
                                            <li>to comply with our legal and regulatory obligations;</li>
                                            <li>for our legitimate interests (see below) or those of a third party;</li>
                                            <li>for the performance of our contract with you or your commitments to take
                                                steps at your
                                                request before entering into a contract.
                                            </li>
                                        </ul>
                                        <h5 class="mt-3">(b) Purpose</h5>
                                        <p>YouExcel may use your personal information collected by YouExcel for
                                            purposes relating to or
                                            arising from your relationship and transactions with YouExcel and as
                                            otherwise set out in this
                                            Privacy Policy or permitted by applicable law.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">

                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse7">
                                            7. How YouExcel Discloses and Shares <span class="privacy-br">Personal
                                                Information </span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <h5 class="mt-3">(a)General</h5>
                                        <p>YouExcel discloses your personal information for purposes relating to or
                                            arising from your
                                            relationship and transactions with YouExcel and as otherwise set out in this
                                            Privacy Policy or
                                            permitted by applicable law.
                                        </p>

                                        <h5 class="mt-3">(b)Specific Consents</h5>
                                        <p>YouExcel may disclose your personal information in accordance with express or
                                            implied consent
                                            that you give during your interactions and transactions with YouExcel.</p>

                                        <h5 class="mt-3">(c) Affiliates</h5>
                                        <p>YouExcel and its affiliates may share your personal information with each
                                            other and use it in
                                            connection with our relationship with you for the provision of our programs,
                                            products and services.</p>

                                        <h5 class="mt-3">(d) Referred Transactions</h5>
                                        <p>If YouExcel refers you to an independent business for a proposed transaction,
                                            then YouExcel may
                                            disclose your personal information to the independent business to facilitate
                                            the proposed transaction,
                                            and in those circumstances, YouExcel has no control over, or responsibility
                                            or liability for the use,
                                            disclosure or retention of your personal information by the independent
                                            business, and the use,
                                            disclosure and retention of the disclosed information by the independent
                                            business is not subject to
                                            this Privacy Policy.</p>

                                        <h5 class="mt-3">(e) Suppliers and Service Providers</h5>
                                        <p>YouExcel may disclose your personal information to its suppliers and
                                            third-party service providers
                                            to assist YouExcel in the provision of information, products, and services
                                            to you; to provide services
                                            to YouExcel; to assist YouExcel to use your personal information as set out
                                            in this Privacy Policy;
                                            and as otherwise permitted by applicable law.
                                        </p>
                                        <h5 class="mt-3">(f) ProfessionalAdvisers</h5>
                                        <p>YouExcel may disclose your personal information to our professional advisers
                                            including
                                            accountants, lawyers, and other professional advisers that assist us in
                                            carrying out our business
                                            activities.
                                        </p>
                                        <h5 class="mt-3">(g) Law Enforcement/Legal Disclosures</h5>
                                        <p>YouExcel may disclose your personal information as required or authorized by
                                            applicable law,
                                            including to comply with a summon, warrant, or court or arbitral order or
                                            litigation disclosure
                                            obligation. YouExcel may disclose your personal information to law
                                            enforcement agencies or other
                                            independent organizations if YouExcel reasonably believes the disclosure is
                                            necessary or appropriate
                                            in connection with national security, law enforcement, or other issues of
                                            public importance, or if
                                            YouExcel reasonably believes the disclosure is necessary or appropriate to
                                            protect and enforce
                                            YouExcel’s legal rights, interests and remedies or to protect the rights,
                                            interests, business, operations
                                            or customers of YouExcel or other persons (including to detect and prevent
                                            fraud and other illegal
                                            activities, to enforce any of the terms of use, terms of service or other
                                            agreements that govern access
                                            to or use of any of YouExcel’s products or services). YouExcel has no
                                            control over, or responsibility
                                            or liability for, the use, disclosure or retention of your personal
                                            information by the agencies,
                                            independent organizations or other persons to whom YouExcel discloses the
                                            information in the
                                            foregoing circumstances, and the use, disclosure and retention of the
                                            disclosed information by those
                                            agencies, independent organizations or other persons is not subject to this
                                            Privacy Policy.</p>
                                        <h5 class="mt-3">(h) Business Transactions</h5>
                                        <p>YouExcel may disclose your personal information in connection with a proposed
                                            or actual business
                                            transaction in which YouExcel is involved (e.g. a corporate amalgamation,
                                            reorganization, merger or
                                            acquisition, or the sale or transfer of some or all of YouExcel’s business
                                            or assets), but YouExcel
                                            will require the information recipient to agree to protect the privacy of
                                            your personal information in a
                                            manner that is consistent with this Privacy Policy and applicable law.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse8">
                                            8. Location and Transfer of Personal<span class="privacy-br">
                                                Information</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse8" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>YouExcel and its service providers may process, store, and use your personal
                                            information at facilities
                                            in Karachi, Pakistan and at such other place(s) where YouExcel has, or will
                                            create it’s business
                                            interest.
                                        </p>
                                        <p class="mt-4">For further information on the steps taken relating to such
                                            transfers and the safeguards in place,
                                            please contact our Chief Executive Officer using the details listed at the
                                            end of this Privacy Policy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse9">
                                            9. Retention of Personal Information
</a>
                                    </h5>
                                </div>
                                <div id="collapse9" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>We will retain your personal information for the period reasonably necessary
                                            for the purposes set out
                                            and to comply with YouExcel’s legal obligations or enforce or protect
                                            YouExcel’s legal rights, or a
                                            period required or permitted by applicable law. YouExcel will delete or
                                            dispose of your personal
                                            information, or depersonalize the information when YouExcel is no longer
                                            reasonably required to
                                            retain the information for the purposes set out in this Privacy Policy.
                                        </p>
                                        <p class="mt-4">Please note that all of the above retention periods may be
                                            extended where we need to preserve and
                                            use personal information for the purposes of bringing or defending a legal
                                            claim. In such cases, we
                                            will continue to hold and process your personal information for as long as
                                            it is necessary to deal with
                                            the legal proceedings.</p>
                                        <p class="mt-4">For further information as to our retention periods, please
                                            contact our Chief Executive Officer using
                                            the contact details as set out at the end of this Privacy Policy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse10">
                                            10. Do Not Track Signals Tracking <span class="privacy-br">Across Third
                                                Party Websites</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse10" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>Certain mechanisms may allow you to send web browser signals known as “Do Not
                                            Track” (“DNT”)
                                            signals, indicating your choice to disable tracking on our website. We do
                                            not respond to browser and
                                            do not track signals at this time. We may not be aware of or able to honor
                                            and respond to every such
                                            mechanism. More information about “do not track” is available at</p>
                                        <a href="www.allaboutdnt.org">www.allaboutdnt.org</a>
                                        <p class="mt-4">Third parties, such as our website analytics provider), do not
                                            have authorization from us to track
                                            which websites you visited prior to and after visiting our website. That
                                            said, we cannot control thirdparty tracking and there may be some third
                                            party tracking that occurs without our knowledge or
                                            consent.</p>
                                        <p class="mt-4"></p>
                                        <p class="mt-4"></p>
                                        <p class="mt-4"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse11">
                                            11. Protection of Personal Information
</a>
                                    </h5>
                                </div>
                                <div id="collapse11" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>YouExcel uses reasonable safeguards – including administrative, physical, and
                                            technical security and
                                            safeguarding measures – appropriate to the sensitivity of the personal
                                            information in YouExcel’s
                                            possession or under YouExcel’s control to help protect the information from
                                            unauthorized access,
                                            collection, use, disclosure, deletion or similar risks. Nevertheless,
                                            security risks cannot be eliminated
                                            and YouExcel cannot guarantee that your personal information will not be
                                            accessed, used, disclosed,
                                            or deleted in ways not otherwise described in this Privacy Policy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse12">
                                            12. Accuracy and Access to Personal<span class="privacy-br">
                                                Information</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse12" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>YouExcel will rely on you to ensure that the personal information that you
                                            provide to YouExcel is as
                                            accurate, complete and up to date as necessary for the purposes for which
                                            YouExcel uses the
                                            personal information. You will promptly notify YouExcel of any changes to
                                            the personal information
                                            that you provide to YouExcel using the procedures made available for that
                                            purpose by YouExcel or
                                            by contacting YouExcel’s Chief Executive Officer using the contact
                                            information noted below.</p>

                                        <p class="mt-4">You have certain rights with respect to your personal
                                            information. The rights may only apply in
                                            certain circumstances and are subject to certain exemptions. Please see the
                                            table below for a
                                            summary of your rights. You can exercise these rights using the contact
                                            details at the end of this
                                            Privacy Policy.
                                        </p>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Right</th>
                                                    <th scope="col">Summary of your rights</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Right of access to
                                                        your personal
                                                        information </td>
                                                    <td>You have the right to receive a copy of your personal
                                                        information that
                                                        we hold about you, subject to certain exemptions.</td>
                                                </tr>
                                                <tr>
                                                    <td>Right to rectify your personal information</td>
                                                    <td>You have the right to ask us to correct your personal
                                                        information that we hold where it is incorrect or incomplete.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Right to erasure of your personal information:</td>
                                                    <td>You have the right to ask that your personal information be
                                                        deleted in
                                                        certain circumstances. For example (i) where your personal
                                                        information
                                                        is no longer necessary in relation to the purposes for which
                                                        they were
                                                        collected or otherwise used; (ii) if you withdraw your consent
                                                        and there
                                                        is no other legal ground for which we rely on for the continued
                                                        use of
                                                        your personal information; (iii) if you object to the use of
                                                        your personal
                                                        information (as set out below); (iv) if we have used your
                                                        personal
                                                        information unlawfully; or (v) if your personal information
                                                        needs to be
                                                        erased to comply with a legal obligation.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Right to restrict the use of your personal information</td>
                                                    <td>You have the right to suspend our use of your personal
                                                        information in
                                                        certain circumstances. For example (i) where you think your
                                                        personal
                                                        information is inaccurate and only for such period to enable us
                                                        to verify
                                                        the accuracy of your personal information; (ii) the use of your
                                                        personal
                                                        information is unlawful and you oppose the erasure of your
                                                        personal
                                                        information and request that it is suspended instead; (iii) we
                                                        no longer
                                                        need your personal information, but your personal information is
                                                        required by you for the establishment, exercise or defense of
                                                        legal
                                                        claims; or (iv) you have objected to the use of your personal
                                                        information
                                                        and we are verifying whether our grounds for the use of your
                                                        personal
                                                        information override your objection.</td>
                                                </tr>
                                                <tr>
                                                    <td>Right to data portability </td>
                                                    <td>You have the right to obtain personal information that you have
                                                        provided
                                                        to us in a structured, commonly used, and machine-readable
                                                        format and
                                                        for it to be transferred to you or another organization, where
                                                        it is
                                                        technically feasible. The right only applies where the use of
                                                        the personal
                                                        information you provided was with your consent or for the
                                                        performance
                                                        of a contract with you, and when the use of your personal
                                                        information is
                                                        carried out by automated (i.e. electronic) means</td>
                                                </tr>
                                                <tr>
                                                    <td>Right to object to the use of your personal information</td>
                                                    <td>You have the right to object to the use of your personal
                                                        information in
                                                        certain circumstances. For example (i) where you have grounds
                                                        relating
                                                        to your particular situation and we use your personal
                                                        information for our
                                                        legitimate interests (or those of a third party); and (ii) if
                                                        you object to the
                                                        use of your personal information for direct marketing purposes
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Right to withdraw consent</td>
                                                    <td>You have the right to withdraw your consent at any time where we
                                                        rely
                                                        on consent to use your personal information.</td>
                                                </tr>
                                                <tr>
                                                    <td>Right to complain to the relevant data protection authority
                                                    </td>
                                                    <td>You have the right to complain to the relevant data protection
                                                        authority
                                                        where you think we have not used your personal information in
                                                        accordance with data protection law
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse13">
                                            13. Non-Personal Information
</a>
                                    </h5>
                                </div>
                                <div id="collapse13" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>YouExcel may use personal information to create and collect non-personal
                                            information (information
                                            that is not about an identifiable individual), including personal
                                            information that has been aggregated
                                            or otherwise depersonalized so that the information no longer relates to an
                                            identifiable individual.
                                            YouExcel may use, disclose, transfer, and retain non-personal information
                                            for any purpose and in
                                            any manner whatsoever. If non-personal information is combined with personal
                                            information, then
                                            YouExcel will treat the combined non-personal information as personal
                                            information for the purposes
                                            of this Privacy Policy for as long as the non-personal information is
                                            combined with your personal
                                            information.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse14">
                                            14. Other Websites and Businesses
</a>
                                    </h5>
                                </div>
                                <div id="collapse14" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>YouExcel’s websites and correspondence (including emails and messages) may
                                            include
                                            advertisements for programs, products and services offered by independent
                                            businesses or links to
                                            websites operated by independent businesses. YouExcel has no responsibility
                                            or liability for, or
                                            control over, those other websites, online services, or businesses, their
                                            products or services, or their
                                            collection, use, disclosure, or retention of your personal information. This
                                            Privacy Policy does not
                                            apply to the collection, use, disclosure, and retention of your personal
                                            information by those websites,
                                            online services, and independent businesses. If you have questions about how
                                            those websites, online
                                            services, or independent businesses collect, use, disclose or retain
                                            personal information, please
                                            contact the owner or operator of the website, service, or business.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse15">
                                            15. Social Networking and Similar<span class="privacy-br"> Situations</span>
</a>
                                    </h5>
                                </div>
                                <div id="collapse15" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>When you use certain aspects of YouExcel’s websites or other services, or
                                            post information to other
                                            social networking sites (e.g. there may be links to YouExcel’s Facebook,
                                            Instagram, YouTube or
                                            LinkedIn pages or you may be able to “like” a product on your Facebook
                                            account), the personal
                                            information that you post or share in connection with these third-party
                                            sites is visible to other
                                            persons and can be read, collected, used and disclosed by other persons,
                                            including to send unsolicited
                                            messages. As will be evident, in such a case, you will be leaving a YouExcel
                                            website and going to
                                            the third party’s website. Any information provided to such third party
                                            social networking sites and
                                            other sites is governed by their own privacy policies, which you may read on
                                            the applicable site. You
                                            are solely responsible for the personal information that you choose to post
                                            or share in those
                                            situations. YouExcel has no control over, or responsibility or liability
                                            for, the use, disclosure, and
                                            retention of the personal information that you disclose in those situations,
                                            and the use, disclosure,
                                            and retention of the disclosed information is not subject to this Privacy
                                            Policy.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse16">
                                            16. Video Control
</a>
                                    </h5>
                                </div>
                                <div id="collapse16" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>For the purpose of protecting its property and increasing security for
                                            learners and staff, YouExcel
                                            has equipped selected areas of the YouExcel office with video surveillance
                                            cameras. Video
                                            surveillance is used in the public areas, such as entrance areas, corridors
                                            as well as in areas and
                                            rooms which, due to their purpose and equipment, have a special need for
                                            protection and
                                            surveillance; these include admin office.
                                        </p>

                                        <p class="mt-4">The collected data may be processed based on the legitimate
                                            interests pursued by YouExcel for the
                                            prevention and investigation of criminal offenses committed in YouExcel’s
                                            publicly accessible
                                            office. Video recordings are only analyzed in the event of a police report
                                            or other suspicion of a
                                            criminal offense. If necessary, analysis results and/or data exports may be
                                            transmitted as evidence to
                                            respective authorities or courts. The collected data is stored for up to 120
                                            hours. Any relevant
                                            analysis results and/or data exports will be stored for as long as it is
                                            necessary to enforce legal claims
                                            or protect legitimate interests.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse17">
                                            17. Alumni Community
</a>
                                    </h5>
                                </div>
                                <div id="collapse17" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>The contact data provided in the context of the YouExcel Alumni community
                                            membership (e.g. title,
                                            name, and email address) will be processed and used for providing you with
                                            information and news
                                            about YouExcel and its events such as alumni meetups, webinars, etc</p>

                                        <p class="mt-4">Your data will, however, only be processed once we have received
                                            your express consent to do so.
                                            This consent can be withdrawn at any time by sending an email to the address
                                            provided in the info
                                            mail and invitation
                                        </p>
                                        <a href="farhanq@youexceltraining.com">(farhanq@youexceltraining.com)</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse18">
                                            18. Other Matters
</a>
                                    </h5>
                                </div>
                                <div id="collapse18" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <h5 class="mt-3">(a) Disclaimers, Liability Exclusions/Limitations, and Disputes:</h5>

                                        <p>The agreements (including any
                                            website terms of use) that you accept when you apply, register for, order,
                                            or use YouExcel’s
                                            programs, products and services contain important provisions, including
                                            provisions disclaiming,
                                            limiting or excluding the liability of YouExcel L and other persons
                                            (including service providers) and
                                            provisions determining the applicable law and jurisdiction for the
                                            resolution of disputes. To the
                                            extent permitted by applicable law, each of those provisions applies to any
                                            dispute that may arise in
                                            relation to this Privacy Policy or YouExcel’s collection, use, disclosure,
                                            and retention of your
                                            personal information, and are of the same force and effect as if they were
                                            reproduced directly in this
                                            Privacy Policy. Nothing in this Privacy Policy amends any of those other
                                            agreements.</p>

                                        <h5 class="mt-3">(b) Changes to this Policy:</h5>

                                        <p>You have certain rights with respect to your personal
                                            information. The rights may only apply in
                                            certain circumstances and are subject to certain exemptions. Please see the
                                            table below for a
                                            summary of your rights. You can exercise these rights using the contact
                                            details at the end of this
                                            Privacy Policy.YouExcel may change this Privacy Policy as it applies to
                                            YouExcel
                                            from time to time by posting a new version of this Privacy Policy on
                                            YouExcel’s websites.
                                            YouExcel’s collection, use, disclosure, and retention of your personal
                                            information will be governed
                                            by the version of this Privacy Policy in effect at that time. Your continued
                                            dealings with YouExcel
                                            after any change to this Privacy Policy will signify your consent to the
                                            collection, use, disclosure,
                                            and retention of your personal information by YouExcel as set out in the
                                            changed Privacy Policy
                                            which is updated on the website.
                                        </p>
                                        <h5 class="mt-3">(c) English Language: </h5>
                                        <p>You and YouExcel have each expressly requested and required that this
Privacy Policy and all other related documents be drawn up in the English language.</p>
<h5 class="mt-3">(d) Contacting YouExcel’s Chief Executive Offcer:</h5>
<p>If you have any comments or questions about
this Privacy Policy or how YouExcel deals with your personal information, please contact
YouExcel’s Chief Executive Officer by email at: </p>
<a href="farhanq@youexceltraining.com">farhanq@youexceltraining.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection