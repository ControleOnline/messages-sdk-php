<?php

namespace ControleOnline\Messages;


interface MessageInterface
{
    public function validate(): static;

    public function getOriginNumber(): string;

    public function setOriginNumber(string $origin_number): static;

    public function getDestinationNumber(): string;

    public function setDestinationNumber(string $destination_number): static;

    public function getMessageId(): string;

    public function setMessageId(string $message_id): static;

    public function getMessageContent(): ContentInterface;

    public function setMessageContent(ContentInterface $message_content): static;

    public function getAction(): string;

    public function setAction(string $action): static;
}
