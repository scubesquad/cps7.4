<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');