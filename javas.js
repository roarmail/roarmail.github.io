$('.vote').on('click', function(){
	$('.overlay').fadeIn();
	$('.popup').fadeIn();
});
$('.popup_close').on('click', function(){
	$('.popup').fadeOut();
	$('.overlay').fadeOut();
});

$('.overlay').on('click', function(){
	if (!$(event.target).closest('.popup').length) {
		$('.popup').fadeOut();
		$('.overlay').fadeOut();
	}
});

const inputs = document.getElementsByClassName('popup-form__input');


function SweetAlert() {
	for (const input of inputs) {
		if (input.value < 1) return swal ('Упс','Пожалуйста введите недостующие данные','error');
	}
	swal('Спасибо за ваш голос!', '' , 'success');
}
