<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $data = $response->json()['users'];
        $currentPage = $request->input('page', 1);
        $perPage = 10;
        $totalItems = count($data);
        $totalPages = ceil($totalItems / $perPage);
        $currentPageItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);

        return view('pages.index', [
            'users' => $currentPageItems,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
        ]);
    }
}