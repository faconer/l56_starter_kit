<?php
namespace Core\Repositories;

use Core\Models\Book;
use Core\Repositories\Base\BaseRepository;

class BookRepository extends BaseRepository implements BookRepositoryContract
{
    public function __construct(Book $model)
    {
        $this->model = $model;
    }

}