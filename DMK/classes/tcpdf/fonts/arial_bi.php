<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
