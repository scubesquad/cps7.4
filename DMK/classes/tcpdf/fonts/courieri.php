<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');