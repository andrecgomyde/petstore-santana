<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento2\Tests\Security;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Class InsecureFunctionUnitTest
 */
class InsecureFunctionUnitTest extends AbstractSniffUnitTest
{
    /**
     * @inheritdoc
     */
    public function getErrorList()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getWarningList()
    {
        return [
            3 => 1,
            5 => 1,
            7 => 1,
            9 => 1,
            11 => 1,
            13 => 1,
            15 => 1,
            17 => 1,
            19 => 1,
            21 => 1,
            23 => 1,
            25 => 1,
            27 => 1,
            29 => 1,
        ];
    }
}
