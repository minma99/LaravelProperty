@extends('Front_Layout.indexVer2')
@section('FrontContent')
  <!-- Page content-->
  <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
    <!-- Breadcrumb-->
    <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
        <li class="breadcrumb-item"><a href="real-estate-account-info.html">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">Password &amp; Security</li>
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
            <div class="card-nav"><a class="card-nav-link" href="real-estate-account-info.html"><i class="fi-user opacity-60 me-2"></i>Personal Info</a><a class="card-nav-link active" href="real-estate-account-security.html"><i class="fi-lock opacity-60 me-2"></i>Password &amp; Security</a><a class="card-nav-link" href="real-estate-account-properties.html"><i class="fi-home opacity-60 me-2"></i>My Properties</a><a class="card-nav-link" href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a><a class="card-nav-link" href="real-estate-account-reviews.html"><i class="fi-star opacity-60 me-2"></i>Reviews</a><a class="card-nav-link" href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>Notifications</a><a class="card-nav-link" href="real-estate-help-center.html"><i class="fi-help opacity-60 me-2"></i>Help</a><a class="card-nav-link" href="signin-light.html"><i class="fi-logout opacity-60 me-2"></i>Sign Out</a></div>
          </div>
        </div>
      </aside>
      <!-- Content-->
      <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Password &amp; Security</h1>
        <p class="pt-1">Manage your password settings and secure your account.</p>
        <h2 class="h5">Password</h2>
        <form class="needs-validation pb-4" novalidate>
          <div class="row align-items-end mb-2">
            <div class="col-sm-6 mb-2">
              <label class="form-label" for="account-password">Current password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="account-password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="col-sm-6 mb-2"><a class="d-inline-block mb-2" href="#">Forgot password?</a></div>
          </div>
          <div class="row mb-2">
            <div class="col-sm-6 mb-3">
              <label class="form-label" for="account-password-new">New password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="account-password-new" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <label class="form-label" for="account-password-confirm">Confirm password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="account-password-confirm" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
          </div>
          <button class="btn btn-outline-primary" type="submit">Update password</button>
        </form>
        <div class="border-top pt-4 mt-3"></div>
        <h2 class="h5 pt-2 mb-4">Where you're signed in on</h2>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-desktop fs-5 text-muted me-1"></i>
          <div class="ps-2">
            <div class="fw-bold mb-1">Mac – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span><span class="fs-sm fw-bold text-success">Active now</span>
          </div>
        </div>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-mobile fs-5 text-muted me-1"></i>
          <div class="ps-2">
            <div class="fw-bold mb-1">iPhone 12 – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Finder App</span><span class="fs-sm text-muted">20 hours ago</span>
          </div>
          <div class="align-self-center ms-auto">
            <div class="dropdown">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
              <ul class="dropdown-menu pb-3 my-1" aria-labelledby="contextMenu1">
                <li><a class="dropdown-item text-body" href="#">Not you?</a></li>
                <li><a class="d-block px-3" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-desktop fs-5 text-muted me-1"></i>
          <div class="ps-2">
            <div class="fw-bold mb-1">Windows 10.1 – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span><span class="fs-sm text-muted">November 15 at 8:42 AM</span>
          </div>
          <div class="align-self-center ms-auto">
            <div class="dropdown">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
              <ul class="dropdown-menu pb-3 my-1" aria-labelledby="contextMenu2">
                <li><a class="dropdown-item text-body" href="#">Not you?</a></li>
                <li><a class="d-block px-3" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div><a class="d-inline-block fw-bold text-decoration-none mt-3" href="#">Sign out of all sessions     </a>
      </div>
    </div>
  </div>
  @endsection
