<div id="main-visual-section" class="section">
    <div class="mv-inner">
        <!-- 메인 비쥬얼 Swiper -->
        <div class="mv-swiper">
            <ul class="swiper-wrapper">
                <li class="swiper-slide mv-slide1">
                    <div class="slide-inner">
                        <div class="mv-title-wrap">
                            <h3>
                                나비야,<br/>
                                너는 반짝이는 별
                            </h3>
                            <p>슬픔의 처음부터 끝까지 함께 하겠습니다.<br/>이별에도 용기가 필요합니다.</p>
                            <div class="mv-btn-wrap">
                                <a href="../booking/booking.php">고양이별 예약</a>
                            </div>
                        </div>
                        <div class="animal-wrap">
                            <img src="../assets/img/main_visual/mv_slide01_m.png" alt="모바일" class="m-only"/>
                            <img src="../assets/img/main_visual/mv_slide01.png" alt="PC" class="pc-only"/>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide mv-slide2">
                    <div class="slide-inner">
                        <div class="mv-title-wrap">
                            <h3>
                                댕댕아,<br/>
                                너는 반짝이는 별
                            </h3>
                            <p>슬픔의 처음부터 끝까지 함께 하겠습니다.<br/>이별에도 용기가 필요합니다.</p>
                            <div class="mv-btn-wrap">
                                <a href="../booking/booking.php">강아지별 예약</a>
                            </div>
                        </div>
                        <div class="animal-wrap">
                            <img src="../assets/img/main_visual/mv_slide02_m.png" alt="모바일" class="m-only"/>
                            <img src="../assets/img/main_visual/mv_slide02.png" alt="PC" class="pc-only"/>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide mv-slide3">
                    <div class="slide-inner">
                        <div class="mv-title-wrap">
                            <h3>
                                토끼야,<br/>
                                너는 반짝이는 별
                            </h3>
                            <p>슬픔의 처음부터 끝까지 함께 하겠습니다.<br/>이별에도 용기가 필요합니다.</p>
                            <div class="mv-btn-wrap">
                                <a href="../booking/booking.php">토끼별 예약</a>
                            </div>
                        </div>
                        <div class="animal-wrap">
                            <img src="../assets/img/main_visual/mv_slide03_m.png" alt="모바일" class="m-only"/>
                            <img src="../assets/img/main_visual/mv_slide03.png" alt="PC" class="pc-only"/>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mv-swiper", {
    pagination: {
        el: ".mv-swiper .swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
    },
});
</script>