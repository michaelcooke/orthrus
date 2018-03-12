<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBookmarks
{
    protected function bookmarks()
    {
        $this->endpoint = $this->id . '/bookmarks';
    }

    protected function bookmarkFolders()
    {
        $this->endpoint = $this->id . '/bookmarks/folders';
    }
}
