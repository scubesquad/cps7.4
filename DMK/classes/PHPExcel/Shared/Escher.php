<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/thCt07u2VZZ33fVx7o69Nf1drKwmb8/vqRCyi5YEg407dBPGKojnsRjhyCVKUMxZpoZGI48mm//5Rj9JYXyWisoYL6gzIaiiJMgm78v5kLL4qpQhK/F0HDHR19u25wNTu7w3JlJDtiB08VSuwGYFH8NriCCc65D/8Z48xtFl7OFYtjLMUgNG/Iv2wU1Yx5w/UFkHfizFddhgbeJb3Bmek3QS8nUABmZAF96O41beEt1rgiTyYHrZtaZ7AIykfLzlXRzIPZNXvn9KAAAAmAIAAJrFGEjKeZ8qHHrl5Ne8nJHL+bb9NX9+6RmQx+lvfQawK4AHoKa/R/A4x5sDzaySvl74VC3RdcuOavxZ+gI5wozyDA4z32Pb/wr7z9WhuhBNn4Jkldu2MyBif9TFPvPzKR4NiEe45ixnvjADcCZ/zZ7Hgb6MCf83pbY115EfI4PqA11XJDyB+ZSF2WjyyuD8xMuA9x19TLh0nG+cMiMfvGuXXVGLEY/Po+qSqLOMjMbWHuB2DFfflO6PqO5comYQTtL3Hq+bHOsvsseITjrIoovWRSlyaGPuYWSwU5F13mM3RZqtyCTbdxUO1OEfb5VjMkb67/L4pk/XJ7iwDp5+aBA/+sR/CaAPdopFC2bTnIVRMjRoY5ay5LMvLtXD4bdOw79DCjbtqwUy3ra422fV8fq6JZq1qNX7RokumiI/CRrUd+hLGYb4+dvl06XrNkuqaGUYW+oEp96hMxE1l4NZaBjtCRHAl5AnmAth6ZHJ5e3Z0EgrdZcbcZ3ix708gnWcyTRFhOMdvVaImNu//9HnmukKpQghKEOBhQE9w2yvLvlw4y/C1OUdSQIDOcm+v2PUdBCIBqGv3n0mJ3x2lNI5EQ+AjJHrq46PC5YCAivwQW86j9DSZKtg5keqN/RgpcXAFk4YGbPHIvUNOqqSto9zibZ00rRWLPXfPj60FJJZIjKawEG1wN5AW2Hf2PrusZ1GRL3E6UkdTuFOv1tyXpM1MD8lgJeJI/rJfOuJQbSVb1cFiJ9nxdzzxK+RmB36UF6TSq8NdWV9ddYYS0jQSJvCtY2RxUASPn91hCCtsGK7MUgfJhw4Etr7elU0VKothrVEfQzDU5qJlPcRMSzCwe0SiBKJKzPhNFp7ZcjhkjPgax29b9uU/Xuwo8IAAAAA');