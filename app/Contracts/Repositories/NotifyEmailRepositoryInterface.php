<?php

namespace REBELinBLUE\Deployer\Contracts\Repositories;

interface NotifyEmailRepositoryInterface
{
    public function create(array $fields);
    public function updateById(array $fields, $model_id);
    public function deleteById($model_id);
}
