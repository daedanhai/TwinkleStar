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
	<link rel="stylesheet" href="./assets/css/reset.css"/>
	<link rel="stylesheet" href="./assets/css/style.css"/>
	<link rel="stylesheet" href="./assets/css/responsive.css"/>
	<!-- Link Swiper's CSS -->
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
	/>
	<!-- js -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script src="./assets/js/common.js"></script>
</head>
<!--/head 끝/-->

<!--페이지 스크립트-->
<script>
let msSwiper04 = null;
function msSwiperInit() {
    var ww = $(window).width();

    if (ww > 1000) {
        if (msSwiper04 === null) {
            msSwiper04 = new Swiper(".ms04-swiper", {
                slidesPerView: 'auto',
                navigation: {
                    nextEl: ".ms04-swiper-container .swiper-button-next",
                    prevEl: ".ms04-swiper-container .swiper-button-prev",
                },
                autoplay: {
                    delay: 3000,
                },
            });
        }
    } else if (ww <= 1000) {
        if (msSwiper04 != null) {
            msSwiper04.destroy();
            msSwiper04 = null;
        }
    }
}

$(function() {
    cookiedata = document.cookie;
    if ( cookiedata.indexOf("todayModal=done") < 0 ){
        openModal('main');
    }
	msSwiperInit();

    $(window).on('resize', function () {
        msSwiperInit();
    });
});
</script>
<!--//페이지 스크립트-->
<body>

	<!--modal area-->
	<?php include './modal/main_modal.php'; ?>
	<!--//modal area-->

	<!--app-->
	<div id="app">

		<!--[ 헤더 ]-->
		<?php include './inc/header.php'; ?>
		<!--//[ 헤더 ]-->

		<!--page-cotainer-->
		<div class="page-container main-page">
			<!--[ 메인 비쥬얼 ]-->
			<?php include './inc/main_visual.php'; ?>
			<!--//[ 메인 비쥬얼 ]-->

			<!-- [ 메인 섹션 01 ] -->
			<div class="section main-section01">
				<div class="section-inner">
					<div class="txt-wrap">
						<h4>어쩔 수 없이 다가온 이별,<br/> 우리는 어떻게<br/> 받아들여야 할까요?</h4>
						<p>슬픔의 처음부터 끝까지 함께 하겠습니다.<br/>
						이별에도 용기가 필요합니다.<br/>
						가장 큰 선물이였음을 알기에<br/>
						저희는 반려동물의 마지막 가는 길을<br/>
						정성것 준비해드립니다.</p>
					</div>
					<div class="circle-img-wrap">
						<div class="circle-img circle-img01"><img src="../assets/img/main_section01_circle_img01.png"/></div>
						<div class="circle-img circle-img02"><img src="../assets/img/main_section01_circle_img02.png"/></div>
						<div class="circle-img circle-img03"><img src="../assets/img/main_section01_circle_img03.png"/></div>
						<div class="circle-img circle-img04 pc-only"><img src="../assets/img/main_section01_circle_img04.png"/></div>
						<div class="circle-img circle-img05 pc-only"><img src="../assets/img/main_section01_circle_img05.png"/></div>
					</div>
				</div>
			</div>
			<!--// [ 메인 섹션 01 ] -->
			<!-- [ 메인 섹션 02 ] -->
			<div class="section main-section02">
				<div class="section-inner bs-padding">
					<div class="section-title-wrap">
						<h4><span>상담예약안내</span></h4>
						<h5>마지막을 편안히,<br/>반짝별과 함께하세요</h5>
						<p>※ 24시간 연중무휴 상담가능</p>
					</div>
					<div class="call-btn-wrap">
						<a href="tel:02-1234-5678">
							<span>전화 간편 예약</span>
							<p class="pc-only">02-1234-5678</p>
						</a>
					</div>
				</div>
			</div>
			<!--//[ 메인 섹션 02 ] -->
			<!-- [ 메인 섹션 03 ] -->
			<div class="section main-section03">
				<div class="section-inner bs-padding">

					<div class="section-title-wrap">
						<h4><span>지점안내</span></h4>
						<h5>온전한 위로를 위한<br/>반짝별의 공간</h5>
					</div>

					<div class="map-area"></div>

				</div>
			</div>
			<!--//[ 메인 섹션 03 ] -->
			<!-- [ 메인 섹션 04 ] -->
			<div class="section main-section04">
				<div class="section-inner bs-padding">

					<div class="section-title-wrap">
						<h4><span>추모갤러리</span></h4>
						<h5>함께한 순간을<br/>영원히 기억합니다</h5>
					</div>
					
					<!-- 추모 갤러리 swiper -->
					<div class="ms04-swiper-container">
						<div class="swiper ms04-swiper">
							<ul class="swiper-wrapper">
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile01.jpg"/></div>
									<p class="name"><span class="small-star01">모카</span></p>
								</li>
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile02.jpg"/></div>
									<p class="name"><span class="small-star02">크림</span></p>
								</li>
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile03.jpg"/></div>
									<p class="name"><span class="small-star03">말랑콩떡</span></p>
								</li>
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile04.jpg"/></div>
									<p class="name"><span class="small-star04">나비</span></p>
								</li>
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile03.jpg"/></div>
									<p class="name"><span class="small-star01">말랑콩떡</span></p>
								</li>
								<li class="swiper-slide">
									<p class="date">2022.10.18</p>
									<div class="profile"><img src="../assets/img/ms04_profile04.jpg"/></div>
									<p class="name"><span class="small-star02">나비</span></p>
								</li>
							</ul>
						</div>
						<div class="swiper-button swiper-button-next"></div>
						<div class="swiper-button swiper-button-prev"></div>
					</div>

					<div class="section-bottom-btn-wrap">
						<a href="./pages/gallery.php" class="btn-more"><span>더보기</span></a>
					</div>

				</div>
			</div>
			<!--//[ 메인 섹션 04 ] -->
			<!-- [ 메인 섹션 05 ] -->
			<div class="section main-section05">
				<div class="section-inner bs-padding">
					<div class="section-title2-wrap">
						<h4>공지사항</h4>
					</div>
					<ul class="accodian-menus">
						<li>
							<button class="am-title-button">
								<h6 class="tt">공지 안내드립니다.</h6>
								<p class="d">2022.07.16</p>
							</button>
							<div class="am-contents-wrap">
								<p>안녕하세요 공지 안내드립니다. 앱 업데이트 관련하여 공지드립니다.</p>
							</div>
						</li>
						<li>
							<button class="am-title-button">
								<h6 class="tt">공지 안내드립니다.</h6>
								<p class="d">2022.07.16</p>
							</button>
							<div class="am-contents-wrap">
								<p>안녕하세요 공지 안내드립니다. 앱 업데이트 관련하여 공지드립니다.</p>
							</div>
						</li>
					</ul>

					<div class="section-bottom-btn-wrap">
						<a href="./pages/notice.php" class="btn-more"><span>더보기</span></a>
					</div>

				</div>
			</div>
			<!--//[ 메인 섹션 05 ] -->
			<hr class="section-line" />
			<!-- [ 메인 섹션 06 ] -->
			<div class="section main-section06">
				<div class="section-inner bs-padding">
					<div class="section-title2-wrap">
						<h4>자주하는 질문</h4>
					</div>
					<ul class="accodian-menus">
						<li>
							<button class="am-title-button">
								<h6 class="tt">자주하는 질문입니다.</h6>
							</button>
							<div class="am-contents-wrap">
								<p>안녕하세요 자주하는 질문입니다. 앱 업데이트 관련하여 질문드립니다.</p>
							</div>
						</li>
						<li>
							<button class="am-title-button">
								<h6 class="tt">자주하는 질문입니다.</h6>
							</button>
							<div class="am-contents-wrap">
								<p>안녕하세요 자주하는 질문입니다. 앱 업데이트 관련하여 질문드립니다.</p>
							</div>
						</li>
					</ul>

					<div class="section-bottom-btn-wrap">
						<a href="./pages/faq.php" class="btn-more"><span>더보기</span></a>
					</div>

				</div>
			</div>
			<!--//[ 메인 섹션 06 ] -->
			
		</div>
		<!--//page-cotainer-->

		<!--[ 푸터 ]-->
		<?php include './inc/footer.php'; ?>
		<!--//[ 푸터 ]-->
		
	</div>
	<!--//app-->
</body>

</html>

