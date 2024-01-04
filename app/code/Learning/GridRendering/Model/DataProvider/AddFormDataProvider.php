<?php

declare(strict_types=1);

namespace Learning\GridRendering\Model\DataProvider;

use AllowDynamicProperties;
use Magento\Framework\Api\Filter;
use Magento\Ui\DataProvider\AbstractDataProvider;

#[AllowDynamicProperties] class AddFormDataProvider extends AbstractDataProvider
{
    /**
     * Get data
     *
     * @return array
     */
    public function getData(): array
    {
        if (empty($this->loadedData)) {
            $this->loadedData = [
                'your_primary_field' => [
                    'your_primary_field' => 'some_value',
                ],
            ];
        }

        return $this->loadedData;
    }

    public function addFilter(Filter $filter): null
    {
        return null;
    }
}
