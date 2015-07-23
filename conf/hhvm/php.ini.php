; php options
date.timezone = UTC
 
; hhvm specific 
hhvm.log.level = ERROR
hhvm.log.always_log_unhandled_exceptions = true
hhvm.log.runtime_error_reporting_level = 8191
hhvm.mysql.typed_results = false

hhvm.log.file = <?=getenv('HHVM_ERROR_LOG_PATH')?>

memory_limit = 128M

; hhvm fcgi
hhvm.server.type = fastcgi
hhvm.server.file_socket = <?=getenv('SOCKET_PATH')?>

hhvm.server.thread_count = <?=getenv('WEB_CONCURRENCY')?:8?>
