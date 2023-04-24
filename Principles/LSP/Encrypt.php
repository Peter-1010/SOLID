<?php

namespace SOLID\LSP;

class Encrypt
{
    protected string $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }


    public function encryptString(): string
    {
        return md5($this->getString());
    }
}