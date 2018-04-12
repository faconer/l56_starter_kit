<?php

namespace Core\Services;

use Core\Repositories\BookRepositoryContract;
use Core\Services\Base\BaseService;

class BookService extends BaseService implements BookServiceContract
{
    public function __construct(BookRepositoryContract $repository)
    {
        return $this->repository = $repository;
    }
}