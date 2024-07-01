<?php
// routes/index.php

class IndexController {
    public function index() {
        echo json_encode(
            [
                "status"=> "200"
              ]
        );
    }
}
?>