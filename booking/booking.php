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
        $pageName = 'booking';
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
        <div class="page-container booking-page">
            <!--예약페이지-->
            <div class="page-title-wrap">
                <h4>간편 예약하기</h4>
                <a href="./booking_confirm.php" class="btn-bcheck">예약확인</a>
            </div>
            <!--section01-->
            <div class="section section01">
                <div class="section-inner">
                    <!-- 01 예약일자 및 시간 -->
                    <div class="section-title-wrap">
                        <h5><span class="idx">01</span><span>예약일자 및 시간</span></h5>
                        <p>예약을 원하시는 일자와 시간을 선택해주세요.</p>
                    </div>
                    
                    <!--[예약 달력]-->
                    <div class="booking-calendar-area"></div>
                    
                    <script>
                    let getCalendar = () => {
                        let toYear = "<?=$_GET['toYear'] ? $_GET['toYear'] : date("Y")?>",
                            toMonth = "<?=$_GET['toMonth'] ? $_GET['toMonth'] : date("m")?>";

                        $.ajax(
                            {
                                url: "/inc/booking_calendar.php",
                                data: {
                                    toYear,
                                    toMonth
                                },
                                dataType: 'html',
                                success: function(html) {
                                    $(".booking-calendar-area").html(html);
                                },
                                error: function(res) {
                                    alert('error');
                                }
                            }
                        );
                    }
                    $(document).ready(function(){
                        getCalendar();
                    });
                    </script>
                
                </div>
            </div>
            <!--//section01-->
            <!--section02-->
            <div class="section section02">
                <div class="section-inner">
                    <!-- 02 예약정보 -->
                    <div class="section-title-wrap">
                        <h5><span class="idx">02</span><span>예약정보</span></h5>
                        <p>필수로 입력해 주세요.</p>
                    </div>
                    
                    <div class="section02-form-con">
                        <div class="form-wrap">
                            <h6>반려동물 정보</h6>
                            <div class="input-row">
                                <p class="label">이름</p>
                                <div class="input-wrap">
                                    <input class="input" type="text" placeholder="반려동물 이름을 입력해주세요."/>
                                    <button class="btn-input-delete">지우기</button>
                                </div>
                            </div>
                            <div class="input-row">
                                <p class="label">몸무게</p>
                                <div class="input-wrap kg">
                                    <input class="input" type="text" placeholder="반려동물 몸무게를 입력해주세요."/>
                                    <button class="btn-input-delete">지우기</button>
                                    <span class="kg-span">kg</span>
                                </div>
                            </div>
                            <div class="input-row">
                                <p class="label">구분</p>
                                <div class="input-wrap">
                                    <input class="input" type="text" placeholder="반려동물 종류를 입력해주세요."/>
                                    <button class="btn-input-delete">지우기</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-wrap">
                            <h6>보호자 정보</h6>
                            <div class="input-row">
                                <p class="label">이름</p>
                                <div class="input-wrap">
                                    <input class="input" type="text" placeholder="보호자 이름을 입력해주세요."/>
                                    <button class="btn-input-delete">지우기</button>
                                </div>
                            </div>
                            <div class="input-row">
                                <p class="label">휴대폰 번호</p>
                                <div class="input-wrap">
                                    <input class="input" type="text" placeholder="휴대폰 번호를 입력해주세요."/>
                                    <button class="btn-input-delete">지우기</button>
                                </div>
                            </div>
                            <div class="input-row">
                                <p class="label">메모</p>
                                <div class="input-wrap">
                                    <input class="input" type="text" placeholder="입력해주세요." disabled="disabled"/>
                                    <button class="btn-input-delete">지우기</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--//section02-->
            <!--section03-->
            <div class="section section03">
                <div class="section-inner">
                    <!-- 03 약관 동의  -->
                    <div class="chk-group-wrap">
                        <div class="chk-row allcheck-row">
                            <div class="custom-check-wrap">
                                <input type="checkbox" id="allcheck_input" name="all_booking_chk"/>
                                <label for="allcheck_input">개인정보 약관 동의 및 이용약관 전체동의</label>
                            </div>
                        </div>
                        <div class="chk-row">
                            <div class="custom-check-wrap">
                                <input type="checkbox" id="check_01" name="booking_chk"/>
                                <label for="check_01">이용약관</label>
                            </div>
                            <a href="../policy/service.php" target="_blank" class="more">자세히 보기</a>
                        </div>
                        <div class="chk-row">
                            <div class="custom-check-wrap">
                                <input type="checkbox" id="check_02" name="booking_chk"/>
                                <label for="check_02">개인정보 수집/이용/제공 동의</label>
                            </div>
                            <a href="../policy/privacy.php" target="_blank" class="more">자세히 보기</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--//section03-->
            <!--section04-->
            <div class="section section04">
                <div class="section-inner">
                    <!-- 04 예약금  -->
                    <div class="price-wrap">
                        <h5 class="booking-price">예약금 30,000원</h5>
                        <p>결제까지 완료하셔야 예약접수가 완료됩니다.<br/>예약금은 카드결제만 가능합니다.</p>
                    </div>
                    <div class="btn-wrap">
                        <a href="#" class="btn-ok">예약접수</a>
                    </div>
                </div>
            </div>
            <!--//section04-->
        </div>
        <!--//page-container-->
		<!--[ 푸터 ]-->
		<?php include '../inc/footer.php'; ?>
        <!--//[ 푸터 ]-->
	</div>
    <!--//app-->
</body>
</html>
