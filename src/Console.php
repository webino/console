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

use League\CLImate\CLImate;

/**
 * Class Console
 * @package console
 */
class Console extends CLImate implements ConsoleInterface
{
    /**
     * Add console option.
     *
     * @param ConsoleOption $option
     */
    public function addOption(ConsoleOption $option): void
    {
        $this->arguments->add($option->toArray());
    }

    /**
     * Returns console arguments.
     *
     * @return array
     */
    public function getArguments(): array
    {
        return $this->arguments->all();
    }
}
