<?php
abstract class Controller {
    protected function view($path) {
        include __DIR__ . '/../views/' . $path . '.php';
    }
}
