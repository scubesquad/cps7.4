<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
