<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSiswaRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(createSiswaRequest $request)
    {
        $data = $request->validated();

        $siswa = Siswa::insert($data);

        return;
    }

    public function all(createSiswaRequest $request)
    {
        $siswa = Siswa::all();
    }
}
