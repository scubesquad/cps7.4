<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
