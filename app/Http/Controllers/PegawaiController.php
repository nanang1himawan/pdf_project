<?php

namespace App\Http\Controllers;
use App\Models\Pegawaii;
use PDF;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    public function index()
    {
    	$pegawai = Pegawaii::all();
    	return view('pegawai',['pegawai'=>$pegawai]);
    }
 
    public function cetak_pdf()
    {
    	$pegawai = Pegawaii::all();
        

    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
        $pdf->setPaper('legal', 'landscape');
    	return $pdf->stream('laporan-pegawai-pdf');
    }

    public function cetak_pdf_detail(Pegawaii $pegawai_pdf_detail)
    {

        // return view('pegawai_pdf_detail', [
        //     "pegawai_pdf_detail" => $pegawai_pdf_detail
        // ]);


    	$pdf = PDF::loadview('pegawai_pdf_detail',[
            "pegawai_pdf_detail"=>$pegawai_pdf_detail
        ]);
        $pdf->setPaper('legal', 'landscape');
    	return $pdf->stream('laporan-pegawai-pdf-detail');
    }

    public function detail(Pegawaii $detail){
        return view('detail', [
            "detail" => $detail
        ]);
    }
    public function export_excel()
	{
		return Excel::download(new PegawaiExport, 'pegawai.xlsx');
	}


}