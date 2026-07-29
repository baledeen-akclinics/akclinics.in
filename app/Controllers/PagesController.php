<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class PagesController extends BaseController
{
    public function index(): string
    {
        return view('pages/index');
    }

    public function show(string $slug): string
    {
        $viewPath = APPPATH . 'Views/pages/' . $slug . '.php';

        if (! is_file($viewPath)) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('pages/' . $slug);
    }
}
