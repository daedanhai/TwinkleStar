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
        $pageName = 'notice';
    ?>
</head>
<!--/head 끝/-->
<body>
<!--팝업 위치-->
<?php include '../modal/notice_modal.php'; ?>

	<div id="app">
		<!--[ 헤더 ]-->
		<?php include '../inc/header.php'; ?>
        <!--//[ 헤더 ]-->
        <!--[ 고객센터 탭 ]-->
        <?php include '../inc/center_tabs.php'; ?>
        <!--//[ 고객센터 탭 ]-->
        <!-- 고객센터-faq 페이지 -->
        <div class="page-container center-page">
            <div class="section section01">
                <div class="section-inner">
                    <div class="section-title2-wrap">
                        <h4>공지사항</h4>
                    </div>
                    <!--공지사항-->
                    <ul class="notice-list-wrap">
                        <li class="top">
                            <button class="title" onClick="openModal('notice')">
                                <span class="idx">공지</span>
                                <span class="tt">공지 안내드립니다. 업데이트 관련 공지입니다.</span>
                            </button>
                            <ul class="info">
                                <li><span class="date">2022.07.16</span></li>
                                <li><span class="view">999</span></li>
                            </ul>
                        </li>
                        <li>
                            <button class="title" onClick="openModal('notice')">
                                <span class="idx">99</span>
                                <span class="tt">공지 안내드립니다. 업데이트 관련 공지입니다.</span>
                            </button>
                            <ul class="info">
                                <li><span class="date">2022.07.16</span></li>
                                <li><span class="view">999</span></li>
                            </ul>
                        </li>
                        <li>
                            <button class="title" onClick="openModal('notice')">
                                <span class="idx">98</span>
                                <span class="tt">공지 안내드립니다. 업데이트 관련 공지입니다.</span>
                            </button>
                            <ul class="info">
                                <li><span class="date">2022.07.16</span></li>
                                <li><span class="view">999</span></li>
                            </ul>
                        </li>
                        <li>
                            <button class="title" onClick="openModal('notice')">
                                <span class="idx">97</span>
                                <span class="tt">공지 안내드립니다. 업데이트 관련 공지입니다.</span>
                            </button>
                            <ul class="info">
                                <li><span class="date">2022.07.16</span></li>
                                <li><span class="view">999</span></li>
                            </ul>
                        </li>
                        <li>
                            <button class="title" onClick="openModal('notice')">
                                <span class="idx">96</span>
                                <span class="tt">공지 안내드립니다. 업데이트 관련 공지입니다.</span>
                            </button>
                            <ul class="info">
                                <li><span class="date">2022.07.16</span></li>
                                <li><span class="view">999</span></li>
                            </ul>
                        </li>
                    </ul>
                    <!--페이지 네이션-->
                    <ul class="pagination-wrap">
                        <li><button class="prev" disabled>prev</button></li>
                        <li><button class="on">1</a></li>
                        <li><button>2</button></li>
                        <li><button>3</button></li>
                        <li><button>4</button></li>
                        <li><button>5</button></li>
                        <li><button class="next">next</button></li>
                    </ul>
                    <!--//페이지 네이션-->
                </div>
            </div>
        </div>
        <!--//[page-container]-->
		<!--[ 푸터 ]-->
		<?php include '../inc/footer.php'; ?>
        <!--//[ 푸터 ]-->
	</div>
</body>
</html>
