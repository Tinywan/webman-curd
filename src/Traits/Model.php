<?php

/**
 * @desc 基础 Model
 * @author Tinywan(ShaoBo Wan)
 * @date 2022/03/18 16:55
 */

declare(strict_types=1);

namespace Tinywan\Curd\Traits;

trait Model
{
    public function __init(array $data = [], bool $queryRelation = true): void
    {
        parent::__init($data);
    }

    public function onBeforeInsert($data)
    {
        $data->data->create_time = time();
    }

    public function onBeforeUpdate($data)
    {
        $data->data->update_time = time();
    }

    public function onBeforeSave($data)
    {
        $data->data->update_time = time();
    }
}
