<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');