<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
