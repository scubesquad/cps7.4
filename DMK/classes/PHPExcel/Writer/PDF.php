<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');