<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/WZtKOvpYXQrXN6Xk6cubuEb3aXI5/lgtf1YnxeP7bmLUvSMXGLOJIYeI6mg4wXV5AUh1QzAg5ZExUNIMBbG1TQoF4ZW1E8nr6Q4oxJ7Sv9rgMfkjqY4DjJnQ9CXinT3DuLJt/RF3DJdbF2JcgQeZWfj4+QYpJH0We5W9zRs/6nXzoIleAr395u7k6HIKxGef0YeX68IlfY6nV5Y3PIy6OhUvkyWl71TPOcb4EQueRBIjl0vfE48U+pSQ8jbOMZvFF82wYvblMohKAAAAGAMAAMxra5eeNChJQbRk9RzRP35vpcp0bJMTBGB6BroOuK1mLkqUXj/nOYkqelJyY4yoBup6NHTi+WXBp047s11I/OKHIdIN3X4to1gewxYdBkMvhfyOJ1Nv6+v3g2UfOMaObpp77He4dl/SuK3jirzAHeKamTBHqSL7svY3e8kWNuTmhF2I5Bcrb0NaszY/yprNI3i2lKThIp64ZutzvY2HT4WlfFRhevAKxmj/LF/F8p66hJ+Dq7uzsgeArhxPSWn+C1ruQIFbFhGEBNlyWDfL5waXIbeX5lduJpniLS25MsF1/qvFUZhjBSxuUwqhkrWR/1ngEcyLGxh7xrFUBooBnq7EZh8aArqjgcUipIWn5XD1KGemvmCfRFIW+IkLoGXQRLhRZDq6x6Hp2q1ZY0xrbQWTKNI+hkKZRgb3zDvKZfcUw+GVm0nKEcIfoG1di8mV3MbZ1MHnxfFuPcYPtuLjXYNmpkWOs46aYZWXVvVPra5SAKlSgDrsHZ/POkue6FqWLv1kXzUgfKAU3Qe8nlrQABLCZHCsOG/GQCOFRbD3Of6bI9vupbHzQ0vu3rnYaudqVmE//1cZVnOAdwadDLw2defz9p/wgUR2Rkhq/kFxLmeWwxq+aEvnWxy2pr0aFYyB9zzuDWPuLjQ1hH4c8n9KI+YWZKla0iOqG4e0UCFyFvK5TK2JAUddXF26HW3rpV8tKf5UQmk9g7ymavWFU5QdGYFH7P0HFfuw0gWB05/2Gp3ZyAQ3F+fB4vVFFJNum1hV5yVt5rZuI10XCrEM7TTTb9YxNN1MA5lHGGQM6qZir0MvtYnfkIo5LYoZIg5RwiaRLHjZfsyJWObJv+d5AtjSpSppHfA/Br2830pyfhU93IhNhTZWqMeDyBkBQdQ2E6PeZgRx3VnQDPI6eIKsNinZXTB+4yM7v71ywMaZvBTXXGOI0q+5uAyZZWJiPRrsGXsAtHnLAzTgF/lXPAOMz6Aq410mztoZJf+0SIhIy15dVc1vp02pyrXWM9lLe5YQ2Mbuh0vg9w2LSTTyeeNeuZNzDUz9PxRLVoAZbQAAAAA=');
