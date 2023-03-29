<?php

class Persoonsgegevens extends Controller
{
    private $persoonsgegevensModel;

    public function __construct()
    {
        $this->persoonsgegevensModel = $this->model('PersoonsgegevensModel');
    }

    public function index()
    {

        $data = [
            'title' => 'Persoonsgegevens',
        ];

        $this->view('persoonsgegevens/index', $data);
    }

    public function persoonsGegevensOverzicht()
    {
        $persoonsGegevens = $this->persoonsgegevensModel->getGegevens();

        $rows = '';
        foreach ($persoonsGegevens as $value) {
            $rows .= "<tr> 
                            <td>" . $value->Voornaam . "</td>
                            <td>" . $value->Tussenvoegsel . "</td> 
                            <td>" . $value->Achternaam . "</td>
                            <td>" . $value->Mobiel . "</td>
                            <td>" . $value->Email . "</td>
                            <td>" . $value->IsVolwassen . "</td>    
            ";
        }
        
    }
}
