<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');