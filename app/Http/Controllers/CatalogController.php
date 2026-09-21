<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index(): View
    {
        $catalogs = Catalog::query()->orderBy('sort_order')->get();

        return view('catalogs.index', ['catalogs' => $catalogs]);
    }
}
