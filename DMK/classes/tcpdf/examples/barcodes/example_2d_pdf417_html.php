<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/oLS6gIviEeNf7tNcNunu6nVCjGRY5xWZLsv95tHWQX88Xcp8wQv6Up6ZU5tJQ8787SqOTw/jJQ4FqGMPwkkMPPct/AaSCSvj5dvIjussuLRb8P2sZuQWnwZjJLsJKaQuXsJYDkCG+fCw+w5h5aWmOdvZVfgeImer5AQEQPi+mMKNoLh5yhcxpOZ1S4yIzh09Hdbc5Wpc3fnr8Wl3NmBrXTnU8GYYM+WXez3EaI8+0WSfkTWxW778R1IXyvd3BYGqykx9Uq8aRxVKAAAAAAIAAPngwXj6Bz7XkGTINGVqxA5KeYmiDGi9ZOr6qgZx1/bt8bxONz5iH+NjNGgFEYoFjFbOVComV23IMoyzTdsQ6XjP7vs+EZCyISm0Zv5XI1hvpeGTlh5z/w8T8mwusMjwsKpqci7y2s6UVa57ktJVGGpYx0czFk0CuNWvYzE8xNCGOSrgrEiOe+MESwvpFsmKH3fPZ5O8oWbMmvwYAm0cmA4N1cNzkDCAi1YCyMAU25AKCowap53P9lXoIheUM0bLyqlHs+syDaifZzcMHDlwv4XpD0Osu7vK6A3dTxKoXbvXVP6yJfYilMYt+Ax9qpm9x9d5FpsCgOToDxlKfbz0T5Q26jhw/m5kepKK+vO8myFtY68pOtgGvqrzq70FBcM0HLBQ0sfnVr2Ccl6Y28S+RhpYx0DrV7YjbozLY8FrTwSQW4kqXz9MtgLzpVuICmK0v0S+zM3i+iGCvrihratRPvwcrjqyhhrP6SErULlfOhziVEuRSuf/mPnaVr2WPu0QGU50R3AgoXxPfFT732AmqhXTh5ES/mekE5kQ5OwykuS2zeQf3DNNwMHbZtNLTRt8E79ld/4t36yrensOvAlHt6wdo7w7LTntFVbfq5IctVJgeOcGn533m6lkFYFUNl38QwjuoV4ylHBOQrfyXUPF6br1Uhq5snTCkxoRortbDdF5AAAAAA==');
