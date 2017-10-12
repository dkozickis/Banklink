<?php
/**
 * RKD Banklink.
 *
 * @link https://github.com/renekorss/Banklink/
 *
 * @author Rene Korss <rene.korss@gmail.com>
 * @copyright 2016-2017 Rene Korss
 * @license MIT
 */
namespace RKD\Banklink;

use RKD\Banklink\Protocol\IPizza;

/**
 * Banklink settings for Luminor.
 *
 * For more information, please visit:
 * http://www.nordea.ee/Corporate%20customers/Daily%20banking/Collection%20of%20payment/E-payment/798312.html
 *
 * @author  Rene Korss <rene.korss@gmail.com>
 */

class Luminor extends Nordea
{
    /**
     * Force Luminor class to use IPizza protocol.
     *
     * @param RKD\Banklink\Protocol\IPizza $protocol   Protocol used
     */
    public function __construct(IPizza $protocol)
    {
        parent::__construct($protocol);
    }
}