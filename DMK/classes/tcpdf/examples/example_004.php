<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');