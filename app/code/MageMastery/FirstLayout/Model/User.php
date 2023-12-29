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

namespace MageMastery\FirstLayout\Model;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel
{
    public function getFirstname(): string
    {
        return $this->_getData('firstname');
    }

    public function setFirstname(string $firstname): User
    {
        return $this->setData('firstname', $firstname);
    }
}
