<?php

namespace SOLID\LSP;

class EncryptSub extends Encrypt
{
    public function encryptString(): string
    {
        return sha1($this->getString());
    }
}