<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAAkB4AAOIdf08B3hJEBengr3RkKM2JpEtgw9IEwlDcIiIwyksdp/EnI06x2666FtbMrxkeAibf3XITiPma1Fw9wmbLGCeXlKsmhmX4gYL4fI/IZ4c9qgeDnhpP14HHvnTvZUuHV8VDeG9OGeWoGaqQmVQpreiP8Ir3oUezWdY0suLLn/WuJo0YDnvoLFiNiydsvHzSbUcMfA7ILvlFmwDUP+tYp5lUrX0t8UDDvGmprFqABSCNuMvcwQJ2bRIXQ7y5NeviHD6tRUge3pI0bojk2GKomdI0w4cBBZK0yxe+wYzztGQvUDINwtbACusBa5TCfj9VEtfyVHrOEwePKz5y0Xs5nwSYOJVfBdi2LXobqVEt2ZZz+KPH0U9wEIHqI4CWw5KAezcAZ2Y4u8yPXsMjmSGUEUVoC4mhzmv/dd0SYoQupznIeCSecXdxoasZ2GP6OoOU50iXvdXADh6to0EZXThtgNkZ155x/0f5NxiT+lJYSzoJj9J4G3q82saNgHW085n+Eg9Ado8ThGhTI8V3aCAPTsRTJNX9u42xEj9r2pxuLBWyPFKshYboDoni7vyYHvON3WM+DDO3asa422sPw/NYiKxpCUoK0Q6FBy4BJTpaumswZA+jh9RX5mNymsX9vBfbq1jNokKY7Q/8RZ3UTFn6/UzM2+CXBDA5DsIH6pfv0RgP0meT9JZLgyQawvl/3G6y/zLZkRg+YOV65+cF59M3ZC7TB5KIaxRhRpDdW8fk7w5C8UQuPywzPhL7XcMWLQPp207ircvy+SdH5s4r5thDXF/yljgn1HzM2os81jaTAMPgAkqpVQCJhOIuv9gErpwIi1XkKGRn7WPHdSeL/JRzTA31ApRo9yoxV3Gr+v9YCmymVWCc45YQGCHwTXiLOaHdQJz0rCUTwp6+amtnpxcUli/Neli8VBIWfX9bEF5QGE+1Xlcd0jRIb8LLcTQ2rUWc1FvoJG0VG1gF1e/4Q61tyKreKNAN3PIPq5yN9jCKqnyCgqWE14mI3+hxg928kxseaqF0wHAxFS0zydFqIfFO4qmvsyOz46KQ23acH2HsYoGiDskdVOtnVYc6hpfu4FkJKmoqH44Ckj5gPCtIrFFuklg96kfsslYrr9GNYuNvj1kBVst135mvk7GYxryk9wUrul0Grvur25CIkffdEAcerVWV39Gs6tCx1LXVTQaPLY1Hk///tbnhD20a88WdiZacoy7cb4iUU9QglIN46Ie0FB/50exqyGZJtaji+AnbbMWmZ/qc7LeYzKfLNQ/hOH6ctETF7LaAMdbNs7mROJFENucMdLENXnCeYIZEiLIwhX8tbiGMfhga6NrsMYuG8zjdH8R4fenAdJrHyKvXo/Tn8L5YkMWZtFayh8XANUyyMRQc2HpvoCtm8s0HyoVmTsZciUScHUjAy/EgHy3Ho9OYdYIXBGunZzsbz91Rb1cz8FkUt7ZcdnTp3Er4d+EISszcAlVwIqTu3hITeRe0CfpXmgIGcGnvz+1AYoLOwhSBAFW6NhRIEQk/URmP3mWRttuUZ0XySQ6nZ6DVJ7qOSj4ZUp4ref8aqXMnbSJhK7iMtDrWYgRwztnY7Wo3Is5tmsj6iAD6clxswUp1wwL84WBlQxIlshWFV+D5iHlkWGmw72oNcatYfeUwweGxe+sFL63vEi3o6xwwbL0IxGZfHln8oHJph8LIF7qNiewda/jz7yw/V+Aj54+rKZCp2VjXtRj7+lBhqe/2HC1VVs7qLv2KpfbMGFguOlRMSxwKUIJUOpSA9Aa2MMgJVByV5oPuWN9lyhdihgW+4Ld6/G4LXIxZYxWQUyVBpdlAYiDpFGkONsGhrYyXQz3y+VmRm6j/p7T9a8O5ZLUHyInhcZUqwU1bReHTmKYTXSq4yMdL5986crG+LOeJof+O8RPfoAAgAwqBr/QFg4NQlnucfvBzA0rEeogJwmMogrcfDyaYlg+OoFukVqWEZaNo29JocBCM5DUUbf//OWkgcFdnaycd4KDapfH/Yjb9y68b5APwe5pd0uejYBS0ld3ZxUQTGJsOgOTaT5Dg6x+ep+H0TI6t9TIfWVZ4EXv4lMsuXkX/z0TZ2CHG+g7SzwK5rr+Z5juKXz36wIsi4p9DLSEsX412px+AX3zCYwBITbU4PK1SgMBTm5yO8UkmnnmkS7bMI7+LBhHthNMv/7LSwS209e+IDQyZTdyiTNDxGOnvz8JzkuX+vxO31v2mQNLZQouzuw0gyr77E1oDEVX3Mqv6RPnsolhB27tGUaKUUgC/CgMU0UuXMbxmD74sKfxMeLthwLYGBzB6F/YuiMjt3R8CGz1telVW/ow9NMfqNedmdavRR/xc6BcyGm1ijlUA214OZkYjWch2VFNx2PP1Cg7HoX2afGQVqf1GbNhyNrhocZDwxjJbhVJ0zYa2Vs2MwEocUugW8YWnId0xWxcSjvBynPjGtj6AqyoqKOWmstV2IogZPX/dOcRe+X0WtVrmZwye7pbOQ3QkkuuVSGEBlfntF5R7kNeTRFsuApatD1ibtVzj9X3SzSo0HesVMCB07KySCK9WQH4EGScsW0e9Qw4kF7T0h2P2E/m9OZUOo0e8pG9D9v/2Ja80onIGkjpQS8Krr1EywcZTvyqHelLqLypW98qZyAB7+N+2P29gpmKhFr+rG66m9BYDvsDnCp2ypThLtx2SPtX4rV5eYumdRjC5tIgqJZmLTImKk86jvJnCG8ni2dINhVzWE4FxZMx8iXSOsYteTngDGgdVOZeUiS4hv13rOYdzy6Wx223PFdFeKyBFJDVg7BHvEoGTx+7yfsoDV/28HbGI9L2/+Yy+O50sInZG6kwOUSkKNa5EqKEiycejtrcW/zyADkq5rQ8HsdA50sCGrgidNWeRpamY7XqpxGqJau7nOG25J0BgmGfAIF12hEQ04NV6FOnE0GM/LOVHK74fotjQnpD00xteOBcWpH+zryiPJduNIcmwSXVOgWl/WqUhNN63jtnphe6RFw0/rzLyDklZzpkDStyCCCAXx9MESWpgPSyyo8uohfbsON4qIizrpHeEbz0D/uyJeRTBKxUdWanGnOODdd7tx+w6l6mHRJBHsOq2geY4ZudvNAGYUzhXutTMB6bw7UMHKGQtgeH9Pkz9gAnYOu6MpJoYJw+6Cd/+n+4ixMf2R4sPdRl2SqZXjVCYdQ62YUt1gkFp2UbUjKal/7oyN9/WFmGs60v6naPrV22yroRM1Z1VNMVDijIU+E4DFpsF5D7UOhRS3nt0ytrh3ugNC2ilaveTVXZk7oMZhN4gBtpt/pgXhj1WasVCZAHl/2NMKaoSZK6t1NRtRXmpbIUlLhXL4/3aK5lwD1mSa2+mt2cxAAtLSP0Cw1j2+9R15pTXt5hbB3SDzQCqT3CnRoaZ4UyiTkyOK8sHbDN0epkwy4tm2JYmu/D+Tk7CM0mDqrCw5UIwiynxEhVxHMSSDkHxvwdwjswmSvMuG+ystU8DMKyUh7S91j37Vl1kS7+ObEAbz/A53R+eimUeBpmapdX41ceaBb3gz3vMO5BbZImkk7nozWtjQOK9PiOmBDmMEYIJpT8vLjO2jGccwGbMYkPAGvVE9RNDKJ5pbkxwSO6+zTpc7w0s5xGunx2mKEg8nisjMzv6RxhvxCdfGiH1GW/fAHrEtKPLYmwuqoKRNPbl1u5YAGgx4YZyC0AJqeR7ZmXWQbGp2wnFxjFjFZ1YjYvOGi90QEVzNrwCS6QBkFl5Jurw2CrG1FNligPCCCLLVG1ObYNqW8DkQ+FUP38+0V7Lr+XeUhwVnAM04kzC2B62M85lToUEyshyjGSJAETgRHuQqBui2NYiR4D+a7eS8iiD2NZ8k7+oAg699OWlpFLByBh5oAdHAIn0kYdlgkHlLGahl9GnOF2NLGuzl/yg92Zl0aajDsKycRDIowZdV5iBMFhk7GBG9/Casm1indv9V3lqFbcfJBw2Ab0JvZmY1j9wPJOGwhXoS7/xzHsC+kiKFg5w+1OYNFlJ4RdB2DIPy/mPAvumZaRVlqD/rbf7EHW2NZU/ftNFCHclReVabmxrfprFbkSDoC4r0uxgvVc96od2KBwAWLdguHYjukygVTwq88lA4dNwGYQiwSRzqMbYe4RjuCxn8qXjjuqW9bs+GJaS8S7/6sUYE+JDpllTjXGbwxSDVX/zdgv9G4TC/JSmDhSqk0mwN5WvscqZqnR9p1S5LTdTn5pKGf7k+LM/M1orpx5315kC2FT6h+yOnAxC+WFmIsLVBSfv10Y0bs+cB+EgoIh1u9ZV3ub40GgzOYHOwJzt39VkZU/Vw+G++BolxXU3wBVFWg5kep5x2rfECYeoTM62NQ/K/1Fux81mAsYKqcYx2BPL2cJO+DLpjNmHWAWW0KcsQ7vkd7YWPaP0c+YCjJyqrGjbapxscN3B9ljJSQNMUhkt+xCl7R70gIaZ/7vkMV+brNAvDJOsHzwnzt1XL7ZyBJyMOaf8sebaXBMgEqCqscRVRdnIUnoQZgmYSuRm47xKif7o0KI+Ow489ojuUDeeAiZFcW0bBTaTUBoeHR+L1YzfDrIhljWeBcgKB2sacKAUxob6d/2HagUPoR1+aWb3dL/DyjZ6wh8nMMLSI3747M9CRqwQWM8co08qLgINBeXfLzhuQXPc+FYJElrj42bp94fqJs42OmCOqi6ig5L9nXDYU1GBQsMtd5DQgbWqZ1KZtmhiAB2trHMWkrifd9doU02zpLhjyWgeZGNl35LplrPGDj2UK/CgYCPl29KZF8nnw7iYPNSIUh30PTFr0CdvrCZcaYc7xZu/5+LFbTlZu9Rk4+3t5mk6dXWcYBrWO6fY8I8NESZcCPJy/9B3gcqSuPj5OWOoRaX3rr7U35rc179MeaZ+TrLAATbPJKZcLw8F7HTotPTQmSgVIeUsjOHJJKKC5rhKKPBY4ltIfRL1NuS8V6HhJ6yXLBZVKoNcbj/4AaqsHkhYVGR6IsxoocG1x1DlzVGrZ593MWtUE3+QhWx484uHh6HmaQCmqQ5nseXXvYAYNuxckqVAsW6iGwINqR9yGHD6Cbg0SnjIz6W5+zU+ZkO2PCA6zue/YUh+XJNdt7NOqEQuEgvMEWbvOJI9WQc/Q2ulxyg0oO4ZTZYFJWVDY6BjapIaXrvbsQgpq37x3psBA6bnZD9I0qUz60mLhT2acxfRGiC5Udr7ObbVvDo3rQiVHfv3RwajTpv0vwZyKiNMOg0fVmjfkVi11ymq9T90LslngQblZ46pepmk7OfEP8ZuQ26rMrUdKquNStjrcNILzEIBm/weXwB0zV02GrFhvDk/QX9DrLRqcabPOaEhAq/p/9Edbf0VJJFWrYEfICsg/Dj7giSLLHo91EaytDi0zumpbFwYPlib8RrTkEgQ2m9nZ5txAp7S9zGe9NL7Qwg3F5GmVBe9/PlU3VTyuYRL6Ait0L0J5YbtjKEbsPEOiKoLnuQ7ezRVRMBtzIz6fN+x4+uplL/yWfMyVzCz2m3plzlVJAUxuWWNEePzIzpyoYJ63gXtJkxye5M1dnFZFyuurTVJpv2E436qNtT4dJC8VQYlQtcQkd1FDL0HZin+ImzbqUCkJaBrie8YZK5vPIrXLODjI3zludYGPVTCA8i7TgVuM+iPtVA+k/iHrimkhcppjJkJhmb0y35i6E0C77VZFEJdD0jEUUi7eRDpODWIezw5CYE3Jf7O1mQtm+HC0/exF81A3GfDmTE5AnG5JCq+DZfnwfm07pH3t65TZ+CiT6uxo/QwECjcbcMjCXDdZjXCPNSYb1e2V3nQeg/+QcibBB8x3zBDQEXeJO4mlNw/RwT2chtAOB1JGZ8TNF5tz2QLNwQTmJdfwt/Ama7N6eggd3VPIcOo21894Otk4L6cIHxx/YdbtBTGwulGdni2DprskW+n3Xx1jX1cnFVVri+0k15ELMocxb0Eh389kmYrWr/oTfYl+rUZiV8N9r9oxTHwZA86GwNMaUP1IA3+EsU21SS9s9T/Ol5N16UXNqd74DNndbS7bMLy3GqHxjT2Zhv9Rjpg+A4KD8AViHTxFXA6AJzcBCb4P7uTPyXGUW9VSzvXbxmxX1DHLuJOBQSMk3I5AAruZjuBf0eLRCEABGP5osOcVBpbONUKtvizwvaKBEfj+AJ1/rxdmLRgS682bqrM7+5S1q2YGg3+1JONlKRQGM0EuAmCA7PMFRr1Et4NmoSmCv8e9gCezlhBxoa1yeU8xDk+hX27qWnsFSC4GA6TfosNR6qfV85rAjwKPqJO8CVIOazK7a+6DYtawOuyS2ckMS8KAOJHh2udJLxQpMIYm9lAF48Fu4r2xWhFp7UCpVvPC0Pxwdv04ZO3SUprUJ7Wq9p7YxEeMSVh2hFIIYGC230xYNsh7go2NcHmjMEE/ziaQNRF5uaVVIfBzogBuUuUlj8DId/zcosew8dn433F/uddDidWcgCWznyYfvf6/zpsNG0QPd32uKuj/adD6B4Z5ZCQwwTUG1wHJwbmDPHiyizM5p+065tB5LBSkRKz9W3yMlLncku4VHz1cMs2BdCOpEjZKcF3Cf8DNXGcnwMAqOQEm06tssBjzkCZKQYiU5wDKSdIo+uYCo1lcuFwkIvGXiFMwNSPMSR/RFk3CTnzHG8Bd2MK3RlUlrhBK/4xuEcuXUl/0GUHm8V9HimxSJXBUFiCCqUKNogto7IxJ60FtQRuItRL3uJZo6pkU1t7TO/Or0wjFaQdOhaUbl9loAhfgUvPrOM3gOtTHCyY2n/rMcqeT1TWazroYVSMAS+01sHKndBXk0U7Bfjsa+hkLg9oGeo+MsIxnu3EmtAnmX/vrNQOYpUNFQWB2/Qtl9XMAQPS3MvugLGXuJFdvQHlGL1tcvH3U5YIzixBQxZk5lRHEHSPS8tbz4ZdticuM+L/427shKo0wYN3d8BHcw5+qqv8wP8JX6onT3GDtYZAQvAL5pkiRkpMe2EaQ8FvkqZYYSbjKQGaylchWDUK7ocIxCAAXNlpCNyn+VKF97UiN7H4kJ39joAnSYKESu9ZOtsSK338H8xZ4lO4m5rLx7/uHKpXxADHOiMYcdYhXfryWH3ut06cbSEqEgr53vQ0OX1umN6wuj2I0lIfRJynuGhvy83vnNRShv0JWUE09j2A7EcotYpZavk0vmEtjxWilZDQtRgvOjZ773qrxrPGe6AeKGFPNnNWr7IpJiUC4fFSiDALNJQD5xOjsx1n97g7zqUBJvQwaDsUJXs9+vhpKJm6iLiYhyfdq/ChgwKypY4U3m+ZPd7/00CV7SqGeFLqAUlF0A4gX/HLbfy+iVNzXYzLX3MefM6ZdiGzAh1uh4ZGBid+Ut8t6unD//5QMFW49PP1D5oXQA9LFWtPf03FE4N4y0ojewuI8nvc86TuBRMLwGqpogUl/8rPeqyiDE/8Jzv4vcaKiqDFwPeaWPYFWFFknWDkEpbeDpqz8ax+TijM/LVDRoSJzlHlqmr5mahV0pmaDLJFm8fuIoN4xBe3O+imddg0UUr3eFqUXb21KZJzKBVysVJPC44ZBhyQpC0KFfrcdO/UxRbfGjlXJevB2s1H5EnJhQNBhd8WRn6zF+wUWbYdtqi/1vyifkEW6y3G+nMCYe36t2yW81+vs1Vo1CvwMXOdKjz17cK4uXgW+wkBAiKiB4frRiSGgFKBbENriCOFDsw742uu3SvKY0cMW8vZ9m0vcmmkULiUcW7Ds+HcOuEpRu8JFAaZU6MaInTNqrRTQmSC2/9Voqn+SWsmw0yY5lPBNHiDnGpz2bA0n+SDi4Du+OG/1LsGTJ4qLkFs7r4d47FCL4T4StIV61KMRPPpJrD14IiFsEJku/RZMaNEHnBGjRzYTblAsDpSp1o5b8mLjp8ETPK7+NRFYlLD/eIn+RieuFGyN3orxMspoc/ud8dsfUU2JL2FYbLRVnrx1QmF2IGxDWawOZp8MdcOaog3AeeoltRoJa01hoc4ECzpRkJ0Fi7lMEd2WHy4k9rIu0sLlsbNnt739HDp0prmNbBiQ5R0ERnZLjIE3T0bgvpLFcrFi3n917efj8OyMuVTsCGRLioJfFyogOvQRUqIH35JdJMS2uKyEsw2cNEZs6Yla+KyjV2ZVamFR/7aWig6z8rPjq3TMtqWM90+jBZxt2/nbBo2jsN51TmePB3uGMwg7iBVTXPG1fwW/kldkLc+MCdgEfGYsEGcXpbMoNxA6mFd4RYVW7cgx5zfIh+5ACPbiZaw1PZnxQrCYfESJp3XhFnjXZFdlm8aeKmgG58s+s/VFafWF1g75k2LGYlhSEXfYUnJsGhJCSw+eukFPrwt7/jjK1ItE4kgUuRRWioW8fCYfMb2U40w4bH/+WmPKfzppwUkMgXyYhWV+Lh4jSI8EHAgDnOKoYqkdwsuFx9ISmnpFvM2m+n+f8s0VLN/eCM+uorcyQebOHCaoWLTkBPMbdV+dhl/XiektUFlE/jJWyfe86BEOHZBlwisBUxTlK28btWSOaKJ/IIvo9WMn2+355OuKlUUJwYJCGrPg8hT3BH3AN8lm7yeoX1ucWIk+2iZoAYjyQKIk3eSj0bZZsvrOvymcD9tEqe9sW5TDa0CXHqv1cNTAj+LbzayRbKR6U4dvgDVDKMJL33fwEqdCwFOXOqfBc4tMjP1VDGLQPOzYZUYaE57YAjLYRQwPmLI2reuyBJhB+X5NV2RGQu4ZVTKlURDfVzwNIyXcTvXYdbudTGYB8z4XjCV9FS6sX/ucJPotBBkXwXKatSQJvZcej/HwXqWEwtCz0mD3uNvsqxwL3wNwYgLctX1xZxoCOZuiFF9Ys77tmuNSePSx9HkjZ5HgfrQQkxhSb9cm2yfruLMmovpeRYsVLQ7AWESYB1Wm/eBbSHcUmcw4ua4+UisWc2RQzI+fVQWjAKRWGupGGtI3UXVAwrLXY3UPB9gByteRgB8kYlzGGYPtTVSVoJ3sZDjgZhCLGJqLpQ90wp9G/+fxkSGWmBORITu2trnKAVqIowz/LcuGNHObaZBv7JpIaWobfMiTxNkS09CyY0YAfX2TivW7AKfaLyPBg24o411AchN3nDxKKhMej0xUtPVOOonGw4rw4QWIYf2/rUfW8voSjMKXFqOdWzikRsjVsJ9JzqsB7qfZirzl0JRbyQOa9nCe1Mponp3QyW7yRJd4l/ogtbwy6+BveiIlQjwvgaGh+c0fJwpquLEjYd+PDMzHaRVZjruZXESzvduV1Vc+yGuPOJryXhNlZ8Z9SVFcqpTtuKqr0Mt5/Se+1d0uyidcwNZmB+Fv7iEejYiThMZ94M/JjETDYOBPk4dbYSTVHP1fw4fIy4klDpUZDGNFRdvlpKRCRIW7UP1l+wZf6FWzdfHVKcQIKw4JLLPrz1ysDGAhMhoFFj4WpUQszNwW3FRm3kl5G9k3FNm7nsyykzzfCLoNDukZfcX4lOhwep8aJ2O3GpW8BcU7lXdP7ABs0owowVCoFb5G+Aq7Q5E5qKTO3v7bm/ZFos+x38XfrYVdrE24TnDpkdKPz3spOGLTOlj4gbFG5jXGXfGNlQdjobVdtvSmxLf8DPxcfmDookAEhixY8idZvShr98uq2yv7JcJTL1pQUkX16/5NdmSAD7b0VxSAlhP82Wz0Oz5VymWtYHZaCkUMNC/IfE1GD125341MxCVCdVv5T70v6UQp7iEA8kUOo7/R01PkB/8fhSepJ4FxmSpfHLk4CSsgGy0/nCuZQ8dk//8VuDdN0xdkqTRxgxJxO7jiJYINJFpGKu201wL1dx8wSJqsH3GxClXg5HiRjDMc+R4XZBP4z5wHUTXZ9otqj0L6wTZxzAHj/Orvf3zXi/sxgM92nDTgIxbOqJUSemA5VdG34AVsSRfnHXO/AiNXgMXSMv46FxxnaUa5YZ66csTBoKTy7MVCseI2ClJWwE2cwXVIBh48jBnkqoVMU3fYl7qtjeXnRCmCbhbWVzYHMP9qX5t70ELc2WM58W4pwLaNuv6IcAehD8K+BNHTwigzI4QRRkE+GFVL+5euyd+DIb7ucb3Xs94hYiDkZudbz6nqNFHk/nvcT1EGXyi6EWmC0rX3UXNlvzuUn70NdbBR5JlkmC8fXeqZGiF3i8xwCzy9VXZp+POD49PnW6IbrSQsj3TYON6BoIV632lkQseGofPtSBLtc2/IqJxsDUpKZWypRFbvoOSPZJLjp4Zd/1gOt3jszj6wlJz4pvcL4yuwrcr9kdpedJCdQ2KhyCPtqP5JHkXF4ptq0mYs7SGxzQ2FCvziBb244bckCFm8uUM/i+K0WMaOWti4zLmsVSRwhh9ArZ+9UJhXGH0HZYac9JfCBZnZvMzrV0JO0Xwd3bnRMIWBkfHd+EFx+oVRSWmlLrBkMRek7t94uUda6d3LypgOQGMF9nPwrBpvGs/g67cKV+hoi1npvDauwjMvj+HvB1KqgZNZqSDsBfqaAAAAAA=');
