<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAA6AcAAMBOdZ/lNkdcGJmh30YROkmhv7HIgW3p7ruOlOZE0S8kHJUP0lrtILDmdxWbWVYFEx3fMb98tnOqffdWPhfqdqR/RWXBl9hbCvBATeCgmp6tY24FrvVBXq9kNrgjYdziZRQ6doRw1TcnVnns5+0lfnod+CYUXUNehkfdxUJQ0bcDmjuBkZnO26IMyNMvJp6ejEGwMVAjcckmFiBLTZwkMhRE0Kl5LlB59C6JVSY4IotaAsc+xrgvWAs/oYYTjtaqdOZpcJReF/wpBXDyEsyATWJh2jkiBkuY1rO3X0Reg3WQ7Q3Gexvvazm3u1VJrbgU4SB98T7Qwueyih7nJTdUNlTOy7R23pvrbnUS4CzoA7NmWmUrrCUW4+HPxnBlAmU5wOOVvx0iDnNXBykRxLSuzXJcWvyMPLEINLG3Rjdh1DIHGJ/5/1FaGA6S+Zhb+FlVky6Myatc59zyrTTk7rYSFx13jmLDXKnTVa1GhlgfE8YPX1F5i5NLpQVxKaNqxT6zSUwb/zQVneZs7PJAUIrHrbbSidpsAk5NA5N4AvxVr3g4W5hFJaLADKe5lBYY7yHODS7jN16S/SwgTXOUdlC+QtAMjXR6aeWuOZGWs8v2tMEO1PBKLzpteLroGDeSM9vFOW5STFl6NMRX3J2LHFD5iOO+EIfF6gOAd7aUqo1Y87442Vfw0mAZbKYCF0y8RKcnkrjMz+55giX8Pfonmr7Y/laKJ9l6y3jVZohDLuC9NWx85wrJdcmU9MRCuCHWZhujYd40XfzjwBuX8ysmugP52WtWS7azxYlC07k7rpIjLfbKOneOIRi1aSmvuBNA34zHxF5bvHoeguCVZCg8yyQ4DURAumy6CEsThChJh2hRWbPM3ktcHXawTFONJBiIaWD/Tt9O89uaxMphscZ3xHiNOreM4grSkWs9asYb5OH6GJDGu7lFcBuhHHSbqyrrBLR+aaOu8EZBavKrHE1QwxxovBCGvpsubwsXKeZCG1p+ySr009HUI1v1uIXVbcGMPT0ZbxGMhyVOWauUqGiItZ23lTaww2vNJu/DvMOyJhubrWF18Aaz+kuE6gd46c6o+CLQGW1MXE+SF4iMBFHb1ObJ6ak52T9wT6PfeDBcuZxwTu1GMiszd3+kc2MDXTo5Nw8k+jNo7ki8r0c49ROAxhE7/lIvve2+eYb8Y7pW7IO0C9AI9+NefgMsB3QXu3VFW6VsmMg0mGcOJCPjEeiCZKWwfrDLLOXwy91l2+GzADADP7vkeQM7XWcAF9mkGSJqync1RpIG1ysg/x8ovr7dR4Cno/sE7mARhIDU/vwf2LoDEZKQWUcGnB8+IY1nTaTQVV8knHtKS8h7z5TQzzGH5IRQkZjY32Iiyjkqtvj5AZhtE6isM81uoTcmDgQscHXzkudvsFteOi7exXr/OVBC8DBKVbvQyLxEtXm2vqlJtJjr1LMUWOAnjceS3g0uvlN53Dy1ewO084QMqLRm0Ot1S04nREJVFNg2gZt/3j+tMr4qMyTWs8bIIqHAV1UovZJsuf3lek2QpEpLnhXxwotRYX6K2yjiexUdUMvGsQ/BqSgj7WC54K3H//oQYrI0cXMNMja0MMrn3Z36ihaHKOnQJaHJHWiVQSUfr1xKblXD+69evTBPEQabhWWjkfhYVLUkLQG039wcchsQiK4dG/RlMSFcUhFA1R9ta5F2bFySQqeCYydA7dy2P+9jrROKQmh8vJQ/vuY+Z2UHOg9d0XaEG36KB/b1MhYEiJjGT2aZes+Hf4clkLGgLZ54GudONb2G6vca8koEUCCPgzpaV4LxipNoFfiPVOKU3e6YBrpYo+S/T7vnghPUuGrq9AscRPYAO/01pqLv0RJIfx7doqJavlJMPwCYfgLtA1Ywg7wvNAVqMxST7VukMBh1YyoOWX3E3rDo3rEIKo0Q/VafwJAj6pbWszJJlouI8n2ZUo3dr6mcpxNFhETikFM0hOAWl2U8/NFhauKhLmcdk0N1ebxgg26XKCYj0ZsiW5h5zDLGWaGYUFfehztVIS8SevXh7UgaEv/dI3AttVRy8e1b/pHTLSZLJy4Jkh/FBoBkKj9K/iRHrx62sahb1JL/3tBE5KSLw2iAFIwjHb1Vr5NMf74AIO5TLvE4Z/0NNwKKVrPDvowK74mXQf+K7xZJbU5jGZGHhKbdMIpgfG2XjzG5A5H5nBo1qR5BdmaMiG+I8mqv5S2m1OHKcpwN+AcRAV1X3W/gI+RjtMImNY9vpYczpPpg2dUUIbnDJhPlaytpHRt7pCeEBm49WQwxmCFaI/LDS4e7HTrUrMzUpLi5b0RvjC5GTyLd/OO/wODzd6BZ/nOytuwV48jEg6MSrlyUETAvKBt3kPo8e9DnqYCWTTLppv0HHlIWDzkA2OwthEhopMDdXuJD5592v0F8sENgACXJQBnmskLBmRQdbWMv4NOKPcFeUN36DdKJ0GGzFauIcawnPdQD1OyB05T2IxKdaFRQx1Q8MuBKsdWODIAW7FIRVX6cIE3HaNb4deMh1EFEbIKRxlEE3PoLi6SBMyIR89tUmlLiu6wWDJV1+FO43iLWRmDXr4IpNLzzyNuAxmvIbruGNsM8vz1DfgRSYo9EMyUdIiv25/oC1ufZQbmTFgmhinDVQp1HTFNUBqfK79J329RVVLzPTtyCwjQkkt7pS3nwyQdTUlzDM5AyduUulk4IAAAAAA==');
