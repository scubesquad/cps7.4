<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/WZtKOvpYXQrXN6Xk6cubuEb3aXI5/lgtf1YnxeP7bmLUvSMXGLOJIYeI6mg4wXV5AUh1QzAg5ZExUNIMBbG1TQoF4ZW1E8nr6Q4oxJ7Sv9rgMfkjqY4DjJnQ9CXinT3DuLJt/RF3DJdbF2JcgQeZWfj4+QYpJH0We5W9zRs/6nXzoIleAr395u7k6HIKxGef0YeX68IlfY6nV5Y3PIy6OhUvkyWl71TPOcb4EQueRBIjl0vfE48U+pSQ8jbOMZvFF82wYvblMohKAAAAkAMAAFlPxw2OYEABrnojopkHco7hjM0jMW79LpU3neS9IJPWtwCP8HRq24BS9w3+UlCBu1gGGkn/OALQlfr81rwmHKvPeK1d9LSE/aAXXhv+ZhFzL/vxcabBfil0s83Ol9NpVUpxZRSgYRK/gGiEfMgUN5x13YxeV6ma9RSA7NidU3FjWHjK87TCrcAgPJUXsKH1D5mM7jQ6/atA0XWiH1Xh03RiegKpgDtSBjk3yzuD+8SKxfAcilzeHKsWzLSsbkOjOwj28qtCSnGJZTvGhLSuqxcCuYNlqIG664CZXNneE5JZTK+tNBaWLFdKAipeWKf17mLA3RPoCj3V4I3zkgEGmHoGD8kfGdxW6pBBfydpqP25oxo0nwHljGkBspxyORE1aL+0kc1QEfJfqtJVbDDNEsoJUXLpzQsJy+M/CkyVYCCWyiGqLqPxpjZYt1w3XY7mqaxVwP+5obeRRNFRfORCtXm1bIwtQfkhfqWkHxlzXLENytR3JZ3H9zCH19y1EaIDIuq4lsMUD0WFf8Xa3qmskeuzDlzkEQFI8FPtSFo/CVYim9MLeFsfxYGkpQlUhBQhQX3zmWkGX8jW4R572F3z/yIFqWnXkrTwG6AECdTU5P+GiKAsJA8m0D4xLbCa+S/NCCI7FYNQK/ohQhlQFNudb/sBgyBWks7q0O+q174ODMK4/biLXF/HPJhhiQBNqRmi2e63Y/V6CkAgmjaZZE7NDO/fQ8APVa7K81fVLFJ4/chRtbZlN+sgBPxETqlgnKw8dj0uUPtqtDQeNLdSargEsu09lLxxMA0iGCcJ05pKTearg/r1eXzztaiCZN9TCQkkfXQvOrAywfO9gKlUPkfrxGCOFcHv5V2fJfuvTMpbbgiq4hZnBgqGB6K09fZAEybDGK7yhNmaOAZ5eZiZ5ehqb0ANZAaVCls6QQ1jiHt3BpOTPoRTIApVbkMqjHm6ZXpOS/SUEM8+oDj5zJDqA4M6pm9K7RIfF4IqZy2X9cVSYXgDizexEWMPBMcle8aO54XOEczfXX9Mjesu3Z+u0y2syWkwYhE1yIMQ9FrjUHSkTNFSlRbZeet0fMVGvUrZRTYyK77y2H/qWY9FNwTRUeycJoHDktwkz5Siw6CVVvKK68puPJGkbyhANTI2pCrhobEdpBYb+pxH1YgdxnRhe51edUZA4/VWxJBiB0N1WU8vLehKCIFVQIHXtc2T5WgD4+0kUAAAAAA=');
