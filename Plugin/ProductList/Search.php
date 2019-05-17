<?php
declare(strict_types=1);

namespace Bazaarvoice\Connector\Plugin\ProductList;

use Bazaarvoice\Connector\Model\Source\ProductList;

/**
 * Class Search
 *
 * @package Bazaarvoice\Connector\Plugin\ProductList
 */
class Search extends Item
{
    /**
     * @var string
     */
    protected $type = ProductList::CATEGORY;
}
