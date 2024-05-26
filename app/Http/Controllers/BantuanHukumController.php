<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

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

    public function getLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        // Gunakan Guzzle untuk melakukan permintaan ke Google Maps Geocoding API
        
        return response()->json([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }
}
