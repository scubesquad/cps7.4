<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');