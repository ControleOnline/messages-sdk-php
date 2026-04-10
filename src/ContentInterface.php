<?php

namespace ControleOnline\Messages;

interface ContentInterface
{
    public function getMediaType(): string;
    public function setMediaType(string $mediaType): static;
    public function getBody(): string;
    public function setBody(string $body): static;
    public function getMedia(): ?MediaInterface;
    public function setMedia(MediaInterface $media): static;
}
