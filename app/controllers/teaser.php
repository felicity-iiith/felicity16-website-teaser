<?php

class teaser extends Controller {

    private $allowedPages = ['home', 'about', 'contact', 'credits'];
    private $meta_description = [
        'home' => "Welcome to Felicity '16 - Where magic happens.",
        'about' => "Information about Felicity - IIIT-H's annual techno-cultural festival",
        'contact' => "Get in touch with team Felicity",
        'credits' => "Our sincere gratitude."
    ];

    function index($page = 'home', $extra = null) {
        if ( ! in_array($page, $this->allowedPages) OR $extra !== null) {
            $this->load_library('http_lib', 'http');
            $this->http->err_404();
        }
        $this->load_view('teaser', [
            'page' => $page,
            'meta_description' => $this->meta_description
        ]);
    }
}
