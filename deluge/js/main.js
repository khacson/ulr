$(function(){
	 $("#intro-carousel").owlCarousel({
		autoplay: true,
		dots: false,
		loop: true,
		animateOut: 'fadeOut',
		items: 1
	  }); 
 });
 function handleSelect2(){
	if (jQuery().select2) {
		$('.select2me').select2({
			placeholder: "Select item",
			allowClear: true,
			selectOnClose: true
		});
	}
}