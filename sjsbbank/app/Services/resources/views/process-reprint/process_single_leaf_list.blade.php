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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reprint Single Leaf</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Reprint Single Leaf</a>
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
                                
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th></th>
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
                                                    @can('reprint-single-leaf.print')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printSelectedPage" data-value="printselected">Print Single Leaf</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    @can('reprint-single-leaf.delete')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deleteSelected">Delete Selected</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    <input type="checkbox" name="requisitionCheckbox" id="requisitionCheckbox"><label for="requisitionCheckbox">Print Requisition Slip</label>&nbsp;&nbsp;&nbsp;
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
      



<!-- Add country Modal -->
<div class="modal fade" id="reprint_single_leaf_modal" tabindex="-1" aria-hidden="true">
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
                <div id="selectchkseries"></div>  
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- End of add country Modal -->
      

@endsection
@push('scripts')
    <script type="text/javascript">
        const socket = new WebSocket('ws://localhost:5000');
        var count = 0;
        var isCheck = 'pending';
        socket.addEventListener('open', function (event) {
            console.log('Connected to the WS server!');
            isCheck = 'complete';
        });

        socket.addEventListener('close', function (event) {
            console.log('disconnected to the WS server!')
        });

        /*socket.addEventListener('message', function(event){
            console.log('2nd event?', event.data)
        });*/

        socket.addEventListener('message', function (event) {
        });

        $(document).ready(function(){

            // Funtion to list data
            getReprintQueRequest();
            function getReprintQueRequest(){
                $('#kt_ecommerce_products_table').DataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bInfo": false,
                    "bAutoWidth": false,
                    "autoWidth": false,
                    processing: true,
                    serverSide: true,
                    'createdRow': function( row, data, dataIndex ) {
                          $(row).addClass( 'chksr' );
                          $(row).addClass( 'chksr' );
                      },
                     "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                        $(nRow).attr('id', aData[0]);
                    },
                    // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                    ajax: {
                        url: "{{ url('process/reprint-single-leaf') }}",
                        method: "post",
                    },
                    columns: [
                        {
                            data: 'id',
                            name: 'id',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, row){
                                return `<input type="checkbox" class="selectId" name="action[]" value="${data}">`;
                            },
                        },
                        {
                            data: 'cps_unique_req',
                            name: 'cps_unique_req',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_micr_code',
                            name: 'cps_micr_code',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_account_no',
                            name: 'cps_account_no',
                            render: function(data, type, row){
                                return `${(data) ? data : '-'}`;
                            },
                        },
                        {
                            data: 'cps_act_name',
                            name: 'cps_act_name',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_no_of_books',
                            name: 'cps_no_of_books',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_book_size',
                            name: 'cps_book_size',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_tr_code',
                            name: 'cps_tr_code',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_atpar',
                            name: 'cps_atpar',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_chq_no_from',
                            name: 'cps_chq_no_from',
                            render: function(data, type, row){
                                return `${(data) ? data : '-'}`;
                            },
                        },
                        {
                            data: 'cps_chq_no_to',
                            name: 'cps_chq_no_to',
                            render: function(data, type, row){
                                return `${(data) ? data : '-'}`;
                            },
                        },
                        {
                            data: 'cps_act_address1',
                            name: 'cps_act_address1',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address2',
                            name: 'cps_act_address2',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address3',
                            name: 'cps_act_address3',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address4',
                            name: 'cps_act_address4',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address5',
                            name: 'cps_act_address5',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_city',
                            name: 'cps_act_city',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_pin',
                            name: 'cps_act_pin',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_mobile',
                            name: 'cps_act_mobile',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        }
                    ]
                });
            }


            

            $('.selectAll').click(function(){
                $('body').find('.selectId').prop('checked', true);
            });

            $('.deSelectAll').click(function(){
                $('body').find('.selectId').prop('checked', false);
            });

            $('.deleteSelected').click(function(){
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
                        var val = [];
                        $(':checkbox:checked').each(function(i){
                          val[i] = $(this).val();
                        });
                        console.log(val)
                        $.ajax({
                            url: "/process/reprint/delete",
                            type: "post",
                            data: {id:val},
                            success: function( response ) {
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getReprintQueRequest();
                            }
                        });
                    }
                }); 
            });


            $('.printSelectedPage').click(function(){
                var val = [];
                var selective_pages_no = [];
                var page_nos = "";
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });

                

                if(val.length > 0)
                {
                    
                    if(isCheck == "complete"){
                        var htmlcont = '<p>Select cheque no. to print :-</p><form id="schk"><div id="pg_error"></div><table class="table" style="border-collapse: collapse; border-color: grey"><tr><th class="thwidthth">Account No</th><th class="thwidthth">Cheque No.</th></tr>';
                        $('.chksr').each(function(index, item) {
                            // console.log(item.id)
                            if($('#' + item.id).find('td').eq(0).find('input').prop('checked') == true)
                            {
                                var acc = $('#' + item.id).find('td').eq(3).html();
                                var chkfrom = $('#' + item.id).find('td').eq(9).html();
                                var chkto = $('#' + item.id).find('td').eq(10).html();
                                console.log(chkfrom)
                                console.log(chkto)

                                htmlcont += `<tr>
                                        <td style="padding: 5px; border:1px solid lightgray">
                                            ${acc}
                                        </td>
                                        <td style="padding: 5px; border:1px solid lightgray">
                                            <select id="acc_${acc}" class="form-control" name="acc_${acc}[]" multiple>`;
                                                for(i = chkfrom; i <= chkto; i++)
                                                {
                                                    htmlcont += '<option>' + i + '</option>';
                                                }
                                                htmlcont += '</select></td></tr>';
                            }
                        });

                        htmlcont += `<tfoot>
                            <tr>
                            <td colspan="2"><br><button type="reset" id="edit_country_modal_cancel" data-bs-dismiss="modal" class="btn btn-danger btn-sm me-3">Cancel</button><button type="submit" id="save_single_leaf_modal_submit" class="btn btn-primary btn-sm">
                                <span class="indicator-label">Submit</span>
                            </button></td>
                            </tr>
                        <tfoot></table></form>`;
                        $('#selectchkseries').html(htmlcont);
                        $('#reprint_single_leaf_modal').modal('show');
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast checkbox",
                        type: "error"
                    });
                }
            });



            $('body').on('click', '#save_single_leaf_modal_submit', function(e){
                e.preventDefault();
                var val = [];
                var selective_pages_no = [];
                var page_nos = "";
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });

                $.ajax({
                    url: '/process/reprint/update',
                    type: "get",
                    data: {id:val},
                    success: function( response ) {
                        let selected_id_chkseries = [];
                        selected_id_chkseries = $('#schk').serialize();
                        if($("#requisitionCheckbox").prop('checked') == true){
                            window.location = '/reprint-cheque?do=reprint&'+selected_id_chkseries +'&requisition=1';
                        }
                        else{
                            window.location = '/reprint-cheque?do=reprint&'+selected_id_chkseries;
                        }
                    }
                });
            })

        })
    </script>
@endpush