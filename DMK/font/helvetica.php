<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
