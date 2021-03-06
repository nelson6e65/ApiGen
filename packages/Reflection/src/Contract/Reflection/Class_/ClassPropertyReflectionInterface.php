<?php declare(strict_types=1);

namespace ApiGen\Reflection\Contract\Reflection\Class_;

use ApiGen\Reflection\Contract\Reflection\Interface_\InterfaceReflectionInterface;
use ApiGen\Reflection\Contract\Reflection\Partial\AnnotationsInterface;
use ApiGen\Reflection\Contract\Reflection\Partial\StartAndEndLineInterface;

interface ClassPropertyReflectionInterface extends AbstractClassElementInterface, StartAndEndLineInterface,
    AnnotationsInterface
{
    public function isDefault(): bool;

    public function isStatic(): bool;

    /**
     * @return mixed
     */
    public function getDefaultValue();

    public function getTypeHint(): string;

    public function getNamespaceName(): string;

    public function getName(): string;

    public function isDeprecated(): bool;

    /**
     * @return ClassReflectionInterface|InterfaceReflectionInterface|null
     */
    public function getTypeHintClassOrInterfaceReflection();
}
