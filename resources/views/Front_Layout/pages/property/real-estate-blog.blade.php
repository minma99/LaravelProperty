@extends('Front_Layout.indexVer2')
@section('FrontContent')
      <!-- Page container-->
      <div class="container mt-5 mb-md-4 py-5">
        <!-- Breadcrumb + page title-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="d-flex align-items-end justify-content-between mb-4">Real estate news</h1>
        <!-- Sponsored posts carousel-->
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#sponsored-news-controls&quot;}">
            <!-- Item-->
            <div>
              <article class="row">
                <div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><a class="d-block position-relative" href="real-estate-blog-single.html"><span class="badge bg-success position-absolute top-0 end-0 m-3 fs-sm">Sponsored</span><img class="rounded-3" src="img/real-estate/blog/01.jpg" alt="Post image"></a></div>
                <div class="col-md-5 col-lg-4"><a class="fs-sm text-uppercase text-decoration-none" href="#">Tips &amp; Advice</a>
                  <h2 class="h5 pt-1"><a class="nav-link" href="real-estate-blog-single.html">Looking for a New Place? Use This Time to Create Your Wishlist</a></h2>
                  <p class="d-md-none d-xl-block mb-4">Nulla felis neque ultrices ut aliquam. Pellentesque id semper iaculis scelerisque etiam egestas interdum proin sit. Ornare venenatis, ullamcorper amet arcu ipsum ut morbi enim. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit?</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/06.jpg" width="48" alt="Kristin Watson">
                    <div class="ps-2">
                      <h6 class="fs-base text-nav lh-base mb-1">Kristin Watson</h6>
                      <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-60 mt-n1 me-1"></i>Mar 13</span><span><i class="fi-chat-circle opacity-60 mt-n1 me-1"></i>No comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
            <!-- Item-->
            <div>
              <article class="row">
                <div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><a class="d-block position-relative" href="real-estate-blog-single.html"><span class="badge bg-success position-absolute top-0 end-0 m-3 fs-sm">Sponsored</span><img class="rounded-3" src="img/real-estate/blog/02.jpg" alt="Post image"></a></div>
                <div class="col-md-5 col-lg-4"><a class="fs-sm text-uppercase text-decoration-none" href="#">Industry News</a>
                  <h2 class="h5 pt-1"><a class="nav-link" href="real-estate-blog-single.html">Traditional Real Estate Marketing Holds Firm Despite Pandemic</a></h2>
                  <p class="d-md-none d-xl-block mb-4">Phasellus cursus orci pulvinar proin nulla vitae. Arcu faucibus vestibulum fames eget nunc. Ut in sed platea egestas amet purus nibh suspendisse semper. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit. Nulla felis neque ultrices ut aliquam.</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/04.jpg" width="48" alt="Darrell Steward">
                    <div class="ps-2">
                      <h6 class="fs-base text-nav lh-base mb-1">Darrell Steward</h6>
                      <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-60 mt-n1 me-1"></i>Feb 27</span><span><i class="fi-chat-circle opacity-60 mt-n1 me-1"></i>3 comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
          </div>
        </div>
        <!-- Carousel custom controls-->
        <div class="tns-carousel-controls pb-5 pt-2 mt-4 mb-lg-3" id="sponsored-news-controls">
          <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
          <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
        </div>
        <!-- Search bar + filters-->
        <div class="row gy-3 mb-4 pb-2">
          <div class="col-md-4 order-md-1 order-2">
            <div class="position-relative">
              <input class="form-control pe-5" type="text" placeholder="Search articles by keywords..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 offset-lg-2 order-md-2 order-1">
            <div class="row gy-3">
              <div class="col-6 d-flex flex-sm-row flex-column align-items-sm-center">
                <label class="d-inline-block me-sm-2 mb-sm-0 mb-2 text-nowrap" for="categories"><i class="fi-align-left mt-n1 me-2 align-middle opacity-70"></i>Category:</label>
                <select class="form-select" id="categories">
                  <option>All</option>
                  <option>Home</option>
                  <option>Inspiration</option>
                  <option>Tips &amp; Advice</option>
                  <option>Industry News</option>
                  <option>Market Analysis</option>
                </select>
              </div>
              <div class="col-6 d-flex flex-sm-row flex-column align-items-sm-center">
                <label class="d-inline-block me-sm-2 mb-sm-0 mb-2 text-nowrap" for="sortby"><i class="fi-arrows-sort mt-n1 me-2 align-middle opacity-70"></i>Sort by:</label>
                <select class="form-select" id="sortby">
                  <option>Newest</option>
                  <option>Oldest</option>
                  <option>Popular</option>
                  <option>Sponsored</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- Articles grid-->
        <div class="row row-cols-md-2 row-cols-1 gy-md-5 gy-4 mb-lg-5 mb-4">
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="d-block rounded-3" src="img/real-estate/blog/03.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Home improvement</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">10 Delightful Dining Room Decor Trends for Spring</a></h3>
            <p class="mb-3">Mi sit montes, aenean tempor sollicitudin volutpat viverra. Tellus amet, vitae ac consectetur blandit at. Odio proin elit, vehicula morbi faucibus vestibulum…</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/07.jpg" width="48" alt="Cody Fisher">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Cody Fisher</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Dec 28</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>0 comments</span></div>
              </div></a>
          </article>
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><img class="d-block rounded-3" src="img/real-estate/blog/04.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Inspiration</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">5 Easy-to-Ambitious Projects to Improve Your Home</a></h3>
            <p class="mb-3">Phasellus consequat ut sagittis, vestibulum, eget egestas senectus quis congue. Posuere montes, in ultrices vitae, luctus. Ultrices aliquet pellentesque eget...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="Kathryn Murphy">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Kathryn Murphy</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Dec 26</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>4 comments</span></div>
              </div></a>
          </article>
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><img class="d-block rounded-3" src="img/real-estate/blog/05.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Inspiration</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">How Real Estate Drone Photography Can Elevate Your Listing?</a></h3>
            <p class="mb-3">Nunc vivamus nam vitae ut faucibus metus pretium nisl. Elementum sed tincidunt nec aliquam tempus. Neque pharetra vitae, mauris malesuada adipiscing...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/06.jpg" width="48" alt="Kristin Watson">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Kristin Watson</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Dec 12</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>3 comments</span></div>
              </div></a>
          </article>
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><img class="d-block rounded-3" src="img/real-estate/blog/06.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Tips &amp; Advice</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">7 Tips for Achieving Maximum Coziness</a></h3>
            <p class="mb-3">Enim faucibus mattis feugiat porttitor a arcu quisque. Donec massa volutpat dolor id eget consectetur viverra. Etiam consectetur mauris, scelerisque gravida convallis...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/04.jpg" width="48" alt="Darrell Steward">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Darrell Steward</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Dec 3</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>1 comment</span></div>
              </div></a>
          </article>
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><img class="d-block rounded-3" src="img/real-estate/blog/07.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Industry Views</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">How To Modernize Your Home on a Budget</a></h3>
            <p class="mb-3">Phasellus cursus orci pulvinar proin nulla vitae. Arcu faucibus vestibulum fames eget nunc. Ut in sed platea egestas amet purus nibh suspendisse semper...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="Kathryn Murphy">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Kathryn Murphy</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Oct 17</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>2 comments</span></div>
              </div></a>
          </article>
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="real-estate-blog-single.html"><img class="d-block rounded-3" src="img/real-estate/blog/08.jpg" alt="Article image"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">Property Market Analysis</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="real-estate-blog-single.html">When Is the Right Time to Downsize Your Home?</a></h3>
            <p class="mb-3">Parturient purus non consectetur eu arcu, feugiat eget vitae. Tellus at sociis egestas magna integer. Vel sagittis morbi ultrices turpis neque sed venenatis enim laoreet...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/07.jpg" width="48" alt="Cody Fisher">
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Cody Fisher</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Nov 15</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>0 comments</span></div>
              </div></a>
          </article>
        </div>
        <!-- Pagination-->
        <nav class="pt-4 pb-2 border-top" aria-label="Blog pagination">
          <ul class="pagination mb-0">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 8</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block">...</li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
  @endsection
