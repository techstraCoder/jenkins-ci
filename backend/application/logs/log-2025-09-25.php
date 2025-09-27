<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-09-25 07:30:11 --> Config Class Initialized
INFO - 2025-09-25 07:30:11 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:30:13 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:30:13 --> Utf8 Class Initialized
INFO - 2025-09-25 07:30:14 --> URI Class Initialized
INFO - 2025-09-25 07:30:15 --> Router Class Initialized
INFO - 2025-09-25 07:30:15 --> Output Class Initialized
INFO - 2025-09-25 07:30:16 --> Security Class Initialized
DEBUG - 2025-09-25 07:30:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:30:16 --> Input Class Initialized
INFO - 2025-09-25 07:30:17 --> Language Class Initialized
ERROR - 2025-09-25 07:30:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:30:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:30:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:30:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:30:22 --> Loader Class Initialized
INFO - 2025-09-25 07:30:26 --> Helper loaded: url_helper
INFO - 2025-09-25 07:30:29 --> Database Driver Class Initialized
INFO - 2025-09-25 07:30:30 --> Model "User_model" initialized
INFO - 2025-09-25 07:30:30 --> Controller Class Initialized
INFO - 2025-09-25 07:30:30 --> Model "User_model" initialized
ERROR - 2025-09-25 07:30:30 --> Query error: Table 'checklistplus.users' doesn't exist - Invalid query: SELECT user.id as user_id, user.team_id,user.board_id,team.team_name,user.access_role,CONCAT(user.first_name,' ',user.last_name) as full_name, user.user_name, user.first_name,user.email, team.team_name from users as user INNER JOIN teams as team ON user.team_id = team.id where user_name='abanerjee2' AND pass_word='ff3b4087708b73f7945fbc3f961ffd60'
ERROR - 2025-09-25 07:30:31 --> Severity: error --> Exception: Call to a member function result_array() on false /var/www/html/checklistplus/api/application/models/User_model.php 120
ERROR - 2025-09-25 07:30:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/system/core/Common.php 571
INFO - 2025-09-25 07:31:20 --> Config Class Initialized
INFO - 2025-09-25 07:31:21 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:31:22 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:31:22 --> Utf8 Class Initialized
INFO - 2025-09-25 07:31:22 --> URI Class Initialized
INFO - 2025-09-25 07:31:23 --> Router Class Initialized
INFO - 2025-09-25 07:31:23 --> Output Class Initialized
INFO - 2025-09-25 07:31:23 --> Security Class Initialized
DEBUG - 2025-09-25 07:31:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:31:24 --> Input Class Initialized
INFO - 2025-09-25 07:31:24 --> Language Class Initialized
ERROR - 2025-09-25 07:31:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:31:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:31:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:31:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:31:24 --> Loader Class Initialized
INFO - 2025-09-25 07:31:24 --> Helper loaded: url_helper
INFO - 2025-09-25 07:31:24 --> Database Driver Class Initialized
INFO - 2025-09-25 07:31:25 --> Model "User_model" initialized
INFO - 2025-09-25 07:31:25 --> Controller Class Initialized
INFO - 2025-09-25 07:31:25 --> Model "User_model" initialized
ERROR - 2025-09-25 07:31:25 --> Query error: Table 'checklistplus.users' doesn't exist - Invalid query: SELECT user.id as user_id, user.team_id,user.board_id,team.team_name,user.access_role,CONCAT(user.first_name,' ',user.last_name) as full_name, user.user_name, user.first_name,user.email, team.team_name from users as user INNER JOIN teams as team ON user.team_id = team.id where user_name='abanerjee2' AND pass_word='ff3b4087708b73f7945fbc3f961ffd60'
ERROR - 2025-09-25 07:31:25 --> Severity: error --> Exception: Call to a member function result_array() on false /var/www/html/checklistplus/api/application/models/User_model.php 120
ERROR - 2025-09-25 07:31:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/system/core/Common.php 571
INFO - 2025-09-25 07:33:58 --> Config Class Initialized
INFO - 2025-09-25 07:33:58 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:33:58 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:33:58 --> Utf8 Class Initialized
INFO - 2025-09-25 07:33:58 --> URI Class Initialized
INFO - 2025-09-25 07:33:59 --> Router Class Initialized
INFO - 2025-09-25 07:33:59 --> Output Class Initialized
INFO - 2025-09-25 07:33:59 --> Security Class Initialized
DEBUG - 2025-09-25 07:33:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:33:59 --> Input Class Initialized
INFO - 2025-09-25 07:33:59 --> Language Class Initialized
ERROR - 2025-09-25 07:33:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:33:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:33:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:33:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:33:59 --> Loader Class Initialized
INFO - 2025-09-25 07:33:59 --> Helper loaded: url_helper
INFO - 2025-09-25 07:34:00 --> Database Driver Class Initialized
INFO - 2025-09-25 07:34:00 --> Model "User_model" initialized
INFO - 2025-09-25 07:34:00 --> Controller Class Initialized
INFO - 2025-09-25 07:34:00 --> Model "User_model" initialized
ERROR - 2025-09-25 07:34:00 --> Query error: Table 'checklistplus.users' doesn't exist - Invalid query: SELECT user.id as user_id, user.team_id,user.board_id,team.team_name,user.access_role,CONCAT(user.first_name,' ',user.last_name) as full_name, user.user_name, user.first_name,user.email, team.team_name from users as user INNER JOIN teams as team ON user.team_id = team.id where user_name='cs4' AND pass_word='d6362f7a781be1a29c91e524977669ae'
ERROR - 2025-09-25 07:34:00 --> Severity: error --> Exception: Call to a member function result_array() on false /var/www/html/checklistplus/api/application/models/User_model.php 120
ERROR - 2025-09-25 07:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/system/core/Common.php 571
INFO - 2025-09-25 07:40:02 --> Config Class Initialized
INFO - 2025-09-25 07:40:05 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:40:05 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:05 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:05 --> URI Class Initialized
INFO - 2025-09-25 07:40:05 --> Router Class Initialized
INFO - 2025-09-25 07:40:05 --> Output Class Initialized
INFO - 2025-09-25 07:40:05 --> Security Class Initialized
DEBUG - 2025-09-25 07:40:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:05 --> Input Class Initialized
INFO - 2025-09-25 07:40:05 --> Language Class Initialized
ERROR - 2025-09-25 07:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:06 --> Loader Class Initialized
INFO - 2025-09-25 07:40:06 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:06 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:06 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:06 --> Controller Class Initialized
INFO - 2025-09-25 07:40:06 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:09 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:09 --> Total execution time: 6.3034
INFO - 2025-09-25 07:40:09 --> Config Class Initialized
INFO - 2025-09-25 07:40:09 --> Config Class Initialized
INFO - 2025-09-25 07:40:10 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:10 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:40:10 --> UTF-8 Support Enabled
DEBUG - 2025-09-25 07:40:10 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:10 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:10 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:10 --> URI Class Initialized
INFO - 2025-09-25 07:40:10 --> URI Class Initialized
INFO - 2025-09-25 07:40:10 --> Router Class Initialized
INFO - 2025-09-25 07:40:10 --> Output Class Initialized
INFO - 2025-09-25 07:40:10 --> Router Class Initialized
INFO - 2025-09-25 07:40:10 --> Security Class Initialized
INFO - 2025-09-25 07:40:10 --> Output Class Initialized
INFO - 2025-09-25 07:40:10 --> Security Class Initialized
DEBUG - 2025-09-25 07:40:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-09-25 07:40:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:10 --> Config Class Initialized
INFO - 2025-09-25 07:40:10 --> Input Class Initialized
INFO - 2025-09-25 07:40:10 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:10 --> Input Class Initialized
INFO - 2025-09-25 07:40:10 --> Language Class Initialized
ERROR - 2025-09-25 07:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:10 --> Language Class Initialized
DEBUG - 2025-09-25 07:40:10 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:10 --> Utf8 Class Initialized
ERROR - 2025-09-25 07:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:11 --> URI Class Initialized
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:11 --> Router Class Initialized
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:11 --> Output Class Initialized
INFO - 2025-09-25 07:40:11 --> Loader Class Initialized
INFO - 2025-09-25 07:40:11 --> Security Class Initialized
INFO - 2025-09-25 07:40:11 --> Loader Class Initialized
INFO - 2025-09-25 07:40:11 --> Helper loaded: url_helper
DEBUG - 2025-09-25 07:40:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:11 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:11 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:11 --> Input Class Initialized
INFO - 2025-09-25 07:40:11 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:11 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:11 --> Language Class Initialized
INFO - 2025-09-25 07:40:11 --> Config Class Initialized
INFO - 2025-09-25 07:40:11 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:11 --> Controller Class Initialized
INFO - 2025-09-25 07:40:11 --> Controller Class Initialized
INFO - 2025-09-25 07:40:11 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:11 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:11 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:11 --> Final output sent to browser
ERROR - 2025-09-25 07:40:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
DEBUG - 2025-09-25 07:40:11 --> Total execution time: 2.1501
INFO - 2025-09-25 07:40:11 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:11 --> UTF-8 Support Enabled
ERROR - 2025-09-25 07:40:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:12 --> Utf8 Class Initialized
DEBUG - 2025-09-25 07:40:12 --> Total execution time: 2.1543
INFO - 2025-09-25 07:40:12 --> URI Class Initialized
INFO - 2025-09-25 07:40:12 --> Loader Class Initialized
INFO - 2025-09-25 07:40:12 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:12 --> Router Class Initialized
INFO - 2025-09-25 07:40:12 --> Config Class Initialized
INFO - 2025-09-25 07:40:13 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:13 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:13 --> Output Class Initialized
INFO - 2025-09-25 07:40:13 --> Config Class Initialized
DEBUG - 2025-09-25 07:40:13 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:13 --> Config Class Initialized
INFO - 2025-09-25 07:40:13 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:13 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:13 --> Controller Class Initialized
INFO - 2025-09-25 07:40:13 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:14 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:14 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:14 --> Security Class Initialized
DEBUG - 2025-09-25 07:40:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:14 --> URI Class Initialized
INFO - 2025-09-25 07:40:14 --> Final output sent to browser
INFO - 2025-09-25 07:40:14 --> Router Class Initialized
DEBUG - 2025-09-25 07:40:14 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:14 --> Input Class Initialized
DEBUG - 2025-09-25 07:40:14 --> Total execution time: 3.5409
DEBUG - 2025-09-25 07:40:14 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:14 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:14 --> Language Class Initialized
INFO - 2025-09-25 07:40:14 --> Config Class Initialized
INFO - 2025-09-25 07:40:14 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:14 --> Output Class Initialized
INFO - 2025-09-25 07:40:14 --> Security Class Initialized
ERROR - 2025-09-25 07:40:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:14 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:14 --> URI Class Initialized
INFO - 2025-09-25 07:40:14 --> URI Class Initialized
INFO - 2025-09-25 07:40:14 --> Router Class Initialized
DEBUG - 2025-09-25 07:40:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-09-25 07:40:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
DEBUG - 2025-09-25 07:40:14 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:14 --> Router Class Initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:15 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:15 --> Input Class Initialized
INFO - 2025-09-25 07:40:15 --> Output Class Initialized
INFO - 2025-09-25 07:40:15 --> Output Class Initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:15 --> Security Class Initialized
INFO - 2025-09-25 07:40:15 --> Security Class Initialized
INFO - 2025-09-25 07:40:15 --> Language Class Initialized
INFO - 2025-09-25 07:40:15 --> URI Class Initialized
INFO - 2025-09-25 07:40:15 --> Loader Class Initialized
INFO - 2025-09-25 07:40:15 --> Router Class Initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
DEBUG - 2025-09-25 07:40:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-09-25 07:40:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:15 --> Output Class Initialized
INFO - 2025-09-25 07:40:15 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:15 --> Input Class Initialized
INFO - 2025-09-25 07:40:15 --> Input Class Initialized
INFO - 2025-09-25 07:40:15 --> Database Driver Class Initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:15 --> Security Class Initialized
INFO - 2025-09-25 07:40:15 --> Language Class Initialized
INFO - 2025-09-25 07:40:15 --> Language Class Initialized
INFO - 2025-09-25 07:40:15 --> Model "User_model" initialized
DEBUG - 2025-09-25 07:40:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:15 --> Input Class Initialized
INFO - 2025-09-25 07:40:15 --> Loader Class Initialized
INFO - 2025-09-25 07:40:15 --> Controller Class Initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:15 --> Language Class Initialized
INFO - 2025-09-25 07:40:15 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:15 --> Helper loaded: url_helper
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:16 --> Final output sent to browser
INFO - 2025-09-25 07:40:16 --> Database Driver Class Initialized
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
DEBUG - 2025-09-25 07:40:16 --> Total execution time: 4.3271
INFO - 2025-09-25 07:40:16 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:16 --> Config Class Initialized
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:16 --> Loader Class Initialized
INFO - 2025-09-25 07:40:16 --> Controller Class Initialized
INFO - 2025-09-25 07:40:16 --> Loader Class Initialized
INFO - 2025-09-25 07:40:16 --> Helper loaded: url_helper
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:16 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:16 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:16 --> Helper loaded: url_helper
DEBUG - 2025-09-25 07:40:16 --> UTF-8 Support Enabled
ERROR - 2025-09-25 07:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:16 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:16 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:16 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:16 --> Final output sent to browser
INFO - 2025-09-25 07:40:16 --> URI Class Initialized
INFO - 2025-09-25 07:40:16 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:16 --> Loader Class Initialized
INFO - 2025-09-25 07:40:16 --> Model "User_model" initialized
DEBUG - 2025-09-25 07:40:16 --> Total execution time: 4.0375
INFO - 2025-09-25 07:40:16 --> Controller Class Initialized
INFO - 2025-09-25 07:40:16 --> Config Class Initialized
INFO - 2025-09-25 07:40:16 --> Router Class Initialized
INFO - 2025-09-25 07:40:16 --> Controller Class Initialized
INFO - 2025-09-25 07:40:16 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:17 --> Output Class Initialized
INFO - 2025-09-25 07:40:17 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:17 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:17 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:17 --> Security Class Initialized
INFO - 2025-09-25 07:40:17 --> Model "User_model" initialized
DEBUG - 2025-09-25 07:40:17 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:17 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:17 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:17 --> Severity: Warning --> Undefined property: stdClass::$team_id /var/www/html/checklistplus/api/application/controllers/Users.php 668
INFO - 2025-09-25 07:40:17 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:17 --> Input Class Initialized
INFO - 2025-09-25 07:40:17 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:17 --> Total execution time: 4.1379
INFO - 2025-09-25 07:40:17 --> URI Class Initialized
INFO - 2025-09-25 07:40:17 --> Controller Class Initialized
INFO - 2025-09-25 07:40:17 --> Config Class Initialized
INFO - 2025-09-25 07:40:17 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:17 --> Language Class Initialized
INFO - 2025-09-25 07:40:17 --> Router Class Initialized
DEBUG - 2025-09-25 07:40:17 --> Total execution time: 4.2390
INFO - 2025-09-25 07:40:17 --> Hooks Class Initialized
ERROR - 2025-09-25 07:40:17 --> Severity: Warning --> Undefined property: stdClass::$team_id /var/www/html/checklistplus/api/application/controllers/Users.php 668
INFO - 2025-09-25 07:40:17 --> Output Class Initialized
INFO - 2025-09-25 07:40:17 --> Config Class Initialized
ERROR - 2025-09-25 07:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:17 --> Final output sent to browser
INFO - 2025-09-25 07:40:17 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:40:17 --> UTF-8 Support Enabled
DEBUG - 2025-09-25 07:40:17 --> Total execution time: 3.1568
INFO - 2025-09-25 07:40:17 --> Security Class Initialized
ERROR - 2025-09-25 07:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:18 --> Config Class Initialized
INFO - 2025-09-25 07:40:18 --> Utf8 Class Initialized
ERROR - 2025-09-25 07:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
DEBUG - 2025-09-25 07:40:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:18 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:18 --> URI Class Initialized
DEBUG - 2025-09-25 07:40:18 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:18 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:18 --> Router Class Initialized
INFO - 2025-09-25 07:40:18 --> Output Class Initialized
INFO - 2025-09-25 07:40:18 --> URI Class Initialized
INFO - 2025-09-25 07:40:18 --> Input Class Initialized
DEBUG - 2025-09-25 07:40:18 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:18 --> Loader Class Initialized
INFO - 2025-09-25 07:40:18 --> Language Class Initialized
INFO - 2025-09-25 07:40:18 --> Security Class Initialized
INFO - 2025-09-25 07:40:18 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:18 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:18 --> Router Class Initialized
INFO - 2025-09-25 07:40:18 --> URI Class Initialized
INFO - 2025-09-25 07:40:18 --> Output Class Initialized
ERROR - 2025-09-25 07:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:18 --> Database Driver Class Initialized
DEBUG - 2025-09-25 07:40:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:18 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:18 --> Router Class Initialized
INFO - 2025-09-25 07:40:18 --> Input Class Initialized
ERROR - 2025-09-25 07:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:18 --> Security Class Initialized
INFO - 2025-09-25 07:40:18 --> Output Class Initialized
INFO - 2025-09-25 07:40:18 --> Controller Class Initialized
INFO - 2025-09-25 07:40:18 --> Language Class Initialized
DEBUG - 2025-09-25 07:40:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2025-09-25 07:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:18 --> Security Class Initialized
INFO - 2025-09-25 07:40:18 --> Model "User_model" initialized
DEBUG - 2025-09-25 07:40:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:19 --> Final output sent to browser
INFO - 2025-09-25 07:40:19 --> Input Class Initialized
DEBUG - 2025-09-25 07:40:19 --> Total execution time: 2.7470
INFO - 2025-09-25 07:40:19 --> Language Class Initialized
INFO - 2025-09-25 07:40:19 --> Config Class Initialized
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:19 --> Input Class Initialized
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:19 --> Loader Class Initialized
INFO - 2025-09-25 07:40:19 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:19 --> Language Class Initialized
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
DEBUG - 2025-09-25 07:40:19 --> UTF-8 Support Enabled
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:19 --> Helper loaded: url_helper
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:20 --> Utf8 Class Initialized
ERROR - 2025-09-25 07:40:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:20 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:20 --> Loader Class Initialized
INFO - 2025-09-25 07:40:20 --> Loader Class Initialized
INFO - 2025-09-25 07:40:20 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:20 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:20 --> URI Class Initialized
INFO - 2025-09-25 07:40:20 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:20 --> Database Driver Class Initialized
ERROR - 2025-09-25 07:40:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:20 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:20 --> Controller Class Initialized
INFO - 2025-09-25 07:40:20 --> Router Class Initialized
INFO - 2025-09-25 07:40:20 --> Output Class Initialized
INFO - 2025-09-25 07:40:20 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:20 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:20 --> Loader Class Initialized
INFO - 2025-09-25 07:40:20 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:20 --> Controller Class Initialized
INFO - 2025-09-25 07:40:20 --> Final output sent to browser
INFO - 2025-09-25 07:40:20 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:20 --> Security Class Initialized
DEBUG - 2025-09-25 07:40:20 --> Total execution time: 3.7440
INFO - 2025-09-25 07:40:20 --> Controller Class Initialized
INFO - 2025-09-25 07:40:21 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:21 --> Final output sent to browser
INFO - 2025-09-25 07:40:21 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:21 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:21 --> Total execution time: 3.4826
DEBUG - 2025-09-25 07:40:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:21 --> Input Class Initialized
INFO - 2025-09-25 07:40:21 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:21 --> Language Class Initialized
DEBUG - 2025-09-25 07:40:21 --> Total execution time: 3.2546
INFO - 2025-09-25 07:40:21 --> Config Class Initialized
INFO - 2025-09-25 07:40:21 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:21 --> Config Class Initialized
INFO - 2025-09-25 07:40:21 --> Controller Class Initialized
INFO - 2025-09-25 07:40:21 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:21 --> Hooks Class Initialized
ERROR - 2025-09-25 07:40:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:22 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:22 --> Final output sent to browser
INFO - 2025-09-25 07:40:22 --> Config Class Initialized
ERROR - 2025-09-25 07:40:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
DEBUG - 2025-09-25 07:40:22 --> Total execution time: 4.7945
INFO - 2025-09-25 07:40:22 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:40:22 --> UTF-8 Support Enabled
DEBUG - 2025-09-25 07:40:22 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:22 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:22 --> Utf8 Class Initialized
ERROR - 2025-09-25 07:40:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
DEBUG - 2025-09-25 07:40:23 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:23 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:23 --> URI Class Initialized
INFO - 2025-09-25 07:40:23 --> URI Class Initialized
INFO - 2025-09-25 07:40:23 --> URI Class Initialized
INFO - 2025-09-25 07:40:23 --> Loader Class Initialized
INFO - 2025-09-25 07:40:23 --> Router Class Initialized
INFO - 2025-09-25 07:40:23 --> Router Class Initialized
INFO - 2025-09-25 07:40:24 --> Output Class Initialized
INFO - 2025-09-25 07:40:24 --> Output Class Initialized
INFO - 2025-09-25 07:40:24 --> Router Class Initialized
INFO - 2025-09-25 07:40:24 --> Security Class Initialized
INFO - 2025-09-25 07:40:24 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:24 --> Security Class Initialized
INFO - 2025-09-25 07:40:24 --> Output Class Initialized
DEBUG - 2025-09-25 07:40:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-09-25 07:40:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:25 --> Security Class Initialized
INFO - 2025-09-25 07:40:25 --> Config Class Initialized
INFO - 2025-09-25 07:40:25 --> Input Class Initialized
INFO - 2025-09-25 07:40:25 --> Input Class Initialized
INFO - 2025-09-25 07:40:25 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:25 --> Language Class Initialized
DEBUG - 2025-09-25 07:40:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:25 --> Language Class Initialized
DEBUG - 2025-09-25 07:40:25 --> UTF-8 Support Enabled
ERROR - 2025-09-25 07:40:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:25 --> Utf8 Class Initialized
ERROR - 2025-09-25 07:40:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:25 --> URI Class Initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:26 --> Router Class Initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:26 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:26 --> Input Class Initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:26 --> Output Class Initialized
INFO - 2025-09-25 07:40:26 --> Language Class Initialized
INFO - 2025-09-25 07:40:26 --> Loader Class Initialized
INFO - 2025-09-25 07:40:26 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:26 --> Controller Class Initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:26 --> Security Class Initialized
INFO - 2025-09-25 07:40:26 --> Helper loaded: url_helper
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:26 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:26 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
DEBUG - 2025-09-25 07:40:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:26 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:26 --> Final output sent to browser
INFO - 2025-09-25 07:40:26 --> Loader Class Initialized
DEBUG - 2025-09-25 07:40:26 --> Total execution time: 7.5185
INFO - 2025-09-25 07:40:26 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:27 --> Config Class Initialized
INFO - 2025-09-25 07:40:27 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:27 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:27 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:27 --> Input Class Initialized
DEBUG - 2025-09-25 07:40:27 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:27 --> Controller Class Initialized
INFO - 2025-09-25 07:40:27 --> Controller Class Initialized
INFO - 2025-09-25 07:40:27 --> Language Class Initialized
ERROR - 2025-09-25 07:40:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:27 --> Model "User_model" initialized
ERROR - 2025-09-25 07:40:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
INFO - 2025-09-25 07:40:27 --> Final output sent to browser
ERROR - 2025-09-25 07:40:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
DEBUG - 2025-09-25 07:40:27 --> Total execution time: 6.0133
ERROR - 2025-09-25 07:40:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:27 --> Config Class Initialized
ERROR - 2025-09-25 07:40:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:27 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:27 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:27 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:28 --> Loader Class Initialized
INFO - 2025-09-25 07:40:28 --> Loader Class Initialized
DEBUG - 2025-09-25 07:40:28 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:28 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:28 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:28 --> Final output sent to browser
INFO - 2025-09-25 07:40:28 --> URI Class Initialized
INFO - 2025-09-25 07:40:28 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:28 --> Database Driver Class Initialized
DEBUG - 2025-09-25 07:40:28 --> Total execution time: 6.6250
INFO - 2025-09-25 07:40:28 --> Router Class Initialized
INFO - 2025-09-25 07:40:28 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:28 --> URI Class Initialized
INFO - 2025-09-25 07:40:28 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:28 --> Output Class Initialized
INFO - 2025-09-25 07:40:28 --> Controller Class Initialized
INFO - 2025-09-25 07:40:28 --> Router Class Initialized
INFO - 2025-09-25 07:40:28 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:28 --> Security Class Initialized
INFO - 2025-09-25 07:40:28 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:29 --> Controller Class Initialized
INFO - 2025-09-25 07:40:29 --> Output Class Initialized
DEBUG - 2025-09-25 07:40:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:29 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:29 --> Total execution time: 4.7359
INFO - 2025-09-25 07:40:29 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:29 --> Security Class Initialized
INFO - 2025-09-25 07:40:29 --> Input Class Initialized
DEBUG - 2025-09-25 07:40:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:29 --> Language Class Initialized
INFO - 2025-09-25 07:40:29 --> Final output sent to browser
ERROR - 2025-09-25 07:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
DEBUG - 2025-09-25 07:40:29 --> Total execution time: 7.3782
INFO - 2025-09-25 07:40:29 --> Input Class Initialized
INFO - 2025-09-25 07:40:29 --> Language Class Initialized
ERROR - 2025-09-25 07:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
INFO - 2025-09-25 07:40:30 --> Loader Class Initialized
ERROR - 2025-09-25 07:40:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
INFO - 2025-09-25 07:40:30 --> Helper loaded: url_helper
ERROR - 2025-09-25 07:40:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:30 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:30 --> Loader Class Initialized
INFO - 2025-09-25 07:40:30 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:30 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:30 --> Controller Class Initialized
INFO - 2025-09-25 07:40:30 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:30 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:30 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:30 --> Final output sent to browser
INFO - 2025-09-25 07:40:30 --> Controller Class Initialized
DEBUG - 2025-09-25 07:40:30 --> Total execution time: 3.7063
INFO - 2025-09-25 07:40:30 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:30 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:30 --> Total execution time: 3.0257
INFO - 2025-09-25 07:40:31 --> Config Class Initialized
INFO - 2025-09-25 07:40:31 --> Config Class Initialized
INFO - 2025-09-25 07:40:31 --> Hooks Class Initialized
INFO - 2025-09-25 07:40:31 --> Hooks Class Initialized
DEBUG - 2025-09-25 07:40:31 --> UTF-8 Support Enabled
DEBUG - 2025-09-25 07:40:31 --> UTF-8 Support Enabled
INFO - 2025-09-25 07:40:31 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:31 --> Utf8 Class Initialized
INFO - 2025-09-25 07:40:31 --> URI Class Initialized
INFO - 2025-09-25 07:40:31 --> URI Class Initialized
INFO - 2025-09-25 07:40:31 --> Router Class Initialized
INFO - 2025-09-25 07:40:31 --> Router Class Initialized
INFO - 2025-09-25 07:40:31 --> Output Class Initialized
INFO - 2025-09-25 07:40:31 --> Output Class Initialized
INFO - 2025-09-25 07:40:32 --> Security Class Initialized
INFO - 2025-09-25 07:40:32 --> Security Class Initialized
DEBUG - 2025-09-25 07:40:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-09-25 07:40:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-09-25 07:40:32 --> Input Class Initialized
INFO - 2025-09-25 07:40:32 --> Input Class Initialized
INFO - 2025-09-25 07:40:32 --> Language Class Initialized
INFO - 2025-09-25 07:40:32 --> Language Class Initialized
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 9
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 10
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 11
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
ERROR - 2025-09-25 07:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/checklistplus/api/application/config/routes.php:159) /var/www/html/checklistplus/api/application/controllers/Users.php 12
INFO - 2025-09-25 07:40:32 --> Loader Class Initialized
INFO - 2025-09-25 07:40:32 --> Loader Class Initialized
INFO - 2025-09-25 07:40:33 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:33 --> Helper loaded: url_helper
INFO - 2025-09-25 07:40:33 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:33 --> Database Driver Class Initialized
INFO - 2025-09-25 07:40:33 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:33 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:33 --> Controller Class Initialized
INFO - 2025-09-25 07:40:33 --> Controller Class Initialized
INFO - 2025-09-25 07:40:33 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:33 --> Model "User_model" initialized
INFO - 2025-09-25 07:40:33 --> Final output sent to browser
INFO - 2025-09-25 07:40:33 --> Final output sent to browser
DEBUG - 2025-09-25 07:40:33 --> Total execution time: 2.2772
DEBUG - 2025-09-25 07:40:33 --> Total execution time: 2.2737
