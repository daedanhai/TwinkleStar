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
        $pageName = 'product';
    ?>
</head>
<!--/head 끝/-->
<body>
	<div id="app">
		<!--[ 헤더 ]-->
		<?php include '../inc/header.php'; ?>
        <!--//[ 헤더 ]-->
        <!-- 비용안내 페이지 -->
        <div class="page-container product-page">
            <div class="sub-page-title-wrap">
                <h4>장례서비스 비용</h4>
                <p>보호자님의 마음을 치유하는 데에만 집중할 수 있도록<br class="m-only"/> 장례 비용을 투명하게 공개합니다.</p>
                <div class="st">
                    <span>※ 부가세 포함된 금액입니다.</span>
                </div>
            </div>
            <div class="section section01">
                <div class="section-inner">
                    <div class="product-wrap">
                        <div class="title-wrap">
                            <h4>화장 비용</h4>
                            <p>모든 화장은 개별화장으로 진행됩니다.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_thumb_img01.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>일반동물</h5>
                                    <p>5kg 미만</p>
                                    <h6>200,000원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_thumb_img02.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>일반동물</h5>
                                    <p>5kg 이상 10kg 미만</p>
                                    <h6>250,000원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_thumb_img03.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>일반동물</h5>
                                    <p>10kg 이상 15kg 미만</p>
                                    <h6>300,000원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_thumb_img04.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>소동물, 대형동물</h5>
                                    <p>※ 별도 문의</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="product-wrap add-product">
                        <div class="title-wrap">
                            <h4>추가 선택사항</h4>
                            <p>화장 이외에 추가로 선택하시는 항목에 따라<br/>별도 비용이 추가됩니다.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_add_thumb_img01.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>수의</h5>
                                    <h6>5~10만원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="../assets/img/product_add_thumb_img01.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>관</h5>
                                    <h6>10~15만원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                <img src="../assets/img/product_add_thumb_img03.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>유골함</h5>
                                    <h6>3~15만원</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                <img src="../assets/img/product_add_thumb_img04.png"/>
                                </div>
                                <div class="txt-wrap">
                                    <h5>스톤제작</h5>
                                    <p>※ 별도 문의</p>
                                </div>
                            </li>
                        </ul>
                    </div>
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
