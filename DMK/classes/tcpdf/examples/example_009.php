<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');