<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMarketOrders
{
    protected function marketOrders()
    {
        $this->endpoint = $this->id . '/orders';
    }

    protected function marketOrderHistory()
    {
        $this->endpoint = $this->id . '/orders/history';
    }
}
