<?php

namespace ControleOnline\Messages;

interface ContentInterface
{
    public function getMediaType(): string;
    public function setMediaType(string $mediaType): self;
    public function getBody(): string;
    public function setBody(string $body): self;
    public function getMedia(): ?MediaInterface;
    public function setMedia(MediaInterface $media): self;
}
