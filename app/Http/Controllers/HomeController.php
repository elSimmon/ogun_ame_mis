<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // show records count
        $crafts = DB::table('master_crafts_persons')->orderBy('id', 'ASC')->get();
        $intitutions = DB::table('non_formal_educations_final')->orderBy('institutional_id', 'ASC')->get();
        return view('home')->withInstitutions($intitutions)->withCrafts($crafts);
    }

    public function non_formal(){
      // non formal education final
      $intitutions = DB::table('non_formal_educations_final')->orderBy('institutional_id', 'ASC')->get();
      return view('non_formal')->withInstitutions($intitutions);
    }

    public function crafts(){
      $crafts = DB::table('master_crafts_persons')->orderBy('id', 'ASC')->get();
      return view('crafts')->withCrafts($crafts);
    }
}
