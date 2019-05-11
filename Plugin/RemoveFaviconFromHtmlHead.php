<?php
namespace MarkShust\RemoveFavicon\Plugin;

use Magento\Framework\View\Page\Config\Renderer;

/**
 * Class RemoveFaviconFromHtmlHead
 * @package MarkShust\RemoveFavicon\Plugin
 */
class RemoveFaviconFromHtmlHead
{
    public function aroundPrepareFavicon(Renderer $subject, callable $proceed)
    {
        // Do not call $proceed() to remove favicon code
    }
}
