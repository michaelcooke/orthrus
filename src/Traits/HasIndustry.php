<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIndustry
{
    protected function industryJobs(): void
    {
        $this->endpoint = $this->id . '/industry/jobs';
    }
}
