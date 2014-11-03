<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$name = clean($name);
	$surname = clean($surname);
	$email = clean($email);
	$message = clean($message);

	if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
	    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

	    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000) && $email_validate) {
	        echo "Спасибо за сообщение";
	    } else {
	        echo "Введенные данные некорректные";
	    }
	} else {
	    echo "Заполните пустые поля";
	}
} else {
	header("Location: ../index.php");
}