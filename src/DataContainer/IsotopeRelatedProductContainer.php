<?php

declare(strict_types=1);

namespace ContaoIsotopeRelatedProductsBundle\DataContainer;

class IsotopeRelatedProductContainer
{
    public function deserializeOptions($varValue, $dc) {
        if($varValue) {
            return implode(',', deserialize($varValue));
        }

        return $varValue;
    }

    public function serializeOptions($varValue, $dc) {
        return serialize(explode(",", $varValue));
    }
}
