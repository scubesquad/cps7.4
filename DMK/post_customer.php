<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
