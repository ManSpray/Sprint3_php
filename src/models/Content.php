<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="contents")
 */
class Content
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $contents;

    /**
     * Many contents have one page. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="contents")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $page;

    public function getContents()
    {
        return $this->contents;
    }
    public function setContents($contents)
    {
        $this->name = $contents;
    }
}