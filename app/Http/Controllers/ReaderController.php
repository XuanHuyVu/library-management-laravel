<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Reader;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Reader::all();
        return view('readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reader = new Reader();
        return view('readers.create', compact('reader'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|max:255',
            'address' => 'required|string|max:15',
            'phone' => 'required|string|max:255'
        ]);
        try {
            Reader::create($request->only(['name', 'birthday', 'address', 'phone']));
            return redirect()->route('readers.index')->with('success', 'Thêm độc giả thành công');
        } catch (\Exception $e) {
            Log::error('Error adding reader: ' . $e->getMessage());
            return redirect()->route('readers.index')->with('error', 'Có lỗi xảy ra khi thêm độc giả.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reader = Reader::find($id);
        return view('readers.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reader = Reader::find($id);
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $reader = Reader::find($id);
        $reader->update($request->all());
        return redirect()->route('readers.index')->with('success', 'Cập nhật độc giả thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reader::destroy($id);
        return redirect()->route('readers.index')->with('success', 'Xóa độc giả thành công');
    }
}
