<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartenaireRepository")
 * @Vich\Uploadable
 */
class Partenaire
{

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */

    private $image;

    /**
     * @Vich\UploadableField(mapping="article_images", fileNameProperty="image")
     * @var File
     */



    private $imageFile;



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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="lienFaceBook", type="string", length=255, nullable=true)
     */
    private $lienFaceBook;

    /**
     * @var string
     *
     * @ORM\Column(name="lienSiteWeb", type="string", length=255, nullable=true)
     */
    private $lienSiteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="lienTwitter", type="string", length=255, nullable=true)
     */
    private $lienTwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;





    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Partenaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set lienFaceBook
     *
     * @param string $lienFaceBook
     *
     * @return Partenaire
     */
    public function setLienFaceBook($lienFaceBook)
    {
        $this->lienFaceBook = $lienFaceBook;

        return $this;
    }

    /**
     * Get lienFaceBook
     *
     * @return string
     */
    public function getLienFaceBook()
    {
        return $this->lienFaceBook;
    }

    /**
     * Set lienSiteWeb
     *
     * @param string $lienSiteWeb
     *
     * @return Partenaire
     */
    public function setLienSiteWeb($lienSiteWeb)
    {
        $this->lienSiteWeb = $lienSiteWeb;

        return $this;
    }

    /**
     * Get lienSiteWeb
     *
     * @return string
     */
    public function getLienSiteWeb()
    {
        return $this->lienSiteWeb;
    }

    /**
     * Set lienTwitter
     *
     * @param string $lienTwitter
     *
     * @return Partenaire
     */
    public function setLienTwitter($lienTwitter)
    {
        $this->lienTwitter = $lienTwitter;

        return $this;
    }

    /**
     * Get lienTwitter
     *
     * @return string
     */
    public function getLienTwitter()
    {
        return $this->lienTwitter;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Partenaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

