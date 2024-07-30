@extends('Front_Layout.indexVer2')
@section('FrontContent')

<!-- Page container-->
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
              class="star-rating-icon fi-star-filled active"></i></span>
          <div class="text-muted ms-2">(45 reviews)</div>
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
      <div class="d-flex align-items-center justify-content-between mb-4 pb-2">
        <h1 class="h2 text-center text-sm-start mb-0">Reviews (45)</h1><a class="btn btn-link btn-sm px-0"
          href="real-estate-vendor-properties.html"><i class="fi-arrow-left fs-xs mt-0 me-2"></i>Back to Offers</a>
      </div>
      <!-- Reviews statistics-->
      <div class="d-flex align-items-center mb-2">
        <div class="text-nowrap fs-sm me-3">5<i class="fi-star text-muted ms-1 mt-n1"></i></div>
        <div class="progress w-100">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex-shrink-0 flex-grow-1 fs-sm text-end ps-2" style="width: 3rem;">70%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
        <div class="text-nowrap fs-sm me-3">4<i class="fi-star text-muted ms-1 mt-n1"></i></div>
        <div class="progress w-100">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex-shrink-0 flex-grow-1 fs-sm text-end ps-2" style="width: 3rem;">15%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
        <div class="text-nowrap fs-sm me-3">3<i class="fi-star text-muted ms-1 mt-n1"></i></div>
        <div class="progress w-100">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <div class="flex-shrink-0 flex-grow-1 fs-sm text-end ps-2" style="width: 3rem;">0%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
        <div class="text-nowrap fs-sm me-3">2<i class="fi-star text-muted ms-1 mt-n1"></i></div>
        <div class="progress w-100">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="flex-shrink-0 flex-grow-1 fs-sm text-end ps-2" style="width: 3rem;">10%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
        <div class="text-nowrap fs-sm me-3">1<i class="fi-star text-muted ms-1 mt-n1"></i></div>
        <div class="progress w-100">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <div class="flex-shrink-0 flex-grow-1 fs-sm text-end ps-2" style="width: 3rem;">5%</div>
      </div>
      <!-- Sorting + add review button-->
      <div
        class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between border-bottom py-4 mt-3 mb-4">
        <div class="d-flex align-items-center me-sm-4 mb-sm-0 mb-3">
          <label class="me-2 pe-1 text-nowrap" for="review-sorting"><i
              class="fi-arrows-sort text-muted mt-n1 me-2"></i>Sort by:</label>
          <select class="form-select" id="review-sorting">
            <option>Newest</option>
            <option>Oldest</option>
            <option>Popular</option>
            <option>High rating</option>
            <option>Low rating</option>
          </select>
        </div><a class="btn btn-outline-primary" href="#modal-review" data-bs-toggle="modal"><i
            class="fi-edit me-1"></i>Add review</a>
      </div>
      <!-- Review-->
      <div class="mb-4 pb-4 border-bottom">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/06.jpg"
              width="48" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-base mb-0">Kristin Watson</h6><span class="star-rating"><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i></span>
            </div>
          </div><span class="text-muted fs-sm">Jan 17, 2021</span>
        </div>
        <p>Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis elit, nibh
          condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin vitae. Odio fermentum
          viverra tortor quis.</p>
        <div class="d-flex align-items-center">
          <button class="btn-like" type="button"><i class="fi-like"></i><span>(3)</span></button>
          <div class="border-end me-1">&nbsp;</div>
          <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(0)</span></button>
        </div>
      </div>
      <!-- Review-->
      <div class="mb-4 pb-4 border-bottom">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/13.png"
              width="48" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-base mb-0">Darrell Steward</h6><span class="star-rating"><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i><i
                  class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i></span>
            </div>
          </div><span class="text-muted fs-sm">Dec 1, 2020</span>
        </div>
        <p>Vel dictum nunc ut tristique. Egestas diam amet, ut proin hendrerit. Dui accumsan at phasellus tempus
          consequat dignissim.</p>
        <div class="d-flex align-items-center">
          <button class="btn-like" type="button"><i class="fi-like"></i><span>(0)</span></button>
          <div class="border-end me-1">&nbsp;</div>
          <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(1)</span></button>
        </div>
      </div>
      <!-- Review-->
      <div class="mb-4 pb-4 border-bottom">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/07.jpg"
              width="48" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-base mb-0">Cody Fisher</h6><span class="star-rating"><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i></span>
            </div>
          </div><span class="text-muted fs-sm">Oct 28, 2020</span>
        </div>
        <p>Viverra nunc blandit sapien non imperdiet sit. Purus tempus elementum aliquam eu urna. A aenean duis non
          egestas at libero porttitor integer eget. Sed dictum lobortis laoreet gravida.</p>
        <div class="d-flex align-items-center">
          <button class="btn-like" type="button"><i class="fi-like"></i><span>(2)</span></button>
          <div class="border-end me-1">&nbsp;</div>
          <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(1)</span></button>
        </div>
      </div>
      <!-- Review-->
      <div class="mb-4 pb-4 border-bottom">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/04.jpg"
              width="48" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-base mb-0">Ralph Edwards</h6><span class="star-rating"><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i></span>
            </div>
          </div><span class="text-muted fs-sm">Sep 14, 2020</span>
        </div>
        <p>Elementum nisl, egestas nam consectetur nisl, at pellentesque cras. Non sed ac vivamus dolor dignissim ut.
          Nisl sapien blandit pulvinar sagittis donec sociis ipsum arcu est. Tempus, rutrum morbi scelerisque tempor mi.
          Etiam urna, cras bibendum leo nec faucibus velit. Tempor lectus dignissim at auctor integer neque quam amet.
        </p>
        <div class="d-flex align-items-center">
          <button class="btn-like" type="button"><i class="fi-like"></i><span>(0)</span></button>
          <div class="border-end me-1">&nbsp;</div>
          <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(0)</span></button>
        </div>
      </div>
      <!-- Review-->
      <div class="mb-4 pb-4 border-bottom">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="img/avatars/13.png"
              width="48" alt="Avatar">
            <div class="ps-2">
              <h6 class="fs-base mb-0">Guy Hawkins</h6><span class="star-rating"><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i><i
                  class="star-rating-icon fi-star-filled active"></i></span>
            </div>
          </div><span class="text-muted fs-sm">Dec 1, 2020</span>
        </div>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis morbi venenatis ut est.</p>
        <div class="d-flex align-items-center">
          <button class="btn-like" type="button"><i class="fi-like"></i><span>(1)</span></button>
          <div class="border-end me-1">&nbsp;</div>
          <button class="btn-dislike" type="button"><i class="fi-dislike"></i><span>(3)</span></button>
        </div>
      </div>
      <!-- Pagination-->
      <nav class="mt-2" aria-label="Reviews pagination">
        <ul class="pagination">
          <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
          <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span
                class="visually-hidden">(current)</span></span></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
          <li class="page-item d-none d-sm-block">...</li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
          <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection