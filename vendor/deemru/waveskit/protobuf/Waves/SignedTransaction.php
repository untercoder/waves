<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: waves/transaction.proto

namespace Waves;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.SignedTransaction</code>
 */
class SignedTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.waves.Transaction transaction = 1;</code>
     */
    protected $transaction = null;
    /**
     * Generated from protobuf field <code>repeated bytes proofs = 2;</code>
     */
    private $proofs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Waves\Transaction $transaction
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $proofs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Waves\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.waves.Transaction transaction = 1;</code>
     * @return \Waves\Transaction
     */
    public function getTransaction()
    {
        return isset($this->transaction) ? $this->transaction : null;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * Generated from protobuf field <code>.waves.Transaction transaction = 1;</code>
     * @param \Waves\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Waves\Transaction::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProofs()
    {
        return $this->proofs;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->proofs = $arr;

        return $this;
    }

}

