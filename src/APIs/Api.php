<?php

namespace MichaelCooke\Orthrus\Apis;

use Eseye;
use MichaelCooke\Orthrus\Orthrus;

class Api
{
    protected $base = null;
    protected $body = null;
    protected $query = null;
    protected $variables = null;
    protected $verb = null;
    protected $index = false;
    protected $orthrus = null;
    protected $endpoint = null;

    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            call_user_func_array(array($this, $method), $arguments);
        }

        if ($this->index) {
            $response = $this->orthrus->invoke($this->verb, "/" . $this->base . "/", $this->variables, $this->body, $this->query);
        } else {
            $response = $this->orthrus->invoke($this->verb, "/" . $this->base . "/" . $this->endpoint . "/", $this->variables, $this->body, $this->query);
        }

        $this->orthrus->resetRefreshToken();

        return $response;
    }
}
