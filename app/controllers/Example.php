<?php

class Example extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => "Example"
        ];
        $this->view('example/index', $data);
    }
}