<?php

namespace study\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post extends Timestampable 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     * @Assert\NotBlank
     */
    private $content;

    /** 
     * @var Author 
     * 
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="posts") 
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false) 
     * @Assert\NotBlank 
     */ 
    private $author;


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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Set author
     *
     * @param \study\ModelBundle\Entity\Author $author
     *
     * @return Post
     */
    public function setAuthor(\study\ModelBundle\Entity\Author $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \study\ModelBundle\Entity\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
