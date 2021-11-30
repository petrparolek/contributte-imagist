<?php declare(strict_types = 1);

namespace Contributte\Imagist\Remover;

use Contributte\Imagist\Entity\PersistentImageInterface;
use Contributte\Imagist\Filter\Context\ContextInterface;

interface RemoverRegistryInterface
{

	public function add(RemoverInterface $remover): void;

	public function remove(PersistentImageInterface $image, ContextInterface $context): void;

}
