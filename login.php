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
    <?php include "header.php" ?>
    <main>
        <div class="container mx-auto mt-5">
            <div class="row justify-content-center">
                <div class="card mb-3 p-0 border-0 shadow h-100" style="height:auto;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/login.svg" width="400" class="img-fluid rounded-star float-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-5 text-start"><span class="fw-bolder">나의강의실</span> 로그인</h5>
                                <div class="mb-3">
                                    <input type="radio" name="" id=""> 사업주훈련회원
                                    <input type="radio" name="" id="" class="ml-2"> 근로자 내일배움카드회원
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3 w-50">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.92285 10.6541C11.132 10.6541 12.9229 8.86319 12.9229 6.65405C12.9229 4.44491 11.132 2.65405 8.92285 2.65405C6.71371 2.65405 4.92285 4.44491 4.92285 6.65405C4.92285 8.86319 6.71371 10.6541 8.92285 10.6541Z" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.85938 14.1535C3.4741 13.0894 4.35801 12.2059 5.4223 11.5917C6.4866 10.9774 7.6938 10.654 8.92263 10.6541C10.1515 10.6541 11.3587 10.9775 12.4229 11.5917C13.4872 12.206 14.3711 13.0896 14.9858 14.1536" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="아이디 입력" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3 w-50">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.9229 5.65405H3.92285C3.64671 5.65405 3.42285 5.87791 3.42285 6.15405V13.1541C3.42285 13.4302 3.64671 13.6541 3.92285 13.6541H13.9229C14.199 13.6541 14.4229 13.4302 14.4229 13.1541V6.15405C14.4229 5.87791 14.199 5.65405 13.9229 5.65405Z" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.67285 5.65405V3.40405C6.67285 2.80732 6.9099 2.23502 7.33186 1.81306C7.75382 1.39111 8.32611 1.15405 8.92285 1.15405C9.51959 1.15405 10.0919 1.39111 10.5138 1.81306C10.9358 2.23502 11.1729 2.80732 11.1729 3.40405V5.65405" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.92285 10.2791C9.26803 10.2791 9.54785 9.99923 9.54785 9.65405C9.54785 9.30887 9.26803 9.02905 8.92285 9.02905C8.57767 9.02905 8.29785 9.30887 8.29785 9.65405C8.29785 9.99923 8.57767 10.2791 8.92285 10.2791Z" fill="#999999" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="비밀번호 입력" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary w-50">로그인</button>
                                </div>
                            </div>
                            <div class="f-blue"><a href="#" class="nav-link f-blue">회원가입&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; 아이디/비밀번호 찾기</a></div>
                            <div class="f-blue"><a href="#" class="nav-link f-blue">휴면계정 복구 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 간편문</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>