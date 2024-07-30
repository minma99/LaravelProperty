@extends('Front_Layout.indexVer2')
@section('FrontContent')

 <!-- Page content-->
 <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
    <!-- Breadcrumb-->
    <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
        <li class="breadcrumb-item"><a href="real-estate-account-info.html">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Properties</li>
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
            <div class="card-nav"><a class="card-nav-link" href="real-estate-account-info.html"><i class="fi-user opacity-60 me-2"></i>Personal Info</a><a class="card-nav-link" href="real-estate-account-security.html"><i class="fi-lock opacity-60 me-2"></i>Password &amp; Security</a><a class="card-nav-link active" href="real-estate-account-properties.html"><i class="fi-home opacity-60 me-2"></i>My Properties</a><a class="card-nav-link" href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a><a class="card-nav-link" href="real-estate-account-reviews.html"><i class="fi-star opacity-60 me-2"></i>Reviews</a><a class="card-nav-link" href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>Notifications</a><a class="card-nav-link" href="real-estate-help-center.html"><i class="fi-help opacity-60 me-2"></i>Help</a><a class="card-nav-link" href="signin-light.html"><i class="fi-logout opacity-60 me-2"></i>Sign Out</a></div>
          </div>
        </div>
      </aside>
      <!-- Content-->
      <div class="col-lg-8 col-md-7 mb-5">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h1 class="h2 mb-0">My Properties</h1><a class="fw-bold text-decoration-none" href="#"><i class="fi-trash mt-n1 me-2"></i>Delete all</a>
        </div>
        <p class="pt-1 mb-4">Here you can see your property offers and edit them easily.</p>
        <!-- Nav tabs-->
        <ul class="nav nav-tabs border-bottom mb-4" role="tablist">
          <li class="nav-item mb-3"><a class="nav-link active" href="#" role="tab" aria-selected="true"><i class="fi-file fs-base me-2"></i>Published</a></li>
          <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i class="fi-file-clean fs-base me-2"></i>Drafts</a></li>
          <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i class="fi-archive fs-base me-2"></i>Archived</a></li>
        </ul>
        <!-- Item-->
        <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top" href="real-estate-single-v1.html" style="background-image: url(img/real-estate/catalog/08.jpg);">
            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div></a>
          <div class="card-body position-relative pb-3">
            <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
              <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-edit opacity-60 me-2"></i>Edit</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-flame opacity-60 me-2"></i>Promote</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-power opacity-60 me-2"></i>Deactivate</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-trash opacity-60 me-2"></i>Delete</button>
                </li>
              </ul>
            </div>
            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Greenpoint Rentals | 85 sq.m</a></h3>
            <p class="mb-2 fs-sm text-muted">1510 Castle Hill Ave Bronx, NY 10462</p>
            <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,330</div>
            <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">1<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">1<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top" href="real-estate-single-v1.html" style="background-image: url(img/real-estate/catalog/10.jpg);">
            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success">Verified</span></div></a>
          <div class="card-body position-relative pb-3">
            <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
              <ul class="dropdown-menu my-1" aria-labelledby="contextMenu2">
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-edit opacity-60 me-2"></i>Edit</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-flame opacity-60 me-2"></i>Promote</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-power opacity-60 me-2"></i>Deactivate</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-trash opacity-60 me-2"></i>Delete</button>
                </li>
              </ul>
            </div>
            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">O’Farrell Rooms | 40 sq.m</a></h3>
            <p class="mb-2 fs-sm text-muted">460 E Fordham Rd Bronx, NY 10458</p>
            <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>From $550</div>
            <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">2<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">1<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="card card-hover card-horizontal border-0 shadow-sm"><a class="card-img-top" href="real-estate-single-v1.html" style="background-image: url(img/real-estate/catalog/22.jpg);">
            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success">Verified</span></div></a>
          <div class="card-body position-relative pb-3">
            <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu3" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
              <ul class="dropdown-menu my-1" aria-labelledby="contextMenu3">
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-edit opacity-60 me-2"></i>Edit</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-flame opacity-60 me-2"></i>Promote</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-power opacity-60 me-2"></i>Deactivate</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button"><i class="fi-trash opacity-60 me-2"></i>Delete</button>
                </li>
              </ul>
            </div>
            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Cottage | 120 sq.m</a></h3>
            <p class="mb-2 fs-sm text-muted">42 Broadway New York, NY 10004</p>
            <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$184,000</div>
            <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap"><span class="d-inline-block me-4 fs-sm">4<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block me-4 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
