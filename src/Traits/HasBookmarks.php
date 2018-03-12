<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBookmarks
{
    protected function getBookmarks()
    {
        $this->endpoint = $this->id . '/bookmarks';
    }

    protected function getBookmarkFolders()
    {
        $this->endpoint = $this->id . '/bookmarks/folders';
    }
}
