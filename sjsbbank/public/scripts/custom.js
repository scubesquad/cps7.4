$(document).ready(function(){
	$('body').on('keyup', '.countMaxLength', function(){
		let maxValue = $(this).attr('maxlength');
		let inputValue = $(this).val();
		maxValue = parseInt(maxValue)
		if(inputValue.length < maxValue){
			$(this).next().html(`(${maxValue - inputValue.length} character remaining outof ${maxValue})`)
		}else{
			$(this).next().html(`(${maxValue - inputValue.length} character remaining outof ${maxValue})`)
		}
	});

	$('body').on('blur', '.countMaxLength', function(){
		$(this).closest('td').find('.reaingCountEntry').remove()
	});

	$('body').on('focus', '.countMaxLength', function(){
		let maxValue = $(this).attr('maxlength');
		let inputValue = $(this).val();
		maxValue = parseInt(maxValue)
		$(this).closest('td').append(`<span class="reaingCountEntry">(${maxValue - inputValue.length} character remaining outof ${maxValue})</span>`)
	});


	$('.txtOnlyCharacter').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Only Character allowed');
        return false;
        }
    });

    $('.txtOnlyNumber').keypress(function (e) {
        var regex = new RegExp("^[0-9]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Only numbers allowed');
        return false;
        }
    });
})