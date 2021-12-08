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
    <!-- content -->
    <div class="container-fluid">
        <div class="row mb-5 mt-5">
            <div class="col-md-2">
                <div class="bd-example">
                    <ul class="list-group list-group-flush ml-3 mr-2">
                        <li class="list-group-item fw-bold" style="border-bottom: 3px solid !important;">법정의무교육</li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">산업공통</a></a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">어린이집 전용</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame26.php">의료기관 전용</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark active" style="padding: 0rem !important;" href="frame34.php">요양기관 전용</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <div class="row">
                    <p class="col-md-12 fs-4 text-start fw-bold pb-5">NCS기반_어린이집 영유아지원 v_1 <img src="assets/img/media.png" alt=""></p>
                </div>
                <div class="row">
                    <div class="col-md-3"><img src="assets/img/koneng.png" alt=""></div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-4 fw-bold">교육시간</div>
                            <div class="col-sm-4">1차시 1시간</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4 fw-bold">내용전문가</div>
                            <div class="col-sm-4">신창길</div>
                        </div>
                        <div class="mt-5">
                            <button class="btn pl-1 pr-1 border border-blue rounded f-blue bg-white fw-bold">교육맛보기</button>
                            <button class="btn ml-1 text-black bg-custom-light-gray">문 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;의</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 pt-5 fw-bold fs-5">수료기준 ❯</div>
                    <div class="col-md-12 pt-2">
                        <table class="border-top border-2 border-dark w-100 text-center">
                            <thead height="50" style="background-color: #EDF9FF;">
                                <th class="border-bottom">진도율</th>
                                <th class="border-bottom border-start">진행단계평가</th>
                                <th class="border-bottom border-start">최종평가</th>
                                <th class="border-bottom border-start">과제</th>
                                <th class="border-bottom border-start">수료기준</th>
                            </thead>
                            <tbody height=50>
                                <tr>
                                    <td class="border-bottom">80% 이상</td>
                                    <td class="border-bottom border-start">총 100점 / 10% 반영</td>
                                    <td class="border-bottom border-start">총 100점 / 70% 반영</td>
                                    <td class="border-bottom border-start">총 100점 / 20% 반영</td>
                                    <td class="border-bottom border-start">반영된 평가 합산 60점 이상</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-5">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.6455 8.95042C17.3508 8.64311 17.0461 8.32542 16.9309 8.04703C16.8251 7.79129 16.8187 7.36771 16.8125 6.95801C16.801 6.1956 16.7879 5.3315 16.1872 4.73076C15.5865 4.13002 14.7224 4.11697 13.96 4.10545C13.5503 4.09927 13.1267 4.09286 12.8709 3.98705C12.5926 3.87192 12.2749 3.5672 11.9675 3.27248C11.4278 2.75475 10.8158 2.16797 10 2.16797C9.18419 2.16797 8.57231 2.75475 8.03246 3.27248C7.72514 3.5672 7.40746 3.87192 7.12906 3.98705C6.87332 4.09286 6.44974 4.09927 6.04004 4.10545C5.27763 4.11697 4.41353 4.13002 3.81279 4.73076C3.21205 5.3315 3.19901 6.1956 3.18748 6.95801C3.1813 7.36771 3.1749 7.79129 3.06908 8.04703C2.95395 8.32535 2.64923 8.64311 2.35451 8.95042C1.83678 9.4902 1.25 10.1022 1.25 10.918C1.25 11.7338 1.83678 12.3457 2.35451 12.8855C2.64923 13.1928 2.95395 13.5105 3.06908 13.7889C3.1749 14.0446 3.1813 14.4682 3.18748 14.8779C3.19901 15.6403 3.21205 16.5044 3.81279 17.1052C4.41353 17.7059 5.27763 17.719 6.04004 17.7305C6.44974 17.7367 6.87332 17.7431 7.12906 17.8489C7.40738 17.964 7.72514 18.2687 8.03246 18.5635C8.57224 19.0812 9.18419 19.668 10 19.668C10.8158 19.668 11.4277 19.0812 11.9675 18.5635C12.2749 18.2687 12.5925 17.964 12.8709 17.8489C13.1267 17.7431 13.5503 17.7367 13.96 17.7305C14.7224 17.719 15.5865 17.7059 16.1872 17.1052C16.7879 16.5044 16.801 15.6403 16.8125 14.8779C16.8187 14.4682 16.8251 14.0446 16.9309 13.7889C17.0461 13.5106 17.3508 13.1928 17.6455 12.8855C18.1632 12.3457 18.75 11.7338 18.75 10.918C18.75 10.1022 18.1632 9.49028 17.6455 8.95042ZM9.37492 7.16797C9.37492 7.00221 9.44077 6.84324 9.55798 6.72603C9.67519 6.60882 9.83416 6.54297 9.99992 6.54297C10.1657 6.54297 10.3247 6.60882 10.4419 6.72603C10.5591 6.84324 10.6249 7.00221 10.6249 7.16797V11.543C10.6249 11.7087 10.5591 11.8677 10.4419 11.9849C10.3247 12.1021 10.1657 12.168 9.99992 12.168C9.83416 12.168 9.67519 12.1021 9.55798 11.9849C9.44077 11.8677 9.37492 11.7087 9.37492 11.543V7.16797ZM9.99996 15.293C9.81454 15.293 9.63328 15.238 9.47911 15.135C9.32494 15.032 9.20478 14.8855 9.13382 14.7142C9.06287 14.5429 9.0443 14.3544 9.08047 14.1726C9.11665 13.9907 9.20594 13.8237 9.33705 13.6926C9.46816 13.5614 9.63521 13.4722 9.81706 13.436C9.99892 13.3998 10.1874 13.4184 10.3587 13.4893C10.53 13.5603 10.6764 13.6805 10.7795 13.8346C10.8825 13.9888 10.9375 14.17 10.9375 14.3555C10.9375 14.6041 10.8387 14.8426 10.6629 15.0184C10.4871 15.1942 10.2486 15.293 9.99996 15.293H9.99996Z" fill="black" />
                        </svg>
                        <span class="fs-5 fw-bold align-middle"> 근로자카드 수강 유의사항</span>
                        <div>
                            <li class="ml-2">근로자카드 과정 구매 시, 지원금은 근로자카드 한도내에서 자동차감됩 니다.</li>
                            <li class="ml-2">근로자카드 과정 미수료 시, 고용노동부에서 규정한 패널티가 부여됨을 유의해주시기 바랍니다.</li>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 pt-5 fw-bold fs-5">교육비정보 ❯</div>
                    <div class="col-md-12 pt-2">
                        <table class="border-top border-2 border-dark w-100 text-center">
                            <thead height="50" style="background-color: #EDF9FF;">
                                <th class="border-bottom">교육비</th>
                                <th class="border-bottom border-start">환급 : 우선지원기업</th>
                                <th class="border-bottom border-start">환급 : 대규모 (1,000인 미만)</th>
                                <th class="border-bottom border-start">환급 : 대규모 (1,000인 이상)</th>
                            </thead>
                            <tbody height=50>
                                <tr>
                                    <td class="border-bottom">246,400 원</td>
                                    <td class="border-bottom border-start">126,280 원</td>
                                    <td class="border-bottom border-start">126,280 원</td>
                                    <td class="border-bottom border-start">126,280 원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-5">
                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item text-center" style="width: 33%;" role="presentation">
                            <a class="nav-link fw-bold text-black border-top border-bottom border-3 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">과정소개</a>
                        </li>
                        <li class="nav-item text-center" style="width: 33%;" role="presentation">
                            <a class="nav-link fw-bold text-black border-top border-bottom border-3" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">강의목차</a>
                        </li>
                        <li class="nav-item text-center" style="width: 33%;" role="presentation">
                            <a class="nav-link fw-bold text-black border-top border-bottom border-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">학습후기</a>
                        </li>
                    </ul>
                    <div class="tab-content p-5" style="background-color: #F2F2F2;" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="fw-bold mb-5">NCS기반_어린이집 영유아지원 v_1</div>
                            <div class="f-blue fw-bold mb-2">교육대상</div>
                            <div>1. 어린이집 보육교직원</div>
                            <div>2. 보육관련 기관</div>
                            <div>3. 아동복지 관련기관</div>
                            <div>4. 보육관련 기업체</div>
                            <div>5. 아동 및 보육관련 학과</div>
                            <div>6. 보육관련 연구기관</div>
                            <div class="f-blue fw-bold mb-2 mt-5">교육목표</div>
                            <div>1. 영유아의 행동 관찰을 통해 영유아의 특성과 문제를 파 악하고 관찰자료를 평가하여 영유아 지도에 필요한 사항을 도출하는 능력을 함양할 수 있다.</div>
                            <div>2. 발달적으로 어려움이 있는 영유아의 행동 사례를 관찰, 분석, 선별하고, 사례별 발달지원 계획과 지원, 부모상담과 전문가를 연계할 수 있는 능력을 함양할 수 있다.</div>
                            <div>3. 발달적으로 어려움이 있는 장애아를 위해 지도 및 상담 의 내용과 방법을 계획·결정하여 지원하는 능력을 함양할 수 있다.</div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                    </div>
                </div>

                <div class="row mt-5 p-5" style="background-color: #F2F2F2;">
                    <table class="w-100 text-center">
                        <thead class="text-white" height="50" style="background-color: #C4C4C4;">
                            <th>차시</th>
                            <th>강의명</th>
                        </thead>
                        <tbody height=50>
                            <tr height=50 class="border-bottom bg-white">
                                <td>1차시</td>
                                <td>산업공통_개인정보보호교육</td>
                            </tr>
                            <tr height=50 class="bg-white">
                                <td>2차시</td>
                                <td>산업공통_개인정보보호교육</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mt-5 p-3" style="background-color: #F2F2F2;">
                    <div class="col-md-12">
                        <img src="assets/img/bintang.png" alt="" class="mr-2"> 총 0건의 수강후기가 등록되었습니다.
                    </div>
                </div>

                <div class="container mt-5">
                    <li class="text-center m-3"></li>
                    <li class="text-center m-3"></li>
                    <li class="text-center m-3"></li>
                </div>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>