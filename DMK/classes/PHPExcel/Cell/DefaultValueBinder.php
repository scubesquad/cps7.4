<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
