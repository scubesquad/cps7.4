<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/nCPlz1e5rUq6XrGP7P9MqB25vQ0JJl271rvDCzbs1QSbhl46u5knzjh4VsRwd3/GQuyflLCivG0gRRkPhUZBgX0FY4SdkdkwrChDVyymAxjR1CgtEk8Xq2nYvMBc5CZnkSYeUHQgLpU7VdfxJ8BUCMbTJ4d6WYoHh0YfGYfAX70WGJO4jcU4CkCdoX/N2BhufK4Pr+nIq9nFSOitgILgkpA/R3AmOu1/1u5ZWpIYhg7WF+oPFvtBGcJNNk5IGiK8EXqkVDHHzbZKAAAA+AgAAOriXWy6mZ4vuNeYgUlZK4Vm85V/VbbZt4okn+Ev5aKh9feqm0wAzQOhT5gMW889rhi1nKAL3KLqn4vPbL9dPbkPHjVN206JAlnvtmLgvHnprN4ODKRSywEnStHs7hfaBByVzjjRzUZCcqyOIyh9GIxTpxPaXpb5NpAZsdSupM9VnuXNxHYAIS4BhFo8ymW/w/6tUil0KIkuKnX7CBn2EAvAbpaXvUQ89HeSvH39cZIg0lpVlaP8cJOKNV3Kb8sao5hdYA7UY48/5sf9Izv3fm1O33KGuuT89lz7qQOPHGycPdUxhgmpV7V+3heBj2bAjZHfSsSMdRrpLZXWvqlz2AaQR3AAI6XNelf/qFvReQfUvoViI1NO6+/rN9nTY3F+Ws0z4zLD7/oQEBqcqF3XljyoGTi+AdbVnHcGHHQJrf9Qi6x6Rh+2JSAYzy03/XpDE3fuUR3fHkX0EiJJO4Qt60QBX9OO3L3JODrnpSDdOJil9tWugw3SxI9gvuqh8YsPrzMItEzmVbwVzpSSNALS+dvkdoljBzLgaOqitlHYDKbMwZUpAQMmNtUJxgoNxtQedNNiLXvi7DAcDb2qE/5ums/5C+9DlaVD0XDUScMc7BLVr3+X4wcaTD+DF/M4FstN9hUbp15UjpMn2mc59lndBz/yyebpHSjYgoKZYPOxRCFUUdLsqe3xYTnEBMXF1qzKcS4XLdPHiQvxvbVlF8p79Yf/dtkdjYMUrGVZ96b07ifqgv1z0EFepDnpcrl6XsGo6TFYRCAlYNrXDZ3wObRLIGcaqT5H+00tzgWm1pD9ZfOq3tFVCiY69c459rrrgAcDUAicFp5FoWoa7c2xHxg+Nu2Cpmp1r9Ab//kW8Dj7fHlpKm74k0SwG4AYL358TxsEt5chcGbNNo7+STeax78Gw5o7BOUJPPSCbGuXD2nWgPZgJs4jB7cBDBBp0i9KYR4znrVwprQZs1H4mPbO0uyYdQf5JCeJNdV0lrF9MmdqueCZRDZ7O87Z1kMehCMQAoe8SHXOGV8k0xdz5cP0SB4ucxQ9ZG2UoTc1NJxJixVinq7wkWiif8T2Twx7lRqvugRkYppLEd5L54suliaZBxBoGqicNaga4GYJev1IaPRig/7A5r3otVOP7iLnK5PZUcEJg29fMoFsWTAKX8h/LIw+Jvc3Ty1f4wbZ7bUf474pfp92BvhcC3G81WIwFEfQN6DAxtdD6IMloKkz/vMd5U24S3vHPBf4IqGbZSRyCr0yFmChWmT6scIHwYk6yLlIjwtOhw6Krm1guV0g+EpLgO1g8hRlNh24qJsNc9q2aAwsCK6AMrUV11B0TNhqKk/oYl7FjbT4fqdtwF9XfnrHIaVYYxk+XGG3jhZr7i6RrCYK0F30tcqgRdi8TklYkLsWZPy387GdsMmc4ORcx2QkAxzxv5JYyfIZ9CmfJcNi7MzfbRocN6H8YruXdgSujofLgHoulAqcbUcw57mLw2m1gnMnnUofOQbM+X8GalVF2sZ8hs7PM6XZJj+6VytVabEpZANxlFd1XVJefW9C1Twyph7a9nFmbk8I7dln3egmqZpAfSOk4eBotiKJoQaD9SAicVTJVAXdeDYGr9FbHxe9QhZLUmGfTsYoF8A1FF6frqC+lAXPmYIj/YyJ9BeiwHt5DcgpS/5Vrw4d+Ik7gMJ2fF/kdX+TBH7AW6Y+FUiT8oW3wMrxsy4YeUdjq8OZSRNwfhi3AZgKbh1ppHdRfSfgdQciIJapI3mdmYKym7HeMqvuBPd7uPnDfUkYy8OLyJ/JZ2QFYtjT0jUe4S0AO5YUilEAEv0Xn2D8Drg0u7y1hJ7eGzwBxoO0VeuuhvuW3zPzPlAVEWqRyDPzwrXtyEjgErPjc+E+Zmb4dQrtXBagJtkRlQnI+obbL8TbNO4QLh+ek4UJxE9wOFTP8RcJx0NAmuhnISjn6yPVdN1NxEjXauLyVxE1RcD8KTAKld9vKd1BHnXfub1i7RmGsY/+6SAz+/C6bVFbIB4Tb2fibnWJ49jlZJL21M264Mr16Vk1B297Cs/gV0nOOSxBSSR9n/khsSSeTEdodrWfY0haiTZjOYdSDHRQSfUpUbV6UHJhiwi2txGmlsJXOMeat8POh/9FqP1OBNqIMhhqFu0eg++7wYEHW68DenOa5NBSb/8oMRKTP80GdC3fwEcWknvDdQK1uPR3yJRiKy7+ZZDvh5n+7ZcuP1JigUACWrVsdw41CZaj24BIUTtR4bH2/aGDl/TEsBoyDHJaKrtHw7T899Xj/igJApdlUuTbr3tff0SqW7jz4PrpI39rDzk2BJbLe1n4rT5SdoYg9qrUf7TV33U8awaRN48wkPspQ0ifaoLopp4RpP5FqZl641OynbF/0QsCaxmkSLrneyjUUaqa87WvFhIbsZfKCuTfka9sO7JBdg+cp2eYQLKnkdbs5UjV6PpnuYnrQEqActu7Yu3wZVU1ih14pPj6YShHUI77HxThw2bzGXJlbmJhsE12aKl+6prI4HBDU15fA40fq7Lof8ZgcbpeJLyDhiWRWQcTFMEqWbcO7YFYADdqurP6S6RazVE8LOX6Ymr/MKnezUpsOpbjZWa6oHJvrnv6Dnw/OdAnsDzTCyNfTCYe13JIIu3L/VJzmoGZSAybjKG9e4xu0h+gQV/1nSROMXLv7sJGStrbih+fg/ryJSdKsgGqoCTL7LBZqgGqsaboLJErBQ7E8P+Ms8s518R2n8jetZ/da+Zgzzl6Xp1Yrx2HX2FLeKRfWobFww/Jd6sJV3eZWH95iI0LGJpfaPEWArVmldwbk4N36O8Ef9TZqBWGPTJXYqxqKbJvSzC5QtYCOO2hadnWyYEA30VxA+g8c0v5dmvEaLKGaFEd5e0mPb1UD/RNAHsz1UbtYQckkocygYcXs0oKeYEj9M4cudSnSEMQc1ye87q9gg1yATl1xusK0g+rVDdWYtxvxy9Lbc7F3jK+ZqMf+InB/LqwTl/opuVvL9a2rXxgXdTbo2XIOzHWQpWgrwqAV655rT+xNUiqqOgCSckb4OVnVdNuPTlVLsVXFkbFGlcAAAAA');