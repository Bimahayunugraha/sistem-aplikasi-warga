<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view ('pages.admin.datavoting.index', ['title' => 'Data Voting', 'active' => 'datavoting', 'candidates' => $candidates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.datavoting.create', ['title' => 'Buat Kandidat Voting', 'active' => 'datavoting']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'vice_name' => 'required|max:255',
            'title' => 'required|max:255',
            'slug' => 'required|unique:candidates',
            'image' => 'image|file|max:1024',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sistem-aplikasi-warga-images');
       }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);

        Candidate::create($validatedData);

        return redirect('datavoting')->with('success', 'Voting berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return view('pages.admin.datavoting.show', [
            'title' => 'Detail Keluhan',
            'active' => 'keluhan',
            'candidates' => $candidate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('pages.admin.datavoting.edit ', [
            'title' => 'Edit Data Voting',
            'active' => 'datavoting',
            'candidates' => $candidate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        $rules = [
            'name' => 'required|max:255',
            'vice_name' => 'required|max:255',
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required'
        ];

        if($request->slug != $candidate->slug) {
            $rules['slug'] = 'required|unique:candidates';
        }


        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('sistem-aplikasi-warga-images');
       }
       
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);

        Candidate::where('id', $candidate->id)
                ->update($validatedData);

        // $status->update($data);

        return redirect('datavoting')->with('success', 'Voting berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        if($v->image) {
            Storage::delete($candidate->image);
        }
        Candidate::destroy($candidate->id);
        return redirect('/admin/datavoting')->with('success', 'Voting berhasil di hapus');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Candidate::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function tutup($id)
    {
        DB::table('candidates')->where('id',$id)->update([
            'status'=>'Vote ditutup'
        ]);
        return redirect()->back()->with('success','Voting ditutup');
    }
}
