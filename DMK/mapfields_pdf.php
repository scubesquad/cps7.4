<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');