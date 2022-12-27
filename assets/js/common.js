//set cookie
function setCookie( name, value, expiredays ) { 
    var todayDate = new Date();
    todayDate.setDate( todayDate.getDate() + expiredays );
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
/*오픈 모달*/
function openModal(t){
	let target = t;
	const body = $('body'),
		modal = $('.modal-container'),
		targetModal = modal.attr('data-modal', target);
		
	body.addClass('no-scroll');
	targetModal.addClass('on');
}
/*클로즈 모달*/
function closeModal(t){
	let target = t;
	const body = $('body'),
		modal = $('.modal-container'),
		targetModal = modal.attr('data-modal', target);
	if(modal.length <= 1){
		body.removeClass('no-scroll');
	}
	targetModal.removeClass('on');
}
/*오늘 하루 안보기 클로즈 모달*/
function todayCloseModal(t){
    setCookie("todayModal", "done", 1);
	let target = t;
	const body = $('body'),
		modal = $('.modal-container'),
		targetModal = modal.attr('data-modal', target);
	
	if(modal.length <= 1){
		body.removeClass('no-scroll');
	}
	targetModal.removeClass('on');
}

$(document).ready(function(){
    //아코디언 메뉴
    $('.am-title-button').click(function(){
        $(this).parent('li').toggleClass('on');
        $(this).siblings('.am-contents-wrap').slideToggle();
        return false;
    });
	//커스텀 인풋 keyup시 delete 키 보여짐
	$('.input-wrap > .input').on('keyup',(e)=>{
		let target = e.target;
		if(!target.value == 0){
			$(target).parents('.input-wrap').addClass('on');
		} else {
			$(target).parents('.input-wrap').removeClass('on');
		}
		return false;
	});
	//커스텀 인풋 delete 버튼 클릭시
	$('.input-wrap > .btn-input-delete').on('click',(e)=>{
		let target = e.target;
		$(target).siblings('.input').val('');
		$(target).parents('.input-wrap').removeClass('on');
		return false;
	});
	//체크박스 allcheck 기능
	$('#allcheck_input').on('click',(e)=>{
		const target = e.target;
		if($(target).prop('checked')){
			//true
			$('input[name="booking_chk"]').each((index, item) => {
				$(item).prop("checked", true);
			});
		} else {
			//false
			$('input[name="booking_chk"]').each((index, item) => {
				$(item).prop("checked", false);
			});
		}
	});
	//체크박스 하나라도 다를 경우 allcheck 풀림
	$('.chk-group-wrap input[type="checkbox"]').on('change',()=>{
		const inputs = $('.chk-group-wrap input[type="checkbox"]'),
			  inputsChked = $('.chk-group-wrap input[type="checkbox"]:checked');
		if(inputs.length != inputsChked.length){
			$('#allcheck_input').prop("checked",false);
		}
	});
	//모달 black bg 클릭시 모달 닫힘 처리
	$('.modal-container').on('click',(e)=>{
		if ( e.target == e.currentTarget) {
			closeModal(e.target);
		}
	});

});