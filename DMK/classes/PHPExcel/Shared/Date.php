<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');