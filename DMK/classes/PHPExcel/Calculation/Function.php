<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
