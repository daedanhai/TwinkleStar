<header id="header">
    <div class="inner">
        <div class="h-top">
            <!--로고-->
            <h1 class="logo">
                <a href="/"><img src="../assets/img/logo.png" alt="반짝별"/></a>
            </h1>
            <button class="menu-toggle-btn">메뉴 열기/닫기</button>
        </div>
        <!--메뉴-->
        <div class="menus">
            <ul>
                <li><a href="../pages/company.php" <? if($pageName == 'company') echo "class=\"on\""?>>소개</a></li>
                <li><a href="../pages/location.php" <? if($pageName == 'location') echo "class=\"on\""?>>시설안내</a></li>
                <li><a href="../pages/procedure.php" <? if($pageName == 'procedure') echo "class=\"on\""?>>장례절차</a></li>
                <li><a href="../pages/product.php" <? if($pageName == 'product') echo "class=\"on\""?>>비용안내</a></li>
                <li><a href="../pages/notice.php" <? if($pageName == 'faq' || $pageName == 'notice') echo "class=\"on\""?>>고객센터</a></li>
                <li><a href="../pages/gallery.php" <? if($pageName == 'gallery') echo "class=\"on\""?>>추모갤러리</a></li>
            </ul>
            <div class="booking-btn">
                <a href="#"><span>예약하기<small> (예약확인)</small></span></a>
            </div>
        </div>
    </div>
</header>

<!--script -->
<script>
    const header = $('#header');
    $('.menu-toggle-btn').click(function(){
        header.toggleClass('menus-opened');
        header.find('.menus').slideToggle();
        return false;
    });
</script>