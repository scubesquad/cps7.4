<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAOAgAAB8XLL9+6eStbHMVyYvdyootmWz8g5g69Y4HZqMQXSXUn24bjEnyrjtpgAA8QCUCv6eAsmf+aHbeaFn+cbH2XI23mT6IVGbxbQbkGWWuRWMcaMNhw8qZ24OvBwRyYh+e1etnMcXxoIcjRpA17Hf3vhDXdUYjlyyXHJ6ql5cctHcYvXC7DsHnWnwdd87c6/AX7ZGTJaG+61K3SZ+M2qfkhE/ce+Uk3HsRvqMKR+uFES4wQDj4Z68eplwiEN2TpImL1enrVzhv4vDVYzDE3PkkwSzK0ZqEAR0Sgj8smepzeDHL5HDCMhpZg6ZwHarfHIHNPC3skTeOjHW1a6qJeCF7y3KDMl3pYqa/32/M75tYiYXuqdnaNx1vHmuLD8gnArQY/IATXut4myDTsqA939KtcOWv3wouG0aby1qMpn3r4JRxxC2a0A3zsgQCtzX1gqPk5XPKs+5biB1uFpZf4xNiPzigFn3Siiki3nN5vvvmFBAygzB+PgQHkWhsOwpd7G6+mlDSZTN+lDSYE1RKstDLygw1Q/RQqMgCfF6SMXocxBpu6q1yQFp/CnrHiTBYvl/8pDtVP4BeY0XjND3BKG11KROOd0lFmrGIHXjaLnE9lz6j30K2Xf48UTDF4KJGuSgcO4Kp6StkUY9PwsXwgirBh/4wAue0tF446HbiZcIi3Oj16qM90LuBYQwEH8w0RpBsVFhl0EW+IwpBt0JCH17KrhSTMzS/wxTvlwXm/URAeAJLFcITeIamBjsvRJwhtPDD6INcZz9mQuoH7+p1jHBz2ooGYTmdhJk2vY8nebCmM9KXLRQ7GGjOT6osUIPmn1kjQ1dPIVsGkzoKqu/a1OszZYtnGaRHhEDa065NWIg6gkKfjPoT+mTvqydXSZt04GHIYRTxbY/8zA5BJzU1uUKEzW9GsCVQ4HkyMkvVOwIPf7h+J/ji/yM2rst1BWg/s8Yx13iKbORn/Jpk6xBK50Tkju1a7tMvczBRv5XKrxeQN3H0O8O/ns7VQUYcTBGz6iXQnsB2QsUp+MdCUpwgncil0MWMbAHsxc56z2cufYAh1qhvdGP0TIprONpuKAhCA2cxb2voJdDIwz/ll5T/9wjgcBsZRX2+E30GE8PNxxYDvX+mc3PtNmb7Gooiq74qxs2lek7F3ptjYTSqBmjIO654x+2vpHjasO4RjrM6+YUq9wswFrOd0nNFRK/xbcszsFN1J4YyEdkSI3KH9r3hxUGWC2G9FOuQyCxBLHJNmWbapoRYMgLc4rdkenP9CZpnMiwLKak9HvOFdWIDcINHpIULn3jUs8NzFMQEsdrzB3mfd98xAYNmH4AyECFzEX9bDUdsPGvJyZj1EaUOoPf1GODTVqBz8xLwEUI6NiRV5Vvg2fnyQZKxsEXHa5ok0zhXtMecl3o1X9EudtuTLr6v1CsrvLFlVSKIofwq5LGy3S7D7DiRlqW1wpqQchzKCv6h1Tss5A7OyZSGGYOdSNIBru2jsTp/IC2LKEbjKVdEkkGzqMAKr7vTah3Vi76MSd94pWBLtTdqx2zu3Vak1FM18YVi0cN6fM0KbOVY1q+ExfGVbtrGIkrhzQuF4fzd+9wH6cTMYnPd51ErsXJ689F+tfjqeIqipvXaz+qhF/aEag3EaKlqyYHjLKt1mZQ9EgtfP6vJd2fxn162jGN+w4f1cljj3ElOUPohpSCwUGRv96yiqfLKqwtwe5WAfFu5C1AAIZpvLlZm8ozaOS+W7+3oybA12uf9nARiOohL7tSUVWD0vaksRtH1OManMbwQLhcYNhOygwvS4/Gk+MVbY9uEJiZr6ORCDcKGKKmolZP1W5s033pNclJ5pFSM24X0FXSR+CEPnc96cEMaquxQRKBdQOgag1dYn0ESvEfK6Zv80ozUH3mgYpxA9NHN4HXf8ZRCl4T1V6GEHuApizh+sy/7bWjY8Rxvnkl4fs5em/ANGxEkfbwVnW0jMAc8aNpwAwjYPWRABBPfTDJvnEbaXBMviWVdD0vLQGwBfJSyqFm/BBn+n0uWa64IyR6c89Q2BGndaelpws6O3CQjqCz23Y6Xnuf03ohA730bRGV4y3iSZ9wCZU2GVoHG8lneaahJgv7uOjXLUdN6X3GGbhkn0GwIKNtpdOI9BjVS6Ce0kjDQt1yRBEyl2O9WdoePPIGfiGF9XnjhxTT2wdAOw0/WfDPpD8qa1WYBJmiIyLOSFKG4SHLPM8fT2mA71EXBKx8ILNtYGuahx0qNRcpa7RJF9QOj4rnCnxnlp+S6P2577CMvrBhOK34TjBuAm/5F6E3Y3KSi5MfxxpoxaEBuCxtv3dcMEO/Bs+xBA76wsWvYbbhJUvahHwP/9vBj+Bqdw2hRAhjPjlaRg/tN9IoNZms96sUstlxcySEXkgCWEiM3ZeDJC9tMMJfnLx+hTQGm3Wg0XBCE/l83m76/0WWkQkOzOjBB0q4fdhWx0Mab+0QEHkQZTMFlRq1SMt4rq1UhHkIgrJKz4huKjffwuxAy85nExcf0OXT2N5SR0tn3cLWf96lXKet4damOFNh3k9k+ATQk/5RiUPX5lz8lft+KmqR6XJhLeBQNC0l+uhig/qjMJcvgxia5/Xd6hf0FCtI0hWr61VZsccrBxETYmWPpKMtz3sApv+R0rcGyepk2nD8dZGSxqbMNpHmT5z1rx6p06zw22urEd/XLOCefwhAbR11FvanYM8a2SPVuySv4XOOYtVR/Z/XuNDWcKGWiNUevldVy6TLjEXPsbl0iFpZTI5ZsPzF7HoF7yxo8Stw771Fhlq7jW321rurmQQ+TIXGLVc0AAAAA');
