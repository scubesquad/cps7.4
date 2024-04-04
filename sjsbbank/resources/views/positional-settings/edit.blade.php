@extends('layouts.master')

@section('body')
<style type="text/css">
    .form-control, .form-select{
        padding: 0.35rem 1rem;
    }
    .div-highlight{
        border: 1px solid;
        padding-left: 1%;
        padding-top: 1%;
        background: #efe0c9;
        display: inline-block;
        padding-right: 2%;
        border-radius: 7px;
    }
</style>
	 <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Positional Setting</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Administration & Controls</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Positional Setting</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Products-->
                            <div class="card card-flush pt-4">
                                
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <form action="{{ url('positional/setting/update') }}" method="post" id="edit_bank_form">
                                        @csrf
                                        <div class="div-highlight">
					                        <h3>Cheque Position:</h3>
					                    </div>
                                        <table class="table align-middle">
                                            <tbody>
                                                
                                                <tr class="numberofSubBranchCode">
                                                    <td>
                                                    	<b>Cheque Leaf 1 (Y-Axis)</b>
                                                    	<input type="number" name="chequeleaf1" class="form-control" value="{{ (isset($ypos['chequeleaf1'])) ? round($ypos['chequeleaf1'], 2) : 0 }}" maxlength="6" required />
                                                    </td>

                                                    <td>
                                                    	<b>Cheque Leaf 2 (Y-Axis)</b>
                                                    	<input type="number" name="chequeleaf2" class="form-control" value="{{ (isset($ypos['chequeleaf2'])) ? round($ypos['chequeleaf2'], 2) : 92 }}" maxlength="6" required />
                                                    </td>
                                                    <td>
                                                    	<b>Cheque Leaf 3 (Y-Axis)</b>
                                                    	<input type="number" name="chequeleaf3" class="form-control" value="{{ (isset($ypos['chequeleaf3'])) ? round($ypos['chequeleaf3'], 2) : 185 }}" maxlength="6" required />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><b>Label Name</b></th>
                                                    <th><b>X-Position</b></th>
                                                    <th><b>Y-Position</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Branch Name : Address 1
                                                        <input type="hidden" name="chequeseriesname[]" value="address1">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['address1'])) ? round($xpos['address1'], 2) : 32 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['address1'])) ? round($ypos['address1'], 2) : 11 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Address 2
                                                        <input type="hidden" name="chequeseriesname[]" value="address2">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['address2'])) ? round($xpos['address2'], 2) : 32 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['address2'])) ? round($ypos['address2'], 2) : 13.5 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account Label
                                                        <input type="hidden" name="chequeseriesname[]" value="accountlabel">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['accountlabel'])) ? round($xpos['accountlabel'], 2) : 21.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['accountlabel'])) ? round($ypos['accountlabel'], 2) : 42 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account No.
                                                        <input type="hidden" name="chequeseriesname[]" value="accountno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['accountno'])) ? round($xpos['accountno'], 2) : 38 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['accountno'])) ? round($ypos['accountno'], 2) : 42 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account Holder Top Name
                                                        <input type="hidden" name="chequeseriesname[]" value="acountholdertopname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['acountholdertopname'])) ? round($xpos['acountholdertopname'], 2) : 0 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['acountholdertopname'])) ? round($ypos['acountholdertopname'], 2) : 22 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account Holder Bottom Name
                                                        <input type="hidden" name="chequeseriesname[]" value="accountholderbottomname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['accountholderbottomname'])) ? round($xpos['accountholderbottomname'], 2) : 0 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['accountholderbottomname'])) ? round($ypos['accountholderbottomname'], 2) : 42 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Unique No.
                                                        <input type="hidden" name="chequeseriesname[]" value="rotateuniqueno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rotateuniqueno'])) ? round($xpos['rotateuniqueno'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rotateuniqueno'])) ? round($ypos['rotateuniqueno'], 2) : 71 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate User Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rotateusername">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rotateusername'])) ? round($xpos['rotateusername'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rotateusername'])) ? round($ypos['rotateusername'], 2) : 54 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Date & Time
                                                        <input type="hidden" name="chequeseriesname[]" value="rotatedatetime">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rotatedatetime'])) ? round($xpos['rotatedatetime'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rotatedatetime'])) ? round($ypos['rotatedatetime'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        MICR Cheque Series
                                                        <input type="hidden" name="chequeseriesname[]" value="micrchequeseries">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['micrchequeseries'])) ? round($xpos['micrchequeseries'], 2) : 60.2 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['micrchequeseries'])) ? round($ypos['micrchequeseries'], 2) : 83.2 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Micr Code
                                                        <input type="hidden" name="chequeseriesname[]" value="micrcode">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['micrcode'])) ? round($xpos['micrcode'], 2) : 88.7 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['micrcode'])) ? round($ypos['micrcode'], 2) : 83.2 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        MICR Account No.
                                                        <input type="hidden" name="chequeseriesname[]" value="micraccountno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['micraccountno'])) ? round($xpos['micraccountno'], 2) : 123.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['micraccountno'])) ? round($ypos['micraccountno'], 2) : 83.2 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        MICR TR CODE
                                                        <input type="hidden" name="chequeseriesname[]" value="micrtrcode">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['micrtrcode'])) ? round($xpos['micrtrcode'], 2) : 148.8 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['micrtrcode'])) ? round($ypos['micrtrcode'], 2) : 83.2 }}"></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="div-highlight">
                                            <h3>Slip Position:</h3>
                                        </div>
                                        <table class="table align-middle">
                                            <tbody>
                                                
                                                <tr class="numberofSubBranchCode">
                                                    <td>
                                                        <b>Slip Leaf 1 (Y-Axis)</b>
                                                        <input type="number" name="slipleaf1" class="form-control" value="{{ (isset($ypos['slipleaf1'])) ? round($ypos['slipleaf1'], 2) : 0 }}" maxlength="6" required />
                                                    </td>

                                                    <td>
                                                        <b>Slip Leaf 2 (Y-Axis)</b>
                                                        <input type="number" name="slipleaf2" class="form-control" value="{{ (isset($ypos['slipleaf2'])) ? round($ypos['slipleaf2'], 2) : 92 }}" maxlength="6" required />
                                                    </td>
                                                    <td>
                                                        <b>Slip Leaf 3 (Y-Axis)</b>
                                                        <input type="number" name="slipleaf3" class="form-control" value="{{ (isset($ypos['slipleaf3'])) ? round($ypos['slipleaf3'], 2) : 185 }}" maxlength="6" required />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><b>Label Name</b></th>
                                                    <th><b>X-Position</b></th>
                                                    <th><b>Y-Position</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th colspan="3"><h5>Slip Left Side</h5></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Bank Name
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbankname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbankname'])) ? round($xpos['leftslipbankname'], 2) : 13 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipbankname'])) ? round($ypos['leftslipbankname'], 2) : 7 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Address 1
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchaddress1">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchaddress1'])) ? round($xpos['leftslipbranchaddress1'], 2) : 18 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipbranchaddress1'])) ? round($ypos['leftslipbranchaddress1'], 2) : 9 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Address 2
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchaddress2">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchaddress2'])) ? round($xpos['leftslipbranchaddress2'], 2) : 18 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipbranchaddress2'])) ? round($ypos['leftslipbranchaddress2'], 2) : 12 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account No.
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipaccountno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipaccountno'])) ? round($xpos['leftslipaccountno'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipaccountno'])) ? round($ypos['leftslipaccountno'], 2) : 17 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Name
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomername">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomername'])) ? round($xpos['leftslipcustomername'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomername'])) ? round($ypos['leftslipcustomername'], 2) : 21 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 1
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomeraddress1">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomeraddress1'])) ? round($xpos['leftslipcustomeraddress1'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomeraddress1'])) ? round($ypos['leftslipcustomeraddress1'], 2) : 24 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 2
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomeraddress2">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomeraddress2'])) ? round($xpos['leftslipcustomeraddress2'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomeraddress2'])) ? round($ypos['leftslipcustomeraddress2'], 2) : 27 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 3
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomeraddress3">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomeraddress3'])) ? round($xpos['leftslipcustomeraddress3'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomeraddress3'])) ? round($ypos['leftslipcustomeraddress3'], 2) : 30 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 4
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomeraddress4">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomeraddress4'])) ? round($xpos['leftslipcustomeraddress4'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomeraddress4'])) ? round($ypos['leftslipcustomeraddress4'], 2) : 33 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 5
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomeraddress5">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomeraddress5'])) ? round($xpos['leftslipcustomeraddress5'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomeraddress5'])) ? round($ypos['leftslipcustomeraddress5'], 2) : 36 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer City
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipcustomercity">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipcustomercity'])) ? round($xpos['leftslipcustomercity'], 2) : 23 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipcustomercity'])) ? round($ypos['leftslipcustomercity'], 2) : 39 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Cheque Series From/To
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipchequeseries">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipchequeseries'])) ? round($xpos['leftslipchequeseries'], 2) : 21 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipchequeseries'])) ? round($ypos['leftslipchequeseries'], 2) : 53 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Information text
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchinfotext">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchinfotext'])) ? round($xpos['leftslipbranchinfotext'], 2) : 34 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipbranchinfotext'])) ? round($ypos['leftslipbranchinfotext'], 2) : 56 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Information Name
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchinfoname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchinfoname'])) ? round($xpos['leftslipbranchinfoname'], 2) : 19 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftslipbranchinfoname'])) ? round($ypos['leftslipbranchinfoname'], 2) : 60 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Information Colon(:)
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchinfocolon">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchinfocolon'])) ? round($xpos['leftslipbranchinfocolon'], 2) : 37 }}"></td>
                                                    <td><input type="hidden" class="form-control" name="yposition[]" maxlength="6" value="0"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Branch Information Value
                                                        <input type="hidden" name="chequeseriesname[]" value="leftslipbranchinfovalue">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftslipbranchinfovalue'])) ? round($xpos['leftslipbranchinfovalue'], 2) : 39 }}"></td>
                                                    <td><input type="hidden" class="form-control" name="yposition[]" maxlength="6" value="0"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Unique No.
                                                        <input type="hidden" name="chequeseriesname[]" value="leftsliprotateuniqueno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftsliprotateuniqueno'])) ? round($xpos['leftsliprotateuniqueno'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftsliprotateuniqueno'])) ? round($ypos['leftsliprotateuniqueno'], 2) : 71 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate User Name
                                                        <input type="hidden" name="chequeseriesname[]" value="leftsliprotateusername">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftsliprotateusername'])) ? round($xpos['leftsliprotateusername'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftsliprotateusername'])) ? round($ypos['leftsliprotateusername'], 2) : 54 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Date & Time
                                                        <input type="hidden" name="chequeseriesname[]" value="leftsliprotatedatetime">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['leftsliprotatedatetime'])) ? round($xpos['leftsliprotatedatetime'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['leftsliprotatedatetime'])) ? round($ypos['leftsliprotatedatetime'], 2) : 28 }}"></td>
                                                </tr>




                                                <tr>
                                                    <th colspan="3"><h5>&nbsp;</h5></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="3"><h5>Slip Right Side</h5></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Cheque Book Request
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipchequebookreq">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipchequebookreq'])) ? round($xpos['rightslipchequebookreq'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipchequebookreq'])) ? round($ypos['rightslipchequebookreq'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        The Manage Text
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipmanagertext">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipmanagertext'])) ? round($xpos['rightslipmanagertext'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipmanagertext'])) ? round($ypos['rightslipmanagertext'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Bank Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipbankname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipbankname'])) ? round($xpos['rightslipbankname'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipbankname'])) ? round($ypos['rightslipbankname'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Address 1
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipaddress1">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipaddress1'])) ? round($xpos['rightslipaddress1'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipaddress1'])) ? round($ypos['rightslipaddress1'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Address 2
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipaddress2">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipaddress2'])) ? round($xpos['rightslipaddress2'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipaddress2'])) ? round($ypos['rightslipaddress2'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Cheque Series From/To
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipchequeseriesfrom">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipchequeseriesfrom'])) ? round($xpos['rightslipchequeseriesfrom'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipchequeseriesfrom'])) ? round($ypos['rightslipchequeseriesfrom'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Please Issue Text
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipissuetext">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipissuetext'])) ? round($xpos['rightslipissuetext'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipissuetext'])) ? round($ypos['rightslipissuetext'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Characterstics
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcharacterstics">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcharacterstics'])) ? round($xpos['rightslipcharacterstics'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcharacterstics'])) ? round($ypos['rightslipcharacterstics'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Cheque Book
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipchequebook">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipchequebook'])) ? round($xpos['rightslipchequebook'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipchequebook'])) ? round($ypos['rightslipchequebook'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account No.
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipaccountno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipaccountno'])) ? round($xpos['rightslipaccountno'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipaccountno'])) ? round($ypos['rightslipaccountno'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Signature verified / Authorised
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipsignatureverified">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipsignatureverified'])) ? round($xpos['rightslipsignatureverified'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipsignatureverified'])) ? round($ypos['rightslipsignatureverified'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomername">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomername'])) ? round($xpos['rightslipcustomername'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomername'])) ? round($ypos['rightslipcustomername'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 1
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomeraddress1">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomeraddress1'])) ? round($xpos['rightslipcustomeraddress1'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomeraddress1'])) ? round($ypos['rightslipcustomeraddress1'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 2
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomeraddress2">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomeraddress2'])) ? round($xpos['rightslipcustomeraddress2'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomeraddress2'])) ? round($ypos['rightslipcustomeraddress2'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 3
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomeraddress3">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomeraddress3'])) ? round($xpos['rightslipcustomeraddress3'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomeraddress3'])) ? round($ypos['rightslipcustomeraddress3'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 4
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomeraddress4">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomeraddress4'])) ? round($xpos['rightslipcustomeraddress4'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomeraddress4'])) ? round($ypos['rightslipcustomeraddress4'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer Address 5
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomeraddress5">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomeraddress5'])) ? round($xpos['rightslipcustomeraddress5'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomeraddress5'])) ? round($ypos['rightslipcustomeraddress5'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Customer City
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcustomercity">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcustomercity'])) ? round($xpos['rightslipcustomercity'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcustomercity'])) ? round($ypos['rightslipcustomercity'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Contact No
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipcontactno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipcontactno'])) ? round($xpos['rightslipcontactno'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipcontactno'])) ? round($ypos['rightslipcontactno'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Signature of Bearer Label
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipsignatureofbearer">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipsignatureofbearer'])) ? round($xpos['rightslipsignatureofbearer'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipsignatureofbearer'])) ? round($ypos['rightslipsignatureofbearer'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Unique No.
                                                        <input type="hidden" name="chequeseriesname[]" value="rightsliprotateuniqueno">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightsliprotateuniqueno'])) ? round($xpos['rightsliprotateuniqueno'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightsliprotateuniqueno'])) ? round($ypos['rightsliprotateuniqueno'], 2) : 71 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate User Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rightsliprotateusername">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightsliprotateusername'])) ? round($xpos['rightsliprotateusername'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightsliprotateusername'])) ? round($ypos['rightsliprotateusername'], 2) : 54 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Rotate Date & Time
                                                        <input type="hidden" name="chequeseriesname[]" value="rightsliprotatedatetime">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightsliprotatedatetime'])) ? round($xpos['rightsliprotatedatetime'], 2) : 14.5 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightsliprotatedatetime'])) ? round($ypos['rightsliprotatedatetime'], 2) : 28 }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Account Holder Top Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipacountholdertopname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipacountholdertopname'])) ? round($xpos['rightslipacountholdertopname'], 2) : 100 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipacountholdertopname'])) ? round($ypos['rightslipacountholdertopname'], 2) : 80 }}"></td>
                                                </tr> 
                                                <tr>
                                                    <td>
                                                        Account Holder Bottom Name
                                                        <input type="hidden" name="chequeseriesname[]" value="rightslipaccountholderbottomname">
                                                    </td>
                                                    <td><input type="text" class="form-control" name="xposition[]" maxlength="6" value="{{ (isset($xpos['rightslipaccountholderbottomname'])) ? round($xpos['rightslipaccountholderbottomname'], 2) : 165 }}"></td>
                                                    <td><input type="text" class="form-control" name="yposition[]" maxlength="6" value="{{ (isset($ypos['rightslipaccountholderbottomname'])) ? round($ypos['rightslipaccountholderbottomname'], 2) : 90 }}"></td>
                                                </tr>   
                                            </tbody>
                                        </table>

                                        <table>
                                        	<thead>
                                        		<tr>
                                                    <td colspan="2">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="{{URL::previous()}}" class="btn btn-secondary btn-sm">Back</a>
                                                        <button class="btn btn-primary btn-sm">Save</button>
                                                    </td>
                                                </tr>
                                        	</thead>
                                        </table>
                                    </form>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
               
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
		
@push('scripts')
    <script>
        $(document).ready(function(){
            
            // code to validationn and save bank 
            var frm_user = $('#edit_bank_form');
            $("#edit_bank_form").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    is_branch_sub_code: {
                        required: true,
                    },
                    code: {
                        required: true,
                    },
                    address1: {
                        required: true,
                    },
                    country_id: {
                        required: true,
                    },
                    state_id: {
                        required: true,
                    },
                    pin: {
                        required: true,
                    },
                    printername: {
                        required: true,
                    },
                    printertray1: {
                        required: true,
                    },
                    printertray2: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    is_branch_sub_code: {
                        required: "Please select branch sub code",
                    },
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: "{{url('positional/setting/update')}}",
                        type: "POST",
                        data: frm_user.serialize(),
                        success: function( response ) {
                            if(response.status == 200){
                                swal.fire({
                                    icon: 'success',
                                    title: "success!",
                                    text: response.message
                                }).then(function() {
                                   window.location.reload()
                                });
                            }else{
                                if (response.errors) {
                                    var errorString = '';
                                    $.each(response.errors, function (key, value) {
                                        $('[name="' + key + '"]').next().text(value);
                                        $('[name="' + key + '"]').next().show();
                                    });
                                }
                            }

                        },
                        beforeSend: function() {
                            $('#cps-loader').removeClass('d-none')
                        },
                        complete: function() {
                            $('#cps-loader').addClass('d-none');
                        }
                    });
                }
            });
            // end of save bank 

        })
    </script>
@endpush

@endsection
