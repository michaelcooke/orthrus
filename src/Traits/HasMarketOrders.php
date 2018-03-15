<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMarketOrders
{
    protected function marketOrders(): void
    {
        $this->endpoint = $this->id . '/orders';
    }

    protected function marketOrderHistory(): void
    {
        $this->endpoint = $this->id . '/orders/history';
    }
}
