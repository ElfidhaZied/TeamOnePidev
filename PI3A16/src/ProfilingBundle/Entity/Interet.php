<?php

namespace ProfilingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;

/**
 * Interet
 *
 * @ORM\Table(name="interet")
 * @ORM\Entity(repositoryClass="ProfilingBundle\Repository\InteretRepository")
 */
class Interet
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
     * @ORM\Column(name="souscategorie", type="string", length=255)
     */
    private $souscategorie;


    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text", length=255)
     */
    private $description;




    /**
     * @ORM\ManyToOne(targetEntity="ProfilingBundle\Entity\CategorieInteret")
     * @ORM\JoinColumn(name="categorieid", referencedColumnName="id")
     */
    private $categorie;



    /**
     * Many interests have Many users
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User",inversedBy="interet")
     */
    private $user;
    public function _construct(){
          $this->user = new ArrayCollection();
            }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }





    /**
     * Set souscategorie
     *
     * @param string $souscategorie
     *
     * @return Interet
     */
    public function setSouscategorie($souscategorie)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return string
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set categorie
     *
     * @param \ProfilingBundle\Entity\CategorieInteret $categorie
     *
     * @return Interet
     */
    public function setCategorie(\ProfilingBundle\Entity\CategorieInteret $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \ProfilingBundle\Entity\CategorieInteret
     */
    public function getCategorie()
    {
        return $this->categorie;
    }



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Interet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Interet
     */
    public function addUser(\UserBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \UserBundle\Entity\User $user
     */
    public function removeUser(\UserBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
