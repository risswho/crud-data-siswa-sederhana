<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSiswaRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();

        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createSiswaRequest $request)
    {
        $data = $request->validated();

        $siswa = Siswa::create($data);

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



// <?php

// namespace App\Http\Controllers;

// use App\Http\Requests\createSiswaRequest;
// use App\Models\Siswa;

// class SiswaController extends Controller
// {
//     

//     public function index()
//     {
//         return view('siswa.index');
//     }


    




   

//     public function detail($id)
//     {
//         
//     }

//     public function update(createSiswaRequest $request, $id)
//     {
//         $data = $request->validated();
        
//         $siswa = Siswa::where('id', $id)->update($data);

//         return;
//     }

//     public function delete($id)
//     {
//         $siswa = Siswa::where('id', $id)->delete();
//     }
// }
