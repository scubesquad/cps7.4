@extends('layouts.master')

@section('body')
<style type="text/css">
    .form-check-input{
        width: 18px;
        height: 18px;
        background-size: 70% 70%;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Role / {{ $role->name }}</h1>
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
                                    <li class="breadcrumb-item text-muted">Role</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Edit</li>
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
                                
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pt-4">
                                    <form action="{{url('master/role/update')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$role->id}}" />
                                        <div class="form-group mb-3">
                                            <label>Role Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$role->name}}" />
                                        </div>
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed" id="searchTable">
                                            <thead>
                                                <tr>
                                                    <th colspan="3">
                                                        <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for permission name..">
                                                        <br>

                                                        <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                              <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" id="selectAll" >&nbsp;&nbsp;Select / Unselect All
                                                              </label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--begin::Table body-->
                                            <tbody class="fw-semibold text-gray-600">
                                               
                                                <tr>
                                                    <td width="20%">
                                                        Country Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $org = ['country.add', 'country.edit', 'country.view', 'country.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $org))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        State Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $state = ['state.add', 'state.edit', 'state.view', 'state.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $state))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Branch Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $branch = ['branch.add', 'branch.edit', 'branch.view', 'branch.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $branch))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Transaction Code Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $transactionCode = ['transaction-code.add', 'transaction-code.edit', 'transaction-code.view', 'transaction-code.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $transactionCode))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Cheque Series Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $cheque = ['cheque-series.add', 'cheque-series.edit', 'cheque-series.view', 'cheque-series.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $cheque))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Role Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $role = ['role.view', 'role.edit']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $role))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif

                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Bank Master
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $bank = ['bank.view']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $bank))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Upload & Print
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['transaction.view', 'transaction.upload', 'transaction.filter', 'transaction.delete', 'transaction.print']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Pending print request
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['pending-print-req.view', 'pending-print-req.cancel', 'pending-print-req.print']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Reprint request
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['reprint-request.view', 'reprint-request.print']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Manage User
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['manage-user.view', 'manage-user.add', 'manage-user.edit', 'manage-user.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Process Reprint
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['process-reprint.view', 'process-reprint.print-in-bunch', 'process-reprint.print-selected-pages', 'process-reprint.delete', 'process-reprint.print-requisiion-only']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Reprint Single Leaf
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['reprint-single-leaf.view', 'reprint-single-leaf.print', 'reprint-single-leaf.delete']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td width="20%">
                                                        Reports
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['report.printed-report-day-wise', 'report.printed-report-selected-period', 'report.printed-report-excel', 'report.printed-report-pdf', 'report.consolidate-report-daily', 'report.consolidate-report-daily-excel', 'report.consolidate-report-daily-pdf', 'report.consolidate-report-monthly', 'report.consolidate-report-monthly-excel', 'report.consolidate-report-monthly-pdf', 'report.reprint', 'report.reprint-excel', 'report.reprint-pdf', 'report.customer', 'report.customer-excel', 'report.customer-pdf', 'report.outputfile', 'report.get-outputfile-excel', 'report.outputfile-via-text', 'report.get-outputfile-via-text']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Backup
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['backup']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td width="20%">
                                                        Setting
                                                    </td>
                                                    <td width="20%">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input selectSubClassAll">&nbsp;&nbsp;Select / Unselect All
                                                          </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="row">
                                                           
                                                            <?php $upload = ['setting']; ?>
                                                            @php $i=1; @endphp
                                                            @foreach($permissions as $perm)
                                                            @if(in_array($perm->name, $upload))
                                                            <div class="col-lg-3 col-md-6 col-12">
                                                               <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="permissions[]"  @if(in_array($perm->id, $rolePermisisons)) checked @endif value="{{ $perm->id }}">&nbsp;&nbsp;{{$perm->name}}
                                                                  </label>
                                                                </div>
                                                            </div>

                                                            @if(($i%3) == 0)
                                                            <br>
                                                            <br>
                                                            @endif
                                                            @php $i = $i + 1; @endphp
                                                            @endif
                                                            @endforeach
                                                            @if($i == 1)
                                                            <div class="removeRow">Remove Row</div>
                                                            @endif
                                                           
                                                       </div> 
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->


                                            <!--begin::Table footer-->
                                            
                                            <!--end::Table footer-->
                                        </table>
                                        <!--end::Table-->
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{URL::previous()}}" class="btn btn-default border btn-sm">Back</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-primary btn-sm">Save</button>
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
        myFunction = function() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue, index;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("searchTable");
            tr = table.getElementsByTagName("tr");
            // tr = $('#searchTable').find('label');

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;

                    // first clear any previously marked text
                    // this strips out the <mark> tags leaving text (actually all tags)
                    td.innerHTML = txtValue;

                    index = txtValue.toUpperCase().indexOf(filter);
                    if (index > -1) {

                        // using substring with index and filter.length 
                        // nest the matched string inside a <mark> tag
                        
                        if(txtValue.substring(index, index + filter.length) != ""){
                            td.innerHTML = txtValue.substring(0, index) + "<mark>" + txtValue.substring(index, index + filter.length) + "</mark>" + txtValue.substring(index + filter.length);
                        }else{
                            td.innerHTML = txtValue.substring(0, index) +  txtValue.substring(index + filter.length);
                        }

                        tr[i].style.display = "";
                    }else{
                        tr[i].style.display = "none";
                    }
                }
            }

        }


        $(document).ready(function(){
            $('#selectAll').change(function(){
                if($(this).prop('checked') == true){
                    $('.form-check-input').prop('checked', true);
                }else{
                    $('.form-check-input').prop('checked', false);
                }
            })

            $('.selectSubClassAll').change(function(){
                if($(this).prop('checked') == true){
                    $(this).closest('tr').find('.col-12').find('.form-check-input').prop('checked', true);
                }else{
                    $(this).closest('tr').find('.col-12').find('.form-check-input').prop('checked', false);
                }
            });


            let checkbox = $('.selectSubClassAll').closest('tr').find('.row');
            checkbox.each(function() {
                let chklen = parseInt($(this).find("input:checkbox:not(:checked)").length);

                if(chklen == 0){
                    $(this).closest('tr').find('.selectSubClassAll').prop('checked', true)
                }
            });

            $('.removeRow').each(function(){
                $(this).closest('tr').remove()
            })
        })
    </script>
@endpush
@endsection
