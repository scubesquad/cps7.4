<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');