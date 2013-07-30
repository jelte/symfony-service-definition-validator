<?php

namespace Matthias\SymfonyServiceDefinitionValidator\Tests\Fixtures;

use Matthias\SymfonyServiceDefinitionValidator\Exception\DefinitionValidationExceptionInterface;

class InvalidServiceDefinitionException extends \InvalidArgumentException implements DefinitionValidationExceptionInterface
{
}