<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
