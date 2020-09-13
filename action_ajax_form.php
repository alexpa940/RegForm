<?php

mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'admin', '', 'testbd');
} catch (mysqli_sql_exception $e) {
    $result = array(
            'msg' => "Ошибка подключения к БД",
            'status' => "error" 
        );
		echo json_encode($result); 
		die;
}


$filename1 = "log.txt"; 
$date = date("d.m.Y H:i:s");
$log = fopen($filename1, "a+");

if (isset($_POST["name"]) && isset($_POST["secname"]) && isset($_POST["useremail"]) && isset($_POST["userpass"])) { 

	$name = $_POST['name'];
    $secname = $_POST['secname'];
    $userpass = $_POST['userpass'];
    $useremail = $_POST['useremail'];
	 
	$tmp = $mysqli -> query("SELECT `useremail` FROM `users` WHERE `useremail` = '$useremail'");
	 
	 
	 
    if($tmp -> num_rows > 0) {
 
        $result = array(
            'msg' => "Этот e-mail уже используется!",
            'status' => "error" 
        );

        fwrite($log, $date."  error\r\n");
        fclose($log);
    }
    else {
   
        
			$mysqli->query("INSERT INTO `users`(`name`, `secname`, `useremail`, `userpass`) VALUES ( '$name','$secname','$useremail','$userpass')");

			
            $result = array(
            'msg' => "Вы успешно зарегестрировались!",
            'status' => "success" 
        );

        
        fwrite($log, $date."  success\r\n");
        fclose($log);
        }

    echo json_encode($result); 
}

?>
