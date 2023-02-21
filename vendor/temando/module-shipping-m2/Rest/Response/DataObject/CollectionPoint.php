<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\DataObject;

use Temando\Shipping\Rest\Response\Fields\CollectionPointAttributes;

/**
 * Temando API Collection Point Response Type
 *
 * @package Temando\Shipping\Rest
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
class CollectionPoint extends AbstractResource
{
    /**
     * @var \Temando\Shipping\Rest\Response\Fields\CollectionPointAttributes
     */
    private $attributes;

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\CollectionPointAttributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param CollectionPointAttributes $attributes
     * @return void
     */
    public function setAttributes(CollectionPointAttributes $attributes)
    {
        $this->attributes = $attributes;
    }
}
