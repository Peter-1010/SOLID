<?php

namespace SOLID\LSP;

class LSPViolation
{
    public function calculateSalaryToEmployee(LSPViolationType $type, int $tax): float
    {
        return $type->calculateSalary($tax);
    }
}