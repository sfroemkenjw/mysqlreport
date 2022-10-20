<?php

declare(strict_types=1);

/*
 * This file is part of the package stefanfroemken/mysqlreport.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace StefanFroemken\Mysqlreport\Controller;

use StefanFroemken\Mysqlreport\Domain\Factory\PanelFactory;
use StefanFroemken\Mysqlreport\Menu\Page;
use StefanFroemken\Mysqlreport\Menu\PageFinder;
use TYPO3\CMS\Backend\View\BackendTemplateView;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Controller to show a basic analysis of MySQL variables and status
 */
class MySqlController extends AbstractController
{
    /**
     * @var BackendTemplateView
     */
    protected $view;

    /**
     * @var BackendTemplateView
     */
    protected $defaultViewObjectName = BackendTemplateView::class;

    public function indexAction(): void
    {
        $page = $this->pageFinder->getPageByIdentifier('main');
        if ($page instanceof Page) {

            $this->view->assign('renderedPanels', $page->getRenderedPanels());
        }
    }

    public function queryCacheAction(): void
    {
    }

    public function innoDbBufferAction(): void
    {
    }

    public function threadCacheAction(): void
    {
    }

    public function tableCacheAction(): void
    {
    }
}
