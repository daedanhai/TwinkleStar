<!--고객센터 상단 TAB-->
<div class="center-tabs-wrap sub-fixed-top">
    <ul class="center-tabs">
        <li <? if($pageName == 'notice') echo "class=\"on\""?>>
            <a href="../pages/notice.php" >공지사항</a>
        </li>
        <li <? if($pageName == 'faq') echo "class=\"on\""?>>
            <a href="../pages/faq.php">자주하는 질문</a>
        </li>
    </ul>
</div>