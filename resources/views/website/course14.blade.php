@extends('website.app', ['title' => 'Computerized Accounting'])

@section('content')
    <style>
        .section-header {
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
            color: white !important;
            padding: 60px 0 40px 0 !important;
            margin-top: 120px;
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
            background: linear-gradient(rgba(0, 40, 104, 0.85), rgba(0, 40, 104, 0.9)),
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
    </style>
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Learn, Earn, and Grow in Finance and Accountancy Career with Practical Training
                </h2>
            </div>
        </div>
    </section>

    <section class="course-details pt-3 pb-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <div class="text-center mb-2 mt-2">
                            <h5 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block"
                                style="border-color: #0d6efd;">
                                What’s Inside the Course
                            </h5>
                        </div>
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <!--<td> <img src="https://youexceltraining.com/img/Yourexcel-img/ca.jpeg" /> </td>-->
                                    <td>
                                        @include('website.sections.video-section', [
                                            'videoId' => 'yN2L20VhDPA',
                                        ])
                                    </td>
                                </tr>

                                <tr>
                                <!--<tr>-->
                                <!--    <td><i class="fas fa-money-bill-wave"></i> Total Fee: {{ $programFee ?? 'N/A' }}-->
                                <!--    </td>-->
                                <!--</tr>-->
                                <tr>
                                    <td><i class="fas fa-calendar-alt"></i> Next Batch Schedule:
                                        {{ $nextBatchSchedule ?? 'Contact Admissions Team' }}</td>
                                </tr>
                                <td><i class="far fa-hourglass"></i> Duration: 36 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: Basic to Intermediate
                                    </td>
                                </tr>
                                <tr style="padding-top: 8px; padding-bottom: 20px;">
                                    <td>
                                        <div style="margin-bottom: 10px;"><i class="far fa-money"></i>Course Fee (PKR):</div>
                                        <ul style="padding-left: 15px;">
                                            <li>Monthly Installment: {{ $programFee ?? 'N/A' }}</li>
                                            <li>Lump Sum: {{ $lumpSumFee ?? 'N/A'}}</li>
                                        </ul>
                                    </td>
                                 </tr> 
                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"> Download Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/computerized-accounting" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Computerized Accounting </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/cab.jpeg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p class="wow fadeInDown pb-3">
                        Launch your career in accountancy by learning and applying modern Accounting software.
                        Gain the professional skills you need to succeed by learning bookkeeping, full accounting cycle,
                        accounting terminologies, transactions
                        recording process flow, use of double-entry accounting system till the publishing of Final Accounts
                        report in a fully integrated
                        computerized accounting software. The software covered in this training are Financial Accounting, MS
                        Excel, Quickbook, Tally and Portfolio Building on LinkedIn.
                    </p>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Training Outline
                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Buttons for Expand All and Close All -->
                    <div class="mb-4 d-flex gap-2">
                        <button class="vs-btn btn btn-primary d-flex align-items-center gap-2 px-4 py-2"
                            onclick="expandAll()">
                            <i class="fas fa-plus-square"></i>
                            <span>Expand All</span>
                        </button>
                        <button class="vs-btn btn btn-secondary d-flex align-items-center gap-2 px-4 py-2"
                            onclick="closeAll()">
                            <i class="fas fa-minus-square"></i>
                            <span>Close All</span>
                        </button>
                    </div>
                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Financial Accounting & Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">

                                            <li>Introduction to Accounting and Basic Concepts
                                                <ul>
                                                    <li class="syllabustext">Definition and Purpose of Accounting</li>
                                                    <li class="syllabustext">Role in Business Decision-making</li>
                                                    <li class="syllabustext">Entity Concept, Money Measurement, Duality
                                                        Principle</li>
                                                    <li class="syllabustext">Going Concern, Accounting Period</li>
                                                    <li class="syllabustext">Introduction to GAAP</li>
                                                </ul>
                                            </li>

                                            <li>Accounting Equation and Double Entry Bookkeeping
                                                <ul>
                                                    <li class="syllabustext">Component: Assets, Liabilities, Equity</li>
                                                    <li class="syllabustext">Relationship and Balance of the Accounting
                                                        Equation</li>
                                                    <li class="syllabustext">Double Entry Bookkeeping (Principals and
                                                        Application)</li>
                                                </ul>
                                            </li>

                                            <li>Steps in the Accounting Cycle
                                                <ul>
                                                    <li class="syllabustext">General Journal</li>
                                                    <li class="syllabustext">General Ledger</li>
                                                    <li class="syllabustext">Adjusting Entries and the Trial Balance</li>
                                                    <li class="syllabustext">Income Statement (Statement of Financial
                                                        Performance)</li>
                                                    <li class="syllabustext">Balance Sheet (Statement of Financial Position)
                                                    </li>
                                                    <li class="syllabustext">Closing Entries</li>
                                                    <li class="syllabustext">Post-Closing Trial Balance</li>
                                                </ul>
                                            </li>

                                            <li>Adjusting the Accounts
                                                <ul>
                                                    <li class="syllabustext">Purpose of Adjustments in Accounting</li>
                                                    <li class="syllabustext">Cash and Accrual basis Accounting</li>
                                                    <li class="syllabustext">Deferrals (Prepaid Expense and Unearned
                                                        Revenue)</li>
                                                    <li class="syllabustext">Depreciation and Factors in Computing
                                                        Depreciation</li>
                                                </ul>
                                            </li>

                                            <li>Bad Debts
                                                <ul>
                                                    <li class="syllabustext">Bad Debts overview and types of Bad Debts</li>
                                                    <li class="syllabustext">Accounting for Bad Debts (Direct Write-off and
                                                        Allowance Method)</li>
                                                    <li class="syllabustext">Bases Used for Allowance Method</li>
                                                </ul>
                                            </li>

                                            <li>Inventory Management
                                                <ul>
                                                    <li class="syllabustext">Operating Cycle</li>
                                                    <li class="syllabustext">Flow of Cost</li>
                                                    <li class="syllabustext">Perpetual and Periodic Inventory System</li>
                                                    <li class="syllabustext">Freight Cost (FOB Destination and Shipping
                                                        Point)</li>
                                                    <li class="syllabustext">Goods in Transit</li>
                                                    <li class="syllabustext">Cost Flow Methods (FIFO, LIFO and AVG) and
                                                        Comparative Effects on Income Statement</li>
                                                </ul>
                                            </li>

                                            <li>Analysis of Financial Statements
                                                <ul>
                                                    <li class="syllabustext">Comparative Analysis (Intracompany Basis,
                                                        Industry Averages & Intercompany Basis)</li>
                                                    <li class="syllabustext">Horizontal and Vertical Analysis</li>
                                                    <li class="syllabustext">Ratio Analysis</li>
                                                </ul>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Microsoft Excel (Mastering Excel for Office Productivity
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">

                                            <li>Introduction to Microsoft Excel
                                                <ul>
                                                    <li class="syllabustext">Overview of Microsoft Excel</li>
                                                    <li class="syllabustext">Understanding the Excel Interface (Ribbon,
                                                        Toolbar, Workbook, Worksheet)</li>
                                                    <li class="syllabustext">Navigating Excel (Rows, Columns, Cells)</li>
                                                    <li class="syllabustext">Data Entry, Editing, Formatting and Printing
                                                    </li>
                                                    <li class="syllabustext">Freezing Panes and Splitting Windows</li>
                                                    <li class="syllabustext">Introduction to Formulas and Functions</li>
                                                    <li class="syllabustext">Protecting Worksheets and Workbooks</li>
                                                    <li class="syllabustext">Using Hyperlink for Navigation</li>
                                                </ul>
                                            </li>

                                            <li>Professional Excel: Automation & Advanced Functions
                                                <ul>
                                                    <li class="syllabustext">Logical Functions (IF, IF AND, IF OR, SUMIF)
                                                    </li>
                                                    <li class="syllabustext">Lookup Functions (MATCH, INDEX, VLOOKUP,
                                                        HLOOKUP)</li>
                                                    <li class="syllabustext">Text Functions (LEN, LEFT, RIGHT, MID,
                                                        CONCATENATE, REPT, UPPER, LOWER, PROPER)</li>
                                                    <li class="syllabustext">Count Functions (COUNT, COUNTA, COUNTBLANK,
                                                        COUNTIF)</li>
                                                    <li class="syllabustext">Date and Time Functions (TODAY, DATE, EDATE,
                                                        DATEDIF, YEAR, MONTH, DAY, DAYS, NOW, TIME)</li>
                                                    <li class="syllabustext">Financial Functions (PMT, RATE, NPER, PV, FV)
                                                    </li>
                                                    <li class="syllabustext">Payroll and Payroll Tax Computations</li>
                                                    <li class="syllabustext">Financial Accounting Model</li>
                                                </ul>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Tally 9
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">

                                            <li>Introduction to Tally
                                                <ul>
                                                    <li class="syllabustext">Overview of Tally</li>
                                                    <li class="syllabustext">Features and Benefits of Tally</li>
                                                    <li class="syllabustext">Understanding the Tally Interface</li>
                                                    <li class="syllabustext">Creating a New Company in Tally</li>
                                                    <li class="syllabustext">Creating & Editing Ledgers</li>
                                                    <li class="syllabustext">Creating Stock Categories</li>
                                                </ul>
                                            </li>

                                            <li>Voucher Entries
                                                <ul>
                                                    <li class="syllabustext">Types of Vouchers (Payment, Receipt, Contra,
                                                        Journal, Sales, Credit Note, Purchase, Debit Note)</li>
                                                    <li class="syllabustext">Accounting and Inventory Vouchers</li>
                                                    <li class="syllabustext">Purchase/ Sale Discount</li>
                                                </ul>
                                            </li>

                                            <li>Inventory Management
                                                <ul>
                                                    <li class="syllabustext">Creating Stock Groups and Items</li>
                                                    <li class="syllabustext">Managing Unit of Measure and Godowns</li>
                                                    <li class="syllabustext">Managing Stock Entries (Inward & Outward)</li>
                                                    <li class="syllabustext">Handling Purchase and Sales Orders</li>
                                                </ul>
                                            </li>

                                            <li>Payroll Management
                                                <ul>
                                                    <li class="syllabustext">Configuring Payroll Masters</li>
                                                    <li class="syllabustext">Setting Up Salary Structures</li>
                                                    <li class="syllabustext">Employee Attendance & Processing Payroll</li>
                                                </ul>
                                            </li>

                                            <li>Utilities and Additional Features
                                                <ul>
                                                    <li class="syllabustext">Data Backup and Restore</li>
                                                    <li class="syllabustext">Security Controls and User Management</li>
                                                    <li class="syllabustext">Integration with MS Excel</li>
                                                    <li class="syllabustext">Taxation</li>
                                                    <li class="syllabustext">Practical Case Studies & Hands-on Practice
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>Reports
                                                <ul>
                                                    <li class="syllabustext">Financial Statements</li>
                                                    <li class="syllabustext">Day Book</li>
                                                    <li class="syllabustext">Statements of Accounts</li>
                                                    <li class="syllabustext">Accounts Books</li>
                                                    <li class="syllabustext">Statements of Inventory</li>
                                                    <li class="syllabustext">Inventory Books</li>
                                                    <li class="syllabustext">Payroll Reports</li>
                                                </ul>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    QuickBooks 2024
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">

                                            <li>Introduction to QuickBooks
                                                <ul>
                                                    <li class="syllabustext">Overview of QuickBooks and its features</li>
                                                    <li class="syllabustext">Navigating the QuickBooks Interface</li>
                                                    <li class="syllabustext">Opening a sample company</li>
                                                    <li class="syllabustext">QuickBooks Menus</li>
                                                </ul>
                                            </li>

                                            <li>Setting-up a New Company
                                                <ul>
                                                    <li class="syllabustext">Creating a New Company File</li>
                                                    <li class="syllabustext">Setting Up Company Preferences</li>
                                                    <li class="syllabustext">Configuring Chart of Accounts</li>
                                                    <li class="syllabustext">Adding Business Information and Users</li>
                                                    <li class="syllabustext">Managing Opening Balances</li>
                                                </ul>
                                            </li>

                                            <li>Managing Customers and Sales
                                                <ul>
                                                    <li class="syllabustext">Creating and Managing Customer Profiles</li>
                                                    <li class="syllabustext">Managing Estimates and Sales Orders</li>
                                                    <li class="syllabustext">Creating Invoices and Sales Receipts</li>
                                                    <li class="syllabustext">Recording Payments and Deposits</li>
                                                    <li class="syllabustext">Managing Customer Refunds and Credits</li>
                                                    <li class="syllabustext">Freight and Discounts</li>
                                                    <li class="syllabustext">Managing Batch Invoices</li>
                                                </ul>
                                            </li>

                                            <li>Managing Vendors and Purchases
                                                <ul>
                                                    <li class="syllabustext">Setting Up Vendor Profiles</li>
                                                    <li class="syllabustext">Managing Purchase Orders</li>
                                                    <li class="syllabustext">Entering Bills and Paying to Vendors</li>
                                                    <li class="syllabustext">Managing Vendor Credits and Refunds</li>
                                                    <li class="syllabustext">Managing Recurring Expenses</li>
                                                </ul>
                                            </li>

                                            <li>Inventory Items & Services
                                                <ul>
                                                    <li class="syllabustext">Creating, editing and managing Items</li>
                                                    <li class="syllabustext">Subtotal Items, Discounts, Non-inventory
                                                        items, Other-charge and Service items</li>
                                                </ul>
                                            </li>

                                            <li>Banking and Reconciliation
                                                <ul>
                                                    <li class="syllabustext">Making Deposits</li>
                                                    <li class="syllabustext">Transferring Funds</li>
                                                    <li class="syllabustext">Write Checks</li>
                                                    <li class="syllabustext">Account Reconciliation</li>
                                                </ul>
                                            </li>

                                            <li>Additional Features
                                                <ul>
                                                    <li class="syllabustext">Data Backup and Restore</li>
                                                    <li class="syllabustext">Integration with MS Excel</li>
                                                    <li class="syllabustext">Setting-up Sales Tax, multiple and group sales
                                                        tax</li>
                                                    <li class="syllabustext">Real Life Case studies and Scenarios (Trading
                                                        and Services Business)</li>
                                                </ul>
                                            </li>

                                            <li>Reports
                                                <ul>
                                                    <li class="syllabustext">Financial Statements</li>
                                                    <li class="syllabustext">Customer & Vendor Reports</li>
                                                    <li class="syllabustext">Inventory Reports</li>
                                                    <li class="syllabustext">Banking Reports</li>
                                                </ul>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function expandAll() {
                            const collapses = document.querySelectorAll('.accordion-collapse');
                            collapses.forEach(collapse => {
                                const bsCollapse = new bootstrap.Collapse(collapse, {
                                    toggle: false
                                });
                                bsCollapse.show();
                            });
                        }

                        function closeAll() {
                            const collapses = document.querySelectorAll('.accordion-collapse');
                            collapses.forEach(collapse => {
                                const bsCollapse = new bootstrap.Collapse(collapse, {
                                    toggle: false
                                });
                                bsCollapse.hide();
                            });
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>

    <section class="py-4" id="div2" style="background-color: #ffffff;">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Learning Outcomes
                </h4>
            </div>

            <!-- Outcomes Grid -->
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-broom text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Apply fundamental accounting principles </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Prepare and analyze financial statements
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Utilize Microsoft Excel for data management and financial analysis
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Navigate and use QuickBooks & Tally for business transactions and
                            financial reporting
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-3 background-image">
        <div class="container">
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Salient Features
                </h4>
            </div>
            <div class="row g-4">
                <!-- Feature Card -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Learn to apply accounting knowledge through
                            real-world examples, enhancing your practical skills</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Learn to efficiently manage, sort, and filter large
                            datasets, improving data organization</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Create charts, tables, and SmartArt graphics for
                            clear and effective data presentation</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Navigate QuickBooks easily, making it accessible even
                            for beginners</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Develop a well-rounded skill set covering essential
                            accounting software and tools</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Enhance your job/business prospects with proficiency
                            in multiple accounting software</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Gain skills that are crucial for career advancement
                            in accounting, finance, and business
                            management</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:40px 0; background:linear-gradient(135deg,#f9fafc 0%,#eef1f6 100%);">
        <div class="container">
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Course Overview
                </h4>
            </div>

            <div class="row g-3">
                <!-- Recommended For -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-users" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommended For</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">
                            Start career in Finance and Accounting, Fresh Graduates, Fresh Intermediates, Professionals
                            involved in Accounting field
                        </p>
                    </div>
                </div>

                <!-- Difficulty Level -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-signal" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Difficulty Level</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">Basic to Intermediate</p>
                    </div>
                </div>

                <!-- Pre-Requisites -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-lightbulb" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">
                            Completion of Intermediate and Basic computer literacy,
                            familiarity with Windows operating system
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Title -->
                <div class="col-12 mb-4 text-center">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #ffc107;">
                        Trainer Profile
                    </h4>
                </div>

                <!-- Left Side (Trainer Info) -->
                <div class="col-lg-8 col-md-7 mb-4 mb-md-0">
                    <div class="p-4 rounded shadow-sm bg-white">
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Mr. Muhammad Zohaib</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Mr. Muhammad Zohaib</b> is have 10 years practical
                            experience of working in industry and as a trainer. He is currently serving as Manager Accounts
                            at Bahria
                            University. He is qualified MBA with a specialization in Finance from Muhammad Ali Jinnah
                            University, Karachi. Additionally, he has completed various relevant trainings in his field to
                            enhance his professional and academic qualification.
                        </p>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            He has firm grip on delivering skilled comprehensive training programs that cover a wide range
                            of software applications including, QuickBooks, Tally, Peachtree and customized ERP systems as
                            well. His proven ability to simplify complex technical concepts to facilitate learning
                            experiences, ensuring participants improve their efficacy in computerized accounting
                            applications.
                        </p>

                        {{-- <h6 class="fw-semibold mb-2">
                            <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications
                        </h6>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Power BI Data Analyst PL300 Certification 2025</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Certified Trainer</li>
                        </ul> --}}
                    </div>
                </div>

                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/zohaib.png') }}" alt="Trainer - Mr. Muhammad Zohaib"
                            class="img-fluid rounded-circle border border-3 border-warning shadow-sm"
                            style="height: 230px; width: 230px; object-fit: cover;">
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark shadow-sm px-3 py-1"
                            style="font-size: 13px;">
                            <i class="fas fa-star me-1"></i> Expert
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4" id="div2" style="background-color: #f8f9fa;">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #ffc107;">
                    Value Added Services
                </h4>
            </div>

            <!-- Services Grid -->
            <div class="row gy-3">
                <!-- Service Item -->
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-video text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            100% job and business oriented training
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #17a2b8;">
                        <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Certificate of completion recognized from Trade Testing Board,
                            Government of Pakistan
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #28a745;">
                        <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Claim Continuing Professional Development (CPD) hours for the
                            training
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Video recorded session with personalized Learning Management System
                            (LMS) access login id for 12 months
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Fully equipped training center venue for on-campus trainings readily
                            available with laptops, projectors and air-conditioning
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Live physical on-campus and online sessions facility
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block"
                            style="border-color: #0d6efd;">
                            REAL PEOPLE REAL TESTIMONIALS
                        </h4>
                    </div>
                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'excel'])</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 m-3 cta-style2">
        <div class="container text-center">
            <!-- Section Title -->
            <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">
                Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">36 Hours</span>
            </h2>
            <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">
                Gain practical, hands-on skills through interactive sessions led by industry experts.
                Enhance your career prospects with our intensive training program.
            </p>

            <!-- CTA Button -->
            <a href="../Registration-Form/computerized-accounting" class="btn btn-lg fw-bold"
                style="background-color: #ffc107; color: #000; padding: 16px 45px; font-size: 18px; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;">
                <i class="fas fa-user-edit me-2"></i> REGISTER NOW
            </a>

            <!-- Optional Note -->
            <p class="mt-3" style="font-size: 14px; color: #fff;">
                Limited seats available — reserve your spot today!
            </p>
        </div>
    </section>

    <div class="modal bd-example-modal-lg" id="myModal" style="z-index:99 ">
        <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
            <div class="modal-content"style="
                background-color: transparent;
            ">
                <div class="modal-body" style="position:relative;height: 106vh;">
                    <span class="close">&times;</span>
                    <div class="wrapper">
                        <div class="container">
                            <canvas id="wheel"></canvas>
                            <!--<button id="spin-btn">Spin</button>-->
                            <i class="fas fa-caret-left img" style=" color: #fdcf3b;font-size:80px"></i>
                        </div>
                        <div id="final-value">
                            <p>Click On The Spin Button To Start</p>
                        </div>
                    </div>
                    <form action="mail.php" class="form-stylea ajax-contact">
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-top="10%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-top="13%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-top="13%">
                            <div class="vs-rounded2"></div>
                        </div>

                        <h2 class="">SPIN TO WIN </h2>
                        <h5 class="border-title2 fs-md ">Test your might!</h5>

                        <div class="row">


                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="name" id="name"
                                        placeholder="Complete Name"required>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="Cell No.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="WhatsApp No. ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="subject" id="subject">
                                        <option selected hidden disabled>Select Course</option>
                                        <option value="Other">Other</option>
                                        <option value="Apply Scholarship">Apply Scholarship</option>
                                        <option value="Private Tutor">Private Tutor</option>
                                        <option value="Admission Session">Admission Session</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="city" placeholder="Your City" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <input name="comments" placeholder="Comments" type="text">
                        </div>
                        <div class="captcha d-flex item-center mb-4">
                            <div class="spinner d-flex item-center">
                                <label class="mb-0 mt-3 mx-3">

                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                    <span class="checkmark"><span>&nbsp;</span></span>
                                </label>
                            </div>
                            <div class="text1">
                                I'm not a robot
                            </div>
                            <div class="logo">

                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG" />
                                <p>reCAPTCHA</p>
                                <small>Privacy - Terms</small>
                            </div>
                        </div>

                        <button id="spin-btn" class="vs-btn">Spin the wheel</button>

                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                </div>
            </div>
        </div>
        <p class="form-messages"><span class="sr-only">For message will display here</span></p>
        </form>


    </div>
    </div>
    </div>
    </div>
@endsection
