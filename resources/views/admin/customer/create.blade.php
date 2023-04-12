@extends('admin.layouts.default')
@section('title')
Admin - Create Customer
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Add Customer     </h4>
                </div>
                <!-- /.box-header -->
                <form class="form">
                    <div class="box-body">
                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                        <hr class="my-15">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Company Name.</label>
                              <input type="text" class="form-control" placeholder="company Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label"> GSTIN</label>
                              <input type="text" class="form-control" placeholder="GSTIN">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Contact Person Name</label>
                              <input type="text" class="form-control" placeholder="Contact Person Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Company Email Id</label>
                              <input type="text" class="form-control" placeholder="Company Email Id">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Plan</label>
                                <input type="text" class="form-control" placeholder="Plan">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="location">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile No">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" placeholder="Password">
                              </div>
                            </div>
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
                        <button type="button" class="btn btn-warning me-1">
                          <i class="ti-trash"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
              </div>
              <!-- /.box -->
        </div>








    </div>



  </div>

</section>

@endsection
