<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');