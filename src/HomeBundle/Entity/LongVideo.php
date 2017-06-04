<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LongVideo
 *
 * @ORM\Table(name="long_video")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\LongVideoRepository")
 */
class LongVideo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="longVideo", type="string", length=255)
     */
    private $longVideo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set longVideo
     *
     * @param string $longVideo
     * @return LongVideo
     */
    public function setLongVideo($longVideo)
    {
        $this->longVideo = $longVideo;

        return $this;
    }

    /**
     * Get longVideo
     *
     * @return string 
     */
    public function getLongVideo()
    {
        return $this->longVideo;
    }
}
