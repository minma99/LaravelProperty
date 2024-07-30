@extends('Front_Layout.indexVer2')
@section('FrontContent')
 <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
  <!-- Breadcrumb-->
  <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
      <li class="breadcrumb-item"><a href="real-estate-account-info.html">Account</a></li>
      <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
    </ol>
  </nav>
  <!-- Page content-->
  <div class="row">
    <!-- Sidebar-->
    <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
      <!-- Account nav-->
      <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4"><img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="Annette Black">
          <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
            <h2 class="fs-lg mb-0">Annette Black</h2><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
            <ul class="list-unstyled fs-sm mt-3 mb-0">
              <li><a class="nav-link fw-normal p-0" href="tel:3025550107"><i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a></li>
              <li><a class="nav-link fw-normal p-0" href="mailto:annette_black@email.com"><i class="fi-mail opacity-60 me-2"></i>annette_black@email.com</a></li>
            </ul>
          </div>
        </div><a class="btn btn-primary btn-lg w-100 mb-3" href="real-estate-add-property.html"><i class="fi-plus me-2"></i>Add property</a><a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
        <div class="collapse d-md-block mt-3" id="account-nav">
          <div class="card-nav"><a class="card-nav-link" href="real-estate-account-info.html"><i class="fi-user opacity-60 me-2"></i>Personal Info</a><a class="card-nav-link" href="real-estate-account-security.html"><i class="fi-lock opacity-60 me-2"></i>Password &amp; Security</a><a class="card-nav-link" href="real-estate-account-properties.html"><i class="fi-home opacity-60 me-2"></i>My Properties</a><a class="card-nav-link active" href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a><a class="card-nav-link" href="real-estate-account-reviews.html"><i class="fi-star opacity-60 me-2"></i>Reviews</a><a class="card-nav-link" href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>Notifications</a><a class="card-nav-link" href="real-estate-help-center.html"><i class="fi-help opacity-60 me-2"></i>Help</a><a class="card-nav-link" href="signin-light.html"><i class="fi-logout opacity-60 me-2"></i>Sign Out</a></div>
        </div>
      </div>
    </aside>
    <!-- Content-->
    <div class="col-lg-8 col-md-7 mb-5">
      <div class="d-flex align-items-center justify-content-between mb-4 pb-2">
        <h1 class="h2 mb-0">Wishlist</h1><a class="fw-bold text-decoration-none" href="#"><i class="fi-x fs-xs mt-n1 me-2"></i>Clear all</a>
      </div>
      <!-- Item-->
      <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
        <div class="card-img-top position-relative" style="background-image: url(img/real-estate/catalog/16.jpg);"><a class="stretched-link" href="real-estate-single-v1.html"></a>
          <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
          <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
          </div>
        </div>
        <div class="card-body position-relative pb-3">
          <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
          <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">3-bed Apartment | 67 sq.m</a></h3>
          <p class="mb-2 fs-sm text-muted">3811 Ditmars Blvd Astoria, NY 11105</p>
          <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$94,000</div>
          <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">3<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
        </div>
      </div>
      <!-- Item-->
      <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
        <div class="card-img-top position-relative" style="background-image: url(img/real-estate/catalog/09.jpg);"><a class="stretched-link" href="real-estate-single-v1.html"></a>
          <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span></div>
          <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
          </div>
        </div>
        <div class="card-body position-relative pb-3">
          <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
          <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Terra Nova Apartments | 85 sq.m</a></h3>
          <p class="mb-2 fs-sm text-muted">21 India St Brooklyn, NY 11222</p>
          <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$2,400</div>
          <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">5<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
        </div>
      </div>
      <!-- Item-->
      <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
        <div class="card-img-top position-relative" style="background-image: url(img/real-estate/catalog/19.jpg);"><a class="stretched-link" href="real-estate-single-v1.html"></a>
          <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
          </div>
        </div>
        <div class="card-body position-relative pb-3">
          <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
          <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Country House | 120 sq.m</a></h3>
          <p class="mb-2 fs-sm text-muted">6954 Grand AveMaspeth, NY 11378</p>
          <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$162,000</div>
          <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">5<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">3<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
        </div>
      </div>
      <!-- Item-->
      <div class="card card-hover card-horizontal border-0 shadow-sm">
        <div class="card-img-top position-relative" style="background-image: url(img/real-estate/catalog/17.jpg);"><a class="stretched-link" href="real-estate-single-v1.html"></a>
          <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info mb-1">New</span></div>
          <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
          </div>
        </div>
        <div class="card-body position-relative pb-3">
          <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
          <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Crystal Apartment| 60 sq.m</a></h3>
          <p class="mb-2 fs-sm text-muted">495 Henry St Brooklyn, NY 11231</p>
          <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,500</div>
          <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">4<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">1<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
