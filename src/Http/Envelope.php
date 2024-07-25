<?php

declare(strict_types=1);

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Http;

use Throwable;

/**
 * Envelope
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class Envelope implements \JsonSerializable
{
    private bool $success = true;
    private string $sessionStatus = 'active';
    private ?string $message = null;
    private ?string $detail = null;

    public function __construct(
        private mixed $data = null
    ) {
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): static
    {
        $this->success = $success;

        return $this;
    }

    public function getSessionStatus(): string
    {
        return $this->sessionStatus;
    }

    public function setSessionStatus(string $session): static
    {
        $this->sessionStatus = $session;

        return $this;
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function setData(mixed $data): static
    {
        $this->data = $data;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): static
    {
        $this->detail = $detail;
        return $this;
    }

    public function exception(Throwable $e, bool $debug = false): static
    {
        $this
            ->setSuccess(false)
            ->setMessage($e->getMessage());

        if ($debug) {
            $this->setDetail("{$e->getFile()}:{$e->getLine()}\n{$e->getTraceAsString()}");
        }

        return $this;
    }

    /** @return array<string,mixed> */
    public function jsonSerialize(): array
    {
        $body = [
            'success' => $this->success,
            'sessionStatus' => $this->sessionStatus,
            'time' => time() * 1000,
        ];

        if ($this->success) {
            $body['data'] = $this->data;
        } else {
            $body['message'] = $this->message;
            if ($this->detail) {
                $body['detail'] = $this->detail;
            }
        }

        return $body;
    }
}
