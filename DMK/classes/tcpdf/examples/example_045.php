<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
