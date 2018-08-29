<?php

namespace Mocks;

use Twispay\Entity\Order\OrderInterface;
use Twispay\Entity\Order\OrderType;
use Twispay\Exception\ValidationException;

/**
 * Class MockOrderPurchase
 *
 * @category Mocks
 * @package Twispay
 * @author Dragos URSU
 * @version GIT: $Id:$
 */
class MockOrderPurchase implements OrderInterface
{
    /**
     * Method getOrderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return OrderType::PURCHASE;
    }

    /**
     * Method toArray
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'order' => 'sample'
        ];
    }

    /**
     * Method validate
     *
     * @throws ValidationException
     */
    public function validate()
    {
        // empty
    }
}
