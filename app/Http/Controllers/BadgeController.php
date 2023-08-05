<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class BadgeController extends Controller
{
    public function create(){
        $attributes = request()->validate([
            'type' => ['required', 'integer', 'max:2', 'min:1'],
            'url' => ['required', 'url', 'regex:/https:\/\/goo.gl\/maps\/[a-zA-Z1-9]+/']
        ]);

        $place_id = preg_replace('/(https:\/\/goo.gl\/maps\/)/', '', $attributes['url']);

        $response = Http::post('https://maps.googleapis.com/maps/api/place/details/json', [
            'fields' => ['place_id', 'rating', 'reviews'],
            'place_id' => $place_id,
            'key' => Config::get('services.googlePlaces.key'),
        ]);

        dd($response);
    }

    public function showHTML(Badge $badge){
        $attributes = request()->validate([
            'dark' => ['boolean']
        ]);

        return view('badge.showHTML', array_merge($attributes, [
            'rating' => $badge->rating,
            'reviews' => $badge->badge,
        ]));
    }
}
