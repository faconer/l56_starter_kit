<?php

namespace App\Http\Controllers\Admin;

use Core\Requests\CreateBookRequest;
use Core\Requests\EditBookRequest;
use Core\Services\BookServiceContract;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    protected $service;
    public function __construct(BookServiceContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('books.index', compact("items"));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(CreateBookRequest $request)
    {
        $this->service->store($request->all());
        flash('Book created!')->success();
        return redirect()->route('books.index');
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('books.show', compact('item'));
    }

    public function edit($id)
    {
        $item = $this->service->find($id);
        return view('books.edit', compact('item'));
    }

    public function update(EditBookRequest $request, $id)
    {
        $this->service->update($id, $request->all());
        flash('Book updated!')->success();
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        flash('Book deleted!')->important();
        return redirect()->route('books.index');
    }

}
