@extends('admin.layouts.default')
  @section('content')
  <section class="content">
    <div class="row">
        <div class="col-xl-4 col-12">
            <div class="box box-body">
              <h6>
                <span class="text-uppercase fs-18">Customers</span>
                <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
              </h6>
              <br>
              <p class="fs-26"><span ><i data-feather="users"></i></span>&nbsp;
1158</p>

              <div class="progress progress-xxs mt-0 mb-10">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="fs-12"><i class="ion-arrow-graph-down-right text-primary me-1"></i> %18 decrease from last month</div>
            </div>
        </div>
        <!-- /.col -->

        <div class="col-xl-4 col-12">
            <div class="box box-body">
              <h6>
                <span class="text-uppercase fs-18">Booking Requests</span>
                <span class="float-end"><a class="btn btn-xs btn-danger-light" href="#">View</a></span>
              </h6>
              <br>
              <p class="fs-26"><span><i data-feather="book"></i></span>&nbsp;159,1258</p>

              <div class="progress progress-xxs mt-0 mb-10">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="fs-12"><i class="ion-arrow-graph-down-right text-danger me-1"></i> %95 down</div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-4 col-12">
            <div class="box box-body">
              <h6>
                <span class="text-uppercase fs-18">Available Space</span>
                <span class="float-end"><a class="btn btn-xs btn-info-light" href="#">View</a></span>
              </h6>
              <br>
              <p class="fs-26"><span><i data-feather="box"></i></span>&nbsp;84,9658</p>

              <div class="progress progress-xxs mt-0 mb-10">
                <div class="progress-bar bg-info" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="flexbox fs-12">
                <span><i class="ion-arrow-graph-down-right text-info me-1"></i> %54 up</span>
                <span>+90258</span>
              </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Orders Shipping Today</h4>
                  <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                      <input type="text" name="s">
                    </div>
                  </div>
                </div>
                <div class="box-body p-0">
                    <div class="table-responsive">
                      <table class="table mb-0 dash-table">
                        <tbody><tr>
                          <td><a href="javascript:void(0)">1234</a></td>
                          <td><span class="text-muted text-nowrap">05-12-2021</span> </td>
                          <td>Donec</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
954</td>
                          <td><i class="fa fa-truck"></i></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">3215</a></td>
                          <td><span class="text-muted text-nowrap">05-13-2021</span> </td>
                          <td>Consectetur</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
512</td>
                          <td><i class="fa fa-truck"></i></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">4521</a></td>
                          <td><span class="text-muted text-nowrap">05-14-2021</span> </td>
                          <td>Vestibulum</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
745</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">1452</a></td>
                          <td><span class="text-muted text-nowrap">05-15-2021</span> </td>
                          <td>Donec</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
875</td>
                          <td><i class="fa fa-truck"></i></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">7458</a></td>
                          <td><span class="text-muted text-nowrap">05-16-2021</span> </td>
                          <td>Nam ut</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
658</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">7451</a></td>
                          <td><span class="text-muted text-nowrap">05-17-2021</span> </td>
                          <td>Praesent</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
418</td>
                          <td><i class="fa fa-truck"></i></td>
                        </tr>
                        <tr>
                          <td><a href="javascript:void(0)">4125</a></td>
                          <td><span class="text-muted text-nowrap">05-18-2021</span> </td>
                          <td>Sed tempor</td>
                          <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                          <td>₹
421</td>
                          <td></td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)">4125</a></td>
                            <td><span class="text-muted text-nowrap">05-18-2021</span> </td>
                            <td>Sed tempor</td>
                            <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                            <td>₹
421</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><a href="javascript:void(0)">4125</a></td>
                            <td><span class="text-muted text-nowrap">05-18-2021</span> </td>
                            <td>Sed tempor</td>
                            <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                            <td>₹
421</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><a href="javascript:void(0)">4125</a></td>
                            <td><span class="text-muted text-nowrap">05-18-2021</span> </td>
                            <td>Sed tempor</td>
                            <td><span class="badge badge-pill badge-danger">Shipping</span></td>
                            <td>₹
421</td>
                            <td></td>
                          </tr>
                      </tbody></table>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box position-static">
                <div class="box-header">
                    <h4 class="box-title">Section Overview</h4>
                    <div class="box-controls pull-right">
                        <input class="form-control no-border bg-lightest" id="e" type="date">
                    </div>
                </div>
                <div class="box-body">
                    <div class="row mb-20">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <div class="w-40 h-40 m-5">	</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <div class="w-40 h-40 m-5">	</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <div class="w-40 h-40 m-5">	</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row g-0 row-cols-auto">
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <div class="w-40 h-40 m-5">	</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Empty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="section-bx">
                                        <a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">
                                            <div class="bx-dec">
                                                <div class="section-dec d-flex align-items-center">
                                                    <div class="box-img">
                                                        <img src="../images/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="dec">
                                                        <h4 class="text-white my-0">Row 3 #124578</h4>
                                                        <p class="text-white">H60 x W60 x 20 KG</p>
                                                        <p class="mb-0 text-white-50">Delivered 06:15PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-20">
                        <div class="d-flex">
                            <div class="w-20 h-20 bg-warning-light rounded"></div>
                            <h5 class="mx-15 my-0">Free Place</h5>
                        </div>
                        <div class="d-flex">
                            <div class="w-20 h-20 bg-warning rounded"></div>
                            <h5 class="mx-15 my-0">Loaded Place</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">X axis timezone Chart</h4>
                </div>
                <div class="box-body">
                    <div id="axis-timezone" class="c3" style="max-height: 350px; position: relative;"><svg width="1548.953125" height="350" style="overflow: hidden;"><defs><clipPath id="c3-1680863130526-clip"><rect width="1506.953125" height="296"></rect></clipPath><clipPath id="c3-1680863130526-clip-xaxis"><rect x="-41" y="-20" width="1578.953125" height="70"></rect></clipPath><clipPath id="c3-1680863130526-clip-yaxis"><rect x="-39" y="-4" width="60" height="320"></rect></clipPath><clipPath id="c3-1680863130526-clip-grid"><rect width="1506.953125" height="296"></rect></clipPath><clipPath id="c3-1680863130526-clip-subchart"><rect width="1506.953125"></rect></clipPath></defs><g transform="translate(40.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="753.4765625" y="148" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="1506.953125" height="296" style="opacity: 0;"></rect><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-ygrids"><line class="c3-ygrid" x1="0" x2="1507" y1="287" y2="287"></line><line class="c3-ygrid" x1="0" x2="1507" y1="264" y2="264"></line><line class="c3-ygrid" x1="0" x2="1507" y1="240" y2="240"></line><line class="c3-ygrid" x1="0" x2="1507" y1="217" y2="217"></line><line class="c3-ygrid" x1="0" x2="1507" y1="194" y2="194"></line><line class="c3-ygrid" x1="0" x2="1507" y1="171" y2="171"></line><line class="c3-ygrid" x1="0" x2="1507" y1="148" y2="148"></line><line class="c3-ygrid" x1="0" x2="1507" y1="124" y2="124"></line><line class="c3-ygrid" x1="0" x2="1507" y1="101" y2="101"></line><line class="c3-ygrid" x1="0" x2="1507" y1="78" y2="78"></line><line class="c3-ygrid" x1="0" x2="1507" y1="55" y2="55"></line><line class="c3-ygrid" x1="0" x2="1507" y1="32" y2="32"></line><line class="c3-ygrid" x1="0" x2="1507" y1="8" y2="8"></line></g><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="296" style="visibility: hidden;"></line></g></g><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="7.5" y="0" width="100" height="296"></rect><rect class=" c3-event-rect c3-event-rect-1" x="107.5" y="0" width="184.5" height="296"></rect><rect class=" c3-event-rect c3-event-rect-2" x="292" y="0" width="184.5" height="296"></rect><rect class=" c3-event-rect c3-event-rect-3" x="476.5" y="0" width="185" height="296"></rect><rect class=" c3-event-rect c3-event-rect-4" x="661.5" y="0" width="185" height="296"></rect><rect class=" c3-event-rect c3-event-rect-5" x="846.5" y="0" width="184.5" height="296"></rect><rect class=" c3-event-rect c3-event-rect-6" x="1031" y="0" width="184.5" height="296"></rect><rect class=" c3-event-rect c3-event-rect-7" x="1215.5" y="0" width="185" height="296"></rect><rect class=" c3-event-rect c3-event-rect-8" x="1400.5" y="0" width="99.5" height="296"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-data2" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data2 c3-bars c3-bars-data2" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M15,263.06761006289304L200,170.3003144654088L384,228.27987421383645L569,76.60534591194968L754,198.59433962264148L939,161.48742138364778L1123,32.07704402515724L1308,228.27987421383645L1493,256.11006289308176" style="stroke: rgb(103, 58, 183); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M 15 263.06761006289304" style="fill: rgb(103, 58, 183); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="15" cy="263.06761006289304"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="200" cy="170.3003144654088"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="384" cy="228.27987421383645"></circle><circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="569" cy="76.60534591194968"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="754" cy="198.59433962264148"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="939" cy="161.48742138364778"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="1123" cy="32.07704402515724"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="1308" cy="228.27987421383645"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(103, 58, 183); opacity: 1;" cx="1493" cy="256.11006289308176"></circle></g></g><g class="c3-chart-line c3-target c3-target-data2" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data2 c3-lines c3-lines-data2"><path class=" c3-shape c3-shape c3-line c3-line-data2" d="M15,220.39465408805032L200,135.9764150943396L384,172.61949685534591L569,25.583333333333346L754,161.9512578616352L939,126.23584905660377L1123,95.15880503144653L1308,186.99842767295598L1493,271.41666666666663" style="stroke: rgb(73, 116, 224); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data2 c3-areas c3-areas-data2"><path class=" c3-shape c3-shape c3-area c3-area-data2" d="M 15 220.39465408805032" style="fill: rgb(73, 116, 224); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-data2"></g><g class=" c3-shapes c3-shapes-data2 c3-circles c3-circles-data2" style="cursor: pointer;"><circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="15" cy="220.39465408805032"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="200" cy="135.9764150943396"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="384" cy="172.61949685534591"></circle><circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="569" cy="25.583333333333346"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="754" cy="161.9512578616352"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="939" cy="126.23584905660377"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="1123" cy="95.15880503144653"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="1308" cy="186.99842767295598"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(73, 116, 224); opacity: 1;" cx="1493" cy="271.41666666666663"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(753.4765625,143)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g><g class="c3-chart-text c3-target c3-target-data2" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data2"></g></g></g></g><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-xaxis)" transform="translate(0,296)" style="visibility: visible; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="1506.953125" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(15, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2009-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(200, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2010-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(384, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2011-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(569, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2012-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(754, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2013-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(939, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2014-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1123, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2015-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1308, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2016-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1493, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2017-12-31 18:30:00</tspan></text></g><path class="domain" d="M0,6V0H1506.953125V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,287)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,264)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,240)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">100</tspan></text></g><g class="tick" transform="translate(0,217)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">150</tspan></text></g><g class="tick" transform="translate(0,194)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">200</tspan></text></g><g class="tick" transform="translate(0,171)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">250</tspan></text></g><g class="tick" transform="translate(0,148)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">300</tspan></text></g><g class="tick" transform="translate(0,124)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">350</tspan></text></g><g class="tick" transform="translate(0,101)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">400</tspan></text></g><g class="tick" transform="translate(0,78)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">450</tspan></text></g><g class="tick" transform="translate(0,55)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">500</tspan></text></g><g class="tick" transform="translate(0,32)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">550</tspan></text></g><g class="tick" transform="translate(0,8)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">600</tspan></text></g><path class="domain" d="M-6,1H0V296H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(1506.953125,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,296)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,267)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,237)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,208)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,178)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,149)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,119)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,90)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,60)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,31)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V296H6"></path></g></g><g transform="translate(20.5,350.5)" style="visibility: hidden;"><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="1543.953125" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(file:///C:/Users/om/Desktop/warehouse-admin-dashboard.multipurposethemes.com/main/charts_c3_axis.html#c3-1680863130526-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(15, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2009-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(200, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2010-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(384, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2011-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(569, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2012-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(754, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2013-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(939, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2014-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1123, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2015-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1308, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2016-12-31 18:30:00</tspan></text></g><g class="tick" transform="translate(1493, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2017-12-31 18:30:00</tspan></text></g><path class="domain" d="M0,6V0H1506.953125V6"></path></g></g><g transform="translate(0,330)"><g class="c3-legend-item c3-legend-item-data1" style="visibility: visible; cursor: pointer;"><text x="738.283203125" y="9" style="pointer-events: none;">data1</text><rect class="c3-legend-item-event" x="724.283203125" y="-5" width="55.03125" height="18" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="722.283203125" y1="4" x2="732.283203125" y2="4" stroke-width="10" style="stroke: rgb(103, 58, 183); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-data2" style="visibility: visible; cursor: pointer;"><text x="793.314453125" y="9" style="pointer-events: none;">data2</text><rect class="c3-legend-item-event" x="779.314453125" y="-5" width="45.35546875" height="18" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="777.314453125" y1="4" x2="787.314453125" y2="4" stroke-width="10" style="stroke: rgb(73, 116, 224); pointer-events: none;"></line></g></g><text class="c3-title" x="774.4765625" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 196.969px; left: 75.5px;"><table class="c3-tooltip"><tbody><tr><th colspan="2">2009-12-31 18:30:00</th></tr><tr class="c3-tooltip-name--data2"><td class="name"><span style="background-color:#4974e0"></span>data2</td><td class="value">142</td></tr><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#673ab7"></span>data1</td><td class="value">50</td></tr></tbody></table></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
  @endsection
