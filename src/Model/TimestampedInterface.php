<?php

namespace App\Model;

use PhpParser\Builder\Interface_;

interface TimestampedInterface
{
    public function getCreatedAt(): ?\DateTimeImmutable;
    public function setCreatedAt(\DateTimeImmutable $createdAt);
    public function getUpdatedAt(): ?\DateTimeImmutable;
    public function setUpdatedAt(\DateTimeImmutable $updatedAt);
}
