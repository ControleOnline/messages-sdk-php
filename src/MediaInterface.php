<?php

namespace ControleOnline\Messages;

interface MediaInterface
{

    public function getType(): string;

    public function setType(string $type): self;

    public function getData(): array;

    public function setData(array $data): self;
}
