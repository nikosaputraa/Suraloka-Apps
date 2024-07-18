<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download()
    {
        $filePath = public_path('storage/map/map-download.png');
        return response()->download($filePath, 'map-download.png');
    }
}