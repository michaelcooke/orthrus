<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIndustry
{
    protected function getIndustryJobs()
    {
        $this->endpoint = $this->id . '/industry/jobs';
    }
}
