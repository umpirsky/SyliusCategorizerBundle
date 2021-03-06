<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CategorizerBundle\Registry;

/**
 * Catalog representation interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface CatalogInterface
{
    /**
     * Get catalog alias.
     *
     * @return string
     */
    function getAlias();

    /**
     * Set alias.
     *
     * @param string $alias
     */
    function setAlias($alias);

    function getOptions();
    function setOptions(array $options);
    function getOption($key);
    function setOption($key, $value);
    function hasOption($key);
}
