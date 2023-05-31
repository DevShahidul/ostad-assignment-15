<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Get the submitted data
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $message = $validatedData['message'];

        // Send the email to the predefined address
        Mail::raw($message, function ($email) use ($name, $email) {
            $email->to('your-email@example.com');
            $email->subject('New Contact Form Submission');
            $email->from($email, $name);
        });

        // Redirect or perform any other appropriate actions
        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
}
