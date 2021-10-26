<?php

class UserController
{

    private $host;
    private $client;

    public function __construct()
    {
        $this->host = $_ENV['HOST'];
        $this->client = new \GuzzleHttp\Client();
    }

     function all()
    {
        $response = $this->client->get($this->host . '/users');
        return json_decode((string) $response->getBody());
    }

    function add($name, $job){
        $response = $this->client->post($this->host . '/users', [
            'json' => ['name' => $name, 'job' => $job]
        ]);
        return ((string) $response->getBody());
    }

    function edit($name, $job){
        $response = $this->client->put($this->host . '/users', [
            'json' => ['name' => $name, 'job' => $job]
        ]);
        return ((string) $response->getBody());
    }

    function delete($id){
        $response = $this->client->delete($this->host . '/users/' . $id);
        return $response->getStatusCode();
    }
}
