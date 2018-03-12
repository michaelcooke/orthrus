<?php

namespace MichaelCooke\Orthrus\Apis;

use ESI;
use Eseye;
use MichaelCooke\Orthrus\Orthrus;

class Api
{
    protected $base = null;
    protected $body = null;
    protected $verb = 'get';
    protected $query = null;
    protected $index = false;
    protected $endpoint = null;
    protected $variables = null;
    protected $getAllPages = null;

    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            call_user_func_array(array($this, $method), $arguments);
        }

        if ($this->index) {
            $arguments = [$this->verb, '/' . $this->base . '/', $this->variables, $this->body, $this->query];
        } elseif ($this->endpoint == null) {
            $arguments = [$this->verb, '/' . $this->base . '/', $this->variables, $this->body, $this->query];
        } else {
            $arguments = [$this->verb, '/' . $this->base . '/' . $this->endpoint . '/', $this->variables, $this->body, $this->query];
        }

        $response = ESI::invoke(...$arguments);
        ESI::setResponse($response);

        $response = collect(json_decode($response->raw));

        if ($this->getAllPages) {
            $totalPages = $response->pages;

            for ($i = 2; $i <= $totalPages; $i++) {
                $arguments[4] = ['page' => $i];
                $pageResponse = ESI::invoke(...$arguments);
                $response->raw = json_encode(array_merge(json_decode($response->raw, true), json_decode($pageResponse->raw, true)));
            }

            return $response;
        }

        ESI::resetRefreshToken();

        return $response;
    }
}
