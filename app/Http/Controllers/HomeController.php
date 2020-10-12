<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Exports\RoleExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $user = User::member();
        return view('home', compact('user'));
    }

    public function roleSave(Request $req)
    {
        $data = [1, 2, 3, 4, 'a', 6];
        foreach ($data as $key => $i) {
            try {
                \App\angka::create([
                    'number' => $i,
                ]);
            } catch (\Exception $e) {
                continue;
            }
        }
        dd('sukses');

        return back();
    }

    public function export()
    {
        return Excel::download(new RoleExport, 'role.xlsx');
    }

    public function get_rpjmd()
    {

        $client = new Client(['base_uri' => 'https://sipd.go.id/run/serv/get_rpjmd?periode=20162021&kodepemda=6371']);
        dd($client->getContents());
    }
}
