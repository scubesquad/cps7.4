<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/nCPlz1e5rUq6XrGP7P9MqB25vQ0JJl271rvDCzbs1QSbhl46u5knzjh4VsRwd3/GQuyflLCivG0gRRkPhUZBgX0FY4SdkdkwrChDVyymAxjR1CgtEk8Xq2nYvMBc5CZnkSYeUHQgLpU7VdfxJ8BUCMbTJ4d6WYoHh0YfGYfAX70WGJO4jcU4CkCdoX/N2BhufK4Pr+nIq9nFSOitgILgkpA/R3AmOu1/1u5ZWpIYhg7WF+oPFvtBGcJNNk5IGiK8EXqkVDHHzbZKAAAA2AYAAKKxu8vDGm6kgDFssVYrfYG8C7eiRCvu32vUgGZIWgdAlPGKkXCVty8QgTGBm6kBU6Ab/CK7NO2afAh27trxntJGk7MTnjGRFEzaSx8YXWsJ8NV0HTKEmwTSvH4X5FYnNg5iPfghA4wuHOGo+EglLiBHwtgN/m+NflC4ylEdLGmJd/F3f8id2BD60e3n0CzOJeDmlHh8vc6quwRK+Ub2E7IHVreC4qg7keHjme+RALS8xYmJeXMR2YqVOD4rXqXRPYFl09GnwiITmtBzzcTf3fhWeCeLIP6yjSJQZLpzF4KZq29nwQzAv+dH5tZzPl/8ZyL/w9D3eO1snx//zfHZxB2ugrWXRPAeiZI3KobKyky9Fdj++5d1c5ybQ5XZ9NXqAcOHaKmTSRfj95wSYvrDYEZ78baDl2QvLMCRrZK4uuGzYeY05MV2mRzmUpswnI1OVwRE9IKAANiPFWE2L66QCJXQxkofBonFnq2Oo3Tg4OsUIWCGbmsiqu/p6H5RiDaQKZaHdha24XfLl4TedsmBUn09piYiJocnlkJkato1dNMFAJa59rCJPebc6hx/Yx2evP/cW5WgMDz+eapctgn1ZuecEdBxQwMlsHpFQ0A+4KBxA+Vmx4RpOh7GQVI7G5KfFdUS1yZT9kbyfouMJpjZV9s5r/fiA3k0MIvUdn/q77PSXD1GNnGCdHJZeS8/ORAbexy3pseoJ8iPTkQGiTcI9YjUzCQIShhp2tIb4OCAxIZ9UeDRbQMzyETibKVOX4hVKblSFwA7j21pUAnaZIdX6qXsy/IQlHJbmx8huyHDmIDK5Xk4Jwnb/ZQWKp1cR5TJouBvvqh6ob6/zKTM7JY9RB+ExVu9mmITU3I8Y0EUHkyq8U353HNfgwY+CdpRIrJTFh8n/uze7mFLhu7LgdG6UkOseQtSuv9bqEVWTAsWnYmddR5gJThzrNwaKzQk33znXjUh1ypFO8uEQ2LPZTxhxWc6soQeEXG9elbS1TMj3NslMNqP4jP1kUxVCB0kCWF5TMgU+v9PEjETeBfQBu1j5Bc3EGLZF/tffTg++rtru4qsdMyMZteXdTdzw3vkNVHD9bMiXzktyTDNKikEEKh2nE83uUGXu2P+YO+D8ha3tBhbnDJg9gP+ThfYkVwKDWFLlVyVESJqvWbdH0vsKQj9Tn4WZzrWWZ7AprXmV8pdrsVLsA7GWpBAr+NGgGEPuIsgCUlWSwog+Clm9cL6r5M4u9yBZUFxn4c0TcZsLCLoINozglvTaTKknoXvuJrgS21zwWhaY6QveB1REz21/EJAgr6f4XWtiJH1dsYS1RFSWSAN0vvjh9RF85Vckvx5j0Hlwj2ZfvsU6hOISwE6K7SvLVrNN3S0ap+y/5qf3qcVElCnLSCypXDnOQ9jthBGDIk1H0jlevm3ay9Ple61hWmbWsf86XATjdreNgR5jOQ/Kzd+eUcmVKSpENOxnRie2MFSXQ5Ekzterln5+K98IlFopl8wU0TgmFLH2DJTl5di00i5Mpf+AHchDh1v4CkT87qr2gU0w6gtBskvR8m5xSYul9eQcg8ONsnTQ02KBJbcgwzBI30NoHup1ph1GC+g/oEcBSvENAurRiOviMYfjrwujhTA+pFfDz/YPbptcSUeJXnwao/TlR116S3/RhnHkboxqkAjPjPGS0fkkemy4U4q5J9lGLTUz8leUwtVCmjugbTqP7s+pNy4xneYwT5Ue4gCfJsbP9QzjXizT63rlHNTq1D8WIp68IhEXhF4n2HkWPyop12qyWVgwAZ7xvgk4WIxUWY52gljPuAR+0PTzUJEB232u7k5koS118hYLQUaa501bs6amYZ2Vj322yU2Rx1h9w4AGdjlnHZ8c06KjVM2SKUIVUeJQihoSSxVUV/ds7L4MuKep8m+t4jNY2waZECam5U5cV/RyfByxTpRd/xGGMuiGjCxDOtdodo2ZJptMhlbQ4J6MHykk35NO0HttHKVU4jo+SlNIUXh8ps0GpP1tNiC/5oXUK+sJ8/y4qyAmGxGfDfzS/i6uu08Nh+tlcX0fuNvLJs7yBStXDoyoF9o8s3cjhieoSxaVnYfZQen/j3QrwSOoqGO/ElOSBZgJQxeoqZt55tKUEmUd3E+MfHup+72i3V23wFCckadrXtyQuez23u8Yd8CedeSiL6bienwLjla1EqKNO+etNo8FT7epDRuNha0J+J5HH04TwYK8OXyt85kVDvySvf7jS9j7TJjh0Glwl9P8j2kwRUV8Y8KGwlOdHciGilqXKlMpBZoxYY9VMr0QmgQiIWQAFdZQGkw6YYuAtkc3m46IiQ4sGP+DjbwguLg7ysj3wAAAAA=');