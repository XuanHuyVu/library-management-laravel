<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::all();
        return view('borrows.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $borrow = new Borrow();
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.create', compact('borrow', 'readers', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required',
            'book_id' => 'required',
            'borrowed_date' => 'required',
            'returned_date' => 'required',
            'status' => 'required'
        ]);

        Borrow::create($request->all());
        return redirect()->route('borrows.index') ->with('success', 'Thêm sách thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $borrow = Borrow::find($id);
        return view('borrows.show', compact('borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $borrow = Borrow::find($id);
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.edit', compact('borrow', 'readers', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required'
        ]);

        $borrow = Borrow::find($id);
        $borrow->update($request->all());
        return redirect()->route('borrows.index') ->with('success', 'Cập nhật sách thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Borrow::destroy($id);
        return redirect()->route('borrows.index') ->with('success', 'Xóa sách thành công');
    }
}
