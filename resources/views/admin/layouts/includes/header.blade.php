<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		{{--  <div class="logo-mini w-50">
		 <span class="light-logo"><img src="{{asset('assets/images/logo-letter.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('assets/images/logo-letter.png')}}" alt="logo"></span>
		  </div>--}}
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{asset('assets/images/vaultlogo.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('assets/images/logo-light-text.png')}}" alt="logo"></span>
		  </div>
		</a>
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="align-left"></i>
			    </a>
			</li>
			{{-- <li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li> --}}
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			{{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="findspace.html" class="waves-effect waves-light nav-link w-p100 full-screen btn-primary-light fs-18 l-h-26">
					Find A Sapce
			    </a>
			</li> --}}
			{{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="vendor.html" class="waves-effect waves-light nav-link w-p100 full-screen btn-primary-light fs-18 l-h-26">
					Vendor
			    </a>
			</li> --}}
			{{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="help.html" class="waves-effect waves-light nav-link w-p100 full-screen btn-primary-light fs-18 l-h-26">
					Help
			    </a>
			</li> --}}
			{{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="q%26a.html" class="waves-effect waves-light nav-link w-p100 full-screen btn-primary-light fs-18 l-h-26">
					Q&A
			    </a>
			</li> --}}
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  {{--<li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
			  <i data-feather="bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>

				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>--}}

          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
			  	<i data-feather="settings"></i>
			  </a>
          </li>

	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
				<img src="{{asset('assets/images/avatar/avatar-1.png')}}" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="extra_profile.html"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="mailbox.html"><i class="ti-settings text-muted me-2"></i> Email</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="auth_login.html"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li></ul>
      </div>
    </nav>
  </header>

{{-- @push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
  // Listen for changes to the search bar input
  $('#searchBar').on('input', function() {
    var searchTerm = $(this).val().toLowerCase();

    // Loop through each item to check if it matches the search term
    $('.item').each(function() {
      var text = $(this).text().toLowerCase();
      var match = text.indexOf(searchTerm) > -1;

      // Show or hide the item depending on whether it matches the search term
      $(this).toggle(match);
    });
  });
});
</script>
@endpush --}}
