<?php
/**
 * @link https://github.com/yii2tech
 * @copyright Copyright (c) 2019 Yii2tech
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace yii2tech\sitemap;

use yii\base\Exception;

/**
 * LimitReachedException indicates sitemap file reached its size limit.
 *
 * @see File
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 1.1.0
 */
class LimitReachedException extends Exception
{
}
