<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_test", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTest;



    /**
     * Get idTest
     *
     * @return integer
     */
    public function getIdTest()
    {
        return $this->idTest;
    }
}
