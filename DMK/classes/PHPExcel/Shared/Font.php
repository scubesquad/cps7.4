<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');