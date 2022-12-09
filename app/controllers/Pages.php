<?php
    class Pages extends Controller{
        public function __construct(){
        }

        public function index(){


            $data = [
                'title' => 'Home'
            ];

            $this->view('pages/index', $data);
        }
        
        public function blog(){


            $data = [
                'title' => 'Blog'
            ];

            $this->view('pages/blog', $data);
        }

        public function contact(){


            $data = [
                'title' => 'contact'
            ];

            $this->view('pages/contact', $data);
        }

        public function shop(){
            $data = [
                'title' => 'shop'
            ];
            $this->view('pages/shop', $data);
        }
        public function feature(){
            $data = [
                'title' => 'Feature'
            ];
            $this->view('pages/features', $data);
        }
    }