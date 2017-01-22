<?php
require "connect_db.php";
?>
<html>
<head>
<title>Register + jQuery Valid</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/jquery.min.js"></script>
<body>
<br><h2>Register</h2>
<form action="" method="post" name="form_name" id="form_name">
	<label for="name">Логін: <span></span></label><br>
	<input name="name" id="name" type="text" size="30" value="">
	<table border="0" width="655px">
		<tbody><tr>
			<td valign="bottom" width="33%">
				<label for="password_new">Пароль: <span></span></label><br>
				<input name="password_new" id="password_new" type="password" size="30" value="">
			</td>
			<td valign="bottom">
				<label for="password_new_check">Повторно введіть пароль: <span></span></label><br>
				<input name="password_new_check" id="password_new_check" type="password" size="30" value="">
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">E-mail: <span></span></label><br>
				<input name="email" id="email" type="text" size="30">
			</td>
		</tr>
	</tbody></table>
<p><input id="reset_btn" type="submit" name="reset_btn"  value="Повернутись"> 
<input id="register_btn" type="submit" name="register_btn"  value="Зареєструватись"></p>
</form>
<script>
$(document).ready(function(){
	$("#name").change(function(){
	$("#register_btn").validate();
});
  $("#form_name").validate({
    focusInvalid: false,
    focusCleanup: true,
    rules: {
      name: {
           required: true,
           validName: true,
           minlength: 3,
           maxlength: 25,
		   remote: {
		      url: "check_name.php",
		      type: "post"
		   }
      },
      password_new: {
           minlength: 4,
           required: true
      },
      password_new_check: {
           required: true,
           equalTo: "#password_new"
      },
      email: {
           required: true,
           email: true
      },
     
    },
    messages: {
      name: {
        required: "Введіть імя користувача",
        validName: "Символи !@#$%^&*()+=-[]\\\';,./{}|\":<>? та пробіли заборонені. Лише латинка!",
        minlength: "Мінімум 3 символа ",
        maxlength: "Максимум 25 символів ",
        remote: "Таке імя існує"
      },
      password_new: {
        minlength: "Мінімум 4 символа ",
        required: "Введіть пароль "
      },
      password_new_check: {
        required: "Повторно введіть пароль ",
        equalTo: "Пароль неправильний"
      },
      email: {
        required: "Введіть емейл адресу",
        email: "Введіте корректну емейл адресу"
      },
    },
    errorPlacement: function(error, element) {
      error.appendTo( element.parent().find("label[for='" + element.attr("name") + "']").find("span") );
    },
	success: function(label) {
	  label.html("&nbsp;").addClass("checked");
	}
  });
});

});
</script>



<?php 
if (isset($_POST['register_btn']))	{
	$id = $mysqli->insert_id;
	$name = $_POST['name'];
	$password = $_POST['password_new'];
	$email = $_POST['email'];
	$sql = "INSERT INTO `reg` (`id`, `name`, `password`, `email`) VALUES ('$id', '$name', '$password', '$email')";
		if ($mysqli->query($sql) === TRUE) {
			echo "Register  successfully";
			header('Location: indexok.php');
			exit;
		} 
		else {
			echo "Error register: " . $mysqli->error;
		}
}
if (isset($_POST['reset_btn']))	{
	//header('Location: indexok.php');
	exit;
}
?>



<!-- 
<script type="text/javascript">

$(document).ready(function(){
  $.validator.addMethod('validName', function (value) {
      var result = true;
      var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?"+"абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ"+" ";
      for (var i = 0; i < value.length; i++) {
          if (iChars.indexOf(value.charAt(i)) != -1) {
              return false;
          }
      }
      return result;
  }, '');

  $("#form_name").validate({
    focusInvalid: false,
    focusCleanup: true,
    rules: {
      name: {
           required: true,
           validName: true,
           minlength: 3,
           maxlength: 25,
		   remote: {
		      url: "check_name.php",
		      type: "post"
		   }
      },
      password_new: {
           minlength: 4,
           required: true
      },
      password_new_check: {
           required: true,
           equalTo: "#password_new"
      },
      email: {
           required: true,
           email: true
      },
     
    },
    messages: {
      name: {
        required: "Введіть імя користувача",
        validName: "Символи !@#$%^&*()+=-[]\\\';,./{}|\":<>? та пробіли заборонені. Лише латинка!",
        minlength: "Мінімум 3 символа ",
        maxlength: "Максимум 25 символів ",
        remote: "Таке імя існує"
      },
      password_new: {
        minlength: "Мінімум 4 символа ",
        required: "Введіть пароль "
      },
      password_new_check: {
        required: "Повторно введіть пароль ",
        equalTo: "Пароль неправильний"
      },
      email: {
        required: "Введіть емейл адресу",
        email: "Введіте корректну емейл адресу"
      },
    },
    errorPlacement: function(error, element) {
      error.appendTo( element.parent().find("label[for='" + element.attr("name") + "']").find("span") );
    },
	success: function(label) {
	  label.html("&nbsp;").addClass("checked");
	}
  });
});
</script>
-->
</head>
</body>
</html>