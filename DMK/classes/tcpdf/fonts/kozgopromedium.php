<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');