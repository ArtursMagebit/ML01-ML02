<?php

declare(strict_types=1);

namespace Learning\GridRendering\Model;

use Magento\Framework\Model\AbstractModel;
use Learning\GridRendering\Model\ResourceModel\Category as CategoryResource;

class Category extends AbstractModel
{
    /**
     * Initialize model
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(CategoryResource::class);
    }

    /**
     * Get the category name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->_getData('name');
    }

    /**
     * Set the category name
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        return $this->setData('name', $name);
    }
}
