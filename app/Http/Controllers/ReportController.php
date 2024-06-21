<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function ViewReportPage(){
        return view('report');
    }

    public function ViewDataReportPage(){
        $ReportData = Report::all();

        foreach ($ReportData as $report) {
            $report->provinsi = $this->GetProvinsiName($report->provinsi);
            $report->kabupaten = $this->GetKabupatenName($report->kabupaten);
            $report->kecamatan = $this->GetKecamatanName($report->kecamatan);
            $report->kelurahan = $this->GetKelurahanName($report->kelurahan);
        }
        
        return view('dashboard', [
            'ReportData' => $ReportData
        ]);
    }

    public function StoreReportData(Request $request){
        $request->validate([
            'klasifikasi' => ['required'],
            'tipe' => ['required'],
            'kategori' => ['required', 'not_in:Pilih'],
            'provinsi' => ['required', 'not_in:Pilih'],
            'kabupaten' => ['required', 'not_in:Pilih'],
            'kecamatan' => ['required', 'not_in:Pilih'],
            'kelurahan' => ['required', 'not_in:Pilih'],
            'alamat' => ['required', 'min:10'],
            'pengaduan' => ['required', 'min:10'],
            'urgensi' => ['required'],
            'bukti' => ['required', 'image'],
            
        ]);

    
        
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('bukti')->getClientOriginalName();
        $request->file('bukti')->storeAs('/public'.'/'.$filename);
        
        Report::create([
            'klasifikasi' => $request->klasifikasi,
            'tipe' => $request->tipe,
            'kategori' => $request->kategori,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'alamat' => $request->alamat,
            'pengaduan' => $request->pengaduan,
            'urgensi' => $request->urgensi,
            'bukti' => $filename,
        ]);

        return redirect('dashboard');
    }

    private function GetProvinsiName($id) {
        $response = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/province/$id.json");
        return $response->json()['name'] ?? 'Data Tidak Ditemukan';
    }

    private function GetKabupatenName($id) {
        $response = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/regency/$id.json");
        return $response->json()['name'] ?? 'Data Tidak Ditemukan';
    }

    private function GetKecamatanName($id) {
        $response = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/district/$id.json");
        return $response->json()['name'] ?? 'Data Tidak Ditemukan';
    }

    private function GetKelurahanName($id) {
        $response = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/village/$id.json");
        return $response->json()['name'] ?? 'Data Tidak Ditemukan';
    }
}
