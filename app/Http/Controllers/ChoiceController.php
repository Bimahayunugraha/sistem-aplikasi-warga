<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChoiceController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('allvoting.index', [
            'title' => 'Voting' . $title,
            'active' => 'voting',
            'candidates' => Candidate::latest()->filter(request(['search', 'user']))->paginate(10)->withQueryString(),
        ]);
    }

    public function choice(Request $request, $id)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
       
        $user->candidate_id = $request->get('candidate_id');
        $user->status = "SUDAH";
        $user->save();
        return redirect('voting')->with('success', 'You Have Been Choiched');
    }
}
