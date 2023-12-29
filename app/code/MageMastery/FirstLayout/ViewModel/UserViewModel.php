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

namespace MageMastery\FirstLayout\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use MageMastery\FirstLayout\Model\User;

class UserViewModel implements ArgumentInterface
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getUserFirstname(): string
    {
        return $this->userModel->getFirstname();
    }

    public function setUserFirstname(string $firstname): void
    {
        $this->userModel->setFirstname($firstname);
    }
}

