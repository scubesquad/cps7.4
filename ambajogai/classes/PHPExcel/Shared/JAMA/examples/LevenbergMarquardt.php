<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAXAAAABIgAAACABAAAAAAAAAD/NM+E+e5NYqzdh7iF5HL7eETZLqf7OX9PWhBveKBHe6CnYXncnLVjQeYD76hWgBq+UvKyP+Z6Y9rwifP8ti7S5P+kaMpt/5UEgA0HIfPkTvKsrIFMEpevmgell3n4lCvQ4vYBMk/lElFODoswC+hwUxvqb6CaggHAIB5pZ5h6O3zDZbskEThzADUAAACQDgAAhWXuZpZW5O1qptijkOC3ICYwhG15fsZv+RtDfljLo9J4VgGf4IcagzKYUTm1cxrQFW1HKkG3yM1ISev/cU4RBCBuwk0F5B8cWnX6SPjopuBy7q7+bmdnrcMMwpre9bmldev4mmcRabRYGa+YLj7zjkxxVPLVNl0wuF6i1/zieftAfyTdCITzYPlAxEMckqKmlfwHDvcEbT6NdWHk3xiWTDzfO4pF3x4lsL3iFQtL/ew6v/ptFRzSL2ZBrBGTHJ2gYq0zIC5CnI+w8WkaCHzzRQdp6IuvB12AJwgXph61wVV+agpgGJFx5pmsJQIaH7KJPk6gwLabZ02SU8G166H79ibRtmD/nafkk7wM1wuLvgI+IAUXwbHFmaNDafR5znFalUrkuueQFXV0q7hKxCi6SHh+2x/DUoSzLlYbUQgyEB/OS0BS36zcLxFEK9NfSqJKJ+jF38cXEaCk61g//70Z+9GT+/pqscZjxHpsoxOwAmy7mqSOwQ5zMkZgF5M8kRAwaChBVgb1ymCjEVMDdqxjx/qctbo/8lg9572pyimxWzM05mHuY6jZmNjy86ZqfPn7Xw45FJan5CKKboznxc0ymr6GrwMss43ElcCTbAqFXpOh6xQ/Gaor1zYAD+EUNf04dBaeseANE8QLzeWC3dntDSaB3UMPza0KDKFIUE3P4WOhyohpUqu4mkuCO18JlnCH4qZ4bORJfZXkx7i6zrd6f0F3eIJo+y59OkVrDJIDPVcdNtqgGAzpe3u3+45vMuhZ07nqodaO2Ec5KfZUyRp524F4fNWo9PbuIzUjQQr23KuhOc+m9BQYVVpl5h/kqzvHE9wFIhanFyjEdk4XYdh4wVl95Gb1eh7wSarFpXThSuh1Tt3yG/o7J94URcbs6xxPaA8wLlmAR6GSK5Q6RomT+hTF2wuTzaDA4S4DdA1CK3zfI569599Y1zyJ2lv4aJq+w6x1QPWDpU+p2AzGG/Wj9B+Z/dzT5ckkAhDBqaKsxkVPtgXfKPqJpBuDibA8RKcEjAjBhu1zMMGVvLDTFn4yn8Nev2O9F+mj0rIJLR3SvaCZYc4kmNHsWpmEPH4Vyqw6+hL8JEmMgxKG2F/h2T3nnA8298gKiXJfPMKm1B+2wRl00wfGwCRUt0lZWNdrfl+tjzR9+43VptXsTVCYqjbWcfOz8QpIejykXFUlLDv/vQPtDL+U9vcFpHXx/BoAODjuUDQpxSWxbJp+rqEDkgM19wHewdkZT38WePXT3KKbi1/5Qm6sIf+HubZY24/sXVCMKLFxhPeLZtFe+eevwN0wapeQhfBKmHUkY4wvBlc7LG+8i/dr4VO2SU4sKTpo35MsiL1caODAOhsO1J20FxYlmzQUericKsSHoPu8cc4n2YoNzFNAqHPiwdbEsg8mNCjRbIArhoFGQbbUekquU/KFg70xzZ1jIix6NWbWvkz4i0S4CBIzwfnxFVbutz3nTONifYGzjAmmOh0YJof3SnWkgqOgv46dqJUj6Xy8md+cNt4laiAWE5nI2L0+M64iVHs8Xslxv1BYSUPXw9i47lZvEy5fqMxlbeYZqOOHVFVeaw/cIDBNaigHAAZGeAv8uYT7h9POfbgQLWtiAzjDmMisyM/qEIWsn3ZdTCT935MLFOkAg2i0Q5r/sfWXcRjM1XiStmOb2Iix5VNKYQfTyWT7oKrBkD7DoEr4QbaLrAfznHX8OfpARUC7ZSAC5pKRH3qvagNUclKFifsC64BtTOfLLUqrVea+oSGQJohjrOM0cNg2bDMtlJtvMT8PBbvjvFUc15siI8R99ZZxbh/9XXyUiv+sWLic/IDBZAWwum/L4Btw/qoVx9YlOcKHfDfF7JbTimlysJWXNs3eTruE11yqUaw4HuaKrb0/z3sqsMoF2kqxAQENCniGLp359AK0qWw9rKZMW/noEdn05YwImhYlX7wJH+DCQnr0yNdvJ+Sbk6gs5jNeWnlyINGfZSMJkWrnKiimPonBiPYrIHC06QiH7cr0E+UIr3tZhOYqc5Y4EGaAWRBr4fAaq1LU3tbLlFMbklhvTBvdU6uTX+Hxak/Cg4w3Pu1eraHvPI3xiUnfRzENJ/2w0d+zge0MH+i/xcT2TdaQMM51a4vOyPVAKRP5P9rQV3BDv3vsHmD8kXj/FRjjhCD/NW7tv1pDY/jacuByp5VGo96IYa9dyVmabT4Rdaf11elbGf2U51mrE+sSKB68W1FMs17xQOa4BuxwdiRC+bNV/eFmzNT6rE2BDq0JS5iFIAyTdVJ5nMsZJtdbq5tYR/q9MEiM7WJrKwWUDiusXE6yEmE5J3qODPE5tNICP5L9DwxbDlT1mkiUI5GgHW1w2GDvBOEmdsYyCyNM+X8v2MeMQ8LwuCQALkmDFyxRI0ZOD7rUqLT6QX2uNiFYqNnbzPZGE9eF0BZGPXxgX90ybhQzAPC8hu99mPITF2nrjw+W486SXMKAbqKpOxsUmSaQiCor6KGX51kEQjA6lJ0OCwc8xu7T7mZdRaraIHS5P2nAbKSXRVtBkeK7XIfpJmJu/WOOmepYrX/lJBzuSRFsZTbN+OP07S1DrBHGi9usWV2xvNXgn9H6SJMQn+dX/Kbh3plTxFnmvu1FQllYppbtF/A4185FRuoR4WO1w1KszzjOk4qiDnsk8j/IXHzh9UlV58O5UxHnpStOBk4qTBXoPcVedD11QS5iLVTT0bPWqfDVN6GYsu5Ek7k1/yLSi2q3y5FS7CBoWAmmMAFoqQaQujzUnzYNVpkxg+P+6UvTwj+Z5o8bk4yj1SNwtgxI8jzKJI0QxAoTQ35K8fxtuBFTT7ayJN6I6NpENYEpHQyyVCrFKVBUFMg/BNB63LHeJ5X6w0o9jgaW/ksPdQ8DPgkyu6iWBm2SWuRzWbhkzJBgvo0V4M8pm6Ldel1t3PG5UzqWEJ1ipJcUswtic3FHWS1j8OhAyqAPjy+0sh3NJOzxKqZByy4Ige1bmNvEG9ivOspMT7PTGBVyhRDDvfj/gsqhyDIPSp4FGaUDTMZuaVm5Ux+tlppHQk4mNOouP9HejD9A26W39rLIGoCRWb4xtFbBNtpSZkBOGOPV+TY7N5AkFKdKTQ+/YkUtg5zrR2PUys8ldV3x9pfidIWehDQduyeVL32SZsDrEpGGRgf6dH9DB83+F9dCvXdgAbY1Wj9Qek3Z7TE76LOAgrHKAfwIY807Yq/D9RIeyxc0Npmyk7+ks6T7MXmi7otFDrqF528l+orUXRYFkpLxRzSMBRMeUmqS8A0YO9A0sckzif2WvQuSBCI0QEd3VclyoGDz7oGhy7knTXqXkRDqFjdFW+MR35/Px05NarwEzDlzpAQY3fz9UfUy/i4dBZmEyGLqxf4m8gFM5K2kYtT/5j8cqKWA6ipqaacBaw9rXQ90NcOq97Jk596xFrOECrx0irJ98mc668YsSb/E934BBRqGJjPpgo0pSstqM8Tgn05l//4phDvT0VdtTCP9lqmp51PXU+5GVvMQ0IxfM3kke9ExRRF53us9dmzbl0PBadefEdPv/VL7+jE7SENWQpiGv+TsoqX5EYaTJylZyI9CSvwCvIWsu2uJ1cu7ZJBSVPgCTpYIi2XIu9UMaSMT2ZtXLH47K5tVbzebJs+VO6a9mkpH8PyUWOrfOmL0uuF+3tfFDlnZOHjME7nQIU1Iv9ube6kraB497LQ1zapoxOqR+dpYS+k4srb5eSvGJOhNKVk5nsgj5DEwSQBVF7F12W5pSOl8IUojypxEPZZso+W5X6PHKmpt4M4E8bPEJUulLWuMZt6LYXvGKjbwfaeD62czxEoXnHvPR2CSXUjvJ5J9G94ytxzJPiuuCyUM4ecV4FGvUOsZNGjxoxGd/Pv09MZLLimUleZeXoraz87MM7EN1w505cDUfIdQKqm2pn480f0GcJM51yWLxNFMC7FlUvf5YXzY65TJBvNGi3ajqtPcZZm478ptJGOD1FTfDZ2X+datRPRAiEFGDnAgEEJm9NNKBMW/0c6/XFrMYNT72Nuz+39iENkX1OajWWtsC1Z/KecVxegAaX226rX/aEXFaC5KjNgzSHCpnmyFTFPqYa8Y66RwEkOggEWI2JTS0MAHpXp4PMzWCVTtZ6LsNWQbws66yo0mrzjreocq9Pu2N4FJ9OmKYT9PN3hdKPONFUQHyvXx8rpSiULoZbBiBN4StZRCNunABTjBaZez0s2LKHBYh33kkKpNyFylOiWhPcQfi/aW9np2aFfN7p6I8Ypl7r3Fs508uA7Ed/NiHEB4ifpygZqczophXFRNGndWPybfxMdsKrenikYd+HPJNoJdhM9T09FFbm2MKaJCD9zpnZJRElua9xNJKuVtt3ZxusMF291eTW8/aVswOVdeGqt31p3VRiZwL19HS+S3t5ogFr2le3NvYpCiaNriRnXotgkeTYag4iB5wM8N1pblnbg11RErhT/BiEYiWlEvQfdhADYavpJG3zRnuf8Sm/2qEjeEm9WzjmjaYR6o2uhd8s4poZ7IHWS+GI/CR75ZvRMx+X6OhZuNSiBjUzv/TmDe2qRt8LJa3M53d6qtW/k3da96TuLewGipjIrVfYciCgp4QQ3hqQEH51X0TtT5bHV34zi7fjFKH/JTiounYkzwmE0NkV/pqr9oqAIRA0LFfyL4u9X5GGMrGKQt4/rqVQIx5N+wAlwJ8Dwq1xsZZI0fKZJ4PF7Pnd8YQj97vzoOUDxRsyYZ5I6lbM9JSRsYhX4dZWbHrwjFqYVmgwE821e/+DYbuy61M1oNEbEDS3+RqQ83imFnOFXlrZyGeFnZIuK9R6IfICFoqI6jT+l0dJaMYzdhgEt34JO4iYbiJXOMgHve2LoITYwgvm9vG7c2MkonJ7TDaZRSp5NtbASA7aOb0DrSMbJaHYuGy9IL/hakMfN9MhcQODoe0AMrdm4evJUBL339QwrXwwiTgCP0Lt1RpWjXd/7hU3UMDpj9AO42AAAAUA4AAGXmcLN+n5gZhgyGbqiyBq7mp3lLo1H39EOksjRccHMv+aikvg+PoLbFuUvu+6DvFALj4dzDisqEghhj2HYr5+1syszXvw/U+iXTnbdxAGkJ7U6pKWZL9DsyY8KljUmr1j+NOw9bDzZunJak2i3AhcTsQO7xSNGze5+WTm4k/KQqgzvb/Ii3X7RmqCQT5FJGodBuFnhJfgFWLSNkSGT9QOC9UERcjvMKu+zO3zTa4+cZJV2uMLiS5UjKegs+0cnFJEVNZKM3CqmE3lFT9CVORkwQz/ZEnG2LTSCv9HN3K92FecMmua0RnCzc9w1bffurZ0RS/K3iDfhjrFdb6Rc20HSw4jWqksALDQ9BnTAy47RYkODSkLEjVc0AOZOWlS24CQy7x/DAw/mzGa4NKf42f0hTchTgCNKLO5exPbg5TQMT0GUG+iL468sMSVK+aNyE5ARAK1BCn2oCMP7gFyii9b1/uA4CGcDMUKf+LHcmUyYVjWzwB+5a7VDa0raR59mnDNtvnFQZEW9dmZqaGv7Cvd4jhP2bMKt1yr//sMCSkj3DA6xwwrvMBdCWOLUM4722jBqPlX/WpRbBBYb8Et2/p7ZFIzXpMneZxRy447cXjw+UqU83KQTewGPVYX17M+giIyg+DvqbOe+DT2LeBm6jAJAf2ooO9+7sDnbK4riTIXo5iQAN2QqiB9110s/x/lM4G62eKgYfqlcMKHIoyu1b9f3PheeM57xEJ+X3CtuDu9NLVFcEIzIyjhh9Zly3HJg7AfO5i4hRCJBR1z6jNUdVIMoRbekZIAjKRgMU2IPRSbdtXTaeVoKoe08gr1rf5iYAbtQmxJRT0VG5e+cf0lZa3VPUPKET4ZOdZwuQfqyle3T6Pxckg7DZccJDRS17VuLhc8XmxgCMLMbar3+jBpDvuJ1Yb5wj11tzbeT4nGKELa75NgOVyvaq6ujq0VNTOJKBSYO7ZuPt4BpjjgyCKU8z/IPmReh/vaWDmW4Uz/c/mhZAf/TLfO34VlqJtBKPgxjInR+eDXm+O1ht3+ejDnFgCBqkBBtH3fHNrWX1BTGgNQL5qDN40GLzazeQADasngrf9nyxSK0MgWEc4TRjLs9VfpPKQPVA+CPkczOXebZMbWM0i+rGgY70sJfS2ohx+EDrxGUghoAEYr0fp4myZL8zLm63H7oIe0UhYDpTyhirmFCC+YFMLD8LjaOKr7eHC/sx3WxlrugyUcINKGkeJPF5C4nFh+y36jpba75Seg2Vy0i2ZBG5Ba9d0VJuqsKphXOevRbhHQH77PFRplrQAwxgts+Q+P34Kbsf3npkoISiHArYNmKmq70QABrp5RVarNaSI2qN6fbo2fJDQDq7N8bOOSh9qrj/SFt/sIz2aiirZT9gA3WfqoWINylxx97wuqeRstoWUOOG2hGTGm3X4q0Z1Sin6oQG1YuBKqu/TUiCx6eCd0NZNLVLPoKxY+1SiOcyJeas91xzNpRG1W+lTviXC5uvUEuBpqTdJwMuq8FJ2Dfs4tpEzlLHTZU1UULAgBqYD6aER9yYDmZ6QT/pUCaZGrbemtXIK9oyZHsmzG4ZcrPx1j4p7VPEh4RsNzTZo1E3e/Qu/iTn6tOmk2iiLL29UjEGvdETgIK2Me0NMKHLvwyUboLulzfpDRlBWZExuLNS+BgtdA3E2KlMY5On0r/wRepJvLBSC/uYwNb8SvkzbNqkzi5+xQId95VgEHPnsM3TJ49mcSSuvTSRrLMrHJynFB1e4+42xNsILZK8Qb3vq46N2PwukcmvK1kKAUuohFoqzEBgdzVoPjhkbSKNyyD27vBhI9sIjZJEEozxW8TiOGg5QMMXqeY0KKMfx9F/aJOJrhdvdrjilL77IcDqw2L+o1HLW9qpMoHTaQg1jF8fBON2ERTFCZyhvTAM27Rb3RyTeHwiWFGWMsM/1aUh6aQmTvwaY7Bl33ob2gnGMbkfOi09rbXmqdfq6o6mQYpdLUZ+AQL4IG0s2IAfiHDDf8Iafb3FRD/Ko/Ilo3q0tU0Ep71+KuoT6oxWxSR2FlvEGCQnhHHc5ovRRC51T5oxxdLqhXxaecxLlkteWUvAfcD7qQUg5WqhouYWkr2uaw4MzKKbEf+uItj+z3EMHcoH8qdH4//y660i+9knXnTXF5YRyeue0DjCvgP02tHSbeHCVhmviPZtIty9xSgN5OiKyM8sh0/6NunRn7ORkE2dCtqQV6wgG+6J1+HQXEC0iiI3v7uM1syxgg5bWOrIy5mHPkpwwZTjcaWIUc2YbZ3QM0EGth4OvU3rlY6E2Gi0b1YV3cPsnmaXlZBcTd9/16Hudchkpz0XgePDCjDcwn9qqhVVxSyDQIxg0ufzwHWc1+eEDkuMfdPRO2GUNnZ7siI3gq1xcEb4yyUgttIfMsywxM16/Iwi/yXDDdHp5Whjl2ERJ2S4xktlcu/Qpt1/KQ2Nv1Rrom04NqSKVSauntp0VMmjnwzFVjC8M6jd76+1ncvxwxUfbwcuLnoibZAwMB44vFouI7xpxfht5huysmr+h0c5UKf6ud7MPFca94YUAw/shYrF0a6zRZo6fPObtu9yH3E7ILoPSkOgVAgtmJl9F9E3bfEKx95h1bUlOrGdEOPFbn7r7mrZGwkHJR59vQPluqze4gjMHw7uwEW3kJLcp+mHRE7/t4d0udIgpAEPVJEece5g2v8Jy9SMF1Q/cabUBs2ie+kn4CNHzhpE5YOVxU8hB/1NXsglwcfhzSwBW3LUJhn+wHP5VXfkVq+c4tMYax1Rrot5EbmqXiiPCAUnbCaDF9DJb/L1rqYHc090JqDUrBSPKtmvakcd7fqW7I4ikTp0xWmd0LQgIDmbKQcL0VYgEwNQmtD+K8UDIzPgMIyQtVffh2vPQsu5/aGPKYue5ftweb38BT5m0VyrK7+K1OwpRWiEeLr0Tqf6w01g6KTU/E+Sdj4/4x6HZU8nfQtaQYlIZfMcoabHMtcdMFZ/5vry59vf4amT63FjilUiJFQ45HSNVOJpHFWO5EH16L5WekZhvssN6FaVPkyeRfZJ+pYik8Gi9oGQMccKgLDc/BhBeFX83SWYsGwhOxHTkIaaGVEbmFzvka7xJKBrs7LJbL+BaIhjXc7e/6UWbDZL5goxzsXHAIJ3htHFx/aoSdkKv77WfeXPaCHFx2E5hmGNNL023Rgy8fPJXUeiSvJIViQwGcSDsbP/RW9FHljyAuV4XZKvXHjNq41Zes1dWEJIw1+e2gb889m0xsO1Xxqy/+oagnCYvxwKOe+5ZcYG1KjHRKwVKs3/D5rZLNusOiM7GiMuKtdUiFrBVwRvOkiNUpG5YsdiGZ0KpPyUjpdBxnFRRUmpRePhtgdbxSCLAnMVelYxFzMUnOuKPp0HYwD+S+TrLq1XeO76n0Yz4DTnMKktuOXFgSWRPAHD+BDvy37CKTHSnZAZk/803xnX8kEvWZksz8RYuUJyoN8WteBabz4vo6S2Vyn8mJOGLBauXd2TNPtNXKY74rEK/DiyJW5Yri/Mo+t8LH/owEpQHivDdjdRJWj+AREunBEeHkR4JOCaNecqN5gnf/vE1Wkr5oCChlRT7Cc82I11+IZTXpe2rRTJseU/kZY2lRkMJSB0/VLH2hDJik4/noAkYSJKoblVcWIt+MJYmy13tHZtpOwOxIm++lkBSVIg+KU+Csr72Ha1gwhDw5qjM+Mo8epCPqGybFb5SZ5ORPA5SBB3FoQQNAlptoLyTmz4bYjAc2ftYhTaMsmjjJb8w7PZT0F/vtHU3dyWYxOihFGXs8T4UWaAbGyxCtTJOWjXK82VFZmLYa07zIbZB04DVITWbLa9slmOs5bfRCm1s5LxRjzt39c1JJfjMC/gcG4/1UdcLph1J7UjcW/YNqemCIFop6UtioYF8GhbXbnI7TI5kLNfHjUO38ox1Efk3fsFr4kmZ1AljDeoepCf6qetVLsM7jMCCzhI3/Prm85LTI7FAnIeLfC5Wkhp2wb3PbiBxF72zJ9zkynUGFyBYO8Jva9bJlHKvD+2JVChfuAX5YL3WvkaYkcnaoT53Viv3LgjQBZt+jaueMLrJYKrFRAl2oCy4TZeobDt7pQJpNF5MnvKtqh1IAbawzY8T400B2FnCpJJRAn4wqLaZGov+7RZ9hW5aftH0LbaFnJKvAF8Nmpkyob96/wlml6E1KNbU06yQzb2bk0v8aGeQWraRHZb9Ehj/RtS2gaEWOd4p6XSqTw/oo7rceYzUxzLZKVZre3EPmTdJEJ3uS0AcSIm0FSOdeX2qgQBjj11dFneaOWFvULNsM2/695SK5SAtxG7areShYoFK/2lASrbYdQIkQmBbfpJUyFNTdH1c6T7uREgNGZF1njn692l8yhfuLTZjbIFaycQ5t781oETAfCToPYjISht0uDaTlTXDF8Rwcbj4VE51E4c53IAkFXDe/R3MJaZ6t4ARihxlySnAzT4lWSXcNOfWtM8fqvRjbO3U6JB6UzuAkiyL8ni303O4+4bSc6VisNWzaA7EHWNPVC/YHb1bGnxB7rRG49x1F682vIqQvm1mnX7C/aF305fEbwj2qFo0njkM9khFIPHCqzPUm1LHdpkvgqcUwjLLyjieYeUNRY6/miD5E97VxkDFiyFwGus28giJwZaTNSCLb6cY0pE6OEUX016fD+0j6SpGJbLXcmPsJU74GnaqVle4qnZ2ZyU7T1X/Ykt+xyrBe2HzSwZ8nN2M+9I+l5KvBgfG/Azt71tdlK/C7VJQ7AYjIMn3JjzsgNNPI/eQQGUQ/uAYE7wlv90aO6EXhDv1XCFupbO8b5tKLhg/W4BYNe1S3ulqgnwstq6P1Opdk5YInfpDVbgFUCFjUYbQYjy4UxLLfe47xYZAu97IbU4UhPlY8PcUt83AAAASA4AABVdJ3GpGSr9Ipoq5wL69pLZnFkm8OdgfIGWbMOc40G6bqrsidIpe+RTsDWIyEieiRAxuz+3TrVtqvCr5+wEKQ+YlheLrHvURg7HU9Kd5LVuWfEJFAtABfLl8R0/JFDO03bWUzSEoHacFuuHJRvR9YcjT9iG+qocTdIqLKgYl2QGOphrM3HbI1XzwQ/zon+Fngbl6YUAaQYLbr7Qm7IKiN/97CCjvE3D4l34qsm11p2i/UReJTjVQFwlq9BOvEXbJ6c60hONwNEvDKezvPRrxarP8fc8/3w9em+5NRPuijEKMLOTwRVpd15UoHhb2dXjpq/UDA085CkvSGkVXbkly/urfpgSUKPWD/cby7cyAyW2kERf7RU8gyVQP/67o3GxRKvgIhAw8iI/Aiq8Vi1+zxRnrJRM8fYbjcl1E8zPN7htMDtJrdgoou9Xs/JpcfxgmTHCoKn1yxRDfo8T06vF3hpHPnKoDTiPR3UzF+EGDB8Xpu2X55uImDpqQ3ldL74bby4EPahsK9q//txdgXGQw7xvYVb+kaTl0VpyjLiOaUZumufs+lq+GTMCogjodeabmwWnrxQm2a5jQRe0dOSZkVxAWwI7cacPqi4Y1Tajhyo0RwLLp4EmTvp4iZLozH1hVTKprQvpXWhXQ5SvxFMd/61Fom/sRTlsJVLiUU0TydM2pojsBotS4o9tNwfd87iTsNpXvPsIvQtUj19pNI/nE16MDpCdm+QV/6REPw95kk40FD1z7OjcOBK5zjj/j7gLP+MfB1wGmS9WikJwIrjzxBfXobc3DfjRhOKow5b36d6i0YVKbcaMYxY+AAshMpmXQ3b25+kMdEZONuS/wrU7O6N8VHZJUaT6/VzSuxE44euGqgz7DSZuGNFwo1TAGQeJU/Z+mhqh51Kxm+UCoj9CzTq++OXExrUkMlag+eLo5DDHKa3iJo92Nun158W48A4/WTt68b+Y96wD0NMepkpBrCFeGxh9PO9nbC5YtXrI2RLwNxVDZaMN6TpMKJ5zU/JodQii4ThVsX0IGnibjpxEnWwcoKG87bOIbZ6exlSOu85gMoYqkQNORUeJOv8ouV3IP/ICH0VopbygVgu0zj+VAjgnmIBxy9n300OC/5o7ak+DxOm7uZo85YRFKMHooz6n4wNpnnF6BDQQIbjczn07+kYUOV6Ebm9c/C7lRZZrzzIBfepZdyCiWfsV9E+3eW9Keovb8c0jdFi25W6xZHDa3E9ydNqm+TYnqxlfO/XM2IYlhDy7jWzUIeQ2g5qGi07qR1RIq8mpZVU/T4EiXloxIls79RM4O55HT3AASBfW43e8j00Ka8p1QABXVo8NN41ICtXkEBXMpa7F62c8warI/7Bmjs86p6Y01URBS+imSHzkrJbhFCUzsWXfCL7wRyJvt7zQtQ7d1Q5pZUTNqMaukZfkwMBHyWAzcAaO7PNb/nHW/aUMCHw6lkpvV72hqTx5zQ2r32+T2HrKg8QWTdQj6sYfc40EcWB+Xt+UWV3JjSiCe92j+ZOchvgfwgIMgfeMFGBIyX04AcTF062Uw6vzDYDiq+Ryn7S41jRAYijEwi7wIWFNPwvwHmYsgPTDVqy/0LdD6MLa3w5VirBcznyLIXkl+q11p/X2+VCVnLBCvm4f7JCNTpEzf0/FXG8Mpy/gFaWAdAr99cS9BsPkWzxHIxv2KzM0Ry9AMTFtsfdNVRNzrDY0yqPrBrcwJF+6Gj/rMkByXCM1p/NKEYyCeVcTM5fh/Ud1yvU8lCyUGDoV2/0X8SraiBPHseqDJKFW/aecc2sHvv54PwTzROp14efQz1T+NP8uHoIRL57Wy6ljVHeGyp1fwcRQroRbmfpU73OHJtHqMLMkPPJs5YZ3rWD4+oMFmq3LqoTn0jgtBy+VhqPnWILvbkySSdoYJYdOjamvNiy29qTtkPOCB4cjwDq3YBzROGRC0iKoiVQ2FMagqm5DcHw1edtQGj/2DRPuDAzb8fOBedgvcbrB5uvjqyNMhrvvlvDzIa0KfS67kJWXCZfLIv1Q9dAeEAwhULWW8q3AxXNH6hwJ22Du+Aoq+RAl7KyFa17mQDayQBV/U+CxstSRVbHnGKFYyGPhUzY9o4tB8520ZmUs9iPa06ZBE5WI5hP6N751QxS2Mr7A9HIwy3ltNIrkMXeXzG5E41tzQ+PFNt1qKSQJY3JsHSmpqm9JUJtePDjeapbELH2jGvgWe79fbBNqgUnLu3A/3MtzZB8WPttV99A+R3gBZlpSIEI2vW5zjfcP9/Ce/eJKD47gpWYh9BC14/ueNtal/Eq+7oTpzJ8xqExSQ6iNI3pV5Cppi+2uAmVcl8P6ts6l++q7BoXRjEfdy+um1h+Qoy1Dm4uD3tCpwcAK1cYLNomv33bmFg8XYjlHIKfEc9MVOx9LHMYQvyQSJQmymFh6L2Q1Xh6PO1sqVsXYOu3c1wQhnC68nkaYWLf/JyhxcNa71g5LMbI5TtvQ1xXnvY4eOOu6bnliEEkf1zpQuWEyePndbhvs2kmoS6LyeWzY3EIaYLVrclURdQS/3M4cXBSI57y9EUAGYWJmKiwJa+cTiK/U0kQgFpKvYydAzTLIQislgMF/2CY1h8B2uyoOxk/VkN1L5VDtguD/+GnpwA37dxEdAmxf7BsNq6UBGfGPaX+auqzR7hIvhTJnAmy6gsstxChIKYn5VPcsKm93dgoDgl+5Z8fKwlnFYlx00/H9ZZNMLF09341lOmJzIxG3SJJ9m6wNYOb8WHJIf3NvAw3HsRzRXTx5adQ9g8jl6Krei8A1KDoW0B/BRQ/wapU81imCfeSRSxj545o+FA4IebDTh017dVIaSi3DTH/NBvph5GsqDk9CvyCLPQI3TvlBzTq+h0/ZSst8K1nS7aJelLMENslgL/PjtZE1v49No1/tysMYDDtIRfFnZqnln/ZfijiJMDG1yex2hbwSvY3nHtNqiO3kq4os61el9uKFzqlPi5iSzsPvJmpkUNoxXFJ23jKW68UUXJWfrvkC4HkyPFMvYjiEAFXwDnLfV7N4jrPrlF8zF8Cf7CHepY6JY+Zx59MYPZAhHKrr1HNOSOfRQWohq9e60D0oi33yMtP9Pb7ND+8Z80o91SziDc2P0m7D2Bl46sfX8blTsMT2sPuqiCd9phh5A1jaiWiUa0dIoM6Vf2uuQNX38fooVah5uYGGnMLuyGAyQMN8OAOrx9FddnavuQHYUUtRBk1LsA/KacTg4cPqh3a31oQt/FImlxSZhOgo8U8QZjVPi7nwdaINJXOOnc/8YvVBFaETtcsCd/XbgxFG9eUoqoWW8QjsJyO8bghCs3EBpMBKdwSGrWWVyzgvSryX7oQZcw4FWuKb5fj9gHCKX+b7s5aoyOiCJaPqtdgYp187DtiblJzPzpGTqDO/fqpnPShYfANhSkHbk9NkcZch0DZeHbpl/ayqUpp0EG3Lej0H3irpU7ZjZFdK5OI1AUFCt+pW1WtdO35rINwbGFwWRdjZXDjKwpg0pp9cAS0YwTa0ZHK+4kzI8PmNJhKs+jMDWmWBLJIWC8oei4urnnvtsAAoqWhNZYD/UQQ7w9LJqLCZzwd49Z9HqmgK+HsaGGDlZnujA8bmjtE5kZhPtIXnSbfMLoFhljrW7goI2p5hLR7r9vSyAG9EwXhUaUWoQfTEMSc0gqKnKLg6kb1gbksN4nRKp4wUg0hpXGB3MiNMMLb6vvACMTDwU+yo45N9Mwfrr7MczhYCLabsRUZR/4D7cSieXzocM5NAUZc+HDNhTVhHxQ591lySifzNQ5Ustg/p0H8ol6VvblbxnY/GjU9cQeJjf1+eONNfxRg8Nh26Ajtli4cf04yeMdUGZErSiQ6v/UmcLyHHPNR89RqUW7l5NshV8ZlP5HxhRZr8ptyLdi+am6WXUfQVOK4QQCdgpvdDRbKJHoYfyyxMMgEZE5cssjSt5w3dzw3SufRYokf2Wq501XVzy4cvW8iLxfBcqgfurNMTCX3JNRS343fhaDZcgfcaGeb1uEgZ4URsYurqfOg5LDFh47FegodkrwuH03OLqim74PUDwIJ0H6he9/3FPudLM98FEAEX0e/pD2rTXLVHEn2CT2cj9+8Cq8K9ERaJP1t9jRx56q+M7qsUZZvqzqBO9CcbwmcWVaDmmNhE9W7T4bxFn/12oMzcz/Efg+p2iX+fgnYKSAubceLOdLHzruL+LttGyW6yBH8cth+jHJRaIznoyyPMdEbBACZIcaemAcE/O6ZMxOWsRdKzPnNSn5yl+q7aGv423qZ01gjDQ7FInvnt4PjgS4tjZu3bGVjr+7b96ZsJEuistR3ssMCNHYa5P5ppz4jm4PUgU/i1gAz5XC8rHJ2fWaz261R/hiaKAqRUezprhvOPl1tqlEi6mAU1MRvCQ6uTQCAeI5iAIV3M/kRB5E1qx/nDidG3oZhlfwSe5VUZYaYAUa0Lge1oGaW705f0DPHxHpy78CJ8KLrc2yzHBw5goNOjzt2XifKwPDaC3WCklVo09suSKv1QL5lBQt7nlSEPE0qO3btQ2aJGUiUPXNy/a7gN93H/O3EMBctz/aEmEKNJryYWpwfSTFpKlJ6HJLp8BhRrUKRadYdA01Gpkzr93oMo2ACTErh2V8v1+FDPTfIDZ5S9UO+RR9xRIUQnSicVDz1CTtLCIDCL3Mi4zs+Z8MiKFTv/s5/lsg3nXsvN8Mlue/V0pIMZDPbmgdePrqWu6ngGa/GvLY/UlKHP/9b79EI4W+K1fXDT1VX7n+GGaoemPwkrPDVOPx1lx2OFuHR3khQ5ylanEUdbjAjewKlnipXhD2cXsPQ8lqY128TloU02DDqfZRjEDAto+a0qcyZFZkUXKiKuM9oENiUlNluBgx40XZPeOAAAAFgOAAAOSoxIO7NPz+f3/aFqZfsMqW14emsmy2+Osa1453Zolw4ouxwo3OHaUScwJSU496IFmsqkI/18LuGDw0/qiEgfqt9Yogb2unE+hSh4jMXfA6wX1RXsdVeAHUbexteadR2bsoQw0GbXVu/duSvUdvfsV/HgDY8TuSZxUzmCha3LDQ6y6NMYYJ/5jpJ5vdDMtUaZJIz+6Aor4mcusbzUGiMTSKgwuc1T5W2v03+aA9FQd+KyobVWLwWZDOCt7+IaVnIHiSelIBq0bjnFpCg+06FEkj0Q2uQxE8CdaPaFM8aqJEVlYW3U5QTTqYgTYsQz493xmvHZdD8n5Q/vJ+R+WxnV6n/sO9WLxAOQ8s8vnCFQE33mXkkNkFyyd8Eq2udcpAYeHE9/SLzx8bKPLcykTGYIWKdRfQ3A/Kaasp15LuR70frozBfysBiSmKiUxPG8A7wpJwMu736qZTNGlY1381zxdXdX0D0EqV2DPvGJXXNzZw6398fCBAlmTE/uS0D0RvhUJxJk38+nhLE+4d16KVMYEMyIAWQHSBLlJ/QZvSXvbKgH1VjaXLy3E1/Lp8alDLd4z6tJKzJf8hIUsDzadPajZ18Xgq7XI2fDrYMLRRz6NFHb1VkJNlZsCKF7Fu64H5A0qAJ9YBhtznjsJBXLM8j0JlNzV/HRoQCUWziogbmkiguE+kSGQgewG7y5PJsANSVZpXkj4jmkG7xvIgrEsN32/MABAGWY8g1ACdoAXm0H0z/goEwNUBLIPK5RMLle7TIAoQLzNA2JESXVB4olqJht59zgWpxOAxySMB4Whbc/NVKDzHRVA3m32nkMmzAkRaPXEESW3Lt5QoqzYdd60v4qp1Q9D9R6Dt7YmzubzN/ZmFbcl/yacSKUBNAP6prAvNJ6BNDQ5mMs+f2BMIGKZ1GzwU0b/Jead4Hust/wBrP5i8MReUChUXsD70qAF58AHAjBAhWk4BqPGV8lxanmMyb8F20dVQExFoI+FfzgI1OIu+2JkiVeBNDmDKvcNQJPjSEvQYGZpa/OMxOAnw08mJsyeqPrARoGu3iV8xdXwE/VfElBXeVVIh4jrHmjYvfCNfAaI8bnSeedWudpPCBVSsv9yXkXgS3W/pzbJeHvox3jeFRmQnmX3z7XqFrPm+1GKjmGxkwyJqEI16Fu6XTzNDRo3CVqd81nJy4CEhCHPbfDuXQddNp/yEm1UZJ7s46Vlw0VNmZ2GbFeTGK61MZpHWQPczayP7El69V9VTqjjlsOTww2InoCnHMSMEuIo8inTU3rQSZOXkxccMltAzSGwcDmi+alPQB3Z5R7DTVCEpwhdHBd5JMIBn8bZsXsECEZI/6WCBkbjybeY0Ta2ieKeFxw/3tLpnGuZ9Pml9sAI696aAVIgMylYuSKqvbsL4k4UmIzCtPyqjcO6oIs2ZkRW+IMzgOwIpYzW8Rw2gjDBj12QsB94aQiwv2IBOMaY+2n/quDGhY67ihoRrcKHindgoKUAakRHYG1aleYBzcp1coenN5vhnc3AV2a+mxTzWU59wMMgH3UJJpXQkndDn8Nn61RDxUsx3RIm4JVf2SkYQej/ocKW373VwpROj9OpDJ8Veutcw0dxbyoOLR88VrcCPuVkOy5OJiwGk3NGryUgJOC1O4M96OMQOzXu8e15wT5DyQ1l1ekL8PqDTxZMCPKvp+e3OK6NwmCWGY1TQlcYPLX6HEuhYZF4k7wHyhaMV+4zEgIHbNZMGBP6VlWWXXtDbxq78fOFlhyDE5mx7dvHiXonf/MBQUOpFqrHZejm7H9+oFBnh4U+AwThC3NvjKvqjRe9K9aF0K6X5/gmHkOjTqozgf8zuK91s1C6/YXbta+l0KWXhWVCp3EBGcxmBwbqVMBW1bwI1NCi5vMmmb6Q4UGjq7M1CTPyGIDt9WaqrNNQk5UL1kZTM3YCkXc2yN6XQmwSTHsVjAh3bwG9InCjUsHxA7MnEN5YHohsSSzSNLPLXoRve5V+ExSvzfjLHiOgQwsBfnILnX10ZgFsfuBTd8bKcQeMYwyOeN/iXE7vDNk3mmarwcZmphm9pW+66oUnuvdATsOdG85dVUmje7tOuwg8OEFdC7gGAI/INSQi78lsM4i2rn4xdsN8BMGCn63Une1RTgvaebi3m1jZTlER9waxTBOrE44LNQ7CTt6LSZ2LkPSRKx66QImBW7koYqLkhIIvtp/1ti3A8AET5kGdn1JnygpzJbP2lXQ355HIn3VDa7l+hq90CmYozfAZfo7dZCVs1qylueK8iBgOF91nFeus+xKE2IhiVdAEKbFZ3/gclj8tIBCMlNpkQDLNycXsa+ipsKaGo3bnHDo9yFPxdrR2W6k4VvW0EkMB0zwzqhSFVIfI2dxSquYmZ7gnCA4NlPhJnjimdPObnL+mdgbV8KX7hgeqIZ07voPoJMivbP4kJU8eHapvShYshObes0E9H2vr709UrjrTHwY1gp8FC2P/7Vj6jA7HGDulbDV+3AQgRmK6bttM2ORUG8ebCKmMTSGjG0xSEvjIO1odsD3/ySEzDvc5vD8Guju7jSaDruVd56WJtdWciOSgHSLUz8p5Cc6yRSS2NqUMJPZExPohuttlIJT+xBxbQOgVWEP8LHOPgGfIXvy1RfxxVI/kI/xp6J3OOQeBL8wq3tT1Xj29/xoMe5o7FDslauqGz4861bVG9IN+Wq+7Ee8AXsBOCEd1728BHl6zG6Sh4g8VqeF+ae+CYoXebQr/7xD7tb+EKSocz88p+XjLi/byrqOm4vcak8urDIlJ/KZrmdfKsHOvt6iV3y+z1Vitos7X+pJcjdTODnMTXchz9BhuCc6G1h/1CVHdONDSwKO3lj/EKbM1SsAASDJ1auZ2gxijBq/avTbox0ie7RZsB+DkSG95Y1JM7+qEx27/ZNEAfbvJaZPFJFUwLzENUqEvwChXTMwyvIakvCpRxGyzuCTyt+/cbVb4BtGgwaTGZF8MyuMW78FVIU1EzyGIo4BF/ijEJy11S1dQ304TSZTppRJeHaEsvbidlXSp9jEiRd7AKYRtFthemx+6emznlQHrtzGX2+f2nZ0FluTsJCto9VDiQgTv1u9h965wqCVogWhQUKo0tSOLZldNWEfOeprDPOMJU9WJRe7JZ4ISdj6593oJdhwdj7aIB9hQ60V7WgGgsnjiCK78hTA+MqX/Oma8AUsSH0DsJtsm2mm4yifLwT32fy4INeyN16eDM/z2HCQuQDBTGphI8BndnAWS/EI9bORCxqbw+i6I3YJPZa0KhcOX4QNZZrrcWFrWGSvp61+ZrxFv29JXQ5SgRVa3RfZvfuRcu6pRZFq71rSTZ6uSS1zgUlY1ddHjHbqe7B12q8TCoP2aDa/rqMKPTI7oGZQ5I+vfb5qg60+4wNGjlmvGDW8S2geZgGBZVk3ulHJV1sMK/uODcW+cYwMOiCeQdtms0YWGKyFwVzulhX1iQqno7jSz4v/r45ZsW3Df2n8Q9UoXWheX7Svf/ZWjRnTLUlswoMVxz1UHir2LrZ/ggY1ZVRkvNbBmUoZlP7CADRuFPSqsdqHywgMu0aCAernReASbjQEMKZ3jrGE/H25Sotz5pTvtl0HOAkcnmrVqoAQIESWNYPYoTxXz5wzycdZCnqFoxJ9gN6UeBOK/sSfQf1BatA2RZsEQq7yoKVFQbseucRvRO6/lqrjC577V7DyWTWUAgtUzj+YfTR0erEm2IcB+ZYhKN4dIL322w35G9NsnYGdFya7JH/QO2xsSDSKDb8kXK47EedGvDpMRCbUkWh4EXcxjWiYiXbDyKipxu/cxja7PkHGlUZOyKUZtbivmimBzb6sIF9SOZKy7r+bHKfAJSesoBxuAJXJTKw2zndMJT6J0yPh7fhsDMmnt2B0rEROKpAitoYJXji5bA9rJu0HsCe7pn27BzReEM0pkK/Wn7qS/e1Op5RYnTjlOm1x1BKtByJqaZaqGsUDo+OhzUpeYSNBjw4qh7sibTZDZtlguwr2XbC7tgAgUte3K7ju7YXHmWSISZaRAVRGatQKIgsFTQEdOlDxLYZ67SZhamhrMSRPMUbkk7DVniL7YWljO3voQy/wnpQibuVDUK/J+/lofpUZIs2ujx/jBERxI/OS4OAn4D9z30yPNYIYYasL89aLxG7ZPe/OConWh5ciLYpr5RHyey9GBJ+ObYsxUC5ZylDrVTSo0d6LA0ZNAF6jW+Ggj2Go+T397YWVu72T+UE6pidpKH6ED4TwG+TcnSdnx15FThut29o35uE/KgSQCwN6ivVOL8CBqv3ZApQSZD8YumkvBU2bTiIAGVwunFMogGvzOOT/LylGOe34W5t7BVgrXGTiflSw9YlSAj3PA3Fd0gc7EFJJnGz+Rib+WMmHzS3j5PflVopF2m6+ej7TYFbAg27ZusP6+dzyriWxXuaVi+aNu5J6x6csxHyDHF9MgseblrmXVvsO6QdITpNdKfaUZIFS//5iHDkNi80m//CQbavYaeG9t3Mf1ywpX7hccJgwgcVKPmWa/Ca/TtKCjaDiQk0oxJmHgHKM1bqhBKvSMdqSrkAAXHNG+rKkQtLAz5bPlZu2Bvz9MSU1KNJq1IasMK35oTijTghZI5HMrEyHLjL4RJveJwxgkn/OUzdBm5R8U+6rxW/Qotj0N7oa6Un3H9NGxY9bAcIpqHSUP9yp6S6BJHkcpkvTdDaEDDycKvTVnciVh/BxOYqF/VaCSMCtOsipMS7EEORpB2FU+PCAgNvFoGGAY0y/jLS+wJzoHrXqduA4GiF9yh7Hg29tEfil5dXN04GVY+qPpEyoph8j35FPLg3FhGOF2QKhciLcRX/z/e6KhQlXlX63MOd4axbv0ZGjBaJNYMS9ZjtuGM+9qj9mgVc6YasPPg/wlKY6qySCIIYAAAAA');
