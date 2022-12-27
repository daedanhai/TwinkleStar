<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>반려동물장례식 - 반짝별</title>
	<!-- font -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
	<!--css-->
	<link rel="stylesheet" href="../assets/css/reset.css"/>
	<link rel="stylesheet" href="../assets/css/style.css"/>
	<link rel="stylesheet" href="../assets/css/responsive.css"/>
	<!-- Link Swiper's CSS -->
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
	/>
	<!-- js -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!--[common js]-->
    <script src="../assets/js/common.js"></script>
    <?php
        $pageName = 'location';
    ?>
</head>
<!--/head 끝/-->
<body>
	<div id="app">
		<!--[ 헤더 ]-->
		<?php include '../inc/header.php'; ?>
        <!--//[ 헤더 ]-->
        <!--page-container-->
        <div class="page-container location-page">
            <!-- 시설안내 -->
            <div class="sub-page-title-wrap">
                <h4>반짝별 시설 안내</h4>
                <p>보호자에 마음으로 안심하고<br class="m-only"/>아이를 보내실 수 있도록 도와드립니다.</p>
            </div>
            <!--[시설안내 페이지 섹션 01]-->
            <div class="section section01">
                <div class="section-inner">
                    <!--반짝별 시설 안내 이미지 swiper-->
                    <div class="location-img-wrap">
                        <div class="swiper location-img-swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <div class="img-wrap">
                                        <img src="../assets/img/location_info01_img.png"/>
                                    </div>    
                                    <p>상담실</p>
                                </li>
                                <li class="swiper-slide">
                                    <div class="img-wrap">
                                        <img src="../assets/img/location_info01_img.png"/>
                                    </div>    
                                    <p>다른실</p>
                                </li>
                            </ul>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <script>
                            var locationImgSwiper = new Swiper(".location-img-swiper", {
                                navigation: {
                                    nextEl: ".location-img-swiper .swiper-button-next",
                                    prevEl: ".location-img-swiper .swiper-button-prev",
                                },
                            });
                        </script>
                    </div>
                    <div class="location-info-wrap">
                        <h5 class="tt">반짝별 서울점</h5>
                        <ul>
                            <li>
                                <h6>주소</h6>
                                <p>서울시 서초구 사평대로 55길 33<br/>진석빌딩 502호</p>
                            </li>
                            <li>
                                <h6>운영 시간</h6>
                                <p>오전 9:00 ~ 오후 11:00</p>
                            </li>
                            <li>
                                <h6>문의 전화</h6>
                                <p>02-1234-5678 (24시간 운영)</p>
                            </li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn medium line"><span>카카오 지도</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--//[시설안내 페이지 섹션 01]-->
        </div>
        <!--[//page-container]-->
		<!--[ 푸터 ]-->
		<?php include '../inc/footer.php'; ?>
        <!--//[ 푸터 ]-->        
	</div>
</body>
</html>
