<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
