<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembreRepository")
 * @Vich\Uploadable
 */
class Membre
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
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="membre_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;



    /**
     * @var string
     *
     * @ORM\Column(name="lienFb", type="string", length=255, nullable=true, unique=true)
     */
    private $lienFb;

    /**
     * @var string
     *
     * @ORM\Column(name="lienTwitter", type="string", length=255, nullable=true, unique=true)
     */
    private $lienTwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="lienYoutube", type="string", length=255, nullable=true, unique=true)
     */
    private $lienYoutube;

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
     * @return Membre
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Membre
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Membre
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



    /**
     * Set lienFb
     *
     * @param string $lienFb
     *
     * @return Membre
     */
    public function setLienFb($lienFb)
    {
        $this->lienFb = $lienFb;

        return $this;
    }

    /**
     * Get lienFb
     *
     * @return string
     */
    public function getLienFb()
    {
        return $this->lienFb;
    }

    /**
     * Set lienTwitter
     *
     * @param string $lienTwitter
     *
     * @return Membre
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
     * Set lienYoutube
     *
     * @param string $lienYoutube
     *
     * @return Membre
     */
    public function setLienYoutube($lienYoutube)
    {
        $this->lienYoutube = $lienYoutube;

        return $this;
    }

    /**
     * Get lienYoutube
     *
     * @return string
     */
    public function getLienYoutube()
    {
        return $this->lienYoutube;
    }
}

