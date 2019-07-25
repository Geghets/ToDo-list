<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = \App\Todo::all();

        return view('main.main', compact('items'));
    }

    public function show($id)
    {
/*        dd($id);*/
        $item = \App\Todo::find($id);
        return view('main.edit', compact('item'));
    }

    public function update($id)
    {
/*        dd($id);*/

        request()->validate([
            'date' => 'required',
            'description' => 'required',
        ]);

        $update = \App\Todo::findOrFail($id);

        $update->date = request('date');
        $update->description = request('description');

        $update->save();

        return redirect('main');
    }

    public function destroy($id)
    {

        Todo::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

}