<?php

declare(strict_types=1);

namespace Silenzion\Prometheus\Contracts;

interface ResourceInterface
{
    /**
     * @param array $data
     * @param array $locales
     * @return void
     */
    public function create(array $data, array $locales = []): void;

    /**
     * @param int $id
     * @param array $data
     * @param array $locales
     * @return void
     */
    public function update(int $id, array $data, array $locales = []): void;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;

    /**
     * @param int $id
     * @return void
     */
    public function restore(int $id): void;

    /**
     * @param int $id
     * @return void
     */
    public function forceDelete(int $id): void;
}
