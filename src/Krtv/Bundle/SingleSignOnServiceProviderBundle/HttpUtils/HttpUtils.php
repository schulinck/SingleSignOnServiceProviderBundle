<?php

namespace Krtv\Bundle\SingleSignOnServiceProviderBundle\HttpUtils;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\HttpUtils as HttpUtilsSF;

/**
 * Decorates the original HttpUtils and removes the cook domain security feature.
 */
class HttpUtils extends HttpUtilsSF
{
	/**
	 * @inheritdoc
	 */
	public function createRedirectResponse(Request $request, $path, $status = 302)
	{
		return new RedirectResponse($this->generateUri($request, $path), $status);
	}
}
