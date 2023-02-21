<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package ImaginationMedia\Correios
 * @author Igor Ludgero Miura <igor@imaginemage.com>
 * @copyright Copyright (c) 2017 Imagination Media (http://imaginemage.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace ImaginationMedia\Correios\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class PostingMethods implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>40010, 'label'=>__('Sedex Sem Contrato (40010)')),
            array('value'=>40096, 'label'=>__('Sedex Com Contrato (40096)')),
            array('value'=>81019, 'label'=>__('E-Sedex Com Contrato (81019)')),
            array('value'=>41106, 'label'=>__('PAC Sem Contrato (41106)')),
            array('value'=>41068, 'label'=>__('PAC Com Contrato (41068)')),
            array('value'=>40215, 'label'=>__('Sedex 10 (40215)')),
            array('value'=>40290, 'label'=>__('Sedex HOJE (40290)')),
            array('value'=>40045, 'label'=>__('Sedex a Cobrar (40045)')),
        );
    }
}
