<?php

namespace App\Http\Controllers;

use App\Models\Ueb;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\View\View;

class UebController extends Controller
{
    public function index(): View
    {
        $uebs = Ueb::query()
            ->orderBy('sort_order')
            ->get();

        return view('uebs.index', ['uebs' => $uebs]);
    }

    public function show(string $slug): View
    {
        $ueb = Ueb::query()->where('slug', $slug)->first();

        if (! $ueb) {
            throw new ModelNotFoundException('UEB no encontrada');
        }

        return view('uebs.show', ['ueb' => $ueb]);
    }
}
