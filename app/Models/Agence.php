<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB;
// pour faire appel à la dépendance qui gère la DB

class Agence {

    public static function findAgency($slug) {

        $agence = DB::select('SELECT * FROM agence WHERE a_slug = ?', [$slug]);
 
        return $agence[0];

    }
}