<?php

class teaser extends Controller {

    private $allowedPages = ['home', 'about', 'contact', 'credits'];

    function index($page = 'home', $extra = null) {
        if ( ! in_array($page, $this->allowedPages) OR $extra !== null) {
            $this->load_library('http_lib', 'http');
            $this->http->err_404();
        }
        $this->load_view('teaser', [
            'page' => $page
        ]);
    }
}
