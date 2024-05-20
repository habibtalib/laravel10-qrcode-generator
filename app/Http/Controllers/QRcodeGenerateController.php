<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    public function qrcode(Request $request)
    {

        $url = $request->url ?  $request->url : env('APP_URL');
        $qrCodes = [];
        $qrCodes['simple'] =
            QrCode::size(150)->generate($url);
        $qrCodes['changeColor'] =
            QrCode::size(150)->color(255, 0, 0)->generate($url);
        $qrCodes['changeBgColor'] =
            QrCode::size(150)->backgroundColor(255, 0, 0)->generate($url);
        $qrCodes['styleDot'] =
            QrCode::size(150)->style('dot')->generate($url);
        $qrCodes['styleSquare'] = QrCode::size(150)->style('square')->generate($url);
        $qrCodes['styleRound'] = QrCode::size(150)->style('round')->generate($url);
        $qrCodes['url'] = $url;

        return view('qrcode', $qrCodes);
    }
}
