<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');