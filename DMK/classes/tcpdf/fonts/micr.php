<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');