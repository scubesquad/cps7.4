<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
