<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // Method to display the list of all members
    public function index()
    {
        $members = Member::all();
        return view('index', ['members' => $members]);
    }

    // Method to show the form for creating a new member
    public function createmember()
    {
        return view('createmember');
    }

    // Method to store a new member in the database
    public function store(Request $request)
    {
        $name = $request->input('fullName');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');
        $professionalsummary = $request->input('professionalsummary');

        $member = [
            "fullname" => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
            "age" => $age,
            "professionalsummary" => $professionalsummary,
        ];

        Member::create($member);

        return redirect('/index');
    }

    // Method to delete a member from the database
    public function destroy(Request $request)
    {
        // Find the member by ID using the Request object
        $id = $request->id;
        $member = Member::findOrFail($id);

        $member->delete();
        return redirect('/index');
    }

    // Method to update a member's details in the database
    public function update(Request $request)
    {
        $id = $request->id;
        $member = Member::find($id);

        // Check if the member exists
        if ($member) {
            $data = [
                'fullName' => $request->input('fullName'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'age' => $request->input('age'),
                'professionalsummary' => $request->input('professionalsummary'),
            ];

            $member->update($data);
        }

        return redirect('/index');
    }

    // Method to show the form for editing a member's details
    public function edit(Request $request)
    {
        $id = $request->id;
        $member = Member::findOrFail($id);

        return view("/updateMember", ["member" => $member]);
    }
}
