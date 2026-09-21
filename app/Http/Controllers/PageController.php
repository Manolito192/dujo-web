<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\TeamMember;
use App\Models\Ueb;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $uebs = Ueb::query()->orderBy('sort_order')->get();

        return view('home', [
            'about' => Page::where('slug', 'quienes-somos')->first(),
            'uebs' => $uebs,
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'page' => Page::where('slug', 'quienes-somos')->firstOrFail(),
        ]);
    }

    public function organization(): View
    {
        return view('organization', [
            'members' => TeamMember::query()->orderBy('sort_order')->get(),
        ]);
    }
}
