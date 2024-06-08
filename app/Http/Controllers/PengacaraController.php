<?php

namespace App\Http\Controllers;

use App\Models\Pengacara;
use App\Http\Requests\StorePengacaraRequest;
use App\Http\Requests\UpdatePengacaraRequest;
use App\Models\Keahlian;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PengacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengacara::with('keahlian')->get();

        return view('data.pengacara.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.pengacara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengacaraRequest $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
            // Add image to storage
            if ($request->hasFile('foto')) {
                $data['foto'] = $request->file('foto')->store('assets/img/pengacara', 'public');
            }
            // Ubah string keahlian menjadi array
            $keahlianArray = array_map('trim', explode(',', $request->keahlian));
            $keahlianIds = [];
            foreach ($keahlianArray as $keahlian) {
                $keahlianModel = Keahlian::firstOrCreate(['keahlian' => $keahlian]);
                $keahlianIds[] = $keahlianModel->id;
            }

            $pengacara = Pengacara::create($data);

            // Attach keahlian with default 'is_verified' value
            if (!empty($keahlianIds)) {
                $pengacara->keahlian()->attach($keahlianIds);
            }

            DB::commit();
            return redirect()->route('pengacara.success')->with('success', 'Data pengacara berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            //throw $th;
            Alert::error('Gagal, silahkan coba lagi', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengacara $pengacara)
    {
        return view('data.pengacara.show', compact('pengacara'));
    }
    public function showAdmin()
    {
        $data = Pengacara::with('keahlian')->get();
        return view('admin.pengacara.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengacara $pengacara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengacaraRequest $request, Pengacara $pengacara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengacara $pengacara)
    {
        //
    }
}
