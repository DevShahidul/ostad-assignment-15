<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    // If the validation passes, you can proceed with the registration logic

    // Access the validated data using the $validatedData variable
    $name = $validatedData['name'];
    $email = $validatedData['email'];
    $password = $validatedData['password'];

    // Perform registration logic, such as creating a new user record in the database

    // Redirect the user or perform any other appropriate actions
}

}
