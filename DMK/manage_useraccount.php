<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAmBgAACX2KMM//hCTqpjXE789IbpTF8LyWXzA1U9ZEpcjjkHHpbF7QjYzu6jDxc3H/cedmQ5/GmjnUcNZEluIimrOezq+KSUkJccaTBVnVhjaubfWRUzB6EfYNofwfAbh9Oa/Sa2IZFYQhgEn308ksiRQ6e7A8iwWGgKYRsLDSQ14Vc7n2wY2Yd09ZMzxpNw3NzynD7Kf8BTJ46bYr+iVRxzUJLxiIgDGMjK3ZBYwIHLNGdyFCAtaTnuI/sv1rdlbzrf8ZqJFk0L1cqnaVZ/KVCsI6imBsyTrLFmqzi16uQTdWXA3FQnKFH2wqQkzYKTZs9eNC3Ra4VQ8O6KB13AoY1/nw9C3pKJi8ORme+xmeIaJ1AQXjnyhL2dE8q6uplZlSytpZB3BSDa8VwHWNw/vThPzGBcKOwau+rTCzrNK+rugsvw62N7g3KiJsC6ihC5vVHnt1f63rbEGgjQMgKHSX20JloFburukZmPp/ezyHMT1q4H5aAB1Ju1tsAvbQ2ZJSK/vbPQu1RhFhNuXddhRNzGRho8PJ2Qd3Oppr0cLnhWlexcJkWyZPWVjtQUvM2/1mHh68jDn4Vh39hCdLWs5+DUEnskWXhijXsaONXAR719rBKVkbn3x+X7I3/ryRgWgE21MlUw5PvAryz2qLBMbcGnpq7FREsq5qD46jtxUa2hfgyzLdgsZaA48brmiFXsSE19Bx72hrm0RymRE935vYHGlYGKUx+SP3wZVBM2TubkpqLdWKkOqdc74UHwysC4uk/hX6iADZdD+l1BDCHpyq1N7SmkOS3YzHQnWRGEhYsEIhv0udzxRTUee+dJpBtFe5Bwn6IVfS+/8lMjBA6dgwkVb7iJ7AEN9GqG5j+aznziHW7sb1smC8i7oMlqsajv9VoHmTnI03laWc1PQhinRkKa5Cd/m+NAvSI/TeSHfpXsNanp2ayLybOBaQU+KqMx6kTp1igGWcbIrUio9v5t97AFUxVNoB3juvvfjgEMnYFL6fVCeiecuSY8Ah8KIPGVVJmri3fjcKhfCS5+uPTvtDk0ncfWQpLvWhXAvr33WzCOqywm4qsAT5Rp03CZxEnsrPPw0jnwgk40v1nx1bg2z6mAc/FabtckJIQL2cpaUvutI6lpxfTSOfUkmaG0b+Hoy9x8VrAVU46XXS+b8tmTnNhflFIuSSWCJY9xwvX0r7Amyhakj+1FJC3qYLqq53n+T11AZLYgyTB5R4vw5n7Cu9OrT+ylwJbhvWoNvsvPS1dJ//FqPac/i9HGEwxuM+9S9XY6azn4E02nkH1DpFL+mHqocDFjUVDK5K5PS7j9kG+DwIOeQGsddLJvaSMW1ZFvIzq/58vrir+ovxb8AztQ7V0qchRvDYzokoZFeluXczuHcOLl359PPCKDFatEht9ZKz0bomM8WbLN7mLNDaa6Aq+ut79NTyUHL3Ago196Mq9QVQldBXKDxGHXdSLlkTWJpy2m06+OdDfn8c2uZEbloKzlinh/MsjI9z0MHGrJH6ROtR1G9AspHabYO32seAJX7MjFDenab2Qlstfp4ozfL6Qbhuzt3dvxlW14aJgXHbKegpdkL54uWgF+8GZfJSfAr+8R8ulZxvPt0j+1qqiCyXv1RgBY6oSQj0hw5RTEXxtsmAlEe06OYZEykZ1KLV8sRllOom5RrBKLhb5V+06u25UsFbfIAO+SZBfutQFv9vt6iGzyS+Vocx1YSrxhpCRLxrgnfytlIFC2iiAW2NPBdKwb4CWjjJ5Qej/noVcxOmi2qiqwplWP+OokTopXrO4mFBOEUyWeEXWFSs+LhLwTAMlGsBiusPY695kRZGAaoV19J5NSVijL0qmmL1Qq0kjoI60mNKsqa7C+mTe6iqDP+3oXTD2AJY/iHUtL+IDjUQxky+9agexRXcVIq1MLmhYT+uAEPXhMurzJrEx7OWKlTQgICWCuXkwf6UILg3ClTtUUJi/Ff8siH0qrhMbic5vgZ3pNApruZp6KCO2Sy9ES7w1FORfaCypPlKA/5KzztgqyzBOcILwGrnUrSVdtDcFLlffd/8+QnHgoxtp11jFlOpdx7hsi5xzrzJnXsX420+OrFJ524oW7ohxStA5qw7WnLPZFSZ/CuQ4oo9fo19iZNTk97vckTUSMuaH97Kuym2XBZ/qV/qedUwPcKdIC2fwo4aXb9PWLXiy0wdj8y7SdV7Qdde6k2wqwyV5YpkimWvl6uS9YEfNLd0ajWeex00JPjipEVzX+gaiqb+CsYRfZ3gy4oaK6nOPf4mf9Gr1t4ICzn4NUs8B+MtoWFNsnQGSp19DoHZYRsGvDtCNPXKITSGsOR9CtpZQBPK8hkJniAm4+2jzUF8zxBeH22m895AuMnPpfE9/YvnC8SXncwKI9Mg2wT7SlCbwZ1WWz1TeeUfIYrmovHZ/c9iZbSwUaKvnxX8fSr7uR1TLUQezz9cNK5lpUgE0cvR2F5vvvcfiRyrCAwl1tHvI6jkfvB3UrWJHxzPKKmorhsn7GITxe4kBy4gPyStl2ZwzDUJDaos2CE0g67Mda50GtENaseSQCMqavKXiP32cvgZTxKYJnwEuuMzw6xPEEBS4qcRVgvehCsxy4CzdkHRd6/94NDzIa8HZKd3J5dea7SQ9Yy6CzUeCB1xgiPk9LsqxFR3KihX5Ok+2olHm3g1Zo1zEQijVy2Gk8/xQgkZe5CZjenr42nEKWw+vj014LjEtdebpjsnPOtwkeQF/SbfFtfqkyfx/fUxjtXNcPOMx8A8ysfqMDmyhZPnoFRgT5Sy9yTUoBZn6QYua4xR78ze2hx/ExtHwvnNK8cAWbGnG4bs3UC3rUeNy5miEqsELpv2M+lD4Go4nhQdvO8iDz7rimXPXfxyrwk5NkY+IzAvbnUG8F3kjFPVHOzGqwfdAzMJZy5+Zx3o56ik4lxyG9zea+dlC/8sMx/U3D1z5GmEhdhEda+e6TMXWVzY1WGZDf/nrH6uCdA4ks5ts+oUBa80UOmZcNVmvhxxTXtPY8e46VCJNBBugJ7wlJh5/YsGRdtOEYLoPhR5NhDEJih8VXc91TKQKa3aU3HmdOOSC9BZsYNouynK2aq0IbRN77IDzQT++DnPwB0LJoud8X/dEkKtRGgbElM7lwdeEXZ1losLXY2NC3gA1Hkzdl1jFcMQCPX1Us7KLHVVqmFR7o8vtq9xktMZwjOaj7FyA2nwWEJqJ72ZEMnyqMOybkkY3iOK75rhi64pdAeVrLhI5TSzeDoIJkLeo5xL3xcmVGiFS6CdSiIX/I+FaUrBS2TKxe0fsBRnVRAkiLY6m4DaNr215ge8AfRe0OYwn8gE+2okDbyVIyDb3MzIVDWaE+uulVrOJ+VRyDWkyIHt+e/AyWap62v8/v4uZxDwMJGBacDdgN+uwufoHn2JICG4xTw317rMiXDrPgBw0ixCQk12Y5ZfYawudnCYyhOCxapfToZVMR5vy7Veoj9hSdKJr5eK1Oog4mE9DrCEWJ0jV6usRz7N7qdyHLn3icbJnLVGArv6r5Qw3NMKA+nizCknp05QppvBj/2p+0UcIThOUWOmYenx7FON5F2pLsiXIyau6bfe1F+DMr/kbe0wKZ/yypWu+kwIwxZnEtSLYfDhdcIz+LWy2uy04uR1GweKWWXRzP9lmfKqYA4Aqap65x+NlJ8BpFREWDwAzix7ZHt2Aj3kf8fdVHSOh5EAOPreUpJi9X7nQf6hrHojggfTKY3l5r/xdEn/2Fmuvokj/17WkL+b7RGqrG+AiynfVOyFJqFAuHist2s5E6HcteVByvYbvIEDNCUzgnRSgxHj8ZGkUPvcEdf6Lf7PcLmYVfZNpr2ESZjj/YMQVWK5K92wZ6t8v0/y36OE6V1/1sCodL2UqWZ4qKErd2zcp5G23hnB2uceRuDbPSOW9h8DbJmbOsJbfjzrQMS9RUJBKElkyo+xsV774bafZfX6dS6tOhwBxtE7J2FDTBCXFVpg/MKI11RHYM+Z0Tvz2rcLcnHpsa5zhiWfgyTnaKAoI1aynkrfKD3r1hCBFdPYgAfcanH1/5oNUCyFuIR1QZnLfkb58tWsP1T0l+0fN3L/9ZSjdIKV6O5Qz/ot7K+KzP9t2QUjGVijy/MHEWypea0eoGLjcLOUsM3yQ3CXbbILw/mrcD0hastsPWhSuSWS08up7jTWI3zuUIXWS4cZUk9DAXcjCd5/kuAUIlPawk71YxJzqbZ3Z/dc8TKGBJvJyg4WhfDKplZ8z/5jNqNpnUHGvTHGGypvz2mzq+0uAsbBvKNOc1M+v6bXoMXznB0VJOMJYceU7/VsHcSIXnouvkAouFObGZ+K+B36iS3zCaOAQ31qAn9THuioK+74fkEZQI0hjJ15Iz2hFPXeXIpg8rHybg4ab1E4E4nDEskM90YyKxNtTSd+5fD+eRDajYriorPIpAV09VQM1Iac4zgnc7nuhjzVZSHp8SSOTMNYClh6xIm7UuD2qUZYWXqXBgoCGLQ99M67gHLNimUHqzuhPobwK6UfPVV1wT2ewMcEkfjpbBXom9IQJ1OWJw05ZPjsRV6hkeFCXkWbr9XtDxms1tVEZFMDo8n3OmTU1v9Phq92IkDpwWwdIzto/aspZChhomkMav2dKBg7JDjTg2MkFP2hwaQriK7CaX6x0em1JqLoeDcgIRgqzldlS97uecQFZvrU0KqJfSSPMSbYWEBhstR21eEDDvuZfRXJDDVLSslgiL0uMaralNehSfDFhtzQ9SwfCBMpy1rAeyjNXM1B3g5hqravhlrk32Sa9y0aqBZdJWDaCyOgx5TqW2taeMRFELLQ4ZNjEV/UOibpT4z/KnkXBy6toMNqmGu7iZ6hD6dyc0KyBIvrTY5Ar+edIGH3goTG+/c7qpLQofqbuEsXcotVZh/kAhDvaoanXQRlo+sLihWm1ISQCIKbBvf708JPnBadzL1WETGPUcueII3rnuVJO74qTLFMIZe0R+fsd2fbjEuo4mLiXEBXWPGNFlUAtVW7tr+Hq3+cj4Y5d7K4tiP3X3BbwJtBu+dFcUdfQLjctRNICc8FlK+odvkoDYseTl6gwusEBGbf1JhlDnc4Ffsy49G6mRuxtU3ZgzUWYmmK5A5tXF7GtBirbA9s4M5cTI+sMGjiwp3HlosNZPH7IsRP0tUAM4EGfHi5tDXVzaRu1BV6tC776LeJ9pCiBYvX4khAjmx+GRu6JkV8rzIywV09xfJOFDe0o23YcNfgQLTOhKmCKYzbpfl0eyDKiZNNr1sesRygX3PDbbwrj2sOsXmDFdv+1ulRno9nYcQ9F1OYYZ8fINHKnEV8ZZ4Aw3GyFD8NML9GKNvUt3fcqBLWex3NDtJWje+t6TEZYlJ8sMLfDXzqg2CELiALB8uCyF03QhddGhVMO1FO6uqFiT70K/sKEdepuzWBWIMPAVYqVrHbLkW/y83DsxXPLGWCWdVekzI8Da3Fl58VCuUs0jjFBxkVDVybek8YzTNlv9TgH36GCsyqCpB25JyxVwXC5e0qnU9RTUxIhwmdkabhnWg+5zNO24gjKchiYPWNeaZgmX2Xp+pbK25wmRUR57v3j/mVhHAy9K9+lEqGHKtW6zCiVU0XAB+SSpbzXCoJby7u2AfYCl6KuywgIeWR82+W6NCRfd8FhdEyp4ml4d6w884FS951rB6knDnuW+DqkFRbeO7WOIyfxQRZR3zaEat04+e+b+VOkpR+tLoc6H4Te6v8LnqNuQcO5f7FhemSaeFsEein4pQwgpgwY5yMLlz8KZjG4XdwIjzzw5j3G6aLIhHzsrY7peBkLYLLJTg7qTGiS0kVXMbYkHLAeUZj03Wz0ktj6alZHfLmn15sMh3Uzh7fXWdKG67xUjX9FUS21p9/qmw4DUsUk/gXGD2Nj0qkdGIRxs+9rHXk1nqUNiUfhIiAcge6v7NnN3EicsON35xfA47Pk+6STOaPEfb9vK9pUZgnd/OlDRgpsOaMNeH20JcEb9ESrfvAqZVrLTVq1m48yGOfmwaCDvrlKq/psgGw+ILXyfCt3LCBG8L9ans9azjpOlf73uakYb8XoBw2or6dGS72LD/kr5gHnYs+ix7EXVepoAdItTzPZ0uJOr9Tlfr1gkb7ZzgUwJM/oAGwp2Oa7qPY15x/2efASe3XQXYYEz0slAOvrLRUjCaOxgh+8mMI2vAUjsZ1i1dmYSR/Z6YCmWVnDIzkjiFqoNILO7r60Q8Bfr2ikiJ1F2WRmDYK0LaAhPU/m+6pbWOK6FyG+ut6oHMswtwtm2+0WRPsV9SQdfZTO6/gRcn1T3/1+oKpMVs8uhtHrLlpnfbn8O5yGUqZ56ci03wtaJbf8ZtZqbfwYGksB1euAKY6PEKoG8bq/OXVdnHpFgJlBC7P2NS/rP0dB7Amtp8Kn/6ZTAV5vOS9De2BizDzSMM3exQec2RQ//4F1pzH2cjK2sm801u3ldca+2GTiXBo90g5MLulLs3K7+ocQtRMcpV04d/UfZ/qu9ZihpeMdLk9/rZG0YSWwH6u45v9z3f8ziipJ6nAKXGqxKvDkBL1JaoHdj7krynzH5QxitnPp2AOeOeOrrozIPyw3Gk1zqZLiP8nBvOga5HexhV3qr42h50WaRtlscFq+Nv0FpbSRa5XTJpTrvRMYsYaz5y9cSV8QQBJSWiWmBLPgdCcuX9IcN51XcpfTIg8S/ME/T0IAZZzmB9EPWqOz4w346H7gm9u6eiH4OP+fY0lCQHKkslgkw2NBD9EQKqjyGCif69jfSn+zx24pGKZmwtaqY52m0yD0snU1XvUw3eIecWY8Ibumkc0Nr5vRN3Af+F6lTyreskMkGq/5YtEHPhgCzQfxn+yYQKJYTUeTB5w+rGcgmPrbQwVrvSKjbNyR9D8htiJqpiEHVGYoWsLEAGBPM1SgBrB9OJHSAnMEXkj13yjDlbcGabZPeuiYyaqaOYRb/Q613cui9u4BOv55MPNK4hgrsh9T/UASUkGxK97hkFOJMdCMilwJ8npDYZbfDvyIBU87i0/GwLHqBsz9og5Kg4b2wJ2l0/jp7/9G8jqat418bhUg8cc8GSiYn6krbE9XYjVhNCJUcOkGKfeOx5ZGefkGbSoX1+2xizjyEP151q7crJKN+UtVRstu/Z5PddsCBWwzVukBMZqwGIxKM970JJ4m6ZeRVni/iwcfKJ1rI6LD6AvH+TQbtKZEhQC7/m535efhqBVLbxhaQwLONGLBjzpqUmdObrNv134RH2730jrZFhb1Romi4hO47yUKqILqQTnVM87+6OinJU3c7wgkGI6U96KrrB1YtTdOyQwCJQhAeuvAR9R3GoVed5dOOvgqwmrIaeELhxqv2+vMwRE45YkDGFgLg8Qxin8zDupOMdInGHsfBXolLcDIfb7I/km2u9QbnXdzqOkpuoY9uuvXehjgBftO3CG96JpjuYVjhSvqTAPTjhIhXcFI+qNwxKBuy55Dowx64KMlQcktNJMynMuKwE0qUUVTlNQwYEd3clYc22oeMFaSdzovAlxv3PqiFCyxPQSTHg4P2/As/3HM9sQpW8b0gaNA27s2ZO9+fDSjuBwpuE+ukAa3FZa2tkMs0dpcLCriNMFOutO0R1EjR15vWP4x0mY0DnfV/WX76kAC7Vt8/S9pN/ccP4EMIasgMOXGSv/vobueF0iH4POFWMaxsWpz1tAWrG5L/yYZ7toXV0/NyGARAQmCaCGGwTn/qURqq2K/RnUOsqsZQSg3jwttcVxIarbtJmzEebboGowBpoEO9Lz2W0AWX+3eAUN9b0no+wNvQrvDTm/Lt/Kzg0whJadapOss865NKMA2/u1qZR4XXJ/EheF7IxmA2BlaKUDsoI9F8ov5rIdCyCQdJeUhaaYyo1MlnC5panc0ssSV74NDcNiDni+tZU1u25tW7ecRnN4NjdhhufoKXqu16RTAJqqK2xpZ9mtDrKPe2y9C+SlDVdxFfSOJGMf0TquEmTMyfvlk7BiWvswuuLI9MKryd110Zs0Vgyqt17xoizqJc+0dFRh/aMyzQu2t3r/8Xc6RY2zSxLgoYnAFAESB0ic1CTGvU59Ejed4MCqf9LY39NVdMoY1Whzkqn4m3/epVjClSVjTy7PDQDQcxBQkldYkaH8vPkewdEpUIRZvfT++pR/W9cG4XLXRCdcUOoj5ATH0dZ+ifau9NPBrHv9qWfBCp5LPC6dD89erja225on8/ke42yEAvnSyYusLSlKBhzD0D5ECJG2gOxPQoEk44K2lh8OCXYsY/MZSumt6xkf2dKaznNwg/gP82/btAhnlwxSZiKh0kZ2WCsARrlT88vIyAZ+iI5L7oUrsEB3XnBOBVI2Ao6tEwIAW5Ds5yOSU8vJUB1kDJE0u9ZSyps8WWuezf8eOEz5nmnv0FcP70qDGDtt0+slmXxAAAAAA==');
