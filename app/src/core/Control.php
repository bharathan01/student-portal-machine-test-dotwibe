<?php
class Controller
{
    public function view($name, $data)
    {
        $fileName = "../app/src/view/" . $name . ".view.php";
        if (file_exists($fileName)) {
            require $fileName;
        } else {
            require "../app/src/view/404.view.php";
        }
    }
}
