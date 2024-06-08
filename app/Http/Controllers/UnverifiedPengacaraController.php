<?php

namespace App\Http\Controllers;

use App\Models\UnverifiedPengacara;
use App\Http\Requests\StoreUnverifiedPengacaraRequest;
use App\Http\Requests\UpdateUnverifiedPengacaraRequest;
use App\Models\Keahlian;
use App\Models\Pengacara;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UnverifiedPengacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pengacara.verifikasi-pengacara', [
            'unverifiedPengacaras' => UnverifiedPengacara::where('is_verified', 0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnverifiedPengacaraRequest $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
            // Add image to storage
            if ($request->hasFile('foto')) {
                $data['foto'] = $request->file('foto')->store('assets/img/pengacara', 'public');
            }
            UnverifiedPengacara::create($data);

            DB::commit();
            return redirect()->route('pengacara.success')->with('success', 'Data pengacara berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            //delete image if failed to save to database
            if (isset($data['foto'])) {
                unlink(storage_path('app/public/' . $data['foto']));
            }
            //throw $th;
            Alert::error('Gagal, silahkan coba lagi', $e->getMessage());
            return redirect()->route('pengacara.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UnverifiedPengacara $unverifiedPengacara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnverifiedPengacara $unverifiedPengacara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UnverifiedPengacara $unverifiedPengacara)
    {
        $data = $unverifiedPengacara->find($id);   
        try {
            DB::beginTransaction();
            //pindahkan data unverified pengacara ke tabel pengacara
            $pengacara = Pengacara::create([
                'nama' => $data->nama,
                'latitude' => $data->latitude,
                'longitude' => $data->longitude,
                'deskripsi' => $data->deskripsi,
                'foto' => $data->foto,
                'no_hp' => $data->no_hp,
                'alamat' => $data->alamat,
            ]);

            // Ubah string keahlian menjadi array
            $keahlianArray = array_map('trim', explode(',', $data->keahlian));
            $keahlianIds = [];
            foreach ($keahlianArray as $keahlian) {
                $keahlianModel = Keahlian::firstOrCreate(['keahlian' => $keahlian]);
                $keahlianIds[] = $keahlianModel->id;
            }

            // Attach keahlian with default 'is_verified' value
            if (!empty($keahlianIds)) {
                $pengacara->keahlian()->attach($keahlianIds, ['is_verified' => 1]);
            }

            //delete unverified pengacara
            $data->delete();
            DB::commit();
            Alert::success('Berhasil', 'Pengacara berhasil diverifikasi');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            //throw $th;
            Alert::error('Gagal, silahkan coba lagi', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnverifiedPengacara $unverifiedPengacara)
    {
        //
    }
}
