<?php

namespace AppBundle\Entity\Player;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cricketer
 *
 * @ORM\Entity
 */
class Cricketer extends Player
{
    /**
     * @var integer
     *
     * @ORM\Column(name="batting_average", type="integer")
     */
    private $battingAverage;


    /**
     * Set battingAverage
     *
     * @param integer $battingAverage
     * @return Cricketer
     */
    public function setBattingAverage($battingAverage)
    {
        $this->battingAverage = $battingAverage;

        return $this;
    }

    /**
     * Get battingAverage
     *
     * @return integer
     */
    public function getBattingAverage()
    {
        return $this->battingAverage;
    }
}
