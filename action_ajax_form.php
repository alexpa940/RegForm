<?php
$filename = "reg.txt"; 
$arr = file($filename);

$filename1 = "log.txt"; 
$date = date("d.m.Y H:i:s");
$log = fopen($filename1, "a");

if (isset($_POST["name"]) && isset($_POST["secname"]) && isset($_POST["useremail"]) && isset($_POST["userpass"])) { 

    foreach($arr as $line) {
        $data = explode("::",$line);
        $temp[] = $data[3];
      }  
     
    if(in_array($_POST['useremail'], $temp)) {
 
       
        $result = array(
            'msg' => "Этот e-mail уже используется!",
            'status' => "error" 
        );

        fwrite($log, $date."  error\r\n");
        fclose($log);
    }
    else {
   
            $fd = fopen($filename, "a");
            $str = $_POST['name']."::".
            $_POST['secname']."::".
            $_POST['userpass']."::".
            $_POST['useremail']."::"."\r\n";
        
        
            fwrite($fd,$str);
            fclose($fd);

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