<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');