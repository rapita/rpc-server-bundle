<?php

namespace Timiki\Bundle\RpcServerBundle\Exceptions;

use RuntimeException;

class ErrorException extends RuntimeException implements ErrorExceptionInterface
{
    /**
     * Exception data.
     *
     * @var mixed
     */
    private $data;

    /**
     * Exception id.
     *
     * @var mixed
     */
    private $id;

    /**
     * ErrorException constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param null|mixed      $data
     * @param null|int|string $id
     */
    public function __construct($message = '', $code = -32603, $data = null, $id = null)
    {
        $this->data = $data;
        $this->id = $id;

        parent::__construct($message, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
}
