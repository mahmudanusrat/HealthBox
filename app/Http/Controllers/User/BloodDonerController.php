<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BloodDoner;
use Illuminate\Http\Request;

class BloodDonerController extends Controller
{

    public function bloodbank()
    {

        $data = BloodDoner::all();

        return view('user.bloodbank', compact('data'));


    }

    public function blooddonate()
    {
        return view('user.donate');
    }

    public function form(Request $request)
    {
        $data = new blooddoner;
        $data->name = $request->name;
        $data->number = $request->number;
        $data->bloodGroup = $request->group;
        $data->address = $request->address;
        $data->message = $request->message;
        $data->save();
        return redirect('/home')->with('message', 'Doner Added');

    }

    public function srch()
    {
        if (request('search')) {
            $search = request('search');
            $data = BloodDoner::where('bloodGroup', $search)->get();
            if (count($data) > 0) {
                return view('user.bloodbank', compact('data'));
            } elseif (count($data) <= 0) {
                return redirect()->back()->with('message', 'Doner Not Found');
            }
        } else {
            $data = BloodDoner::all();

            return view('user.bloodbank', compact('data'));

        }

    }
}
