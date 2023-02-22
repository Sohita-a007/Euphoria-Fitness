<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Contacts;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $blog = Blogs::all();
        return view('frontend.pages.index', compact('blog'));
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function tour()
    {
        return view('frontend.pages.tour');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function services()
    {
        return view('frontend.pages.package');
    }
    public function blog_single($id)
    {
        $blog_single = Blogs::find($id);
        return view('frontend.pages.favourite-places', compact('blog_single'));
    }
    public function contact_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

            'email' => 'required',

            'message' => 'required',
        ]);

        $contact = Contacts::create([
            'name' => $request->name,

            'email' => $request->email,

            'message' => $request->message,


        ]);
        $contact->save();
        return redirect()->back();
    }
}
