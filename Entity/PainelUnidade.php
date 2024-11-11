<?php

namespace Novosga\Entity;

use DateTime;

/**
 * PainelUnidade
 */
class PainelUnidade
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Unidade
     */
    private $unidade;

    /**
     * @var string|null
     */
    private $selectedLayout;

    /**
     * @var string|null
     */
    private $texto;

    /**
     * @var string|null
     */
    private $descricao;

    /**
     * @var string|null
     */
    private $footer;

    /**
     * @var string|null
     */
    private $videoUrl;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var DateTime|null
     */
    private $updatedAt;

    /**
     * @var DateTime|null
     */
    private $deletedAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Unidade|null
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * @param Unidade|null $unidade
     * @return PainelUnidade
     */
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param string|null $texto
     * @return PainelUnidade
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param string|null $descricao
     * @return PainelUnidade
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param string|null $footer
     * @return PainelUnidade
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param string|null $videoUrl
     * @return PainelUnidade
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

     /**
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     * @return PainelUnidade
     */
    public function setImage($image)
    {
        $this->image = $image; // A imagem deve ser uma string (os dados da imagem em formato binário)
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return PainelUnidade
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     * @return PainelUnidade
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param DateTime|null $deletedAt
     * @return PainelUnidade
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }

    public function getSelectedLayout(): ?string
    {
        return $this->selectedLayout;
    }

    public function setSelectedLayout(?string $selectedLayout): self
    {
        $this->selectedLayout = $selectedLayout;
        return $this;
    }
}