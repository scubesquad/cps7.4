<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/qNR3QWjzuDkqOxXomMLSGVvrV/oPc/MWKDHSwnRDIO8ZGDwZSvPVWN5DqKNZZqsuNcAnuOmhvxe4Lgm9c/i9JxQWK8n+JMrDliUUw7Nk6NDr3IDvvW3PyeOJRBbd7e28YfF0FCVqZsUfwi3zlOEaZNHJxh/43LhG7aOaG9bUci9TBKf2e4jYx6mJ86ogEbKRp/+ltX/CWtXkNuyRymRdgyaIc7gr8TH3bF5hG2FrgKWuGtwB/dky0R7igLf1KfHzFDGEo1ozH1tKAAAA2AcAAFDB4xEMxp03cb5zVkG6+bM/fidhPa8y5ug1W8h3AAAhbl0uTE6u+r2gVlLBKw9gUk6XBCKsafAYO2KKyMSCUlDqmNp5h2quZa5IrzduUsqFbq6dsADhh26goWKD7N55hqkXcKUANxzgH9E91Am6f5VzzsJiuxkD9xLSzEGsuAi/bVsZEd4j8TAzkGueFjxk4smk8bhvqD+cXg0MRHGmaDrQ7XtNU2MG3BCAYUIue2hW1U3VTA0M5j7Mw/LOyOGAN+FLVxU2X1HCK6t+jarHT3yjRP+rorY+25lCt1QOGN32/Lo/3ogSDBux/69L3Hr96yVbaFYM4Dc5tv7VL0A407vNU6nBPXkHqF2fbd+ndzHAX6qNZZ6Q2LEql+WDNTTTL17mJYiC7PBuMSWTFTNgUBnaYwksszKUYSdef6rPlt88TQbJorGAauCufukP1DWqQj4viKSteCz06LE6/4Aknnk/BbnN6w33nF9yBAVxOIEePAM6Kq7xltbXgTzj1lgV2ueaXn+xJR//x1hXlJ7knSYCzgEcmsJjWdEpRtmiqMQFBZgtSRBX0SGN6FyZpeBcK2kkxlAA3GQqtLjFL7JKHGb2zq2pI8NwRC7Rh65kG+8ZHPEalq2C3kJmtAqfbDW7oS9nApCjXutt37fpkDcuBgRKWNQcB1RKXJGv4JT3Ez8IMVGfnS5/6QXzJ1uBwFkVlYabLCpWSgU2ShvguPSJ5xBoQzyPH7doQe49F4rJfap5BmXIADI6gXcrVVf9DWI3RxhqMYQiVECA0oCsn8drLOaH/Gk+m/GD6gEINM4RFVvcRbSuz4bZZ/SLmwTDe4k1/17ajokxSdRerR9DCGfJP5P48lWnabp+Fc7eMc/YHyqtaCYRyz36qWh8LXUsiCf7kTXA6QuMBKHbksJObwm2fwJTZ0vJYJbk2E76cggDkO5FsLFISMXMpxE5gk3BMutKsXEp6J6qETMhHCwOLaAW0xzHJ5D/4nu2BheKg6zkHNQXZISUS60thydLu65gvbIhNnIfYPMxII03sNKajVmDZQEvhk6uyVq1CB/408V8LiiXcO7+shvOOcUnNTPVb8rljZ5BoBTjHUJLxBpe/3N2ODIJjVu7pG9Lt59p/tqRWNoG5rgeW9woJ21tVm5d7GPFlZgFxI5jH3LWNIonwl1MWghEQcp48cr0qRdkZUTnwFH6gXI7ta4Gss5BTyd+M3sc9acC+DtI8DpP5r5h56mWS8/ayjiPfTntVzbbboN8xz6RHPeiES73FR76nBGV0ci+zbx+hpVfZOpuh1EjSfm0FnEPuHhmsyLAy/M32JLeyJ7gPxT63gFZztK802d57/UDzeaBcMAsOquAggP233kn4u6g+YSAmHJIwnMNX0NCTGpf7bCUdC/+nI1mtJ3JKQPLp0P2ezR+F/WAqiYAf63WBzrKaJR9MH2yioqcYIX945l5NqJLZ0xTfWV/1g+88Fc/QGVki0uiLq700cGTm/ySphDsIVk1iQ4gb6pAxOS2gE+CmMRZrLye2ZOakJGPjf3wYt3uFqz9wnqYISzg3UuXAytP1BsOfLnZjSXF1He28cjSl+s3yDdtTwpNux3H/8y/Sa3p2W/gdW3kqfoxKUfLiyrul9nQwFAq8jLWZOLoXDAbamD89MeZJjy13s3BsdGeFK/HUXz2pAko2x2G0i54D+4Lb79kPUTPRQYwYejoO1UD52aWkSUWot6J4hWmm7Mop0MBWwhqGpiEgYehPp2X2jAvjhG+oaJkT2u3AHbwojvZSJPAJvkN5e2r3vKmJ63S42AzpYJDD9IqzYmJ/eXJM+5SmjGb99bpI8NYV/qcrUM1Xf/g3PFON4s2n5GWmQk3s1FwwOIoKo4kdsuFiQ7QPaTbIRzVAIeU3NWrC78Emwg5p+KmILoUux1OCySePmnkCq9PPcGXe/4+OY595Jm90bLXqfsGVeDKe5ehNG7GPRTONixMsQMytmt0nSQqd/oz1IdhO61QWrgVH3jURXxtDWjgoaKYLKyG6ahRWCIIDeCJtpJHpFmUHxvsKuHAA/YluE+fIKL9VrAVPjD1Arfs1wCd2xyRSR6qkBxHQr55YZaYXKAD2qCjoC0yciQmBuUp+qGLmA4uNnM1eS7vNRXRuIWCSeDx2QjS5GjfNvLCk4z47EB3qO/Hlh3VxfdFP9y+XdN1ajadKkk4/s11A6aFrJY3GeA5hi9Q4jVVR2OUicJZdBDHTVjimIUCF/BJLTo9NXgbB8uWt+iBvXRNlHitTd1g/1GP72cvPxXrflkScjHWAPhCwJUS7O/UuL1GxyoRF0HsBmBfFGY/sP44Zrdqmse0ZqLC0iT42Zj6K7OuZ9Bq9i6DFWWmfYz/qGkzn2RGOR863xAbc6H+phRLPtc3FkWGCvmFA3SqJIu3FFYrJqcZo2INW4rSVaY4BCc4/ZilFYTUMwtUs4VV+NGN3ISpSlFfSweMDMdd/gzcA7ZaCTyCco59KTIhnntTuQRFrZZ6Ulj1ZOc3cDa/QIpio3zJBqerMo4JpvPOuL3hq+h9NnrPS0Ek+74Q0LOL1rq0Zgr39ZuFYsohXWPjxbhv8zL1c+He2SzrUDc6SmNDRXXt6Fxa+7oa0vohEzDn799TbV/83uGzJ1CT4YKEtoSUBY0hyEuJIY9I0RsJ6hi69J0YBm5HMenRzghC4LcAAAAA');