<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace Magento\Catalog\Test\Constraint;

use Mtf\Constraint\AbstractConstraint;

/**
 * Class AssertProductDuplicateIsNotDisplayingOnFrontend
 */
class AssertProductDuplicateIsNotDisplayingOnFrontend extends AbstractConstraint
{
    /**
     * Constraint severeness
     *
     * @var string
     */
    protected $severeness = 'high';

    /**
     * Assert that product duplicate is not displayed on front-end
     *
     * @return void
     */
    public function processAssert()
    {
        // TODO mage to MAGETWO-25523
    }

    /**
     * Returns a string representation of the object
     *
     * @return string
     */
    public function toString()
    {
        return 'The product does not appear on the frontend.';
    }
}