<?php

use SOLID\LSP\Encrypt;
use SOLID\LSP\EncryptSUb;
use SOLID\LSP\LSPViolation;
use SOLID\LSP\LSPViolationType;
use SOLID\LSP\LSPViolationSubType;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$violation = new LSPViolationSubType();
$violation->setSalary(5000);
$violationExample = new LSPViolation();

//echo $violationExample->calculateSalaryToEmployee($violation, 16);

$encrypt = new EncryptSub();
$encrypt->setString('Peter');

echo $encrypt->encryptString();