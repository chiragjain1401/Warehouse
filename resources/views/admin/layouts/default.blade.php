<!doctype html>
<html lang="en">
    <head>
        @include('admin.layouts.includes.head')
    </head>
    <body class="hold-transition light-skin sidebar-mini theme-primary fixed">
        <div class="wrapper">
        <!-- Begin page -->
         <div id="loader"></div>
            @include('admin.layouts.includes.header')
            <!-- ========== Left Sidebar Start ========== -->
            <aside class="main-sidebar">
                <section class="sidebar position-relative">
                    <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                    @include('admin.layouts.includes.sidebar-menu')

                  </div>
                </div>
                </section>

            </aside>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-wrapper">
                <div class="container-full">
                  @yield('content')
              {{--  @include('admin.layouts.includes.footer') no footer for now --}}
            </div>
        </div>
            <!-- end page-wrapper-->
        </div>
        <!-- END main-wrapper -->
        <!-- JAVASCRIPT -->
        {{-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script> --}}
        <script src="{{asset('/js/vendors.min.js')}}"></script>
        <script src="{{asset('/js/pages/chat-popup.js')}}"></script>
        <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>

        <script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
        <script src="{{asset('assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script>
        {{-- <script>
            document.getElementById('e').value = new Date().toISOString().substring(0, 10);
        </script> --}}

        <!-- Deposito Admin App -->
        <script src="{{asset('js/template.js')}}"></script>
        <script src="{{asset('js/pages/dashboard3.js')}}"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script> -->
        {{-- <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/toastr/js/toastr.min.js') }}" type="text/javascript"></script> --}}
        {{-- <script type="text/javascript">
                @if(session()->has('error'))
                     toastr.error("", "{{ session()->get('error')}}", {
                                    positionClass: "toast-top-right",timeOut: 5000,
                                    closeButton: !0,debug: !1,newestOnTop: !0,
                                    progressBar: !0,preventDuplicates: !0,onclick: null,
                                    showDuration: "300",hideDuration: "1000",
                                    extendedTimeOut: "1000",showEasing: "swing",
                                    hideEasing: "linear",showMethod: "fadeIn",
                                    hideMethod: "fadeOut",tapToDismiss: !1
                                })
                    @endif
                    @if(session()->has('success'))
                       toastr.success("", "{{ session()->get('success')}}", {
                                    timeOut: 5000,closeButton: !0,
                                    debug: !1,newestOnTop: !0,
                                    progressBar: !0,positionClass: "toast-top-right",
                                    preventDuplicates: !0,onclick: null,
                                    showDuration: "300",hideDuration: "1000",
                                    extendedTimeOut: "1000",showEasing: "swing",
                                    hideEasing: "linear",showMethod: "fadeIn",
                                    hideMethod: "fadeOut",tapToDismiss: !1
                                })
                    @endif
        </script>          --}}
        @stack('scripts')
      {{--  @yield('footer') --}}
    </body>
</html>
