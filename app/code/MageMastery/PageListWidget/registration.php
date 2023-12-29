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

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'MageMastery_PageListWidget',
    __DIR__
);
