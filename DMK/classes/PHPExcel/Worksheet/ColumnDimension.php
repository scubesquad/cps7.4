<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
