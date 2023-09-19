<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index(Request $request) {
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]); 
    }

    //Show reach us page
    public function reach(){
        return view('listings.reach');
    }

    //Show about us page
    public function about()
    {
        return view('listings.about');
    }

    //show create form
    public function create(){
        return view('listings.create');
    }
    //store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' =>'required',
            'tags' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
}

    //show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update Listing Data 
    public function update(Request $request, Listing $listing){
        
        // Make sure logged in user is owner

        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' =>['required'],
            'tags' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
}

        // Delete listing
        public function destroy(Listing $listing){
            $listing->delete();
            return redirect('/')->with('message','Listing deleted successfully');
        }

        //Manage Listings
        public function manage(){
            return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
        }
    
}
