<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/qNR3QWjzuDkqOxXomMLSGVvrV/oPc/MWKDHSwnRDIO8ZGDwZSvPVWN5DqKNZZqsuNcAnuOmhvxe4Lgm9c/i9JxQWK8n+JMrDliUUw7Nk6NDr3IDvvW3PyeOJRBbd7e28YfF0FCVqZsUfwi3zlOEaZNHJxh/43LhG7aOaG9bUci9TBKf2e4jYx6mJ86ogEbKRp/+ltX/CWtXkNuyRymRdgyaIc7gr8TH3bF5hG2FrgKWuGtwB/dky0R7igLf1KfHzFDGEo1ozH1tKAAAAIAMAAN9velU1cwo3BCT5UZi8IGoH7J9b9Oql3Ff0nd3KgIVdFAUpvzivbAjSLUkQHh7GJ3hkOaCSn6UPc4QcqFr18UTGrfwpgHO7YPNI7DaI9TD1n6ujaL2Zm1KUCcVqSyQ+PxjcrLxX6MpLszVYrkfQBV2vxiHqFB5a1h2k70cp/iIJmzrCSZHJeZZD2OxTzbQbduW2Juz2k1N4OIvws9qPDKDTRpE52mj77U+jeCawuvPVVHZjgN1seWCLnBF4BmxUQNqwNMG7S6D9F1RJeEYqUW5r54MSteo11Ra+aDalFM2Ord1oyq2U2nUKZlY9C/+5yY7Y1z+mGyi4t5WYIjDY5kfXs7+T1ogqecKTUnpvx1x/hsILMAjkUtd3JUDZaCbYLA46YAIwSWmpkl/kup7WQtxHNjg3xtBSmPXGrJWSFlVlSvQDhmaXoY3296FzxFyMWypn5taEccunagcUoP65oeBBmgD/imgUJv1ZuBQ24q5DQl8xctBUNgjNAwXEObQV8R0cOUUeFqLXeNfLYBlH7xUZvl5uH3rqPPhV0jV1dngSyj/+1todLzjEtWF65XbkL+I+VESGNBA0ean1KXzShtWvKnoOHJSy+dDIdFOsUl9F4+sq8jBAKqY0got1TuBZnHnWi1qGBuq6zXKhsSIJ1WD2jan7x/8ImoIwRNLmqLXNITXahW7mRD5vQ6XlxeyBv1qGscA3oPRfNunr//Nn7r6QGPGYexl0h/UgKSXsRgwAGHn5g0pmd7tzHpz2ajMo7x7wnLrluyb+0l7VYGzo6lCSVNyl2a1F977MLBMfK5KxaI3b2XUb/9HgtqUSL/HYtA3J1wExMCUyUNI73gPsb73FjH0r/94wh/mZfLq98RraqxZkiA2NDPh1tfMQj5b457Vpi1grvqiDijWjt+vBPb1iELKmDIWor2Bj+DAsMJUR7aiL6xN35ZTFjmtaFDH0ZHEno8Et74vGwXBV82czOh4n7outaLs9At/kdkn+0qddr3+eLPxVqXA+QdTnqERRWm/8H0p7M6RU6F6LTYJEbwSQ8LOPNwos91rJckmzDmGEAAAAAA==');