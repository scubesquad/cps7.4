<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');