@extends('admin.layouts.default')
@section('title')
    Admin - Warehouse Create
@endsection
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Warehouse</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Warehouse</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-valide" id="myForm" action="{{ route('admin.warehouse.store') }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                    <label for="name">Warehouse Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter name">
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                    <label for="quantity">Quantity<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="quantity" name="quantity"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            class="form-control" placeholder="Enter quantity in grams or ml">
                                    </div>
                                </div> --}}

                                <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                    <label for="location">Location<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="fat"
                                            {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" --}}
                                            name="location" class="form-control" placeholder="Enter location">
                                    </div>

                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="Area">Area <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="Area"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="carbs" class="form-control" placeholder="Enter Area">
                                    </div>

                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="total_unit">Total unit<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="total_unit"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="total_unit" class="form-control" placeholder="Enter Total Unit">
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                    <label for="calories">Calories (In kcal)<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="calories"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="calories" class="form-control" placeholder="Enter calories in kcal">
                                    </div>
                                </div> --}}

                                <div class="col-md-4">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="status">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="text-end">
                                    <a href="{{ route('admin.warehouse.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    {{-- <script>
       $(document).ready(function() {
  $('#name').blur(function() {
    var name = $(this).val();

    $.ajax({
      url: "{{ route('check.dummy.exists') }}",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        name: name
      },
      success: function(response) {
        if (response.exists) {
          $('#name').addClass('is-invalid');
          Swal.fire({
            text: "dummy name already exists",
            icon: 'warning',
          })
        } else {
          $('#name').removeClass('is-invalid');
          $('#name-error').html('');
        }
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });

  $('button[type="submit"]').click(function(event) {
    if ($('#name').hasClass('is-invalid')) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
  });
});
   // const form = document.querySelector('#myForm');
        // form.addEventListener('submit', (event) => {
        //     const invoice_period = document.querySelector('#image').value;

        //     if (invoice_period.trim() === '') {
        //         event.preventDefault();
        //         Swal.fire({
        //             title: 'Oops...',
        //             text: "Please upload image!!",
        //             icon: 'warning',
        //         })
        //     }
        // });
        form.addEventListener('submit', (event) => {
            const name = document.querySelector('#name').value;

            if (name.trim() === '') {
                event.preventDefault();
                Swal.fire({
                    title: 'Oops...',
                    text: " Name  field cannot be empty !!",
                    icon: 'warning',
                })
            }
        });
        // form.addEventListener('submit', (event) => {
        //     const start_time = document.querySelector('#start_time').value;

        //     if (start_time.trim() === '') {
        //         event.preventDefault();
        //         Swal.fire({
        //             title: 'Oops...',
        //             text: "Please select start time !!",
        //             icon: 'warning',
        //         })
        //     }
        // });
        // form.addEventListener('submit', (event) => {
        //     const end_time = document.querySelector('#end_time').value;

        //     if (end_time.trim() === '') {
        //         event.preventDefault();
        //         Swal.fire({
        //             title: 'Oops...',
        //             text: "Please select end time !!",
        //             icon: 'warning',
        //         })
        //     }
        // });
    </script> --}}
@endpush
