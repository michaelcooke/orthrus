<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIndustry
{
    protected function getIndustryJobs()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/industry/jobs';
    }
}
