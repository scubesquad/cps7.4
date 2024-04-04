@extends('layouts.master')

@section('body')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style type="text/css">
    .form-control, .form-select{
        padding: 0.475rem 1rem;
    }

</style>
	 <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                 <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        @include('message.message')
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                {{-- <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Role</h1> --}}
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Products-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Customer Reports</h1>
                                 
                                    <!--begin::Card toolbar-->
                                    <div class="d-flex flex-wrap">
                                        @can('report.customer-pdf')
                                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                            <!--begin::Add product-->
                                            <a class="btn btn-sm fw-bold btn-primary exportAsPdf">Export to PDF</a>
                                            <!--end::Add product-->
                                        </div>
                                        @endcan

                                        @can('report.customer-excel')
                                        &nbsp;&nbsp;&nbsp;
                                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                            <!--begin::Add product-->
                                            <a class="btn btn-sm fw-bold btn-success exportAsExcel">Export to Excel</a>
                                            <!--end::Add product-->
                                        </div>
                                        @endcan
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <hr style="border-style: dashed;opacity: 1;">
                                    <br>
                                    <form method="get" class="mb-3" id="form">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <label>Customer Name</label>
                                                <input type="text" class="form-control mb-4" id="name" name="name">
                                            </div>
                                            <div class="col-lg-2 col-12">
                                                <div>&nbsp;</div>
                                                <button class="btn btn-sm btn-primary" id="filterCustomerReport">Search</button>
                                            </div>
                                        </div>
                                    </form>


                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th>Sr. No.</th>
                                                <th>Operator</th>
                                                <th>Branch Code</th>
                                                <th>Acc. No</th>
                                                <th>Name</th>
                                                <th>No Of Books</th>
                                                <th>Book Size</th>
                                                <th>Chq From</th>
                                                <th>Chq To</th>
                                                <th>Date Of Issue</th>
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
		



@endsection

@push('scripts')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script>
        getCustomerReport("")
        function getCustomerReport(name){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                 // searching: true,
                // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/report/customer') }}",
                    method: "post",
                    data: {name:name}
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
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_branchmicr_code',
                        name: 'cps_branchmicr_code',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_account_no',
                        name: 'cps_account_no',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_act_name',
                        name: 'cps_act_name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_no_of_books',
                        name: 'cps_no_of_books',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_book_size',
                        name: 'cps_book_size',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_chq_no_from',
                        name: 'cps_chq_no_from',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_chq_no_to',
                        name: 'cps_chq_no_to',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'cps_date',
                        name: 'cps_date',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    }
                ]
            });
        }

        $(document).ready(function(){
            $('#filterCustomerReport').click(function(e){
                e.preventDefault();
                let name = $('#name').val();
                $('#kt_ecommerce_products_table').DataTable().destroy();
                getCustomerReport(name)
            });
        });

        $('.exportAsExcel').click(function(){
            let frm =  $('#form').serialize();

            // window.location.href =    

            let a= document.createElement('a');
            a.target= '_blank';
            a.href= "{{ url('/report/customer/excel?') }}"+frm 
            a.click();  
        })

        $('.exportAsPdf').click(function(){
            let frm =  $('#form').serialize();

            // window.location.href = "/report/reprint/pdf?"+frm   
            let a= document.createElement('a');
            a.target= '_blank';
            a.href= "{{ url('/report/customer/pdf?') }}"+frm 
            a.click();    
        })

	</script>
@endpush