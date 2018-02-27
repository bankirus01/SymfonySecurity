<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\IpTraceable\Traits\IpTraceableEntity;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
{

    /**
     * Hook ip-traceable behavior
     * updates createdFromIp, updatedFromIp fields
     */
    use IpTraceableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @var datetime $contentChangedFromIp
     *
     * @ORM\Column(name="content_changed_by", type="string", nullable=true, length=45)
     * @Gedmo\IpTraceable(on="change", field={"id", "name", "description", "created_at"})
     */
    private $contentChangedFromIp;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function setName($name)
    {
        $this->name = $name;
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
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getContentChangedFromIp(): string
    {
        return (string) $this->contentChangedFromIp;
    }
}