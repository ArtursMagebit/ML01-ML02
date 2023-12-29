<?php

/**
 * Magebit_PageListWidget
 *
 * @category     Magebit
 * @package      Magebit_PageListWidget
 * @author       Arturs Podzins <arturs.podzins@magebit.com>
 * @copyright    Copyright (c) 2023 Magebit, Ltd.(https://www.magebit.com/)
 */

declare(strict_types=1);

namespace MageMastery\PageListWidget\Block\Widget;

use Magento\Cms\Model\Page;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class PageList extends Template implements BlockInterface
{
    /**
     * Widget title constant
     */
    const WIDGET_TITLE = 'title';

    /**
     * Display mode constants
     */
    const DISPLAY_MODE_ALL_PAGES = 'all_pages';
    const DISPLAY_MODE_SPECIFIC_PAGES = 'specific_pages';

    /**
     * Selected pages constant
     */
    const SELECTED_PAGES = 'selected_pages';
    const DISPLAY_MODE = 'display_mode';

    /**
     * @var Page
     */
    protected Page $cmsPageModel;

    /**
     * Widget constructor.
     * @param Template\Context $context
     * @param Page $cmsPageModel
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Page $cmsPageModel,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->cmsPageModel = $cmsPageModel;
    }

    /**
     * Get widget title
     *
     * @return string|null
     */
    public function getWidgetTitle(): ?string
    {
        return $this->getData(self::WIDGET_TITLE);
    }

    /**
     * Get CMS pages based on the selected display mode
     *
     * @return array
     */
    public function getCmsPages(): array
    {
        $displayMode = $this->getData(self::DISPLAY_MODE);

        if ($displayMode == self::DISPLAY_MODE_ALL_PAGES) {
            return $this->getAllCmsPages();
        } elseif ($displayMode == self::DISPLAY_MODE_SPECIFIC_PAGES) {
            return $this->getSelectedCmsPages();
        }

        return [];
    }

    /**
     * Get all CMS pages
     *
     * @return array
     */
    protected function getAllCmsPages(): array
    {
        $pages = [];
        $pageCollection = $this->cmsPageModel->getCollection();
        $pageCollection->addFieldToSelect(['page_id', 'title']);

        foreach ($pageCollection as $page) {
            $pages[] = [
                'page_id' => $page->getId(),
                'title' => $page->getTitle(),
            ];
        }

        return $pages;
    }

    /**
     * Get selected CMS pages
     *
     * @return array
     */
    protected function getSelectedCmsPages(): array
    {
        $selectedPages = $this->getData(self::SELECTED_PAGES);
        $pages = [];

        foreach ($selectedPages as $pageId) {
            $page = [
                'page_id' => $pageId,
                'title' => 'Products',
            ];

            $pages[] = $page;
        }

        return $pages;
    }
}
