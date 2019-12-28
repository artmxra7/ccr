@extends('layouts.admin.app')

@section('title', 'Artikel')

@section('style')
<link href="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection()

@section('sidebar')
    @parent

    @include('layouts.admin.sidebar')
@endsection

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader" style="padding:0px;margin-bottom:20px;">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Admin</h3>
                    {!! generateBreadcrumb($breadcrumb) !!}
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    @can('admin create')
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                        <a href="{!! route('admin.data-admin.create') !!}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="la la-plus"></i>
                                <span>Tambah Admin</span>
                            </span>
                        </a>
                        </li>
                    </ul>
                    @endcan
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped table-bordered table-hover table-checkable" id="table_data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/default/custom/crud/datatables/basic/pagination_user.js') }}" type="text/javascript"></script>


    <script>
            $(document).ready(function(){
               $('#table_data').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url:'{{ route('admin.datatable_admin_data') }}',
                    },
                    columnDefs: [
                            {
                               targets: 0 ,
                               className: 'id'
                            },
                            {
                               targets: 1 ,
                               className: 'name'
                            },

                            {
                               targets: 2 ,
                               className: 'email'
                            },
                            {
                                targets: 2 ,
                                className: 'center'
                             },


                          ],
                    columns: [
                      {data: 'id', name: 'id'},
                      {data: 'name', name: 'name'},
                      {data: 'email', name: 'email'},
                      {data: 'aksi', name: 'aksi'}
                    ]
              });

            });
          </script>
@endsection
