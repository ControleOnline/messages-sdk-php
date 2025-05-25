<?php

namespace ControleOnline\Messages;

interface ProfileInterface
{
    public function getPhoneNumber(): string;
    public function setPhoneNumber(string $phone_number): self;
    public function getPhoto(): string;
    public function setPhoto(string $photo): self;
}
