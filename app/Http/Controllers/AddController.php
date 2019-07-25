<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;


class AddController extends Controller
{
    public function index()
    {
        return view("main.add");
    }

    public function Store()
    {
        request()->validate([
            'date' => 'required',
            'description' => 'required',
        ]);


        $list_iteam = new Todo();
        $list_iteam->date = request('date');
        $list_iteam->description = request('description');

        $list_iteam->save();

        return redirect('main');
    }

}