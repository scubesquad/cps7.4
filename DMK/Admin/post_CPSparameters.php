<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
