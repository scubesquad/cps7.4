<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/nCPlz1e5rUq6XrGP7P9MqB25vQ0JJl271rvDCzbs1QSbhl46u5knzjh4VsRwd3/GQuyflLCivG0gRRkPhUZBgX0FY4SdkdkwrChDVyymAxjR1CgtEk8Xq2nYvMBc5CZnkSYeUHQgLpU7VdfxJ8BUCMbTJ4d6WYoHh0YfGYfAX70WGJO4jcU4CkCdoX/N2BhufK4Pr+nIq9nFSOitgILgkpA/R3AmOu1/1u5ZWpIYhg7WF+oPFvtBGcJNNk5IGiK8EXqkVDHHzbZKAAAAOAMAAC1znyfpRK/TyTwTCr8NoT/hysNuchXmaLQAbEhuHK/DGv6jUz1QRY8pIKtB7Bc8Zos0IIyCpINFegfrS7JdFER9TsGe6A3OwKKR2uD7s8dOYhKIj/0pXcmYJUfV8MLlmAiwMM8fwmsgsu1Xg8Q1qnFQhHf+/PhOjUcnJVZ4iKvwb9K+iWGynMUaSbOz0itAODNb8eKfi+1QVh6o7nBTNVz6ma9Lla6Rfizsan/RWgUfAKL2qj9PNAlFKEYu8g4SR63T5hxlGxZ1LT9sekuy5dLiUcY83AyrM55G2JErehvNzHtrwzEqSKAOThODdO60T4NgabXBAqugRlOY2vdPERvuA4X+9SpEt9a/Mp45vNVTnhGlQVFWBtCM0c5e+VR6z9SzbSr5hhQH6y9fYdzMdzOI6tKvAzo5TvQGOXY/N+jVZM9gq6SvA6UGex88jcltyfL+XOrIW2qV6H//B24cXARxknjilY4pneBNuZnv5s4fYGFwYGDqYsJbHZsFO7YoW6k6XtL2ziyx6syozH0PF6CLF9VJQykppX3RbenGVhzgT3SZD66/C4y3s98dspX6auMsNaTRFU9HDbAr4lLsphPXjr8eKQ6f3x/BSL0lOJdHIUVR0C2QCY/IST5LYAtVgKUrfeF4Bu+epECJQR9TcfnAbjP4v6h7LIei+/5uOIr1Z55+3zrQDtCejbZb9pLDqpikVsSXDXtshMLqmAbhGqB6BQ+kBfLmNTaO4eAO7SnK5Mfm52DM31Dj9IdWt3JoEX1cxCdYvPFJEv2e9Ez5RyZP+LCoTDG5JtgbCtmeZiMP0wv6Zk+QoCoprozMaHg3xVxqKKK6hHJymFp27z9E/D8FTuDvz8x11KJaotcBzhoiC1aJUqNOGm/kuGbdFh44mHu3/tVtoW3JbLIRvteVhsbOdBInWxHP4y3/MWlNxNlfrWusnpK87/vsj3LlKzIajo6qKVKHIsx3VNdIhA3Lov5z+f9C9gxGpcnEgSNtZi3luJupEr8dmYkd8n2Gqvxeu0xLgDLx99X5yh1Tj8oZxQrNxtJMWcR1ujjU2+0J0EFe76Z9sEUAho3de3vxSY89GvGWMOmoXG5UAAAAAA==');
