<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');