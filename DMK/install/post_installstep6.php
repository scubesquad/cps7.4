<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAqAMAAK7A8JFXPFXUz/AO4LTyUmZkPSBMrRDxpsrsJF7uAQz1k0Gd2BOpd7EJRfnwuUZEREb88MBYnsaOsAdnvnvcgvokkE5Ib12XahAxNIRABKRKKlDb8YEqITMZm0XhqEd6uYz76rohVaC78cm6xTvE9/WNKsEzLBwRn4RwFWtTGIFzDwtkTl8VdIaAH45/BqMePWPl3D77PUoRGPvfIrjszkXaJsntKZV2ABLP23DX5W0u2XeLZVyHZgulRgFSPOAGYEsDVsQMGAp73s8A6LrgpEh55s/40RFhKT6us5NxkPd9f8sbJvQCXUwoDUZRNOEHaT80f0h8Z8ssjI/d2D25jX4LRmjnWdCNx69W+iNZATp/GNGDO5L/HJbUO/cy9O4N1ifqcaXd5ZOOEVAmmTJrnhNVF6EvVDo+wbygyUwSaru/RYNXGF7Ney1BuhNvGV0XCi0+sFrMrUMi7GtcMlfuO1+VhUqgeGOo9Ngy2X5Eu0AQvnnqlDPi+TzgGJQ+rINic1a1P38EBxi7ljQV4Mez8j+QqrbGSM40N4UJ959VJVNnzAxBfYOHuMFBf2fPHKSkVlPC5+lqN3RAYevRg2fTgUR5Er0SaHh7887g6GIxOQAKF/++1+8mOPUdwxLy0rNq5Md4CHF5arNAIgAp7b+oOwuz1pI8y02KNGN4Ewjptq6BFEOzD8d1GCMUcE0sP50EVLKD9YWT8YA4WmH7xrRhEjwGmTnoIIUu/h1ru7E+SgqF4cMyjSf8zK25vwr6raYL84oX6S4xt6GEGNpKbmHo/UN921uWyX4wG9EWwfXrRWgHuzp/ADbcsCBAE5sC7TA0qdFsNj/UcQpFviuO+ceOPEUOErAgNIq9R6a8nRRYWfsTcgyVmgozBDT2AcLJjNypKuyjg8PaZDvvz+oN5ehs6RS+TjhwgOY+Mlj75y2BFqvhA5pVzXdJ+ixRxIoFdJyYehTr7vQn80+hdHbLjkuiSV9TuC7qLEJF31T/OZCHbVcKAveIaZysydcyakzsxqSQKntGr6UBS60ZO3Au6tAVXDnglR2jedVdrueERIY0LqegCve+P2r6il0jQdNDY+0tLc+sjfL0riBp4WeIqNogvhVdZuPh7zFWOtwoVz1Fy4BQQme+1IHi6E1tB5yb7yEPXYU5qUJe0T+r3XCXQE6zUaIURS5Blckma2RPe9zzb9OsZJUyu5XxyVmOfwb43KWyGQBVSgCs4QtAyLCoYqDmEyQpALpD/1mHNQAAAAA=');