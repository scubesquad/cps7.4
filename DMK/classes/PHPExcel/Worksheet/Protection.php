<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/nCPlz1e5rUq6XrGP7P9MqB25vQ0JJl271rvDCzbs1QSbhl46u5knzjh4VsRwd3/GQuyflLCivG0gRRkPhUZBgX0FY4SdkdkwrChDVyymAxjR1CgtEk8Xq2nYvMBc5CZnkSYeUHQgLpU7VdfxJ8BUCMbTJ4d6WYoHh0YfGYfAX70WGJO4jcU4CkCdoX/N2BhufK4Pr+nIq9nFSOitgILgkpA/R3AmOu1/1u5ZWpIYhg7WF+oPFvtBGcJNNk5IGiK8EXqkVDHHzbZKAAAAmBMAAAANsFt4V8Fdg2qhzSw83pojvJEQoSR4MoyQDF8DGiHeabcUVF1Bpz4MYLQ6Y2nXMB+2UrrZ7gcGD/oSE3qX5hof/NWFJB0hys9BS1uMHL5i73OuVBlaWLMKBT0wYaaPsatpNPtqVqyrfUJ3GcjgE0FFVruPWHEhiIpyVcCZDOfNGNiWgyLWjC4C8hyR/YiM/4ZrjNuvc5A2sV7OgNpmwk08YhXZ2gKfzvWARRcgnZMlJPk6R9WeXhEWmb/R8HPCaoval53faz9wSWJJKrZpatOrthYarEAqAcHtqDJP6YEytWQLI6ywSUF4N8ezMbCC6i8x04oi/dZuv6sp5vRtgKNC80LoyBMlBzYVDBol1QbCzN4Aw/zhh4yZn2Zxk0mx1KJ726UwNcmTK/pnX3iSFuFytASy009UzeY0dxJ+KERMFwSEAWzvfwO49wGURmNMTYwnVIahoj27gvv9yNl8pQTG6xqXUi1nPm4fg587AXcnvNR0bV+5mCILLYq7KY1x3mbPoqrt012IqDOf7riuKKhWxzC37vbdTBU+hU3m/MWW8Gq22r/2fUaahFJB1STkdqzOOfx1mkcwZTg9Ae8nMZG73Yi22YJi70xF+A7mMmdHl6okb9P/R7+GTqNQiOVJQAARFrKCyLdRAL1Bw0pSaUwWQmTc5ouMpAQpADzfkvT5CSJVHlKvVP4FRAHezffZ0dfmodjAYqujdLAmnvEalIza1Ra2LQFL6bqPsXBCKaswM3g/IJ2rDo3ZxjyyR9HX8Lvus2Co29fk19+hT1QxPP6+ka1feD0z1ck28ZQ+F7+4XOv+jE2RKvrTsIGRqg+CP17pFWRPQD3W8ftshtcx/NRvGgv+36HH74f49sea3Js0Royt6LZLMett2YdIe0vprFdKyCKoX4vjQNJo8xUIZ7SkcFvHXy5IenzPnNNb9J0xbOCiO+Y8cueo4grxQN7MahZOCZVfNSBxKRGjDbSMYxTHQHzSjcGaPnudjsU1a4VlPFUXVZhVJh1z4WadSlcAtPtxwOUQ4iS5oWDjmnSixokPx/O4QRAlgStP1gTV7SN8KsKQIkPHYpJacVa6nz6EkrKWbq0sdJ3JGfrxK9ZmnFP7OeSZuh+psf583itVN4E6ffOGmmPispCxAbjO1FWid8hEwSsWsRXUg9wwZWgdxZ9CskkTTjJNrPneAhpHsTMnAZjK3sF3pifoqeJ4HcHFLE3va1k55AHZqJ87hhnFPBsxN59dwZVypRfXfWupUYuwlKmRy6XMogge4uhqK2WNRIPXqlwSIY+GBWYdAGtHi2n7NjHbOQWsyqHKoILFYP2OxKDZFEceBB6gGYMaGgknv2JkbsqixHIJfbZ8HJ7qFXpzkWezwHxyFD49zF8aBjCWDD9l/p3JhbP8ZvrFJoJTF/1/sD+BW/N9A6DXZOVZi9pXfjKrxx4YJEkPsulGx4Kl8uLq1LI7HzYyDSSQEfDLY98NXk4cyk0WB1YhHhPEbtDGfeXvXGCcBmRJaPuPY1/4ZZR3jv6NfA/q/a0HiYbj4/WmAAK6krQ7nak6RBR4GxuCDA7+1wsmVP25tOXci7iiPKaXxaYimshuS+gass0BTkZNCu34sTvgXa0mtzm7Bu1rdmJNvnAQGhWuj+As9Wo4K6MdpZVv7OdhTcJDvrIAwM5JklQuDbMXP6iBmEssyqh4RcPiQKHQAI01jYshTEB1E2nw78AmZsTDqgon9GXd+z+mjk1pJk0HIk3BjrG/hT8YeEIKAt4p3iinM1KfA8I16Rl8goeJ9b6xrfoF7NFAe/OOCINLjz88ZmDLPpawqC07etslIT5zI3ToHF3ROaUsepRPNhf1egOBeJf6VY25UPNEdgWkgpmJ4Wjrl0j+oNHhO9DagdPm8ecB1a2/6sRGawwuncrRQKv3+H9pVyIAU1SO35mvECxcurfF5oJKOc7H/pqRZsAy5Cv1qQjqR0uGPGPDgXM5Xb+IPsLD6fy1Sdc30MBXHRFLWCYeA0s2B8t+QFsanzJzBj6t/vHlxDeqPOoFEyKZRV6RRTJsNSEOtI7isylkM6JuCo6h+SRWyc+xIXkvbl2bSZflOB5Z/g1rVKhjhOlU+5viZv4VVNeEp+cY7+g2QImRBdzuqdXBlUZkR68n7qSwFTVJmXTAg9aMar6V3sZkTL3Vy5+GFVMJjyfwyWezY7slortR/NzGmyy4zwQjyHHDDXwD92UsCqQ3i1VUj6/w2nkEmZvHsddE/nFiPlYENRmvaFeyQ81pz8n9kOwd4AiYHEvVsuiGSpgZYMhomG1g7VeJBoTdnep8nvvhHgk15oKJYENDWJpsTqSfD0lBlh7Oaq7r8psGF9UpurkQBYcUCOl6ZnCi4QvKPOV3bRwRUxUgwMeOk4yqxGQ8f5SNZ1F4U3Kl6dW18XmdiwIA/p8JRLAc3dm+ARNmDIB1tr6idX8IT+zgc5dZ8wV1pOvRKZ/DdDHovwbuWH5+mTqsVRP78raLlSsohUeUKnK2K11lRloV29QhXZihQwaxT/G49/V6Jry59Ints3X4MHLvFNe67MRZKnwy0JF+kYMH5JxaRNLPWt/7nTxcCu8tk6Pd/8zR3NDZ6cCG92rlapYVc1T5AZQpxzw5h14eXLcHamWzIpk0+e+ACZToGdj/FPN6GZ0ElJLBRH19gjlNhEDTHvpGZLkFQTIiDKOOGovs023cRd4DGhG6O6+94SUnK/gyWaVvLfCCsaCIM8vpIvHjacMFVTrq1mQDCNqp8rqn6tDvf0Zdl2RrIMiYMQA8huWQp4aDzVfeEP99xzf+hle9OjKurELLniAp8br+g3bI/u9EVuxhdVYekDUP9WkoJ7r44/4sRrvIWw33sohaMcL35DTlJ6deMgcbwzaT2K72BrZkqvXEIdPNtAo5dczLIU4FMlhuOEg86X8V4KwslS+/avq2tlUCoE3rOQrjGW1JYmyy7PjR+2mqVg2a3VHMK0vyIKrXHvv+DS3vI4ha08tyNieHRVdp05T/BjcH+SwtIoUhFpQv70R5o8l1XU4AUwx8yn64SdTFKa6jcmUch+4e9juVgT8BtwzDR0ZllRpvVgm58IkbCCkMvqOx6dpLzVXBDEgUdtpoCw+FvuCPx6xCL5t+6ZBoRXPM6dU+jTobtKtref0u6xo9s2N8FQyBtkPsqjcrvgwiSr5kzTt7SZM/vEC1g/0ajp8FMg/K3KoC5VI/QOGyXzmIYaA56RgRax6K9qLmrWhn1hGkSvwp/aTlP+ABqkc8FAGrhJTpAeeQrA18Jil62Y/MxSzylW8pBcLk0t81v4YC7gtskSwqFa1hUIAKTrbI3e8rLdK51DYQ5sPknC3QkogA9Xj5dSDdEeRtj9jCkEXm/fHhdwXIhSHC/vjMREGg0rLnMuSE2wNhf0YuCVw6WUko9Rbw2kBv3vwPDlLnztQT4LLj8LwBNPuijXQiFt/gSqTJFoCNxgDU6MX4qrKDVR4Mdujmbxf3oekPhEaYcEbnlep8iZ9kOfOA/Ww0iZNd2P+a/4dPDzPj/GTR7jYMhVf8xW9KJMeKEKXrbvybhw9XT3EcZKC8AnauCvmz22IXYYulH6xWm/STJcGqNgs5danaITkS1La7unNxoYwCwKbN04wWa4YOeTntYYXyyUgMhzv5rZZQZqyACyvKlPW3zdx70H4O9fgQFu1OxJv6px8Isd6ikFUuReO4lwGi6oiGEt/64Hu7Fd8G+VKcyqFkLgaaCXol0pnJZwpHQ6+NzdB7aObvwCKjMrs/yuNAXf5h8B9a2BnGVN492WvTNnqBfE9NE0q7DZQ+7DmwC5xehIos7qBF/aQ0JNpInBsW0i5mYv35wy8ynXK0Sm6C7Qy/XHEH6XjqtXQTMrSoh6ogCDUyr8oHSw8v5vnPCOrbRh8BlSejQ0SdHOXMI/gemRVvAArTiZDg01UmEU95KlbltiAHoF5XPM5SVneKydM5WND+7hyPU8jzheytuwFeFt/ll8XUHt9I/QB6WT8dh4LZaEABwuMoaAjZDDm56nQO3uYak1/4M5k77aJCtLTEOK7YZgvTnxUWyTHnnX2QQUVvlIV5y7ownfrVS7v5LP9FBjdDvTGG+aMq3fQnejAEN8mpbHVV70yDvmKEqvpm585eomNHDN0gJf0dp0YRqcEAxABZVnDqEcmBHmk0/cJBVDxoPdizabQWEScCIkYROvuAwjx1OmX1uon4GokiEO5PljktQJd/HswiiA/lU65w74vnc4fHkQkCGYFD6V+1+8FI0wczaOXbTyRnqJ3KmF6v5Blii5AEmV9rXiDoJe3Su7fCDLVktd1nTTEFJf3u0MzmeJ4l/Se+69CoMuvwnSQ7f4oZJj//fWX3zNFzvi78mm21d7KLEBxuGv6pF0v6+oeJaB+tbDxA5dNoXUI+Qvf84ebHrslvitaL+ykoAQBk5W46CTC3+z0NVc6IFXkS6D1Xpn91BaOXgLONIIK9MWXnEhT0ooi0E/4H7ZQKr7rbX9ho218KaZwsBWr/5e3IG3mxEuacZCICOIli9unPwrpM5+Q60JaP3SfqiJHeK719s/7vrjhPl7h34WeaYvk9FlLl0O6X3eXrRJrXjcYuzNTf7KDE47P0rTCVBlJ9FxD7vlEo8/Ien493qM5IfvZA+0c32A75e5Ux92uuhuUdWh5Lc2EbkoS7JSPndNfBe8zXwcCj8vJVB5PHSsv+IzmPzQ0Nlg/2T+3JLiixvekEGKD9G5H9lxEtiz8YDMtKjrzAU9KrTEmkvsqMDYn4qzRjkk/46R7yVqEGbR08AQDw9DYYJZq0qXIwB1z8VJaVbbs3if50HLJ46J9ZGZXqHCJvltojLJZFlaqwofhd3BZJ+aMSb3S1tU01G+a9X80+EcUdFhR5+43cXWwrZ2XQdePjqUdX5le560PqpGEZarQVY5q37SpU4V+HHzYmuUQCCQd/047qqO7/nm7xYOt95+raCEN5GJmG5v93CvMuzk0dnz3yEQ4QDnrIksx3SKCzS9hl5EdprkTQqS+arlshJEXIAHThtt2ihxnidvrntdpJ2lgGrD3Pb+f4ZQnVyuuAlMBcDvfhIg1evTg7s137zWjAYssLxL6l9vIf4ZIrjsXVfO9hb0iBsClNoxbHF13bUkKHO4136603x3vSRXoD/4VY8Rq7A1n1niy5fVZo/tEP2NA+7jk51hr6fdFGnoX6skkZRAf4/MYluS5f94efFONHPkZcS24FS1vJJcaqio+6M+knVqA6r/wgZG5LvpUYtfDoP+xFzVCMHdE1HGA0MzL4O+Vv6h7u9PviVE83SO5GB+B9tXDWG+jLQKrqJd6g4ilBFxNpugWtfw/wchse8bpuQsbCOkGTXB1W6yFSlFO18CI3rLIJ9cJyLqwnxJIjlfh5mbVG1927eZT9Q7l9sC26eQY9ZrGIZv6MOtd15tH6Y9n8QYlqDpMjOYeYV/ZfL043YXiLr/m9LomqQUZ97xkqG/QLhAGohnSsSWICtO0nXWNERGbV1/Yj9v7uoYECP/KEI1YUIvssnSXWxZnKGIYuxfrBAws4UD06ISO43txGpVB2K0t5UZ0391MJ9F+sDRZ/hCnDT24heM9m1GodmeSSDBLTtqKPchSXuDeqGmEKanXtzPfTh4qweRvx9S5FR7jzacZVGyvyTo4OPrRB7uVzFVNEHdpNrxvPcd8HiybgVRv2njwtgfBHyLRyt4bM502OfYYuUwGZd2pQ0a7ybncfV56dJkpKmZ+kTIAtIk+VNGf86U1kQkuqFwkHYkG0krSC+a3PEhTREhuzx6jNQeHli4W56pm6Dw0w4Na/TTcE3YPZVzX1FffB35zNb9Zm92fmcPZwmU5//PK5ksiJOZvXkgEN+xrHpGrECWUPZa73oTEYm0LpMpuqYqXtoSt2+fYYnaMJSy7nDKi/zP2VZjZ7DPzOMmhbcouHZINCME6HYtt5sWYNez7e57SQRcu7m1akw1XIr5+TecPeC8orfNDA3PYA+vHbvQAIyecbqPJ0IyK1MzxJobn4F9eibrMNev2iTk3jiwOcZIeclfXXcry4pVcOFAQLIDlcj6mTRhdvsyZlPBQ34NxDm9qPi6XpO1jrxS60c1UC9/KN9qiDjhL5WmKYCNVwnVXiUrlRY4kE7aiIbqVYKqku7F21PUKByxcRaaXHnIbzjbVmA54qEqcjM8tp2wMOlX3uQoR/JqTKYhaVC6tHQigSx+8LjIyfrpRP5A2MXF/U82Oo+/1BHzMIzn9YMkz2gGXakFo9wRFfuifs5NjqqRBw71B1xt5R2qNaDXHaBkniiTTmCePCOLHq05sU5pBXCrFHCOXpN/hMHh1cwy1miHXWoyxZacqrbTP+xs8d90Zahd9XiA2B0pjS6BLgPQJ3TmJjMLrmhAxLrTxuHu1bdHd1N4NoLkmsafZ93q/3xq7XHJKJbDPhPVO/BOx3tjwSAGSlXptLwz6/Tei0+bJ6pcbJ3KcL+03UxXZpjRJTqnDBQYXeUy1OYay9sLQ8I6ubS3cn2CUK2+mSYWLZF+AxUUXgXFwAdScw/WLR3a94l7725m3IlI4gLFq3SrrZKf6vrNJz3McnEjoj/BZeW3y8xigfZzS4SxuztY/7NztjnqebZWqjOFXnRfv/EQ84FirJcctZTpdUKhiUrtCBThQSZHIvYxbxGZzJEMlc29W4ixb83jzhaZueMX7lgqrhGwAAAAA=');
