<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
