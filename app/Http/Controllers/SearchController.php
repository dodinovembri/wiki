<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keywords = $request->keywords;
        if ($keywords === "*") {
            $data['search_result'] = KnowledgeModel::all();
        }else{
            $data['search_result'] = KnowledgeModel::where('knowledge', 'like', '%' . $keywords . '%')->get();
        }

        return view('search_result', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $insert = new KnowledgeModel();
        $insert->title = $request->title;
        $insert->knowledge = $request->knowledge;
        $insert->created_at = date('Y-m-d H:i:s');
        $insert->save();

        return redirect(url('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['knowledge'] = KnowledgeModel::find($id);
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = KnowledgeModel::find($id);
        $update->title = $request->title;
        $update->knowledge = $request->knowledge;
        $update->modified_at = date('Y-m-d H:i:s');
        $update->update();

        return redirect(url('/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
