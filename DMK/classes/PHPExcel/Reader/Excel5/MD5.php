<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
