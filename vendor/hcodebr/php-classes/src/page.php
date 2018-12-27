<?php      

namespace Hcode;

use Rain\Tpl;

class Page{

    private $tpl;
    private $options = [];
    private $defaults = [
        "data"=>[]
    ];

    public function __construct(){

        $this->options = array_merge($this->default, $opts);

        $config = array(
        "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "/views/",
        "cache_dir"     => $_SERVER["DOCUMENT_ROOT"] . "/views-cache/",
        "debug"         => false
        );

        Tpl::configure( $config );

        $this->tpl = new Tpl;


        foreach ($variable as $key => $value) {
            # code...
        }

    }
    public function __destruct(){



    }

}



?>          