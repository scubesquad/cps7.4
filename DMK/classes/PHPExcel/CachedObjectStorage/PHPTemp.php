<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/LmqOvYW3ao9SJDfUm8bcwzEebJJ+k4q/xKNDr/4UgzSUB7h9QaFO/Xyo5+bNwkGb3Sw/LNbCuADrEQ+6G3YxrIRj9t9lIwcvtYhcSC4qrP4zXeKxEkV4RKij61p25jNBNMDOoTCSmtdTmeYmI5doNAEV8uMKD2YVEfuYYj40IGGVLuft3482zu+uYJUTapzxPB+ynqYv4LZaAUn4zAb/zt/e7azfj82zryc3XQEaS8WAjhuSWgWT+Xx0eUsleOtnljAcOG5lGIRKAAAACBAAADn/qgtvt/0Zd22++6DMiRVTFB3Z238nlKsXctWvsjN0IpesZdgS7xJFTiKggD+lcuuDHotQrg9goPLQyBIYqVZnMBkw0teTHIoeD7bd7aZ7UHbiJd/1zhEeEKkEe13rRqcRyMJZThM7sv1RnNxgophM395fDUrcdsYMvscVkbkfOpA5Vsg03iN02I5T4ac+ot/RlLookh3JTmannTd+J86vKGnUDG6I7tU+J0KtdQimxIwQUprjGKeHNx2D/aAuPtL+/U5Eq9Gk53+VQySxMqX4cLqa8H88xK4rSVgeV2yAy0S4YwiXVaBqESoi1ZNfDeRJbIPE//bU/U/kPIYEM3jVJJ7q+HXjbqp/7Kaa6C5961krGfxARed3Oq/7aZTJlDwVM4/Yt+l3XlpSnPOszwcvT1cjR83tTaSSNxTj7aaSMXCGccQ4cXwnj+waHVfzEnT+HYWTWTdxfr9ojj0sCLE1DUooSbnOp5vRc01ZOHdO5XcC4tZSqLmEJDMvGqaEWGRxpR8hk7ZKmPUUZkt+AihpOu9NRmSge/4mhIQG3vsVGCDjLto5qnHHZ9gqF8JH3oTxbMJ4FPZGmVd6n7pHhsE8RCuxXF+ExZHyVQpM8kNEtZC65uMcXcn3k72Jwete0JSsyjkpQ66SK9JPLsYOXB4O5Hq757QvuEkoSYA1dJByreKu50uXtcSsRAvXuCXSReeKwWhD5RL6Rx1RXvPAL58KDjfSse9wXm0jR8p3gignerMDz9YhRyBDKINGbmnlfjdCoEviizupYRl7M24tje/8E1QCqBpzldiIWkac1lzEaZmoRMFojZtfZoW1lkYTGvdgJcEbOyBH/TOhU380bdPXZWFZWw7F1iS90uU7+4FYhm6y+YhhBVda119mcmGiUtehjo5ER3rKNQjBeBYR+3HrSDDu6D044ohu+oluXelT6Sn1RIWB11wXR0wPLHe0zj0h6aPqyTSwYexuJvV/uJnpmMVVgOHimynfm4jzR4iEFqTmDSEK2wSLPxmpxbBFuvambZBSc+loztiGpqh6fIgrmDCoRRs62HT66b8oMNldzdCuW7jjTj402KbqbABAZ9wjgaAJdE9y1bCgZ/cpGSTf9uQ0I/f9dtm4rat5qPGd/W3YnOJXwxrap3SzUm8LHJ7hdMeMUZtwyBG+1f1+BvXcEPufdNxyHRnJ8+Di8bFeUXuWAY77aXXsMb8A7LY7oe8ly1qe9OHA+E/oQx2KyKYlGDB3fiedRZ1dtU3lwh/GqoPfXyjx51D44Ga0lMsCuHHhy9CdoaGSwewO6cuAp96ekizsV471UqMHNkRgPPH1EhSGRcBYKjaYNUOUpF20sTwPcZhQ0o8hVi3x5EMYFQ7Yguhd3wdgzAI47LaYFzOD0md77xBaXyKsmBy1J4jcqflQ0dzCDZPnuax/xUsOKtWpOYjR7fdIvYp/5wWhRYYhAhmPZ+iVGlNE387B5XJNABc4U/Pl9UY6Rpfxqj8j/zoYIZbZ08EcV7zzVavlAnNqxpQJy5lalBzbDh37HfGdpa+HDZlV/o9okGqlSp1hNVBdsDeBVkn1QS0bios8CKqB2uvylr0eRxqvS32Z5t1/J0570QhXnqg9Qgi53ZBbVPMIxXibqhqK1/2PjRR1o9f38HGax27H+YvL+uuLkHLVCmq9mBYzOQVMANe9hZctU1FXbhV14XG9FZQIheOlh9kqvrUsD6ydbZ9P/sl6NIKhXMLiHyNhltRf0MSm4tqcCddoYvTAQNY/Xag9KGaxoEJ55Jlfj3DG52k8O3pwhiVG2NavJBXPON90Fadmes9VPmqcgTp4GJRNwXdBDyn945p1jxWBJqI+4NUviiDvkmCuqvc0/RkjkUrJeTryiovR21waIDtzzLch+YqJG7lbxNIGXLpoa0RcPN8l8HEBBKoJjPTUPQyej1305Oe/jyJFgvT1lv1PWNHen7FpVtWoGSvprqzILJkAcv3FKEgXlJuTbLipg5gVMH2bdHNNSI2VKrBRO9uzVXdJFPE1Nol00ngMe7pyqoxc2x+jLXq55W9R7PT3/P3qRZcfXowQl+eeCbztyeDhug/NKeLE7dExq3TnP1MS0Qr0M1gwZwsg+YYqt/s/6kSxPUEKH8EPD6j9Ab1EwRaYxGZNlxmZYRphWGFNsdVUJyQvZugVJ78qsUj/sv4ksC24JOxfNE6mjNYUru71B1Alp4qTrzLdXuUdzGJe+tfC2azXkUMIO5Leq1yg9X7JbQ+4sY61VBDn8vMfjvnOitJv6lRPBIo/d0O83XI392RGUrTV82AORA3lr0Wmdzf5XlSICZ1DBSEuPBOPjlHmra0fPama7kBko25QWXAGr2nMbnGVq+nu+XuybsyVYrMgIf6EOtUzEubSs+YQVMqTLAiUXo/i+Ny7ZUsf5jCvRZxYayxCN/toNY1GBiYZ7QtLcU1jjkrlom3s0jhIjoH218/qJxsgPOv5cXOJBl5WcblI/o/e6MJ4ZeoH2wtWhvfEzdIvHxGUiMKMC1pVXJE2vCFGB1YcebpoXFM4aBtAiA/7IdO/49h+GijYMy3RJrFZjO5tW05CvGr2hW9Si3/IcCE4VbNp8dC1i3vEkG6Pu5htiQ1pDH+0oa29hP355hEFTWLk9p9rzs56k4J5DlTqQaPjiFbd5gC6gYXdEhgfpOprmplqiccUje1NbABWwYuu4/FZp1ucxFwLcCZeOXvtMjlmUn+AwBZtwa/498uBt346Vv80c9VIclTDhKnWor2Itd0/INtvnLtu+ICc5iC+i85yKn/YkoD3zKLXf1kZtjiQdOY8Y2mBG1VhL41OXic6RfQlwGg3StpxFEDB0CZf/dAeQhOvpdIpk3o0LAPT7/3N/fGodVEfzGlUvj7GJSNf+BRUOpBv8BOtU0dzl+T2eL8AGn0e7pfHN2cVIohdEtfSHj8DIiZUy7MlWGmNes6/qUYBZg0zaMVdRg4WfjlpgcUg9Z4UXEPTjhY5mCXydQg6msO2+CjHC5+qdMRGK/BVzU4DElukPYkAPe/BoCegqEfSMOjgHzyq4wlmVLx7HnA9uygTHxB4e/qK+aOiJITy9YmPLnRj42TIVzqtPM4WVIcaT+bUdMb+unh2e28N8pGf/tiC/o0Yk/83F/C4AQzkmBNXB4f9gkCA7ji8IrY9xsXPxfN0bAKl2rd+S+6j9uFIdergK4Z4e0t2dYmY8j8+zdmEk8wRfIF/Aa2CWd9niVN8AiOE1gJggOFkAOP7nmr9MGcCHWtNvjvzPpSp78GBVEQcDS30DbInNjQFgO4Ht5SiwAkGpjxX9xJWQ0Av4eMsRwnVeKUpS/qzuRqDOExuDKDpMQckpb3GB9aUvyL58ODtyPMeO0ymVLdEA3a1McnysUwBIurWXNP9KnLojmEprXfYTT5/5pzLVc9hxH++iUpM/uEh8WeYFDhC41EL6PZ0hEJRfBWyc7up7+pvNh2WyE75DJpBkhaUVv6Vws9frPHc+tjmN/h9xZb7jyqheycUhI9+Yn3LVWb6t9iWfQKQA5e6M1gLLGm1bT0NAPasjzDbGxCiiTim2eqm3QnTLhHljzj/H5Nx4eDGDtYmnGD/X+/e8EgNssSyK/01pRt6SuOFA5taxuzjZyltYijpbZMKyVZCWJm0EwnMjvWNjjqkwS4gj/d/qgu/+tNWnA/d45qO4m2Rvnzju4/mfm1X0aBbKiczlEs7Ug6QosRBtHNVtmr9kSznxALCydWPQy3GHr3RwT0el4qrHg+Sc1Q++8ZytPRxs4fJpNGHCX1rKU1/x/owE5ui+BsdA1TDoQynPe4/keLQfSG6tGzpdxZYEipT3k+RC5bxqk7eEGBqG447OMz74SC6aSSHBStkExFb6oupf3AKaN90t/ZIeN7tRd2AOALiMd6VTN0GT1KeKKPHdBazSvmyzu20iaxJunaNr7HVj9wt8GKp/46idClWpM2phjyJWU1b0Dpu9913c+nD9XWP/SBPy48NdQrvL9d+381Xv2eQlCzKNSDFDWiEsGGLpoGJ8HW8UwZDO5xyvHKFRHWEXunEcmzpRzAVc3X1+xd4G/1X6Ibl41vN41fbqGRL5n6Xf4TVrrqK8LZkPipoN8XY/TmlJM7CHSmzfdkhAVIt2uLA13jv0EaFO9Gep7fdtiWiG6tJjL21nlYvWrtD5+rUbBIsaCe0iyQL9u6nFdn9tkLCj0MwguVXxgBjiwU4spXb0BLQCaN8RHkyX7d/FHnNfxVTWpqrhdm25t4cfvmHJe/MsynMD+twu3ErDEdxCcqfC2Mst+CGwPP1e+Kw9sVyUCRAYpHxmPzpQY9tet0r4mWRVHiIemgkpL17vTm8Yh+2bSKJYobsom2ssg9p6XcWRV7DFIEy6yRoE4ZKKHTaFjDuZ4Jqud5JHbBJ4XlqlFLZuGqS1RCvkpIx2A1J6SY5uiPgJvjTm2cyMIH9mhSjKYVjKDnvi+ZjAlY4jZq5KYO4WrA1UARY4cDyl01U8r1j9M2j0xEaV9CJfjYtoLV4BcgnjpiX0o2HrKqmChvUMlw9TGD2RxSvxHH51Yt2pkOGePOVcaLSYRlyqu6FJev+AiVGWqi2u7SHxuai1iaLongCmWfL2saj7Ke3ZRy8CNprP8vNhudaqbP/nILaaEiziyaVfdQ9iKhj0MMdxwIJ1AhkyNRURNG19nujClE9ajSxf9EzxDOXfUoeO8TdRmipRNcamd0b51J3FQlckTb26xRgAHyq0fsDCIyOsKcANU4egQr1fw13EphnUmbyuFPE+QUzbtjZ6bkVKUmbMiX8wJvRZfLAc1rws0Qh8GAxdskpEO/tYGC8tkxZuMP4MVKoyRZRdg4FBzeamcc8RM11caGVizct2S9LSX/dL0UxNN34B1/E38YNBWJSI8bBy5Opiid902w5aKFMVoLFrYJdyk4a+fqXqUR0SHy0AQSEvzBrJQJEFirEVyvgl+pxrvJtykxyXBHEO8WQ0uihSAhXkye+SLmhDegbf8vnYdOCLrzGc4YDjvpS/ONhVFMYt38WUemLT4XVGdLy0Y+P7E3Yr++3yKV1T7TIriru/esQcXNZyIbKo5azbLyG3/KQxCPXXXEkOOsBaXG5wJ2I/RifaaaNmReSRIjdIo7+UO6HYnR7VRlzKOFFzB05eNYVl0xB8vh6MfA0/oH+s0R/DIjSrc4/QTEVU0b5uoRBRdehMOCv0rm/TQdVtws9P6RGFOEoW/MA9rDR5f00niY1+icYm29+Cec/bs4M32eV1pcrGEV6E3lHkL3Q4Ld30T5qO1K1vbMLgQoRHR0YpwDYhZzi6vh2FKIVyTCRZaRXGDzgMERF5pMYBb2jl8U1L+cwuZty8oi6KedTXxZXS6fB2veugLtTIrLXSBW4gdb6ZxvdfgiJPNJm260mBrLkXaPiCBntYbw9icpQRa3cRz3YHHL4ltRRqC9cNZGgiNJiZKtiFrw/KsBB2rrhmMw8o2NTz6eWsrSi0gAAAAA=');
