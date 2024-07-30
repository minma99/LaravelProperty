@extends('Front_Layout.index')
@section('FrontContent')

<div class="container mt-5 mb-md-4 py-5">
  <!-- Breadcrumb-->
  <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Agents</a></li>
      <li class="breadcrumb-item active" aria-current="page">Floyd Miles</li>
    </ol>
  </nav>
  <div class="row">
    <!-- Sidebar (Agent's info)-->
    <aside class="col-lg-3 col-md-4 mb-5">
      <div class="pe-lg-3"><img class="d-block rounded-circle mx-auto mx-md-0 mb-3" src="img/avatars/31.jpg" width="120"
          alt="Floyd Miles">
        <h2 class="h4 text-center text-md-start mb-1">Floyd Miles</h2>
        <p class="text-center text-md-start mb-2 pb-1">Imperial Property Group Agent</p>
        <div class="d-flex justify-content-center justify-content-md-start border-bottom pb-4 mb-4"><span
            class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i
              class="star-rating-icon fi-star-filled active"></i><i
              class="star-rating-icon fi-star-filled active"></i><i
              class="star-rating-icon fi-star-filled active"></i><i
              class="star-rating-icon fi-star-filled active"></i></span><a class="ms-2"
            href="real-estate-vendor-reviews.html">45 reviews</a>
        </div>
        <div class="border-bottom pb-4 mb-4">
          <p class="fs-sm mb-0">Hello! I will select the best accommodation for you. Amet libero morbi venenatis ut est.
            Iaculis leo ultricies nunc id ante adipiscing. Vel metus odio at faucibus ac. Neque id placerat et id ut
            acultricies commodo.</p>
          <div class="collapse" id="seeMore">
            <p class="fs-sm mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor
              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
          </div>
          <div class="text-center text-md-start"><a class="collapse-label collapsed fs-sm" href="#seeMore"
              data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less"
              role="button" aria-expanded="false" aria-controls="seeMore"></a></div>
        </div>
        <ul class="d-table list-unstyled mx-auto mx-md-0 mb-3 mb-md-4">
          <li class="mb-2"><a class="nav-link fw-normal p-0" href="tel:3025550107"><i
                class="fi-phone text-primary mt-n1 me-2 align-middle"></i>(302) 555-0107</a></li>
          <li><a class="nav-link fw-normal p-0" href="mailto:floyd_miles@email.com"><i
                class="fi-mail text-primary mt-n1 me-2 align-middle"></i>floyd_miles@email.com</a></li>
        </ul>
        <div class="text-center text-md-start"><a
            class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm me-2" href="#"><i
              class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm"
            href="#"><i class="fi-linkedin"></i></a></div>
        <div class="text-center text-md-start pt-md-2 mt-4"><a class="btn btn-primary" href="#message-modal"
            data-bs-toggle="modal"><i class="fi-chat-left fs-sm me-2"></i>Direct message</a></div>
      </div>
    </aside>
    <!-- Content-->
    <div class="col-lg-9 col-md-8">
      <h1 class="h2 text-center text-sm-start mb-4">Property offers</h1>
      <!-- Nav tabs + Sorting-->
      <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between mb-4">
        <ul class="nav nav-tabs flex-nowrap mb-sm-0" role="tablist">
          <li class="nav-item"><a class="nav-link fs-sm active" href="#for-rent" data-bs-toggle="tab" role="tab"
              aria-controls="for-rent" aria-selected="true">For rent</a></li>
          <li class="nav-item"><a class="nav-link fs-sm" href="#for-sale" data-bs-toggle="tab" role="tab"
              aria-controls="for-sale" aria-selected="false">For sale</a></li>
        </ul>
        <div class="d-flex align-items-center ms-sm-4">
          <label class="fs-sm me-2 pe-1 text-nowrap" for="sortby"><i
              class="fi-arrows-sort text-muted mt-n1 me-2"></i>Sort by:</label>
          <select class="form-select form-select-sm" id="sortby">
            <option>Newest</option>
            <option>Popularity</option>
            <option>Low - High Price</option>
            <option>High - Low Price</option>
            <option>High rating</option>
            <option>Average Rating</option>
          </select>
        </div>
      </div>
      <div class="tab-content">
        <!-- For rent tab-->
        <div class="tab-pane fade show active" id="for-rent" role="tabpanel">
          <div class="row g-4 g-md-3 g-lg-4 pt-2">
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success mb-1">Verified</span><span
                      class="d-table badge bg-info">New</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/01.jpg" alt="Image"><img
                      src="img/real-estate/catalog/01.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">3-bed
                      Apartment | 67 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">3811 Ditmars Blvd Astoria, NY 11105</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,650</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">3<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success mb-1">Verified</span><span
                      class="d-table badge bg-danger">Featured</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/02.jpg" alt="Image"><img
                      src="img/real-estate/catalog/02.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Family Home| 120 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">67-04 Myrtle Ave Glendale, NY 11385</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>From $2,800</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">4<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success">Verified</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/03.jpg" alt="Image"><img
                      src="img/real-estate/catalog/03.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Greenpoint Rentals | 85 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">1510 Castle Hill Ave Bronx, NY 10462</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,850</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/30.jpg" alt="Image"><img
                      src="img/real-estate/catalog/30.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Crystal Apartment| 60 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">495 Henry St Brooklyn, NY 11231</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,300</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">0<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span>
                  </div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/31.jpg" alt="Image"><img
                      src="img/real-estate/catalog/31.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Pine
                      Apartments | 56 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">3811 Ditmars Blvd Astoria, NY 11105</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$2,000</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/32.jpg" alt="Image"><img
                      src="img/real-estate/catalog/32.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Tiffany Studio | 35 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">3979 Albany Post Road Hyde Park, NY...</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$700</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">0<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success mb-1">Verified</span><span
                      class="d-table badge bg-info">New</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/04.jpg" alt="Image"><img
                      src="img/real-estate/catalog/04.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Studio | 32 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">140-60 Beech Ave Flushing, NY 11355</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$850</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success">Verified</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/05.jpg" alt="Image"><img
                      src="img/real-estate/catalog/05.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Terra
                      Nova Apartments | 85 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">21 India St Brooklyn, NY 11222</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$2,400</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">3<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success mb-1">Verified</span><span
                      class="d-table badge bg-danger">Featured</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/33.jpg" alt="Image"><img
                      src="img/real-estate/catalog/33.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">O’Farrell Rooms | 40 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">460 E Fordham Rd Bronx, NY 10458</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>From $550</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">0<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-1 pt-4"><a class="d-inline-block fw-bold text-decoration-none p-2 pb-0" href="#"><i
                class="fi-refresh fs-sm me-2"></i>Load more</a></div>
        </div>
        <!-- For sale tab-->
        <div class="tab-pane fade" id="for-sale" role="tabpanel">
          <div class="row g-4 g-md-3 g-lg-4 py-2">
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success">Verified</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/34.jpg" alt="Image"><img
                      src="img/real-estate/catalog/34.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">White
                      Cottage | 70 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">3979 Albany Post Road Hyde Park, NY</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$84,000</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">3<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span>
                  </div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/35.jpg" alt="Image"><img
                      src="img/real-estate/catalog/35.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Country House | 120 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">6954 Grand AveMaspeth, NY 11378</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$162,000</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">4<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/36.jpg" alt="Image"><img
                      src="img/real-estate/catalog/36.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Ellis
                      Studio | 40 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">3 E Evergreen Rd New City, NY 10956</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$50,000</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/37.jpg" alt="Image"><img
                      src="img/real-estate/catalog/37.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Luxury Rental Villa | 180 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">118-11 Sutphin Blvd Jamaica, NY 11434</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$300,500</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">4<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col-sm-6 col-lg-4">
              <div class="card shadow-sm card-hover border-0 h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay"
                    href="real-estate-single-v1.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                      class="d-table badge bg-success">Verified</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                      data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i
                        class="fi-heart"></i></button>
                  </div>
                  <div class="tns-carousel-inner"><img src="img/real-estate/catalog/38.jpg" alt="Image"><img
                      src="img/real-estate/catalog/38.jpg" alt="Image"></div>
                </div>
                <div class="card-body position-relative pb-3">
                  <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                  <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                      href="real-estate-single-v1.html">Modern House | 170 sq.m</a></h3>
                  <p class="mb-2 fs-sm text-muted">82 Nassau St New York, NY 10038</p>
                  <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$620,400</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span
                    class="d-inline-block mx-1 px-2 fs-sm">3<i
                      class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i
                      class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection