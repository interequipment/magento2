<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Setup\Test\Constraint\Extension;

use Magento\Mtf\Constraint\AbstractConstraint;
use Magento\Setup\Test\Block\Extension\InstallGrid;
use Magento\Setup\Test\Fixture\Extension;

/**
 * Check that several extensions was selected on the grid.
 */
class AssertSelectSeveralExtensions extends AbstractConstraint
{
    /**
     * Assert that extensions was selected on the grid.
     *
     * @param InstallGrid $grid
     * @param Extension[] $extensions
     * @return void
     */
    public function processAssert(InstallGrid $grid, array $extensions)
    {
        $extensions = $grid->selectSeveralExtensions($extensions);
        \PHPUnit_Framework_Assert::assertEmpty(
            $extensions,
            'Next extensions are not found on the grid: ' . implode(', ', $extensions)
        );
    }

    /**
     * Returns a string representation of successful assertion.
     *
     * @return string
     */
    public function toString()
    {
        return "Extensions are found and selected on the grid.";
    }
}
