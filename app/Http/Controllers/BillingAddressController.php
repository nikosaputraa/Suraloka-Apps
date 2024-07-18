<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BillingAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class BillingAddressController extends Controller
{
    public function getProvinsi()
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        return $response->json();
    }

    public function getKotaByProvinsi($provinsi_id)
    {
        $response = Http::get("https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi={$provinsi_id}");
        return $response->json();
    }

    public function getKecamatanByKota($kota_id)
    {
        $response = Http::get("https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota={$kota_id}");
        return $response->json();
    }

    public function getKelurahanByKecamatan($kecamatan_id)
    {
        $response = Http::get("https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan={$kecamatan_id}");
        return $response->json();
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'postal_code' => 'required|string',
        ]);

        BillingAddress::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'nama_lengkap' => $request->nama_lengkap,
                'alamat' => $request->alamat,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'postal_code' => $request->postal_code,
                'save_for_future' => $request->has('simpan_detail'),
            ]
        );

        return redirect()->back()->with('success', 'Data alamat penagihan berhasil disimpan.');
    }


}
