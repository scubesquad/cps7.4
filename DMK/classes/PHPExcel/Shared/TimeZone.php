<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
