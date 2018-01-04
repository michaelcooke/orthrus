<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBookmarks
{
    protected function getBookmarks()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/bookmarks";
    }

    protected function getBookmarkFolders()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/bookmarks/folders";
    }
}
