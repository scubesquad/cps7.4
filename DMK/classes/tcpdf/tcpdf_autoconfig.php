<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
