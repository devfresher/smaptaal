<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-06 01:17:14 --> Could not find the language line "slno"
ERROR - 2021-03-06 01:17:14 --> Could not find the language line "parents_photo"
ERROR - 2021-03-06 01:17:14 --> Could not find the language line "parents_name"
ERROR - 2021-03-06 01:17:14 --> Could not find the language line "parents_email"
ERROR - 2021-03-06 01:17:14 --> Could not find the language line "parents_status"
ERROR - 2021-03-06 01:47:54 --> Query error: Table 'bomzsffr_creative.e_learn' doesn't exist - Invalid query: insert into e_learn values( '','1','11','1','my web','Empty a table in a database','https://www.youtube.com/embed/QXKnKBFvkSU?controls=1')
ERROR - 2021-03-06 01:47:54 --> Severity: Notice --> Undefined variable: usertypeID /home/bomzsffr/creative.smaaptal.net/mvc/views/elearn/index.php 130
ERROR - 2021-03-06 02:58:34 --> Query error: Table 'bomzsffr_creative.e_learn' doesn't exist - Invalid query: SELECT `e_learn`.`id`, `e_learn`.`youtube_url`, `e_learn`.`topic`, `e_learn`.`sub_topic`, `e_learn`.`subject_id`, `e_learn`.`term`, `e_learn`.`classes_id`, `subject`.`subject`
FROM `e_learn`
JOIN `subject` ON `subject`.`subjectID`=`e_learn`.`subject_id`
WHERE `e_learn`.`term` = '1'
AND `e_learn`.`subject_id` = '1'
ERROR - 2021-03-06 02:58:34 --> Severity: error --> Exception: Call to a member function result() on boolean /home/bomzsffr/creative.smaaptal.net/mvc/models/Elearn_m.php 77
ERROR - 2021-03-06 02:59:49 --> Query error: Table 'bomzsffr_creative.e_learn' doesn't exist - Invalid query: insert into e_learn values( '','1','11','1','my web','Empty a table in a database','https://www.youtube.com/embed/QXKnKBFvkSU?controls=1')
ERROR - 2021-03-06 02:59:49 --> Severity: Notice --> Undefined variable: usertypeID /home/bomzsffr/creative.smaaptal.net/mvc/views/elearn/index.php 130
