<?php
namespace MarkShust\RemoveFavicon\Plugin;

use Magento\Framework\View\Page\Config\Renderer;

class RemoveFaviconFromHtmlHead
{
    public function aroundPrepareFavicon(Renderer $subject, callable $proceed)
    {
        // Do not call $proceed() to remove favicon code
    }
}
