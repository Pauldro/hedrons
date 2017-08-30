<?php
    namespace Hedrons;

    class ComicVineAPI {
        public $apikey = '0cb485bca986ad929ddb9d29ba59146d8bd08a96';
        public $baseurl = 'http://www.comicvine.com/api';
        public $issuesfieldlist = 'api_detail_url,image,name,issue_number,volume,cover_date,person_credits';
        public $issuefieldlist = 'description,cover_date,person_credits,name,issue_number';
        public $debug = false;

        public function makeurlparser() {
            return new \Purl\Url($this->baseurl);
        }

        public function addapikeytourl() {
            $url = $this->makeurlparser();
            $url->query->add('apikey', $this->apikey);
            return $url;
        }

        public function getsearchcomicissuesurl($query, $page, $showonpage) {
            if ($this->debug) {
                return \ProcessWire\wire('config')->paths->vendor.'hedrons/test/json/issues-search.json';
            } else {
                $offset = $showonpage * $page;
                $url = $this->makeurlparser();
                $url->path->add('search/');
                $url->query->addData(
                    array(
                        'api_key' => $this->apikey,
                        'query' => $query,
                        'field_list' => $this->issuesfieldlist,
                        'limit' => $showonpage,
                        'offset' => $page,
                        'resources' => 'issue',
                        'format' => 'json'
                    )
                );
                return $url->getUrl();
            }

        }

        public function getissuedetailurl($detailurl) {
            if ($this->debug) {
                $parseurl = new \Purl\Url($detailurl);
                $paths = array_filter($parseurl->path->getSegments());
                $issue = $parseurl = $paths[sizeof($paths)];
                return \ProcessWire\wire('config')->paths->vendor.'hedrons/test/json/'.$issue.'.json';
            } else {
                $url = new \Purl\Url($detailurl);
                $url->query->addData(
                    array(
                        'api_key' => $this->apikey,
                        'field_list' => $this->issuefieldlist,
                        'format' => 'json'
                    )
                );
                return $url->getUrl();
            }
        }

        public function searchforcomicissues($query, $page, $showonpage, $returnjson = false) {
            $url = $this->getsearchcomicissuesurl($query, $page, $showonpage);
            return $this->returnresult($url, $returnjson);
        }

        function getissuedetails($detailurl, $returnjson = false) {
            $url = $this->getissuedetailurl($detailurl);
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

?>
