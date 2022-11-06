<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-01 15:14:52 --> Severity: Warning --> mysqli::query(): (HY000/1036): Table 'C:\xampp\tmp\#sql194c_225_0.MAI' is read only C:\xampp\htdocs\limpid\main\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2019-10-01 15:14:52 --> Query error: Table 'C:\xampp\tmp\#sql194c_225_0.MAI' is read only - Invalid query: SELECT DISTINCT *
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
ERROR - 2019-10-01 15:28:05 --> Severity: Warning --> mysqli::query(): (HY000/6): Error on delete of 'C:\xampp\tmp\#sql194c_22f_0.MAI' (Errcode: 13 &quot;Permission denied&quot;) C:\xampp\htdocs\limpid\main\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2019-10-01 15:28:05 --> Query error: Error on delete of 'C:\xampp\tmp\#sql194c_22f_0.MAI' (Errcode: 13 "Permission denied") - Invalid query: SELECT DISTINCT *
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
ERROR - 2019-10-01 15:48:39 --> 404 Page Not Found: Signin/gradient_bg.png
ERROR - 2019-10-01 15:49:22 --> 404 Page Not Found: Signin/.assets
ERROR - 2019-10-01 15:49:22 --> 404 Page Not Found: Signin/..assets
ERROR - 2019-10-01 15:49:46 --> 404 Page Not Found: Signin/img_tree.png
