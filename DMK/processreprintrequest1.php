<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');