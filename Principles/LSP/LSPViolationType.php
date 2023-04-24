<?php

namespace SOLID\LSP;

class LSPViolationType
{
    protected float $salary;

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function calculateSalary(int $tax): float
    {
        if ($tax <= 10) {
            echo 'Sorry the tax must be more than 10%';
        }
        return $this->getSalary() - ($this->getSalary() * $tax / 100);
    }
}