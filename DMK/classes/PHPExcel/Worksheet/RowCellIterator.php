<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');