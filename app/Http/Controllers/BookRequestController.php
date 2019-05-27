<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BookRequest;
use App\Book;

class BookRequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        // $books = Book::all();
        // return view('books.index', compact('books'));
        return view('requests.create');
    }

    public function store(Request $request) {
        $request->validate([
            'contactName' => 'required|min:5|alpha_num',
            'mobile' => 'required|size:8',
            'email' => 'required|email',
            'bookName' => 'required|min:5|alpha_num',
            'pickupDate' => 'required|date',
        ]);

        $bookreq = new BookRequest([
            'contact_name' => $request->get('contactName'),
            'mobile'=> $request->get('mobile'),
            'email'=> $request->get('email'),
            'book_name'=> $request->get('bookName'),
            'pickup_date'=> $request->get('pickupDate')
        ]);

        $bookreq->save();

        return redirect('/books');
    }
}
