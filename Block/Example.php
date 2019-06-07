<?php
declare(strict_types=1);

namespace Niall\ViewModelExample\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * USEFULL_DESCRIPTION_HERE
 *
 * @author Niall Tiernan <n.tiernan@youwe.nl>
 */
class Example implements ArgumentInterface
{

    public function doSomething()
    {
        return 'You\'re beautiful!';
    }
}
