<?php
/**
 * Shop System SDK - Terms of Use
 *
 * The SDK offered are provided free of charge by Wirecard AG and are explicitly not part
 * of the Wirecard AG range of products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 3 (GPLv3) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard AG does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the SDK at their own risk. Wirecard AG does not guarantee their full
 * functionality neither does Wirecard AG assume liability for any disadvantages related to
 * the use of the SDK. Additionally, Wirecard AG does not guarantee the full functionality
 * for customized shop systems or installed SDK of other vendors of SDK within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

namespace Wirecard\PaymentSdk\Constant;

use MyCLabs\Enum\Enum;

/**
 * Class DeliveryTimeFrame
 * Contains possible delivery time frames for credit card 3DS 2.X
 * Used to identify delivery time frames
 * @package Wirecard\PaymentSdk\Entity
 * @since 3.7.0
 */
class RiskInfoDeliveryTimeFrame extends Enum
{
    /** @var string Electronic delivery */
    const ELECTRONIC_DELIVERY      = '01';
    /** @var string Same day shipping */
    const SAME_DAY_SHIPPING        = '02';
    /** @var string Overnight shipping */
    const OVERNIGHT_SHIPPING       = '03';
    /** @var string Two day or more shipping */
    const TWO_DAY_OR_MORE_SHIPPING = '04';
}
