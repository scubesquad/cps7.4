@extends('layouts.master')

@section('body')
    <style type="text/css">
        form .form-group{
            margin-bottom: 10px;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manual Print</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Manual Print</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                   
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Create</li>
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
                                <!-- <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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

                                </div> -->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    
                                    <form class="" method="POST" action="{{ route('manualStore') }}">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Bank Name</span>
                                                </label>
                                                <input type="text" class="form-control" value="{{ $bank->bank_name }}" name="bank_name" id="" readonly />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Branch Name</span>
                                                </label>
                                                
                                                <select class="form-control" name="branch_name">
                                                    <option value="">Select Branch</option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{ $branch->branch_id }}">{{ $branch->branch_name }}</option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('branch_name'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('branch_name') }}
                                                    </span>
                                                @endif

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span >Bank Code</span>
                                                </label>
                                                <input type="text" class="form-control" value="{{ $bank->bank_code }}" name="bank_code" placeholder="Bank Code" readonly />
                                                @if ($errors->has('bank_code'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('bank_code') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span >Branch Code</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="branch_code" placeholder="Branch Code" id="branchCode" readonly/>
                                                @if ($errors->has('branch_code'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('branch_code') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span >City Code</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="city_code" placeholder="City Code" id="cityCode" readonly/>
                                                @if ($errors->has('city_code'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('city_code') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">IFSC Code</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="ifsc_code" placeholder="IFSC Code" id="ifscCode" readonly />
                                                @if ($errors->has('ifsc_code'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('ifsc_code') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Account Type</span>
                                                </label>
                                                <select class="form-control" name="account_type">
                                                    <option value="">Select</option>
                                                    @foreach($transcationCodes as $transcationCode)
                                                        <option value="{{ $transcationCode->transactioncode }}">{{ $transcationCode->transactioncodedescription }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('account_type'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('account_type') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Customer A/C No.</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="customer_ac_no" placeholder="Customer A/C No" id="" />
                                                @if ($errors->has('customer_ac_no'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('customer_ac_no') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">MIRC A/C No.</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="micr_ac_no" placeholder="MIRC A/C No" id="" />
                                                @if ($errors->has('micr_ac_no'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('micr_ac_no') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">No Of Books</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="no_of_books" placeholder="No Of Books" id="" />
                                                @if ($errors->has('no_of_books'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('no_of_books') }}
                                                    </span>
                                                @endif
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Book Size</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="book_size" placeholder="Book Size" id="" />
                                                @if ($errors->has('book_size'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('book_size') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Bearer/Order</span>
                                                </label>
                                                <select class="form-control" name="bearer_order">
                                                    <option value="">== Select ==</option>
                                                    <option value="0">Bearer</option>
                                                    <option value="1">Order</option>
                                                </select>
                                                @if ($errors->has('bearer_order'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('bearer_order') }}
                                                    </span>
                                                @endif
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Customer Name</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="customer_name" placeholder="Customer Name" id="" />
                                                @if ($errors->has('customer_name'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('customer_name') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Customer Joint Name 1</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="customer_name_joint_1" placeholder="Customer Joint Name 1" id="" />
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Customer Joint Name 2</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="customer_name_joint_2" placeholder="Customer Joint Name 2" id="" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Sign Authority 1</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="sign_authority_1" placeholder="Sign Authority 1" id="" />
                                            </div>                                            
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Sign Authority 2</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="sign_authority_2" placeholder="Sign Authority 2" id="" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Sign Authority 3</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="sign_authority_3" placeholder="Sign Authority 3" id="" />
                                            </div>                                            
                                        </div>



                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Address Line 1</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="address_line_1" placeholder="Address Line 1" id="" />
                                                @if ($errors->has('address_line_1'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('address_line_1') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Address Line 2</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="address_line_2" placeholder="Address Line 2" id="" />
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span>Address Line 3</span>
                                                </label>
                                                <input type="text" class="form-control" value=""name="address_line_3" placeholder="Address Line 3" id="" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">City</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="city" placeholder="City" id="" />
                                                @if ($errors->has('city'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('city') }}
                                                    </span>
                                                @endif
                                            </div>                                            
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Zip/Pin Code</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="pin_code" placeholder="Zip/Pin Code" id="" />
                                                @if ($errors->has('pin_code'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('pin_code') }}
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Cust Mobile No.</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="cust_mobile_no" placeholder="Cust Mobile No." />
                                                @if ($errors->has('cust_mobile_no'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('cust_mobile_no') }}
                                                    </span>
                                                @endif
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Cust Email Id</span>
                                                </label>
                                                <input type="text" class="form-control" value="" name="cust_email_id" placeholder="Cust Email Id" id="" />
                                                @if ($errors->has('cust_email_id'))
                                                    <span class="help-block text-danger">
                                                        {{ $errors->first('cust_email_id') }}
                                                    </span>
                                                @endif
                                            </div>
                                           
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                @csrf
                                                <button type="submit" class="btn btn-primary mt-2" value="submit">SUBMIT</button>
                                            </div>
                                        </div>


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
        


@endsection
@push('scripts')
    <script>
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
                        $('#branchCode').val(response.data.branch_code);
                        $('#cityCode').val(response.data.branch_City_Code);
                        $('#ifscCode').val(response.data.branch_neftifsccode);
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
@endpush