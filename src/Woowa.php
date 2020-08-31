<?php
/**
 * This file is part of the Woowa Package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */

// ------------------------------------------------------------------------

namespace Steevenz;

// ------------------------------------------------------------------------

use O2System\Curl;
use O2System\Kernel\Http\Message\Uri;
use O2System\Spl\Traits\Collectors\ConfigCollectorTrait;
use O2System\Spl\Traits\Collectors\ErrorCollectorTrait;

/**
 * Class Woowa
 */
class Woowa
{
    use ConfigCollectorTrait;
    use ErrorCollectorTrait;

    /**
     * Woowa::$response
     *
     * Woowa original response.
     *
     * @access  protected
     * @type    mixed
     */
    protected $response;

    // ------------------------------------------------------------------------

    /**
     * Woowa::__construct
     *
     * @param array $config
     *
     * @access  public
     */
    public function __construct(array $config = [])
    {

        $this->setConfig(array_merge($defaultConfig, $config));
    }
    // ------------------------------------------------------------------------
}