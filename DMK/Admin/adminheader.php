<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
