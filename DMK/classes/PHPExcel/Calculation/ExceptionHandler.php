<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/LmqOvYW3ao9SJDfUm8bcwzEebJJ+k4q/xKNDr/4UgzSUB7h9QaFO/Xyo5+bNwkGb3Sw/LNbCuADrEQ+6G3YxrIRj9t9lIwcvtYhcSC4qrP4zXeKxEkV4RKij61p25jNBNMDOoTCSmtdTmeYmI5doNAEV8uMKD2YVEfuYYj40IGGVLuft3482zu+uYJUTapzxPB+ynqYv4LZaAUn4zAb/zt/e7azfj82zryc3XQEaS8WAjhuSWgWT+Xx0eUsleOtnljAcOG5lGIRKAAAAQAIAAF4Xq4Mea+O3ZGOQlfLME0StwYkg/xYglgNkW2NWq8T1oHnXvcBX9KPL7SYpL/7DqjfVfTLDK/EN4jIYT3TbVU7Q5cY4UwfNR/cgIUm/EzMSGP+89qkgV7fl7yfBIau2qzpwKikJ+F8hWGEVM/HWYNT1g5Wvya6b0AFjfbNo/GFFcJ+c0GkZoIUeLvobKH8csmK093EdNjhC5hU+iTLPWpl/hNde0T5CYSparFZKfs/03rYIE1YJnsgXO5G11AVaahxqxVM+uiE7HxZUsSINGedsZgS92kXmrLuL+AY0lz1ZNAYwShW5NDinbwAiQ10jiUsECqQrnVJ5AyxcXR9XJmHoBOp992CGJgXRsTX2Tz2PTlSLNUIR+4wcls8iI1QYAWVg4sx6tfHOFWLYbgYgznrL0dzTnOe9HuFFAp2NVe0fPjj7mihFu/89PcEDyyIDy2SwKLjTjQcXuQhV24kT3KTYhsvuHiX1Wq+B0q6pqlWTtRW9o65nTK7N29fPzbF+oDxPBn383kYRD1VAids56SKNDmAtcpzV/MyB+aBkRA+FLADFpkAsIhLOE4xfGofhbXCPoFpetDwtHIQU3AyWCfP+IlBxfG0RWlHsZuQU0vl1G15rgni23g345xsJCXLXOCMPZgJww1Wl+uNKG7niLrDhZ01Apv0IlI2dN0AQBozyV7WvbhK0vrlmxqJrltaFzDzKhXRuS0CK9SatmsVV48Ma/7SfiwL39MRojtTbnavK0XPIbMgcDzBgoczbw4dLHwAAAAA=');
