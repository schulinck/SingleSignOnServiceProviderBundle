<?php

namespace Krtv\Bundle\SingleSignOnServiceProviderBundle\HttpUtils;

use Symfony\Component\Security\Http\HttpUtils as HttpUtilsSF;

/**
 * Decorates the original HttpUtils and removes the cook domain security feature.
 */
class HttpUtils extends HttpUtilsSF
{
}
