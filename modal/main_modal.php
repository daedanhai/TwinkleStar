<!--[ 메인모달 ]-->
<div class="modal-container" data-modal="main">
    <div class="modal-contents">
        <div class="modal-body">
            <div class="swiper mainModal-swiper">
                <ul class="swiper-wrapper">
                    <!--팝업 이미지 내용-->
                    <li class="swiper-slide"><img src="https://via.placeholder.com/330x450.png"/></li>
                    <li class="swiper-slide"><img src="https://via.placeholder.com/330x450.png"/></li>
                    <li class="swiper-slide"><img src="https://via.placeholder.com/330x450.png"/></li>
                </ul>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="modal-bottom">
            <div class="btn-wrap">
                <button class="today" onClick="todayCloseModal('main')"><span>오늘 그만보기</span></button>
                <button class="close" onClick="closeModal('main')"><span>닫기</span></button>
            </div>
        </div>

    </div>
</div>

<script>
$(function() {
    var mainModalSwiper = new Swiper(".mainModal-swiper", {
        autoHeight:true,
        autoPlay:{
            delay: 5000,
        },
        navigation: {
            nextEl: ".mainModal-swiper .swiper-button-next",
            prevEl: ".mainModal-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".mainModal-swiper .swiper-pagination",
            clickable: true,
        },
    });
});
</script>
