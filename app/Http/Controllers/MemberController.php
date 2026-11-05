<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $member = new Member();
        $member->name = request('name');
        $member->designation = request('designation') ?: 'Member';
        $member->age = request('age');
        $member->email = request('email');
        $member->phone = request('phone');
        $member->address = request('address');
        $member->occupation = request('occupation');
        $member->password = request('password');
        $member->save();
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $member = Member::findOrFail($id);
        $member->name = request('name');
        $member->designation = request('designation') ?: 'Member';
        $member->age = request('age');
        $member->email = request('email');
        $member->phone = request('phone');
        $member->address = request('address');
        $member->occupation = request('occupation');
        $member->password = request('password');
        $member->save();
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('members.index');
    }
}
