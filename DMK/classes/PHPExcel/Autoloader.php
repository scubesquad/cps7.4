<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
