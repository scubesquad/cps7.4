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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setting</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Setting</a>
                                    </li>
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
                                    <form action="{{ url('setting/update') }}" method="post" id="edit_setting" enctype="multipart/form-data">
                                        @csrf
                                        <table class="table align-middle">
                                            <tbody>
                                                
                                                <tr>
                                                    <th>Input File Format</th>
                                                    <td>
                                                        <select class="form-select">
                                                            <option value="Excel">Excel</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Output File Format</th>
                                                    <td>
                                                        <select class="form-select">
                                                            <option value="Excel">Excel</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Cheque Serial No Generation</th>
                                                    <td>
                                                        <div class="form-check-inline">
                                                          <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="chk_taken_from" value="0" @if(isset($setting) && $setting->chk_taken_from == 0)checked @endif>Bank generated
                                                          </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                          <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="chk_taken_from" value="1" @if(isset($setting) && $setting->chk_taken_from == 1)checked @endif>System generated
                                                          </label>
                                                        </div>
                                                        @error('chk_taken_from')
                                                         <label class="text-danger">{{ $message }}</label>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>No of failed password attempt</th>
                                                    <td>
                                                        <input type="number" name="nooffailedpasswordattempt" value="{{ (isset($setting->nooffailedpasswordattempt)) ? $setting->nooffailedpasswordattempt : '' }}" class="form-control txtOnlyNumber" min="1" required />
                                                        <label>(Password will automatically expire after it.)</label>
                                                        @error('nooffailedpasswordattempt')
                                                        <br>
                                                         <label class="text-danger">{{ $message }}</label>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Home Screen Text</th>
                                                    <td>
                                                        <input type="text" name="homescreen_text" value="{{ (isset($setting->homescreen_text)) ? $setting->homescreen_text : '' }}" class="form-control" />
                                                        <label>(Text to show on home page)</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Auto Lock</th>
                                                    <td>
                                                        <input type="number" name="autolockminutes" value="{{ (isset($setting->autolockminutes)) ? $setting->autolockminutes : '' }}" class="form-control txtOnlyNumber" min="5" required />
                                                        <label>(Minutes after login user will be logged out.)</label>
                                                        @error('autolockminutes')
                                                        <br>
                                                         <label class="text-danger">{{ $message }}</label>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Image Logo</th>
                                                    <td>
                                                        <input type="file" name="banklogo" value="{{ (isset($setting->banklogo)) ? $setting->banklogo : '' }}" class="form-control"  accept="image/*" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Dashboard Image</th>
                                                    <td>
                                                        <input type="file" name="desktop_image" value="{{ (isset($setting->desktop_image)) ? $setting->desktop_image : '' }}" class="form-control" accept="image/*" />
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Toner Capacity</th>
                                                    <td>
                                                        <input type="number" name="toner_leaves_capacity" value="{{ (isset($setting->toner_leaves_capacity)) ? $setting->toner_leaves_capacity : '' }}" class="form-control txtOnlyNumber" />
                                                        <label>Maximum Pages toner can print. (Ink left in toner)</label>
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
	

@endsection
