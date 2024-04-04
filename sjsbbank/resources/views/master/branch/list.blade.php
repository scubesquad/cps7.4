@extends('layouts.master')

@section('body')

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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Branch</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Master</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Branch</li>
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
                                    @can('branch.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_country_modal">Add Branch</a>
                                        <!--end::Add product-->
                                    </div>
                                    <!--end::Card toolbar-->
                                    @endcan
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
                                                <th>Short Name</th>
                                                <th>Code</th>
                                                <th>Sub Code</th>
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
		

<!-- Add country Modal -->
<div class="modal fade" id="add_country_modal" tabindex="-1" aria-hidden="true">
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
                <form id="add_country_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add Branch</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_name" maxlength="100" />
                                <label for="branch_name" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Short Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_short_name" maxlength="100" />
                                <label for="branch_short_name" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_code" maxlength="4" />
                                <label for="branch_code" class="error"></label>
                            </div>
                        </div>

                        @if($bank->is_branch_sub_code)
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Sub Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_sub_code" maxlength="10" />
                                <label for="branch_sub_code" class="error"></label>
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">City Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_City_Code" maxlength="3" />
                                <label for="branch_City_Code" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Bank Code & Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" readonly value="{{ $bank->bank_name }}" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>IFSC Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_neftifsccode" maxlength="11" />
                                <label for="branch_neftifsccode" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Micr</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_micr" maxlength="11" />
                                <label for="branch_micr" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch At Par Micr</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_atparmicrcode" maxlength="11" />
                                <label for="branch_atparmicrcode" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Address Line1</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_address1" maxlength="85" />
                                <label for="branch_address1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Address Line2</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_address2" maxlength="65" />
                                <label for="branch_address2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Country</label>
                                    <select class="form-select form-select-solid" id="country" name="branch_country_id">
                                        <option value="">Select Country</option>
                                        @foreach($country as $coun)
                                        <option value="{{ $coun->country_id }}">{{ $coun->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="branch_country_id" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">State</label>
                                    <select class="form-select form-select-solid" id="state" name="branch_state_id">
                                       
                                    </select>
                                </div>
                                <label for="branch_state_id" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactperson1" maxlength="50" />
                                <label for="branch_contactperson1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Mobile No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactpersonmobile1" maxlength="15" />
                                <label for="branch_contactpersonmobile1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Landline No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_telephone1" maxlength="12" />
                                <label for="branch_telephone1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Email Id</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_email1" />
                                <label for="branch_email1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactperson2" maxlength="50" />
                                <label for="branch_contactperson2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Mobile No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactpersonmobile2" maxlength="15" />
                                <label for="branch_contactpersonmobile2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Landline No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_telephone2" maxlength="12" />
                                <label for="branch_telephone2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Email Id</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_email2" />
                                <label for="branch_email2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Regular Business Hrs.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_reg_busi_hrs" />
                                <label for="branch_reg_busi_hrs" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Half Day Business Hrs.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_half_busi_hrs" />
                                <label for="branch_half_busi_hrs" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Sunday Working</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_sunday_working" />
                                <label for="branch_sunday_working" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Toll free no.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_tollfree_no" />
                                <label for="branch_tollfree_no" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Service</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_services" />
                                <label for="branch_services" class="error"></label>
                            </div>
                        </div>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_country_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_country_modal_submit" class="btn btn-primary">
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
<!-- End of add country Modal -->


<!-- Edit country Modal -->
<div class="modal fade" id="edit_country_modal" tabindex="-1" aria-hidden="true">
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
                <form id="edit_country_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Branch</h1>
                    </div>
                    <!--end::Heading--> 
                    <!--begin::Input group-->
                    <input type="hidden" name="branch_id" id="editId">

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_name" maxlength="100" id="editName" />
                                <label for="branch_name" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Short Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_short_name" maxlength="100" id="editBranchShortName" />
                                <label for="branch_short_name" class="error"></label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_code" id="editCode" maxlength="4" />
                                <label for="branch_code" class="error"></label>
                            </div>
                        </div>
                        @if($bank->is_branch_sub_code)
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Branch Sub Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_sub_code" id="editBranchSubCode" maxlength="10" />
                                <label for="branch_sub_code" class="error"></label>
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">City Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_City_Code" id="editBranchCityCode" maxlength="3" />
                                <label for="branch_City_Code" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Bank Code & Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" readonly value="{{ $bank->bank_name }}" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>IFSC Code</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_neftifsccode" id="editNeftifsccode" maxlength="11" />
                                <label for="branch_neftifsccode" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Micr</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_micr" id="editMicr" maxlength="11" />
                                <label for="branch_micr" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch At Par Micr</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_atparmicrcode" id="editAtparmicrcode" maxlength="11" />
                                <label for="branch_atparmicrcode" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Address Line1</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_address1" id="editAddress1" maxlength="85" />
                                <label for="branch_address1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Address Line2</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_address2" id="editAddress2" maxlength="65" />
                                <label for="branch_address2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Country</label>
                                    <select class="form-select form-select-solid" id="editCountryId" name="branch_country_id">
                                        <option value="">Select Country</option>
                                        @foreach($country as $coun)
                                        <option value="{{ $coun->country_id }}">{{ $coun->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="branch_country_id" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">State</label>
                                    <select class="form-select form-select-solid" id="editState" name="branch_state_id">
                                       
                                    </select>
                                </div>
                                <label for="branch_state_id" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactperson1" id="editContactperson1" maxlength="50" />
                                <label for="branch_contactperson1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Mobile No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactpersonmobile1" id="editContactpersonmobile1" maxlength="15" />
                                <label for="branch_contactpersonmobile1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Landline No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_telephone1" id="editTelephone1" maxlength="12" />
                                <label for="branch_telephone1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 1 Email Id</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_email1" id="editEmail1" />
                                <label for="branch_email1" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactperson2" id="editContactPerson2" maxlength="50" />
                                <label for="branch_contactperson2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Mobile No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_contactpersonmobile2" id="editContactpersonmobile2" maxlength="15" />
                                <label for="branch_contactpersonmobile2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Landline No.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_telephone2" id="editTelephone2" maxlength="12" />
                                <label for="branch_telephone2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Contact 2 Email Id</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_email2" id="editEmail2" />
                                <label for="branch_email2" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Regular Business Hrs.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_reg_busi_hrs" id="editBranchRegBusiHrs" />
                                <label for="branch_reg_busi_hrs" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Half Day Business Hrs.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_half_busi_hrs" id="editBranchHalfBusiHrs" />
                                <label for="branch_half_busi_hrs" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Sunday Working</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_sunday_working" id="editBranchSundayWorking" />
                                <label for="branch_sunday_working" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Toll free no.</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_tollfree_no" id="editBranchTollfreeNo" />
                                <label for="branch_tollfree_no" class="error"></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>Branch Service</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="branch_services" id="editBranchServices" />
                                <label for="branch_services" class="error"></label>
                            </div>
                        </div>
                    </div>
                    
                    

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="edit_country_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_country_modal_submit" class="btn btn-primary">
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
<!-- End of edit country Modal -->

@endsection

@push('scripts')
	<script>
        getBranchDetails();
        function getBranchDetails(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/master/branch/list') }}",
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
                        data: 'branch_name',
                        name: 'branch_name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'branch_short_name',
                        name: 'branch_short_name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'branch_code',
                        name: 'branch_code',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'branch_sub_code',
                        name: 'branch_sub_code',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${(data)? data : '-'}</span>`;
                        },
                    }
                    ,{
                        data: 'branch_id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            let html = "";

                            @can('branch.edit')
                                html += `<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="${data}">
                                    <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                                </button>`;
                            @endcan

                            @can('branch.delete')
                                html += `<a data-id="${data}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="delete menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>`;
                            @endcan

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
                $('#edit_country_modal').modal('show');
                $.ajax({
                    url: "{{ url('/master/branch/edit') }}"+'/'+id,
                    type: "get",
                    success: function( response ) {
                        $('#editId').val(response.data.branch_id)
                        $('#editName').val(response.data.branch_name)
                        $('#editBranchShortName').val(response.data.branch_short_name)
                        $('#editCode').val(response.data.branch_code)
                        @if($bank->is_branch_sub_code)
                        $('#editBranchSubCode').val(response.data.branch_sub_code)
                        @endif
                        $('#editBranchCityCode').val(response.data.branch_City_Code)
                        $('#editNeftifsccode').val(response.data.branch_neftifsccode)
                        $('#editMicr').val(response.data.branch_micr)
                        $('#editAtparmicrcode').val(response.data.branch_atparmicrcode)
                        $('#editAddress1').val(response.data.branch_address1)
                        $('#editAddress2').val(response.data.branch_address2)
                        $('#editCountryId').val(response.data.branch_country_id).change();

                        let countryId = $('#editCountryId').val();

                        getState(countryId, response.data.branch_state_id, 'editState')
                        // $('#editStateId').val(response.data.state_id).change();
                        $('#editContactperson1').val(response.data.branch_contactperson1)
                        $('#editContactpersonmobile1').val(response.data.branch_contactpersonmobile1)
                        $('#editTelephone1').val(response.data.branch_telephone1)
                        $('#editEmail1').val(response.data.branch_email1)
                        $('#editContactPerson2').val(response.data.branch_contactperson2)
                        $('#editContactpersonmobile2').val(response.data.branch_contactpersonmobile2)
                        $('#editTelephone2').val(response.data.branch_telephone2)
                        $('#editEmail2').val(response.data.branch_email2)
                        $('#editBranchRegBusiHrs').val(response.data.branch_reg_busi_hrs)
                        $('#editBranchHalfBusiHrs').val(response.data.branch_half_busi_hrs)
                        $('#editBranchSundayWorking').val(response.data.branch_sunday_working)
                        $('#editBranchTollfreeNo').val(response.data.branch_tollfree_no)
                        $('#editBranchServices').val(response.data.branch_Services)
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
                });
            });

            $('body').on('click', '.delete', function(){
                swal.fire({
                    icon: 'warning',
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).data('id');
                        $.ajax({
                            url: "{{ url('/master/branch/delete') }}",
                            type: "post",
                            data: {id:id},
                            success: function( response ) {
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getBranchDetails();
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


            $('#add_country_modal_submit').click(function(){
                var frm_user = $('#add_country_modal_form');
                $("#add_country_modal_form").validate({
                    rules: {
                        branch_name: {
                            required: true,
                        },
                        branch_short_name: {
                            required: true,
                        },
                        branch_code: {
                            required: true,
                        },
                        branch_address1: {
                            required: true,
                        },
                        @if($bank->is_branch_sub_code)
                        branch_sub_code: {
                            required: true,
                        },
                        @endif
                        branch_country_id: {
                            required: true,
                        },
                        branch_state_id: {
                            required: true,
                        },
                        branch_City_Code: {
                            required: true,
                        },
                    },
                    messages: {
                        branch_name: {
                            required: "Please enter branch name",
                        },
                        branch_short_name: {
                            required: "Please enter branch short name",
                        },
                        branch_code: {
                            required: "Please enter branch code",
                        },
                        branch_address1: {
                            required: "Please enter branch address1",
                        },
                        @if($bank->is_branch_sub_code)
                        branch_sub_code: {
                            required: "Please enter branch sub code",
                        },
                        @endif
                        branch_country_id: {
                            required: "Please select country",
                        },
                        branch_state_id: {
                            required: "Please select state",
                        },
                        branch_City_Code: {
                            required: "Please Enter city code",
                        },
                    },
                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $('#submit').html('Please Wait...');
                        $("#submit"). attr("disabled", true);
                        $.ajax({
                            url: "{{url('master/branch/store')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getBranchDetails();
                                        $('#add_country_modal').modal('toggle');
                                    });
                                }
                                else if(response.status == 201){
                                    swal.fire({
                                        icon: 'error',
                                        title: "Error!",
                                        text: response.message
                                    }).then(function() {
                                        $('#add_country_modal').modal('toggle');
                                    });
                                }else{
                                    // if(response.errors.name != ""){
                                    //     alert(response.errors.name);
                                    // }

                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                        });
                                        // $('#showErrorDiv').html(errorString);
                                    }
                                    // swal.fire({
                                    //     title: "Error",
                                    //     text: "Please Check the record",
                                    //     type: "error"
                                    // });
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



            $('#edit_country_modal_submit').click(function(){
                var frm_user = $('#edit_country_modal_form');
                $("#edit_country_modal_form").validate({
                    rules: {
                        branch_name: {
                            required: true,
                        },
                        branch_short_name: {
                            required: true,
                        },
                        branch_code: {
                            required: true,
                        },
                        @if($bank->is_branch_sub_code)
                        branch_sub_code: {
                            required: true,
                        },
                        @endif
                        branch_address1: {
                            required: true,
                        },
                        branch_country_id: {
                            required: true,
                        },
                        branch_state_id: {
                            required: true,
                        },
                        branch_City_Code: {
                            required: true,
                        },
                    },
                    messages: {
                        branch_name: {
                            required: "Please enter branch name",
                        },
                        branch_short_name: {
                            required: "Please enter branch short name",
                        },
                        branch_code: {
                            required: "Please enter branch code",
                        },
                        branch_address1: {
                            required: "Please enter branch address1",
                        },
                        @if($bank->is_branch_sub_code)
                        branch_sub_code: {
                            required: "Please enter branch sub code",
                        },
                        @endif
                        address2: {
                            required: "Please enter branch address2",
                        },
                        branch_country_id: {
                            required: "Please select country",
                        },
                        branch_state_id: {
                            required: "Please select state",
                        },
                        branch_City_Code: {
                            required: "Please Enter city code",
                        },
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "{{url('master/branch/update')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getBranchDetails();
                                        $('#edit_country_modal').modal('toggle');
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
            });


            // Code to change country and get state ajax and event
            $('body').on('change', '#country', function(){
                let countryId = $(this).val();

                getState(countryId, '', 'state')
            });

            // Code to change country and get state ajax and event
            $('body').on('change', '#editCountryId', function(){
                let countryId = $(this).val();

                getState(countryId, '', 'editState')
            });

            function getState(id, state_id, state){
                $.ajax({
                    url: "{{url('master/bank/getState')}}",
                    type: "POST",
                    data: {state_id:id},
                    success: function( response ) {
                        let html = "";
                        let stateId = state_id;
                        html += "<option value=''>Select State</option>";
                        $.each(response.data, function(key,val) { 
                            html += `<option ${(stateId == val.state_id) ? 'selected' : ''} value="${val.state_id}">${val.state_name}</option>`;
                        });

                        $('#'+state).html(html);
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
                });
            }
            // End of  change cuntry event


            $('body').on('hidden.bs.modal', '#add_country_modal, #edit_country_modal', function () {
                $('[name="branch_name"]').val('');
                $('[name="branch_short_name"]').val('');
                $('[name="branch_code"]').val('');
                $('[name="branch_sub_code"]').val('');
                $('[name="branch_City_Code"]').val('');
                $('[name="branch_neftifsccode"]').val('');
                $('[name="branch_micr"]').val('');
                $('[name="branch_atparmicrcode"]').val('');
                $('[name="branch_address1"]').val('');
                $('[name="branch_address2"]').val('');
                $('[name="branch_contactperson1"]').val('');
                $('[name="branch_contactpersonmobile1"]').val('');
                $('[name="branch_telephone1"]').val('');
                $('[name="branch_email1"]').val('');
                $('[name="branch_contactperson2"]').val('');
                $('[name="branch_contactpersonmobile2"]').val('');
                $('[name="branch_telephone2"]').val('');
                $('[name="branch_email2"]').val('');
                $('[name="branch_reg_busi_hrs"]').val('');
                $('[name="branch_half_busi_hrs"]').val('');
                $('[name="branch_sunday_working"]').val('');
                $('[name="branch_tollfree_no"]').val('');
                $('[name="branch_services"]').val('');



                $('[name="branch_country_id"]').val('').change();
                $('[name="branch_state_id"]').val('').change();


                $('[for="branch_name"]').text('');
                $('[for="branch_short_name"]').text('');
                $('[for="branch_code"]').text('');
                $('[for="branch_City_Code"]').text('');
                $('[for="branch_address1"]').text('');
                $('[for="country"]').text('');
                $('[for="state"]').text('');
            });
        })
	</script>
@endpush