<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class SMSService
{

	protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = 'https://alerts.solutionsinfini.com/api/v4/';
        $this->apiKey = 'Aba25a4289e4f4b2565ab5d40504b7839'; // Replace with your actual API key
    }

    public function sendSMS($phoneNumber, $message)
    {
        $response = Http::post($this->apiUrl . 'sms', [
            'api_key' => $this->apiKey,
            'to' => $phoneNumber,
            'message' => $message,
        ]);

        // You can handle the response here if needed
        return $response->json();
    }


}