<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
