@extends('layouts.master')

@section('body')
    <style type="text/css">
        .div-highlight{
            border: 1px solid;
            padding-left: 1%;
            padding-top: 1%;
            background: #efe0c9;
            display: inline-block;
            padding-right: 2%;
            border-radius: 7px;
        }

        .form-control, .form-select{
            padding: 0.35rem 1rem;
        }

        ul li {
            padding:7px;
        }
        .plus, .minus {
            display: inline-block; 
            background-repeat: no-repeat;
            background-size: 16px 16px !important;
            width: 16px;
            height: 16px; 
            /*vertical-align: middle;*/
        }

        .plus {
            background-image: url(https://img.icons8.com/color/48/000000/plus.png);
        }

        .minus {
            background-image: url(https://img.icons8.com/color/48/000000/minus.png);
        }

        ul {
            list-style: none;
            padding: 0px 0px 0px 20px;
        }

        ul.inner_ul li:before {
            content: "├";
            font-size: 18px;
            margin-left: -16px;
            margin-top: -5px;
            vertical-align: middle;
            float: left;
            width: 11px;
            color: #41424e;
        }

        ul.inner_ul li:last-child:before {
            content: "└";
        }

        .inner_ul {
            padding: 0px 0px 0px 35px;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Bank</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Manage Bank</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">List</li>
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
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_manage_bank_modal">Add Bank</a>
                                        <!--end::Add product-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th>Sr No.</th>
                                                <th>Name</th>
                                                <th>Subdomain</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-700">
                                            
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
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
		

<!-- Add manage bank Modal -->
<div class="modal fade" id="add_manage_bank_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="add_manage_bank_modal_form" class="form" action="#" method="post" enctype="multipart/form-data">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Manage Centralize Printing Banks</h1>
                    </div>
                    <!--end::Heading-->
                    <div class="div-highlight">
                        <h3>Basic Details : </h3>
                    </div>
                    
                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label class="required">Bank Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="name" id="saveName" class="form-control">
                                    <label class="text-danger d-none"></label>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label class="required">Subdomain Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="subdomain" id="saveSubDomain" class="form-control">
                                    <label class="text-danger d-none"></label>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"><h4>Customer Contact Details : </h4></td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Email Id :</label>
                                </td>
                                <td>
                                    <input type="email" name="email" id="saveEmail" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Mobile No. :</label>
                                </td>
                                <td>
                                    <input type="number" name="mobile" id="saveMobile" class="form-control" maxlength="12">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Contact Person Name. :</label>
                                </td>
                                <td>
                                    <input type="text" name="contact_person" id="saveContactPerson" class="form-control">
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"><h4>Printing Branch Details : </h4></td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>State :</label>
                                </td>
                                <td>
                                    <input type="text" name="state" id="saveState" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>City :</label>
                                </td>
                                <td>
                                    <input type="text" name="city" id="saveCity" class="form-control">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Address :</label>
                                </td>
                                <td>
                                    <textarea name="address" id="saveAddress" class="form-control"></textarea>
                                </td>
                            </tr> 
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sales Person Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="sales_person" id="saveSalesPerson" class="form-control">
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <div class="div-highlight">
                        <h3>Technical Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Input File Format Description :</label>
                                </td>
                                <td>
                                    <textarea name="input_file_format_description" id="saveInputFileFormatDescription" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sample Input File :</label>
                                </td>
                                <td>
                                    <input type="file" name="sample_input_file" id="saveSampleInputFile" class="form-control">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Output File Format Description :</label>
                                </td>
                                <td>
                                    <textarea name="output_file_format_description" id="saveOutputFileFormatDescription" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sample Output File :</label>
                                </td>
                                <td>
                                    <input type="file" name="sample_output_file" id="saveSampleOutputFile" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printed Requisition Sample :</label>
                                </td>
                                <td>
                                    <input type="file" name="sample_requisition" id="sampleRequisition" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printed Cheque Sample :</label>
                                </td>
                                <td>
                                    <input type="file" name="sample_cheque" id="sampleCheque" class="form-control">
                                </td>
                            </tr>   
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Special Requirement :</label>
                                </td>
                                <td>
                                    <textarea name="special_requirement" id="saveSpecialRequirement" class="form-control"></textarea>
                                </td>
                            </tr>                          
                        </tbody>
                    </table>


                    <div class="div-highlight">
                        <h3>Printing Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printer Brand Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="printer_brand" id="savePrinterBrand" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Exact Printer Model Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="printer_model" id="savePrinterModel" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printing Computer OS Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="os_name" id="saveOsName" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printing Computer OS Bit Version :</label>
                                </td>
                                <td>
                                    <input type="text" name="os_bit_version" id="saveOsBitVersion" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>PCP Version :</label>
                                </td>
                                <td>
                                    <input type="text" name="pcp_version" id="savePcpVersion" class="form-control">
                                </td>
                            </tr>                 
                        </tbody>
                    </table>



                    <div class="div-highlight">
                        <h3>License Installation Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Installation By :</label>
                                </td>
                                <td>
                                    <input type="text" name="installation_by" id="saveInstallationBy" class="form-control">
                                </td>
                                <td style="font-size:15px;vertical-align: middle;">On&nbsp;:</td>
                                <td>
                                    <input type="date" name="installation_date" id="saveInstallationDate" class="form-control" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Training By :</label>
                                </td>
                                <td>
                                    <input type="text" name="training_by" id="saveTrainingBy" class="form-control">
                                </td>
                                <td style="font-size:15px;vertical-align: middle;">On&nbsp;:</td>
                                <td>
                                    <input type="date" name="training_date" id="saveTrainingDate" class="form-control" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Licence Start Date :</label>
                                </td>
                                <td>
                                    <input type="date" name="licence_start_date" id="saveLicenceStartDate" class="form-control" autocomplete="off">
                                </td>
                                <td colspan="2"></td>
                            </tr>                
                        </tbody>
                    </table>


                    <div class="div-highlight">
                        <h3>Module Access Tree : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            
                            <tr>
                                <td>
                                    <div class="tree_main_edit">
                                        <ul id="bs_main" class="main_ul">
                                            <li id="bs_1">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_1" />
                                                <span>Master </span>
                                                <ul id="bs_l_1" class="sub_ul" style="display: none">
                                                    <li id="bf_1">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_1" />
                                                        <span>Country Master</span>
                                                        <ul id="bf_l_1" style="display: none" class="inner_ul">
                                                            <li id="io_1">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="country.add" id="c_io_1" /><span>country.add </span></li>
                                                            <li id="io_2">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="country.delete" id="c_io_2" /><span>country.delete </span></li>
                                                            <li id="io_3">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="country.edit" id="c_io_3" /><span>country.edit </span></li>
                                                            <li id="io_4">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="country.view" id="c_io_4" /><span>country.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_2">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_2" />
                                                        <span>State Master</span>
                                                        <ul id="bf_l_2" style="display: none" class="inner_ul">
                                                            <li id="io_5">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="state.add" id="c_io_5" /><span>state.add </span></li>
                                                            <li id="io_6">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="state.delete" id="c_io_6" /><span>state.delete </span></li>
                                                            <li id="io_7">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="state.edit" id="c_io_7" /><span>state.edit </span></li>
                                                            <li id="io_8">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="state.view" id="c_io_8" /><span>state.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_3">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_3" />
                                                        <span>Branch Master</span>
                                                        <ul id="bf_l_3" style="display: none" class="inner_ul">
                                                            <li id="io_9">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="branch.add" id="c_io_9" /><span>branch.add </span></li>
                                                            <li id="io_10">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="branch.delete" id="c_io_10" /><span>branch.delete </span></li>
                                                            <li id="io_11">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="branch.edit" id="c_io_11" /><span>branch.edit </span></li>
                                                            <li id="io_12">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="branch.view" id="c_io_12" /><span>branch.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_4">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_4" />
                                                        <span>Transaction Code Master</span>
                                                        <ul id="bf_l_4" style="display: none" class="inner_ul">
                                                            <li id="io_13">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction-code.add" id="c_io_13" /><span>transaction-code.add </span></li>
                                                            <li id="io_14">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction-code.delete" id="c_io_14" /><span>transaction-code.delete </span></li>
                                                            <li id="io_15">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction-code.edit" id="c_io_15" /><span>transaction-code.edit </span></li>
                                                            <li id="io_16">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction-code.view" id="c_io_16" /><span>transaction-code.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_5">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_5" />
                                                        <span>Cheque Series Master</span>
                                                        <ul id="bf_l_5" style="display: none" class="inner_ul">
                                                            <li id="io_17">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="cheque-series.add" id="c_io_17" /><span>cheque-series.add </span></li>
                                                            <li id="io_18">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="cheque-series.delete" id="c_io_18" /><span>cheque-series.delete </span></li>
                                                            <li id="io_19">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="cheque-series.edit" id="c_io_19" /><span>cheque-series.edit </span></li>
                                                            <li id="io_20">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="cheque-series.view" id="c_io_20" /><span>cheque-series.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_6">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_6" />
                                                        <span>Bank Master</span>
                                                        <ul id="bf_l_6" style="display: none" class="inner_ul">
                                                            <li id="io_21">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="bank.view" id="c_io_21" /><span>bank.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="bs_2">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_2" />
                                                <span>Transaction </span>
                                                <ul id="bs_l_2" style="display: none" class="sub_ul">
                                                    <li id="bf_7">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_7" />
                                                        <span>Upload & Print </span>
                                                        <ul id="bf_l_7" style="display: none" class="inner_ul">
                                                            <li id="io_22">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction.delete" id="c_io_22" /><span>transaction.delete </span></li>
                                                            <li id="io_23">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction.filter" id="c_io_23" /><span>transaction.filter </span></li>
                                                            <li id="io_24">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction.print" id="c_io_24" /><span>transaction.print </span></li>
                                                            <li id="io_25">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="transaction.upload" id="c_io_25" /><span>transaction.upload </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_8">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_8" />
                                                        <span>Pending Print Request </span>
                                                        <ul id="bf_l_8" style="display: none" class="inner_ul">
                                                            <li id="io_26">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="pending-print-req.cancel" id="c_io_26" /><span>pending-print-req.cancel </span></li>
                                                            <li id="io_27">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="pending-print-req.print" id="c_io_27" /><span>pending-print-req.print </span></li>
                                                            <li id="io_28">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="pending-print-req.view" id="c_io_28" /><span>pending-print-req.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_9">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_9" />
                                                        <span>Reprint Request </span>
                                                        <ul id="bf_l_9" style="display: none" class="inner_ul">
                                                            <li id="io_29">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="reprint-request.print" id="c_io_29" /><span>reprint-request.print </span></li>
                                                            <li id="io_30">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="reprint-request.view" id="c_io_30" /><span>reprint-request.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li id="bs_3">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_3" />
                                                <span>Reports </span>
                                                <ul id="bs_l_3" class="sub_ul" style="display: none">
                                                    
                                                    <li id="bf_10">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_10" />
                                                        <span>Printed Report</span>
                                                        <ul id="bf_l_10" style="display: none" class="inner_ul">
                                                            <li id="io_530">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.printed-report-selected-period" id="c_io_530" /><span>report.printed-report-selected-period </span></li>
                                                            <li id="io_31">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.printed-report-day-wise" id="c_io_31" /><span>report.printed-report-day-wise </span></li>
                                                            <li id="io_32">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.printed-report-excel" id="c_io_32" /><span>report.printed-report-excel </span></li>
                                                            <li id="io_33">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.printed-report-pdf" id="c_io_33" /><span>report.printed-report-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_11">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_11" />
                                                        <span>Consolidated Report Daily</span>
                                                        <ul id="bf_l_11" style="display: none" class="inner_ul">
                                                            <li id="io_34">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-daily" id="c_io_34" /><span>report.consolidate-report-daily </span></li>
                                                            <li id="io_35">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-daily-excel" id="c_io_35" /><span>report.consolidate-report-daily-excel </span></li>
                                                            <li id="io_36">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-daily-pdf" id="c_io_36" /><span>report.consolidate-report-daily-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_12">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_12" />
                                                        <span>Consolidated Report Monthly</span>
                                                        <ul id="bf_l_12" style="display: none" class="inner_ul">
                                                            <li id="io_37">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-monthly" id="c_io_37" /><span>report.consolidate-report-monthly </span></li>
                                                            <li id="io_38">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-monthly-excel" id="c_io_38" /><span>report.consolidate-report-monthly-excel </span></li>
                                                            <li id="io_39">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.consolidate-report-monthly-pdf" id="c_io_39" /><span>report.consolidate-report-monthly-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_13">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_13" />
                                                        <span>Reprint Report</span>
                                                        <ul id="bf_l_13" style="display: none" class="inner_ul">
                                                            <li id="io_40">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.reprint" id="c_io_40" /><span>report.reprint </span></li>
                                                            <li id="io_41">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.reprint-excel" id="c_io_41" /><span>report.reprint-excel </span></li>
                                                            <li id="io_42">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.reprint-pdf" id="c_io_42" /><span>report.reprint-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_14">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_14" />
                                                        <span>Customer Report</span>
                                                        <ul id="bf_l_14" style="display: none" class="inner_ul">
                                                            <li id="io_43">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.customer" id="c_io_43" /><span>report.customer </span></li>
                                                            <li id="io_44">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.customer-excel" id="c_io_44" /><span>report.customer-excel </span></li>
                                                            <li id="io_45">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.customer-pdf" id="c_io_45" /><span>report.customer-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_15">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_15" />
                                                        <span>Output File Report</span>
                                                        <ul id="bf_l_15" style="display: none" class="inner_ul">
                                                            <li id="io_46">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.outputfile" id="c_io_46" /><span>report.outputfile </span></li>
                                                            <li id="io_47">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.outputfile-via-text" id="c_io_47" /><span>report.outputfile-via-text </span></li>
                                                            <li id="io_48">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.get-outputfile-excel" id="c_io_48" /><span>report.get-outputfile-excel </span></li>
                                                            <li id="io_49">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="report.get-outputfile-via-text" id="c_io_49" /><span>report.get-outputfile-via-text </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="bs_4">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_4" />
                                                <span>Administration & Controls </span>
                                                <ul id="bs_l_4" style="display: none" class="sub_ul">
                                                    <li id="bf_16">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_16" />
                                                        <span>Role </span>
                                                        <ul id="bf_l_16" style="display: none" class="inner_ul">
                                                            <li id="io_151">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="role.add" id="c_io_151" /><span>role.add </span></li>
                                                            <li id="io_50">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="role.edit" id="c_io_50" /><span>role.edit </span></li>
                                                            <li id="io_51">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="role.view" id="c_io_51" /><span>role.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_17">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_17" />
                                                        <span>Manage User </span>
                                                        <ul id="bf_l_17" style="display: none" class="inner_ul">
                                                            <li id="io_52">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="manage-user.add" id="c_io_52" /><span>manage-user.add </span></li>
                                                            <li id="io_53">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="manage-user.delete" id="c_io_53" /><span>manage-user.delete </span></li>
                                                            <li id="io_54">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="manage-user.edit" id="c_io_54" /><span>manage-user.edit </span></li>
                                                            <li id="io_55">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="manage-user.view" id="c_io_55" /><span>manage-user.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_18">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_18" />
                                                        <span>Backup </span>
                                                        <ul id="bf_l_18" style="display: none" class="inner_ul">
                                                            <li id="io_56">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="backup" id="c_io_56" /><span>backup </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_19">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_19" />
                                                        <span>Setting </span>
                                                        <ul id="bf_l_19" style="display: none" class="inner_ul">
                                                            <li id="io_57">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="setting" id="c_io_57" /><span>setting </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_139">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_139" />
                                                        <span>Positional Setting </span>
                                                        <ul id="bf_l_139" style="display: none" class="inner_ul">
                                                            <li id="io_857">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="positional-setting.view" id="c_io_857" /><span>positional-setting.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li id="bs_5">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_5" />
                                                <span>Reprint </span>
                                                <ul id="bs_l_5" style="display: none" class="sub_ul">
                                                    <li id="bf_20">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_20" />
                                                        <span>Process Reprint </span>
                                                        <ul id="bf_l_20" style="display: none" class="inner_ul">
                                                            <li id="io_58">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="process-reprint.delete" id="c_io_58" /><span>process-reprint.delete </span></li>
                                                            <li id="io_59">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="process-reprint.print-in-bunch" id="c_io_59" /><span>process-reprint.print-in-bunch </span></li>
                                                            <li id="io_60">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="process-reprint.print-requisiion-only" id="c_io_60" /><span>process-reprint.print-requisiion-only </span></li>
                                                            <li id="io_61">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="process-reprint.print-selected-pages" id="c_io_61" /><span>process-reprint.print-selected-pages </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_21">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_21" />
                                                        <span>Reprint Single Leaf </span>
                                                        <ul id="bf_l_21" style="display: none" class="inner_ul">
                                                            <li id="io_62">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="reprint-single-leaf.delete" id="c_io_62" /><span>reprint-single-leaf.delete </span></li>
                                                            <li id="io_63">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="reprint-single-leaf.print" id="c_io_63" /><span>reprint-single-leaf.print </span></li>
                                                            <li id="io_64">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="reprint-single-leaf.view" id="c_io_64" /><span>reprint-single-leaf.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_manage_bank_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_manage_bank_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- End of add manage bank Modal -->


<!-- Edit manage bank Modal -->
<div class="modal fade" id="edit_manage_bank_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit_manage_bank_modal_form" class="form" action="#" method="post" enctype="multipart/form-data">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Manage Centralize Printing Banks</h1>
                    </div>
                    <!--end::Heading-->
                    <div class="div-highlight">
                        <h3>Basic Details : </h3>
                    </div>
                    <input type="hidden" name="id" id="editId">
                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label class="required">Bank Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="name" id="editName" class="form-control">
                                    <label class="text-danger d-none"></label>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label class="required">Subdomain Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="subdomain" id="editSubDomain" class="form-control">
                                    <label class="text-danger d-none"></label>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"><h4>Customer Contact Details : </h4></td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Email Id :</label>
                                </td>
                                <td>
                                    <input type="email" name="email" id="editEmail" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Mobile No. :</label>
                                </td>
                                <td>
                                    <input type="number" name="mobile" id="editMobile" class="form-control" maxlength="12">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Contact Person Name. :</label>
                                </td>
                                <td>
                                    <input type="text" name="contact_person" id="editContactPerson" class="form-control">
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"><h4>Printing Branch Details : </h4></td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>State :</label>
                                </td>
                                <td>
                                    <input type="text" name="state" id="editState" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>City :</label>
                                </td>
                                <td>
                                    <input type="text" name="city" id="editCity" class="form-control">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Address :</label>
                                </td>
                                <td>
                                    <textarea name="address" id="editAddress" class="form-control"></textarea>
                                </td>
                            </tr> 
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sales Person Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="sales_person" id="editSalesPerson" class="form-control">
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <div class="div-highlight">
                        <h3>Technical Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Input File Format Description :</label>
                                </td>
                                <td>
                                    <textarea name="input_file_format_description" id="editInputFileFormatDescription" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sample Input File :</label>
                                </td>
                                <td>
                                    <a href="#" download id="downloadSampleInputFile" class="btn btn-sm btn-primary d-none">Download Sample Input File</a>
                                    <input type="file" name="sample_input_file" id="editSampleInputFile" class="form-control">
                                </td>
                            </tr>  
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Output File Format Description :</label>
                                </td>
                                <td>
                                    <textarea name="output_file_format_description" id="editOutputFileFormatDescription" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Sample Output File :</label>
                                </td>
                                <td>
                                    <a href="#" download id="downloadSampleOutputFile" class="btn btn-sm btn-primary d-none">Download Sample Output File</a>
                                    <input type="file" name="sample_output_file" id="editSampleOutputFile" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printed Requisition Sample :</label>
                                </td>
                                <td>
                                    <a href="#" download id="downloadSampleRequisition" class="btn btn-sm btn-primary d-none">Printed Requisition Sample</a>
                                    <input type="file" name="sample_requisition" id="editSampleRequisition" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printed Cheque Sample :</label>
                                </td>
                                <td>
                                    <a href="#" download id="downloadSampleCheque" class="btn btn-sm btn-primary d-none">Printed Requisition Sample</a>
                                    <input type="file" name="sample_cheque" id="editSampleCheque" class="form-control">
                                </td>
                            </tr>   
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Special Requirement :</label>
                                </td>
                                <td>
                                    <textarea name="special_requirement" id="editSpecialRequirement" class="form-control"></textarea>
                                </td>
                            </tr>                          
                        </tbody>
                    </table>


                    <div class="div-highlight">
                        <h3>Printing Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printer Brand Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="printer_brand" id="editPrinterBrand" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Exact Printer Model Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="printer_model" id="editPrinterModel" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printing Computer OS Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="os_name" id="editOsName" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Printing Computer OS Bit Version :</label>
                                </td>
                                <td>
                                    <input type="text" name="os_bit_version" id="editOsBitVersion" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>PCP Version :</label>
                                </td>
                                <td>
                                    <input type="text" name="pcp_version" id="editPcpVersion" class="form-control">
                                </td>
                            </tr>                 
                        </tbody>
                    </table>



                    <div class="div-highlight">
                        <h3>License Installation Details : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Installation By :</label>
                                </td>
                                <td>
                                    <input type="text" name="installation_by" id="editInstallationBy" class="form-control">
                                </td>
                                <td style="font-size:15px;vertical-align: middle;">On&nbsp;:</td>
                                <td>
                                    <input type="date" name="installation_date" id="editInstallationDate" class="form-control" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Training By :</label>
                                </td>
                                <td>
                                    <input type="text" name="training_by" id="editTrainingBy" class="form-control">
                                </td>
                                <td style="font-size:15px;vertical-align: middle;">On&nbsp;:</td>
                                <td>
                                    <input type="date" name="training_date" id="editTrainingDate" class="form-control" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:15px;vertical-align: middle;">
                                    <label>Licence Start Date :</label>
                                </td>
                                <td>
                                    <input type="date" name="licence_start_date" id="editLicenceStartDate" class="form-control" autocomplete="off">
                                </td>
                                <td colspan="2"></td>
                            </tr>                
                        </tbody>
                    </table>


                    <div class="div-highlight">
                        <h3>Module Access Tree : </h3>
                    </div>

                    <table class="table mt-2" align="center">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="tree_main_edit">
                                        <ul id="bs_main_edit" class="main_ul">
                                            <li id="bs_6">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_6" />
                                                <span>Master </span>
                                                <ul id="bs_l_6" class="sub_ul" style="display: none">
                                                    <li id="bf_22">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_22" />
                                                        <span>Country Master</span>
                                                        <ul id="bf_l_22" style="display: none" class="inner_ul">
                                                            <li id="io_65">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="country.add" id="c_io_65" /><span>country.add </span></li>
                                                            <li id="io_66">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="country.delete" id="c_io_66" /><span>country.delete </span></li>
                                                            <li id="io_67">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="country.edit" id="c_io_67" /><span>country.edit </span></li>
                                                            <li id="io_68">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="country.view" id="c_io_68" /><span>country.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_23">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_23" />
                                                        <span>State Master</span>
                                                        <ul id="bf_l_23" style="display: none" class="inner_ul">
                                                            <li id="io_69">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="state.add" id="c_io_69" /><span>state.add </span></li>
                                                            <li id="io_70">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="state.delete" id="c_io_70" /><span>state.delete </span></li>
                                                            <li id="io_71">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="state.edit" id="c_io_71" /><span>state.edit </span></li>
                                                            <li id="io_72">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="state.view" id="c_io_72" /><span>state.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_24">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_24" />
                                                        <span>Branch Master</span>
                                                        <ul id="bf_l_24" style="display: none" class="inner_ul">
                                                            <li id="io_73">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="branch.add" id="c_io_73" /><span>branch.add </span></li>
                                                            <li id="io_74">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="branch.delete" id="c_io_74" /><span>branch.delete </span></li>
                                                            <li id="io_75">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="branch.edit" id="c_io_75" /><span>branch.edit </span></li>
                                                            <li id="io_76">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="branch.view" id="c_io_76" /><span>branch.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_25">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_25" />
                                                        <span>Transaction Code Master</span>
                                                        <ul id="bf_l_25" style="display: none" class="inner_ul">
                                                            <li id="io_77">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction-code.add" id="c_io_77" /><span>transaction-code.add </span></li>
                                                            <li id="io_78">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction-code.delete" id="c_io_78" /><span>transaction-code.delete </span></li>
                                                            <li id="io_79">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction-code.edit" id="c_io_79" /><span>transaction-code.edit </span></li>
                                                            <li id="io_80">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction-code.view" id="c_io_80" /><span>transaction-code.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_26">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_26" />
                                                        <span>Cheque Series Master</span>
                                                        <ul id="bf_l_26" style="display: none" class="inner_ul">
                                                            <li id="io_81">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="cheque-series.add" id="c_io_81" /><span>cheque-series.add </span></li>
                                                            <li id="io_82">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="cheque-series.delete" id="c_io_82" /><span>cheque-series.delete </span></li>
                                                            <li id="io_83">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="cheque-series.edit" id="c_io_83" /><span>cheque-series.edit </span></li>
                                                            <li id="io_84">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="cheque-series.view" id="c_io_84" /><span>cheque-series.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_27">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_27" />
                                                        <span>Bank Master</span>
                                                        <ul id="bf_l_27" style="display: none" class="inner_ul">
                                                            <li id="io_85">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="bank.view" id="c_io_85" /><span>bank.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="bs_7">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_7" />
                                                <span>Transaction </span>
                                                <ul id="bs_l_7" style="display: none" class="sub_ul">
                                                    <li id="bf_28">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_28" />
                                                        <span>Upload & Print </span>
                                                        <ul id="bf_l_28" style="display: none" class="inner_ul">
                                                            <li id="io_86">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction.delete" id="c_io_86" /><span>transaction.delete </span></li>
                                                            <li id="io_87">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction.filter" id="c_io_87" /><span>transaction.filter </span></li>
                                                            <li id="io_88">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction.print" id="c_io_88" /><span>transaction.print </span></li>
                                                            <li id="io_89">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="transaction.upload" id="c_io_89" /><span>transaction.upload </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_29">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_29" />
                                                        <span>Pending Print Request </span>
                                                        <ul id="bf_l_29" style="display: none" class="inner_ul">
                                                            <li id="io_90">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="pending-print-req.cancel" id="c_io_90" /><span>pending-print-req.cancel </span></li>
                                                            <li id="io_91">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="pending-print-req.print" id="c_io_91" /><span>pending-print-req.print </span></li>
                                                            <li id="io_92">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="pending-print-req.view" id="c_io_92" /><span>pending-print-req.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_30">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_30" />
                                                        <span>Reprint Request </span>
                                                        <ul id="bf_l_30" style="display: none" class="inner_ul">
                                                            <li id="io_93">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="reprint-request.print" id="c_io_93" /><span>reprint-request.print </span></li>
                                                            <li id="io_94">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="reprint-request.view" id="c_io_94" /><span>reprint-request.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li id="bs_8">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_8" />
                                                <span>Reports </span>
                                                <ul id="bs_l_8" class="sub_ul" style="display: none">
                                                    
                                                    <li id="bf_31">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_31" />
                                                        <span>Printed Report</span>
                                                        <ul id="bf_l_31" style="display: none" class="inner_ul">
                                                            <li id="io_95">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.printed-report-selected-period" id="c_io_95" /><span>report.printed-report-selected-period </span></li>
                                                            <li id="io_96">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.printed-report-day-wise" id="c_io_96" /><span>report.printed-report-day-wise </span></li>
                                                            <li id="io_97">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.printed-report-excel" id="c_io_97" /><span>report.printed-report-excel </span></li>
                                                            <li id="io_98">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.printed-report-pdf" id="c_io_98" /><span>report.printed-report-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_32">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_32" />
                                                        <span>Consolidated Report Daily</span>
                                                        <ul id="bf_l_32" style="display: none" class="inner_ul">
                                                            <li id="io_99">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-daily" id="c_io_99" /><span>report.consolidate-report-daily </span></li>
                                                            <li id="io_100">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-daily-excel" id="c_io_100" /><span>report.consolidate-report-daily-excel </span></li>
                                                            <li id="io_101">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-daily-pdf" id="c_io_101" /><span>report.consolidate-report-daily-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_33">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_33" />
                                                        <span>Consolidated Report Monthly</span>
                                                        <ul id="bf_l_33" style="display: none" class="inner_ul">
                                                            <li id="io_102">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-monthly" id="c_io_102" /><span>report.consolidate-report-monthly </span></li>
                                                            <li id="io_103">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-monthly-excel" id="c_io_103" /><span>report.consolidate-report-monthly-excel </span></li>
                                                            <li id="io_104">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.consolidate-report-monthly-pdf" id="c_io_104" /><span>report.consolidate-report-monthly-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_34">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_34" />
                                                        <span>Reprint Report</span>
                                                        <ul id="bf_l_34" style="display: none" class="inner_ul">
                                                            <li id="io_105">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.reprint" id="c_io_105" /><span>report.reprint </span></li>
                                                            <li id="io_106">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.reprint-excel" id="c_io_106" /><span>report.reprint-excel </span></li>
                                                            <li id="io_107">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.reprint-pdf" id="c_io_107" /><span>report.reprint-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_35">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_35" />
                                                        <span>Customer Report</span>
                                                        <ul id="bf_l_35" style="display: none" class="inner_ul">
                                                            <li id="io_108">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.customer" id="c_io_108" /><span>report.customer </span></li>
                                                            <li id="io_109">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.customer-excel" id="c_io_109" /><span>report.customer-excel </span></li>
                                                            <li id="io_110">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.customer-pdf" id="c_io_110" /><span>report.customer-pdf </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_36">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_36" />
                                                        <span>Output File Report</span>
                                                        <ul id="bf_l_36" style="display: none" class="inner_ul">
                                                            <li id="io_111">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.outputfile" id="c_io_111" /><span>report.outputfile </span></li>
                                                            <li id="io_112">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.outputfile-via-text" id="c_io_112" /><span>report.outputfile-via-text </span></li>
                                                            <li id="io_113">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.get-outputfile-excel" id="c_io_113" /><span>report.get-outputfile-excel </span></li>
                                                            <li id="io_114">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="report.get-outputfile-via-text" id="c_io_114" /><span>report.get-outputfile-via-text </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="bs_9">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_9" />
                                                <span>Administration & Controls </span>
                                                <ul id="bs_l_9" style="display: none" class="sub_ul">
                                                    <li id="bf_37">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_37" />
                                                        <span>Role </span>
                                                        <ul id="bf_l_37" style="display: none" class="inner_ul">
                                                            <li id="io_251">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="role.add" id="c_io_251" /><span>role.add </span></li>
                                                            <li id="io_115">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="role.edit" id="c_io_115" /><span>role.edit </span></li>
                                                            <li id="io_116">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="role.view" id="c_io_116" /><span>role.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_38">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_38" />
                                                        <span>Manage User </span>
                                                        <ul id="bf_l_38" style="display: none" class="inner_ul">
                                                            <li id="io_117">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="manage-user.add" id="c_io_117" /><span>manage-user.add </span></li>
                                                            <li id="io_118">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="manage-user.delete" id="c_io_118" /><span>manage-user.delete </span></li>
                                                            <li id="io_119">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="manage-user.edit" id="c_io_119" /><span>manage-user.edit </span></li>
                                                            <li id="io_120">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="manage-user.view" id="c_io_120" /><span>manage-user.view </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_39">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_39" />
                                                        <span>Backup </span>
                                                        <ul id="bf_l_39" style="display: none" class="inner_ul">
                                                            <li id="io_121">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="backup" id="c_io_121" /><span>backup </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_40">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_40" />
                                                        <span>Setting </span>
                                                        <ul id="bf_l_40" style="display: none" class="inner_ul">
                                                            <li id="io_122">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="setting" id="c_io_122" /><span>setting </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_240">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_240" />
                                                        <span>Positional Setting </span>
                                                        <ul id="bf_l_240" style="display: none" class="inner_ul">
                                                            <li id="io_8157">
                                                                <input type="checkbox" class="form-check-input saveAccessModule" value="positional-setting.view" id="c_io_8157" /><span>positional-setting.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li id="bs_10">
                                                <span class="plus">&nbsp;</span>
                                                <input type="checkbox" class="form-check-input" id="c_bs_10" />
                                                <span>Reprint </span>
                                                <ul id="bs_l_10" style="display: none" class="sub_ul">
                                                    <li id="bf_41">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_41" />
                                                        <span>Process Reprint </span>
                                                        <ul id="bf_l_41" style="display: none" class="inner_ul">
                                                            <li id="io_123">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="process-reprint.delete" id="c_io_123" /><span>process-reprint.delete </span></li>
                                                            <li id="io_124">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="process-reprint.print-in-bunch" id="c_io_124" /><span>process-reprint.print-in-bunch </span></li>
                                                            <li id="io_125">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="process-reprint.print-requisiion-only" id="c_io_125" /><span>process-reprint.print-requisiion-only </span></li>
                                                            <li id="io_126">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="process-reprint.print-selected-pages" id="c_io_126" /><span>process-reprint.print-selected-pages </span></li>
                                                        </ul>
                                                    </li>
                                                    <li id="bf_42">
                                                        <span class="plus">&nbsp;</span>
                                                        <input type="checkbox" class="form-check-input" id="c_bf_42" />
                                                        <span>Reprint Single Leaf </span>
                                                        <ul id="bf_l_42" style="display: none" class="inner_ul">
                                                            <li id="io_127">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="reprint-single-leaf.delete" id="c_io_127" /><span>reprint-single-leaf.delete </span></li>
                                                            <li id="io_128">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="reprint-single-leaf.print" id="c_io_128" /><span>reprint-single-leaf.print </span></li>
                                                            <li id="io_129">
                                                                <input type="checkbox" class="form-check-input editModuleAccess" value="reprint-single-leaf.view" id="c_io_129" /><span>reprint-single-leaf.view </span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>          
                        </tbody>
                    </table>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <label class="required fs-6 fw-semibold mb-2">Status</label>
                                    <select class="form-select form-select-solid" name="status" id="editStatus">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="edit_manage_bank_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_manage_bank_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- End of edit manage bank Modal -->


<!-- Add transaction code Modal -->
<div class="modal fade" id="edit_transaction_code" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit_transaction_code_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Transaction Code Index Value</h1>
                    </div>
                    <!--end::Heading-->
                    
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="required">Explode With</th>
                                <td>
                                    <input type="hidden" name="subdomain" id="transactioncodesubdomain">
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="explode">
                                    <input type="text" name="index[]" class="form-control transactionCodeIndexValue" id="explode" value="~" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Total No of column</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="totalcolumn">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="41" name="index[]" max="50" id="totalcolumn" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Unique Request</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="uniquerequest">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="0" name="index[]" id="uniquerequest" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Branch Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="branchcode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="2" name="index[]" id="branchcode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">City Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="citycode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="3" name="index[]" id="citycode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Bank Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="bankcode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="1" name="index[]" id="bankcode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Transaction Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="transactioncode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="7" name="index[]" id="transactioncode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Account Number</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="accountno">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="6" name="index[]" id="accountno" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="customername">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="8" name="index[]" id="customername" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Joint Name 1</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="jointname1">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="9" name="index[]" id="jointname1" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Joint Name 2</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="jointname2">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="10" name="index[]" id="jointname2" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Address 1</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="address1">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="14" name="index[]" id="address1" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Address 2</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="address2">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="15" name="index[]" id="address2" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Address 3</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="address3">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="16" name="index[]" id="address3" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Address 4</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="address4">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="17" name="index[]" id="address4" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Address 5</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="address5">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="18" name="index[]" id="address5" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="city">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="19" name="index[]" id="city" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Pin Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="pincode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="20" name="index[]" id="pincode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">No. of Books</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="noofbooks">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="24" name="index[]" id="noofbooks" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th class="required">Book Size</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="booksize">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="25" name="index[]" id="booksize" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Cheque No From</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="chequenofrom">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="29" name="index[]" id="chequenofrom" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Cheque No To</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="chequenoto">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="30" name="index[]" id="chequenoto" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Issue Date</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="issuedate">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="31" name="index[]" id="issuedate" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>CPS Date</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="cpsdate">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="31" name="index[]" id="cpsdate" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>MICR Account No</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="micraccountno">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="5" name="index[]" id="micraccountno" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="productcode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="36" name="index[]" id="productcode" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Signatory 1</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="signatory1">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="11" name="index[]" id="signatory1" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Signatory 2</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="signatory2">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="12" name="index[]" id="signatory2" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Signatory 3</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="signatory3">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="13" name="index[]" id="signatory3" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="mobile">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="23" name="index[]" id="mobile" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Telephone Res</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="telephoneres">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="21" name="index[]" id="telephoneres" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>Telephone Off</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="telephoneoff">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="23" name="index[]" id="telephoneoff" max="50" />
                                </td>
                            </tr>
                            <tr>
                                <th>BSR Code</th>
                                <td>
                                    <input type="hidden" name="name[]" class="transactionCodeIndexName" value="bsrcode">
                                    <input type="number" class="form-control txtOnlyNumber transactionCodeIndexValue" value="33" name="index[]" id="bsrcode" max="50" />
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_transaction_code_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- End of transaction code index Modal -->

@endsection

@push('scripts')
	<script>
        getManageBanks();

        function getManageBanks(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                 // searching: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/manage-bank/list') }}",
                    method: "post",
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'name',
                        name: 'name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'subdomain',
                        name: 'subdomain',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row){
                            if(data == 1){
                                return `<div class="badge badge-light-success">Active</div>`;
                            }else{
                                return `<div class="badge badge-light-danger">Inactive</div>`;
                            }
                        },
                    },{
                        data: 'id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            let html = `<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="${data}">
                                    <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                                </button>
                                <button class="btn btn-icon w-30px h-30px transactioncodeindex" data-id="${data}">
                                    <i class="fa fa-eye" style="font-weight:normal !important;" title="Set Index"></i>
                                </button>`;

                            return html;
                        },
                    }
                ]
            });
        }

        $(document).ready(function(){
            // edit button click event
            $('body').on('click', '.btn-active-light-primary', function(){
                let id = $(this).data('id');
                $('#edit_manage_bank_modal').modal('show');
                $.ajax({
                    url: "/manage-bank/edit/"+id,
                    type: "get",
                    success: function( response ) {
                        $('#editId').val(response.data.id)
                        $('#editName').val(response.data.name)
                        $('#editSubDomain').val(response.data.subdomain)
                        $('#editEmail').val(response.data.email)
                        $('#editMobile').val(response.data.mobile)
                        $('#editContactPerson').val(response.data.contact_person)
                        $('#editState').val(response.data.state)
                        $('#editCity').val(response.data.city)
                        $('#editAddress').val(response.data.address)
                        $('#editSalesPerson').val(response.data.sales_person)
                        $('#editInputFileFormatDescription').val(response.data.input_file_format_description)
                        $('#editOutputFileFormatDescription').val(response.data.output_file_format_description)
                        $('#editSpecialRequirement').val(response.data.special_requirement)
                        $('#editPrinterBrand').val(response.data.printer_brand)
                        $('#editPrinterModel').val(response.data.printer_model)
                        $('#editOsName').val(response.data.os_name)
                        $('#editOsBitVersion').val(response.data.os_bit_version)
                        $('#editPcpVersion').val(response.data.pcp_version)
                        $('#editInstallationBy').val(response.data.installation_by)
                        $('#editInstallationDate').val(response.data.installation_date)
                        $('#editTrainingBy').val(response.data.training_by)
                        $('#editTrainingDate').val(response.data.training_date)
                        $('#editLicenceStartDate').val(response.data.licence_start_date)
                        $('#editStatus').val(response.data.status).change()

                        // downloadSampleCheque
                        $('#downloadSampleInputFile').addClass('d-none')
                        if(response.data.sample_input_file != ""){
                            $('#downloadSampleInputFile').removeClass('d-none')
                            $('#downloadSampleInputFile').attr('href', `{{ asset('/') }}storage/${response.data.sample_input_file}`)
                        }

                        $('#downloadSampleOutputFile').addClass('d-none')
                        if(response.data.sample_output_file != ""){
                            $('#downloadSampleOutputFile').removeClass('d-none')
                            $('#downloadSampleOutputFile').attr('href', `{{ asset('/') }}storage/${response.data.sample_output_file}`)
                        }

                        $('#downloadSampleRequisition').addClass('d-none')
                        if(response.data.sample_requisition != ""){
                            $('#downloadSampleRequisition').removeClass('d-none')
                            $('#downloadSampleRequisition').attr('href', `{{ asset('/') }}storage/${response.data.sample_requisition}`)
                        }

                        $('#downloadSampleCheque').addClass('d-none')
                        if(response.data.sample_cheque != ""){
                            $('#downloadSampleCheque').removeClass('d-none')
                            $('#downloadSampleCheque').attr('href', `{{ asset('/') }}storage/${response.data.sample_cheque}`)
                        }
                        
                        const moduleAccess = response.data.module_access.split("|");
                        $('.editModuleAccess').prop('checked', false)
                        for(let i=0; i<moduleAccess.length; i++){
                            $('.editModuleAccess').each(function(){
                                if(moduleAccess[i] == $(this).val()){
                                    $(this).prop('checked', true)
                                    
                                }
                            })
                        }

                        checkSelectedCheckbox(response.data.module_access)
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
                });
            });

           


            $('#add_manage_bank_modal_submit').click(function(e){
               
                var frm_user = $('#add_manage_bank_modal_form');

                $("#add_manage_bank_modal_form").validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        subdomain: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Please Enter Bank Name",
                        },
                        subdomain: {
                            required: "Please Enter Subdomain.",
                        },
                    },
                    submitHandler: function(form) {
                        var sampleInputFile = $('#saveSampleInputFile')[0].files;
                        var sampleOutputFile = $('#saveSampleOutputFile')[0].files;
                        var sampleRequisition = $('#sampleRequisition')[0].files;
                        var sampleCheque = $('#sampleCheque')[0].files;
                        var fd = new FormData();
                        fd.append('sample_input_file',sampleInputFile[0]);
                        fd.append('sample_output_file',sampleOutputFile[0]);
                        fd.append('sample_requisition',sampleRequisition[0]);
                        fd.append('sample_cheque',sampleCheque[0]);
                        fd.append('_token','{{ csrf_token() }}');
                        fd.append('name', $('#saveName').val());
                        fd.append('subdomain', $('#saveSubDomain').val());
                        fd.append('email', $('#saveEmail').val());
                        fd.append('mobile', $('#saveMobile').val());
                        fd.append('contact_person', $('#saveContactPerson').val());
                        fd.append('state', $('#saveState').val());
                        fd.append('city', $('#saveCity').val());
                        fd.append('address', $('#saveAddress').val());
                        fd.append('sales_person', $('#saveSalesPerson').val());
                        fd.append('input_file_format_description', $('#saveInputFileFormatDescription').val());
                        fd.append('output_file_format_description', $('#saveOutputFileFormatDescription').val());
                        fd.append('special_requirement', $('#saveSpecialRequirement').val());
                        fd.append('printer_brand', $('#savePrinterBrand').val());
                        fd.append('printer_model', $('#savePrinterModel').val());
                        fd.append('os_name', $('#saveOsName').val());
                        fd.append('os_bit_version', $('#saveOsBitVersion').val());
                        fd.append('pcp_version', $('#savePcpVersion').val());
                        fd.append('installation_by', $('#saveInstallationBy').val());
                        fd.append('installation_date', $('#saveInstallationDate').val());
                        fd.append('training_by', $('#saveTrainingBy').val());
                        fd.append('training_date', $('#saveTrainingDate').val());
                        fd.append('licence_start_date', $('#saveLicenceStartDate').val());
                        // let module_access = getCheckedCheckbox('saveModuleAccess')
                        // fd.append('module_access', module_access);

                        $('.saveAccessModule:checked').each(function(){
                            fd.append('module_access[]', $(this).val());
                        })

                        // var myCheckboxes = new Array();
                        // $("input:checked").each(function() {
                        //    data['myCheckboxes[]'].push($(this).val());
                        // });


                        $.ajax({
                            url: "/manage-bank/store",
                            type: "POST",
                            data: fd,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function( response ) {
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#add_manage_bank_modal_form input[type="text"]').val('');
                                        $('#add_manage_bank_modal_form input[type="file"]').val('');
                                        $('#add_manage_bank_modal_form input[type="email"]').val('');
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getManageBanks();
                                        $('#add_manage_bank_modal').modal('toggle');
                                    });
                                }else{
                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().removeClass('d-none');
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                            $('[name="' + key + '"]').focus()
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
            });



            $('#edit_manage_bank_modal_submit').click(function(e){
                // e.preventDefault()
                var frm_user = $('#edit_manage_bank_modal_form');
                $("#edit_manage_bank_modal_form").validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        subdomain: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Please Enter Bank Name",
                        },
                        subdomain: {
                            required: "Please Enter Subdomain.",
                        },
                    },
                    submitHandler: function(form) {
                        var sampleInputFile = $('#editSampleInputFile')[0].files;
                        var sampleOutputFile = $('#editSampleOutputFile')[0].files;
                        var sampleRequisition = $('#editSampleRequisition')[0].files;
                        var sampleCheque = $('#editSampleCheque')[0].files;
                        var fd = new FormData();
                        fd.append('sample_input_file',sampleInputFile[0]);
                        fd.append('sample_output_file',sampleOutputFile[0]);
                        fd.append('sample_requisition',sampleRequisition[0]);
                        fd.append('sample_cheque',sampleCheque[0]);
                        fd.append('_token','{{ csrf_token() }}');
                        fd.append('id', $('#editId').val());
                        fd.append('name', $('#editName').val());
                        fd.append('subdomain', $('#editSubDomain').val());
                        fd.append('email', $('#editEmail').val());
                        fd.append('mobile', $('#editMobile').val());
                        fd.append('contact_person', $('#editContactPerson').val());
                        fd.append('state', $('#editState').val());
                        fd.append('city', $('#editCity').val());
                        fd.append('address', $('#editAddress').val());
                        fd.append('sales_person', $('#editSalesPerson').val());
                        fd.append('input_file_format_description', $('#editInputFileFormatDescription').val());
                        fd.append('output_file_format_description', $('#editOutputFileFormatDescription').val());
                        fd.append('special_requirement', $('#editSpecialRequirement').val());
                        fd.append('printer_brand', $('#editPrinterBrand').val());
                        fd.append('printer_model', $('#editPrinterModel').val());
                        fd.append('os_name', $('#editOsName').val());
                        fd.append('os_bit_version', $('#editOsBitVersion').val());
                        fd.append('pcp_version', $('#editPcpVersion').val());
                        fd.append('installation_by', $('#editInstallationBy').val());
                        fd.append('installation_date', $('#editInstallationDate').val());
                        fd.append('training_by', $('#editTrainingBy').val());
                        fd.append('training_date', $('#editTrainingDate').val());
                        fd.append('licence_start_date', $('#editLicenceStartDate').val());
                        fd.append('status', $('#editStatus').val());
                        $('.editModuleAccess:checked').each(function(){
                            fd.append('module_access[]', $(this).val());
                        })
                        // return false;
                        $.ajax({
                            url: "/manage-bank/update",
                            type: "POST",
                            data: fd,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function( response ) {
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#add_manage_bank_modal_form input[type="text"]').val('');
                                        $('#add_manage_bank_modal_form input[type="file"]').val('');
                                        $('#add_manage_bank_modal_form input[type="email"]').val('');
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getManageBanks();
                                        $('#edit_manage_bank_modal').modal('hide');
                                    });
                                }else{
                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().removeClass('d-none');
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                            $('[name="' + key + '"]').focus()
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
            });

            // edit_transaction_code_modal_submit
            $('#edit_transaction_code_modal_submit').click(function(e){
                e.preventDefault()
                var frm_user = $('#edit_transaction_code_modal_form');

                var fd = new FormData();
                fd.append('_token','{{ csrf_token() }}');
                fd.append('subdomain', $('#transactioncodesubdomain').val());

                $('.transactionCodeIndexName').each(function(){
                    fd.append('name[]', $(this).val());
                })
                $('.transactionCodeIndexValue').each(function(){
                    fd.append('index[]', $(this).val());
                })
                $.ajax({
                    url: "/manage-bank/transaction-code-index/update",
                    type: "POST",
                    data: fd,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function( response ) {
                        if(response.status == 200){
                            swal.fire({
                                icon: 'success',
                                title: "success!",
                                text: response.message
                            }).then(function() {
                                $('#edit_transaction_code_modal_form input[type="text"]').val('');
                                $('#edit_transaction_code_modal_form input[type="number"]').val('');
                                $('#edit_transaction_code').modal('hide');
                            });
                        }else{
                            if (response.errors) {
                                var errorString = '';
                                $.each(response.errors, function (key, value) {
                                    $('[name="' + key + '"]').next().text(value);
                                    $('[name="' + key + '"]').next().show();
                                    $('[name="' + key + '"]').focus()
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
            });


            function getCheckedCheckbox(className){
                var filter = [];
                $('.'+className+':checked').each(function(){
                    filter.push($(this).val())
                })

                return filter;
            }

            

            $(".plus").click(function () {
                    $(this).toggleClass("minus").siblings("ul").toggle();
            })

            $("input[type=checkbox]").click(function () {
                //alert($(this).attr("id"));
                //var sp = $(this).attr("id");
                //if (sp.substring(0, 4) === "c_bs" || sp.substring(0, 4) === "c_bf") {
                    $(this).siblings("ul").find("input[type=checkbox]").prop('checked', $(this).prop('checked'));
                //}
            })

            $("input[type=checkbox]").change(function () {
                var sp = $(this).attr("id");
                if (sp.substring(0, 4) === "c_io") {
                    var ff = $(this).parents("ul[id^=bf_l]").attr("id");
                    if ($('#' + ff + ' > li input[type=checkbox]:checked').length == $('#' + ff + ' > li input[type=checkbox]').length) {
                        $('#' + ff).siblings("input[type=checkbox]").prop('checked', true);
                        check_fst_lvl(ff);
                    }
                    else {
                        $('#' + ff).siblings("input[type=checkbox]").prop('checked', false);
                        check_fst_lvl(ff);
                    }
                }

                if (sp.substring(0, 4) === "c_bf") {
                    var ss = $(this).parents("ul[id^=bs_l]").attr("id");
                    if ($('#' + ss + ' > li input[type=checkbox]:checked').length == $('#' + ss + ' > li input[type=checkbox]').length) {
                        $('#' + ss).siblings("input[type=checkbox]").prop('checked', true);
                        check_fst_lvl(ss);
                    }
                    else {
                        $('#' + ss).siblings("input[type=checkbox]").prop('checked', false);
                        check_fst_lvl(ss);
                    }
                }
            });


            function check_fst_lvl(dd) {
                //var ss = $('#' + dd).parents("ul[id^=bs_l]").attr("id");
                var ss = $('#' + dd).parent().closest("ul").attr("id");
                if ($('#' + ss + ' > li input[type=checkbox]:checked').length == $('#' + ss + ' > li input[type=checkbox]').length) {
                    //$('#' + ss).siblings("input[id^=c_bs]").prop('checked', true);
                    $('#' + ss).siblings("input[type=checkbox]").prop('checked', true);
                }
                else {
                    //$('#' + ss).siblings("input[id^=c_bs]").prop('checked', false);
                    $('#' + ss).siblings("input[type=checkbox]").prop('checked', false);
                }

            }

            function pageLoad() {
                $(".plus").click(function () {
                    $(this).toggleClass("minus").siblings("ul").toggle();
                })
            }

            function checkSelectedCheckbox(data){
                // let mainEdit = $('.bs_main_edit').find('.inner_ul');
                // alert(mainEdit.length)
                
                try {
                    const moduleAccess = data.split("|");
                    $('.editModuleAccess').prop('checked', false)
                    for(let i=0; i<moduleAccess.length; i++){
                        $('.editModuleAccess').each(function(){
                            if(moduleAccess[i] == $(this).val()){
                                $(this).prop('checked', true)
                            }
                        })
                    }
                }
                finally {
                    try{
                        $('#bs_main_edit').find('.inner_ul').each(function(){
                            let chklen = parseInt($(this).find('input:checkbox:not(":checked")').length);
                            if(chklen == 0){
                                // console.log($(this).find(".editModuleAccess").val())
                                $(this).closest('li').find('.form-check-input').prop('checked', true)
                            }
                        });
                    }finally{
                        $('#bs_main_edit').find('.sub_ul').each(function(){
                            let chklen = parseInt($(this).find('li').find('input:checkbox:not(":checked")').length);
                            if(chklen == 0){
                                // console.log($(this).find(".editModuleAccess").val())
                                $(this).closest('li').find('.form-check-input').prop('checked', true)
                            }
                        });
                    }
                }

                
            }

            // edit_transaction_code
            $('body').on('click', '.transactioncodeindex', function(){
                let subdomain = $(this).closest('tr').find("td").eq(2).text()
                $('#transactioncodesubdomain').val(subdomain)
                $('#edit_transaction_code').modal('show');
                $.ajax({
                    url: "/manage-bank/transaction-code-index/edit/"+subdomain,
                    type: "get",
                    success: function( response ) {
                        $.each(response.data, function($key, $value){
                            $('#'+$key).val($value)
                        })
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
                });
            })
        })
	</script>
@endpush