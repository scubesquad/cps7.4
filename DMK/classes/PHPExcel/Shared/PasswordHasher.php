<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/WZtKOvpYXQrXN6Xk6cubuEb3aXI5/lgtf1YnxeP7bmLUvSMXGLOJIYeI6mg4wXV5AUh1QzAg5ZExUNIMBbG1TQoF4ZW1E8nr6Q4oxJ7Sv9rgMfkjqY4DjJnQ9CXinT3DuLJt/RF3DJdbF2JcgQeZWfj4+QYpJH0We5W9zRs/6nXzoIleAr395u7k6HIKxGef0YeX68IlfY6nV5Y3PIy6OhUvkyWl71TPOcb4EQueRBIjl0vfE48U+pSQ8jbOMZvFF82wYvblMohKAAAAqAMAAB/aW5MYm7jY7C95WUbE4IKDjscUWpzN6rV22VFqmq3XwucutlvLMqYcJmHYBbV3i+u1NYCoZzQRSsfDMtlFhzfsbDyAVVXFm3fRppiXtO7FGy9DAoT+v1Z0GuhMSoIWM1U8ZlTT20YALbwhjkmOugA/9ZJzMRuN33+13OxEnNAlWDPfpmzUjccAi6Nx7hnto4CkMfzqi94LAMM0S6Juc3UgL68aYCHx7ClN26uoRX0SsZvn3NPQ56557CDNvaFIshkQ/4WuG8HE1O27a58mBCGJACuyBkfHI5mjBljuwXTL9gR1UfcID/5tJjPZ+vMG68TTF/TK65xNOMHdHkMtNpWqpek31kENNdPQLfjJI0WBqa1jD9QtBC/iv1BvE2TURrZJ6aYG0p3SUt8RwzoDTNMQfSfjJH7DyWLsHESwmy5Hkhcmvp8Pd0chAihn/RGSVQauo4Xg1QfazCsxTtvQZxoE2Qd0S+Jd0Yb72n+VwZewOJzkrwmXdkQus5g6RuMEbrZuLddh0idE8lJ0q/YdvDWR5rYETtRzeORvydxlvHFKn7jHSXvsmk6ZlgAANTFyyodtMy+6c9ZNIdq37Uu5XlHeNZ23OWk2hZBi9E26I3OHNYSreU1SUXUHXMKrVPGJ8idd5ErAh7ClaYrUI97yEVv3dfvWO7bXORTJ0H3u0FO0pkshHqJpLKUU4rCPOpfw6p7P/+sUsLbTIumEsIo9kxUrmwpbWLjvKRwX1WyqcnXtqXtOgs1Nw1JSS/ZQ1BUhTvyiIyxpbE/gC6sKv1ATmPoK4Y7m97iBS4Y/5Y89RH5yK9F6tSFT0sSSIKzWxVNa8z8zoi/zfWXuG2G0FboI3W7RQPbdJAn5g/i7BpDuUrQRNe70olcq2o8jtdYR1xYZFF8mgJUcKjlbD2zUm/c5hmbIczPEXlD4unsd3gIbROSg4JRjmHJ8dEbDDLsQV2fiGzjwNTc7mP22xG8FtInF9a2/5W6fCVsPBLgRK+NHoMMdjqNByvRvo86WhN858T5+M9sJl95uo7/o+eO0nSN9VLbxtf1uib4VhyiUusxrBeUPP17zqq/v1sSSBtdeyR70Tl0hqhCP4a9Wce8KP+z/frH00r02DNlDtk6EL7AJ0MiIUxfIjhpCzvMnXaHOkE3RrPzGvQ1yh9bnLYfWjDHkqJxqYbRlew22VLJSibyogSYf6rBxknLZd+PB0Z1C0MM/WMdRjT1ySSzR22FcyV0mfRDREEK8TrcGIAAAAAA=');