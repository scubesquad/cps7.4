<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAmAMAAKnqCzP9JR/OdAEecBe8RkTRpgsY4AbofUegc1BKDuyzrtpvJQY/JQAHkpBSc9Qu4mFs8HBuZ++Ocga31ffIfyo5bbg2Ivkvb26uZPwowITo4cnfgbdhJ+Jgx33gQUQ9Kcr7DJUVlwDsRoLQsthWLtBmMVXJTfYvwYt9Dj8/848auuqmzAT+6EdEFgTzvigM+cv8tWfBQvhu+wn4YjsWT79OPaG/lfN/ECEbmIiYrHo2kkvgpSnwONmGZ9jwku9CpLRe3tTLitkSmDtu3jVsamirX/YktaUAtJscqYaE1YcmMq6Qe3e611AylQxrjHl+cAElBwjkieKDLKc2ImhWAjlU8voNoyrajoU3bdlGcu+ZWBDDcgbeWPvuyjIGDJnDlW32RA1763l/F90XlCcjR3rjn66dS6geBmZYCwxX0yyTJh7DjUNJsBYbfataGykIOtF8xK6id7LQzRBoa6ADLnpldNZdZfMUO1qYfLXGLfms4ksUEsPEVizWBSzLEHt2UVrIIRbp/XqUkPWOuGPcc4xnA4FX+OYgtQqWjG6faipPBsQXlcGAsMgz0VG5/IzQ9pV8NIQK+8w8YkAgeofVs6gPuyYJz+Ye3Nxu2K69CHvI5f3mvEqH4BLxQkbpzHj7rNTannk+CYjX1Het0cismJ47lreJhMLpsFKPm3raFoK2A8WqBZfRb9Jj/a4b7xXDdForMNn/qn5bMgqYdZ5VRNd4Mq+NZPZMn+IPPMzXuRw5VElaOc8G0ODR1IY5Z/9wHmKPoh0UNMXlQAfXTKbZP81/QMaQPH4QOD069yckHfXoMjQqdesGLItl1N8zd24YUi/9STHRPUWRAW+MU46NvvI0pJgfCGqk6T2W1CDhZ5CI7omJXXugOGTZrZAQfw4dW8TFtlR7gupVRalaT2wFzUITpem8yUD3spXCqhcxGfCKJ6yvLUyK3L0ERzcY4UfktGjubPLgAU+1av3IWBooeC02YfJNTZMdycS6hjcAzU26JgW8swozKcnr5K6XnJWccdLLDWupkSEhuOhpMY2mm20G04P4Y0eG3QzU3d8saUrU1dwgsMiqWWGwERfP9s0E2+nxatWcHHhbSKJ50DqqMVTeTMOqMlnukMexNJM4Sm915jYBbSKw6dRZ0PZHi86ROpo/NC/ji9i5ad7AWWikObez5Qw/sZcEJv2pB5SEywLtF5KD+heGWAZfZof1fK8mfss/UpHD11c7AAAAAA==');