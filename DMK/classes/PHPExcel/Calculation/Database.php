<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
