<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
