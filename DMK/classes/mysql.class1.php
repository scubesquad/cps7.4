<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');