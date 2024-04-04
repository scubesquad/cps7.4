<?php namespace App\Traits;

trait SmsTrait
{

    public function sendSms($mobileNo,$text)
    {
        $apiKey = "Aba25a4289e4f4b2565ab5d40504b7839";
        $message = urlencode($text);
        $sender_id = "CPSSYS";

        $url = "https://alerts.solutionsinfini.com/api/v4/?api_key=" . $apiKey . "&method=sms&message=" . $message . "&to=" . $mobileNo . "&sender=" . $sender_id . "";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        
        curl_close($ch);

        // $data = (json_decode($result, true));

        // if ($data['status'] == "OK") {
        //     return 1;
        // } else {
        //     return 0;
        // }

    }

}
