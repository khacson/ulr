main: function (){	
	getDataFrom: function (cls){	
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
	},
	checPhone: function (txtPhone){
		var a = document.getElementById(txtPhone).value;
		var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
		if (filter.test(a)) {
			return true;
		}
		else {
			return false;
		}
	},
	checEmail: function (email){
		var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		var valid = emailReg.test(email);

		if(!valid) {
			return false;
		} else {
			return true;
		}
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