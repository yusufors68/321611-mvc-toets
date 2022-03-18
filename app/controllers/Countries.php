<?php
class Countries extends Controller {
    public function __construct() {
        $this->countriesModel = $this->model('Country');
    }

    public function index() {
        $country = $this->countriesModel->getCountries();
        
        $data = [
            'title' => 'Home page',
            'users' => $country
        ];

        $this->view('/countries/index', $data);
    }
}
