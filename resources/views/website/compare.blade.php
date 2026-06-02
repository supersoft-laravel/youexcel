@extends('website.app')



@push('style')


.limiter {
    width: 100%;
    margin: 0 auto
}

.container-table100 {
    width: 100%;
    min-height: 100vh;
    background: #c850c0;
    background: -webkit-linear-gradient(62deg,#d07e416e,#200ae524);
    background: -o-linear-gradient(62deg,#d07e416e,#200ae524);
    background: -moz-linear-gradient(62deg,#d07e416e,#200ae524);
    background: linear-gradient(62deg,#d07e416e,#200ae524)
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: start;
    justify-content: center;
    flex-wrap: wrap;
    padding: 33px 30px
}

.wrap-table100 {
    width: 1170px
}

table {
    border-spacing: 1;
    border-collapse: collapse;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
    margin: 0 auto;
    position: relative
}

table * {
    position: relative
}

table td,table th {
    padding-left: 8px
}

table thead tr {
    height: 60px;
    color: #000000;
    background: #ffc578
}

table tbody tr {
    height: 50px
}

table tbody tr:last-child {
    border: 0
}

table td,table th {
    text-align: left
}

table td.l,table th.l {
    text-align: center
}

table td.c,table th.c {
    text-align: center
}

table td.r,table th.r {
    text-align: center
}

.table100-head th {
   
    font-size: 18px;
    <!--color: #fff;-->
    line-height: 1.2;
    font-weight: unset
}

tbody tr:nth-child(even) {
    background-color: #f5f5f5
}

tbody tr {
   
    font-size: 15px;
    color: gray;
    line-height: 1.2;
    font-weight: unset
}

tbody tr:hover {
    color: #555;
    background-color: #f5f5f5;
    cursor: pointer
}

.column4 {
    width: 260px;
    padding-left: 10px
}

.column1 {
    width: 160px
}

.column3 {
    width: 245px
}

.column1 {
    width: 110px;
    text-align: center
}

.column5 {
    width: 170px;
    text-align: center
}

.column6 {
    width: 222px;
    text-align: center;

}

@media screen and (max-width: 992px) {
    table {
        display:block
    }

    table>*,table tr,table td,table th {
        display: block
    }

    table thead {
        display: none
    }

    table tbody tr {
        height: auto;
        padding: 37px 0
    }

    table tbody tr td {
        padding-left: 40%!important;
        margin-bottom: 24px
    }

    table tbody tr td:last-child {
        margin-bottom: 0
    }

    table tbody tr td:before {
       
        font-size: 14px;
        color: #999;
        line-height: 1.2;
        font-weight: unset;
        position: absolute;
        width: 40%;
        left: 30px;
        top: 0
    }

    table tbody tr td:nth-child(1):before {
        content: "Date"
    }

    table tbody tr td:nth-child(2):before {
        content: "Order ID"
    }

    table tbody tr td:nth-child(3):before {
        content: "Name"
    }

    table tbody tr td:nth-child(4):before {
        content: "Price"
    }

    table tbody tr td:nth-child(5):before {
        content: "Quantity"
    }

    table tbody tr td:nth-child(6):before {
        content: "Total"
    }

    .column1,.column5,.column6 {
        text-align: left
    }

    .column1,.column5,.column6,.column1,.column4,.column3 {
        width: 100%
    }

    tbody tr {
        font-size: 14px
    }
}

@media(max-width: 576px) {
    .container-table100 {
        padding-left:15px;
        padding-right: 15px
    }
}
@endpush


@section('content')
<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                             <h1 class="breadcumb-title">Training Calendar April 2024</h1>
            </div>
        </div>
    </div>


<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<table>
<thead>
<tr class="table100-head">
<th class="column4">Training Program Name</th>
<th class="column1">Duration</th>
<th class="column1">Difficulty Level </th>
<th class="column5">Target Audience</th>
<th class="column1">Certificate Body </th>
<th class="column5">Pre-Requisite</th>
<th class="column3">For Further Details</th>
</tr>
</thead>
<tbody>
<tr>
<td class="column1">1</td>
<td class="column4">Financial Modeling & Analysis</td>
<td class="column3">24 hours</td>
<td class="column1">Beginner to Intermediate</td>
<td class="column5">
Accounting,

Finance Team</td>
<td class="column6">Basic computer literacy, familiarity with Windows operating system</td>

<td class="column5">     <a href="contact.html" class="vs-btn style3">Learn More</a><br/><br/></td>
</tr><tr>
<td class="column1">2</td>
 <td class="column4">Advanced Excel (Intermediate to Advanced)</td>
    <td class="column3">21/4/2024 Sunday</td>
<td class="column1">Beginner to Intermediate</td>
    <td class="column5">Sales Analysis,Marketing Analysis,
Business Analysts,Finance & Accounts,Project Managers,
Operations and Logistics Manager,HR Professionals,
IT Professionals</td>
    <td class="column6">Basic computer literacy, familiarity with Windows operating system

</td>
<td class="column5">     <a href="contact.html" class="vs-btn style3">Learn More</a><br/><br/></td>
</tr>



</tbody>
</table>
</div>
</div>
</div>
</div>


@endsection