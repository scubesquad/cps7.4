<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
