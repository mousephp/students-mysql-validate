// https://www.formget.com/jquery-login-form/
// talkerscode.com/webtricks/ajax-login-form-using-jquery-php-and-mysql.php
// phpflow.com/php/simple-php-login-system-using-mysql-jquery-ajax/




$(document).ready(function(){

	$('#txtfrom').submit(function() {
		//e.preventDefault();
		var tendangnhap = $('#tendangnhap').val();
		var password = $('#password').val();

		$(".error").remove();

		if (tendangnhap.length < 1 ) {
			$('#tendangnhap').after('<span class="error" style="color:red;">Tên đăng nhập không được trống</span>');
			$('#loidangnhap').after('<h5 class="error" style="color:red;text-align:center;">Lỗi đăng nhập</h5>');
			$('#tendangnhap').css("border","2px solid red");
			return false;
		}else{
			var regEx = /^[0-9a-z]+$/;
			var validTen = regEx.test(tendangnhap);
			$('#tendangnhap').css("border","1px solid #CCCCCC");
			if (!validTen) {
				$('#tendangnhap').after('<span class="error" style="color:red;">Tên đăng nhập không đúng định dạng</span>');
				$('#loidangnhap').after('<h5 class="error" style="color:red;text-align:center;">Lỗi đăng nhập</h5>');
				$('input[type="text"]').css("border","2px solid red");
				return false;
			}
		}

		if (password.length < 1 ) {
			$('#password').after('<span class="error" style="color:red;">Mật khẩu không được trống</span>');
			$('#loidangnhap').after('<h5 class="error" style="color:red;text-align:center;">Lỗi đăng nhập</h5>');
			$('#password').css("border","2px solid red");
			return false;
		}else if(password.length < 8 || password.length > 50){
			$('#password').after('<span class="error" style="color:red;">Mật khẩu không được < 8 || > 50</span>');
			$('#loidangnhap').after('<h5 class="error" style="color:red;text-align:center;">Lỗi đăng nhập</h5>');
			return false;
		}

		if(password.length >= 8 || password.length <= 50){
			$('#password').css("border","1px solid #CCCCCC");
		}

	});
});







$(document).ready(function(){
// 	$("#btnsubmit").click(function(){
// 		var tendangnhap = $('#tendangnhap').val();
// 		var password = $('#password').val();
// // Checking for blank fields.
// if( tendangnhap =='' || password ==''){
// 	$('input[type="text"],input[type="password"]').css("border","2px solid red");
// 	$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
// 	alert("Please fill all fields...!!!!!!");
// }else {
// 	$.post("sql_log.php",{ tendangnhap: tendangnhap, password:password},
// 		function(data) {
// 			if(data=='1') {
// 				$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
// 				$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
// 				alert(data);
// 			}else if(data=='2'){
// 				$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
// 				alert(data);
// 			} else if(data=='3'){
// 				$("form")[0].reset();
// 				$('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
// 				alert(data);
// 			} else{
// 				alert(data);
// 			}
// 		});
// }
// });
});







$(document).ready(function(){

 	// $('form[id="txtfrom"]').validate({
 	// 	rules: {
 	// 		tendangnhap: {
 	// 			required: true,
 	// 			email: true,
 	// 		},
 	// 		password: {
 	// 			required: true,
 	// 			minlength: 8,
 	// 			maxlength:50,
 	// 		}
 	// 	},
 	// 	messages: {

 	// 		tendangnhap: 'Enter a valid email',
 	// 		password: {
 	// 			minlength: 'Password must be at least 8 characters long'
 	// 		}
 	// 	},
 	// 	submitHandler: function(form) {
 	// 		form.submit();
 	// 	}
 	// });

 });


