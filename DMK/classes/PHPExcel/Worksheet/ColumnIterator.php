<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
