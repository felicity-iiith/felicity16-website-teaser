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

            $oldSiteLink = 'https://felicity.iiit.ac.in/15/' . implode('/', func_get_args()) . '/';
            $headers = get_headers( $oldSiteLink );
            if (isset($headers[0]) && 
                is_string($headers[0]) && 
                ( (strpos($headers[0],'200') !== false) || (strpos($headers[0],'301') !== false) || (strpos($headers[0],'302') !== false) ) ) {
                $this->http->redirect( $oldSiteLink );
            }
            $this->http->err_404();
        }
        $this->load_view('teaser', [
            'page' => $page,
            'meta_description' => $this->meta_description
        ]);
    }
}
