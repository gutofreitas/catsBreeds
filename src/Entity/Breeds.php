<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BreedsRepository")
 */
class Breeds
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $temperament;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $life_span;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alt_names;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wikipedia_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origin;

    /**
     * @ORM\Column(type="json")
     */
    private $weight;

    /**
     * @ORM\Column(type="integer")
     */
    private $experimental;

    /**
     * @ORM\Column(type="integer")
     */
    private $hairless;

    /**
     * @ORM\Column(type="integer")
     */
    private $natural_colum;

    /**
     * @ORM\Column(type="integer")
     */
    private $rare;

    /**
     * @ORM\Column(type="integer")
     */
    private $rex;

    /**
     * @ORM\Column(type="integer")
     */
    private $supperess_tail;

    /**
     * @ORM\Column(type="integer")
     */
    private $short_legs;

    /**
     * @ORM\Column(type="integer")
     */
    private $hypoallergenic;

    /**
     * @ORM\Column(type="integer")
     */
    private $adaptability;

    /**
     * @ORM\Column(type="integer")
     */
    private $affection_level;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $child_friendly;

    /**
     * @ORM\Column(type="integer")
     */
    private $energy_level;


    /**
     * @ORM\Column(type="integer")
     */
    private $grooming;

    /**
     * @ORM\Column(type="integer")
     */
    private $health_issues;

    /**
     * @ORM\Column(type="integer")
     */
    private $intelligence;

    /**
     * @ORM\Column(type="integer")
     */
    private $shedding_level;

    /**
     * @ORM\Column(type="integer")
     */
    private $social_needs;

    /**
     * @ORM\Column(type="integer")
     */
    private $stranger_friendly;

    /**
     * @ORM\Column(type="integer")
     */
    private $vocalisation;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $cfa_url;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $vetstreet_url;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $vcahospitals_url;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $country_codes;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $indoor;

    /**
     * @ORM\Column(type="integer")
     */
    private $lap;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTemperament()
    {
        return $this->temperament;
    }

    /**
     * @param mixed $temperament
     */
    public function setTemperament($temperament): void
    {
        $this->temperament = $temperament;
    }

    /**
     * @return mixed
     */
    public function getLifeSpan()
    {
        return $this->life_span;
    }

    /**
     * @param mixed $life_span
     */
    public function setLifeSpan($life_span): void
    {
        $this->life_span = $life_span;
    }



    /**
     * @return mixed
     */
    public function getAltNames()
    {
        return $this->alt_names;
    }

    /**
     * @param mixed $alt_names
     */
    public function setAltNames($alt_names): void
    {
        $this->alt_names = $alt_names;
    }

    /**
     * @return mixed
     */
    public function getWikipediaUrl()
    {
        return $this->wikipedia_url;
    }

    /**
     * @param mixed $wikipedia_url
     */
    public function setWikipediaUrl($wikipedia_url): void
    {
        $this->wikipedia_url = $wikipedia_url;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * @param mixed $experimental
     */
    public function setExperimental($experimental): void
    {
        $this->experimental = $experimental;
    }

    /**
     * @return mixed
     */
    public function getHairless()
    {
        return $this->hairless;
    }

    /**
     * @param mixed $hairless
     */
    public function setHairless($hairless): void
    {
        $this->hairless = $hairless;
    }

    /**
     * @return mixed
     */
    public function getNaturalColum()
    {
        return $this->natural_colum;
    }

    /**
     * @param mixed $natural_colum
     */
    public function setNaturalColum($natural_colum): void
    {
        $this->natural_colum = $natural_colum;
    }


    /**
     * @return mixed
     */
    public function getRare()
    {
        return $this->rare;
    }

    /**
     * @param mixed $rare
     */
    public function setRare($rare): void
    {
        $this->rare = $rare;
    }

    /**
     * @return mixed
     */
    public function getRex()
    {
        return $this->rex;
    }

    /**
     * @param mixed $rex
     */
    public function setRex($rex): void
    {
        $this->rex = $rex;
    }

    /**
     * @return mixed
     */
    public function getSupperessTail()
    {
        return $this->supperess_tail;
    }

    /**
     * @param mixed $supperess_tail
     */
    public function setSupperessTail($supperess_tail): void
    {
        $this->supperess_tail = $supperess_tail;
    }

    /**
     * @return mixed
     */
    public function getShortLegs()
    {
        return $this->short_legs;
    }

    /**
     * @param mixed $short_legs
     */
    public function setShortLegs($short_legs): void
    {
        $this->short_legs = $short_legs;
    }

    /**
     * @return mixed
     */
    public function getHypoallergenic()
    {
        return $this->hypoallergenic;
    }

    /**
     * @param mixed $hypoallergenic
     */
    public function setHypoallergenic($hypoallergenic): void
    {
        $this->hypoallergenic = $hypoallergenic;
    }

    /**
     * @return mixed
     */
    public function getAdaptability()
    {
        return $this->adaptability;
    }

    /**
     * @param mixed $adaptability
     */
    public function setAdaptability($adaptability): void
    {
        $this->adaptability = $adaptability;
    }

    /**
     * @return mixed
     */
    public function getAffectionLevel()
    {
        return $this->affection_level;
    }

    /**
     * @param mixed $affection_level
     */
    public function setAffectionLevel($affection_level): void
    {
        $this->affection_level = $affection_level;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code): void
    {
        $this->country_code = $country_code;
    }

    /**
     * @return mixed
     */
    public function getChildFriendly()
    {
        return $this->child_friendly;
    }

    /**
     * @param mixed $child_friendly
     */
    public function setChildFriendly($child_friendly): void
    {
        $this->child_friendly = $child_friendly;
    }

    /**
     * @return mixed
     */
    public function getEnergyLevel()
    {
        return $this->energy_level;
    }

    /**
     * @param mixed $energy_level
     */
    public function setEnergyLevel($energy_level): void
    {
        $this->energy_level = $energy_level;
    }

    /**
     * @return mixed
     */
    public function getGrooming()
    {
        return $this->grooming;
    }

    /**
     * @param mixed $grooming
     */
    public function setGrooming($grooming): void
    {
        $this->grooming = $grooming;
    }

    /**
     * @return mixed
     */
    public function getHealthIssues()
    {
        return $this->health_issues;
    }

    /**
     * @param mixed $health_issues
     */
    public function setHealthIssues($health_issues): void
    {
        $this->health_issues = $health_issues;
    }

    /**
     * @return mixed
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * @return mixed
     */
    public function getSheddingLevel()
    {
        return $this->shedding_level;
    }

    /**
     * @param mixed $intelligence
     */
    public function setIntelligence($intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @param mixed $shedding_level
     */
    public function setSheddingLevel($shedding_level): void
    {
        $this->shedding_level = $shedding_level;
    }

    /**
     * @return mixed
     */
    public function getSocialNeeds()
    {
        return $this->social_needs;
    }

    /**
     * @param mixed $social_needs
     */
    public function setSocialNeeds($social_needs): void
    {
        $this->social_needs = $social_needs;
    }

    /**
     * @return mixed
     */
    public function getStrangerFriendly()
    {
        return $this->stranger_friendly;
    }

    /**
     * @param mixed $stranger_friendly
     */
    public function setStrangerFriendly($stranger_friendly): void
    {
        $this->stranger_friendly = $stranger_friendly;
    }

    /**
     * @return mixed
     */
    public function getVocalisation()
    {
        return $this->vocalisation;
    }

    /**
     * @param mixed $vocalisation
     */
    public function setVocalisation($vocalisation): void
    {
        $this->vocalisation = $vocalisation;
    }

    /**
     * @return mixed
     */
    public function getCfaUrl()
    {
        return $this->cfa_url;
    }

    /**
     * @param mixed $cfa_url
     */
    public function setCfaUrl($cfa_url): void
    {
        $this->cfa_url = $cfa_url;
    }

    /**
     * @return mixed
     */
    public function getVetstreetUrl()
    {
        return $this->vetstreet_url;
    }

    /**
     * @param mixed $vetstreet_url
     */
    public function setVetstreetUrl($vetstreet_url): void
    {
        $this->vetstreet_url = $vetstreet_url;
    }

    /**
     * @return mixed
     */
    public function getVcahospitalsUrl()
    {
        return $this->vcahospitals_url;
    }

    /**
     * @param mixed $vcahospitals_url
     */
    public function setVcahospitalsUrl($vcahospitals_url): void
    {
        $this->vcahospitals_url = $vcahospitals_url;
    }

    /**
     * @return mixed
     */
    public function getCountryCodes()
    {
        return $this->country_codes;
    }

    /**
     * @param mixed $country_codes
     */
    public function setCountryCodes($country_codes): void
    {
        $this->country_codes = $country_codes;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIndoor()
    {
        return $this->indoor;
    }

    /**
     * @param mixed $indoor
     */
    public function setIndoor($indoor): void
    {
        $this->indoor = $indoor;
    }

    /**
     * @return mixed
     */
    public function getLap()
    {
        return $this->lap;
    }

    /**
     * @param mixed $lap
     */
    public function setLap($lap): void
    {
        $this->lap = $lap;
    }



}
