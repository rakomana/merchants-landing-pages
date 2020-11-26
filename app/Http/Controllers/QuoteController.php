<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    private $quote;

    /**
     * Inject Models into the constructor
     */
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('thank-you');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = new $this->quote();
        $quote->company_name = $request->company_name;
        $quote->full_name = $request->full_name;
        $quote->email = $request->email;
        $quote->phone_number = $request->phone_number;
        $quote->house_number = $request->house_number;
        $quote->street_name = $request->street_name;
        $quote->town = $request->town;
        $quote->country = $request->country;
        $quote->post_code = $request->post_code;
        $quote->save();

    }
}
