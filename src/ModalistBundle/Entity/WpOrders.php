<?php

namespace ModalistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpOrders
 */
class WpOrders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $numOrder;

    /**
     * @var string
     */
    private $productsRef;

    /**
     * @var string
     */
    private $buyerName;

    /**
     * @var string
     */
    private $buyerEmail;

    /**
     * @var string
     */
    private $shippingAddress;

    /**
     * @var string
     */
    private $shippingZipcode;

    /**
     * @var string
     */
    private $shippingCity;

    /**
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var string
     */
    private $orderState;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numOrder
     *
     * @param integer $numOrder
     * @return WpOrders
     */
    public function setNumOrder($numOrder)
    {
        $this->numOrder = $numOrder;

        return $this;
    }

    /**
     * Get numOrder
     *
     * @return integer 
     */
    public function getNumOrder()
    {
        return $this->numOrder;
    }

    /**
     * Set productsRef
     *
     * @param string $productsRef
     * @return WpOrders
     */
    public function setProductsRef($productsRef)
    {
        $this->productsRef = $productsRef;

        return $this;
    }

    /**
     * Get productsRef
     *
     * @return string 
     */
    public function getProductsRef()
    {
        return $this->productsRef;
    }

    /**
     * Set buyerName
     *
     * @param string $buyerName
     * @return WpOrders
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get buyerName
     *
     * @return string 
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set buyerEmail
     *
     * @param string $buyerEmail
     * @return WpOrders
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;

        return $this;
    }

    /**
     * Get buyerEmail
     *
     * @return string 
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * Set shippingAddress
     *
     * @param string $shippingAddress
     * @return WpOrders
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return string 
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set shippingZipcode
     *
     * @param string $shippingZipcode
     * @return WpOrders
     */
    public function setShippingZipcode($shippingZipcode)
    {
        $this->shippingZipcode = $shippingZipcode;

        return $this;
    }

    /**
     * Get shippingZipcode
     *
     * @return string 
     */
    public function getShippingZipcode()
    {
        return $this->shippingZipcode;
    }

    /**
     * Set shippingCity
     *
     * @param string $shippingCity
     * @return WpOrders
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get shippingCity
     *
     * @return string 
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return WpOrders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set orderState
     *
     * @param string $orderState
     * @return WpOrders
     */
    public function setOrderState($orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * Get orderState
     *
     * @return string 
     */
    public function getOrderState()
    {
        return $this->orderState;
    }
}
