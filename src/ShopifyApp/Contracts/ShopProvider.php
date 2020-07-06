<?php

namespace Osiset\ShopifyApp\Contracts;

use Osiset\ShopifyApp\Contracts\ShopModel as IShopModel;

/**
 * Reprecents the shop model provider - usually a user.
 */
interface ShopProvider {
    public function shop(): IShopModel;
}
