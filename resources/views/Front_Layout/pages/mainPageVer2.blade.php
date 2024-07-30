@extends('Front_Layout.indexVer2')
@section('FrontContent')

<!-- Property cost calculator modal-->
<div class="modal fade" id="cost-calculator" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-block position-relative border-0 px-sm-5 px-4">
        <h3 class="h4 modal-title mt-4 text-center">Explore your property’s value</h3>
        <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body px-sm-5 px-4">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label class="form-label fw-bold mb-2" for="property-city">Property location</label>
            <select class="form-control form-select" id="property-city" required>
              <option value="" selected disabled hidden>Choose city</option>
              <option value="Chicago">Chicago</option>
              <option value="Dallas">Dallas</option>
              <option value="Los Angeles">Los Angeles</option>
              <option value="New York">New York</option>
              <option value="San Diego">San Diego</option>
            </select>
            <div class="invalid-feedback">Please choose the city.</div>
          </div>
          <div class="mb-3">
            <select class="form-control form-select" id="property-district" required>
              <option value="" selected disabled hidden>Choose district</option>
              <option value="Brooklyn">Brooklyn</option>
              <option value="Manhattan">Manhattan</option>
              <option value="Staten Island">Staten Island</option>
              <option value="The Bronx">The Bronx</option>
              <option value="Queens">Queens</option>
            </select>
            <div class="invalid-feedback">Please choose the district.</div>
          </div>
          <div class="pt-2 mb-3">
            <label class="form-label fw-bold mb-2" for="property-address">Address</label>
            <input class="form-control" type="text" id="property-address" placeholder="Enter your address" required>
            <div class="invalid-feedback">Please enter your property's address.</div>
          </div>
          <div class="pt-2 mb-3">
            <label class="form-label fw-bold mb-2">Number of rooms</label>
            <div class="btn-group" role="group" aria-label="Choose number of rooms">
              <input class="btn-check" type="radio" id="rooms-1" name="rooms">
              <label class="btn btn-outline-secondary" for="rooms-1">1</label>
              <input class="btn-check" type="radio" id="rooms-2" name="rooms">
              <label class="btn btn-outline-secondary" for="rooms-2">2</label>
              <input class="btn-check" type="radio" id="rooms-3" name="rooms">
              <label class="btn btn-outline-secondary" for="rooms-3">3</label>
              <input class="btn-check" type="radio" id="rooms-4" name="rooms">
              <label class="btn btn-outline-secondary" for="rooms-4">4</label>
              <input class="btn-check" type="radio" id="rooms-5" name="rooms">
              <label class="btn btn-outline-secondary" for="rooms-5">5+</label>
            </div>
          </div>
          <div class="pt-2 mb-4">
            <label class="form-label fw-bold mb-2" for="property-area">Total area, sq.m.</label>
            <input class="form-control" type="text" id="property-area" placeholder="Enter your area" required>
            <div class="invalid-feedback">Please enter your property's area.</div>
          </div>
          <button class="btn btn-primary d-block w-100 mb-4" type="submit"><i
              class="fi-calculator me-2"></i>Calculate</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Hero-->
<div id="propertyResultsContainer"></div>
<section class="container-fluid my-5 pt-5 pb-lg-4 px-xxl-4">
  <div
    class="jarallax card align-items-center justify-content-center border-0 p-md-5 p-4 bg-secondary overflow-hidden mt-n3"
    style="min-height: 65vh; background-image: url(img/real-estate/hero-image-v2.jpg); background-repeat: no-repeat;background-size: cover; background-position: center;" data-jarallax
    data-speed="0.5" ><span class="img-overlay opacity-40"></span>
    <div class="content-overlay" style="max-width: 856px;">

    <!-- navbar -->
    <header class="navbar navbar-expand-lg navbar-light  fixed-top" data-scroll-header>
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


      <h1 class="display-5 mb-5 pb-md-3 px-md-3 text-white text-center">Easy Way to Find a Perfect Property</h1>
      <form class="form-group d-block">
        <div class="row g-0">
          <div class="col-md-10 d-sm-flex align-items-center">
            <hr class="d-sm-none my-2">
            <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
              <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">Country</span></button>
              <input type="hidden">
              <ul class="dropdown-menu" id="countryAll" name="countryAll" >
                
              </ul>
            </div>
            <hr class="d-sm-none my-2">
            <div class="dropdown w-sm-50 " data-bs-toggle="select">
              <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span
                  class="dropdown-toggle-label" id="cityNameLabel">City</span></button>
              <input type="hidden">
              <ul class="dropdown-menu" id="cityLists" name="cityLists">
                {{-- the <li> tags will add here dynamically   --}}
              </ul>
            </div>
            <hr class="d-sm-none my-2">
            <div class="dropdown w-sm-50" data-bs-toggle="select">
              <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button"
                data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Property
                  type</span></button>
              <input type="hidden">
              
              </ul>
            </div>
          </div>
          <hr class="d-md-none mt-2">
          <div class="col-md-2 d-sm-flex align-items-center pt-3 pt-md-0">
            <button class="btn btn-lg btn-icon btn-primary px-3 w-100 " id="searchPropertyFront" type="button">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- About-->
<section class="container mb-5 pb-lg-4">
  <div class="row">
    <div class="col-lg-6 col-md-7">
      <div class="row gy-4">
        <div class="col-md-5 col-sm-6">
          <h2 class="h3 mb-0">We are the best in the housing market</h2>
        </div>
        <div class="col-sm-6 offset-md-1">
          <p class="mb-0">Viverra a, mauris elit, pretium senectus ut sagittis malesuada lacus. Egestas risus lorem
            lectus nunc. Aliquet ultrices risus lobortis cursus vel blandit magna. Eu donec hendrerit morbi tortor.
          </p>
        </div>
      </div>
      <div class="py-3">
        <hr class="my-4">
      </div>
      <div class="row row-cols-md-3 row-cols-1 gy-4 gx-lg-5 gx-3 text-center px-lg-4">
        <div class="col"><img class="d-block mx-auto mb-3" src="img/real-estate/brands/trustpilot.svg"
            alt="Trustpilot">
          <h5 class="mb-1">Excellent</h5><span class="fs-sm">4.8 out of 5</span>
        </div>
        <div class="col">
          <h5 class="h2 mb-2">1.2M+</h5><span class="fs-sm">Property listings worldwide</span>
        </div>
        <div class="col">
          <h5 class="h2 mb-2">$3.8K</h5><span class="fs-sm">Average annual earnings per landlord</span>
        </div>
      </div>
    </div>
    <div class="col-md-5 offset-lg-1"><img class="d-block mx-auto" src="img/real-estate/illustrations/find-alt.svg"
        alt="Illustration">
      </div>
  </div>
</section>
<!-- Newly listed properties-->
<section class="container mt-n3 mt-md-0 mb-5 pb-3 pb-lg-4">
  <div class="d-flex align-items-end justify-content-between mb-4 pb-md-2">
    <h2 class="h3 mb-0">Newly listed properties</h2><a class="btn btn-link fw-normal ms-2 p-0"
      href="{{route('realEstateCatalogRent')}}">View all<i class="fi-arrow-long-right ms-2"></i></a>
  </div>
  <!-- Carousel-->
  <div class="tns-carousel-wrapper">
    <div class="tns-carousel-inner"
      data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;speed&quot;: 800, &quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#carousel-controls-lp&quot;}">
      <!-- Item-->
      <div>
        <div class="row">
          <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
            <div class="position-relative pe-lg-5">
              <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span
                  class="badge bg-info fs-sm me-2">New</span><span
                  class="badge bg-success fs-sm me-2">Verified</span></div><img class="rounded-3 zindex-5"
                src="img/real-estate/recent/04.jpg" alt="Article image">
            </div>
          </div>
          <div class="col-lg-4 col-md-5"><span
              class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">For sale</span>
            <div class="from-start delay-2">
              <h3 class="h4 mb-2">Duplex with Garage</h3>
              <p class="mb-md-4 mb-3 fs-sm">28 Jackson Ave Long Island City, NY 67234</p>
              <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i
                    class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i
                    class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i
                    class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                <li><b>126 </b>sq.m</li>
              </ul>
              <p class="mb-4 pb-md-2">Blandit lorem dictum in velit. Et nisi at faucibus mauris pretium enim. Risus
                sapien nisi aliquam egestas leo dignissim ut quis ac. Amet, cras orci justo, tortor nisl aliquet.
              </p>
            </div>
            <div class="btn-group btn-group-lg scale-up delay-3" role="group"
              aria-label="Buy now or add to wishlist"><a class="btn btn-primary"
                href="real-estate-single-v2.html">Sale for $160,000</a>
              <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Add to Wishlist"><i class="fi-heart fs-5"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div>
        <div class="row">
          <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
            <div class="position-relative pe-lg-5">
              <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span
                  class="badge bg-info fs-sm me-2">New</span><span
                  class="badge bg-success fs-sm me-2">Verified</span></div><img class="rounded-3 zindex-5"
                src="img/real-estate/recent/05.jpg" alt="Article image">
            </div>
          </div>
          <div class="col-lg-4 col-md-5"><span
              class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">For rent</span>
            <div class="from-start delay-2">
              <h3 class="h4 mb-2">Luxury Rental Villa</h3>
              <p class="mb-md-4 mb-3 fs-sm">1510 Castle Hill Ave Bronx, NY 10462</p>
              <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                <li class="me-3 pe-3 border-end"><b class="me-1">5</b><i
                    class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                <li class="me-3 pe-3 border-end"><b class="me-1">3</b><i
                    class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                <li class="me-3 pe-3 border-end"><b class="me-1">1</b><i
                    class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                <li><b>140 </b>sq.m</li>
              </ul>
              <p class="mb-4 pb-md-2">Sagittis faucibus feugiat integer quam vel ornare. Tellus, vel consequat,
                sagittis ut penatibus urna, ante. Mattis fermentum lectus sed nisl ac viverra lacus. A at iaculis
                etiam nunc, diam urna in.</p>
            </div>
            <div class="btn-group btn-group-lg scale-up delay-3" role="group"
              aria-label="Buy now or add to wishlist"><a class="btn btn-primary" href="#">Rent from $2,850</a>
              <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Add to Wishlist"><i class="fi-heart fs-5"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel custom controls-->
  <div class="tns-carousel-controls pt-2 mt-4" id="carousel-controls-lp">
    <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
    <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
  </div>
</section>
<!-- Discover locations-->
<section class="container mb-5 pb-lg-5 pb-4">
  <div class="d-flex align-items-start justify-content-between mb-3 mb-md-4 pb-md-2">
    <div class="d-flex flex-md-row flex-column align-items-center">
      <h2 class="h3 mb-4 mb-md-0">Discover locations</h2>
      <ul class="nav nav-tabs mb-0 ms-md-4 ms-n3 ps-lg-2" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#">For rent</a></li>
        <li class="nav-item"><a class="nav-link" href="#">For sale</a></li>
      </ul>
    </div><a class="btn btn-link fw-normal ms-2 p-0" href="real-estate-catalog-rent.html">View all<i
        class="fi-arrow-long-right ms-2"></i></a>
  </div>
  <!-- Carousel-->
  <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
    <div class="tns-carousel-inner row gx-4 mx-0 py-3"
      data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
      <div class="col">
        <div class="card card-hover border-0 shadow-sm h-100 p-2">
          <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/usa.svg"
              width="80">
            <h4 class="h5 mb-2">Popular locations</h4><span class="fs-sm text-muted">Tempor id sed suspendisse
              nulla.</span>
            <hr class="my-4">
            <ul class="nav flex-column mb-0">
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">koysinjaq</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Duhok</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Baqdad</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Erbil</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-hover border-0 shadow-sm h-100 p-2">
          <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/city.svg"
              width="80">
            <h4 class="h5 mb-2">In the city</h4><span class="fs-sm text-muted">Aenean in vitae lectus nunc. Dictum
              nunc enim.</span>
            <hr class="my-4">
            <ul class="nav flex-column mb-0">
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">San Antonio</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">San Diego</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Austin</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">San Jose</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Columbus</a></li>
              <li class="nav-item"><a class="nav-link p-0 fw-normal" href="#">Dallas</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-hover border-0 shadow-sm h-100 p-2">
          <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/field.svg"
              width="80">
            <h4 class="h5 mb-2">Rural and countryside</h4><span class="fs-sm text-muted">Leo vel sit velit, nam
              volutpat tincidunt orci.</span>
            <hr class="my-4">
            <ul class="nav flex-column mb-0">
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Bar Harbor</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Gatlinburg</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Sedona</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Monterey</a></li>
              <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">Telluride</a></li>
              <li class="nav-item"><a class="nav-link p-0 fw-normal" href="#">Sonoma</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Top properties-->
<section class="container-fluid px-xxl-4 mb-5 pb-lg-4">
  <h2 class="h3 mb-4 pb-2 text-center">Top properties on IPM</h2>
  <!-- Carousel-->
  <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
    <div class="tns-carousel-inner row gx-4 mx-0"
      data-carousel-options="{&quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;controlsContainer&quot;: &quot;#carousel-controls-tp&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;1320&quot;:{&quot;items&quot;:2}}}">
      <!-- Carousel item-->
      <div class="col">
        <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
          <div class="col-md-7"><a
              class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100"
              href="real-estate-single-v1.html"
              style="background-image: url(img/real-estate/top-properties/01.jpg); min-height: 18.75rem;"><span
                class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0"></div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                  <div class="pe-2">
                    <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                    <h3 class="h5 text-light mb-1">Duplex with Garage</h3>
                    <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>21 Pulaski Road Kings Park, NY
                      11754</div>
                  </div>
                </div>
              </div>
            </a></div>
          <div class="col-md-5"><a
              class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/02.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For rent</div>
                  <h3 class="h5 text-light mb-1">Villa with Pool</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>118-11 Sutphin Blvd Jamaica, NY 11434
                  </div>
                </div>
              </div>
            </a><a class="card border-0 overflow-hidden text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/03.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                  <h3 class="h5 text-light mb-1">Luxury Rental Villa</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>6954 Grand AveMaspeth, NY 11378</div>
                </div>
              </div>
            </a></div>
        </div>
      </div>
      <!-- Carousel item-->
      <div class="col">
        <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
          <div class="col-md-7"><a
              class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100"
              href="real-estate-single-v1.html"
              style="background-image: url(img/real-estate/top-properties/04.jpg); min-height: 18.75rem;"><span
                class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0"></div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                  <div class="pe-2">
                    <div class="fs-sm text-uppercase pt-2 mb-1">For rent</div>
                    <h3 class="h5 text-light mb-1">White Cottage</h3>
                    <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>118-11 Sutphin Blvd Jamaica, NY
                      11434</div>
                  </div>
                </div>
              </div>
            </a></div>
          <div class="col-md-5"><a
              class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/05.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                  <h3 class="h5 text-light mb-1">Country House</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>6954 Grand AveMaspeth, NY 11378</div>
                </div>
              </div>
            </a><a class="card border-0 overflow-hidden text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/06.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                  <h3 class="h5 text-light mb-1">Modern House | 90 sq.m</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>21 Pulaski Road Kings Park, NY 11754
                  </div>
                </div>
              </div>
            </a></div>
        </div>
      </div>
      <!-- Carousel item-->
      <div class="col">
        <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
          <div class="col-md-7"><a
              class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100"
              href="real-estate-single-v1.html"
              style="background-image: url(img/real-estate/top-properties/07.jpg); min-height: 18.75rem;"><span
                class="img-gradient-overlay"></span>
              <div class="card-body content-overlay pb-0"></div>
              <div class="card-footer content-overlay border-0 pt-0 pb-4">
                <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                  <div class="pe-2">
                    <div class="fs-sm text-uppercase pt-2 mb-1">For rent</div>
                    <h3 class="h5 text-light mb-1">Luxury Rental Villa</h3>
                    <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>6954 Grand AveMaspeth, NY 11378
                    </div>
                  </div>
                </div>
              </div>
            </a></div>
          <div class="col-md-5"><a
              class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/08.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                  <h3 class="h5 text-light mb-1">Condominium</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>21 Pulaski Road Kings Park, NY 11754
                  </div>
                </div>
              </div>
            </a><a class="card border-0 overflow-hidden text-decoration-none text-light"
              href="real-estate-single-v2.html">
              <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/09.jpg"
                  alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                  <div class="fs-sm text-uppercase pt-2 mb-1">For rent</div>
                  <h3 class="h5 text-light mb-1">Family Home</h3>
                  <div class="fs-sm opacity-70"><i class="fi-map-pin me-1"></i>118-11 Sutphin Blvd Jamaica, NY 11434
                  </div>
                </div>
              </div>
            </a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel custom controls-->
  <div class="tns-carousel-controls justify-content-center pt-md-2 mt-4" id="carousel-controls-tp">
    <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
    <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
  </div>
</section>
<!-- Find your agent-->
<section class="container mb-5 pb-lg-5 pb-md-4">
  <div class="card py-lg-5 py-4 border-0 bg-secondary">
    <div class="card-body p-4 text-center">
      <h2>Find your agent</h2>
      <p class="mx-auto mb-md-5 mb-4 pb-lg-3" style="max-width: 53.125rem;">We have the most comprehensive directory
        of estate agents to help you with all your property needs. Whether buying, selling or renting start your
        search to find the right local expertise.</p>
      <!-- Agent ava's-->
      <div class="d-flex align-items-center justify-content-center flex-wrap mb-md-5 mb-4 pb-lg-3 ps-3 pt-4">
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/39.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/40.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/41.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/42.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/43.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/44.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/45.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/46.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/47.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/48.jpg" width="110" alt="Avatar"></div>
        <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle"
            src="img/avatars/49.jpg" width="110" alt="Avatar"></div>
      </div><a class="btn btn-lg btn-primary w-sm-auto w-100" href="#">Find agent<i
          class="fi-chevron-right ms-2"></i></a>
    </div>
  </div>
</section>
<!-- Blog-->
<section class="container mb-5 pb-lg-5 pb-4">
  <h2 class="h3 mb-4 pb-2 text-md-start text-center">Latest property news</h2>
  <div class="row gy-5">
    <div class="col-lg-7">
      <!-- Post-->
      <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#"
          style="background-image: url(img/real-estate/blog/05.jpg);"></a>
        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none"
            href="real-estate-blog-single.html">Inspiration</a>
          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="real-estate-blog-single.html">How Real Estate
              Drone Photography Can Elevate</a></h3>
          <p class="fs-sm text-muted">Augue diam malesuada vitae id nisl. Fringilla egestas id proin quis consequat
            nibh quam sed. Ac vitae lectus...</p><a class="d-flex align-items-center text-decoration-none"
            href="#"><img class="rounded-circle" src="img/avatars/10.jpg" width="44" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-sm text-nav lh-base mb-1">Evin Aso</h6>
              <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i
                    class="fi-calendar-alt opacity-70 me-1"></i>Dec 3</span><span><i
                    class="fi-chat-circle opacity-70 me-1"></i>1 comment</span></div>
            </div>
          </a>
        </div>
      </article>
      <!-- Post-->
      <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top"
          href="real-estate-blog-single.html" style="background-image: url(img/real-estate/blog/06.jpg);"></a>
        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none" href="#">Industry Views</a>
          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="real-estate-blog-single.html">7 Tips for Achieving
              Maximum Coziness</a></h3>
          <p class="fs-sm text-muted">Eget eu nunc aenean at imperdiet. Pellentesque in massa tincidunt congue.
            Nulla congue egestas mi volutpat varius...</p><a class="d-flex align-items-center text-decoration-none"
            href="#"><img class="rounded-circle" src="img/avatars/08.jpg" width="44" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-sm text-nav lh-base mb-1">Homar Ali</h6>
              <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i
                    class="fi-calendar-alt opacity-70 me-1"></i>Dec 27</span><span><i
                    class="fi-chat-circle opacity-70 me-1"></i>3 comment</span></div>
            </div>
          </a>
        </div>
      </article>
      <div class="pt-2"><a class="btn btn-lg btn-outline-primary w-sm-auto w-100" href="real-estate-blog.html">More
          blog posts</a></div>
    </div>
    <div class="col-1 d-lg-block d-none">
      <hr class="hr-vertical mx-auto">
    </div>
    <div class="col-lg-4">
      <div class="row row-cols-lg-1 row-cols-md-2 row-cols-1 gy-5 text-md-start text-center">
        <!-- Mail subscription-->
        <div class="col pb-lg-2">
          <h3 class="h5">Sign up for our newsletter</h3>
          <p class="mb-4">Enter your email to receive the latest news and updates from IPM.</p>
          <form class="form-group mx-auto" style="max-width: 26rem;">
            <div class="input-group"><span class="input-group-text text-muted"><i class="fi-mail"></i></span>
              <input class="form-control" type="email" placeholder="Your Email">
            </div>
            <button class="btn btn-primary" type="button">Subscribe</button>
          </form>
        </div>
        <!-- Following-->
        <div class="col">
          <h3 class="h5">Follow us</h3>
          <p class="mb-4">Get the latest news and inspiration about the housing market.</p>
          <div class="ms-n2 mt-n2"><a
              class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i
                class="fi-instagram"></i></a><a
              class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i
                class="fi-twitter"></i></a><a
              class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i
                class="fi-whatsapp"></i></a><a
              class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i
                class="fi-telegram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Links-->
<section class="container mb-5 pb-lg-5">
  <div class="row row-cols-md-3 row-cols-1 gy-3">
    <!-- Calculate property cost-->
    <div class="col">
      <div class="card card-hover h-100 border-0 bg-faded-warning position-relative">
        <div class="card-body pb-2">
          <h5 class="mb-2 pb-1">Calculate the cost of your property</h5>
          <p class="mb-0">We can calculate your approximate rent.</p>
        </div>
        <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-warning"
            href="#cost-calculator" data-bs-toggle="modal">Calculate</a></div>
      </div>
    </div>
    <!-- Help center link-->
    <div class="col">
      <div class="card card-hover h-100 border-0 bg-faded-accent position-relative">
        <div class="card-body pb-2">
          <h5 class="mb-2 pb-1">Visit our Help Center</h5>
          <p class="mb-0">Here you can find frequently asked questions.</p>
        </div>
        <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-accent"
            href="real-estate-help-center.html">Go to FAQs</a></div>
      </div>
    </div>
    <!-- How it works link-->
    <div class="col">
      <div class="card card-hover h-100 border-0 bg-faded-success position-relative">
        <div class="card-body pb-2">
          <h5 class="mb-2 pb-1">How it works</h5>
          <p class="mb-0">Here is a step-by-step guide for renters.</p>
        </div>
        <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-success"
            href="real-estate-about.html">Get started</a></div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
var _token = $('input[name="_token"]').val();
  function showCity(CountryName){
   if(CountryName!=""){
    $.ajax({
                        url:"{{ route('fetchCitiesOfaCountry') }}",
                        method:"POST",
                        data:{
                          CountryName:CountryName, 
                             _token:_token
                            },
                        success:function(data)
                        {
                          var cityList = $('#cityLists');
                          cityList.empty(); // Clear the existing list
                          var uniqueCities = [...new Set(data)]; // Create an array of unique cities
                          for(let i = 0; i < uniqueCities.length; i++){
                            cityList.append('<li data-city='+ uniqueCities[i]+' id='+ uniqueCities[i]+'><a class="dropdown-item" href="#"><span class="dropdown-item-label">' + uniqueCities[i] + '</span></a></li>');
                          }
                          // Add click event listener to update the button label
                          $('#cityLists li a').on('click', function() {
                            var selectedCity = $(this).text();
                            $('#cityNameLabel').text(selectedCity);
                          });
                            
                        }
                    });

   }
  }
  // Variable to hold the selected country
  var selectedCountry = '';
  var selectedCity = '';
  var selectedPropertyCode='';


  // Function to update the selected country when a list item is clicked
  $(document).on('click', '#countryAll li', function() {
      selectedCountry = $(this).data('country');
  });

   // Function to update the selected city when a list item is clicked
   $(document).on('click', '#cityLists li', function() {
      selectedCity = $(this).data('city');
  });

   // Function to update the selected property when a list item is clicked
   $(document).on('click', '#propertyType li', function() {
    selectedPropertyCode = this.id;
  });

  $(document).on('click','#searchPropertyFront', function(){
  if(1==1){
    $.ajax({
                        url:"{{ route('fetchRegisteredPropertyFront') }}",
                        method:"POST",
                        data:{
                          selectedCountry:selectedCountry,
                          selectedCity:selectedCity,
                          selectedPropertyCode:selectedPropertyCode,
                          _token:_token
                            },
                            success: function(response) {
                              url_change_content="{{route('showPostedProperty')}}";
                              location.href = url_change_content; 
                            },
                            error: function(xhr, status, error) {
                            // Handle error
                            console.error('Error:', error);
                            }
                    });

   }
     
  })
  </script>
@endsection
