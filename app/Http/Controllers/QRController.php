<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public function generateQR(Request $request) {

        $qrData = request()->ip(). ":8000/api, " . $request->qr_data;

        $qr_code = QrCode::size(300)->margin(1)->generate($qrData);

        return view('show', ['qr_code' => $qr_code, 'day' => $request->qr_data]);
    }
    
}
