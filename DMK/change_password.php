<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');