<?php

class HomeController extends RenderView
{
    public function index()
    {
        $this->loadView('home', [
            'title' => 'Home Page',
            'user' => 'Teste'
        ]);
    }


}