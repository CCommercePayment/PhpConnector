<?php
/**
 * LoanTerm
 *
 * PHP version 5
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace pachirapay\Model;

use \ArrayAccess;
use \pachirapay\ObjectSerializer;

/**
 * LoanTerm Class Doc Comment
 *
 * @category Class
 * @description All loan term data
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoanTerm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoanTerm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'loan_term_ref' => 'string',
        'min_amount' => 'int',
        'max_amount' => 'int',
        'effective_rate' => 'int',
        'monthly_payment' => 'int',
        'desposit_percentage' => 'int',
        'total_billing_cycles' => 'int',
        'default_term' => 'bool',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'loan_term_ref' => null,
        'min_amount' => 'int64',
        'max_amount' => 'int64',
        'effective_rate' => 'int32',
        'monthly_payment' => 'int64',
        'desposit_percentage' => 'int32',
        'total_billing_cycles' => 'int32',
        'default_term' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'loan_term_ref' => 'loanTermRef',
        'min_amount' => 'minAmount',
        'max_amount' => 'maxAmount',
        'effective_rate' => 'effectiveRate',
        'monthly_payment' => 'monthlyPayment',
        'desposit_percentage' => 'despositPercentage',
        'total_billing_cycles' => 'totalBillingCycles',
        'default_term' => 'defaultTerm',
        'start_date' => 'startDate',
        'end_date' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loan_term_ref' => 'setLoanTermRef',
        'min_amount' => 'setMinAmount',
        'max_amount' => 'setMaxAmount',
        'effective_rate' => 'setEffectiveRate',
        'monthly_payment' => 'setMonthlyPayment',
        'desposit_percentage' => 'setDespositPercentage',
        'total_billing_cycles' => 'setTotalBillingCycles',
        'default_term' => 'setDefaultTerm',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loan_term_ref' => 'getLoanTermRef',
        'min_amount' => 'getMinAmount',
        'max_amount' => 'getMaxAmount',
        'effective_rate' => 'getEffectiveRate',
        'monthly_payment' => 'getMonthlyPayment',
        'desposit_percentage' => 'getDespositPercentage',
        'total_billing_cycles' => 'getTotalBillingCycles',
        'default_term' => 'getDefaultTerm',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['loan_term_ref'] = isset($data['loan_term_ref']) ? $data['loan_term_ref'] : null;
        $this->container['min_amount'] = isset($data['min_amount']) ? $data['min_amount'] : null;
        $this->container['max_amount'] = isset($data['max_amount']) ? $data['max_amount'] : null;
        $this->container['effective_rate'] = isset($data['effective_rate']) ? $data['effective_rate'] : null;
        $this->container['monthly_payment'] = isset($data['monthly_payment']) ? $data['monthly_payment'] : null;
        $this->container['desposit_percentage'] = isset($data['desposit_percentage']) ? $data['desposit_percentage'] : null;
        $this->container['total_billing_cycles'] = isset($data['total_billing_cycles']) ? $data['total_billing_cycles'] : null;
        $this->container['default_term'] = isset($data['default_term']) ? $data['default_term'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets loan_term_ref
     *
     * @return string|null
     */
    public function getLoanTermRef()
    {
        return $this->container['loan_term_ref'];
    }

    /**
     * Sets loan_term_ref
     *
     * @param string|null $loan_term_ref The loan term reference
     *
     * @return $this
     */
    public function setLoanTermRef($loan_term_ref)
    {
        $this->container['loan_term_ref'] = $loan_term_ref;

        return $this;
    }

    /**
     * Gets min_amount
     *
     * @return int|null
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     *
     * @param int|null $min_amount The minimum amount allowed
     *
     * @return $this
     */
    public function setMinAmount($min_amount)
    {
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets max_amount
     *
     * @return int|null
     */
    public function getMaxAmount()
    {
        return $this->container['max_amount'];
    }

    /**
     * Sets max_amount
     *
     * @param int|null $max_amount The maximum amount allowed
     *
     * @return $this
     */
    public function setMaxAmount($max_amount)
    {
        $this->container['max_amount'] = $max_amount;

        return $this;
    }

    /**
     * Gets effective_rate
     *
     * @return int|null
     */
    public function getEffectiveRate()
    {
        return $this->container['effective_rate'];
    }

    /**
     * Sets effective_rate
     *
     * @param int|null $effective_rate The effective rate
     *
     * @return $this
     */
    public function setEffectiveRate($effective_rate)
    {
        $this->container['effective_rate'] = $effective_rate;

        return $this;
    }

    /**
     * Gets monthly_payment
     *
     * @return int|null
     */
    public function getMonthlyPayment()
    {
        return $this->container['monthly_payment'];
    }

    /**
     * Sets monthly_payment
     *
     * @param int|null $monthly_payment The monthly payment
     *
     * @return $this
     */
    public function setMonthlyPayment($monthly_payment)
    {
        $this->container['monthly_payment'] = $monthly_payment;

        return $this;
    }

    /**
     * Gets desposit_percentage
     *
     * @return int|null
     */
    public function getDespositPercentage()
    {
        return $this->container['desposit_percentage'];
    }

    /**
     * Sets desposit_percentage
     *
     * @param int|null $desposit_percentage The desposit percentage
     *
     * @return $this
     */
    public function setDespositPercentage($desposit_percentage)
    {
        $this->container['desposit_percentage'] = $desposit_percentage;

        return $this;
    }

    /**
     * Gets total_billing_cycles
     *
     * @return int|null
     */
    public function getTotalBillingCycles()
    {
        return $this->container['total_billing_cycles'];
    }

    /**
     * Sets total_billing_cycles
     *
     * @param int|null $total_billing_cycles The total billing cycles
     *
     * @return $this
     */
    public function setTotalBillingCycles($total_billing_cycles)
    {
        $this->container['total_billing_cycles'] = $total_billing_cycles;

        return $this;
    }

    /**
     * Gets default_term
     *
     * @return bool|null
     */
    public function getDefaultTerm()
    {
        return $this->container['default_term'];
    }

    /**
     * Sets default_term
     *
     * @param bool|null $default_term Indicates if the loan term is the default or not
     *
     * @return $this
     */
    public function setDefaultTerm($default_term)
    {
        $this->container['default_term'] = $default_term;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date The start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The end date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


