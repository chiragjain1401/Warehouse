@extends('admin.layouts.default')
@section('title')
    Admin - Units Create
@endsection
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Units</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Units</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-valide" id="myForm" action="{{ route('admin.unit.store') }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                    <label for="name">Units Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter name">
                                    </div>
                                </div>
                            <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                            <label for="location">Location</label>
                                <div class="input-group">
                                   
                                        <input type="text"  class="form-control" name="location" id="location" placeholder="Click the map to select a location" required>
                                </div>
                              </div>
                              {{--  <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                                 <label for="latitude">Latitude</label>
                                 <div class="input-group">
                                 <input type="text"  class="form-control" name="latitude" id="latitude" required>
                                  </div>
                                </div>
                                <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group">
                              <label for="longitude">Longitude</label>
                              <div class="input-group">
                               <input type="text"  class="form-control" name="longitude" id="longitude" required>
                              </div>
                            </div>
                             <div class="col-md-6 col-xl-6 col-xxl-6 mb-3 form-group"> 
                             <div id="map" style="height: 400px"></div>
                              </div>--}}
                                <div class="col-md-6 col-xl-6 col-xxl-6 form-group">
                                    <label for="Area">Area <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="Area"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="area" class="form-control" placeholder="Enter Area">
                                    </div>
 
                                </div>
                                <div class="col-md-6 col-xl-6 col-xxl-6 form-group">
                                    <label for="Height">Height <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="Height"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="height" class="form-control" placeholder="Enter Height">
                                    </div>

                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="width">Width <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="width"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            name="width" class="form-control" placeholder="Enter Width">
                                    </div>

                              </div>
                                <div class="col-md-4 form-group">
                                    <label>Warehouse <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-control" name="warehouse_id">
                                            @foreach( $warehouse as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                </div>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
  var map, marker;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 37.7749, lng: -122.4194},
      zoom: 12
    });
    marker = new google.maps.Marker({
      position: {lat: 37.7749, lng: -122.4194},
      map: map,
      draggable: true
    });
    google.maps.event.addListener(marker, 'dragend', function() {
      var position = marker.getPosition();
      document.getElementById('latitude').value = position.lat();
      document.getElementById('longitude').value = position.lng();
    });
    google.maps.event.addListener(map, 'click', function(event) {
      marker.setPosition(event.latLng);
      document.getElementById('latitude').value = event.latLng.lat();
      document.getElementById('longitude').value = event.latLng.lng();
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

@endpush
