<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAkAsAAMkmaPHfd7ETvCtoT3sgTb6FQCPIDjZtZ19qkM5JkfHHpHR2vSPDSgB5YlwmQRrSWiZ3301t0fy1B9p3f5DRMe0wBRKAk9Bx9E8ON+QwqBYX4k+4qhNgeEDqfQNrZOZUqc0op0eAqqSomngpAvIJTMxrFLiatvUPnWc1d4ySaGi4xeCvZ3LxciaRrAtuHUt6BB4Y4pqPDAD28RxfJbrOS+dHevn0Nrlc4VdqUMe8DcyJfRmL8298lHA0NTRDYJZsnfU5sJPnKXyR4U/jYOZlAsBgtNC7wp+mMRxf5wMOw6YLHNdkPRkDBvGRI4uLs2GQGmecITDf+7grl2Bgm8hXPtHq80AzhdrJvj0OwrgC5iHZpvP+rWR4zq1ttapeeZKlt3v/TL5vUxPC98uC6KcU7zaMaIy/tNGpVI3TPswh77TnXcNz9vbIzXbbXdAdkdtCzqG1CdH4/Lt3y6w5LVSvmlc5V4svUnTBgEAYjeDR2d+KIGVU1SVZDjEio2970O4rwbx1ONM3687LSapNvVRANLBBfO33MCAi5AnCw3pZNhjh9Wo4QtNTkMDUHeKJ2hEdUExEib155fzuioFaGwlR/hs1G8IgJlyCnes436mlul8L4zAg+mW1DVeh7EtUWooZwgE0P5ZA6aLBcwMq8NnmklUaawZyBlBGEYJDrQ+pW1evasEBUFmaojQCoasvtDev+7B5q+8OwU6PpUCyBGAbOYv8+vlEZ96QZR0iUPaHacggIpXuLE6BQB2oqo4AkOiu03EzypW1iAG9Pbm6CRh97lgM4Nr/CohPkekfcv7vtMUxJNgzsahxXw/aZC+T/SgEdhhBTY2vBixGPqagVu/Bb0qGBlvdCW1V17sHEfK09equnJp8V23d0Qny5LoNcT1NrQKoa0UYFUSPRciMtdYZRNrU/31+YIItKjBhuOjWHtXwCTvLAzuD1xN/3agDL39rHO6wONmfyZsMhtPblE+J5bS/8Hnanbu+SXO9T1AWj3c95jEJaH1JtnQFZ7JiPKen0k6j4blsEE2+mlnDuO0skPdKY24a4vwe39MN5fpzYjdWy/UAlX6wUNrEGjqSH2Hb85OcJNUJn8/iFMt99JESDT8p7HAD1C9C3YmHjPBrdH8tNDRNukJzoXX84CUB5AqUrbjXImYLiQMCMTDJ8uTWmbxDeHRSKiViSp9tdZlkJCIWOZzBBGDeA/lEQIdrtguL06aHo8dWRrtwAkdPNF2mSPcvQc7bsRuiN2XXOuwg4tN2Jx4LXOS4GmjVboc+Gk2nOQtDwgElaEv7IsUUhSE7mEeSThUWln4EzbSQIuYuO/JvzOoR7Pi0ABE+8VnO9n1lBK8dVxKH7T6fGoDrI+XeqsbZKFJd9u9Ulkv62+K23CqpfVGAwGFA3Ljj2FoI1M59jPFKK5awU0phI5jYJsf4bptvSxm01w7qS77pFkXCOfuvVyN1q70sbA9NU/us9k32BfOMeqJVy0SrRd7l7+mmA+qXLKat+Z//q6+pfqtXHlyTIgBLalHw4Q/bTuVhku9gAmeNEFqy5iGpwNEchkbggT9KlU2l5n465RPFX6Mut8j3KCjGwK12GIw86+Q4EORqXCuZkMoBobHp1x3ojm6vYHKN9tvpvp8PbAJKPAaGflm9jQXbBqrFXHrLDNaWyp1p5tpyjy6xY8aAT0NJ33LcK1NZ2fHDj+GdhFhNx80wC51okYwgFJDA1WSGfFFKYSDQ8j/YqvFWE8EiFIT+2Ac9EMR+ZHu1Df6FkH7zPKg34TaKzFpOtW9sP2D8Es4NDIjSB5tTx4ZBPxd5MRfCmaI41nHin4lW25GfMfWhd4rI3WhSmtQ3aPN2zyy4RADFnbZ+kgxJjpj5BciMNLx3kjheTgGiCT8beYhO1XaBdhHDBwJRskPesYy2A102H3YCz9VtXIzbDmryGyTALPAaJac2IvJ9qH6l+O7AZ6uXEv2FNP9FwpG2/cIBlFeXQwd52cacd9IQJ9LKp5vP7XMDQRxj7hWEtanAiihTiQvWnSb2717nMV0wxgga+6iSGP62nKV7S0mVNrbQqz4Utyn/BYIqYZruL5lD2MVMnri5/8LzqC74WV6l730FRN8e0QdHGOxtiwC8RkgwauZbqemLnPviidoPpZunw+42f4KH5WYtfgbnwo+ZKyfITfbjqWgWjnSfWR9bBMxx9S/JtoS2kHOlklkMfM86gqek+mZW7tJ7/NdkjAxXv5nqSO+ur1t0p0CLeYCLO/82Oq5QQFYvVa7m1dl+V/i44VvSVzm+XV6JssBahp0V0pQD0+W2d3wr6TRbjuTipAAfqRsgnr2yHWDqhVbKlT22xl5WGNaftYxO4vtjglEuf5/Jf1tabWX69IOscWS0OC3oguXE2h1HyEnBXq+cg74+abj6KNl+X0FiLETqr6AV3E5K8LfKOBIYR5NL1V8akeFdMphi2+0K5ptnM9+gU8f2330E2eUJl9cD97VxwJ5XUanvgtCv4eIez/Hu5UNatUGA8BhHb7Pa1UNpQqMCXFnGUSdVRPixfQPGkdQvL7EmVKLAmFzC7ee78U5UEDLTQLK+Y7cyjCSEkU+ok6aGmJi4AaWQbLyoPd636XctAaYkXwoPxSu9dyAymjorgqzWdHT+QWYjzcKoAo7qD0eE89JIVNJknFBNvTAlFRvLhYe7Qcm65Adr6hoYSv7kMoR2MM1uuO48AHxZ2xOEnFbjX8Fcch+ePiE+QR3h63YvNj0zpmmjIlXFFzjHSmrTgiu+YJQTIwpt4gVT9TI40nfHsbOo0q5a5uFOrMU/roeoMeHTV99NlQR7DX6mEwMZKBmecQZeiHCxSt9FigHjQoR8v+Ih5l1d9up6SO5PTxhQNAE3/i3nQYIbVztmQEX5pCbzTu9ZI3WHNnMmJafclXfBk9icFHoCimHdHGrpbtkQLwzN7EPGOBtI1byP8OG+VeTFe46XS4iF9wHCcyGHelBJR9K1njFJI+QJXGVq9RYhnsHnLc8yBhClZ1nuWPK84RLCIsDwMAZoTzPWxkommAYo0imaVg2Wtfj0AQ6f+TlwG+uK66on5gsVlbuz0ppR11oIS5MjvbIHjQFnuXunXnLBJAfl8aFzLHHmQ3TCTwPzFc01GO65h6V1MfIQK/KLydobOZnXXaM9RVRDauvkelMwLL9iFlhJ4lDGzYmfWksHjrKOrdgECJ19NfMSRrIbSOUL+rXt5Rxuw+gIA62SyscFB7N+nrncBMcONqktCTR7hvLXywwuDaIfnNC1yM6PX+mM9sGmXAjCUfcQqCMf5lqfkQUCae29CKDIiAT6VjG8sWS7JMJq6NEK3eC9J6VA13FMtYWYP/aXqrxWvcuZk64lSSEpXvmPkiVQywRDRX2RqtGVgjN2fXpzl6IC/Zs7xO9ctX541vXW+GIAyNq5ZlhshJ6XCy1OPSgWLgHehaZX2Gk2nwJP/svMwJD9f3jiyhrNTqvdrXLyKWScmuYMHbJ8Jh0WlPOBLCbLkfMKyuRurgUjFMXEZRo5hbpE6o5ViYm1yTHjs+XAKQHXdQAd9862v+0XT74kubIBfFz1yGzOLMfG7bwW0ZyZPv08F8m8pTVyphAr58UTqcxyRPqstXOD+2ZtTdjThzb+r3Z/timt1himNTXdatmsYmik4YG+1J0BQCwhycSuc+mV5ZeTKzfCBKtoDX2BP/+43mmmg7qAeAikkXmjn3OHSLF5/TD3OSoA75EwaR0Gc0/EQk1TVafqmBH22QzzDnY89vEpnlBJ5aWKmAREKgOj6O8qBWZnyY5LcIzsm8WOgV+AtJ9C4yeRgghYunRJ7jtRvipgDum8owI0TG3+EPp0RyawA3AK4UetlKJEER3m+oXTn4AIyvLE3VISHIrbkT5X8PoUOTgY7L6iURB3UNhZPqIe4chIy8ngUyBP6srYuI1X6MPOpfm0JRMpDQYqETB3tJzyV2WPAAAAAA==');
