<?php

declare(strict_types=1);

namespace Learning\GridRendering\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Category extends AbstractDb
{
    /**
     * Category table name
     */
    const CATEGORY_TABLE = 'students';

    /**
     * Constructor
     *
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(self::CATEGORY_TABLE, 'id');
    }
}
