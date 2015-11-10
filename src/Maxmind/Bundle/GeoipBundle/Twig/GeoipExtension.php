<?php

/**
 * @author BRAMILLE Sébastien <contact@oktapodia.com>
 */

namespace Maxmind\Bundle\GeoipBundle\Twig;

use Maxmind\Bundle\GeoipBundle\Service\GeoipManager;

/**
 * Class GeoipExtension
 */
class GeoipExtension extends \Twig_Extension
{
    /**
     * @var GeoipManager
     */
    private $geoipManager;

    /**
     * GeoipExtension constructor.
     *
     * @param GeoipManager $geoipManager
     */
    public function __construct(GeoipManager $geoipManager)
    {
        $this->geoipManager = $geoipManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('geoip', array($this, 'geoipFilter')),
        );
    }

    /**
     * @param string $ip
     *
     * @return false|GeoipManager
     */
    public function geoipFilter($ip)
    {
        return $this->geoipManager->lookup($ip);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'geoip_extension';
    }
}
