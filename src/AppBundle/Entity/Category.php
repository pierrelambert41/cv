<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="php", type="string", length=255)
     */
    private $php;

    /**
     * @var string
     *
     * @ORM\Column(name="java", type="string", length=255)
     */
    private $java;

    /**
     * @var string
     *
     * @ORM\Column(name="wordpress", type="string", length=255)
     */
    private $wordpress;

    /**
     * @var string
     *
     * @ORM\Column(name="graphism", type="string", length=255)
     */
    private $graphism;


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
     * Set php
     *
     * @param string $php
     *
     * @return Category
     */
    public function setPhp($php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * Get php
     *
     * @return string
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * Set java
     *
     * @param string $java
     *
     * @return Category
     */
    public function setJava($java)
    {
        $this->java = $java;

        return $this;
    }

    /**
     * Get java
     *
     * @return string
     */
    public function getJava()
    {
        return $this->java;
    }

    /**
     * Set wordpress
     *
     * @param string $wordpress
     *
     * @return Category
     */
    public function setWordpress($wordpress)
    {
        $this->wordpress = $wordpress;

        return $this;
    }

    /**
     * Get wordpress
     *
     * @return string
     */
    public function getWordpress()
    {
        return $this->wordpress;
    }

    /**
     * Set graphism
     *
     * @param string $graphism
     *
     * @return Category
     */
    public function setGraphism($graphism)
    {
        $this->graphism = $graphism;

        return $this;
    }

    /**
     * Get graphism
     *
     * @return string
     */
    public function getGraphism()
    {
        return $this->graphism;
    }
}

