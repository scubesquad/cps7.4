<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');