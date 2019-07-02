<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/console
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

use Tester\Assert;
use Tester\Environment;

Environment::setup();

$option = (new ConsoleOption('example'))
    ->setDescription('Example console option.')
    ->setPrefix('-e')
    ->setLongPrefix('--example')
    ->setDefaultValue('default')
    ->setRequired();


$expected = [
    'example' => [
        'prefix' => '-e',
        'longPrefix' => '--example',
        'description' => 'Example console option.',
        'required' => true,
        'noValue' => false,
        'castTo' => 'string',
        'defaultValue' => ['default'],
    ]
];

Assert::same($expected, $option->toArray());
