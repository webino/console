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

use League\CLImate\TerminalObject\Dynamic\Padding;
use League\CLImate\TerminalObject\Dynamic\Spinner;
use League\CLImate\TerminalObject\Helper\Sleeper;
use League\CLImate\Util\Reader\ReaderInterface;

/**
 * Interface ConsoleInterface
 * @package console

 * @method Console black(string $str = null)
 * @method Console red(string $str = null)
 * @method Console green(string $str = null)
 * @method Console yellow(string $str = null)
 * @method Console blue(string $str = null)
 * @method Console magenta(string $str = null)
 * @method Console cyan(string $str = null)
 * @method Console lightGray(string $str = null)
 * @method Console darkGray(string $str = null)
 * @method Console lightRed(string $str = null)
 * @method Console lightGreen(string $str = null)
 * @method Console lightYellow(string $str = null)
 * @method Console lightBlue(string $str = null)
 * @method Console lightMagenta(string $str = null)
 * @method Console lightCyan(string $str = null)
 * @method Console white(string $str = null)
 *
 * @method Console backgroundBlack(string $str = null)
 * @method Console backgroundRed(string $str = null)
 * @method Console backgroundGreen(string $str = null)
 * @method Console backgroundYellow(string $str = null)
 * @method Console backgroundBlue(string $str = null)
 * @method Console backgroundMagenta(string $str = null)
 * @method Console backgroundCyan(string $str = null)
 * @method Console backgroundLightGray(string $str = null)
 * @method Console backgroundDarkGray(string $str = null)
 * @method Console backgroundLightRed(string $str = null)
 * @method Console backgroundLightGreen(string $str = null)
 * @method Console backgroundLightYellow(string $str = null)
 * @method Console backgroundLightBlue(string $str = null)
 * @method Console backgroundLightMagenta(string $str = null)
 * @method Console backgroundLightCyan(string $str = null)
 * @method Console backgroundWhite(string $str = null)
 *
 * @method Console bold(string $str = null)
 * @method Console dim(string $str = null)
 * @method Console underline(string $str = null)
 * @method Console blink(string $str = null)
 * @method Console invert(string $str = null)
 * @method Console hidden(string $str = null)
 *
 * @method Console info(string $str = null)
 * @method Console comment(string $str = null)
 * @method Console whisper(string $str = null)
 * @method Console shout(string $str = null)
 * @method Console error(string $str = null)
 *
 * @method mixed out(string $str)
 * @method mixed inline(string $str)
 * @method mixed table(array $data)
 * @method mixed json(mixed $var)
 * @method mixed br($count = 1)
 * @method mixed tab($count = 1)
 * @method mixed draw(string $art)
 * @method mixed border(string $char = null, integer $length = null)
 * @method mixed dump(mixed $var)
 * @method mixed flank(string $output, string $char = null, integer $length = null)
 * @method mixed progress(integer $total = null)
 * @method Spinner spinner(string $label = null, string ...$characters = null)
 * @method Padding padding(integer $length = 0, string $char = '.')
 * @method mixed input(string $prompt, ReaderInterface $reader = null)
 * @method mixed confirm(string $prompt, ReaderInterface $reader = null)
 * @method mixed password(string $prompt, ReaderInterface $reader = null)
 * @method mixed checkboxes(string $prompt, array $options, ReaderInterface $reader = null)
 * @method mixed radio(string $prompt, array $options, ReaderInterface $reader = null)
 * @method mixed animation(string $art, Sleeper $sleeper = null)
 * @method mixed columns(array $data, $column_count = null)
 * @method mixed clear()
 * @method Console clearLine()
 *
 * @method Console addArt(string $dir)
 */
interface ConsoleInterface
{
    /**
     * Add console option.
     *
     * @param ConsoleOption $option
     */
    public function addOption(ConsoleOption $option): void;

    /**
     * Returns console arguments.
     *
     * @return array
     */
    public function getArguments(): array;
}
