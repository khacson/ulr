$(function(){
	
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
var App = function () {
	// IE mode
	var isRTL = false;
}