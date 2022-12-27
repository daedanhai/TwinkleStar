<footer id="footer"  <? if($pageName == 'booking_confirm') echo "class=\"pc-only\""?>>
    <div class="inner">
        <div class="f-top">
            <button class="f-toggle">(주)반짝별</button>
            <ul class="company">
                <li>서울시 서초구 사평대로 55길 33 진석빌딩 502호</li>
                <li>사업자등록번호 : 123-45-67890</li>
                <li>동물장묘업 등록번호 : 123456789-123-123456789</li>
            </ul>
        </div>
        <ul class="f-menus">
            <li><a href="/policy/service.php">이용약관</a></li>
            <li><a href="/policy/privacy.php">개인정보처리방침</a></li>
        </ul>

        <div class="f-btn-wrap">
            <a href="#"><span>예약하기<small> (예약확인)</small></span></a>
        </div>

    </div>
</footer>

<!--Footer Ui script -->
<script>
    $('.f-toggle').click(function(){
        $(this).toggleClass('on');
        $('.f-top > .company').slideToggle();
        return false;
    });
</script>