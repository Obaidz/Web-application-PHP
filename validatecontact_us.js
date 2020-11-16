$("#mybutton").prop("disabled", true);
var boolName = false;
var boolEmail = false;
var boolPhone = false;
var boolComment = false;

$("#contName").on('input',function(){
    var name = $(this).val();//take input
    if(name.length < 1 || name.length > 20){
		$('.name_error').text('The field above is required, Max 20 characters Min 1 character').show();
		boolName = false;
    }
    else{
		console.log('showing else 1');
		$('.name_error').hide();
		var testExp = new RegExp(/^([a-zA-Z])+$/);//grab only characters and numbers
		if(!testExp.test(name)){
			$('.name_error').text('Must be no special characters e.g*&^%@').show();//show error.
			boolName = false;
		}
		else{
			boolName = true;
			$('.name_error').hide();
		}
	}
	if(boolName == true && boolEmail == true && boolPhone == true && boolComment == true){
		$("#mybutton").removeAttr('disabled');
	}
});

$("#contEmail").on('input',function(){
	var myemail = $(this).val();//take input
		
	if(myemail.length < 1 || myemail.length > 30){
		$('.email_error').text('The field above is required, Max 30 characters Min 1 character before the special character @').show();//show error.
		boolEmail = false;
	}
	else{
		$('.email_error').hide();
		var testExp = new RegExp(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/);//grab only characters and numbers
		if(!testExp.test(myemail)){
			$('.email_error').text('Must be a valid email e.g James@gmail.com').show();//show error.
			boolEmail = false;
		}
		else{
			boolEmail = true;
			$('.email_error').hide();
		}
	}
	if(boolName == true && boolEmail == true && boolPhone == true && boolComment == true){
		$("#mybutton").removeAttr('disabled');
	}
});

$("#contNumber").on('input',function(){
    var phone = $(this).val();//take input
    if(phone.length != 10){
		$('.number_error').text('Enter a valid phone number (10 digits)').show();
		boolPhone = false;
    }
    else{
		console.log('showing phone');
		$('.number_error').hide();
		var testExp = new RegExp(/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/);//grab only numbers
		if(!testExp.test(phone)){
			$('.number_error').text('Enter a valid phone number (10 digits)').show();//show error.
			boolPhone = false;
		}
		else{
			boolPhone = true;
			$('.number_error').hide();
		}
	}
	if(boolName == true && boolEmail == true && boolPhone == true && boolComment == true){
		$("#mybutton").removeAttr('disabled');
	}
});

$("#contMessage").on('input',function(){
    var mymessage = $(this).val();//take input
    if(mymessage.length < 1 || mymessage.length > 20){
		$('.message_error').text('The field above is required, Max 20 characters Min 1 character').show();
		boolComment = false;
    }
    else{
		boolComment = true;
		$('.message_error').hide();
	}
	if(boolName == true && boolEmail == true && boolPhone == true && boolComment == true){
		$("#mybutton").removeAttr('disabled');
	}
});