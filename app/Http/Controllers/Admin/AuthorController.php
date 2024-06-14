<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(StoreAuthorRequest $request)
    {
        Author::create($request->validated());

        return redirect()->route('admin.authors.index')->with('success', 'Author created successfully.');
    }

    public function show(Author $author)
    {
        return view('admin.authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return redirect()->route('admin.authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index')->with('success', 'Author deleted successfully.');
    }
}