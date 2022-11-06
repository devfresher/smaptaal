<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-03 11:59:50 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\site_helper.php 68
ERROR - 2019-10-03 12:01:32 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\limpid\main\libraries\Email.php 1902
ERROR - 2019-10-03 12:11:05 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\limpid\main\libraries\Email.php 1902
ERROR - 2019-10-03 12:13:03 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\limpid\main\libraries\Email.php 1902
ERROR - 2019-10-03 13:01:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 1080
ERROR - 2019-10-03 13:04:34 --> Severity: Warning --> mysqli::query(): (HY000/6): Error on delete of 'C:\xampp\tmp\#sql3450_1e2_0.MAD' (Errcode: 13 &quot;Permission denied&quot;) C:\xampp\htdocs\limpid\main\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2019-10-03 13:04:34 --> Query error: Error on delete of 'C:\xampp\tmp\#sql3450_1e2_0.MAD' (Errcode: 13 "Permission denied") - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
