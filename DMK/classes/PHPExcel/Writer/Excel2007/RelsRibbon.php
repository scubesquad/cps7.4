<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');