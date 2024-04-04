@extends('layouts.master')

@section('body')
<style type="text/css">
    .form-control, .form-select{
        padding: 0.35rem 1rem;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Bank</h1>
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
                                    <li class="breadcrumb-item text-muted">Bank</li>
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
                            <div class="card card-flush pt-4">
                                
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <form action="{{ url('master/bank/update') }}" method="post" id="edit_bank_form">
                                        @csrf
                                        <table class="table align-middle">
                                            <tbody>
                                                <tr>
                                                    <th style="width:30%">Bank Name<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="bank_name" class="form-control countMaxLength" value="{{ (isset($bank->bank_name)) ? $bank->bank_name : '' }}" maxlength="100" autocomplete="off" /></td>
                                                </tr>
                                                <tr>
                                                    <th style="width:30%">Branches Are Idenfiied By Sub Branch Code? Yes or No<span class="text-danger">*</span></th>
                                                    <td>
                                                        <div class="form-check-inline">
                                                          <label class="form-check-label">
                                                            <input type="radio" class="form-check-input isbranchsubcode" name="is_branch_sub_code" @if(isset($bank->is_branch_sub_code) && $bank->is_branch_sub_code == "0")checked @endif value="0">&nbsp;No
                                                          </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                          <label class="form-check-label">
                                                            <input type="radio" class="form-check-input isbranchsubcode" name="is_branch_sub_code" @if(isset($bank->is_branch_sub_code) && $bank->is_branch_sub_code == "1")checked @endif value="1">&nbsp;Yes
                                                          </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="numberofSubBranchCode">
                                                    <th>Number Of Characters Of Sub Branch Code<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="number_digit_sub_code" class="form-control txtOnlyNumber" value="{{ (isset($bank->number_digit_sub_code)) ?$bank->number_digit_sub_code : '' }}" maxlength="2" /></td>
                                                </tr>
                                                <tr class="numberofSubBranchCode">
                                                    <th>Index Of The Sub Branch Code In Account Number<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="starting_index_sub_code" class="form-control txtOnlyNumber" value="{{ (isset($bank->starting_index_sub_code)) ? $bank->starting_index_sub_code : '' }}" maxlength="2" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Bank Code<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="bank_code" class="form-control txtOnlyNumber countMaxLength" maxlength="3" value="{{ (isset($bank->bank_code)) ? $bank->bank_code : '' }}" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Address Line1<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="bank_address1" class="form-control" value="{{ (isset($bank->bank_address1)) ? $bank->bank_address1 : '' }}" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Address Line2</th>
                                                    <td><input type="text" name="bank_address2" value="{{ (isset($bank->bank_address2)) ? $bank->bank_address2 : '' }}" class="form-control countMaxLength" maxlength="65" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Country<span class="text-danger">*</span></th>
                                                    <td>
                                                        <select class="form-select" name="bank_country_id" id="country">
                                                            <option value="">Select Country</option>
                                                            @foreach($country as $coun)
                                                            <option @if(isset($bank->bank_country_id) && $bank->bank_country_id == $coun->country_id)selected @endif value="{{ $coun->country_id }}">{{ $coun->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>State<span class="text-danger">*</span></th>
                                                    <td>
                                                        <select class="form-select" name="bank_state_id" id="state">
                                                            
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Zip/Pin Code<span class="text-danger">*</span></th>
                                                    <td><input type="text" name="bank_pin" value="{{ (isset($bank->bank_pin)) ? $bank->bank_pin : '' }}" class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 1 Name</th>
                                                    <td><input type="text" name="bank_contact_per1" value="{{ (isset($bank->bank_contact_per1)) ? $bank->bank_contact_per1 : '' }}" class="form-control countMaxLength" maxlength="40" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 1 Mob No.</th>
                                                    <td><input type="text" name="bank_contact_no1" value="{{ (isset($bank->bank_contact_no1)) ? $bank->bank_contact_no1 : '' }}" class="form-control txtOnlyNumber countMaxLength" maxlength="15" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 1 Land Line No.</th>
                                                    <td><input type="text" name="bank_contact_per_LL1" value="{{ (isset($bank->bank_contact_per_LL1)) ? $bank->bank_contact_per_LL1 : '' }}" class="form-control txtOnlyNumber countMaxLength" maxlength="20" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 1 EmailId</th>
                                                    <td><input type="email" name="bank_emailid" value="{{ (isset($bank->bank_emailid)) ? $bank->bank_emailid : '' }}" class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 2 Name</th>
                                                    <td><input type="text" name="bank_contact_per2" value="{{ (isset($bank->bank_contact_per2)) ? $bank->bank_contact_per2 : '' }}" class="form-control countMaxLength" maxlength="40" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 2 Mob No.</th>
                                                    <td><input type="text" name="bank_contact_no2" value="{{ (isset($bank->bank_contact_no2)) ? $bank->bank_contact_no2 : '' }}" class="form-control txtOnlyNumber countMaxLength" maxlength="15" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 2 Land Line No.</th>
                                                    <td><input type="text" name="bank_contact_per_LL2" value="{{ (isset($bank->bank_contact_per_LL2)) ? $bank->bank_contact_per_LL2 : ''}}" class="form-control txtOnlyNumber countMaxLength" maxlength="20" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Person 2 EmailId</th>
                                                    <td><input type="email" name="bank_emailid2" value="{{ (isset($bank->bank_emailid2)) ? $bank->bank_emailid2 : '' }}" class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Web Site</th>
                                                    <td>
                                                        <input type="text" name="bank_website" value="{{ (isset($bank->bank_website)) ? $bank->bank_website : '' }}" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {{-- <th>Printer Name *</th>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span style="margin-top: 0.8%;">http://&nbsp;</span><input type="text" name="website" value="" class="form-control" />
                                                        </div>
                                                    </td> --}}
                                                    <th>Printer Name<span class="text-danger">*</span></th>
                                                    <td>
                                                        <table class="table align-middle">
                                                            <tr>
                                                                @php 
                                                                $printer = (isset($bank->bank_printers)) ?unserialize($bank->bank_printers) : [];  
                                                                @endphp
                                                                <td><input type="text" name="printername[]" value="{{ ($printer) ? $printer[0][0] : '' }}" class="form-control" /></td>

                                                                <th>Tray Name 1/2<span class="text-danger">*</span></th>
                                                                <td><input type="text" name="printertray1[]" value="{{ (($printer)) ? $printer[0][1] : '' }}" class="form-control" /></td>
                                                                <td><input type="text" name="printertray2[]" value="{{ (($printer)) ? $printer[0][2] : '' }}" class="form-control" /></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="{{URL::previous()}}" class="btn btn-secondary btn-sm">Back</a>
                                                        <button class="btn btn-primary btn-sm">Save</button>
                                                    </td>
                                                </tr>
                                            </tbody>
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
            $('body').on('change', '.isbranchsubcode', function(){
                let isSubBranch = $(this).val();
                displaySubBranch(isSubBranch);
            });

            let isSubBranch = $('.isbranchsubcode:checked').val();
            displaySubBranch(isSubBranch);

            function displaySubBranch(isSubBranch){
                if(isSubBranch == "1"){
                    $('.numberofSubBranchCode').show();
                }else{
                    $('.numberofSubBranchCode').hide();
                }
            }

            // Code to change country and get state ajax and event
            $('body').on('change', '#country', function(){
                let countryId = $(this).val();

                getState(countryId)
            });

            let countryId = $('#country').val();

                getState(countryId)

            function getState(id){
                $.ajax({
                    url: "{{url('master/bank/getState')}}",
                    type: "POST",
                    data: {state_id:id},
                    success: function( response ) {
                        let html = "";
                        let stateId = "{{ (isset($bank->bank_state_id)) ? $bank->bank_state_id : ''  }}";
                        html += "<option value=''>Select State</option>";
                        $.each(response.data, function(key,val) { 
                            html += `<option ${(stateId == val.state_id) ? 'selected' : ''} value="${val.state_id}">${val.state_name}</option>`;
                        });

                        $('#state').html(html);
                    }
                });
            }
            // End of  change cuntry event


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
                        url: "{{url('master/bank/update')}}",
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

                        }
                    });
                }
            });
            // end of save bank 


        })
    </script>
@endpush

@endsection
