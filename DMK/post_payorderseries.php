<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');