<?php

namespace ControleOnline\Messages;


interface MessageInterface
{
    public function validate(): self;

    public function getOriginNumber(): int;

    public function setOriginNumber(int $origin_number): self;

    public function getDestinationNumber(): string;

    public function setDestinationNumber(string $destination_number): self;

    public function getMessageId(): string;

    public function setMessageId(string $message_id): self;

    public function getMessageContent(): ContentInterface;

    public function setMessageContent(ContentInterface $message_content): self;
}
