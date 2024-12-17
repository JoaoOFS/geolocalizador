<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class GeolocationController extends Controller
{
    public function addressToCoordinates(Request $request)
    {
        $address = $request->input('address');
    
        if (!$address) {
            return back()->with('error', 'Endereço é obrigatório.');
        }
    
        $client = new Client();
        $url = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($address);
    
        try {
            $response = $client->get($url, [
                'headers' => [
                    'User-Agent' => 'geo-service/1.0 (joao.lsd@hotmail.com)'  // Troque pelo seu email real
                ]
            ]);
    
            $data = json_decode($response->getBody(), true);
    
            if (!empty($data)) {
                $location = $data[0];
                Session::flash('coordinates', [
                    'address' => $address,
                    'latitude' => $location['lat'],
                    'longitude' => $location['lon']
                ]);
            } else {
                Session::flash('error', 'Endereço não encontrado.');
            }
        } catch (\Exception $e) {
            Log::error('Erro ao buscar coordenadas: ' . $e->getMessage());
            Session::flash('error', 'Erro ao buscar coordenadas.');
        }
    
        return back();
    }
    
    public function calculateDistance(Request $request)
    {
        $lat1 = $request->input('lat1');
        $lng1 = $request->input('lng1');
        $lat2 = $request->input('lat2');
        $lng2 = $request->input('lng2');
    
        if (!$lat1 || !$lng1 || !$lat2 || !$lng2) {
            return back()->with('error', 'Coordenadas inválidas.');
        }
    
        $earthRadius = 6371;
        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);
    
        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLng / 2) * sin($dLng / 2);
    
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
    
        Session::flash('distance', round($distance, 2));
    
        return back();
    }
}
