<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');