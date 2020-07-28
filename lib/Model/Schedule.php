<?php
/**
 * Schedule
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
 * OpenAPI Generator version: 4.3.1
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
 * Schedule Class Doc Comment
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Schedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'date' => '\DateTime',
        'rank' => 'int',
        'currency' => 'string',
        'state' => 'string',
        'captured_amount' => 'int',
        'remaining_amount' => 'int',
        'cancelled_amount' => 'int',
        'refunded_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'int64',
        'date' => 'date-time',
        'rank' => 'int32',
        'currency' => null,
        'state' => null,
        'captured_amount' => 'int64',
        'remaining_amount' => 'int64',
        'cancelled_amount' => 'int64',
        'refunded_amount' => 'int64'
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
        'amount' => 'amount',
        'date' => 'date',
        'rank' => 'rank',
        'currency' => 'currency',
        'state' => 'state',
        'captured_amount' => 'capturedAmount',
        'remaining_amount' => 'remainingAmount',
        'cancelled_amount' => 'cancelledAmount',
        'refunded_amount' => 'refundedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'date' => 'setDate',
        'rank' => 'setRank',
        'currency' => 'setCurrency',
        'state' => 'setState',
        'captured_amount' => 'setCapturedAmount',
        'remaining_amount' => 'setRemainingAmount',
        'cancelled_amount' => 'setCancelledAmount',
        'refunded_amount' => 'setRefundedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'date' => 'getDate',
        'rank' => 'getRank',
        'currency' => 'getCurrency',
        'state' => 'getState',
        'captured_amount' => 'getCapturedAmount',
        'remaining_amount' => 'getRemainingAmount',
        'cancelled_amount' => 'getCancelledAmount',
        'refunded_amount' => 'getRefundedAmount'
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

    const CURRENCY_UNKNOWN = 'unknown';
    const CURRENCY_AED = 'aed';
    const CURRENCY_AFN = 'afn';
    const CURRENCY_ALL = 'all';
    const CURRENCY_AMD = 'amd';
    const CURRENCY_ANG = 'ang';
    const CURRENCY_AOA = 'aoa';
    const CURRENCY_ARS = 'ars';
    const CURRENCY_AUD = 'aud';
    const CURRENCY_AWG = 'awg';
    const CURRENCY_AZN = 'azn';
    const CURRENCY_BAM = 'bam';
    const CURRENCY_BBD = 'bbd';
    const CURRENCY_BDT = 'bdt';
    const CURRENCY_BGN = 'bgn';
    const CURRENCY_BHD = 'bhd';
    const CURRENCY_BIF = 'bif';
    const CURRENCY_BMD = 'bmd';
    const CURRENCY_BND = 'bnd';
    const CURRENCY_BOB = 'bob';
    const CURRENCY_BOV = 'bov';
    const CURRENCY_BRL = 'brl';
    const CURRENCY_BSD = 'bsd';
    const CURRENCY_BTN = 'btn';
    const CURRENCY_BWP = 'bwp';
    const CURRENCY_BYR = 'byr';
    const CURRENCY_BZD = 'bzd';
    const CURRENCY_CAD = 'cad';
    const CURRENCY_CDF = 'cdf';
    const CURRENCY_CHE = 'che';
    const CURRENCY_CHF = 'chf';
    const CURRENCY_CHW = 'chw';
    const CURRENCY_CLF = 'clf';
    const CURRENCY_CLP = 'clp';
    const CURRENCY_CNY = 'cny';
    const CURRENCY_COP = 'cop';
    const CURRENCY_COU = 'cou';
    const CURRENCY_CRC = 'crc';
    const CURRENCY_CUC = 'cuc';
    const CURRENCY_CUP = 'cup';
    const CURRENCY_CVE = 'cve';
    const CURRENCY_CZK = 'czk';
    const CURRENCY_DJF = 'djf';
    const CURRENCY_DKK = 'dkk';
    const CURRENCY_DOP = 'dop';
    const CURRENCY_DZD = 'dzd';
    const CURRENCY_EGP = 'egp';
    const CURRENCY_ERN = 'ern';
    const CURRENCY_ETB = 'etb';
    const CURRENCY_EUR = 'eur';
    const CURRENCY_FJD = 'fjd';
    const CURRENCY_FKP = 'fkp';
    const CURRENCY_GBP = 'gbp';
    const CURRENCY_GEL = 'gel';
    const CURRENCY_GHS = 'ghs';
    const CURRENCY_GIP = 'gip';
    const CURRENCY_GMD = 'gmd';
    const CURRENCY_GNF = 'gnf';
    const CURRENCY_GTQ = 'gtq';
    const CURRENCY_GYD = 'gyd';
    const CURRENCY_HKD = 'hkd';
    const CURRENCY_HNL = 'hnl';
    const CURRENCY_HRK = 'hrk';
    const CURRENCY_HTG = 'htg';
    const CURRENCY_HUF = 'huf';
    const CURRENCY_IDR = 'idr';
    const CURRENCY_ILS = 'ils';
    const CURRENCY_INR = 'inr';
    const CURRENCY_IQD = 'iqd';
    const CURRENCY_IRR = 'irr';
    const CURRENCY_ISK = 'isk';
    const CURRENCY_JMD = 'jmd';
    const CURRENCY_JOD = 'jod';
    const CURRENCY_JPY = 'jpy';
    const CURRENCY_KES = 'kes';
    const CURRENCY_KGS = 'kgs';
    const CURRENCY_KHR = 'khr';
    const CURRENCY_KMF = 'kmf';
    const CURRENCY_KPW = 'kpw';
    const CURRENCY_KRW = 'krw';
    const CURRENCY_KWD = 'kwd';
    const CURRENCY_KYD = 'kyd';
    const CURRENCY_KZT = 'kzt';
    const CURRENCY_LAK = 'lak';
    const CURRENCY_LBP = 'lbp';
    const CURRENCY_LKR = 'lkr';
    const CURRENCY_LRD = 'lrd';
    const CURRENCY_LSL = 'lsl';
    const CURRENCY_LYD = 'lyd';
    const CURRENCY_MAD = 'mad';
    const CURRENCY_MDL = 'mdl';
    const CURRENCY_MGA = 'mga';
    const CURRENCY_MKD = 'mkd';
    const CURRENCY_MMK = 'mmk';
    const CURRENCY_MNT = 'mnt';
    const CURRENCY_MOP = 'mop';
    const CURRENCY_MRO = 'mro';
    const CURRENCY_MUR = 'mur';
    const CURRENCY_MVR = 'mvr';
    const CURRENCY_MWK = 'mwk';
    const CURRENCY_MXN = 'mxn';
    const CURRENCY_MXV = 'mxv';
    const CURRENCY_MYR = 'myr';
    const CURRENCY_MZN = 'mzn';
    const CURRENCY_NAD = 'nad';
    const CURRENCY_NGN = 'ngn';
    const CURRENCY_NIO = 'nio';
    const CURRENCY_NOK = 'nok';
    const CURRENCY_NPR = 'npr';
    const CURRENCY_NZD = 'nzd';
    const CURRENCY_OMR = 'omr';
    const CURRENCY_PAB = 'pab';
    const CURRENCY_PEN = 'pen';
    const CURRENCY_PGK = 'pgk';
    const CURRENCY_PHP = 'php';
    const CURRENCY_PKR = 'pkr';
    const CURRENCY_PLN = 'pln';
    const CURRENCY_PYG = 'pyg';
    const CURRENCY_QAR = 'qar';
    const CURRENCY_RON = 'ron';
    const CURRENCY_RSD = 'rsd';
    const CURRENCY_RUB = 'rub';
    const CURRENCY_RWF = 'rwf';
    const CURRENCY_SAR = 'sar';
    const CURRENCY_SBD = 'sbd';
    const CURRENCY_SCR = 'scr';
    const CURRENCY_SDG = 'sdg';
    const CURRENCY_SEK = 'sek';
    const CURRENCY_SGD = 'sgd';
    const CURRENCY_SHP = 'shp';
    const CURRENCY_SLL = 'sll';
    const CURRENCY_SOS = 'sos';
    const CURRENCY_SRD = 'srd';
    const CURRENCY_SSP = 'ssp';
    const CURRENCY_STD = 'std';
    const CURRENCY_SVC = 'svc';
    const CURRENCY_SYP = 'syp';
    const CURRENCY_SZL = 'szl';
    const CURRENCY_THB = 'thb';
    const CURRENCY_TJS = 'tjs';
    const CURRENCY_TMT = 'tmt';
    const CURRENCY_TND = 'tnd';
    const CURRENCY_TOP = 'top';
    const CURRENCY__TRY = 'try';
    const CURRENCY_TTD = 'ttd';
    const CURRENCY_TWD = 'twd';
    const CURRENCY_TZS = 'tzs';
    const CURRENCY_UAH = 'uah';
    const CURRENCY_UGX = 'ugx';
    const CURRENCY_USD = 'usd';
    const CURRENCY_USN = 'usn';
    const CURRENCY_UYI = 'uyi';
    const CURRENCY_UYU = 'uyu';
    const CURRENCY_UZS = 'uzs';
    const CURRENCY_VEF = 'vef';
    const CURRENCY_VND = 'vnd';
    const CURRENCY_VUV = 'vuv';
    const CURRENCY_WST = 'wst';
    const CURRENCY_XAF = 'xaf';
    const CURRENCY_XAG = 'xag';
    const CURRENCY_XAU = 'xau';
    const CURRENCY_XBA = 'xba';
    const CURRENCY_XBB = 'xbb';
    const CURRENCY_XBC = 'xbc';
    const CURRENCY_XBD = 'xbd';
    const CURRENCY_XCD = 'xcd';
    const CURRENCY_XDR = 'xdr';
    const CURRENCY_XOF = 'xof';
    const CURRENCY_XPD = 'xpd';
    const CURRENCY_XPF = 'xpf';
    const CURRENCY_XPT = 'xpt';
    const CURRENCY_XSU = 'xsu';
    const CURRENCY_XTS = 'xts';
    const CURRENCY_XUA = 'xua';
    const CURRENCY_XXX = 'xxx';
    const CURRENCY_YER = 'yer';
    const CURRENCY_ZAR = 'zar';
    const CURRENCY_ZMW = 'zmw';
    const CURRENCY_ZWL = 'zwl';
    const STATE_INIT = 'init';
    const STATE_IN_PAYMENT = 'inPayment';
    const STATE_PAYED = 'payed';
    const STATE_CONFIRMED = 'confirmed';
    const STATE_REFUSED = 'refused';
    const STATE_CANCELLED = 'cancelled';
    const STATE_PENDING = 'pending';
    const STATE_UNDETERMINED = 'undetermined';
    const STATE_DISCARDED = 'discarded';
    const STATE_CASHING = 'cashing';
    const STATE_CASHED = 'cashed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_UNKNOWN,
            self::CURRENCY_AED,
            self::CURRENCY_AFN,
            self::CURRENCY_ALL,
            self::CURRENCY_AMD,
            self::CURRENCY_ANG,
            self::CURRENCY_AOA,
            self::CURRENCY_ARS,
            self::CURRENCY_AUD,
            self::CURRENCY_AWG,
            self::CURRENCY_AZN,
            self::CURRENCY_BAM,
            self::CURRENCY_BBD,
            self::CURRENCY_BDT,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BIF,
            self::CURRENCY_BMD,
            self::CURRENCY_BND,
            self::CURRENCY_BOB,
            self::CURRENCY_BOV,
            self::CURRENCY_BRL,
            self::CURRENCY_BSD,
            self::CURRENCY_BTN,
            self::CURRENCY_BWP,
            self::CURRENCY_BYR,
            self::CURRENCY_BZD,
            self::CURRENCY_CAD,
            self::CURRENCY_CDF,
            self::CURRENCY_CHE,
            self::CURRENCY_CHF,
            self::CURRENCY_CHW,
            self::CURRENCY_CLF,
            self::CURRENCY_CLP,
            self::CURRENCY_CNY,
            self::CURRENCY_COP,
            self::CURRENCY_COU,
            self::CURRENCY_CRC,
            self::CURRENCY_CUC,
            self::CURRENCY_CUP,
            self::CURRENCY_CVE,
            self::CURRENCY_CZK,
            self::CURRENCY_DJF,
            self::CURRENCY_DKK,
            self::CURRENCY_DOP,
            self::CURRENCY_DZD,
            self::CURRENCY_EGP,
            self::CURRENCY_ERN,
            self::CURRENCY_ETB,
            self::CURRENCY_EUR,
            self::CURRENCY_FJD,
            self::CURRENCY_FKP,
            self::CURRENCY_GBP,
            self::CURRENCY_GEL,
            self::CURRENCY_GHS,
            self::CURRENCY_GIP,
            self::CURRENCY_GMD,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HKD,
            self::CURRENCY_HNL,
            self::CURRENCY_HRK,
            self::CURRENCY_HTG,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_INR,
            self::CURRENCY_IQD,
            self::CURRENCY_IRR,
            self::CURRENCY_ISK,
            self::CURRENCY_JMD,
            self::CURRENCY_JOD,
            self::CURRENCY_JPY,
            self::CURRENCY_KES,
            self::CURRENCY_KGS,
            self::CURRENCY_KHR,
            self::CURRENCY_KMF,
            self::CURRENCY_KPW,
            self::CURRENCY_KRW,
            self::CURRENCY_KWD,
            self::CURRENCY_KYD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_LKR,
            self::CURRENCY_LRD,
            self::CURRENCY_LSL,
            self::CURRENCY_LYD,
            self::CURRENCY_MAD,
            self::CURRENCY_MDL,
            self::CURRENCY_MGA,
            self::CURRENCY_MKD,
            self::CURRENCY_MMK,
            self::CURRENCY_MNT,
            self::CURRENCY_MOP,
            self::CURRENCY_MRO,
            self::CURRENCY_MUR,
            self::CURRENCY_MVR,
            self::CURRENCY_MWK,
            self::CURRENCY_MXN,
            self::CURRENCY_MXV,
            self::CURRENCY_MYR,
            self::CURRENCY_MZN,
            self::CURRENCY_NAD,
            self::CURRENCY_NGN,
            self::CURRENCY_NIO,
            self::CURRENCY_NOK,
            self::CURRENCY_NPR,
            self::CURRENCY_NZD,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PGK,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RSD,
            self::CURRENCY_RUB,
            self::CURRENCY_RWF,
            self::CURRENCY_SAR,
            self::CURRENCY_SBD,
            self::CURRENCY_SCR,
            self::CURRENCY_SDG,
            self::CURRENCY_SEK,
            self::CURRENCY_SGD,
            self::CURRENCY_SHP,
            self::CURRENCY_SLL,
            self::CURRENCY_SOS,
            self::CURRENCY_SRD,
            self::CURRENCY_SSP,
            self::CURRENCY_STD,
            self::CURRENCY_SVC,
            self::CURRENCY_SYP,
            self::CURRENCY_SZL,
            self::CURRENCY_THB,
            self::CURRENCY_TJS,
            self::CURRENCY_TMT,
            self::CURRENCY_TND,
            self::CURRENCY_TOP,
            self::CURRENCY__TRY,
            self::CURRENCY_TTD,
            self::CURRENCY_TWD,
            self::CURRENCY_TZS,
            self::CURRENCY_UAH,
            self::CURRENCY_UGX,
            self::CURRENCY_USD,
            self::CURRENCY_USN,
            self::CURRENCY_UYI,
            self::CURRENCY_UYU,
            self::CURRENCY_UZS,
            self::CURRENCY_VEF,
            self::CURRENCY_VND,
            self::CURRENCY_VUV,
            self::CURRENCY_WST,
            self::CURRENCY_XAF,
            self::CURRENCY_XAG,
            self::CURRENCY_XAU,
            self::CURRENCY_XBA,
            self::CURRENCY_XBB,
            self::CURRENCY_XBC,
            self::CURRENCY_XBD,
            self::CURRENCY_XCD,
            self::CURRENCY_XDR,
            self::CURRENCY_XOF,
            self::CURRENCY_XPD,
            self::CURRENCY_XPF,
            self::CURRENCY_XPT,
            self::CURRENCY_XSU,
            self::CURRENCY_XTS,
            self::CURRENCY_XUA,
            self::CURRENCY_XXX,
            self::CURRENCY_YER,
            self::CURRENCY_ZAR,
            self::CURRENCY_ZMW,
            self::CURRENCY_ZWL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INIT,
            self::STATE_IN_PAYMENT,
            self::STATE_PAYED,
            self::STATE_CONFIRMED,
            self::STATE_REFUSED,
            self::STATE_CANCELLED,
            self::STATE_PENDING,
            self::STATE_UNDETERMINED,
            self::STATE_DISCARDED,
            self::STATE_CASHING,
            self::STATE_CASHED,
        ];
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['captured_amount'] = isset($data['captured_amount']) ? $data['captured_amount'] : null;
        $this->container['remaining_amount'] = isset($data['remaining_amount']) ? $data['remaining_amount'] : null;
        $this->container['cancelled_amount'] = isset($data['cancelled_amount']) ? $data['cancelled_amount'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets captured_amount
     *
     * @return int|null
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param int|null $captured_amount captured_amount
     *
     * @return $this
     */
    public function setCapturedAmount($captured_amount)
    {
        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets remaining_amount
     *
     * @return int|null
     */
    public function getRemainingAmount()
    {
        return $this->container['remaining_amount'];
    }

    /**
     * Sets remaining_amount
     *
     * @param int|null $remaining_amount remaining_amount
     *
     * @return $this
     */
    public function setRemainingAmount($remaining_amount)
    {
        $this->container['remaining_amount'] = $remaining_amount;

        return $this;
    }

    /**
     * Gets cancelled_amount
     *
     * @return int|null
     */
    public function getCancelledAmount()
    {
        return $this->container['cancelled_amount'];
    }

    /**
     * Sets cancelled_amount
     *
     * @param int|null $cancelled_amount cancelled_amount
     *
     * @return $this
     */
    public function setCancelledAmount($cancelled_amount)
    {
        $this->container['cancelled_amount'] = $cancelled_amount;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int|null $refunded_amount refunded_amount
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


