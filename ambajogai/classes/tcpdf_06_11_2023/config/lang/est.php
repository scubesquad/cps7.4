<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');