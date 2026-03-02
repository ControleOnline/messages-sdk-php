<?php

namespace ControleOnline\Messages;

interface MediaInterface
{

    public function getType(): string;

    public function setType(string $type): static;

    public function getData(): array;

    public function setData(array $data): static;
}
