<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');