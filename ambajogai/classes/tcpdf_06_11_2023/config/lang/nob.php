<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');