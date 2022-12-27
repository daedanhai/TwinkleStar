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
        $pageName = 'booking_confirm';
    ?>
</head>
<!--/head 끝/-->
<body>
    <!--app-->
	<div id="app">
		<!--[ 헤더 ]-->
		<?php include '../inc/header.php'; ?>
        <!--//[ 헤더 ]-->
        <!--page-container-->
        <div class="page-container booking-confirm-page">
            <div class="page-title-wrap">
                <h4>예약확인</h4>
            </div>
            <!--section01-->
            <div class="section section01">
                <div class="section-inner">
                    <div class="form-wrap">
                        <div class="input-row">
                            <p class="label">반려동물 이름</p>
                            <div class="input-wrap">
                                <input class="input" type="text" placeholder="반려동물 이름을 입력해주세요."/>
                                <button class="btn-input-delete">지우기</button>
                            </div>
                        </div>
                        <div class="input-row">
                            <p class="label">보호자 이름</p>
                            <div class="input-wrap">
                                <input class="input" type="text" placeholder="보호자 이름을 입력해주세요."/>
                                <button class="btn-input-delete">지우기</button>
                            </div>
                        </div>
                        <div class="input-row">
                            <p class="label">보호자 휴대폰 번호</p>
                            <div class="input-wrap">
                                <input class="input" type="text" placeholder="보호자 휴대폰 번호을 입력해주세요."/>
                                <button class="btn-input-delete">지우기</button>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap fixed">
                        <button class="btn big" onclick="location.href='./booking_success.php';"><span>확인</span></button>
                    </div>
                </div>
            </div>
            <!--//section01-->
        </div>
        <!--//page-container-->
        <!--[ 푸터 ]-->
		<?php include '../inc/footer.php'; ?>
        <!--//[ 푸터 ]-->
	</div>
    <!--//app-->
</body>
</html>
