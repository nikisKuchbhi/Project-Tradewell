<?php

namespace App\Http\Controllers\Pharmacy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Carbon\Carbon;
use App;

class LangController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

    */

    public function index()

    {

        return view('pharmacy.layout.app');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

    */

    public function change(Request $request)

    {

        App::setLocale($request->lang);

        session()->put('locale', $request->lang);

        return redirect()->back();

    }

}