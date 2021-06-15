<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;    // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $r_social;  // private
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $s_activite; // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $c_affaire;  // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $n_employes; // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $description;    // private

    /**
     * @ORM\Column(type="string", length=800, nullable=true)
     */
    public $tel;    // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $mail;   // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $adresse;    // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $ville;  // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $departement;    // private

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $c_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageFilename;   // private

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRSocial(): ?string
    {
        return $this->r_social;
    }

    public function setRSocial(?string $r_social): self
    {
        $this->r_social = $r_social;

        return $this;
    }

    public function getSActivite(): ?string
    {
        return $this->s_activite;
    }

    public function setSActivite(?string $s_activite): self
    {
        $this->s_activite = $s_activite;

        return $this;
    }

    public function getCAffaire(): ?string
    {
        return $this->c_affaire;
    }

    public function setCAffaire(?string $c_affaire): self
    {
        $this->c_affaire = $c_affaire;

        return $this;
    }

    public function getNEmployes(): ?string
    {
        return $this->n_employes;
    }

    public function setNEmployes(?string $n_employes): self
    {
        $this->n_employes = $n_employes;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getCPostal(): ?string
    {
        return $this->c_postal;
    }

    public function setCPostal(?string $c_postal): self
    {
        $this->c_postal = $c_postal;

        return $this;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(string $imageFilename): self
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

}
