<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
