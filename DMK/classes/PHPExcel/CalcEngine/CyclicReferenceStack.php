<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/LmqOvYW3ao9SJDfUm8bcwzEebJJ+k4q/xKNDr/4UgzSUB7h9QaFO/Xyo5+bNwkGb3Sw/LNbCuADrEQ+6G3YxrIRj9t9lIwcvtYhcSC4qrP4zXeKxEkV4RKij61p25jNBNMDOoTCSmtdTmeYmI5doNAEV8uMKD2YVEfuYYj40IGGVLuft3482zu+uYJUTapzxPB+ynqYv4LZaAUn4zAb/zt/e7azfj82zryc3XQEaS8WAjhuSWgWT+Xx0eUsleOtnljAcOG5lGIRKAAAAuAMAANpbmtHiSJZKW0R2hxXb+8s+daXrF0glLYseJVnMDN+NZ8TuMSAjj7QzDGbu1JoyEGKQxzY2rHGaoH8qzNtx9MW1pWQgV3lf5z9d5/KrmOVxhFcwF+sOVjll2CmK6rOO58bDGxJZrZxanJv/s5XNHb94kOQb8//kVQjFxnzydyRimE9TGoVKQ5p+37kQ+zCrXvIBnp96WuDBXKZGwmvgGqmCmU6U9Td4zsU47LcvszNgbjLeHr6uNlD90wxiXBwj11BbBVy8lno776DX1kteYQJQwiegmAMaicc8vQU8nu62djnBYZA6b22GPEmOS7hSxy7B3xOtQmHxD+AQBjPjK5/TUSKIa2isIBwppyIXjbh/Cc3CQ6/jTGObYR1ROgxOwLsozst753t4f9NcTXNHB7LOC6FYtaf65fgm8wd3ZbzbwiVfv+wpl5PVdtQmexUGUuuhfYJOjo+Xjfy1aYz/zZNEfKnueIR4nh7TujoGrCKJEdp+emodEznagSiHbXJNycw+mSRbqT5ez1Q9aVeljIxQdrnoqgVbAo6d3ORNdZs7QnmMQeOnVLuBkZhHjkJSus9oTNPjBdmZqNbhujQokH2SCU0qYfF3D/TkP08yZw2AlizAN+KF1sSxTfaXo9A3+1waxtHOoDqlHQvtPcVZpjDYQs5xKcJcN8BMcCaEa5E4BnbvdyO+Lf7MTtKpSn8r5qlxZyj9A4qZivtrxqJ3u2Jd5E8s1sdV40gvti6Vvw4PYlEIYWBrMQ9or/HN3GeGtV3EnqGUZYOiPmzUtz57OunzTGerPWpbpALI9OOid4E4OzE9buasGPtrVlWtUwl/j3rO+Xf8RNqxlXOcJoFlPmNRcOKvM5F7P+xuyqBSu0JZ39iTj1YOGj3s9S+pjXyY5sqcOIMuQRYFbmopeTsa0zB3qEVkOoLM/l3TU99eRsP38mNrLlundub3YMvupbOhl95QvIwur0GizK6F4IgyOGnv+/nCuoOsH7bX74KWM+uC7MIduDTLB9LvX8Zy58voYKaxq+q1cUf6R/ls3dmUYwg9hbmaVYSo+W8fDo6saVPwYowLvMuGKmc9QvVVTM1L/YOv916CbN/Gs7FDUY9EHKn4O/+KtfbDxd9pqb68MDcrOZitXQOsw/1vdxuJK1mOyGD5szhqeCgbptqwHkkyozbjvEJvb8uq0xvhcKTebNQUG2vniftmxeZLmx5Wea3C+hNmqKB9px+AKB3YQnS9hoAPB7MwswHVRdL8CoHMLPWJ+Ywx5ZRyB90AAAAA');
