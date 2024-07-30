<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-scroll-header>
    <div class="container"><a class="navbar-brand me-3 me-xl-4" href="{{route('showFrontMainPage')}}"><img class="d-inline" src="img/logo/compony_logo.jpg" width="50" style="border-radius: 50%;" alt="IPM"><p class="fs-4 d-inline ms-1">IPM</p></a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a>
      <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
          <!-- Menu items-->
          <li class="nav-item active"><a class="nav-link " href="{{route('showFrontMainPage')}}">Home</a>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('realEstateAccountInfo')}}">Personal Info</a></li>
              <li><a class="dropdown-item" href="{{route('userAccountInfoSecurity')}}">Password &amp; Security</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateMyProperty')}}">My Properties</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateAccountWishlist')}}">Wishlist</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateAccountReviews')}}">Reviews</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateAccountNotif')}}">Notifications</a></li>
              <!-- <li><a class="dropdown-item" href="">Sign In</a></li>
              <li><a class="dropdown-item" href="">Sign Up</a></li> -->
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('realEstateAddProperty')}}">Add Property</a></li>
              <li><a class="dropdown-item" href="{{route('realEstatePropertyPromotion')}}">Property Promotion</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateVendorProperties')}}">Vendor Page: Properties</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateVendorReviews')}}">Vendor Page: Reviews</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our agents</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('realEstateAccount')}}">Contacts</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateBlog')}}">Blog</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateAbout')}}">About</a></li>
              <li><a class="dropdown-item" href="{{route('realEstateHelpCenter')}}">Help Center</a></li>
            </ul>
          </li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a></li>
        </ul>
      </div>
    </div>
  </header>