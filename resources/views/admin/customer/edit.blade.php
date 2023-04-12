@extends('admin.layouts.default')
@section('title')
Admin - Edit Customer
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Edit Customer </h4>
                </div>
                <!-- /.box-header -->
                <form class="form-valide" id="myForm" action="{{ route('admin.customer.update',$users->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                    <div class="box-body">
                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                        <hr class="my-15">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Company Name</label>
                              <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="{{ $users->company_name}}">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label"> GSTIN</label>
                              <input type="text" class="form-control" placeholder="GSTIN" name="gstin" value="{{ $users->gstin}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Contact Person Name</label>
                              <input type="text" class="form-control" placeholder="Contact Person Name" name="name" value="{{ $users->name}}">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Company Email Id</label>
                              <input type="email" class="form-control" placeholder="Company Email Id" name="email" value="{{ $users->email}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Plan</label>
                                <select class="form-select" name="plan" value="{{ $users->plan}}">
                                    <option>The Box</option>
                                    <option>Economy Plan</option>
                                    <option>Premium Plan</option>
                                  </select>
                              </div>
                            </div>

                            {{-- <div class="col-md-4">
                                <label>Status <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select class="form-select" name="status">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div> --}}

                            {{-- <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="Location">
                              </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Status</label>
                                  <select class="form-select" name="status">
                                    <option value="1">Enable</option>
                                    <option value="0">Disable</option>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" placeholder="Enter start date" name="start_date" value="{{$users->start_date}}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">End date</label>
                                <input type="date" class="form-control" placeholder="End date" name="end_date" value="{{$users->end_date}}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="address" name="address" name="address" value="{{ $users->address}}">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label">State</label>
                                  <input type="text" class="form-control" placeholder="state" name="state" name="state" value="{{ $users->state}}">
                                </div>
                              </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="city" name="city" name="city" value="{{ $users->city}}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" placeholder="Mobile No" name="mobile" value="{{ $users->mobile}}">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Roles</label>
                                  <select class="form-select" name="roles" value="{{ $users->roles}}">
                                    <option>Super Admin</option>
                                    <option>Customer</option>
                                    <option>Warehouse Manager</option>
                                    <option>Account Team</option>
                                    <option>Warehouse Employee</option>
                                  </select>
                                </div>
                              </div>
                            {{-- <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password">
                              </div>
                            </div> --}}
                          </div>

                        {{-- <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4> --}}
                        {{-- <hr class="my-15"> --}}
                        {{-- <div class="form-group">
                          <label class="form-label">Company</label>
                          <input type="text" class="form-control" placeholder="Company Name">
                        </div> --}}
                        {{-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Interested in</label>
                              <select class="form-select">
                                <option>Interested in</option>
                                <option>design</option>
                                <option>development</option>
                                <option>illustration</option>
                                <option>branding</option>
                                <option>video</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Budget</label>
                              <select class="form-select">
                                <option>Budget</option>
                                <option>less than 5000$</option>
                                <option>5000$ - 10000$</option>
                                <option>10000$ - 20000$</option>
                                <option>more than 20000$</option>
                              </select>
                            </div>
                          </div>
                        </div> --}}
                        {{-- <div class="form-group">
                          <label class="form-label">Select File</label>
                          <label class="file">
                            <input type="file" id="file">
                          </label>
                        </div> --}}
                        {{-- <div class="form-group">
                          <label class="form-label">About Project</label>
                          <textarea rows="5" class="form-control" placeholder="About Project"></textarea>
                        </div> --}}
                    </div>
                    <!-- /.box-body -->

                        <div class="box-footer">
                            <a href="{{ route('admin.customer.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                </form>
              </div>
              <!-- /.box -->
            </div>
    </div>
  </div>
</section>
@push('scripts')
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script>
        </script>
        @endpush
@endsection
