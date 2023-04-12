@extends('admin.layouts.default')
@section('title')
    Admin - Warehouse
@endsection
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-end">
                    <div class="doc-badge my-2 mx-2" style=" background-color: red;color: white;padding: 5px 10px; border-radius: 10px;">Warehouse <span class="ms-1"></span>{{$count}}</div>
                    <a href="{{ route('admin.warehouse.create') }}" class="btn btn-success btn-add"><i
                            class="feather-plus-square me-1"></i> Add New</a>
                </div>
            </div>
        </div>
        <section class="content">
      <div class="row">
     <div class="col-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Warehouse List</h3>
          
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100.359px;">Sr.No</th>

                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 189.672px;">WareHouse Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 97.125px;">Location</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 179.328px;">Area </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Height</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Width</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Total units</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($warehouse  as $data)
                         <tr role="row" class="odd">
                         <td class="sorting_1">{{$loop->index+1}}</td>
                            <td class="sorting_1">{{$data->name}}</td>
                            <td>{{$data->location}}</td>
                            <td>{{$data->area}}</td>
                            <td>{{$data->height}}</td>
                            <td>{{$data->width}}</td>
                            <td>{{$data->total_units}}</td>
                            <td><a class="text-black" href="">
                                <i class="feather-edit-3 me-1"></i> Edit
                            </a>
                            <a class="text-danger delete-speciality pointer-link" onclick="pack_del('.$data->id.')" data-id="'.$data->id.'">
                           <i class="feather-trash-2 me-1"></i> Delete
                           </a></td>
                        </tr>
                        @endforeach

                    </tbody>
            
                </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </div>
@stop

<!-- @push('styles')
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    search: ' ',
                    searchPlaceholder: "Search...",
                    paginate: {
                        next: 'Next <i class="fas fa-chevron-right ms-2"></i>',
                        previous: '<i class="fas fa-chevron-left me-2"></i> Previous'
                    }
                },
                "bFilter": true,
                "bInfo": false,
                "bLengthChange": false,
                "bAutoWidth": false,
                "ajax": {
                    "url": "{{ url()->current() }}",
                    "type": "GET",
                    "data": function(data) {
                        data._token = "{!! csrf_token() !!}";
                    },
                },
                "columns": [
                { "data": 'id',"name":'id','orderable': false, 'searchable': false,'width':'6%'},
                // { "data": "image","name":"image"},
                { "data": "name","name":"name"},
                { "data": "location","name":"location"},
                { "data": "area","name":"area"},
                { "data": "height", "name": "height", "orderable": true, "searchable": true },
                { "data": "width", "name": "width", "orderable": true, "searchable": true },
                { "data": "total_units", "name": "total_units", "orderable": true, "searchable": true },
                { "data": "status","name":"status"},
                { "data": "action",orderable: false, searchable: false,visible:true},

            ],
                "columnDefs": [{
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        },
                        "targets": 0,
                    },
                
                    // {render: function (data, type, row, meta) {
                    //         return meta.row+1;
                    //     },
                    //     "targets":,
                    // },
                    // {render: function (data, type, row, meta) {
                    //         return (data==1)?'<span class="badge badge-success">Enable</span>':'<span class="badge badge-danger">Disable</span>';
                    //     },
                    //     "targets":4,
                    // },
                ],
                "aaSorting": [],
                "order": [
                    [0, 'asc']
                ],
                initComplete: (settings, json) => {
                    $('.dataTables_paginate').appendTo('#tablepagination');
                    $('.dataTables_filter').appendTo('#tableSearch');
                },
            });
        });

        function pack_del(id) {
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'green',
                cancelButtonColor: 'red',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        url: '{!! route('admin.warehouse.destroy', '+id+') !!}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'delete',
                            id: id
                        },
                        success: function(data) {
                            if (data.status == 1) {
                                Swal.fire('Error!', 'First disable the status.', 'error');
                            } else {
                                Swal.fire('Deleted!', 'Your Data has been deleted.', 'success');
                                location.reload();
                            }

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            var data = $.parseJSON(jqXHR.responseText);
                            Swal.fire('Error!', 'First disable the status', 'error')
                        }
                    });
                }
            })
        }
    </script> 
@endpush -->
