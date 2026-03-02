<?php

namespace ControleOnline\Messages;

interface ProfileInterface
{
    public function getPhoneNumber(): string;
    public function setPhoneNumber(string $phone_number): static;
    public function getPhoto(): string;
    public function setPhoto(string $photo): static;
}
