<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIndustry
{
    protected function industryJobs()
    {
        $this->endpoint = $this->id . '/industry/jobs';
    }
}
