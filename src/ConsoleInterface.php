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
use League\CLImate\TerminalObject\Dynamic\Spinner;
use League\CLImate\Util\Reader\ReaderInterface;
use League\CLImate\TerminalObject\Helper\Sleeper;

/**
 * Interface ConsoleInterface
 * @package console

 * @method CLImate black(string $str = null)
 * @method CLImate red(string $str = null)
 * @method CLImate green(string $str = null)
 * @method CLImate yellow(string $str = null)
 * @method CLImate blue(string $str = null)
 * @method CLImate magenta(string $str = null)
 * @method CLImate cyan(string $str = null)
 * @method CLImate lightGray(string $str = null)
 * @method CLImate darkGray(string $str = null)
 * @method CLImate lightRed(string $str = null)
 * @method CLImate lightGreen(string $str = null)
 * @method CLImate lightYellow(string $str = null)
 * @method CLImate lightBlue(string $str = null)
 * @method CLImate lightMagenta(string $str = null)
 * @method CLImate lightCyan(string $str = null)
 * @method CLImate white(string $str = null)
 *
 * @method CLImate backgroundBlack(string $str = null)
 * @method CLImate backgroundRed(string $str = null)
 * @method CLImate backgroundGreen(string $str = null)
 * @method CLImate backgroundYellow(string $str = null)
 * @method CLImate backgroundBlue(string $str = null)
 * @method CLImate backgroundMagenta(string $str = null)
 * @method CLImate backgroundCyan(string $str = null)
 * @method CLImate backgroundLightGray(string $str = null)
 * @method CLImate backgroundDarkGray(string $str = null)
 * @method CLImate backgroundLightRed(string $str = null)
 * @method CLImate backgroundLightGreen(string $str = null)
 * @method CLImate backgroundLightYellow(string $str = null)
 * @method CLImate backgroundLightBlue(string $str = null)
 * @method CLImate backgroundLightMagenta(string $str = null)
 * @method CLImate backgroundLightCyan(string $str = null)
 * @method CLImate backgroundWhite(string $str = null)
 *
 * @method CLImate bold(string $str = null)
 * @method CLImate dim(string $str = null)
 * @method CLImate underline(string $str = null)
 * @method CLImate blink(string $str = null)
 * @method CLImate invert(string $str = null)
 * @method CLImate hidden(string $str = null)
 *
 * @method CLImate info(string $str = null)
 * @method CLImate comment(string $str = null)
 * @method CLImate whisper(string $str = null)
 * @method CLImate shout(string $str = null)
 * @method CLImate error(string $str = null)
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
 * @method mixed padding(integer $length = 0, string $char = '.')
 * @method mixed input(string $prompt, ReaderInterface $reader = null)
 * @method mixed confirm(string $prompt, ReaderInterface $reader = null)
 * @method mixed password(string $prompt, ReaderInterface $reader = null)
 * @method mixed checkboxes(string $prompt, array $options, ReaderInterface $reader = null)
 * @method mixed radio(string $prompt, array $options, ReaderInterface $reader = null)
 * @method mixed animation(string $art, Sleeper $sleeper = null)
 * @method mixed columns(array $data, $column_count = null)
 * @method mixed clear()
 * @method CLImate clearLine()
 *
 * @method CLImate addArt(string $dir)
 */
interface ConsoleInterface
{

}
