<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');