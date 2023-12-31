<?php

/**
 * @copyright Copyright (c) 2023 Magebit (https://magebit.com/)
 * @author    <info@magebit.com>
 * @license   GNU General Public License ("GPL") v3.0
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MageMastery\FirstLayout\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class User extends AbstractDb
{
    protected function _construct()
    {
        // Define the main table and primary key for the resource model
        //$this->_init('your_database_table_name', 'your_primary_key_column');
    }
}
