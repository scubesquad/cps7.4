<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');