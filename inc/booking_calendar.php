<?
/******************************
예약 달력
******************************/
/********** 입력값 **********/
$year            = ( $_GET['toYear'] )? $_GET['toYear'] : date( "Y" );
$month            = ( $_GET['toMonth'] )? $_GET['toMonth'] : date( "m" );
$doms            = array( "월", "화", "수", "목", "금", "토", "일" );
/********** 계산값 **********/
$mktime            = mktime( 0, 0, 0, $month, 1, $year );      // 입력된 값으로 년-월-01을 만든다
$days            = date( "t", $mktime );                        // 현재의 year와 month로 현재 달의 일수 구해오기
$startDay        = date('w', $mktime) == 0 ? 7 : date('w', $mktime);                        // 시작요일 알아내기
// 지난달 일수 구하기
$prevDayCount    = date( "t", mktime( 0, 0, 0, $month, 0, $year ) ) - $startDay + 1;
$nowDayCount    = 1;                                            // 이번달 일자 카운팅
$nextDayCount    = 1;                                          // 다음달 일자 카운팅
// 이전, 다음 만들기
$prevYear        = ( $month == 1 )? ( $year - 1 ) : $year;
$prevMonth        = ( $month == 1 )? 12 : ( $month - 1 );
$nextYear        = ( $month == 12 )? ( $year + 1 ) : $year;
$nextMonth        = ( $month == 12 )? 1 : ( $month + 1 );
// 출력행 계산
$setRows = ceil( ( $startDay + $days ) / 7 );
?>



<div class="booking-system-container">
    <!--날짜선택-->
    <div class="booking-calendar-wrap booking-ui">
        <h6>예약일자 선택</h6>
        <div class="selected-date">
            <span class="tt">선택하신 날짜</span>
            <span class="date">2002년 11월 17일 금요일</span>
        </div>
        <!--년/월 선택-->
        <div class="bc-ym-wrap">
            <a class="prev" href="?toYear=<?=$prevYear?>&toMonth=<?=$prevMonth?>">이전 달</a>
            <p><?=$year?>.<?=$month?></p>
            <a class="next" href="?toYear=<?=$nextYear?>&toMonth=<?=$nextMonth?>">다음 달</a>
        </div>
        <!---------- 달력 출력 ---------->
        <ul class="bc-calendar">
            <li class="row">
                <? for( $i = 0; $i < count( $doms ); $i++ ) { ?>
                <div class="col">
                    <p class="day"><?=$doms[$i]?></p>
                </div>
                <? } ?>
            </li>
            <? for( $rows = 0; $rows < $setRows; $rows++ ) { ?>
            <li>
                <?
                for( $cols = 1; $cols <= 7; $cols++ )
                {
                    // 셀 인덱스 만들자
                    $cellIndex    = ( 7 * $rows ) + $cols;
                    ?>
                    <?
                    // 이번달이라면
                    if ( $startDay <= $cellIndex && $nowDayCount <= $days ) { ?>
                    <div class="col">
                        <!--토요일-->
                        <? if ( date( "w", mktime( 0, 0, 0, $month, $nowDayCount, $year ) ) == 6 ) { ?>
                        <button class="active"><?=$nowDayCount++?></button>
                        <!--일요일-->
                        <? } else if ( date( "w", mktime( 0, 0, 0, $month, $nowDayCount, $year ) ) == 0 ) { ?>
                        <button><?=$nowDayCount++?></button>
                            
                        <? } else { ?>
                        <button><?=$nowDayCount++?></button>
                        <? } ?>
                    </div>
                
                    <?
                    // 이전달이라면
                    } else if ( $cellIndex < $startDay ) { ?>
                    <div class="col">
                        <button disabled='disabled'><?=++$prevDayCount?></button>
                    </div>
                
                    <?
                    // 다음달 이라면
                    } else if ( $cellIndex >= $days ) { ?>
                    <div class="col" >
                        <button disabled='disabled'><?=$nextDayCount++?></button>
                    </div>
                    <? }
                }
                ?>
            </li>
            <? } ?>
        </ul>
        
    </div>
    <!--시간선택-->
    <div class="booking-time-wrap booking-ui">
        <h6>시간 선택</h6>
        <div class="bt-btns-wrap am">
            <p>오전</p>
            <ul class="bt-btns">
                <li><button disabled="disabled">00:00</button></li>
                <li><button class="active">01:00</button></li>
                <li><button>02:00</button></li>
                <li><button>03:00</button></li>
                <li><button>04:00</button></li>
                <li><button>05:00</button></li>
                <li><button>06:00</button></li>
                <li><button>07:00</button></li>
                <li><button>08:00</button></li>
                <li><button>09:00</button></li>
                <li><button>10:00</button></li>
                <li><button>11:00</button></li>
            </ul>
        </div>
        <div class="bt-btns-wrap pm">
            <p>오후</p>
            <ul class="bt-btns">
                <li><button>12:00</button></li>
                <li><button>13:00</button></li>
                <li><button>14:00</button></li>
                <li><button>15:00</button></li>
                <li><button>16:00</button></li>
                <li><button>17:00</button></li>
                <li><button>18:00</button></li>
                <li><button>19:00</button></li>
                <li><button>20:00</button></li>
                <li><button>21:00</button></li>
                <li><button>22:00</button></li>
                <li><button>23:00</button></li>
            </ul>
        </div>
    </div>

</div>
