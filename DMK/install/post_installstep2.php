<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
