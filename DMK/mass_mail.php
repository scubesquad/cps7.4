<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');