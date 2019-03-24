main = function (){	
	getDataFrom = function (cls){	
		var objReq = {};
		$("." + cls).each(function(i) {
			var id = $(this).attr('id');
			var val = $(this).val();
			val = val.replace(/['"]/g, '');
			if(id != undefined){ 
				objReq[id] = val;
			}
		});
		return JSON.stringify(objReq);
	}
}

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