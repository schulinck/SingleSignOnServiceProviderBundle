<?php

namespace Krtv\Bundle\SingleSignOnServiceProviderBundle\Twig\Extension;

use Symfony\Component\HttpKernel\UriSigner;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class VacancyProposalTrackExtension.
 */
class UrlSignerExtension extends AbstractExtension
{
    /**
     * @var UriSigner
     */
    private $signer;

    /**
     * @param UriSigner $signer
     */
    public function __construct(UriSigner $signer)
    {
        $this->signer = $signer;
    }

    /**
     * @param string $url
     * @return string
     */
    public function getSignedUrl($url)
    {
        return $this->signer->sign($url);
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('sso_url_signer', [$this, 'getSignedUrl']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sso_service_provider.url_signer';
    }
}
