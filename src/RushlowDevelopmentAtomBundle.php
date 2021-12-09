<?php

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Jesse Rushlow <jr@rushlow.dev>
 */
class RushlowDevelopmentAtomBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
//            $this->extension = new RDAtomBundleExt
        }

        return $this->extension ?: null;
    }
}
