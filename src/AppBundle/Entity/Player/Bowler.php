<?php

namespace AppBundle\Entity\Player;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bowler
 *
 * @ORM\Entity
 */
class Bowler extends Cricketer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bowling_average", type="integer")
     */
    private $bowlingAverage;


    /**
     * Set bowlingAverage
     *
     * @param integer $bowlingAverage
     * @return Bowler
     */
    public function setBowlingAverage($bowlingAverage)
    {
        $this->bowlingAverage = $bowlingAverage;

        return $this;
    }

    /**
     * Get bowlingAverage
     *
     * @return integer
     */
    public function getBowlingAverage()
    {
        return $this->bowlingAverage;
    }
}
