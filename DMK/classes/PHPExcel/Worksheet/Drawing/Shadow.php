<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
