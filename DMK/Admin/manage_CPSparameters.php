<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');