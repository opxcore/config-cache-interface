<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Config\Interfaces;

use OpxCore\Config\Exceptions\ConfigCacheException;

interface ConfigCacheInterface
{
    /**
     * Load config from cache.
     *
     * @param array $config
     * @param string|null $profile
     *
     * @return  bool
     *
     * @throws  ConfigCacheException
     */
    public function load(array &$config, $profile = null): bool;

    /**
     * Save config to cache.
     *
     * @param array $config
     * @param string|null $profile
     * @param integer|null $ttl Time in seconds to cache lives, null for infinity.
     *
     * @return  bool
     *
     * @throws  ConfigCacheException
     */
    public function save(array $config, $profile = null, $ttl = null): bool;
}