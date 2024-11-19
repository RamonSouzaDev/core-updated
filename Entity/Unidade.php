<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Entity;

/**
 * Unidade de atendimento.
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class Unidade implements \JsonSerializable
{
    /**
     * @var mixed
     */
    protected $id;
    
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var bool
     */
    private $ativo;

    /**
     * @var ConfiguracaoImpressao
     */
    private $impressao;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;

    public function __construct()
    {
        $this->ativo = true;
        $this->impressao = new ConfiguracaoImpressao($this);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
    
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function isAtivo(): bool
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getImpressao()
    {
        return $this->impressao;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setDeletedAt(\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;
        
        return $this;
    }
    
    public function __toString()
    {
        return $this->getNome();
    }

    public function jsonSerialize()
    {
        return [
            'id'        => $this->getId(),
            'nome'      => $this->getNome(),
            'descricao' => $this->getDescricao(),
            'ativo'     => $this->isAtivo(),
            'impressao' => $this->getImpressao(),
            'createdAt' => $this->getCreatedAt() ? $this->getCreatedAt()->format('Y-m-d\TH:i:s') : null,
            'updatedAt' => $this->getUpdatedAt() ? $this->getUpdatedAt()->format('Y-m-d\TH:i:s') : null,
            'deletedAt' => $this->getDeletedAt() ? $this->getDeletedAt()->format('Y-m-d\TH:i:s') : null,
        ];
    }

    /**
     * @ORM\Column(name="automatic_call_enabled", type="boolean", options={"default" : false})
     */
    private $automaticCallEnabled = false;

    /**
     * @ORM\Column(name="automatic_call_interval", type="integer", options={"default" : 0})
     */
    private $automaticCallInterval = 0;

    // ... métodos existentes ...

    public function isAutomaticCallEnabled(): bool
    {
        return $this->automaticCallEnabled;
    }

    public function setAutomaticCallEnabled(bool $automaticCallEnabled): self
    {
        $this->automaticCallEnabled = $automaticCallEnabled;
        return $this;
    }

    public function getAutomaticCallInterval(): int
    {
        return $this->automaticCallInterval;
    }

    public function setAutomaticCallInterval(int $automaticCallInterval): self
    {
        $this->automaticCallInterval = $automaticCallInterval;
        return $this;
    }
}
