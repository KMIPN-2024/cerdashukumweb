<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class BantuanHukumController extends Controller
{
    public function index()
    {
        return view('bantuan-hukum');
    }

    public function getPasal(Request $request)
    {
        $getPasal = Http::post('http://127.0.0.1:8001/get-pasal', [
            'sentence' => $request->input,
            'returnPasal' => true,
        ]);
        $response = $getPasal->json();

        // Extract payload data
        $payloads = collect($response['data'])->map(function ($item) {
            // Merge 'score' into 'payload' array
            $item['payload']['score'] = $item['score'];
            return $item['payload'];
        });

        return $payloads;
    }

    public function getPengacara()
    {
        // Mendapatkan isi JSON dari file atau dari sumber data lainnya
        // $jsonData = Storage::get("dummy-pengacara.json"); // Ganti dengan path sesuai kebutuhan
        // $jsonData = public_path('dummy-pengacara.json'); // Ganti dengan path sesuai kebutuhan
        $jsonData = file_get_contents(public_path('dummy-pengacara.json'));
        // Mendekode JSON menjadi array PHP
        $dataArray = json_decode($jsonData, true);

        // Menghitung jumlah data dalam array
        $dataCount = count($dataArray);

        return response()->json(['data_count' => $dataCount]);
    }
}
