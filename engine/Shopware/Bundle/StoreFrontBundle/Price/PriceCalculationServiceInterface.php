<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\StoreFrontBundle\Price;

use Shopware\Bundle\StoreFrontBundle\Context\ShopContextInterface;
use Shopware\Bundle\StoreFrontBundle\Product\ListProduct;

/**
 * @category  Shopware
 *
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
interface PriceCalculationServiceInterface
{
    /**
     * Calculates all prices of the product.
     *
     * The product contains two different prices, the graduated prices and the cheapest price.
     * Each price type contains a single or multiple \Shopware\Bundle\StoreFrontBundle\Product\PriceRule elements.
     *
     * Each price rule contains a price, pseudo price and a reference price which calculates over
     * the assigned price unit based on the original price.
     *
     * The calculated \Shopware\Bundle\StoreFrontBundle\Product\PriceRule structs are wrapped into a \Shopware\Bundle\StoreFrontBundle\Product\Price
     * struct which contains only the calculated price values and the reference to his rule.
     *
     * @param ListProduct                                                    $product
     * @param \Shopware\Bundle\StoreFrontBundle\Context\ShopContextInterface $context
     */
    public function calculateProduct(ListProduct $product, ShopContextInterface $context);
}
