<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');