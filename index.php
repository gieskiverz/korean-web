<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Carousel Template · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <link href="headers.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>

<body>
  <main>
    <?php
    include "header.php"
    ?>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></li>
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
        <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></li>
      </ol>
      <div class="carousel-inner">
        <!-- slide 1 -->
        <div class="carousel-item active">
          <img src="assets/img/kotak.png" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false" alt="">

          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-4 text-start">
                  <h1 class="col-md-12 text-start" style="color: #444444"><span style="color: #E2591C;">30만 보육인</span>을
                    위한</h1>
                  <h1 class="col-md-12 text-start mb-4" style="color: #444444">어린이집 평가</h1>
                  <div class="row">
                    <div class="badge bg-secondary text-wrap rounded-pill p-2 col-md-3">
                      평가영역 / 1
                    </div>
                    <h5 class="text-wrap col-md-9 text-secondary">보육과정 및 상호작용</h5>
                  </div>
                  <div class="row mt-2">
                    <div class="badge bg-secondary text-wrap rounded-pill p-2 col-md-3">
                      평가영역 / 2
                    </div>
                    <h5 class="text-wrap col-md-9 text-secondary">보육환경 및 운영관리</h5>
                  </div>
                  <div class="row mt-2">
                    <div class="badge bg-secondary text-wrap rounded-pill p-2 col-md-3">
                      평가영역 / 3
                    </div>
                    <h5 class="text-wrap col-md-9 text-secondary">건강·안전</h5>
                  </div>
                  <div class="row mt-2">
                    <div class="badge bg-secondary text-wrap rounded-pill p-2 col-md-3">
                      평가영역 / 4
                    </div>
                    <h5 class="text-wrap col-md-9 text-secondary">교직원</h5>
                  </div>
                </div>
                <div class="col-md-6 offset-md-2"><img width="300px" src="assets/img/keluarga.png" alt=""></div>
              </div>
              <p class="mt-2"><a class="btn btn-lg btn-primary" href="#">교육문의</a></p>
            </div>
          </div>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
          <img src="assets/img/slide2.png" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false" alt="">

          <div class="container">
            <div class="carousel-caption">
              <p class="fs-1 text-black">HRD에셋 교육원 <span class="fw-bolder">법정의무교육</span></p>
              <img src="assets/img/gambarslide2.png" alt="">
              <p class="mt-2"><a class="btn btn-lg btn-primary" href="#">교육문의</a></p>
            </div>
          </div>
        </div>

        <!-- slide 3 -->
        <div class="carousel-item">
          <img src="assets/img/slide3.png" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false" alt="">

          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-sm-6">
                  <img width="400px" src="assets/img/textslide3.png" alt="">
                </div>
                <div class="col-sm-6">
                  <img width="400px" src="assets/img/gambarslide3.png" alt="">
                </div>
              </div>
              <p class="mt-2"><a class="btn btn-lg btn-primary" href="#">교육문의</a></p>
            </div>
          </div>
        </div>

        <!-- slide 4 -->
        <div class="carousel-item">
          <img src="assets/img/slide4.png" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false" alt="">

          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-sm-6">
                  <img width="370px" src="assets/img/textslide4.png" alt="">
                </div>
                <div class="col-sm-6">
                  <img width="370px" src="assets/img/gambarslide4.png" alt="">
                </div>
              </div>
              <p class="mt-2"><a class="btn btn-lg btn-primary" href="#">교육문의</a></p>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- lineup -->
    <p class="text-center fs-2 text-black">“ 법정의무교육은 선택이 아닌 <span class="fw-bolder text-primary">필수</span> 입니다! ”</p>

    <h2 class="text-center text-black">산업분야별 법정의무교육 LINE UP</h2>
    <!-- end line up -->

    <div class="featurette-divider"></div>

    <div class="container pl-2 pr-2">
      <div class="row">
        <div class="col-md-6">
          <p class="text-black fs-5 fw-bolder"><span class="text-primary fw-bolder"> |</span> 산업공통</p>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/meeting.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body pt-3">
                  <ul style="font-size: 14px;">
                    <li>개인정보보호교육</li>
                    <li>직장 내 성희롱 예방교육</li>
                    <li>직장 내 장애인 인식개선교육</li>
                    <li>직장 내 괴롭힘 예방교육</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p class="text-black fs-5 fw-bolder"><span class="text-primary fw-bolder"> |</span> 의료기관 전용</p>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/tangan.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body p-0 pt-2">
                  <ul style="font-size: 14px;">
                    <li>의료기관 개인정보보호교육</li>
                    <li>의료기관 내 성희롱 예방교육</li>
                    <li>의료기관 내 장애인 인식개선교육</li>
                    <li>의료기관 내 괴롭힘 예방교육</li>
                    <li>의료기관 인증 필수교육</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="featurette-divider"></div>
    <p class="text-center"><img src="assets/img/print.png" alt=""></p>
    <p class="text-center fs-2 text-black">어린이집은 평가제를 대비하여</p>
    <p class="text-center fs-2 text-black">법정의무교육과 평가제 필수교육을 <span class="fw-bolder" style="color: #F27658;">반드시
        이수</span> 해야 합니다</p>

    <div class="featurette-divider"></div>
    <!-- gambar budak saha -->
    <div class="container pl-2 pr-2">
      <p class="text-black fs-5 fw-bolder"><span class="text-primary fw-bolder"> |</span> 산업공통</p>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-lg-3">
            <img src="assets/img/budaksaha.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-lg-3 mt-3 mt-3">
            <div class="card-body">
              <ul style="font-size: 14px;">
                <li>어린이집 개인정보보호 CCTV 의무화교육</li>
                <li>어린이집 내 성희롱 예방교육</li>
                <li>어린이집 아동학대 예방교육</li>
                <li>어린이집 내 장애인 인식개선교육</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-body">
              <ul style="font-size: 14px;">
                <li>어린이집 장애인인식 개선교육</li>
                <li>어린이집 아동학대 예방교육</li>
                <li>어린이집 아동학대 신고 의무자교육</li>
                <li>어린이집 아동 성폭력 예방교육</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="card-body">
              <ul style="font-size: 14px;">
                <li>보육교직원 등·하원 안전교육</li>
                <li>심폐소생술 포함 보육교직원 안전교육</li>
                <li>어린이집 내 괴롭힘 예방교육</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end budak saha -->
    <div class="featurette-divider"></div>
    <div class="container">
      <div class="row">
        <div class="card border-0 float-start" style="width: 20rem;">
          <div class="card-body">
            <p class="text-black fs-5 fw-bold float-start"><span class="text-primary fw-bold"> |</span> 평가제 필수 교육</p>
          </div>
        </div>
        <div class="card border-0" style="width: 20rem;">
          <img src="assets/img/bebas1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <ul>
              <li style="font-size: 12px;" class="fw-bold">영유아 인권 포함 교사 인성교육</li>
            </ul>
          </div>
        </div>
        <div class="card border-0 border-start border-end" style="width: 20rem;">
          <img src="assets/img/bebas2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <ul>
              <li style="font-size: 12px;" class="fw-bold">보육교직원 건강·영양교육</li>
            </ul>
          </div>
        </div>
        <div class="card border-0" style="width: 20rem;">
          <img src="assets/img/bebas3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <ul>
              <li style="font-size: 12px;" class="fw-bold">보육교직원 직무스트레스 예방 및 관리교육</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="featurette-divider"></div>
    <div class="container-fluid-lg text-center" style="background-color: #EDF3FA;">
      <img class="img-fluid p-4" src="assets/img/1811.png" alt="">
      <img class="img-fluid p-4" src="assets/img/wifi.png" alt="">
      <img class="img-fluid p-4" src="assets/img/info.png" alt="">
    </div>

    <div class="container-fluid-lg p-2 text-end fs-4">
      <img src="assets/img/telepon.png" alt=""> 교육상담을 원하시나요?
      <span class="badge rounded-pill bg-primary">교육문의</span>
      <img class="p-3" src="assets/img/x.png" alt="">
    </div>

    <?php include "footer.php" ?>
  </main>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>