<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');