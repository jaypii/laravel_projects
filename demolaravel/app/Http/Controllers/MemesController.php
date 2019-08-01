<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemesController extends Controller
{
    public function getDailyLuck()
    {
        $memes = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
            'Wenn du barfuß durchs Leben läufst, kann man dir auch nichts in die Schuhe schieben. ',
            'Das Gesicht eines Menschen erkennt man bei Licht, seinen Charakter im Dunkeln.',
            'There is nothing more amazing than being yourself'
        ];


        $idx = array_rand($memes);
        $num = random_int(1, 49);

        return view('home', [
            'meme' => $memes[$idx],
            'luckynr' => $num
        ]);
    }
}
