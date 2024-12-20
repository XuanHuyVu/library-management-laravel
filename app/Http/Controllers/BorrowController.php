<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

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
        return view('borrows.create', compact('borrow'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required'
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
        return view('borrows.edit', compact('borrow'));
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
