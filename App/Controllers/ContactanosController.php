<?php

namespace App\Controllers;

use App\Models\Contactanos;
use \Core\View;
class ContactanosController extends \Core\Controller{

    public function index() {
        $contactanos = Contactanos::all();
        View::render('Contactanos/index.php', ['contactanos' => $contactanos]);
    }
}
