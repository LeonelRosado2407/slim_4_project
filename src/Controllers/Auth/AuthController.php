<?php
namespace App\Controllers;

//this clase is for AuthController
class AuthController {

    public function login($req,$res,$args) {
        $data = $req->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];
        $res->getBody()->write("Email: $email, Password: $password");
        return $res;
    }
}