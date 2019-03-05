<?php
/**
 * This file is part of the leanphp/phpspec-code-coverage package
 *
 * @author shulard <s.hulard@chstudio.fr>
 *
 * @license MIT
 *
 * For the full copyright and license information, please see the LICENSE file
 * that was distributed with this source code.
 *
 */
namespace LeanPHP\PhpSpec\CodeCoverage\Exception;

use \RuntimeException;

/**
 * When PHPUnit/CodeCoverage trigger an exception which says that's no driver
 * can be found, we catch it to decorate with our own.
 *
 * @author Stéphane Hulard
 */
class NoCoverageDriverAvailableException extends RuntimeException
{
}
