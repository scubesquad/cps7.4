<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');