<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'nullable|email',
            'phone'   => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $contact = ContactSubmission::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Contact form submitted successfully.',
            'data'    => $contact
        ], 200);
    }
}
