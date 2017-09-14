<?php
    namespace Hedrons;

    /**
     * [TMDBapi description]
     * Automatically only shows 30 items per page
     */
    class TMDBapi {
        protected $v3token = 'ccebcf7239d49e36ecdb1c0383ac735b';
        protected $v4token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjY2ViY2Y3MjM5ZDQ5ZTM2ZWNkYjFjMDM4M2FjNzM1YiIsInN1YiI6IjUxYzE3ZjJlNzYwZWUzMDY0YjIwZWYyNSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Bvs4MVkhHoYMyzvNh53DlyR4cWloGkP9hYMX9SLutCc';
        public $baseurl = 'https://api.themoviedb.org/';
        protected $imageurl = 'http://image.tmdb.org/t/p/';
        protected $path = array (
            'searchprefix' => '3',
            'search' => 'search',
            'movies' => 'movie',
            'image' => 'images',
            'tv' => 'tv'
        );
        public $imagesizes = array (
            'poster' => 'w500'
        );
        protected $debug = false;

        public function makeurlparser($url = false) {
            if ($url) {
                return new \Purl\Url($url);
            } else {
                return new \Purl\Url($this->baseurl);
            }
        }

        public function getsearchmoviesurl($query, $page) {
            if ($this->debug) {
                //return \ProcessWire\wire('config')->paths->vendor.'hedrons/test/json/issues-search.json';
            } else {
                $url = $this->makeurlparser();
                $url->path->add($this->path['searchprefix']);
                $url->path->add($this->path['search']);
                $url->path->add($this->path['movies']);
                $url->query->setData(
                    array(
                        'api_key' => $this->v3token,
                        'language' => 'en-US',
                        'query' => $query,
                        '[age]' => $page,
                    )
                );
                return $url->getUrl();
            }
        }

        public function getmovieimageurl($image, $imagesize) {
            $url = $this->makeurlparser($this->imageurl);
            $url->path->add($imagesize);
            $url->path->add($image);
            return $url->getUrl();
        }

        public function searchformovies($query, $page, $returnjson = false) {
            $url = $this->getsearchmoviesurl($query, $page);
            return $this->returnresult($url, $returnjson);
        }

        public function curlrequest($url) {
            //  Initiate curl
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result = curl_exec($ch);
            // Closing
            curl_close($ch);
            return $result;
        }

        public function returnresult($url, $returnjson) {
            $result = ($this->debug ? file_get_contents($url) : $this->curlrequest($url));
            return ($returnjson ? $result : json_decode($result, true));
        }

    }
