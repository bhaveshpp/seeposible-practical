<?php
namespace Seepossible\Custom\Plugin\Magento\Catalog\Model;

use Magento\Catalog\Model\Product as Subject;

class Product
{
    public function afterGetName(Subject $subject, $result)
    {
        return 'Seepossible ' . $result;
    }
}
