<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
