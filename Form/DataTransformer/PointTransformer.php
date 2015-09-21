<?php

namespace Looptribe\FormSpatialBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use CrEOF\Spatial\PHP\Types\Geometry\Point;

class PointTransformer implements DataTransformerInterface
{
    /**
     * Transforms a Point to a string "lat lng".
     *
     * @param  Point|null $point
     * @return string
     */
    public function transform($point)
    {
        if (null === $point) {
            return '';
        }

        return implode(' ', array($point->getLatitude(), $point->getLongitude()));
    }

    /**
     * Transforms a string "lat lng" to a Point.
     *
     * @param  string $number
     *
     * @return Point|null
     */
    public function reverseTransform($string)
    {
        if (!$string) {
            return null;
        }

        list($lat, $lng) = explode(' ', $string, 2);
        
        return new Point($lng, $lat);
    }
}