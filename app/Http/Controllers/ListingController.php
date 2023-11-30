<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class   ListingController extends Controller
{
    //INDEX SHOWS ALL LISTING
    public function index()
    {
        // RETURNS DATA
        // dd(request());
        return view('listings.index', [
            //LATEST DATA FIRST
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
            // 'listings' => Listing::all() / latest()->get()
        ]);
    }
    //SHOW SHOWS SINGLE LISTING
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }
    //CREATE SHOWS FORM TO CREATE NEW LISTING
    public function create()
    {
        return view('listings.create');
    }
    //STORE STORES NEW LISTING
    public function store(Request $req)
    {
        $formField = $req->validate([
            'title' => 'required',
            'logo' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        $formField['logo'] = $req->file('logo')->store('logos', 'public');
        $formField['user_id'] = auth()->id();
        Listing::create($formField);
        return redirect('/')->with('message', 'Listing created successfully');
    }
    //EDIT SHOWS FORM TO EDIT LISTING
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }
    //UPDATE UPDATES LISTING
    public function update(Request $req, Listing $listing)
    {
        //MAKE SURE LOGGED IN USER IS OWNER
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $formField = $req->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        if ($req->hasFile('logo')) {
            $formField['logo'] = $req->file('logo')->store('logos', 'public');
        }
        $listing->update($formField);
        return back()->with('message', 'Listing updated successfully');
    }
    //DESTROY DELETES LISTING
    public function delete(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
    //MANAGE LISTING
    public function manage()
    {
        return view('listings.manage', [
            'listings' => auth()->user()->listings()->get(),
        ]);
    }
}
