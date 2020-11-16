<?php
namespace Models;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** 
     * @ORM\Column(type="string", options={"default": "ABC"}) 
     */
    protected $name = "ABC";

    /**
     * One page has many contents. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Content", mappedBy="product")
     */
    private $contents;

    public function __construct() {
        $this->contents = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}