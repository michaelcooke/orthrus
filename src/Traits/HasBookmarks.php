<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBookmarks
{
    protected function bookmarks(): void
    {
        $this->endpoint = $this->id . '/bookmarks';
    }

    protected function bookmarkFolders(): void
    {
        $this->endpoint = $this->id . '/bookmarks/folders';
    }
}
