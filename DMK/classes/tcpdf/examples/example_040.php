<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
