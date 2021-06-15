<?php

class Datacovid extends Controller {
    public function index() {
        $data['title'] = 'Data covid';

        $data['covid'] = $this->getDataCovid();

        $this->view('templates/head', $data);
        $this->view('datacovid/index', $data);
        $this->view('templates/footer');
    }

    public function getDataCovid() {
        $country = 'id';
        $api_address = 'https://covid19.mathdro.id/api/countries/' . $country;

        $data_json = file_get_contents($api_address);

        return json_decode($data_json);
    }
}

?>