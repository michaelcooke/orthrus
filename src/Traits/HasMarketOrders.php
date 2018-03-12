<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMarketOrders
{
    protected function getMarketOrders()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/orders';
    }

    protected function getMarketOrderHistory()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/orders/history';
    }
}
