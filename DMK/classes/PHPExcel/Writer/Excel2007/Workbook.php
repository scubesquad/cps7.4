<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');