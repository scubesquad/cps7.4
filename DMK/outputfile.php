<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
