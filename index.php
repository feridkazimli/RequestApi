<?php

class RequestApi
{
    protected $ch;
    protected $set;
    protected $url;
    protected $out;

    public function __construct()
    {
        $this->ch = curl_init();

        return $this;
    }

    public function url($url)
    {
        $this->url = curl_setopt($this->ch, CURLOPT_URL, $url);
        return $this;
    }

    public function method(string $method = 'POST')
    {
        switch ($method) {
            case 'POST':
                $this->set = curl_setopt($this->ch, CURLOPT_POST, 1);
                $this->set = curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                # code...
                break;
        }

        return $this;
    }

    public function run()
    {
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
        $out = curl_exec($this->ch);
        $this->out = json_decode($out, true);
        return $this;
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }
}
$url = 'api.openweathermap.org/data/2.5/weather?q=california&appid=6461504b319648dc351322730c05cd11';

$api = new RequestApi();

$api->url($url)->run();

print_r($api);


// $url = 'api.openweathermap.org/data/2.5/weather?q=california&appid=6461504b319648dc351322730c05cd11';

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output = curl_exec($ch);
// curl_close($ch);

// print_r(json_decode($output, true));

// echo http_build_query(json_decode($output, true));

// echo sprintf("%s?%s", $url, http_build_query(json_decode($output, true)));