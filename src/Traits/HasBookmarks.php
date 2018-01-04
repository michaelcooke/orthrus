<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBookmarks
{
    public function getBookmarks()
    {
        return $this->orthrus->invoke("get", $this->base . $this->id . "/" . "bookmarks/");
    }

    public function getBookmarkFolders()
    {
        return $this->orthrus->invoke("get", $this->base . $this->id . "/" . "bookmarks/folders/");
    }
}
