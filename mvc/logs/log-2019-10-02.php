<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-02 10:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Posts.php 653
ERROR - 2019-10-02 10:10:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Posts.php 653
ERROR - 2019-10-02 10:10:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Posts.php 653
ERROR - 2019-10-02 10:10:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Posts.php 897
ERROR - 2019-10-02 10:11:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Posts.php 270
ERROR - 2019-10-02 10:11:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 204
ERROR - 2019-10-02 10:11:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 206
ERROR - 2019-10-02 10:11:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 212
ERROR - 2019-10-02 10:11:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 213
ERROR - 2019-10-02 10:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 204
ERROR - 2019-10-02 10:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 206
ERROR - 2019-10-02 10:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 212
ERROR - 2019-10-02 10:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\pages\edit.php 213
ERROR - 2019-10-02 10:17:45 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 268
ERROR - 2019-10-02 10:18:01 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 268
ERROR - 2019-10-02 10:18:06 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 268
ERROR - 2019-10-02 10:18:10 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 268
ERROR - 2019-10-02 10:24:13 --> Severity: Notice --> Undefined variable: url C:\xampp\htdocs\limpid\mvc\controllers\Frontend.php 65
ERROR - 2019-10-02 10:29:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\libraries\Admin_Controller.php 423
ERROR - 2019-10-02 10:29:13 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\limpid\main\libraries\Email.php 1902
ERROR - 2019-10-02 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Parents.php 298
ERROR - 2019-10-02 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Parents.php 307
ERROR - 2019-10-02 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Parents.php 423
ERROR - 2019-10-02 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\controllers\Parents.php 284
ERROR - 2019-10-02 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\views\parents\getView.php 1
ERROR - 2019-10-02 10:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 337
ERROR - 2019-10-02 10:30:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 337
ERROR - 2019-10-02 10:32:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 337
ERROR - 2019-10-02 10:33:01 --> Severity: Warning --> mysqli::query(): (HY000/6): Error on delete of 'C:\xampp\tmp\#sql2cc_93_0.MAI' (Errcode: 13 &quot;Permission denied&quot;) C:\xampp\htdocs\limpid\main\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2019-10-02 10:33:01 --> Query error: Error on delete of 'C:\xampp\tmp\#sql2cc_93_0.MAI' (Errcode: 13 "Permission denied") - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2019-10-02 10:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\limpid\mvc\helpers\action_helper.php 337
ERROR - 2019-10-02 10:40:32 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\site_helper.php 68
ERROR - 2019-10-02 10:41:55 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\site_helper.php 68
ERROR - 2019-10-02 10:44:12 --> Severity: error --> Exception: Call to undefined function apiCurl() C:\xampp\htdocs\limpid\mvc\helpers\site_helper.php 68
