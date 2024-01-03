<?php
namespace Learning\GridRendering\Plugin;

use Learning\GridRendering\Ui\DataProvider\Category\ListingDataProvider as CategoryDataProvider;
use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class AddAttributesToUiDataProvider
{
    /** @var AttributeRepositoryInterface */
    private AttributeRepositoryInterface $attributeRepository;

    /** @var ProductMetadataInterface */
    private ProductMetadataInterface $productMetadata;

    /**
     * Constructor
     *
     * @param AttributeRepositoryInterface $attributeRepository
     * @param ProductMetadataInterface $productMetadata
     */
    public function __construct(
        AttributeRepositoryInterface $attributeRepository,
        ProductMetadataInterface $productMetadata
    ) {
        $this->attributeRepository = $attributeRepository;
        $this->productMetadata = $productMetadata;
    }

    /**
     * Get Search Result after plugin
     *
     * @param CategoryDataProvider $subject
     * @param SearchResult $result
     * @return SearchResult
     * @throws NoSuchEntityException
     */
    public function afterGetSearchResult(CategoryDataProvider $subject, SearchResult $result): SearchResult
    {
        if ($result->isLoaded()) {
            return $result;
        }

        $edition = $this->productMetadata->getEdition();
        $column = 'entity_id';

        if ($edition == 'Enterprise') {
            $column = 'row_id';
        }

        $attribute = $this->attributeRepository->get('catalog_category', 'name');

        $result->getSelect()->joinLeft(
            ['learninggridname' => $attribute->getBackendTable()],
            'learninggridname.' . $column . ' = main_table.' . $column . ' AND learninggridname.attribute_id = '
            . $attribute->getAttributeId(),
            ['name' => 'learninggridname.value']
        );

        $result->getSelect()->where('learninggridname.value LIKE "B%"');

        return $result;
    }
}
