<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @noinspection PhpUnhandledExceptionInspection
 *
 * @link        https://github.com/webino/console
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Class ConsoleOption
 * @package console
 */
class ConsoleOption
{
    /**
     * An argument's name.
     *
     * Use this name when internally referring to the argument.
     *
     * @var string
     */
    protected $name;

    /**
     * An argument's short representation.
     *
     * @var string
     */
    protected $prefix;

    /**
     * An argument's long representation.
     *
     * @var string
     */
    protected $longPrefix;

    /**
     * An argument's description.
     *
     * @var string
     */
    protected $description;

    /**
     * Whether or not an argument is required.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Whether or not an argument only needs to be defined to have a value.
     *
     * These arguments have the value true when they are defined on the command
     * line.
     *
     * @var bool
     */
    protected $noValue = false;

    /**
     * Which data type to cast an argument's value to.
     *
     * Valid data types are "string", "int", "float", and "bool".
     *
     * @var string
     */
    protected $castTo = 'string';

    /**
     * An argument's default value.
     *
     * @var string|array
     */
    protected $defaultValue = [];

    /**
     * An argument's value, after type casting.
     *
     * @var string[]|int[]|float[]|bool[]
     */
    protected $values = [];

    /**
     * Build a new command argument.
     *
     * @param string $name Argument's name
     */
    public function __construct($name)
    {
        $this->name = trim($name);
    }

    /**
     * Set an argument's short form.
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix): self
    {
        $this->prefix = trim($prefix);
        return $this;
    }

    /**
     * Set an argument's short form.
     *
     * @param string $longPrefix
     * @return $this
     */
    public function setLongPrefix($longPrefix): self
    {
        $this->longPrefix = trim($longPrefix);
        return $this;
    }

    /**
     * Set an argument's description.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description): self
    {
        $this->description = trim($description);
        return $this;
    }

    /**
     * Set whether an argument is required or not.
     *
     * @param bool $required
     * @return $this
     */
    public function setRequired($required = true): self
    {
        $this->required = (bool) $required;
        return $this;
    }

    /**
     * Set whether or not an argument only needs to be defined to have a value.
     *
     * @param bool $noValue
     * @return $this
     */
    public function setNoValue($noValue = true): self
    {
        $this->setCastTo('bool');
        $this->noValue = (bool) $noValue;
        return $this;
    }

    /**
     * Set the data type to cast an argument's value to.
     *
     * Valid data types are "string", "int", "float", and "bool".
     *
     * @param string $castTo
     * @return $this
     * @throws UnexpectedValueException if $castTo is not a valid data type.
     */
    public function setCastTo($castTo): self
    {
        if (!in_array($castTo, ['string', 'int', 'float', 'bool'])) {
            throw new UnexpectedValueException(
                "An argument may only be cast to the data type "
                . "'string', 'int', 'float', or 'bool'."
            );
        }

        $this->castTo = $this->noValue ? 'bool' : $castTo;
        return $this;
    }

    /**
     * Set an argument's default value.
     *
     * @param string|array $defaultValue
     * @return $this
     */
    public function setDefaultValue($defaultValue): self
    {
        if (!is_array($defaultValue)) {
            $defaultValue = [$defaultValue];
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            $this->name => [
                'prefix' => $this->prefix,
                'longPrefix' => $this->longPrefix,
                'description' => $this->description,
                'required' => $this->required,
                'noValue' => $this->noValue,
                'castTo' => $this->castTo,
                'defaultValue' => $this->defaultValue,
            ],
        ];
    }
}
