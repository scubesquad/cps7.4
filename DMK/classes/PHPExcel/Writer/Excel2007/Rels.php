<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
