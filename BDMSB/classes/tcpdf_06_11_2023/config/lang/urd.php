<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');