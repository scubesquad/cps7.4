<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');