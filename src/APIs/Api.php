<?php

namespace MichaelCooke\Orthrus\Apis;

use Eseye;
use MichaelCooke\Orthrus\Orthrus;

class Api
{
    protected $base = null;
    protected $body = null;
    protected $verb = null;
    protected $query = null;
    protected $index = false;
    protected $orthrus = null;
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

        $response = $this->orthrus->invoke(...$arguments);

        if ($this->getAllPages) {
            $totalPages = $response->pages;

            for ($i = 2; $i <= $totalPages; $i++) {
                $arguments[4] = ['page' => $i];
                $pageResponse = $this->orthrus->invoke(...$arguments);
                $response->raw = json_encode(array_merge(json_decode($response->raw, true), json_decode($pageResponse->raw, true)));
            }

            return $response;
        }

        $this->orthrus->resetRefreshToken();

        return $response;
    }
}
