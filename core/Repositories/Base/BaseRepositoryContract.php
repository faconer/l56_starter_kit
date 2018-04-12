<?php

namespace Core\Repositories\Base;

interface BaseRepositoryContract
{
    public function paginate();
    public function find($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}