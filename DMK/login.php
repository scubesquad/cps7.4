<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');