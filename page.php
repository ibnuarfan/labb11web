<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }

  
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman contact',
            'content' => 'Ini adalah halaman contacl yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "Ini halaman Term of Service";
    }
}