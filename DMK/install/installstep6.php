<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
