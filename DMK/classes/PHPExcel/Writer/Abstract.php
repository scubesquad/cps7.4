<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
