<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
