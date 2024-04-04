@extends('layouts.master')

@section('body')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Log</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Log</a>
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
                                
                                    <div class="row w-75">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control mb-4" id="start_date" value="{{ date('d-m-Y') }}" name="start_date" autocomplete="off">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>End Date</label>
                                            <input type="text" class="form-control mb-4" id="end_date" value="{{ date('d-m-Y') }}" name="end_date" autocomplete="off">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div>&nbsp;</div>
                                            <button type="button" id="searchReprintRequest" class="btn btn-primary mx-4">Search</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th>No.</th>
                                                <th>User</th>
                                                <th>Page</th>
                                                <th>Action Performed</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-700">
                                            
                                        </tbody>
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
        


@endsection
@push('scripts')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            // Funtion to list data
            getLog("{{ date('d-m-Y') }}", "{{ date('d-m-Y') }}");
            function getLog(start_date, end_date){
                $('#kt_ecommerce_products_table').DataTable({
                    processing: true,
                    serverSide: true,
                    // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                    ajax: {
                        url: "{{ url('/log') }}",
                        method: "post",
                        data: {start_date:start_date, end_date:end_date}
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
                            data: 'username',
                            name: 'username',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'name',
                            name: 'name',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'action_performed',
                            name: 'action_performed',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'created',
                            name: 'created',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'id',
                            name: 'id',
                            render: function(data, type, row){
                                let html = `<a href="/log/details/${data}">
                                    <i class="fa fa-eye" style="font-weight:normal !important;"></i>
                                </a>`;
                                return `${html}`;
                            },
                        }
                    ]
                });
            }


            // Ajax to upload request file
            $('#searchReprintRequest').click(function(e){
                let startDate = $('#start_date').val();
                let endDate = $('#end_date').val();
                $('#kt_ecommerce_products_table').DataTable().destroy();
                getLog(startDate, endDate);
            });
            

        })

        $(document).ready(function () {
            $("#start_date").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate: 0,
                onSelect: function (date) {
                    var date2 = $('#start_date').datepicker('getDate');
                    date2.setDate(date2.getDate());
                    var start_date = $('#start_date').val();
                    var end_date = $('#end_date').val();
                    if(start_date > end_date)
                    {
                        $('#end_date').datepicker('setDate', date2);
                    }
                    //sets minDate to start_date date + 1
                    $('#end_date').datepicker('option', 'minDate', date2);
                }
            });
            $('#end_date').datepicker({
                dateFormat: "dd-mm-yy",
                onClose: function () {
                    var start_date = $('#start_date').datepicker('getDate');
                    var end_date = $('#end_date').datepicker('getDate');
                    //check to prevent a user from entering a date below date of start_date
                    if (end_date < start_date) {
                        var minDate = $('#end_date').datepicker('option', 'minDate');
                        $('#end_date').datepicker('setDate', minDate);
                    }
                }
            });
        });
    </script>
@endpush