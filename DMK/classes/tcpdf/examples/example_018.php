<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
