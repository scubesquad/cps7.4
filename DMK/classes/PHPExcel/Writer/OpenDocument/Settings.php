<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');