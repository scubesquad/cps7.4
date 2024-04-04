@extends('layouts.master')

@section('body')
    <style type="text/css">
        table.dataTable td, table.dataTable th{
            text-wrap: nowrap;
        }
    </style>
     <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        @include('message.message')
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Cheque Print Requests</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Cheque Print Requests</a>
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
                                    @can('transaction.upload')
                                    <form action="" method="post" class="w-50" id="upload_request_file_form">
                                        <fieldset class="border p-2">
                                            <legend  class="float-none w-auto p-2">Choose a file to upload</legend>
                                            <div class="d-flex">
                                                <div>
                                                    <input type="file" class="form-control mb-4" id="uploadFile" name="upload">
                                                    <label class="errorUpload text-danger"></label>
                                                </div>
                                                <div>
                                                    <button id="uploadRequestFile" class="btn btn-light mx-4">Upload</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    @endcan

                                    <div>
                                        @if(isset($toner) && $toner->is_toner == 1)
                                            @if($toner->toner_leaves_capacity <= 100)
                                                <label style="color:red;float: right;font-size: 14px;background-color: yellow;">Toner can print <b>{{ $toner->toner_leaves_capacity }}<b> leaves. Please replace your toner.</label>
                                            @else
                                                <label style="float: right;font-size: 14px; color:blue;">Toner can print <b>{{ $toner->toner_leaves_capacity }}<b> leaves.</label>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    <!--begin::Table-->
                                    @can('transaction.filter')
                                    <div id="displayUploadingFilter" class="mb-3">
                                        <form id="post_search_form" method="POST">
                                            <div class="row">
                                                <div class="col-lg-3 col-12">
                                                    <label>Select Branch</label>
                                                    <select class="form-select mb-2" id="selectBranch" name="search_branch">
                                                        {{-- <option></option>
                                                        <option value="default" selected>Default template</option>
                                                        <option value="electronics">Electronics</option>
                                                        <option value="office">Office stationary</option>
                                                        <option value="fashion">Fashion</option> --}}
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <label>Transaction Type</label>
                                                    <select class="form-select mb-2" id="selectTransactionType" name="search_tr_code">
                                                        {{-- <option></option>
                                                        <option value="default" selected>Default template</option>
                                                        <option value="electronics">Electronics</option>
                                                        <option value="office">Office stationary</option>
                                                        <option value="fashion">Fashion</option> --}}
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <label>Book Size</label>
                                                    <select class="form-select mb-2" id="selectBookSize" name="search_book_size">
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div>&nbsp;</div>
                                                    <button class="btn btn-primary" id="filterTransaction">Search</button>

                                                    <button class="btn btn-dark" id="search_reset_btn">Reset</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endcan
                                    <table class="table align-middle table-row-dashed" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th></th>
                                                <th>Action</th>
                                                <th>Unique Request No</th>
                                                <th>Micr Code</th>
                                                <th>Account No</th>
                                                <th>Customer Name</th>
                                                <th>No Of Books</th>
                                                <th>Book Size</th>
                                                <th>Tr Code</th>
                                                <th>At Par</th>
                                                <th>Chk No. From</th>
                                                <th>Chk No. To</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Address 3</th>
                                                <th>Address 4</th>
                                                <th>Address 5</th>
                                                <th>City</th>
                                                <th>PIN</th>
                                                <th>Mobile</th>
                                                <th>Cheque Charges</th>
                                                <th>Status</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-700">
                                            
                                        </tbody>
                                        <!--end::Table body-->
                                        <tfoot class="bg-light">
                                            <tr>
                                                <th colspan="19">
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 selectAll">Select all</button>&nbsp;&nbsp;&nbsp;
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deSelectAll">Deselect all</button>&nbsp;&nbsp;&nbsp;
                                                    
                                                    @can('transaction.reject')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 rejectPrintRequest">Reject Print Request</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan

                                                    @can('transaction.print')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printInBunch">Approve Print Request</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan

                                                    @can('transaction.delete')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deleteSelected">Delete Selected</button>
                                                    @endcan

                                                </th>
                                            </tr>
                                        </tfoot>
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
        

<!-- Edit upload data Modal -->
<div class="modal fade" id="edit_upload_modal" tabindex="-1" aria-hidden="true">
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
                <form id="edit_upload_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Upload Data</h1>
                    </div>
                    <!--end::Heading--> 
                    <!--begin::Input group-->
                    <input type="hidden" name="upload_id" id="uploadId">

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Bank Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="bank_name" maxlength="100" id="bank_name" readonly />
                                <label for="bank_name" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Name</span>
                                </label>
                                <!--end::Label-->
                                <select class="form-control" name="branch_name" id="branch_name">
                                </select>
                                <label for="branch_name" class="error"></label>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Bank Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="bank_code" id="bank_code" maxlength="3" readonly />
                                <label for="bank_code" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_code" id="branch_code" maxlength="11" readonly />
                                <label for="branch_code" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>City Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="city_code" id="city_code" maxlength="11" readonly />
                                <label for="city_code" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>IFSC Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="ifsc_code" id="ifsc_code" maxlength="11" readonly />
                                <label for="ifsc_code" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Account Type</span>
                                </label>
                                <!--end::Label-->
                                <select class="form-control" name="account_type" id="account_type">
                                    <option value="">Select</option>
                                    @foreach($transcationCodes as $transcationCode)
                                        <option value="{{ $transcationCode->transactioncode }}">{{ $transcationCode->transactioncodedescription }}</option>
                                    @endforeach
                                </select>
                                <label for="account_type" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Customer A/C No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="customer_ac_no" id="customer_ac_no" />
                                <label for="customer_ac_no" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">MIRC A/C No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="micr_ac_no" id="micr_ac_no" />
                                <label for="micr_ac_no" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">No Of Books</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="no_of_books" id="no_of_books" />
                                <label for="no_of_books" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Book Size</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="book_size" id="book_size" />
                                <label for="book_size" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Bearer/Order</span>
                                </label>
                                <!--end::Label-->
                                <select class="form-control" name="bearer_order" id="bearer_order">
                                    <option value="">== Select ==</option>
                                    <option value="0">Bearer</option>
                                    <option value="1">Order</option>
                                </select>
                                <label for="bearer_order" class="error"></label>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Cheque From</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="cheque_from" id="cheque_from" />
                                <label for="cheque_from" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Cheque To</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="cheque_to" id="cheque_to" />
                                <label for="cheque_to" class="error"></label>
                            </div>
                        </div> --}}

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Customer Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="customer_name" id="customer_name" />
                                <label for="customer_name" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Customer Joint Name 1</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="customer_joint_name1" id="customer_joint_name1" />
                                <label for=customer_joint_name1" class="error"></label>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Customer Joint Name 2</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="customer_joint_name2" id="customer_joint_name2" />
                                <label for=customer_joint_name2" class="error"></label>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Sign Authority 1</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="sign_authority1" id="sign_authority1" />
                                <label for=sign_authority1" class="error"></label>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Sign Authority 2</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="sign_authority2" id="sign_authority2" />
                                <label for=sign_authority2" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Sign Authority 3</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="sign_authority3" id="sign_authority3" />
                                <label for=sign_authority3" class="error"></label>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Address Line1</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="address_line1" id="address_line1" maxlength="85" />
                                <label for="address_line1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Address Line2</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="address_line2" id="address_line2" maxlength="65" />
                                <label for="address_line2" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Address Line3</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="address_line3" id="address_line3" maxlength="65" />
                                <label for="address_line3" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">City</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="city" id="city" />
                                <label for="city" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Zip/Pin Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="pin_code" id="pin_code" />
                                <label for="pin_code" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Cust Mobile No</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="cust_mobile_no" id="cust_mobile_no" />
                                <label for="cust_mobile_no" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Cust Email Id</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="cust_email_id" id="cust_email_id" />
                                <label for="cust_email_id" class="error"></label>
                            </div>
                        </div>
                        
                       
                    </div>
                    
                    

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="edit_upload_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_upload_modal_submit" class="btn btn-primary">
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
<!-- End of edit upload data Modal -->


@endsection
@push('scripts')
    <script type="text/javascript">
        const socket = new WebSocket('ws://localhost:5000');
        var count = 0;
        var isCheck = 'complete';
        // socket.addEventListener('open', function (event) {
        //     console.log('Connected to the WS server!');
        //     isCheck = 'complete';
        // });

        // socket.addEventListener('close', function (event) {
        //     console.log('disconnected to the WS server!')
        // });

        // /*socket.addEventListener('message', function(event){
        //     console.log('2nd event?', event.data)
        // });*/

        // socket.addEventListener('message', function (event) {
        // });

        $(document).ready(function(){

            // Funtion to list data
            //getUploadTransactionRequest();
            // function getUploadTransactionRequest(branch="", transaction="", bookSize=''){
            //     $('#kt_ecommerce_products_table').DataTable({
            //         "bPaginate": false,
            //         "bLengthChange": false,
            //         "bFilter": true,
            //         "bInfo": false,
            //         "bAutoWidth": false,
            //         "autoWidth": false,
            //         processing: true,
            //         serverSide: true,
            //         // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            //         ajax: {
            //             url: "{{ url('/transaction/upload') }}",
            //             method: "post",
            //             data: {branch:branch, transaction:transaction, bookSize:bookSize},
            //         },
            //         columns: [
            //             {
            //                 data: 'id',
            //                 name: 'id',
            //                 orderable: false,
            //                 searchable: false,
            //                 render: function(data, type, row){
            //                     return `<input type="checkbox" class="selectId" name="id" value="${data}">`;
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'id',
            //                 orderable: false,
            //                 searchable: false,
            //                 render: function(data, type, row){
            //                     //$url = route('manualEdit',data);
            //                     let html = "";
            //                         html += `<a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(${data}) ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>`;
            //                     return html;
            //                 },
            //             },
            //             {
            //                 data: 'cps_unique_req',
            //                 name: 'cps_unique_req',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_micr_code',
            //                 name: 'cps_micr_code',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_account_no',
            //                 name: 'cps_account_no',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_name',
            //                 name: 'cps_act_name',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_no_of_books',
            //                 name: 'cps_no_of_books',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_book_size',
            //                 name: 'cps_book_size',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_tr_code',
            //                 name: 'cps_tr_code',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_atpar',
            //                 name: 'cps_atpar',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_chq_no_from',
            //                 name: 'cps_chq_no_from',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_chq_no_to',
            //                 name: 'cps_chq_no_to',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_address1',
            //                 name: 'cps_act_address1',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_address2',
            //                 name: 'cps_act_address2',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_address3',
            //                 name: 'cps_act_address3',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_address4',
            //                 name: 'cps_act_address4',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_address5',
            //                 name: 'cps_act_address5',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_city',
            //                 name: 'cps_act_city',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_pin',
            //                 name: 'cps_act_pin',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             },
            //             {
            //                 data: 'cps_act_mobile',
            //                 name: 'cps_act_mobile',
            //                 render: function(data, type, row){
            //                     return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
            //                 },
            //             }
            //         ]
            //     });
            // }
            // new datatable jquery
            var table;
            table = $('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                // "language": {
                //     "processing": "<div id='loader-wrapper'><div id='loader'></div></div>"
                // },
                ajax: {
                    url: "{{ route('getUploadRecordAjax') }}",
                    type: "POST",
                    data: function (d) {
                        d.branch = $('select[name=search_branch]').val();
                        d.transaction_type = $('select[name=search_tr_code]').val();
                        d.book_size = $('select[name=search_book_size]').val();
                    }
                },

                //type: 'POST',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'cps_unique_req', name: 'cps_unique_req'},
                    {data: 'cps_micr_code', name: 'cps_micr_code'},
                    {data: 'cps_account_no', name: 'cps_account_no'},
                    {data: 'cps_act_name', name: 'cps_act_name'},
                    {data: 'cps_no_of_books', name: 'cps_no_of_books'},
                    {data: 'cps_book_size', name: 'cps_book_size'},
                    {data: 'cps_tr_code', name: 'cps_tr_code'},
                    {data: 'cps_atpar', name: 'cps_atpar'},
                    {data: 'cps_chq_no_from', name: 'cps_chq_no_from'},
                    {data: 'cps_chq_no_to', name: 'cps_chq_no_to'},
                    {data: 'cps_act_address1', name: 'cps_act_address1'},
                    {data: 'cps_act_address2', name: 'cps_act_address2'},
                    {data: 'cps_act_address3', name: 'cps_act_address3'},
                    {data: 'cps_act_address4', name: 'cps_act_address4'},
                    {data: 'cps_act_address5', name: 'cps_act_address5'},
                    {data: 'cps_act_city', name: 'cps_act_city'},
                    {data: 'cps_act_pin', name: 'cps_act_pin'},
                    {data: 'cps_act_mobile', name: 'cps_act_mobile'},
                    {data: 'cheque_charges', name: 'cheque_charges'},
                    {data: 'cps_status', name: 'cps_status'},
                ],
                order: [
                    [0, 'desc']
                ],
                lengthMenu: [
                    [10, 25, 50, 100, 500, -1],
                    [10, 25, 50, 100, 500, "All"]
                ],
                pageLength: 50,
            });

            $('#post_search_form').on('submit', function (e) {
                table.draw();
                e.preventDefault();
            });

            $('#search_reset_btn').on('click', function (e) {
                $('#post_search_form')[0].reset();
                table.draw();
                e.preventDefault();
            });

            

            function getUploadTransactionRequest() {
                table.ajax.reload(null, false);
            }


            // new datatable jquery

            // Ajax to upload request file
            $('#uploadRequestFile').click(function(e){
                e.preventDefault()
                var files = $('#uploadFile')[0].files;
                if(files.length > 0){
                    var fd = new FormData();
                    fd.append('upload',files[0]);
                    fd.append('_token','{{ csrf_token() }}');
                    $.ajax({
                        url: "{{url('transaction/upload/store')}}",
                        type: "POST",
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function( response ) {
                            //console.log(response);
                            if(response.status == 200){
                                swal.fire({
                                    icon: 'success',
                                    title: "success!",
                                    text: response.message
                                }).then(function() {
                                    getFilterDetails()
                                    //$('#kt_ecommerce_produ//cts_table').DataTable().destroy();
                                    getUploadTransactionRequest();
                                    $('#uploadFile').val('');
                                    $('.errorUpload').html('')
                                });
                            }else{
                                if(response.status == 203){
                                    $('.errorUpload').html(response.message)
                                }
                            }

                        },
                        statusCode: {
                            500: function() {
                              $('.errorUpload').html("Please check request file. Some records data is not in requested format.")
                            }
                        },
                        beforeSend: function() {
                            $('#cps-loader').removeClass('d-none')
                        },
                        complete: function() {
                            $('#cps-loader').addClass('d-none');
                        }
                    });
                }else{
                    $('.errorUpload').html("Please select file")
                }
                
            });

            $('.selectAll').click(function(){
                $('body').find('.selectId').prop('checked', true);
            });

            $('.deSelectAll').click(function(){
                $('body').find('.selectId').prop('checked', false);
            });

            $('.deleteSelected').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                });
                if(val.length > 0)
                {
                    swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // var val = [];
                            // $(':checkbox:checked').each(function(i){
                            //   val[i] = $(this).val();
                            // });
                            //console.log(val)
                            $.ajax({
                                url: "/transaction/upload/delete",
                                type: "post",
                                data: {id:val},
                                success: function( response ) {
                                    getFilterDetails()
                                    //$('#kt_ecommerce_products_table').DataTable().destroy();
                                    getUploadTransactionRequest();
                                    $('#uploadFile').val('');
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
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast one checkbox"
                    });
                }
            });

            $('.printInBunch').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                });

                if(val.length > 0)
                {
                    if(isCheck == "complete"){
                        swal.fire({
                            title: 'Are you sure?',
                            text: "You want to continue",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                
                                $.ajax({
                                    url: "{{ url('/transaction/upload/shift-data-to-pending') }}",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {
                                        swal.fire({
                                            icon: 'success',
                                            title: "success!",
                                            text: response.message
                                        }).then(function() {
                                            getUploadTransactionRequest();
                                        });
                                        //window.location.href = "/pending-print-req/list"
                                        $('#uploadFile').val('');
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
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast one checkbox"
                    });
                }
            });


            $('.rejectPrintRequest').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                });

                if(val.length > 0)
                {
                    if(isCheck == "complete"){
                        swal.fire({
                            title: 'Are you sure?',
                            text: "You want to continue",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                
                                $.ajax({
                                    url: "/transaction/upload/reject-print-request",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {
                                        swal.fire({
                                            icon: 'success',
                                            title: "success!",
                                            text: response.message
                                        }).then(function() {
                                            getUploadTransactionRequest();
                                        });
                                        $('#uploadFile').val('');
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
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast one checkbox"
                    });
                }
            });


            getFilterDetails()
            function getFilterDetails(){
                $.ajax({
                    url: "/transaction/get-filter-details",
                    type: "get",
                    success: function( response ) {
                        //console.log(response)
                        if(response.status == 200){
                            $('#displayUploadingFilter').addClass('d-none')
                            let bookSize = "";
                            bookSize += "<option value=''>Select Book Size</option>";
                            $.each(response.data.bookSize, function(key,val) { 
                                bookSize += `<option value="${val.cps_book_size}">${val.cps_book_size}</option>`;
                                $('#displayUploadingFilter').removeClass('d-none')
                            });
                            $('#selectBookSize').html(bookSize)

                            let branch = "";
                            branch += "<option value=''>Select Book Branch</option>";
                            $.each(response.data.branch, function(key,val) { 
                                branch += `<option value="${val.branch_code}">${val.branch_name}</option>`;
                            });
                            $('#selectBranch').html(branch)

                            let transactionCode = "";
                            transactionCode += "<option value=''>Select Transaction Type</option>";
                            $.each(response.data.transactionCode, function(key,val) { 
                                transactionCode += `<option value="${val.cps_tr_code}">${val.cps_tr_code}</option>`;
                            });
                            $('#selectTransactionType').html(transactionCode)
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

            $('#filterTransaction').click(function(){
                let bookSize = $('#selectBookSize').val();
                let branch = $('#selectBranch').val();
                let transactionCode = $('#selectTransactionType').val();
                //$('#kt_ecommerce_products_table').DataTable().destroy();
                // getUploadTransactionRequest(branch, transactionCode, bookSize)
            });


            $("#edit_upload_modal_submit").click(function (e) {
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
                e.preventDefault();
                var formData = new FormData($('#edit_upload_modal_form')[0]);
                var state = $('#edit_upload_modal_submit').val();
                var type = "POST";
                var upload_id = $("input[name='upload_id']").val();
                var my_url = '{{route("uploads.ajax_update")}}' + '/' + upload_id;
                
                //if ($('#edit_upload_modal_submit').text() != "Processing") {
                    $.ajax({
                        type: type,
                        url: my_url,
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        // beforeSend: function () {
                        //     $('#pattern-save-btn').text("Processing");
                        // },
                        // error: function (xhr) {
                        //     alert("Error occured.please try again <br>" + xhr.statusText + xhr.responseText);
                        // },
                        success: function (response) {
                            if(response.status == 200){
                                swal.fire({
                                    icon: 'success',
                                    title: "success!",
                                    text: response.message
                                }).then(function() {
                                    getUploadTransactionRequest();
                                    $('#edit_upload_modal').modal('toggle');
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
                //}
            });
            

        });

        // fetch record detail
        function editRecord(id){
          
            $('#edit_upload_modal').modal('show');
            $.ajax({
                url: "/transaction/manual/"+id,
                type: "get",
                success: function(response) {
                    $('#uploadId').val(response.uploadingData.id)
                    $('#bank_name').val(response.bank.bank_name)
                    $('#branch_name').html(response.branchSelectHtml)
                    $('#bank_code').val(response.bank.bank_code)
                    $('#branch_code').val(response.branchDetail.branch_code)
                    $('#city_code').val(response.branchDetail.branch_City_Code)
                    $('#ifsc_code').val(response.branchDetail.branch_neftifsccode)
                    $("select[name='account_type']").val(response.uploadingData.cps_tr_code)
                    $('#customer_ac_no').val(response.uploadingData.cps_account_no)
                    $('#micr_ac_no').val(response.uploadingData.cps_micr_account_no)
                    $('#no_of_books').val(response.uploadingData.cps_no_of_books)
                    $('#book_size').val(response.uploadingData.cps_book_size)
                    $('#cheque_from').val(response.uploadingData.cps_chq_no_from)
                    $('#cheque_to').val(response.uploadingData.cps_chq_no_to)
                    $("select[name='bearer_order']").val(response.uploadingData.cps_dly_bearer_order)
                    $('#customer_name').val(response.uploadingData.cps_act_name)
                    $('#customer_joint_name1').val(response.uploadingData.cps_act_jointname1)
                    $('#customer_joint_name2').val(response.uploadingData.cps_act_jointname2)
                    $('#sign_authority1').val(response.uploadingData.cps_auth_sign1)
                    $('#sign_authority2').val(response.uploadingData.cps_auth_sign2)
                    $('#sign_authority3').val(response.uploadingData.cps_auth_sign3)
                    $('#address_line1').val(response.uploadingData.cps_act_address1)
                    $('#address_line2').val(response.uploadingData.cps_act_address2)
                    $('#address_line3').val(response.uploadingData.cps_act_address3)
                    $('#city').val(response.uploadingData.cps_act_city)
                    $('#pin_code').val(response.uploadingData.cps_act_pin)
                    $('#pin_code').val(response.uploadingData.cps_act_pin)
                    $('#cust_mobile_no').val(response.uploadingData.cps_act_mobile)
                    $('#cust_email_id').val(response.uploadingData.cps_emailid)
                    
                    

                },
                beforeSend: function() {
                    $('#cps-loader').removeClass('d-none')
                },
                complete: function() {
                    $('#cps-loader').addClass('d-none');
                }
            });

        }



        jQuery(document).ready(function () {
            
        });



        function _changed_branch_details() {
            var branch_id = $("select[name='branch_name']").val();
            //$(".checkbox_html").html('');
            if (branch_id) {
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                my_url = '{{route("ajaxGetBranchDetails")}}' + '/' + branch_id;
                $.ajax({
                    type: 'POST',
                    url: my_url,
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.data);
                        $('#branch_code').val(response.data.branch_code);
                        $('#city_code').val(response.data.branch_City_Code);
                        $('#ifsc_code').val(response.data.branch_neftifsccode);
                    }
                });
            } else {
                //$(".checkbox_html").html('');
            }
        }

        $(document).on('change', "select[name='branch_name']", function () {
            _changed_branch_details();
        });


    </script>

    <script>
        // jQuery(document).ready(function () {
        //     $("#edit_upload_modal_submit").click(function (e) {
        //         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
        //         e.preventDefault();
        //         var formData = new FormData($('#edit_upload_modal_form')[0]);
        //         var state = $('#edit_upload_modal_submit').val();
        //         var type = "POST";
        //         var upload_id = $("input[name='upload_id']").val();
        //         var my_url = '{{route("uploads.ajax_update")}}' + '/' + upload_id;
                
        //         //if ($('#edit_upload_modal_submit').text() != "Processing") {
        //             $.ajax({
        //                 type: type,
        //                 url: my_url,
        //                 data: formData,
        //                 contentType: false,
        //                 processData: false,
        //                 dataType: 'json',
        //                 // beforeSend: function () {
        //                 //     $('#pattern-save-btn').text("Processing");
        //                 // },
        //                 // error: function (xhr) {
        //                 //     alert("Error occured.please try again <br>" + xhr.statusText + xhr.responseText);
        //                 // },
        //                 success: function (response) {
        //                     $('.help-block').empty();
        //                     $('.form-group').removeClass('has-error');
        //                     if (response.errors) {
        //                         var errorString = '';
        //                         $.each(response.errors, function (key, value) {
        //                             errorString += '<li>' + value + '</li>';
        //                             $('[name="' + key + '"]').parent().parent('.form-group').addClass('has-error');
        //                             $('[name="' + key + '"]').next().text(value);
        //                         }); // $('#showErrorDiv').html(errorString);
        //                         if (state == "add") {
        //                             $('#pattern-save-btn').text("Save Pattern");
        //                         } else {
        //                             $('#pattern-save-btn').text("Update Pattern");
        //                         }
        //                     } else {

        //                         swal.fire({
        //                             icon: 'success',
        //                             title: "success!",
        //                             text: response.message
        //                         }).then(function() {
        //                             //$('#kt_ecommerce_products_table').DataTable().destroy();
        //                             getUploadTransactionRequest();
        //                             // $('#edit_upload_modal').modal('toggle');
        //                             $('#edit_upload_modal').modal('toggle');
        //                         });

        //                     }
        //                 }
        //             });
        //         //}
        //     });
        // });

    </script>
@endpush