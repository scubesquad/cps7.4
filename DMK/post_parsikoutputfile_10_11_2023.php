<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
