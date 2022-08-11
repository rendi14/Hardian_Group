<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Home()
    {
        echo view('Layout/Header');
        echo view('Main/Home');
        echo view('Layout/Footer');
    }
    public function Project()
    {
        echo view('Layout/Header');
        echo view('Main/Project');
        echo view('Layout/Footer');
    }
    public function About()
    {
        echo view('Layout/Header');
        echo view('Main/About');
        echo view('Layout/Footer');
    }
    public function VisiMisi()
    {
        echo view('Layout/Header');
        echo view('Main/VisiMisi');
        echo view('Layout/Footer');
    }

    public function Parts()
    {
        echo view('Layout/Header');
        echo view('Main/Parts');
        echo view('Layout/Footer');
    }
    public function Galeri()
    {
        echo view('Layout/Header');
        echo view('Main/Galeri');
        echo view('Layout/Footer');
    }
    public function Kontak()
    {
        echo view('Layout/Header');
        echo view('Main/Kontak');
        echo view('Layout/Footer');
    }
}
