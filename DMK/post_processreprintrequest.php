<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE912C7C4FD5DAAQAAAAhAAAABMgAAACABAAAAAAAAAD/zMmoJW1o3AnkJtmos879/Do4A0zorSD9uqVK+F90/KEAyv2GSvvOIPVNHTr3pIohaOfx03HRy2TxSGbH4JO2AlvvRfWMX/HTEXlpJ3NYdv9tW/UFsl9EVybB/Fxq/BgnHxSHdbilqPhouoZhRumYqN+tP/S0GSqyOAalQikuO1QmhthRo8grIxLuhn/ywRnUoJ1Zu1ljKYjsB0vsxdkTwhaghjo6tJ0jdmlH63XtpEp0byCJQSUtM47v23C23bPqMcWzfjH/aWJKAAAA0AMAAEzsyPTa9g0JG+5D6ep2pjGijCXpKVgvDCJAIoxY+mRgrCpNqi2zJJ5jpXFFFqIVmOi0tw4GgXtHXHm6ZYGoGq5LzZ29q1B0Dxe43ydUiOO4Dx+7NpXrlkGeuUXUPCDyxbMuqO/J9F9u+NfSJUVDaVldCbiXbeMOGPS2CR6cjdy/lGdgZ+9jBtXz+kWDEmIfM3itsjtfjDfBNuEoeO5f96apBNGsftKFGfdVUM3w2HG/VVIxGzzUEoSkrhuRpgpuAAmv46rffmUZKpE1vsZJDSVIZHfxWEzzmYgnD2sybhyD4CcSb9TKcr8lX4bCi55DDBcBCXIIH5K1LkyU2Zc+JAjOfvhaFH1dtv97JZn1d+VV1s5dRtGEwTFwqK9DbKt2MY9khDH59ArINJy7NAEYwZgMf+Y9dH829oqGOdmFZykCkJD9n1PlQ0ZEv5BEDhBvzTs4ZrEJbkhwa7kZj64RCW+hmfwuCfSF0LGrhEt1Hh0mI+eVVBJDbpS7FHhI0FH9nBipQrfBYLfgBj4KEdReDwdrf2MN9XPiTjvJWySY5uUFQdQLQUa7KjOlPblcxzCqvZMldNqRmXIbvjflWVIkvNhyICLhN1ZKD5ooYjyAmrLMgf4La8EO4To1HeAnnWZnQDKXwpxxkvSfddW/vymlv7802CM4WrwmCPxGv2sOlnJwsz9v7vMJB3il6Yt+Y+SAx75S+AEQqDzUE1j9Ii+FBdYXLw3milIHHp9DU3P6oSdMh+XZM+HuCqVRQpEvqirKSluEB3IyGuq3PiDmvUf5XmeIFn1+CdU+wJyxmmBnIUV+aJEJIgseZLABMBAYzIrgyaF5W5Dhm8RPqOHZ7ohyCchfhupd7LFRS3qTwHImvgCc4HJ5QsR1BuCjTzOM/MYe2VnUaBm8srWwMcooPDt3ja+0r8C1kKgnlN8Q0UNfWl70NjVRotMDIlGD0sT4B5Qhv9qDn1rK6WZRoKmRWCTz51W+04EItwsS2fnksGKggfhf48za0RX6zhYNEgikzf/WYYIEjctSgMNDvd1eYnRnjRwl7d8jCQwlc7ehxSNpl9hWOwQVTiCp311xSyjqyoix87vQfOMOg1/ldD9LsnlpwysdwZ6y3SOMmGc4hW/g3nNYZUazUXuvuzcoq1295X3qdCenEld7SSkaSwbNhEKFa1+coh6U4+eEXxDFehVOJwhv/ieIDoZDOboWqOqiOEiyklik/6hVZ60UoK4AAPVp9Hh3zzpPPghYdLbfO+K7gJCJNgeBnCbyFfLrvDFIsM7PcUCrEOzI4vg5Uqf39F+SRQUAAAAA');
