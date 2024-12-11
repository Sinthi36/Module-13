<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // variables and values
        $name = "Donald Trump";
        $age = "75";

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

        
        return response()
            ->json($data, 200) // Send JSON response with status 200
            ->cookie($cookie); // Attach the cookie to the response
    }
}