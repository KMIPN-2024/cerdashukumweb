<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;

class PerdataController extends Controller
{
    public function index() {
        // URL file CSV
        $csvUrl = 'https://raw.githubusercontent.com/roihan365/punyadataku/main/final_dataset.csv';
        $csvFile = public_path('final_dataset.csv');

        // Buat objek pembaca CSV
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        $data = [];

        foreach ($records as $offset => $record) {

            $data[] = $record;
            //$offset : represents the record offset
            //var_export($record) returns something like
            // array(
            //  'First Name' => 'jane',
            //  'Last Name' => 'jane',
            //  'E-mail' => null
            // );
        }

        return view('data.perdata.index', compact('data'));
    }
}
