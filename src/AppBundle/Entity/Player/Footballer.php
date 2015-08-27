<?php

namespace AppBundle\Entity\Player;

use Doctrine\ORM\Mapping as ORM;

/**
 * Footballer
 *
 * @ORM\Entity
 */
class Footballer extends Player
{
    /**
     * @var string
     *
     * @ORM\Column(name="club", type="string", length=255)
     */
    private $club;


    /**
     * Set club
     *
     * @param string $club
     * @return AmericanFootballer
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return string
     */
    public function getClub()
    {
        return $this->club;
    }
}
