<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
