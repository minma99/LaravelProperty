@extends('Front_Layout.indexVer2')
@section('FrontContent')

<!-- Page content-->
<div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
            <li class="breadcrumb-item"><a href="real-estate-account-info.html">Account</a></li>
            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
          </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
            <!-- Account nav-->
            <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
              <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4"><img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="Evin">
                <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                  <h2 class="fs-lg mb-0">Evin Aso</h2><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                  <ul class="list-unstyled fs-sm mt-3 mb-0">
                    <li><a class="nav-link fw-normal p-0" href="tel:+964-2594130"><i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a></li>
                    <li><a class="nav-link fw-normal p-0" href="mailto:annette_black@email.com"><i class="fi-mail opacity-60 me-2"></i>evin-a@email.com</a></li>
                  </ul>
                </div>
              </div><a class="btn btn-primary btn-lg w-100 mb-3" href="real-estate-add-property.html"><i class="fi-plus me-2"></i>Add property</a><a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
              <div class="collapse d-md-block mt-3" id="account-nav">
                <div class="card-nav"><a class="card-nav-link" href="real-estate-account-info.html"><i class="fi-user opacity-60 me-2"></i>Personal Info</a><a class="card-nav-link" href="real-estate-account-security.html"><i class="fi-lock opacity-60 me-2"></i>Password &amp; Security</a><a class="card-nav-link" href="real-estate-account-properties.html"><i class="fi-home opacity-60 me-2"></i>My Properties</a><a class="card-nav-link" href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>Wishlist</a><a class="card-nav-link" href="real-estate-account-reviews.html"><i class="fi-star opacity-60 me-2"></i>Reviews</a><a class="card-nav-link active" href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>Notifications</a><a class="card-nav-link" href="real-estate-help-center.html"><i class="fi-help opacity-60 me-2"></i>Help</a><a class="card-nav-link" href="signin-light.html"><i class="fi-logout opacity-60 me-2"></i>Sign Out</a></div>
              </div>
            </div>
          </aside>
          <!-- Content-->
          <div class="col-lg-8 col-md-7 mb-5">
            <h1 class="h2">Notifications</h1>
            <p class="pt-1 mb-4">Get real-time updates on your favorite homes, neighborhoods, and more.</p>
            <!-- Nav tabs-->
            <ul class="nav nav-tabs flex-column flex-sm-row align-items-stretch align-items-sm-start border-bottom mb-4" role="tablist">
              <li class="nav-item me-sm-3 mb-3"><a class="nav-link text-center active" href="#notifications-rent" data-bs-toggle="tab" role="tab" aria-controls="notifications-rent" aria-selected="true">Rent notifications</a></li>
              <li class="nav-item mb-3"><a class="nav-link text-center" href="#notifications-sale" data-bs-toggle="tab" role="tab" aria-controls="notifications-sale" aria-selected="false">Sale notifications</a></li>
            </ul>
            <!-- Tabs content-->
            <div class="tab-content py-2" id="notification-settings">
              <!-- Rent notifications tab-->
              <div class="tab-pane fade show active" id="notifications-rent" role="tabpanel">
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">New rental alerts</h6>
                    <p class="fs-sm mb-0">New rentals that match your <a href='real-estate-account-wishlist.html'>Wishlist</a></p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="new-rental" checked>
                    <label class="form-check-label" for="new-rental"></label>
                  </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">Rental status updates</h6>
                    <p class="fs-sm mb-0">Updates like price changes and off-market status on your <a href='real-estate-account-wishlist.html'>Wishlist</a></p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rental-update" checked>
                    <label class="form-check-label" for="rental-update"></label>
                  </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">IPM recommendations</h6>
                    <p class="fs-sm mb-0">Rentals we think you'll like. These recommendations may be slightly outside your search criteria</p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rental-recomendation">
                    <label class="form-check-label" for="rental-recomendation"></label>
                  </div>
                </div>
              </div>
              <!-- Sale notifications tab-->
              <div class="tab-pane fade" id="notifications-sale" role="tabpanel">
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">New sale alerts</h6>
                    <p class="fs-sm mb-0">New sales that match your <a href='real-estate-account-wishlist.html'>Wishlist</a></p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="new-sale" checked>
                    <label class="form-check-label" for="new-sale"></label>
                  </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">Sale status updates</h6>
                    <p class="fs-sm mb-0">Updates like price changes and off-market status on your <a href='real-estate-account-wishlist.html'>Wishlist</a></p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="sale-update">
                    <label class="form-check-label" for="sale-update"></label>
                  </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                  <div class="me-2">
                    <h6 class="mb-1">IPM recommendations</h6>
                    <p class="fs-sm mb-0">Sales we think you'll like. These recommendations may be slightly outside your search criteria</p>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="sale-recomendation">
                    <label class="form-check-label" for="sale-recomendation"></label>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between mb-4">
                <div class="me-2">
                  <h6 class="mb-1">Featured news</h6>
                  <p class="fs-sm mb-0">News and tips you may be interested in</p>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="featured-news" checked>
                  <label class="form-check-label" for="featured-news"></label>
                </div>
              </div>
              <div class="d-flex justify-content-between mb-4">
                <div class="me-2">
                  <h6 class="mb-1">import moduleName from 'module'; extras</h6>
                  <p class="fs-sm mb-0">Occasional notifications about new features to make finding the perfect rental easy</p>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="extras">
                  <label class="form-check-label" for="extras"></label>
                </div>
              </div>
            </div>
            <div class="border-top pt-4">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="all-notifications" data-master-checkbox-for="#notification-settings" checked>
                <label class="form-check-label" for="all-notifications">Enable / disable all notifications</label>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endsection