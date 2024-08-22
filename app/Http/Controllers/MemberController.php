<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // Method to display the list of all members
    public function index()
    {
        // Retrieve all members from the database using the Member model
        $members = Member::all();

        // Pass the members data to the 'index' view
        return view('index', ['members' => $members]);
    }

    // Method to show the form for creating a new member
    public function createmember()
    {
        // Return the view that contains the form for creating a new member
        return view('createmember');
    }

    // Method to store a new member in the database
    public function store(Request $request)
    {
        // Retrieve input data from the form using the Request object
        $name = $request->input('fullName');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');
        $professionalsummary = $request->input('professionalsummary');

        // Create an array with the member data
        $member = [
            "fullname" => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
            "age" => $age,
            "professionalsummary" => $professionalsummary,
        ];

        // Save the new member to the database using the Member model
        Member::create($member);

        // Redirect to the index page after storing the member
        return redirect('/index');
    }

    // Method to delete a member from the database
    public function destroy(Request $request)
    {
        // Find the member by ID using the Request object
        $id = $request->id;
        $member = Member::findOrFail($id);

        // Delete the member from the database
        $member->delete();

        // Redirect to the index page after deletion
        return redirect('/index');
    }

    // Method to update a member's details in the database
    public function update(Request $request)
    {
        // Find the member by ID
        $id = $request->id;
        $member = Member::find($id);

        // Check if the member exists
        if ($member) {
            // Prepare the updated data from the form input
            $data = [
                'fullName' => $request->input('fullName'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'age' => $request->input('age'),
                'professionalsummary' => $request->input('professionalsummary'),
            ];

            // Update the member's details in the database
            $member->update($data);
        }

        // Redirect to the index page after updating the member
        return redirect('/index');
    }

    // Method to show the form for editing a member's details
    public function edit(Request $request)
    {
        // Find the member by ID
        $id = $request->id;
        $member = Member::findOrFail($id);

        // Return the view with the member's current data pre-filled in the form
        return view("/updateMember", ["member" => $member]);
    }
}
