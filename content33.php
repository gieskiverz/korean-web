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
                        <li class="list-group-item fw-bold" style="border-bottom: 3px solid !important;">교육제도안내</li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="content18.php">고용보험환급안내</a></a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="content19.php">사업주과정안내</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark active" style="padding: 0rem !important;" href="content20.php">내일배움카드안내</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="content21.php">교육생 유의사항</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark" style="padding: 0rem !important;" href="content22.php">훈련진행절차</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 p-5">
                <p class="border-top border-bottom border-2 border-dark col-md-2 fs-4 text-center fw-bold">내일배움카드안내</p>
                <p class="pt-2 fw-bold f-blue fs-3"><img src="assets/img/dot.png" alt=""> 국민내일배움카드</p>
                <p><span class="fw-bold">실업, 재직, 자영업 여부에 관계없이</span> 국민내일배움카드를 발급받고 일정 금액의 훈련비를 지원함으로써
                    직업능력개발훈련에 참여할 수 있도록 하며, 직업능력개발 훈련이력을 종합적으로 관리하는 제도입니다.</p>
                <img class="img-fluid rounded mx-auto d-block p-5" src="assets/img/frame33.png" alt="">
                <p class="f-blue fw-bold fs-5">/ 1 / 훈련대상</p>
                <p class="fw-bold fs-5">국민 누구나 신청가능</p>
                <p>* 제외 대상 : 공무원, 사립학교 교직원, 졸업예정자 이외 재학생, 연매출 1억 5천만원 이상의 자영업자, 월임금 300만원 이상
                    대기업근로자 (45세 미만), 특수형태 근로종사자 제외</p>
                <p class="f-blue fw-bold fs-5">/ 2 / 지원내용</p>
                <table class="table table-borderless">
                    <thead class="table-secondary border-top border-dark">
                        <tr class="">
                            <th scope="col" class="text-center">구분</th>
                            <th scope="col" class="text-center">지원범위</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom">
                            <td class="border-end"><span class="pl-2">사용금액</span></td>
                            <td>
                                <p class="ml-3 fw-bold">1인당 계좌한도는 기본 300만원</p>
                                <p class="ml-3">-저소득 계층은 500만원 지원</p>
                                <p class="ml-3">-훈련참여자는 훈련비의 일부 자부담(실업자, 재직자, 자영업자 등 자부담 비율 동일)</p>
                                <p class="ml-3">-저소득 계층 및 국가기간전략산업직종, 과정 평가형 자격과정 등 특화과정은 자부담 없이 전액지원</p>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="border-end"><span class="pl-2">유효기간</span></td>
                            <td>
                                <p class="ml-3 fw-bold">발급일로부터 5년</p>
                                <p class="ml-3 mb-5">코로나 상황으로 인한 추가지원으로 예산소진 시까지(소진후 116,000원)</p>
                                <p class="ml-3">-국민취업지원제도 1유형 참여 시 6개월 간 월 최대 500,000원 별도 지급</p>
                                <p class="ml-3">-국민취업지원제도 2유형 참여 시 6개월 간 월 최대 284,000원 별도 지급</p>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="border-end"><span class="pl-2">사용금액</span></td>
                            <td>
                                <p class="ml-3 fw-bold">총 140시간 이상 과정에 참여하는 경우 자체훈련계획서를 제출한 과정에 대해서만 지원 가능</p>
                                <p class="ml-3">계좌카드는 신용·체크카드 기능을 겸하고 있으며 지원금 300만원은 다른 용도로 사용불가</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="f-blue fw-bold fs-5">/ 3 / 지원절차</p>
                <p class="nav-link badge rounded-pill bg-custom-blue pl-2 pr-2 pt-2 pb-2">
                    <span class="text-warning"> STEP 1 ></span> 근로자직업능력 발급신청 (온/오프라인)
                </p>
                <p class="fw-bold">
                    <li>온라인 신청은 HRD-NET로그인 후 상단 [행정서비스]-[근로자카드신청]에서 신청</li>
                </p>
                <p class="fw-bold">
                    <li>오프라인 신청은 방문 전 해당 센터로 문의 후 방문 신청</li>
                </p>

                <p class="nav-link badge rounded-pill bg-custom-blue pl-2 pr-2 pt-2 pb-2">
                    <span class="text-warning"> STEP 2 ></span> 근로자 직업능력카드 발급
                </p>
                <p class="fw-bold">
                    <li>발급관련 진행절차 등은 신청중인 고용센터로 문의 (대효전화 1350)</li>
                </p>

                <p class="nav-link badge rounded-pill bg-custom-blue pl-2 pr-2 pt-2 pb-2">
                    <span class="text-warning"> STEP 3 ></span> 훈련과정 검색 및 수강신청
                </p>
                <p class="fw-bold">
                    <li>HRD_NET홈페이지에 등록된 해당 훈련과정 검색</li>
                </p>
                <p class="fw-bold">
                    <li>훈련기관에서 훈련절차 및 훈련비용 등 상담 후 수강신청</li>
                </p>

                <p class="nav-link badge rounded-pill bg-custom-blue pl-2 pr-2 pt-2 pb-2">
                    <span class="text-warning"> STEP 4 ></span> 훈련과정 수강
                </p>
                <p class="fw-bold">
                    <li>총 훈련비용 중 본인부담 금액만 결제</li>
                </p>
                <p class="row justify-content-center"><span class="col-md-2 badge bg-custom-gray p-2 ">HRD-NET 내일배움카드 바로가기</span></p>
                <li class="text-center"></li>
                <li class="text-center"></li>
                <li class="text-center"></li>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>