<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');