<?php
// Token สำหรับใช้ส่ง line notify 
$token = "jzfUyU6EYwwWyWnk2CdVihw5WVfwIa79ZwpCLI2BAXL";
// login line notify at https://notify-api.line.me
// get token from https://notify-bot.line.me/my/



// ส่ง line notify
$res = notify_message($token, $message);
/*
ตัวอย่างแบบอื่นๆ
for($i=1;$i<=3;$i++){
   $res = notify_message($token_me, $message.$i);
}
*/
//$res = notify_message($token_me, $message, null);
//$res = notify_message($token_me, $message);

var_dump($res);
?>