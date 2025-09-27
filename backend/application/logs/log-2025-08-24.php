<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-08-24 19:10:55 --> Config Class Initialized
INFO - 2025-08-24 19:10:55 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:10:56 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:10:56 --> Utf8 Class Initialized
INFO - 2025-08-24 19:10:57 --> URI Class Initialized
INFO - 2025-08-24 19:10:57 --> Router Class Initialized
INFO - 2025-08-24 19:10:58 --> Output Class Initialized
INFO - 2025-08-24 19:10:58 --> Security Class Initialized
DEBUG - 2025-08-24 19:10:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:10:58 --> Input Class Initialized
INFO - 2025-08-24 19:10:59 --> Language Class Initialized
ERROR - 2025-08-24 19:10:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:00 --> Loader Class Initialized
INFO - 2025-08-24 19:11:00 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:05 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:11:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Connection refused /var/www/html/checklistv2/api/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-08-24 19:11:06 --> Unable to connect to the database
INFO - 2025-08-24 19:11:07 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:07 --> Controller Class Initialized
INFO - 2025-08-24 19:11:07 --> Model "User_model" initialized
ERROR - 2025-08-24 19:11:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Connection refused /var/www/html/checklistv2/api/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-08-24 19:11:07 --> Unable to connect to the database
ERROR - 2025-08-24 19:11:07 --> Query error: Connection refused - Invalid query: SELECT user.id as user_id, user.team_id,user.board_id,team.team_name,user.access_role,CONCAT(user.first_name,' ',user.last_name) as full_name, user.user_name, user.first_name,user.email, team.team_name from users as user INNER JOIN teams as team ON user.team_id = team.id where user_name='abanerjee2' AND pass_word='ff3b4087708b73f7945fbc3f961ffd60'
ERROR - 2025-08-24 19:11:07 --> Severity: error --> Exception: Call to a member function result_array() on false /var/www/html/checklistv2/api/application/models/User_model.php 120
ERROR - 2025-08-24 19:11:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/system/core/Common.php 571
INFO - 2025-08-24 19:11:32 --> Config Class Initialized
INFO - 2025-08-24 19:11:32 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:11:32 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:32 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:32 --> URI Class Initialized
INFO - 2025-08-24 19:11:32 --> Router Class Initialized
INFO - 2025-08-24 19:11:32 --> Output Class Initialized
INFO - 2025-08-24 19:11:33 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:33 --> Input Class Initialized
INFO - 2025-08-24 19:11:33 --> Language Class Initialized
ERROR - 2025-08-24 19:11:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:33 --> Loader Class Initialized
INFO - 2025-08-24 19:11:33 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:34 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:35 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:35 --> Controller Class Initialized
INFO - 2025-08-24 19:11:35 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:37 --> Final output sent to browser
DEBUG - 2025-08-24 19:11:37 --> Total execution time: 5.2986
INFO - 2025-08-24 19:11:38 --> Config Class Initialized
INFO - 2025-08-24 19:11:38 --> Config Class Initialized
INFO - 2025-08-24 19:11:38 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:38 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:11:38 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:11:38 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:38 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:38 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:38 --> URI Class Initialized
INFO - 2025-08-24 19:11:38 --> URI Class Initialized
INFO - 2025-08-24 19:11:38 --> Router Class Initialized
INFO - 2025-08-24 19:11:38 --> Router Class Initialized
INFO - 2025-08-24 19:11:39 --> Output Class Initialized
INFO - 2025-08-24 19:11:39 --> Output Class Initialized
INFO - 2025-08-24 19:11:39 --> Security Class Initialized
INFO - 2025-08-24 19:11:39 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:11:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:39 --> Input Class Initialized
INFO - 2025-08-24 19:11:39 --> Input Class Initialized
INFO - 2025-08-24 19:11:39 --> Language Class Initialized
INFO - 2025-08-24 19:11:39 --> Language Class Initialized
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:39 --> Config Class Initialized
INFO - 2025-08-24 19:11:39 --> Loader Class Initialized
INFO - 2025-08-24 19:11:39 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:39 --> Loader Class Initialized
INFO - 2025-08-24 19:11:40 --> Helper loaded: url_helper
DEBUG - 2025-08-24 19:11:40 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:40 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:40 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:40 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:40 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:40 --> URI Class Initialized
INFO - 2025-08-24 19:11:40 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:40 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:40 --> Controller Class Initialized
INFO - 2025-08-24 19:11:40 --> Router Class Initialized
INFO - 2025-08-24 19:11:40 --> Controller Class Initialized
INFO - 2025-08-24 19:11:40 --> Output Class Initialized
INFO - 2025-08-24 19:11:40 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:40 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:40 --> Config Class Initialized
INFO - 2025-08-24 19:11:40 --> Final output sent to browser
INFO - 2025-08-24 19:11:40 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:41 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:41 --> Input Class Initialized
INFO - 2025-08-24 19:11:41 --> Final output sent to browser
DEBUG - 2025-08-24 19:11:41 --> Total execution time: 2.0964
INFO - 2025-08-24 19:11:41 --> Language Class Initialized
DEBUG - 2025-08-24 19:11:41 --> Total execution time: 2.2996
DEBUG - 2025-08-24 19:11:41 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:41 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:11:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:41 --> Config Class Initialized
INFO - 2025-08-24 19:11:41 --> URI Class Initialized
INFO - 2025-08-24 19:11:42 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:42 --> Router Class Initialized
DEBUG - 2025-08-24 19:11:42 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:11:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:11:42 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:11:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:11:42 --> Config Class Initialized
INFO - 2025-08-24 19:11:42 --> Output Class Initialized
INFO - 2025-08-24 19:11:43 --> Config Class Initialized
ERROR - 2025-08-24 19:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:43 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:43 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:43 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:11:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:43 --> Input Class Initialized
INFO - 2025-08-24 19:11:43 --> Loader Class Initialized
INFO - 2025-08-24 19:11:43 --> URI Class Initialized
INFO - 2025-08-24 19:11:43 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:43 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:43 --> Router Class Initialized
INFO - 2025-08-24 19:11:43 --> Language Class Initialized
DEBUG - 2025-08-24 19:11:43 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:43 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:43 --> URI Class Initialized
INFO - 2025-08-24 19:11:43 --> Router Class Initialized
ERROR - 2025-08-24 19:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:43 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:43 --> Output Class Initialized
INFO - 2025-08-24 19:11:43 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:11:43 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:43 --> URI Class Initialized
INFO - 2025-08-24 19:11:44 --> Output Class Initialized
INFO - 2025-08-24 19:11:44 --> Router Class Initialized
INFO - 2025-08-24 19:11:44 --> Security Class Initialized
INFO - 2025-08-24 19:11:44 --> Output Class Initialized
DEBUG - 2025-08-24 19:11:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:44 --> Security Class Initialized
INFO - 2025-08-24 19:11:44 --> Input Class Initialized
DEBUG - 2025-08-24 19:11:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:44 --> Security Class Initialized
INFO - 2025-08-24 19:11:44 --> Language Class Initialized
DEBUG - 2025-08-24 19:11:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:44 --> Controller Class Initialized
ERROR - 2025-08-24 19:11:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:45 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:45 --> Input Class Initialized
INFO - 2025-08-24 19:11:45 --> Input Class Initialized
ERROR - 2025-08-24 19:11:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:45 --> Severity: Warning --> Undefined property: stdClass::$team_id /var/www/html/checklistv2/api/application/controllers/Users.php 670
INFO - 2025-08-24 19:11:45 --> Loader Class Initialized
INFO - 2025-08-24 19:11:46 --> Language Class Initialized
INFO - 2025-08-24 19:11:46 --> Language Class Initialized
ERROR - 2025-08-24 19:11:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:46 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:46 --> Final output sent to browser
DEBUG - 2025-08-24 19:11:46 --> Total execution time: 6.2356
ERROR - 2025-08-24 19:11:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:46 --> Loader Class Initialized
INFO - 2025-08-24 19:11:47 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:11:47 --> Model "User_model" initialized
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:47 --> Controller Class Initialized
ERROR - 2025-08-24 19:11:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:47 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:47 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:47 --> Loader Class Initialized
INFO - 2025-08-24 19:11:48 --> Loader Class Initialized
INFO - 2025-08-24 19:11:48 --> Final output sent to browser
INFO - 2025-08-24 19:11:48 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:48 --> Helper loaded: url_helper
DEBUG - 2025-08-24 19:11:48 --> Total execution time: 7.5019
INFO - 2025-08-24 19:11:48 --> Config Class Initialized
INFO - 2025-08-24 19:11:48 --> Config Class Initialized
INFO - 2025-08-24 19:11:48 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:48 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:48 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:49 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:49 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:11:49 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:11:49 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:49 --> Controller Class Initialized
INFO - 2025-08-24 19:11:49 --> Controller Class Initialized
INFO - 2025-08-24 19:11:49 --> Controller Class Initialized
INFO - 2025-08-24 19:11:49 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:49 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:49 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:49 --> URI Class Initialized
INFO - 2025-08-24 19:11:50 --> Router Class Initialized
INFO - 2025-08-24 19:11:50 --> Final output sent to browser
INFO - 2025-08-24 19:11:50 --> Final output sent to browser
INFO - 2025-08-24 19:11:50 --> Final output sent to browser
DEBUG - 2025-08-24 19:11:50 --> Total execution time: 8.0894
DEBUG - 2025-08-24 19:11:50 --> Total execution time: 8.1055
DEBUG - 2025-08-24 19:11:50 --> Total execution time: 8.1049
INFO - 2025-08-24 19:11:50 --> URI Class Initialized
INFO - 2025-08-24 19:11:50 --> Config Class Initialized
INFO - 2025-08-24 19:11:50 --> Config Class Initialized
INFO - 2025-08-24 19:11:50 --> Output Class Initialized
INFO - 2025-08-24 19:11:51 --> Security Class Initialized
INFO - 2025-08-24 19:11:51 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:51 --> Router Class Initialized
INFO - 2025-08-24 19:11:51 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:51 --> Output Class Initialized
DEBUG - 2025-08-24 19:11:51 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:51 --> Config Class Initialized
DEBUG - 2025-08-24 19:11:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:11:51 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:51 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:51 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:51 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:51 --> Input Class Initialized
INFO - 2025-08-24 19:11:51 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:51 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:51 --> URI Class Initialized
INFO - 2025-08-24 19:11:51 --> URI Class Initialized
INFO - 2025-08-24 19:11:51 --> Language Class Initialized
DEBUG - 2025-08-24 19:11:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:52 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:52 --> URI Class Initialized
INFO - 2025-08-24 19:11:52 --> Router Class Initialized
ERROR - 2025-08-24 19:11:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:52 --> Router Class Initialized
INFO - 2025-08-24 19:11:52 --> Router Class Initialized
ERROR - 2025-08-24 19:11:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:11:53 --> Input Class Initialized
INFO - 2025-08-24 19:11:53 --> Output Class Initialized
INFO - 2025-08-24 19:11:53 --> Output Class Initialized
INFO - 2025-08-24 19:11:53 --> Output Class Initialized
ERROR - 2025-08-24 19:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:53 --> Security Class Initialized
INFO - 2025-08-24 19:11:53 --> Language Class Initialized
INFO - 2025-08-24 19:11:53 --> Security Class Initialized
INFO - 2025-08-24 19:11:53 --> Security Class Initialized
DEBUG - 2025-08-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
DEBUG - 2025-08-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:11:53 --> Loader Class Initialized
INFO - 2025-08-24 19:11:53 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:53 --> Input Class Initialized
ERROR - 2025-08-24 19:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:11:53 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:53 --> Input Class Initialized
INFO - 2025-08-24 19:11:53 --> Language Class Initialized
INFO - 2025-08-24 19:11:53 --> Input Class Initialized
INFO - 2025-08-24 19:11:54 --> Language Class Initialized
INFO - 2025-08-24 19:11:54 --> Model "User_model" initialized
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:11:54 --> Language Class Initialized
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:54 --> Controller Class Initialized
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:11:54 --> Model "User_model" initialized
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:11:54 --> Loader Class Initialized
ERROR - 2025-08-24 19:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Undefined property: stdClass::$team_id /var/www/html/checklistv2/api/application/controllers/Users.php 670
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:11:55 --> Final output sent to browser
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:55 --> Helper loaded: url_helper
DEBUG - 2025-08-24 19:11:55 --> Total execution time: 6.7059
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:11:55 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:55 --> Loader Class Initialized
INFO - 2025-08-24 19:11:55 --> Loader Class Initialized
INFO - 2025-08-24 19:11:55 --> Loader Class Initialized
INFO - 2025-08-24 19:11:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:56 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:11:56 --> Config Class Initialized
INFO - 2025-08-24 19:11:56 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:56 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:57 --> Controller Class Initialized
INFO - 2025-08-24 19:11:57 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:57 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:11:57 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:57 --> Controller Class Initialized
INFO - 2025-08-24 19:11:57 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:57 --> Database Driver Class Initialized
INFO - 2025-08-24 19:11:57 --> Controller Class Initialized
INFO - 2025-08-24 19:11:57 --> Final output sent to browser
INFO - 2025-08-24 19:11:58 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:58 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:11:58 --> Total execution time: 7.2005
INFO - 2025-08-24 19:11:58 --> Final output sent to browser
INFO - 2025-08-24 19:11:58 --> URI Class Initialized
DEBUG - 2025-08-24 19:11:58 --> Total execution time: 7.0227
INFO - 2025-08-24 19:11:58 --> Final output sent to browser
INFO - 2025-08-24 19:11:58 --> Model "User_model" initialized
INFO - 2025-08-24 19:11:58 --> Config Class Initialized
INFO - 2025-08-24 19:11:58 --> Router Class Initialized
DEBUG - 2025-08-24 19:11:58 --> Total execution time: 9.4081
INFO - 2025-08-24 19:11:58 --> Controller Class Initialized
INFO - 2025-08-24 19:11:58 --> Config Class Initialized
INFO - 2025-08-24 19:11:59 --> Config Class Initialized
INFO - 2025-08-24 19:11:59 --> Hooks Class Initialized
INFO - 2025-08-24 19:11:59 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:11:59 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:11:59 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:11:59 --> Utf8 Class Initialized
INFO - 2025-08-24 19:11:59 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:00 --> URI Class Initialized
INFO - 2025-08-24 19:12:00 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:00 --> Output Class Initialized
INFO - 2025-08-24 19:12:00 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:00 --> Security Class Initialized
INFO - 2025-08-24 19:12:00 --> Router Class Initialized
DEBUG - 2025-08-24 19:12:00 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:00 --> URI Class Initialized
INFO - 2025-08-24 19:12:01 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:01 --> Router Class Initialized
INFO - 2025-08-24 19:12:01 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:01 --> Output Class Initialized
INFO - 2025-08-24 19:12:01 --> URI Class Initialized
INFO - 2025-08-24 19:12:01 --> Output Class Initialized
INFO - 2025-08-24 19:12:02 --> Router Class Initialized
INFO - 2025-08-24 19:12:02 --> Security Class Initialized
INFO - 2025-08-24 19:12:02 --> Security Class Initialized
INFO - 2025-08-24 19:12:02 --> Input Class Initialized
DEBUG - 2025-08-24 19:12:02 --> Total execution time: 9.8528
INFO - 2025-08-24 19:12:02 --> Output Class Initialized
DEBUG - 2025-08-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:03 --> Language Class Initialized
DEBUG - 2025-08-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:03 --> Security Class Initialized
INFO - 2025-08-24 19:12:03 --> Input Class Initialized
DEBUG - 2025-08-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:03 --> Language Class Initialized
ERROR - 2025-08-24 19:12:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:03 --> Input Class Initialized
ERROR - 2025-08-24 19:12:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:04 --> Input Class Initialized
INFO - 2025-08-24 19:12:04 --> Config Class Initialized
ERROR - 2025-08-24 19:12:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:04 --> Hooks Class Initialized
ERROR - 2025-08-24 19:12:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:12:04 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:12:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:05 --> Language Class Initialized
INFO - 2025-08-24 19:12:05 --> Language Class Initialized
ERROR - 2025-08-24 19:12:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:05 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:12:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:12:05 --> URI Class Initialized
ERROR - 2025-08-24 19:12:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:06 --> Loader Class Initialized
ERROR - 2025-08-24 19:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:06 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:06 --> Router Class Initialized
ERROR - 2025-08-24 19:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:06 --> Loader Class Initialized
ERROR - 2025-08-24 19:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:06 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:12:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:08 --> Output Class Initialized
ERROR - 2025-08-24 19:12:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:08 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:08 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:08 --> Loader Class Initialized
INFO - 2025-08-24 19:12:08 --> Security Class Initialized
INFO - 2025-08-24 19:12:08 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:08 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:08 --> Loader Class Initialized
DEBUG - 2025-08-24 19:12:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:09 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:09 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:09 --> Input Class Initialized
INFO - 2025-08-24 19:12:09 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:09 --> Language Class Initialized
INFO - 2025-08-24 19:12:09 --> Model "User_model" initialized
ERROR - 2025-08-24 19:12:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:10 --> Controller Class Initialized
INFO - 2025-08-24 19:12:10 --> Model "User_model" initialized
ERROR - 2025-08-24 19:12:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:10 --> Controller Class Initialized
INFO - 2025-08-24 19:12:10 --> Controller Class Initialized
INFO - 2025-08-24 19:12:10 --> Final output sent to browser
INFO - 2025-08-24 19:12:10 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:10 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:10 --> Model "User_model" initialized
ERROR - 2025-08-24 19:12:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:12:10 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:12:10 --> Total execution time: 11.7406
INFO - 2025-08-24 19:12:10 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:10 --> Total execution time: 11.7388
INFO - 2025-08-24 19:12:10 --> Final output sent to browser
INFO - 2025-08-24 19:12:10 --> Controller Class Initialized
ERROR - 2025-08-24 19:12:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:11 --> Config Class Initialized
DEBUG - 2025-08-24 19:12:11 --> Total execution time: 14.4840
INFO - 2025-08-24 19:12:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:11 --> Loader Class Initialized
INFO - 2025-08-24 19:12:11 --> Final output sent to browser
INFO - 2025-08-24 19:12:11 --> Config Class Initialized
INFO - 2025-08-24 19:12:11 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:11 --> Helper loaded: url_helper
DEBUG - 2025-08-24 19:12:11 --> Total execution time: 12.2868
INFO - 2025-08-24 19:12:11 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:12 --> Config Class Initialized
DEBUG - 2025-08-24 19:12:12 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:12:12 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:12 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:12 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:12 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:12 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:12 --> URI Class Initialized
INFO - 2025-08-24 19:12:12 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:12 --> URI Class Initialized
INFO - 2025-08-24 19:12:12 --> Config Class Initialized
DEBUG - 2025-08-24 19:12:12 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:13 --> Router Class Initialized
INFO - 2025-08-24 19:12:13 --> Router Class Initialized
INFO - 2025-08-24 19:12:13 --> Controller Class Initialized
INFO - 2025-08-24 19:12:13 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:13 --> Output Class Initialized
INFO - 2025-08-24 19:12:13 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:12:13 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:13 --> URI Class Initialized
INFO - 2025-08-24 19:12:13 --> Output Class Initialized
INFO - 2025-08-24 19:12:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:13 --> Security Class Initialized
INFO - 2025-08-24 19:12:13 --> Router Class Initialized
INFO - 2025-08-24 19:12:13 --> Security Class Initialized
INFO - 2025-08-24 19:12:13 --> Final output sent to browser
INFO - 2025-08-24 19:12:13 --> Output Class Initialized
INFO - 2025-08-24 19:12:13 --> URI Class Initialized
DEBUG - 2025-08-24 19:12:13 --> Total execution time: 9.6796
DEBUG - 2025-08-24 19:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:12:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:13 --> Security Class Initialized
INFO - 2025-08-24 19:12:13 --> Input Class Initialized
INFO - 2025-08-24 19:12:13 --> Input Class Initialized
INFO - 2025-08-24 19:12:13 --> Router Class Initialized
INFO - 2025-08-24 19:12:14 --> Language Class Initialized
DEBUG - 2025-08-24 19:12:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:14 --> Language Class Initialized
INFO - 2025-08-24 19:12:14 --> Output Class Initialized
INFO - 2025-08-24 19:12:14 --> Config Class Initialized
INFO - 2025-08-24 19:12:14 --> Security Class Initialized
INFO - 2025-08-24 19:12:14 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:12:14 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:14 --> Input Class Initialized
INFO - 2025-08-24 19:12:14 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:14 --> Language Class Initialized
INFO - 2025-08-24 19:12:14 --> Input Class Initialized
INFO - 2025-08-24 19:12:15 --> URI Class Initialized
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:15 --> Router Class Initialized
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:15 --> Language Class Initialized
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:16 --> Loader Class Initialized
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:16 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:12:16 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:16 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:16 --> Loader Class Initialized
INFO - 2025-08-24 19:12:17 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:17 --> Output Class Initialized
INFO - 2025-08-24 19:12:17 --> Controller Class Initialized
ERROR - 2025-08-24 19:12:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:17 --> Loader Class Initialized
INFO - 2025-08-24 19:12:17 --> Security Class Initialized
INFO - 2025-08-24 19:12:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:17 --> Loader Class Initialized
INFO - 2025-08-24 19:12:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:18 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:18 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:18 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:12:18 --> Total execution time: 6.3977
INFO - 2025-08-24 19:12:18 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:18 --> Input Class Initialized
INFO - 2025-08-24 19:12:18 --> Controller Class Initialized
INFO - 2025-08-24 19:12:18 --> Language Class Initialized
INFO - 2025-08-24 19:12:18 --> Model "User_model" initialized
ERROR - 2025-08-24 19:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:12:18 --> Final output sent to browser
INFO - 2025-08-24 19:12:18 --> Controller Class Initialized
ERROR - 2025-08-24 19:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:12:19 --> Helper loaded: url_helper
DEBUG - 2025-08-24 19:12:19 --> Total execution time: 7.4761
ERROR - 2025-08-24 19:12:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:12:19 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:19 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:19 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:19 --> Final output sent to browser
ERROR - 2025-08-24 19:12:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:19 --> Loader Class Initialized
INFO - 2025-08-24 19:12:19 --> Controller Class Initialized
DEBUG - 2025-08-24 19:12:19 --> Total execution time: 7.7947
INFO - 2025-08-24 19:12:19 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:19 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:19 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:19 --> Total execution time: 8.9578
INFO - 2025-08-24 19:12:19 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:20 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:20 --> Controller Class Initialized
INFO - 2025-08-24 19:12:20 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:20 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:20 --> Total execution time: 6.0329
INFO - 2025-08-24 19:12:23 --> Config Class Initialized
INFO - 2025-08-24 19:12:23 --> Config Class Initialized
INFO - 2025-08-24 19:12:23 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:23 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:12:23 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:23 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:23 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:23 --> URI Class Initialized
INFO - 2025-08-24 19:12:23 --> URI Class Initialized
INFO - 2025-08-24 19:12:23 --> Router Class Initialized
INFO - 2025-08-24 19:12:23 --> Router Class Initialized
INFO - 2025-08-24 19:12:23 --> Output Class Initialized
INFO - 2025-08-24 19:12:23 --> Output Class Initialized
INFO - 2025-08-24 19:12:23 --> Security Class Initialized
INFO - 2025-08-24 19:12:23 --> Security Class Initialized
DEBUG - 2025-08-24 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:12:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:23 --> Input Class Initialized
INFO - 2025-08-24 19:12:23 --> Input Class Initialized
INFO - 2025-08-24 19:12:24 --> Language Class Initialized
INFO - 2025-08-24 19:12:24 --> Language Class Initialized
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:24 --> Loader Class Initialized
INFO - 2025-08-24 19:12:24 --> Loader Class Initialized
INFO - 2025-08-24 19:12:24 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:24 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:24 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:24 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:24 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:24 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:24 --> Controller Class Initialized
INFO - 2025-08-24 19:12:24 --> Controller Class Initialized
INFO - 2025-08-24 19:12:24 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:24 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:24 --> Final output sent to browser
INFO - 2025-08-24 19:12:24 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:24 --> Total execution time: 1.3669
DEBUG - 2025-08-24 19:12:24 --> Total execution time: 1.3758
INFO - 2025-08-24 19:12:53 --> Config Class Initialized
INFO - 2025-08-24 19:12:53 --> Config Class Initialized
INFO - 2025-08-24 19:12:54 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:54 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:12:54 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:12:54 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:54 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:54 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:54 --> URI Class Initialized
INFO - 2025-08-24 19:12:54 --> URI Class Initialized
INFO - 2025-08-24 19:12:55 --> Router Class Initialized
INFO - 2025-08-24 19:12:55 --> Router Class Initialized
INFO - 2025-08-24 19:12:55 --> Output Class Initialized
INFO - 2025-08-24 19:12:55 --> Output Class Initialized
INFO - 2025-08-24 19:12:55 --> Security Class Initialized
INFO - 2025-08-24 19:12:55 --> Security Class Initialized
DEBUG - 2025-08-24 19:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:12:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:12:56 --> Input Class Initialized
INFO - 2025-08-24 19:12:56 --> Input Class Initialized
INFO - 2025-08-24 19:12:56 --> Language Class Initialized
INFO - 2025-08-24 19:12:56 --> Language Class Initialized
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:12:57 --> Loader Class Initialized
INFO - 2025-08-24 19:12:57 --> Loader Class Initialized
INFO - 2025-08-24 19:12:57 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:57 --> Helper loaded: url_helper
INFO - 2025-08-24 19:12:57 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:57 --> Database Driver Class Initialized
INFO - 2025-08-24 19:12:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:58 --> Controller Class Initialized
INFO - 2025-08-24 19:12:58 --> Controller Class Initialized
INFO - 2025-08-24 19:12:58 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:58 --> Model "User_model" initialized
INFO - 2025-08-24 19:12:58 --> Final output sent to browser
INFO - 2025-08-24 19:12:58 --> Final output sent to browser
DEBUG - 2025-08-24 19:12:58 --> Total execution time: 5.0158
DEBUG - 2025-08-24 19:12:58 --> Total execution time: 5.0262
INFO - 2025-08-24 19:12:59 --> Config Class Initialized
INFO - 2025-08-24 19:12:59 --> Config Class Initialized
INFO - 2025-08-24 19:12:59 --> Hooks Class Initialized
INFO - 2025-08-24 19:12:59 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:12:59 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:12:59 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:12:59 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:59 --> Utf8 Class Initialized
INFO - 2025-08-24 19:12:59 --> URI Class Initialized
INFO - 2025-08-24 19:12:59 --> URI Class Initialized
INFO - 2025-08-24 19:12:59 --> Router Class Initialized
INFO - 2025-08-24 19:12:59 --> Router Class Initialized
INFO - 2025-08-24 19:13:00 --> Output Class Initialized
INFO - 2025-08-24 19:13:00 --> Output Class Initialized
INFO - 2025-08-24 19:13:00 --> Security Class Initialized
INFO - 2025-08-24 19:13:00 --> Security Class Initialized
DEBUG - 2025-08-24 19:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:13:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:00 --> Input Class Initialized
INFO - 2025-08-24 19:13:00 --> Config Class Initialized
INFO - 2025-08-24 19:13:01 --> Config Class Initialized
INFO - 2025-08-24 19:13:01 --> Language Class Initialized
INFO - 2025-08-24 19:13:01 --> Hooks Class Initialized
ERROR - 2025-08-24 19:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:13:01 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:01 --> Input Class Initialized
DEBUG - 2025-08-24 19:13:01 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:13:01 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:13:02 --> Language Class Initialized
ERROR - 2025-08-24 19:13:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:13:02 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:02 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:13:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:13:02 --> URI Class Initialized
ERROR - 2025-08-24 19:13:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:13:02 --> URI Class Initialized
INFO - 2025-08-24 19:13:03 --> Router Class Initialized
ERROR - 2025-08-24 19:13:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:13:03 --> Loader Class Initialized
INFO - 2025-08-24 19:13:03 --> Router Class Initialized
ERROR - 2025-08-24 19:13:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:13:04 --> Output Class Initialized
INFO - 2025-08-24 19:13:04 --> Loader Class Initialized
INFO - 2025-08-24 19:13:04 --> Output Class Initialized
INFO - 2025-08-24 19:13:04 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:04 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:04 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:04 --> Security Class Initialized
INFO - 2025-08-24 19:13:04 --> Security Class Initialized
DEBUG - 2025-08-24 19:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:04 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:04 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:05 --> Input Class Initialized
INFO - 2025-08-24 19:13:05 --> Input Class Initialized
INFO - 2025-08-24 19:13:05 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:05 --> Controller Class Initialized
INFO - 2025-08-24 19:13:05 --> Language Class Initialized
INFO - 2025-08-24 19:13:05 --> Language Class Initialized
INFO - 2025-08-24 19:13:05 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:05 --> Controller Class Initialized
ERROR - 2025-08-24 19:13:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:13:06 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:06 --> Final output sent to browser
ERROR - 2025-08-24 19:13:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:13:06 --> Final output sent to browser
DEBUG - 2025-08-24 19:13:06 --> Total execution time: 7.3154
ERROR - 2025-08-24 19:13:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:13:10 --> Total execution time: 7.4101
ERROR - 2025-08-24 19:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:13:11 --> Loader Class Initialized
INFO - 2025-08-24 19:13:11 --> Loader Class Initialized
INFO - 2025-08-24 19:13:11 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:11 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:11 --> Controller Class Initialized
INFO - 2025-08-24 19:13:11 --> Controller Class Initialized
INFO - 2025-08-24 19:13:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:11 --> Final output sent to browser
INFO - 2025-08-24 19:13:11 --> Final output sent to browser
DEBUG - 2025-08-24 19:13:12 --> Total execution time: 10.8130
DEBUG - 2025-08-24 19:13:12 --> Total execution time: 11.5440
INFO - 2025-08-24 19:13:13 --> Config Class Initialized
INFO - 2025-08-24 19:13:13 --> Config Class Initialized
INFO - 2025-08-24 19:13:13 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:13 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:13:13 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:13:13 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:13:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:13 --> URI Class Initialized
INFO - 2025-08-24 19:13:13 --> URI Class Initialized
INFO - 2025-08-24 19:13:13 --> Router Class Initialized
INFO - 2025-08-24 19:13:13 --> Router Class Initialized
INFO - 2025-08-24 19:13:14 --> Output Class Initialized
INFO - 2025-08-24 19:13:14 --> Output Class Initialized
INFO - 2025-08-24 19:13:14 --> Security Class Initialized
INFO - 2025-08-24 19:13:14 --> Security Class Initialized
DEBUG - 2025-08-24 19:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:13:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:14 --> Input Class Initialized
INFO - 2025-08-24 19:13:14 --> Input Class Initialized
INFO - 2025-08-24 19:13:14 --> Language Class Initialized
INFO - 2025-08-24 19:13:14 --> Language Class Initialized
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:13:14 --> Loader Class Initialized
INFO - 2025-08-24 19:13:14 --> Loader Class Initialized
INFO - 2025-08-24 19:13:15 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:15 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:15 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:15 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:15 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:15 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:15 --> Controller Class Initialized
INFO - 2025-08-24 19:13:15 --> Controller Class Initialized
INFO - 2025-08-24 19:13:15 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:15 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:15 --> Final output sent to browser
DEBUG - 2025-08-24 19:13:15 --> Total execution time: 2.0597
INFO - 2025-08-24 19:13:15 --> Final output sent to browser
DEBUG - 2025-08-24 19:13:15 --> Total execution time: 2.0674
INFO - 2025-08-24 19:13:55 --> Config Class Initialized
INFO - 2025-08-24 19:13:55 --> Config Class Initialized
INFO - 2025-08-24 19:13:55 --> Config Class Initialized
INFO - 2025-08-24 19:13:55 --> Config Class Initialized
INFO - 2025-08-24 19:13:55 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:55 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:55 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:56 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:13:56 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:13:56 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:13:56 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:13:56 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:56 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:13:56 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:13:56 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:56 --> URI Class Initialized
INFO - 2025-08-24 19:13:56 --> Utf8 Class Initialized
INFO - 2025-08-24 19:13:56 --> URI Class Initialized
INFO - 2025-08-24 19:13:56 --> URI Class Initialized
INFO - 2025-08-24 19:13:56 --> URI Class Initialized
INFO - 2025-08-24 19:13:56 --> Router Class Initialized
INFO - 2025-08-24 19:13:56 --> Router Class Initialized
INFO - 2025-08-24 19:13:56 --> Output Class Initialized
INFO - 2025-08-24 19:13:56 --> Router Class Initialized
INFO - 2025-08-24 19:13:56 --> Router Class Initialized
INFO - 2025-08-24 19:13:57 --> Output Class Initialized
INFO - 2025-08-24 19:13:57 --> Output Class Initialized
INFO - 2025-08-24 19:13:57 --> Config Class Initialized
INFO - 2025-08-24 19:13:57 --> Security Class Initialized
INFO - 2025-08-24 19:13:57 --> Output Class Initialized
INFO - 2025-08-24 19:13:57 --> Security Class Initialized
INFO - 2025-08-24 19:13:57 --> Hooks Class Initialized
INFO - 2025-08-24 19:13:57 --> Security Class Initialized
INFO - 2025-08-24 19:13:57 --> Security Class Initialized
DEBUG - 2025-08-24 19:13:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:13:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:57 --> Input Class Initialized
INFO - 2025-08-24 19:13:57 --> Input Class Initialized
DEBUG - 2025-08-24 19:13:57 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:13:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:13:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:57 --> Input Class Initialized
INFO - 2025-08-24 19:13:57 --> Language Class Initialized
INFO - 2025-08-24 19:13:57 --> Language Class Initialized
INFO - 2025-08-24 19:13:57 --> Input Class Initialized
INFO - 2025-08-24 19:13:58 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:13:58 --> URI Class Initialized
INFO - 2025-08-24 19:13:58 --> Router Class Initialized
INFO - 2025-08-24 19:13:58 --> Language Class Initialized
INFO - 2025-08-24 19:13:58 --> Language Class Initialized
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:13:58 --> Output Class Initialized
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:13:58 --> Security Class Initialized
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:13:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
DEBUG - 2025-08-24 19:13:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:13:58 --> Loader Class Initialized
INFO - 2025-08-24 19:13:59 --> Input Class Initialized
INFO - 2025-08-24 19:13:59 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:59 --> Loader Class Initialized
INFO - 2025-08-24 19:13:59 --> Loader Class Initialized
INFO - 2025-08-24 19:13:59 --> Loader Class Initialized
INFO - 2025-08-24 19:13:59 --> Language Class Initialized
INFO - 2025-08-24 19:13:59 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:59 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:59 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:59 --> Helper loaded: url_helper
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:59 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:59 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:13:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:13:59 --> Database Driver Class Initialized
INFO - 2025-08-24 19:13:59 --> Controller Class Initialized
ERROR - 2025-08-24 19:13:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
ERROR - 2025-08-24 19:13:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:59 --> Controller Class Initialized
INFO - 2025-08-24 19:13:59 --> Controller Class Initialized
INFO - 2025-08-24 19:13:59 --> Controller Class Initialized
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
ERROR - 2025-08-24 19:13:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:13:59 --> Final output sent to browser
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
INFO - 2025-08-24 19:13:59 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:00 --> Total execution time: 4.2721
INFO - 2025-08-24 19:14:00 --> Final output sent to browser
INFO - 2025-08-24 19:14:00 --> Loader Class Initialized
INFO - 2025-08-24 19:14:00 --> Final output sent to browser
INFO - 2025-08-24 19:14:00 --> Final output sent to browser
INFO - 2025-08-24 19:14:00 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:00 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:14:00 --> Total execution time: 4.4605
INFO - 2025-08-24 19:14:00 --> Config Class Initialized
DEBUG - 2025-08-24 19:14:00 --> Total execution time: 4.1258
DEBUG - 2025-08-24 19:14:00 --> Total execution time: 4.4647
INFO - 2025-08-24 19:14:00 --> Config Class Initialized
INFO - 2025-08-24 19:14:00 --> Config Class Initialized
INFO - 2025-08-24 19:14:00 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:00 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:00 --> Config Class Initialized
INFO - 2025-08-24 19:14:00 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:00 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:14:00 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:00 --> Controller Class Initialized
DEBUG - 2025-08-24 19:14:00 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:00 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:14:00 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:01 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:01 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:01 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:01 --> Final output sent to browser
DEBUG - 2025-08-24 19:14:01 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:01 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:01 --> URI Class Initialized
INFO - 2025-08-24 19:14:01 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:01 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:01 --> Total execution time: 4.0822
INFO - 2025-08-24 19:14:01 --> URI Class Initialized
INFO - 2025-08-24 19:14:02 --> URI Class Initialized
INFO - 2025-08-24 19:14:02 --> Router Class Initialized
INFO - 2025-08-24 19:14:02 --> Router Class Initialized
INFO - 2025-08-24 19:14:02 --> Router Class Initialized
INFO - 2025-08-24 19:14:02 --> Router Class Initialized
INFO - 2025-08-24 19:14:02 --> Output Class Initialized
INFO - 2025-08-24 19:14:02 --> Output Class Initialized
INFO - 2025-08-24 19:14:02 --> Output Class Initialized
INFO - 2025-08-24 19:14:02 --> Security Class Initialized
INFO - 2025-08-24 19:14:02 --> Config Class Initialized
INFO - 2025-08-24 19:14:02 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:14:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:03 --> Input Class Initialized
INFO - 2025-08-24 19:14:03 --> Input Class Initialized
INFO - 2025-08-24 19:14:03 --> Language Class Initialized
INFO - 2025-08-24 19:14:03 --> Language Class Initialized
ERROR - 2025-08-24 19:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:03 --> Output Class Initialized
INFO - 2025-08-24 19:14:03 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:03 --> Security Class Initialized
ERROR - 2025-08-24 19:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:14:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:04 --> Input Class Initialized
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:04 --> Language Class Initialized
INFO - 2025-08-24 19:14:04 --> Loader Class Initialized
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:04 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:04 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:04 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:14:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:04 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:04 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:05 --> Input Class Initialized
INFO - 2025-08-24 19:14:05 --> Loader Class Initialized
INFO - 2025-08-24 19:14:05 --> URI Class Initialized
INFO - 2025-08-24 19:14:05 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:05 --> Loader Class Initialized
INFO - 2025-08-24 19:14:05 --> Controller Class Initialized
INFO - 2025-08-24 19:14:05 --> Language Class Initialized
INFO - 2025-08-24 19:14:05 --> Router Class Initialized
INFO - 2025-08-24 19:14:05 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:05 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:05 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:05 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:05 --> Output Class Initialized
ERROR - 2025-08-24 19:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:05 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:05 --> Final output sent to browser
ERROR - 2025-08-24 19:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:05 --> Security Class Initialized
INFO - 2025-08-24 19:14:05 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:05 --> Total execution time: 5.1528
INFO - 2025-08-24 19:14:05 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:06 --> Config Class Initialized
INFO - 2025-08-24 19:14:06 --> Controller Class Initialized
INFO - 2025-08-24 19:14:06 --> Controller Class Initialized
INFO - 2025-08-24 19:14:06 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:06 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:06 --> Final output sent to browser
INFO - 2025-08-24 19:14:06 --> Final output sent to browser
DEBUG - 2025-08-24 19:14:06 --> Total execution time: 6.1690
DEBUG - 2025-08-24 19:14:06 --> Total execution time: 5.9861
INFO - 2025-08-24 19:14:07 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:07 --> Loader Class Initialized
DEBUG - 2025-08-24 19:14:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:07 --> Input Class Initialized
INFO - 2025-08-24 19:14:07 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:07 --> Language Class Initialized
INFO - 2025-08-24 19:14:08 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:14:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:08 --> Config Class Initialized
INFO - 2025-08-24 19:14:08 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:08 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:08 --> Config Class Initialized
ERROR - 2025-08-24 19:14:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:08 --> Controller Class Initialized
INFO - 2025-08-24 19:14:08 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:08 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:08 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:08 --> URI Class Initialized
INFO - 2025-08-24 19:14:08 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:08 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:14:08 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:14:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:08 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:08 --> Final output sent to browser
INFO - 2025-08-24 19:14:08 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:08 --> Router Class Initialized
INFO - 2025-08-24 19:14:08 --> Loader Class Initialized
INFO - 2025-08-24 19:14:08 --> URI Class Initialized
INFO - 2025-08-24 19:14:08 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:08 --> Total execution time: 8.0790
INFO - 2025-08-24 19:14:08 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:08 --> Output Class Initialized
INFO - 2025-08-24 19:14:09 --> Router Class Initialized
INFO - 2025-08-24 19:14:09 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:09 --> Security Class Initialized
INFO - 2025-08-24 19:14:09 --> Router Class Initialized
INFO - 2025-08-24 19:14:09 --> Config Class Initialized
INFO - 2025-08-24 19:14:09 --> Output Class Initialized
INFO - 2025-08-24 19:14:09 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:09 --> Output Class Initialized
INFO - 2025-08-24 19:14:09 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:09 --> Controller Class Initialized
INFO - 2025-08-24 19:14:09 --> Security Class Initialized
INFO - 2025-08-24 19:14:09 --> Input Class Initialized
INFO - 2025-08-24 19:14:09 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:09 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:09 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:09 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:14:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:09 --> URI Class Initialized
INFO - 2025-08-24 19:14:09 --> Input Class Initialized
INFO - 2025-08-24 19:14:09 --> Router Class Initialized
INFO - 2025-08-24 19:14:10 --> Language Class Initialized
INFO - 2025-08-24 19:14:10 --> Output Class Initialized
ERROR - 2025-08-24 19:14:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
DEBUG - 2025-08-24 19:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:10 --> Security Class Initialized
INFO - 2025-08-24 19:14:10 --> Language Class Initialized
ERROR - 2025-08-24 19:14:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:10 --> Final output sent to browser
ERROR - 2025-08-24 19:14:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:14:10 --> Total execution time: 7.4797
ERROR - 2025-08-24 19:14:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:10 --> Config Class Initialized
INFO - 2025-08-24 19:14:10 --> Loader Class Initialized
INFO - 2025-08-24 19:14:11 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:14:11 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:11 --> Input Class Initialized
INFO - 2025-08-24 19:14:11 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:14:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:11 --> Utf8 Class Initialized
ERROR - 2025-08-24 19:14:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:11 --> Input Class Initialized
INFO - 2025-08-24 19:14:11 --> Language Class Initialized
INFO - 2025-08-24 19:14:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:11 --> URI Class Initialized
INFO - 2025-08-24 19:14:11 --> Language Class Initialized
ERROR - 2025-08-24 19:14:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:12 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:12 --> Router Class Initialized
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:12 --> Loader Class Initialized
INFO - 2025-08-24 19:14:12 --> Controller Class Initialized
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:12 --> Output Class Initialized
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:12 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:12 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:12 --> Security Class Initialized
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:12 --> Final output sent to browser
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
DEBUG - 2025-08-24 19:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:12 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:14:13 --> Total execution time: 5.2724
INFO - 2025-08-24 19:14:13 --> Input Class Initialized
INFO - 2025-08-24 19:14:13 --> Loader Class Initialized
INFO - 2025-08-24 19:14:13 --> Loader Class Initialized
INFO - 2025-08-24 19:14:13 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:13 --> Config Class Initialized
INFO - 2025-08-24 19:14:13 --> Language Class Initialized
INFO - 2025-08-24 19:14:13 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:13 --> Controller Class Initialized
INFO - 2025-08-24 19:14:13 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:13 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:13 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:13 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:14:13 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:13 --> Final output sent to browser
ERROR - 2025-08-24 19:14:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:13 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:13 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:14:13 --> Total execution time: 7.5961
INFO - 2025-08-24 19:14:13 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:13 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:14 --> Controller Class Initialized
INFO - 2025-08-24 19:14:14 --> Config Class Initialized
INFO - 2025-08-24 19:14:14 --> Controller Class Initialized
ERROR - 2025-08-24 19:14:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:14 --> URI Class Initialized
INFO - 2025-08-24 19:14:14 --> Router Class Initialized
INFO - 2025-08-24 19:14:14 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:14 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:14 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:14 --> Final output sent to browser
INFO - 2025-08-24 19:14:14 --> Final output sent to browser
INFO - 2025-08-24 19:14:14 --> Loader Class Initialized
INFO - 2025-08-24 19:14:14 --> Output Class Initialized
DEBUG - 2025-08-24 19:14:14 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:14 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:14 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:14 --> Total execution time: 6.6303
DEBUG - 2025-08-24 19:14:14 --> Total execution time: 5.3227
INFO - 2025-08-24 19:14:14 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:14 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:14 --> Config Class Initialized
INFO - 2025-08-24 19:14:14 --> Config Class Initialized
INFO - 2025-08-24 19:14:15 --> Router Class Initialized
INFO - 2025-08-24 19:14:15 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:15 --> Input Class Initialized
INFO - 2025-08-24 19:14:15 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:15 --> Language Class Initialized
INFO - 2025-08-24 19:14:15 --> Controller Class Initialized
ERROR - 2025-08-24 19:14:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:15 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:15 --> Final output sent to browser
INFO - 2025-08-24 19:14:15 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:15 --> Hooks Class Initialized
ERROR - 2025-08-24 19:14:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:14:16 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:16 --> Output Class Initialized
ERROR - 2025-08-24 19:14:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:16 --> Security Class Initialized
INFO - 2025-08-24 19:14:16 --> Loader Class Initialized
DEBUG - 2025-08-24 19:14:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:16 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:16 --> Input Class Initialized
INFO - 2025-08-24 19:14:16 --> Language Class Initialized
DEBUG - 2025-08-24 19:14:16 --> Total execution time: 5.0117
DEBUG - 2025-08-24 19:14:16 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:17 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:17 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:17 --> URI Class Initialized
ERROR - 2025-08-24 19:14:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:17 --> URI Class Initialized
ERROR - 2025-08-24 19:14:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:17 --> Router Class Initialized
INFO - 2025-08-24 19:14:17 --> Router Class Initialized
INFO - 2025-08-24 19:14:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:17 --> Config Class Initialized
INFO - 2025-08-24 19:14:17 --> Hooks Class Initialized
ERROR - 2025-08-24 19:14:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:17 --> Controller Class Initialized
INFO - 2025-08-24 19:14:17 --> Output Class Initialized
INFO - 2025-08-24 19:14:17 --> Output Class Initialized
INFO - 2025-08-24 19:14:17 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:17 --> Security Class Initialized
INFO - 2025-08-24 19:14:17 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:18 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:18 --> Loader Class Initialized
INFO - 2025-08-24 19:14:18 --> Final output sent to browser
INFO - 2025-08-24 19:14:18 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:14:18 --> Total execution time: 4.8927
INFO - 2025-08-24 19:14:18 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:18 --> Input Class Initialized
INFO - 2025-08-24 19:14:18 --> Input Class Initialized
INFO - 2025-08-24 19:14:18 --> URI Class Initialized
INFO - 2025-08-24 19:14:18 --> Router Class Initialized
INFO - 2025-08-24 19:14:18 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:18 --> Config Class Initialized
INFO - 2025-08-24 19:14:18 --> Language Class Initialized
INFO - 2025-08-24 19:14:18 --> Language Class Initialized
ERROR - 2025-08-24 19:14:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:18 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:18 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:14:18 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:14:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:19 --> Output Class Initialized
INFO - 2025-08-24 19:14:19 --> Security Class Initialized
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:19 --> Controller Class Initialized
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:19 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:19 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:19 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:19 --> Input Class Initialized
INFO - 2025-08-24 19:14:19 --> Final output sent to browser
INFO - 2025-08-24 19:14:19 --> Loader Class Initialized
INFO - 2025-08-24 19:14:19 --> Router Class Initialized
DEBUG - 2025-08-24 19:14:19 --> Total execution time: 5.3404
INFO - 2025-08-24 19:14:19 --> Loader Class Initialized
INFO - 2025-08-24 19:14:19 --> Language Class Initialized
INFO - 2025-08-24 19:14:19 --> Output Class Initialized
ERROR - 2025-08-24 19:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:19 --> Config Class Initialized
INFO - 2025-08-24 19:14:19 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:19 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:19 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:20 --> Hooks Class Initialized
ERROR - 2025-08-24 19:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:20 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:20 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:20 --> Input Class Initialized
INFO - 2025-08-24 19:14:20 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:20 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:20 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:20 --> Language Class Initialized
INFO - 2025-08-24 19:14:20 --> Controller Class Initialized
INFO - 2025-08-24 19:14:20 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:20 --> Controller Class Initialized
INFO - 2025-08-24 19:14:20 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:20 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:20 --> URI Class Initialized
ERROR - 2025-08-24 19:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:20 --> Loader Class Initialized
INFO - 2025-08-24 19:14:20 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:20 --> Final output sent to browser
ERROR - 2025-08-24 19:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:20 --> Router Class Initialized
INFO - 2025-08-24 19:14:20 --> Final output sent to browser
DEBUG - 2025-08-24 19:14:21 --> Total execution time: 5.8044
ERROR - 2025-08-24 19:14:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:14:21 --> Total execution time: 5.7933
ERROR - 2025-08-24 19:14:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:21 --> Output Class Initialized
INFO - 2025-08-24 19:14:21 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:21 --> Security Class Initialized
INFO - 2025-08-24 19:14:21 --> Loader Class Initialized
INFO - 2025-08-24 19:14:21 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:21 --> Config Class Initialized
INFO - 2025-08-24 19:14:21 --> Controller Class Initialized
DEBUG - 2025-08-24 19:14:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:22 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:22 --> Input Class Initialized
INFO - 2025-08-24 19:14:22 --> Config Class Initialized
INFO - 2025-08-24 19:14:22 --> Language Class Initialized
INFO - 2025-08-24 19:14:22 --> Hooks Class Initialized
ERROR - 2025-08-24 19:14:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
DEBUG - 2025-08-24 19:14:22 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:14:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:22 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:22 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:22 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:22 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:22 --> Final output sent to browser
INFO - 2025-08-24 19:14:23 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:23 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:14:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:23 --> Controller Class Initialized
INFO - 2025-08-24 19:14:23 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:23 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:23 --> Total execution time: 5.7109
ERROR - 2025-08-24 19:14:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:23 --> URI Class Initialized
INFO - 2025-08-24 19:14:23 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:23 --> Router Class Initialized
INFO - 2025-08-24 19:14:23 --> Config Class Initialized
INFO - 2025-08-24 19:14:23 --> Final output sent to browser
INFO - 2025-08-24 19:14:23 --> Loader Class Initialized
INFO - 2025-08-24 19:14:23 --> Output Class Initialized
INFO - 2025-08-24 19:14:23 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:23 --> Router Class Initialized
DEBUG - 2025-08-24 19:14:23 --> Total execution time: 4.8542
INFO - 2025-08-24 19:14:23 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:23 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:23 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:23 --> Output Class Initialized
DEBUG - 2025-08-24 19:14:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:24 --> Security Class Initialized
INFO - 2025-08-24 19:14:24 --> Config Class Initialized
INFO - 2025-08-24 19:14:24 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:24 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:24 --> Input Class Initialized
INFO - 2025-08-24 19:14:24 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:14:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:24 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:24 --> URI Class Initialized
INFO - 2025-08-24 19:14:24 --> Input Class Initialized
INFO - 2025-08-24 19:14:24 --> Controller Class Initialized
DEBUG - 2025-08-24 19:14:25 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:25 --> Language Class Initialized
INFO - 2025-08-24 19:14:25 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:25 --> Language Class Initialized
INFO - 2025-08-24 19:14:25 --> Router Class Initialized
ERROR - 2025-08-24 19:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:26 --> Output Class Initialized
ERROR - 2025-08-24 19:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:26 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:26 --> Final output sent to browser
INFO - 2025-08-24 19:14:26 --> Security Class Initialized
INFO - 2025-08-24 19:14:26 --> URI Class Initialized
DEBUG - 2025-08-24 19:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:14:27 --> Total execution time: 6.0557
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:27 --> Router Class Initialized
INFO - 2025-08-24 19:14:27 --> Input Class Initialized
INFO - 2025-08-24 19:14:27 --> Output Class Initialized
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:27 --> Language Class Initialized
INFO - 2025-08-24 19:14:27 --> Loader Class Initialized
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:27 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:27 --> Security Class Initialized
ERROR - 2025-08-24 19:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:27 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:27 --> Loader Class Initialized
INFO - 2025-08-24 19:14:28 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:14:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:28 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:28 --> Input Class Initialized
ERROR - 2025-08-24 19:14:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:28 --> Language Class Initialized
INFO - 2025-08-24 19:14:28 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:28 --> Controller Class Initialized
ERROR - 2025-08-24 19:14:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:14:28 --> Loader Class Initialized
INFO - 2025-08-24 19:14:28 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:28 --> Model "User_model" initialized
ERROR - 2025-08-24 19:14:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:14:28 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:28 --> Controller Class Initialized
INFO - 2025-08-24 19:14:28 --> Final output sent to browser
ERROR - 2025-08-24 19:14:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:14:28 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:28 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:14:29 --> Total execution time: 7.2276
ERROR - 2025-08-24 19:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:29 --> Final output sent to browser
INFO - 2025-08-24 19:14:29 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:29 --> Loader Class Initialized
INFO - 2025-08-24 19:14:29 --> Controller Class Initialized
DEBUG - 2025-08-24 19:14:29 --> Total execution time: 7.5756
INFO - 2025-08-24 19:14:29 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:29 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:29 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:29 --> Final output sent to browser
INFO - 2025-08-24 19:14:29 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:14:29 --> Total execution time: 6.0902
INFO - 2025-08-24 19:14:29 --> Controller Class Initialized
INFO - 2025-08-24 19:14:29 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:29 --> Final output sent to browser
DEBUG - 2025-08-24 19:14:29 --> Total execution time: 5.9334
INFO - 2025-08-24 19:14:30 --> Config Class Initialized
INFO - 2025-08-24 19:14:30 --> Config Class Initialized
INFO - 2025-08-24 19:14:30 --> Hooks Class Initialized
INFO - 2025-08-24 19:14:30 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:14:30 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:14:30 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:14:30 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:30 --> Utf8 Class Initialized
INFO - 2025-08-24 19:14:30 --> URI Class Initialized
INFO - 2025-08-24 19:14:30 --> URI Class Initialized
INFO - 2025-08-24 19:14:30 --> Router Class Initialized
INFO - 2025-08-24 19:14:30 --> Router Class Initialized
INFO - 2025-08-24 19:14:30 --> Output Class Initialized
INFO - 2025-08-24 19:14:30 --> Output Class Initialized
INFO - 2025-08-24 19:14:30 --> Security Class Initialized
INFO - 2025-08-24 19:14:30 --> Security Class Initialized
DEBUG - 2025-08-24 19:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:14:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:14:30 --> Input Class Initialized
INFO - 2025-08-24 19:14:30 --> Input Class Initialized
INFO - 2025-08-24 19:14:31 --> Language Class Initialized
INFO - 2025-08-24 19:14:31 --> Language Class Initialized
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:14:34 --> Loader Class Initialized
INFO - 2025-08-24 19:14:34 --> Loader Class Initialized
INFO - 2025-08-24 19:14:34 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:34 --> Helper loaded: url_helper
INFO - 2025-08-24 19:14:34 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:34 --> Database Driver Class Initialized
INFO - 2025-08-24 19:14:34 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:34 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:34 --> Controller Class Initialized
INFO - 2025-08-24 19:14:34 --> Controller Class Initialized
INFO - 2025-08-24 19:14:34 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:34 --> Model "User_model" initialized
INFO - 2025-08-24 19:14:35 --> Final output sent to browser
INFO - 2025-08-24 19:14:35 --> Final output sent to browser
DEBUG - 2025-08-24 19:14:35 --> Total execution time: 4.7253
DEBUG - 2025-08-24 19:14:35 --> Total execution time: 4.7234
INFO - 2025-08-24 19:21:48 --> Config Class Initialized
INFO - 2025-08-24 19:21:48 --> Config Class Initialized
INFO - 2025-08-24 19:21:48 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:48 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:21:48 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:21:48 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:49 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:49 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:49 --> URI Class Initialized
INFO - 2025-08-24 19:21:49 --> URI Class Initialized
INFO - 2025-08-24 19:21:49 --> Router Class Initialized
INFO - 2025-08-24 19:21:49 --> Router Class Initialized
INFO - 2025-08-24 19:21:49 --> Output Class Initialized
INFO - 2025-08-24 19:21:49 --> Output Class Initialized
INFO - 2025-08-24 19:21:49 --> Security Class Initialized
INFO - 2025-08-24 19:21:49 --> Security Class Initialized
DEBUG - 2025-08-24 19:21:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:21:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:49 --> Input Class Initialized
INFO - 2025-08-24 19:21:49 --> Input Class Initialized
INFO - 2025-08-24 19:21:49 --> Language Class Initialized
INFO - 2025-08-24 19:21:49 --> Language Class Initialized
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:21:50 --> Loader Class Initialized
INFO - 2025-08-24 19:21:50 --> Loader Class Initialized
INFO - 2025-08-24 19:21:51 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:51 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:51 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:51 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:51 --> Config Class Initialized
INFO - 2025-08-24 19:21:51 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:51 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:51 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:51 --> Config Class Initialized
INFO - 2025-08-24 19:21:51 --> Controller Class Initialized
DEBUG - 2025-08-24 19:21:51 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:51 --> Controller Class Initialized
INFO - 2025-08-24 19:21:51 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:51 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:51 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:21:51 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:51 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:52 --> URI Class Initialized
INFO - 2025-08-24 19:21:52 --> Final output sent to browser
INFO - 2025-08-24 19:21:52 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:52 --> Final output sent to browser
DEBUG - 2025-08-24 19:21:52 --> Total execution time: 4.7019
DEBUG - 2025-08-24 19:21:52 --> Total execution time: 4.7011
INFO - 2025-08-24 19:21:52 --> URI Class Initialized
INFO - 2025-08-24 19:21:52 --> Router Class Initialized
INFO - 2025-08-24 19:21:52 --> Config Class Initialized
INFO - 2025-08-24 19:21:52 --> Config Class Initialized
INFO - 2025-08-24 19:21:52 --> Config Class Initialized
INFO - 2025-08-24 19:21:52 --> Output Class Initialized
INFO - 2025-08-24 19:21:52 --> Router Class Initialized
INFO - 2025-08-24 19:21:52 --> Security Class Initialized
INFO - 2025-08-24 19:21:52 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:52 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:52 --> Output Class Initialized
INFO - 2025-08-24 19:21:52 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:21:52 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:21:52 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:21:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:52 --> Security Class Initialized
DEBUG - 2025-08-24 19:21:52 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:21:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:53 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:53 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:53 --> Input Class Initialized
INFO - 2025-08-24 19:21:53 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:53 --> URI Class Initialized
INFO - 2025-08-24 19:21:53 --> URI Class Initialized
INFO - 2025-08-24 19:21:53 --> Input Class Initialized
INFO - 2025-08-24 19:21:53 --> URI Class Initialized
INFO - 2025-08-24 19:21:53 --> Language Class Initialized
INFO - 2025-08-24 19:21:53 --> Router Class Initialized
INFO - 2025-08-24 19:21:53 --> Router Class Initialized
INFO - 2025-08-24 19:21:53 --> Router Class Initialized
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:21:53 --> Language Class Initialized
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:21:53 --> Output Class Initialized
INFO - 2025-08-24 19:21:53 --> Security Class Initialized
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:21:53 --> Output Class Initialized
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:21:53 --> Output Class Initialized
INFO - 2025-08-24 19:21:53 --> Security Class Initialized
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
DEBUG - 2025-08-24 19:21:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:21:54 --> Input Class Initialized
INFO - 2025-08-24 19:21:54 --> Security Class Initialized
DEBUG - 2025-08-24 19:21:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:54 --> Loader Class Initialized
INFO - 2025-08-24 19:21:54 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:54 --> Loader Class Initialized
INFO - 2025-08-24 19:21:54 --> Input Class Initialized
INFO - 2025-08-24 19:21:54 --> Language Class Initialized
DEBUG - 2025-08-24 19:21:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:54 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:54 --> Input Class Initialized
INFO - 2025-08-24 19:21:54 --> Language Class Initialized
INFO - 2025-08-24 19:21:54 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:21:54 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:54 --> Language Class Initialized
ERROR - 2025-08-24 19:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:21:55 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:55 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:55 --> Controller Class Initialized
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:21:55 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:55 --> Controller Class Initialized
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:21:55 --> Final output sent to browser
INFO - 2025-08-24 19:21:55 --> Model "User_model" initialized
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:21:55 --> Loader Class Initialized
INFO - 2025-08-24 19:21:55 --> Final output sent to browser
ERROR - 2025-08-24 19:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:21:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:56 --> Loader Class Initialized
ERROR - 2025-08-24 19:21:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:21:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:56 --> Loader Class Initialized
DEBUG - 2025-08-24 19:21:56 --> Total execution time: 4.2772
DEBUG - 2025-08-24 19:21:56 --> Total execution time: 4.9858
INFO - 2025-08-24 19:21:56 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:56 --> Config Class Initialized
INFO - 2025-08-24 19:21:56 --> Helper loaded: url_helper
INFO - 2025-08-24 19:21:56 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:56 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:56 --> Config Class Initialized
INFO - 2025-08-24 19:21:56 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:56 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:56 --> Controller Class Initialized
INFO - 2025-08-24 19:21:56 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:56 --> Controller Class Initialized
INFO - 2025-08-24 19:21:56 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:56 --> Database Driver Class Initialized
INFO - 2025-08-24 19:21:57 --> Final output sent to browser
INFO - 2025-08-24 19:21:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:57 --> Model "User_model" initialized
INFO - 2025-08-24 19:21:57 --> Controller Class Initialized
DEBUG - 2025-08-24 19:21:57 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:21:57 --> Total execution time: 4.3428
INFO - 2025-08-24 19:21:57 --> Final output sent to browser
DEBUG - 2025-08-24 19:21:57 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:57 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:21:57 --> Total execution time: 4.6804
INFO - 2025-08-24 19:21:57 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:57 --> Final output sent to browser
INFO - 2025-08-24 19:21:57 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:21:58 --> Total execution time: 5.1763
INFO - 2025-08-24 19:21:58 --> URI Class Initialized
INFO - 2025-08-24 19:21:58 --> URI Class Initialized
INFO - 2025-08-24 19:21:58 --> Router Class Initialized
INFO - 2025-08-24 19:21:58 --> Config Class Initialized
INFO - 2025-08-24 19:21:58 --> Router Class Initialized
INFO - 2025-08-24 19:21:58 --> Config Class Initialized
INFO - 2025-08-24 19:21:58 --> Output Class Initialized
INFO - 2025-08-24 19:21:58 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:58 --> Output Class Initialized
INFO - 2025-08-24 19:21:58 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:58 --> Config Class Initialized
DEBUG - 2025-08-24 19:21:58 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:58 --> Security Class Initialized
INFO - 2025-08-24 19:21:58 --> Hooks Class Initialized
INFO - 2025-08-24 19:21:58 --> Security Class Initialized
DEBUG - 2025-08-24 19:21:58 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:58 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:21:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:21:58 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:58 --> URI Class Initialized
DEBUG - 2025-08-24 19:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:21:58 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:21:59 --> Input Class Initialized
INFO - 2025-08-24 19:21:59 --> Router Class Initialized
INFO - 2025-08-24 19:21:59 --> Language Class Initialized
INFO - 2025-08-24 19:21:59 --> URI Class Initialized
INFO - 2025-08-24 19:21:59 --> Utf8 Class Initialized
INFO - 2025-08-24 19:21:59 --> Input Class Initialized
ERROR - 2025-08-24 19:21:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:21:59 --> URI Class Initialized
INFO - 2025-08-24 19:21:59 --> Output Class Initialized
INFO - 2025-08-24 19:21:59 --> Language Class Initialized
INFO - 2025-08-24 19:21:59 --> Router Class Initialized
INFO - 2025-08-24 19:21:59 --> Router Class Initialized
INFO - 2025-08-24 19:21:59 --> Security Class Initialized
ERROR - 2025-08-24 19:21:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:22:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:00 --> Output Class Initialized
INFO - 2025-08-24 19:22:00 --> Input Class Initialized
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:00 --> Output Class Initialized
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:00 --> Language Class Initialized
INFO - 2025-08-24 19:22:00 --> Loader Class Initialized
INFO - 2025-08-24 19:22:00 --> Security Class Initialized
INFO - 2025-08-24 19:22:00 --> Security Class Initialized
INFO - 2025-08-24 19:22:00 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
DEBUG - 2025-08-24 19:22:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:22:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:01 --> Input Class Initialized
INFO - 2025-08-24 19:22:01 --> Language Class Initialized
INFO - 2025-08-24 19:22:01 --> Input Class Initialized
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:01 --> Loader Class Initialized
INFO - 2025-08-24 19:22:01 --> Language Class Initialized
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:01 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:01 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:01 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:02 --> Loader Class Initialized
INFO - 2025-08-24 19:22:02 --> Controller Class Initialized
INFO - 2025-08-24 19:22:02 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:02 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:02 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:02 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:02 --> Loader Class Initialized
INFO - 2025-08-24 19:22:02 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:02 --> Final output sent to browser
INFO - 2025-08-24 19:22:02 --> Controller Class Initialized
INFO - 2025-08-24 19:22:02 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:02 --> Loader Class Initialized
DEBUG - 2025-08-24 19:22:02 --> Total execution time: 6.1560
INFO - 2025-08-24 19:22:02 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:02 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:02 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:02 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:03 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:03 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:03 --> Controller Class Initialized
INFO - 2025-08-24 19:22:03 --> Final output sent to browser
INFO - 2025-08-24 19:22:03 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:03 --> Controller Class Initialized
INFO - 2025-08-24 19:22:03 --> Controller Class Initialized
INFO - 2025-08-24 19:22:03 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:03 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:03 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:03 --> Total execution time: 6.5505
INFO - 2025-08-24 19:22:03 --> Final output sent to browser
INFO - 2025-08-24 19:22:03 --> Config Class Initialized
DEBUG - 2025-08-24 19:22:03 --> Total execution time: 5.4440
INFO - 2025-08-24 19:22:04 --> Final output sent to browser
INFO - 2025-08-24 19:22:04 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:04 --> Final output sent to browser
DEBUG - 2025-08-24 19:22:04 --> Total execution time: 5.5126
INFO - 2025-08-24 19:22:04 --> Config Class Initialized
DEBUG - 2025-08-24 19:22:04 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:22:04 --> Total execution time: 5.1659
INFO - 2025-08-24 19:22:04 --> Config Class Initialized
INFO - 2025-08-24 19:22:04 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:04 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:04 --> Config Class Initialized
INFO - 2025-08-24 19:22:04 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:05 --> Config Class Initialized
INFO - 2025-08-24 19:22:05 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:22:05 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:22:05 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:05 --> URI Class Initialized
INFO - 2025-08-24 19:22:05 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:05 --> Router Class Initialized
DEBUG - 2025-08-24 19:22:05 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:05 --> Output Class Initialized
INFO - 2025-08-24 19:22:05 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:05 --> Security Class Initialized
INFO - 2025-08-24 19:22:05 --> URI Class Initialized
DEBUG - 2025-08-24 19:22:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:05 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:05 --> Input Class Initialized
INFO - 2025-08-24 19:22:05 --> Router Class Initialized
INFO - 2025-08-24 19:22:05 --> URI Class Initialized
DEBUG - 2025-08-24 19:22:05 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:05 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:06 --> Router Class Initialized
INFO - 2025-08-24 19:22:06 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:06 --> Language Class Initialized
INFO - 2025-08-24 19:22:06 --> URI Class Initialized
INFO - 2025-08-24 19:22:06 --> Output Class Initialized
INFO - 2025-08-24 19:22:06 --> Output Class Initialized
INFO - 2025-08-24 19:22:07 --> URI Class Initialized
INFO - 2025-08-24 19:22:07 --> Security Class Initialized
INFO - 2025-08-24 19:22:07 --> Router Class Initialized
INFO - 2025-08-24 19:22:07 --> Security Class Initialized
ERROR - 2025-08-24 19:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
DEBUG - 2025-08-24 19:22:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:08 --> Router Class Initialized
INFO - 2025-08-24 19:22:08 --> Input Class Initialized
ERROR - 2025-08-24 19:22:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:08 --> Output Class Initialized
DEBUG - 2025-08-24 19:22:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:08 --> Language Class Initialized
INFO - 2025-08-24 19:22:08 --> Output Class Initialized
ERROR - 2025-08-24 19:22:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:08 --> Security Class Initialized
INFO - 2025-08-24 19:22:08 --> Input Class Initialized
ERROR - 2025-08-24 19:22:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:08 --> Security Class Initialized
DEBUG - 2025-08-24 19:22:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:09 --> Language Class Initialized
DEBUG - 2025-08-24 19:22:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:09 --> Input Class Initialized
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:09 --> Loader Class Initialized
INFO - 2025-08-24 19:22:09 --> Input Class Initialized
INFO - 2025-08-24 19:22:09 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:09 --> Language Class Initialized
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:09 --> Language Class Initialized
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:09 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:10 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:10 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:22:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:10 --> Loader Class Initialized
INFO - 2025-08-24 19:22:11 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:11 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:11 --> Controller Class Initialized
ERROR - 2025-08-24 19:22:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:11 --> Loader Class Initialized
INFO - 2025-08-24 19:22:11 --> Loader Class Initialized
INFO - 2025-08-24 19:22:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:11 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:11 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:11 --> Final output sent to browser
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:11 --> Total execution time: 8.2093
INFO - 2025-08-24 19:22:11 --> Controller Class Initialized
INFO - 2025-08-24 19:22:11 --> Controller Class Initialized
INFO - 2025-08-24 19:22:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:11 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:11 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:12 --> Controller Class Initialized
INFO - 2025-08-24 19:22:12 --> Final output sent to browser
INFO - 2025-08-24 19:22:12 --> Controller Class Initialized
INFO - 2025-08-24 19:22:12 --> Final output sent to browser
INFO - 2025-08-24 19:22:12 --> Config Class Initialized
INFO - 2025-08-24 19:22:12 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:12 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:12 --> Total execution time: 7.5756
INFO - 2025-08-24 19:22:12 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:22:12 --> Total execution time: 7.1956
INFO - 2025-08-24 19:22:12 --> Final output sent to browser
DEBUG - 2025-08-24 19:22:12 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:12 --> Config Class Initialized
INFO - 2025-08-24 19:22:12 --> Config Class Initialized
INFO - 2025-08-24 19:22:12 --> Final output sent to browser
INFO - 2025-08-24 19:22:12 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:22:12 --> Total execution time: 8.0601
INFO - 2025-08-24 19:22:12 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:12 --> Hooks Class Initialized
DEBUG - 2025-08-24 19:22:12 --> Total execution time: 7.6819
DEBUG - 2025-08-24 19:22:13 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:22:13 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:13 --> URI Class Initialized
INFO - 2025-08-24 19:22:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:13 --> URI Class Initialized
INFO - 2025-08-24 19:22:13 --> Config Class Initialized
INFO - 2025-08-24 19:22:13 --> URI Class Initialized
INFO - 2025-08-24 19:22:13 --> Config Class Initialized
INFO - 2025-08-24 19:22:13 --> Router Class Initialized
INFO - 2025-08-24 19:22:13 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:13 --> Output Class Initialized
DEBUG - 2025-08-24 19:22:13 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:13 --> Router Class Initialized
INFO - 2025-08-24 19:22:13 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:13 --> Router Class Initialized
INFO - 2025-08-24 19:22:13 --> Output Class Initialized
INFO - 2025-08-24 19:22:13 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:14 --> Security Class Initialized
INFO - 2025-08-24 19:22:14 --> Output Class Initialized
DEBUG - 2025-08-24 19:22:14 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:14 --> Security Class Initialized
INFO - 2025-08-24 19:22:14 --> URI Class Initialized
INFO - 2025-08-24 19:22:14 --> Security Class Initialized
INFO - 2025-08-24 19:22:14 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:14 --> Router Class Initialized
INFO - 2025-08-24 19:22:14 --> URI Class Initialized
DEBUG - 2025-08-24 19:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:14 --> Input Class Initialized
INFO - 2025-08-24 19:22:14 --> Input Class Initialized
INFO - 2025-08-24 19:22:14 --> Output Class Initialized
INFO - 2025-08-24 19:22:14 --> Router Class Initialized
INFO - 2025-08-24 19:22:14 --> Security Class Initialized
INFO - 2025-08-24 19:22:14 --> Input Class Initialized
INFO - 2025-08-24 19:22:14 --> Language Class Initialized
INFO - 2025-08-24 19:22:14 --> Language Class Initialized
INFO - 2025-08-24 19:22:15 --> Language Class Initialized
DEBUG - 2025-08-24 19:22:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:15 --> Output Class Initialized
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:15 --> Security Class Initialized
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:22:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:15 --> Input Class Initialized
INFO - 2025-08-24 19:22:15 --> Language Class Initialized
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:15 --> Input Class Initialized
ERROR - 2025-08-24 19:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:16 --> Loader Class Initialized
INFO - 2025-08-24 19:22:16 --> Language Class Initialized
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:16 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:16 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:16 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:17 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:17 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:17 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:17 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:17 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:17 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:17 --> Controller Class Initialized
INFO - 2025-08-24 19:22:17 --> Controller Class Initialized
INFO - 2025-08-24 19:22:17 --> Controller Class Initialized
INFO - 2025-08-24 19:22:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:17 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:17 --> Loader Class Initialized
INFO - 2025-08-24 19:22:18 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:18 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:18 --> Controller Class Initialized
INFO - 2025-08-24 19:22:18 --> Final output sent to browser
INFO - 2025-08-24 19:22:18 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:18 --> Final output sent to browser
INFO - 2025-08-24 19:22:18 --> Final output sent to browser
INFO - 2025-08-24 19:22:18 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:18 --> Total execution time: 5.5081
INFO - 2025-08-24 19:22:18 --> Database Driver Class Initialized
DEBUG - 2025-08-24 19:22:18 --> Total execution time: 5.7709
DEBUG - 2025-08-24 19:22:18 --> Total execution time: 5.0067
INFO - 2025-08-24 19:22:18 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:18 --> Final output sent to browser
INFO - 2025-08-24 19:22:18 --> Config Class Initialized
INFO - 2025-08-24 19:22:18 --> Config Class Initialized
DEBUG - 2025-08-24 19:22:18 --> Total execution time: 6.6752
INFO - 2025-08-24 19:22:18 --> Controller Class Initialized
INFO - 2025-08-24 19:22:18 --> Config Class Initialized
INFO - 2025-08-24 19:22:19 --> Config Class Initialized
INFO - 2025-08-24 19:22:19 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:19 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:19 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:19 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:19 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:19 --> Final output sent to browser
DEBUG - 2025-08-24 19:22:19 --> UTF-8 Support Enabled
DEBUG - 2025-08-24 19:22:19 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:19 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:22:19 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:19 --> URI Class Initialized
INFO - 2025-08-24 19:22:20 --> Utf8 Class Initialized
DEBUG - 2025-08-24 19:22:20 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:20 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:20 --> URI Class Initialized
INFO - 2025-08-24 19:22:20 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:20 --> Router Class Initialized
DEBUG - 2025-08-24 19:22:20 --> Total execution time: 5.9952
INFO - 2025-08-24 19:22:20 --> Output Class Initialized
INFO - 2025-08-24 19:22:20 --> Router Class Initialized
INFO - 2025-08-24 19:22:20 --> URI Class Initialized
INFO - 2025-08-24 19:22:20 --> URI Class Initialized
INFO - 2025-08-24 19:22:20 --> Config Class Initialized
INFO - 2025-08-24 19:22:20 --> Security Class Initialized
INFO - 2025-08-24 19:22:20 --> Router Class Initialized
INFO - 2025-08-24 19:22:20 --> Output Class Initialized
INFO - 2025-08-24 19:22:20 --> Router Class Initialized
INFO - 2025-08-24 19:22:21 --> Output Class Initialized
DEBUG - 2025-08-24 19:22:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:21 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:21 --> Output Class Initialized
INFO - 2025-08-24 19:22:21 --> Security Class Initialized
INFO - 2025-08-24 19:22:21 --> Input Class Initialized
INFO - 2025-08-24 19:22:21 --> Security Class Initialized
DEBUG - 2025-08-24 19:22:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:22:21 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:21 --> Security Class Initialized
DEBUG - 2025-08-24 19:22:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-24 19:22:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:21 --> Language Class Initialized
INFO - 2025-08-24 19:22:21 --> Input Class Initialized
INFO - 2025-08-24 19:22:21 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:22 --> URI Class Initialized
INFO - 2025-08-24 19:22:22 --> Language Class Initialized
INFO - 2025-08-24 19:22:22 --> Input Class Initialized
INFO - 2025-08-24 19:22:22 --> Input Class Initialized
ERROR - 2025-08-24 19:22:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:22 --> Router Class Initialized
ERROR - 2025-08-24 19:22:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:23 --> Language Class Initialized
INFO - 2025-08-24 19:22:23 --> Language Class Initialized
ERROR - 2025-08-24 19:22:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:22:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:24 --> Output Class Initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:24 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:24 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:24 --> Database Driver Class Initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:24 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:24 --> Security Class Initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:24 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:25 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:25 --> Loader Class Initialized
INFO - 2025-08-24 19:22:25 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:25 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:25 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:25 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:25 --> Controller Class Initialized
INFO - 2025-08-24 19:22:25 --> Controller Class Initialized
DEBUG - 2025-08-24 19:22:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:26 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:26 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:26 --> Model "User_model" initialized
ERROR - 2025-08-24 19:22:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:26 --> Final output sent to browser
INFO - 2025-08-24 19:22:26 --> Input Class Initialized
ERROR - 2025-08-24 19:22:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:26 --> Loader Class Initialized
DEBUG - 2025-08-24 19:22:26 --> Total execution time: 7.4801
INFO - 2025-08-24 19:22:26 --> Language Class Initialized
INFO - 2025-08-24 19:22:26 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:26 --> Config Class Initialized
ERROR - 2025-08-24 19:22:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
INFO - 2025-08-24 19:22:27 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:27 --> Controller Class Initialized
INFO - 2025-08-24 19:22:27 --> Final output sent to browser
ERROR - 2025-08-24 19:22:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
DEBUG - 2025-08-24 19:22:27 --> Total execution time: 7.5587
DEBUG - 2025-08-24 19:22:27 --> UTF-8 Support Enabled
ERROR - 2025-08-24 19:22:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:27 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:27 --> Config Class Initialized
INFO - 2025-08-24 19:22:27 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:27 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:27 --> Final output sent to browser
INFO - 2025-08-24 19:22:27 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:27 --> Loader Class Initialized
INFO - 2025-08-24 19:22:27 --> URI Class Initialized
INFO - 2025-08-24 19:22:27 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:28 --> Total execution time: 8.7305
DEBUG - 2025-08-24 19:22:28 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:28 --> Router Class Initialized
INFO - 2025-08-24 19:22:28 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:28 --> Config Class Initialized
INFO - 2025-08-24 19:22:28 --> Controller Class Initialized
INFO - 2025-08-24 19:22:28 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:28 --> Output Class Initialized
INFO - 2025-08-24 19:22:28 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:28 --> Hooks Class Initialized
INFO - 2025-08-24 19:22:28 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:28 --> URI Class Initialized
INFO - 2025-08-24 19:22:28 --> Final output sent to browser
INFO - 2025-08-24 19:22:28 --> Model "User_model" initialized
DEBUG - 2025-08-24 19:22:29 --> UTF-8 Support Enabled
INFO - 2025-08-24 19:22:29 --> Controller Class Initialized
INFO - 2025-08-24 19:22:29 --> Utf8 Class Initialized
INFO - 2025-08-24 19:22:29 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:29 --> URI Class Initialized
INFO - 2025-08-24 19:22:29 --> Final output sent to browser
INFO - 2025-08-24 19:22:29 --> Router Class Initialized
INFO - 2025-08-24 19:22:29 --> Security Class Initialized
INFO - 2025-08-24 19:22:29 --> Router Class Initialized
INFO - 2025-08-24 19:22:30 --> Output Class Initialized
DEBUG - 2025-08-24 19:22:30 --> Total execution time: 10.0912
INFO - 2025-08-24 19:22:30 --> Security Class Initialized
DEBUG - 2025-08-24 19:22:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:30 --> Input Class Initialized
DEBUG - 2025-08-24 19:22:30 --> Total execution time: 8.9221
INFO - 2025-08-24 19:22:30 --> Language Class Initialized
DEBUG - 2025-08-24 19:22:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:30 --> Output Class Initialized
INFO - 2025-08-24 19:22:30 --> Input Class Initialized
INFO - 2025-08-24 19:22:30 --> Security Class Initialized
ERROR - 2025-08-24 19:22:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
DEBUG - 2025-08-24 19:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-24 19:22:31 --> Language Class Initialized
INFO - 2025-08-24 19:22:31 --> Input Class Initialized
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:31 --> Language Class Initialized
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
ERROR - 2025-08-24 19:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 9
INFO - 2025-08-24 19:22:31 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 13
ERROR - 2025-08-24 19:22:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:32 --> Loader Class Initialized
ERROR - 2025-08-24 19:22:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 14
INFO - 2025-08-24 19:22:32 --> Helper loaded: url_helper
ERROR - 2025-08-24 19:22:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistv2/api/application/config/routes.php:159) /var/www/html/checklistv2/api/application/controllers/Users.php 15
INFO - 2025-08-24 19:22:32 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:32 --> Loader Class Initialized
INFO - 2025-08-24 19:22:32 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:32 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:32 --> Helper loaded: url_helper
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Database Driver Class Initialized
INFO - 2025-08-24 19:22:33 --> Controller Class Initialized
INFO - 2025-08-24 19:22:33 --> Controller Class Initialized
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Controller Class Initialized
INFO - 2025-08-24 19:22:33 --> Final output sent to browser
INFO - 2025-08-24 19:22:33 --> Model "User_model" initialized
INFO - 2025-08-24 19:22:33 --> Final output sent to browser
DEBUG - 2025-08-24 19:22:33 --> Total execution time: 6.8929
DEBUG - 2025-08-24 19:22:33 --> Total execution time: 5.5568
INFO - 2025-08-24 19:22:33 --> Final output sent to browser
DEBUG - 2025-08-24 19:22:33 --> Total execution time: 6.3654
