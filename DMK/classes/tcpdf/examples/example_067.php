<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAYA8AAImeSG8W9fGbpgoZR+hRxF5pdlojc4rkZ9UxA7V1Be/DKQhXEV84KnPAQLu50Forv4hcTAHNvslMYOs73vBZ9ZQnLwxoyTXD3JEa8cLHh7gjKyd2u4zjM9CnyB4Csomwrl5FAn3fF0BrDIsQU2K4DItdhJ8PwKoWf5qkyEhCiBSKNHiudxwKeTolAyQrCmBsNrj1QeVJnBY0jou9brqW4XEK7tPWvS24E43zHt4NwK2dPBdgAamFk7fRZpDhOxuDHZxOThdujqPR9vUVb2ZT0pff0dOr10OwBo5y1XWZwM5X5rID1jiU1J9wrBKt/iWzHAZhETCMmi5IEvYFBOR8Adi/59K/pMgFJYDGWC2FqHNISAUdZE2YyoWYGgCPdd0prvPqBkFEKowDouWzcG2naTQs2bl6Q42B8wB2zbZffzmuZq11Pt+J7auqcRAd4WFITjAfgcLPS2wSTHn8wNU6Wtu8no02aaYWSv2QdjyoCedmV3ppFOeijvzXo0HGVTwgl9AQCedlYw3S+oPP0O1uoDGzLoo9Gugx4jOw2hUl4LvpMVfOND3oT7X2MLzlgTuDEtO72ez+VtmOeh8+2mI4PlYrqCzVyU3EGxQM/jEmpH4W5WM33XNY/cgUv8C3rVOAt8lkt90Bxf4wxMz8ueTxBNiWYHNO6gSpNaCwv7E5ggo+wBlEHD+b0FFGq2wp8CPzzN3ErsD/OTQQRcIwc+YSmjwUoNfRhpif9TC9Mql7PoAy9wUPtImZp3E4LVCUn5inR+cYHxXYWqK0c6rJaR5LekwJHCopKkQpyQ6bNXzZOvjHNEhyECBoeMQaI4osJIwGw4E+M8bWgYKQBeF31PbBI1WZNR/b7ZZpP5CqqfsmnHjaDAdddX+RC7g4l3BRlcEQVoYZqOF3+tEG+njF0599t56E8LmC8m6HPXmX2clwG9rrwaXO/AVDGpyr04tGyNCDrw+lbzKdw+B4DC08GzD9CaAm9aLu6i0wAfiU+A7pKojbsOdCie8uRreAP0pU1r+RsgtO3g6fsL1P9LZ8FIECgTgZJeHThFlQtM5JE4+Y3ABBqSEIUCP1n34EhP4d3q4VtYZQID2fLnv+fN0vsMpr1iUBMtbNxyFTYXXPaUcJgnG/alVmevsb6XMIMtrkr8fr80DwosAfigPRh8TLEFnkg3MPvCVGOffYr0FsTsdbkf8alrmCx5YTpWCWjXryXDWjzlsb37hvcYjzURB3VjNvLMCjtPOol2nkgZtSCT3NcKxU6+8Q8GtRLLaPAfkgIhFgtkEzNdRxyEplYdtzS1C4RgB7UiS780CioF3dzSC50XGe4RWmGgXAqTKUYyHXb3tznbdMJskaIVtqahFnyBtsL7pjg5IT+LbaLsxThA5+NiHiP5B2wvwAoHCY1e8ZVAVXHCjfYcpDkZPvAf9pQ1gux2GKZ1MZbzUAFgOMLixpD7GUz+/sjvtwyTgqQ+ur5UtluoWUrwLW/OvkEALNPx+I8UWAcKwYjHXtuQ7CYaQBHIONi+mPAtPVDp4LcuicR+1V/hzLMBO3uPiP2voUqOy29KdvkInlMJ9a7G7yvn2tlPfd68Qn760NHeUnLJeo3COFYvWuvSD1Yam41vp1g24ePULoWJhCV7ckKpPxIGa8tnEZPFyv+cBEgxbUut0GJDH5OJ/5QQvunnuPi0QU7ZjbgFQh99/p6s9xVQGRd2RTqf7utSFJx4CVCFM1bblKk46ZJFc5hBxLHYyQ4Ge+A5P4OluZzVABkHTj89Ei7/Wge1MTLSDwHq7fX3ZJG59wzZ/c4NIDUPnyW3HpWXqYY1SYoR4NY1XO8vtR0HAIBVgV9FdilJxYknYfb3djXnhUx0w5fh7NdQNskXTGMy6wp/B13+TB60hKOTlZn7+l09OVE7yjGqGhPS5yw1AF3pFxgJvmWzpXouPj0Q5DK3HQGqxW7BczhfP/AePlEw1Jwrh34+h6HjOnbJtz42rsCtCy1YxgBxYIAcVkwdciNyJsYBQnUtgjTi39TchlGCpHwbyN7gwZyltNAM5ivUW87YjTeWjKEX3MkwiX6r/zRtwmgbVN3IE7vpZC289vlDDAEx/fA5AsGgqq0HHZOoFAQ2R5PKYh0dMV+ClfqIrB+iyEgCqayZ1oaIiav0xkGjv59tvfspPqDaBMTI3z5LLL+S5SGh85F1fjQrCF96VXCEzZXByRVy3WuKvtGYRoxNTq9+pDtDZNjjrNJUISXjty6UmsAvBPGcAecXTQrQ5Eim6mmIZor+ueiaWRc+vgNvNWusajiDGblN8TEEUODbdmw/TQrjznFmCnsEe6HAPfHm+CWYSkyhvGUmFFXAXIZrAOHVElhvET0itJWbMBkUtltctBlwEqulvthyoXlV7cjSXiPTkc6gG39ibZ+iPSNkSylpfYc/eU3xdGhBWQgZLIsw4mGkGVxzWFhlYro4cioVHY3kQYjx7UZ5UscvwlSwUDKVldeBwXs1cOPqyzg9kFo6+LmfCV0YMQD7wPlcfdSK9GM6V1bIYwO/x2cnrTcNYLxZsgwlMouDa8NKTogqYtqk0usJP9Tb/gJHqJc8X5vX+N2d1mVaUrVrNk3gjbJTzacT9pr+YXIla0qYnlDFzNrjRQPYKwy91jG10qHgwofxt1F2R3hkFbECzTvjEJU5g/1YUjf56UjNNo39slIusK28rK1Pg7ROkqXksCRiIrp5lifa06SN7SWVtHicmGniXZR5aoIV5KtdlhzUSY6ohmZUNgRR2mkU+QDVvwIrO5WrDl1z4qzumKO6jD9feKWJS8pcwYZxeJYHAoHQX+Q/6eCE8C+UuWBuoAoTai8l2BuQ+a9pwho3qJn/vZNHixXrx9VUd+ezXAp59ERjXnZzyMX4I1H4/UhBNJbR5S54V6ideuppNbbw+FDkb2ZILPv/TxVdnkxo+QyzgXIcjV0SmKoqfqAbWdj0Uw4/JfZps6KAAIk+QxDpc7W3L+qsq8/XWD+YezCiLjJNfHfPRTNaPcuWkR6f11hakCgcT/RV/g0/oseqXPrqG1AfxtqTP9YKRJXYaZy67ZsC7pafq8Q3FRvG2d9BLT8rCMqE+SyubVhAUpm2daL741d0Y/NN332kMU8MLLWw/2Qaiv9Hr2Pe4QNQhmAEqIGX3QsDDXR33WF6fUHf8Y74BoVdDeT+3KZa0LYgXsDlGq3IUTSdxMsJReTKsOC5nfCsnk4F2toLUiD5J6pmc/YjLJks7Vac9aCf/ZRcq7QlCz7dPPtmkywM9KZ/gdjTEzASn6LNPrPQ7eAl66rcHTTtMF3laWD+3pUxDW/ZuMpjcgsxQmCIJWhEW1B3bgvzLDNI5DGrOAIHYqlmBkSA+zyH53FjiobocZq1R+AXutqPjQBF0ZMEaqyA6BfiA2bZP98Z3ZIdi0xl8GcDJCoGYiwDn412yNz7g5JSj+ppnKvSyRgL6DigOLyLrDEywHi/JJJg33rspuxYHy9om9ZbU4rCqYEXcxGm/xBv4N3kbZUiIZhf1ge5inZ5DcyyuAWLEkeJud9i1ZfxIQeKU3x8B817+drkCHg9lhlEX5OoU2mc5MXt64uyg0gPe+1oonI2oZZ/NV0Yqf9wUhlQjkmlEiPaDo6UvERDcR65+hwLpukAJdg3eZ6Z1542Cn/2w7ckggCdgwwoWS3aVMgXUjJHPfEnc+5m4DFIUnj8KmaaCFei9F6VlzZCCv5oztq8UyYo+56t6ICiGhDwwbYGdxZqaaVRRtOoxItpXnWQcDfkHO0rJzqRQIrmVzXqQB442o+gFcQmYPcUD2QR3ogrR70vtIw4EuF2zLKyZu2z5r2FrzjT4nELb5+7PCbqmzbukd4TZytxjkdjY+bc1lBkdi8WG8Onky/Y60uCsYCNasnZf0MCSQLcbieo5jW8CJ1ybXdAQiL4B82ztE+ZWWQPMBhvQZ4cqcVhCxFJyS8zaa5jZOi++1JjR6zgd4CkS24cSMhX0Kz1frzxF3HLZLUFLnpndq+YbmYJq/ccJY/vSXI7/QQYTReFasiBYbGWrJtQjAxMGXzafHQog3j53SuFLYmxo2xJClxgeAQLgvXzeX+PPfg+sfb/XVgH7TiSBpcf/RyUcGd3UiKIY6E/y98CFDWC8SCESchSTt/Q2NYfqim70pgE72TmHXRvWihAe1XiOblmx/LYf3VNAJKCK0Dsg4odvTOKeObKW0Oq5l9Mu+70ghivvXZsDdLZXK05fYbDsLyd/s134Ikcgni3OG5xLwGMC9u/2JEQ6z9zwGrOyz9NDL0UdATepVPlS0W1gitNJ3fEVtS6UpSNsBvehipAk/GOgMBU+JqloNTDA7wIBafw/dSnBtcosYykLRRfD3l6Z+YCMaxUJLbwsmmUV0oQpWGQBmaZTLGqLLcKo2DElwy7PI5Rh/WUmz0jDBkPm1fPpwqXEJkAI/+Tp1o736nsqjzBXKCVSv6hJpgPh0pBaPMTSaIS/QXMXYjZKaOXO3jUNWR50RSdtaSuYK5v+ll3kbYHIYQzYo+nekkaVJlHwYOpyn0W+utvniQC/u7wZRdAfCdw9l5LPZZdiuQnJcbwujH/yrwmiokb1nrNccdhz68vSqXBDKIX/D5HSvKwz7yw6CVcO7BGTUuXzaCwxwUmqiLbq3Mo9vbEx+vqGLBcBprSb89I5AciU7n0QlZtvH0BPVqCuRxf/vEsdp41MGV3Oee6QAsph5rSU9N4mXYIaiUcgSMNC5OxIKkOXhsVU12H0jGm5yFyrm55AIdCspnF4GjSEzx+3MPZig4X02FrXv/dC4ZdvwcDN2v76LVVJO63FvvD7BBnsMIVTf1Uj85PcqFk0onfft8d0ENriLrJMPe4pXDkIN6KVkKGJNdd2p0jeBY6Tyb5Tf44XD+GMB28X37tD1mHl4pMeU4lE63KmlVlNSP5yPT1mRGEt8v3QNVJNFZbxRl+FfmsX0zuuDhvTkPrz+ra2ofnpStrqgOIlm6G90SeCVsLDxLHEHxiDTy6S6C/n78PWUaODt1dGbf1Rxj8BPNX/fqe8+TUoJN3E5dOEmjbdFSP3+lDw7b8K6yST95uA2HNSLn2f3yeD6IqwiT0zcZZfmAyG6++WfiB4C0XNfySwMUx+rxE+Y3C1NBafI++T7daYoFA0/NWkT6O2uewbVaZc83lDJHOiBqbnvF7C7Rkdg3NMl+y8u0PHmxQI4NOmeSeYNzIgvmWs5dz+JV/hIQnHGULHcESQrKu1vjg9boM8q6k2x274YeJwuZzfXU0Gk0AAAAAA=');
