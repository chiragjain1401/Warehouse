
@extends('admin.layouts.default')
@section('title')
Admin - Customer
@endsection
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
            {{-- <div class="me-auto">
                <h4 class="page-title">Data Tables</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </nav>
                </div>
            </div> --}}
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-end">
                 <div  class="doc-badge me-3 my-3">Customers <span class="ms-1">{{ $count }}</span></div>
                   {{--   <a href="{{route('admin.package.create')}}" data-bs-toggle="modal" data-bs-target="#addModal"
                        class="btn btn-succes btn-add"><i class="feather-plus-square me-1"></i> Add New</a> --}}
                <a href="{{route('admin.customer.create')}}" class="btn btn-success btn-add"><i class="feather-plus-square me-1"></i> Add New</a>
                </div>
            </div>

    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     <div class="col-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer List</h3>
              {{-- <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 253.359px;">Sr.No</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 253.359px;">Company Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 389.5px;">GSTIN</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 189.672px;">Contact Person Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 97.125px;">Company Email Id</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 179.328px;">Plan</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 179.328px;">Start Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 179.328px;">End Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Address</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">State</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">City</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Mobile Number</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Roles</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Start Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">End Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 164.969px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="sorting_1">{{ $loop->index+1}}</td>
                            <td class="sorting_1">{{ $user->company_name}}</td>
                            <td class="sorting_1">{{ $user->gstin}}</td>
                            <td class="sorting_1">{{ $user->name}}</td>
                            <td class="sorting_1">{{ $user->email}}</td>
                            <td class="sorting_1">{{ $user->plan}}</td>
                            <td class="sorting_1">{{ $user->start_date}}</td>
                            <td class="sorting_1">{{ $user->end_date}}</td>
                            <td class="sorting_1">{{ $user->address}}</td>
                            <td class="sorting_1">{{ $user->state}}</td>
                            <td class="sorting_1">{{ $user->city}}</td>
                            <td class="sorting_1">{{ $user->mobile}}</td>
                            <td class="sorting_1">{{ $user->roles}}</td>
                            <td class="sorting_1">{{ $user->status}}</td>
                            <td><a class="text-black" href="{{route('admin.customer.edit',$user->id)}}">
                                <i class="feather-edit-3 me-1"></i> Edit
                            </a>
                            <a class="text-danger delete-speciality pointer-link" onclick="pack_del('.$data->id.')" data-id="'.$data->id.'">
                           <i class="feather-trash-2 me-1"></i> Delete
                           </a></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
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
    <!-- /.content -->

  </div>
@endsection
