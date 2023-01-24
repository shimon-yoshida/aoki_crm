<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AnalysisController extends Controller
{
    public function index()
    {

        $startDate = '2022-08-01';
        $endDate = '2022-08-31';



        return Inertia::render('Analysis');
    }


}
