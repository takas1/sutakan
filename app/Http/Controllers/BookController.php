<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBookRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books = DB::table('books')->where('user_id', Auth::id())
        //                            ->select('id', 'title', 'due_date', 'page', 'start_date')
        //                            ->get();

        $books = Book::where('user_id', Auth::id())
                     ->select('id', 'title', 'due_date', 'page', 'start_date')
                     ->get();

        // dd($books);
        return view('dashboard', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        Book::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'due_date' => $request->due_date,
            'start_date' => $request->start_date,
            'page' => $request->page,
            'page_per_day' => $request->page_per_day,
        ]);

        return to_route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        $days_required = intval(ceil($book->page / $book->page_per_day))-1;
        $before_add_date = new Carbon($book->start_date);
        // dd($before_add_date);
        $completion_date = $before_add_date->addDay($days_required);

        return view('show', ['book' => $book, 'completion_date' => $completion_date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->title = $request->title;
        $book->due_date = $request->due_date;
        $book->start_date = $request->start_date;
        $book->page  = $request->page;
        $book->page_per_day = $request->page_per_day;
        $book->save();

        return to_route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return to_route('books.index');
    }

    // public function trash()
    // {
    //     $books = Book::onlyTrashed()
    //         ->where('user_id', Auth::id())
    //         ->get();

    //     return view('trash', ['books' => $books]);
    // }
}
