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
        $pageName = 'gallery';
    ?>
</head>
<!--/head 끝/-->
<body>
	<div id="app">
		<!--[ 헤더 ]-->
		<?php include '../inc/header.php'; ?>
        <!--//[ 헤더 ]-->
        <!-- 추모갤러리 페이지 -->
        <div class="page-container gallery-page">
            <div class="section section01">
                <div class="section-inner">
                    <div class="sub-page-title-wrap type02">
                        <h4>반짝별들을 기억하며<br/>영원히 마음으로 함께합니다</h4>
                        <p>소중한 사랑은 저희는 기억합니다.</p>
                    </div>
                    <div class="gallery-list-wrap">
                        <ul class="gallery">
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile01.jpg"/></div>
                                <p class="name"><span class="small-star01">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile02.jpg"/></div>
                                <p class="name"><span class="small-star02">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile03.jpg"/></div>
                                <p class="name"><span class="small-star03">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile04.jpg"/></div>
                                <p class="name"><span class="small-star04">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile01.jpg"/></div>
                                <p class="name"><span class="small-star01">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile02.jpg"/></div>
                                <p class="name"><span class="small-star02">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile03.jpg"/></div>
                                <p class="name"><span class="small-star03">모카</span></p>
                            </li>
                            <li>
                                <p class="date">2022.10.18</p>
                                <div class="profile"><img src="../assets/img/ms04_profile04.jpg"/></div>
                                <p class="name"><span class="small-star04">모카</span></p>
                            </li>
                        </ul>
                    </div>
                    <!--페이지 네이션-->
                    <ul class="pagination-wrap">
                        <li><button class="prev" disabled>prev</button></li>
                        <li><button class="on">1</button></li>
                        <li><button>2</button></li>
                        <li><button>3</button></li>
                        <li><button>4</button></li>
                        <li><button>5</button></li>
                        <li><button href="#" class="next">next</button></li>
                    </ul>
                    <!--//페이지 네이션-->
                </div>
            </div>
        </div>
        <!--//[//page-container]-->
		<!--[ 푸터 ]-->
		<?php include '../inc/footer.php'; ?>
        <!--//[ 푸터 ]-->        
	</div>
</body>
</html>
