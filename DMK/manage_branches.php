<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');