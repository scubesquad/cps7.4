<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAcAwAADmmR4GrmVohUd274KUHIEqmRCYxAmkFYGbfW3iRcR44Yzb1egD+J2ETxBeaU3yrKZV+KsDITzQJLberlrz2QnZTs4OaCM2BSomneIzKa+euEVcAHuVdh2+sFbiO4SzeYuq+ThIzf1gibE9BWaVLrHY/754lGm83HlztGLec2PID3NBdTzSFczvNjW/NZJcIqEDfFqQxtRgNO2frmJjOKcemEoTlV+F3t0vfFm4Tj/3b5EHkEPs+nu3gTHmLCS8QgVP5GrDhjSvo6BvrgnJSqUVpEKkDFc/tKIpM0gsFM3Maf898YCpv3yciSL2t9Dt1cYU3PZjCQQGeyQb1UR7b2eqrMfGC6X1xCxfTyC3YTZ9NF5V8oCnvm1NRFH5xotSgmB6DMNiLTow5Ov76NFeuWOkn1nbDFw5qsHDXvNoK7/ldupLUbW8o0ozWglusZU1QCMz1V5mM5mZopGSnwHkG/a70n4UGpcWmLyjP0yJbK5XEbJ1tT/X+xpQVuPsTS6N7mG2uhIxJqmzBn9nKm6RkYxp3cyXngr20eOb8qJv2MTv5AylMiHwB1LIC4LW6/L92L/kphXv51PB3+xClVnDIy3Au6ufgEPZ5OlQO2UCA5HK1SlUfdxT6aGVQZVnRLjsFVBMmPgvytSw8t7QO7KsSRdZcWEYtKJTMd7mA7jdvAglg7l+jt70UysyCCWrjgHYIWAf1JsQxZvhVal5YocZsGe5ZWJPd/RjOadyO3QLQeOxywnAGLWIbn18H+BZV7Z8Pi0fd0rXygmId9KbF2z5J4IASGwkaFe/YkhnSG9B+X5FYZTRhLCDmgF3Ge83GQxQL2O73lpXZ+peAZvyzRjywa8BrsnFM96cJXI4N8QiUtP96keXWPfczJfkkQFkzvifAmQDO8vUsMAc3GCvVqC0elFaCgqMdv8zT0ioTLM50oN8MCZUCjGzXLKOS/zTy9h06FO2G9a5ObkC+pqhHhzpM0b0K+UM0oXmelHYgJRo93ifvShAM1Vx7uQneesKmw0JATD8IeLqmKb14nozG1iJ9xm6cYW02YMhRrpewiUrxtxbP5Otn5X1Y+/4Ek1W5DWt1hghLGKa1Ze8D4GD9hoClHQwjYow86wdIoo3oowS95fBP9TillJe70YcNIsz/CbArH7QKqrvEqMsWMvoXAZLymqFW95zgNljWo26Dt3D2w5LIwKCmJzxhet3OGTSy03zU1vz9WRgJobFzZ/5FdEK7OOohhN9d/SoE7OYFIcb891cFxymo1IMUaJOsU74Iw60VBJH1/82mQ1T9GRnSVbIFgTVAMj9xcBn+rkTd7Z9015hA5YlXx4sr1y8dVca8xK4mfTF43DRGCyjK/8s+2zuC2MoWo6FcsNt7kpnyxtjcVvLTZCw53iKZN6fVRo4CnbOzQ4O78CnlD+GyEwVuk3FKtmmvKxJ5Mg2bEnPb7Ddmem44fAiGWiek/Y4dEhFZSPHRw1cQ7Ox0if0DqRZm7zbxda7uTqSsOzbVFEqK9wT4/+Selb5284Ldr4fstd24tO0n1a83de6chIZP+kNWlkmOsNsNjP/z6+JNPi3MUKl94wGVfUYXh6GM8A/l0QTFhVPCPH3c17mrmWmtMZK/95vaxqtQjJ6lqavs718s+Vr+z+iwCsv/TVupwH2f4m6NqCUGdXLm/ndc7SQvNB+3JjRjv9YG35ccEJIaqzqbJNLp/Eu1onYiwZxk6Kf7+3TOsOHXIp+f7GJf4AS5reyeDE3bg52LsUTzyLEuly2XtwOrzUQIGIUn/8qXdOmpVmPsO/h9yYBKCYUQI4jUE6BEgOYbHNIqHsreHWwguJIFcywj5q0G7SnqMHSz6S6Ric7oyzd7EeRlafsIRxyOvpX4ChDZ6DLr5+FZW3g0lFkdvMPyiRDJFBaJ1krCaw42vafn4zaH8zhoZGgPUzYhhCmdSR/BDnytzi7VwAZTc6XQoP64FJSkvgz0beBuel7ZkTgPgD9FY9WUa/3OwrLIVxpUhGx4DVj5qMjak/cK9eNwJ3xe3FriSawG3lamSeyoL5Fpo5TbXRtTT1xa4cdFRW37LzPZGVoOlxd1SltU0ePzkpRBeTyCMZlxwgDiCLkwqkCTT/g/uppKYYyw41BwiJFm1oW982JFzCWLUwnW0VMxVySWUYkI7yfwqTyVMaddeVS1XW2ZUOUsC5G5kXK/C7D1gRvf0X/w5x1p8ASeRdV0FDNYVrVJL5pZQ9vlUcPuAbcONIKB4jhX7UTa1U4C+p0Kai5xEiJSw/9KVoD9zSGyp6SqBSCFPGy+7NaTakMtbnw+GZ48LW/osr1qZ3OXs00z0gddhFAp+2bRuafOvP1iz3hoyqaQ2VGhXSYlCP/6njsStHLlkd6m7BQnxFDLOJNJazktubsPhSP31LYHWZPyYO2IDGY5X2+sUd23ctCKGUntaiBKTapS3AA7GBgTs2kXtpMr3N7ho/xJqT5fmNniNwSmaNWO8wnI1DWZXf2KN+/PzcGqszXaAhogSra8NpXzesfeWHPCrlpzb88Dfg8CdWT6MI/0vf2JxleF21SM+TzthFMaEHKPL8/bGQspuVIQjh4E8KZVkhNOhOl7wxA9l1XMaJVpqUOhw4AyqfEhnEMkZVgbH0bxnQyX5qiW0WVmfqh65xX7HzgIlf2+2R8Snj/QKY43scMSHAGPfiOJUZ2MfwZnNvt9gzRkWjKREp7cXKWWoA8RoBD+UMv1oisqQVQEPFUdqymhKt2gKsDzuR4c9R1sdJAVgha9E3xDin/oVFr3HZ71YvYurg+3UwUodBxTRJ1SnE1FiLDayrnCMWAs8Wr5yjD692HsFF/NPAtsPgWOKcsiWPLaA2WCcUkP2ncRp2PJvjhPdDio3i10AEjbfQk1xiotTCc2gTWDAa61yuqN7Rw4EwjvU4ypdr/6lOLmwjLYQoCL85hCG/wyfJ8qatFQ48XxCgXhEVQvdu9uIreS2OgpAZNusMDIth/40KKj9QgQTtPuMkZWLruYM462rXpRqYqWYUmnkcU3dukj1gcs7viDGAivFTL/DvHNisot1V4DEhlQuEdLeI2UwM2AIxiUb1XoWBs2IV/FlY8mSQgC2aPVqLE2lpfnAVVETlW6LOzjJq+Ldt8mOV6ytuft+uzjZeBtirENPYHZvs3F2epplGA3u1aVZpSw3VsiX4mTuZ/vc+k5iFhVhdIzyKEhrD8dTQdmaTuyRZHottdziU4dYdBnfB+djvYxCQ23zCE/vcw6jg/olWAZ174Bj6mq7CgUVzYjAxkjN/IbzB4t4oGbl6ZztoHuSzqGLeYhS6f3cuUR3q7YLDZIzDn9SQgn1Ikh2wlOe+fxwwEHyKKWuMPQ35w4o28Cz8982LxAIOO/og13yjKlWSol2T/MWZ4oRmORufwLVhPl5yiKNyNbfDwmT5bkSDrHCIfNn7z6CKWE7c2mdxYN6RVTPJi6muhXLXEYbWnPJMxH13zYi366gfycTgR7n7YFWNtGx+RkoT74wQddPlnDVV6hEar43AQynaOmnwDHNuE7Th6FBBMVEbuX6Bx95Wd1tfHbkSxtHiFWXqOh9R6JU6KSPlnzkj+oWWrrHtxLTtRdep4mjiAL6dfhHMYKeanHX/QLWpfJs6/BbVGgUKT2WLDmDkDaHVZ3liynrdvJb7dqdhjcJ3eyDGyLOokcwRqUiyzz45Q2xUTfALk60aCkt1Zwiy1B6e/b1xEZ84uYMNjxH/JvAnTzE3zZeR9S7gHhgmRhyCEX096oagn3KOniZYmEIjbzi7w8QAn5Tx+OUHd5WyMoOieSDiSULyatKG8jEZuEhm71Hvr/kHjZaq+TW0k7KmwzOcmCnSiiw9ArcAXueM/LGWExghwMrcVytL41rz+0GPEglnXIA0Agbj57j07Xh6X3Zy41qB5NxoFdg+pCtwwA2v41lorRLm/vfkkFr6MFwVN7nNHEVuDR6FkcwX0semXBoPRWc/wYa/IY+ChJv2o3/fwqMIjzVt/ruSuFnN4zQ4NbX8hFVsFHQQHU9lc/1ZRW3mtY4hz1S0r1ypSUBllES50NTEMD7mbHvNfIQauPvgL2DMkekGWChvw/E+tsessBvC9XaUtFu4YCjIlo4tSA/l5hxwExaQnW47U4BUh8xClYoArzl+AgRjD1Zj+f4Co72yXFrB7H86ClpSCOPdNqDf5w0CzSd9+XdvRvSDcXlPiDH6Vfm2GuKXFctMBRzyze/hCsakv69fukM/DbQO1vUo8Kk+gp/k0AAAAA');