<?php

namespace App\Http\Controllers;

// use App\Tag; 
use App\Orgdata;
// use App\Category;
use Carbon\Carbon;
use App\Http\Requests\OrgdataRequest;

class OrgdataController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Orgdata::class);
    }

    /**
     * Display a listing of the orgdata
     *
     * @param \App\Orgdata  $model
     * @return \Illuminate\View\View
     */
    public function index(Orgdata $model)
    {
        // print_r("qweqweqweq");die;
        // return view('orgdata.index', ['orgdata' => $model->with(['tags', 'category'])->get()]);
        // $this->authorize('manage-items', User::class);

        return view('orgdata.index', ['orgdata' => $model->all()]);
    }

    /**
     * Show the form for creating a new item
     *
     * @param  \App\Tag $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function create(OrgdataRequest $request, Orgdata $model)
    {
        // print_r("qweqweqwe");die;
        return view('orgdata.create');
        // return view('orgdata.create', [
        //     'tags' => $tagModel->get(['id', 'name']),
        //     'categories' => $categoryModel->get(['id', 'name'])
        // ]);

        // $model->create($request->all());
        // return redirect()->route('orgdata.index')->withStatus(__('Role successfully created.'));
    }

    /**
     * Store a newly created item in storage
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @param  \App\Item  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrgdataRequest $request, Orgdata $model)
    {   
        // echo "<pre>";
        // print_r($request->name);
        // dd($request);
        // die;
        // echo "</pre>";
        $orgdata = $model->create($request->merge([
            'name' => $request->name ? $request->name : "-" ,
            'description' => $request->description ? $request->description : null,
            // 'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
        ])->all());

        // $orgdata->tags()->sync($request->get('tags'));

        return redirect()->route('orgdata.index')->withStatus(__('Item successfully created.'));
    }

    /**
     * Show the form for editing the specified item
     *
     * @param  \App\Item  $item
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit($orgdata)
    {
        $orgdata = Orgdata::find($orgdata);
        return view('orgdata.edit', compact('orgdata'));
    }
    // public function edit(Orgdata  $orgdata)
    // {
    //     return view('orgdata.edit', compact('orgdata'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Itemuest  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrgdataRequest $request,$orgdata)
    {
        $orgdata = Orgdata::find($orgdata);
        // print_r($request->name);
        // print_r($request->description);
        // dd($request);

        // $item->tags()->sync($request->get('tags'));

        $orgdata = $orgdata->update($request->merge([
            'name' => $request->name ? $request->name : "-" ,
            'description' => $request->description ? $request->description : null,
        ])->all());

        // $orgdata->update($request->all());
        return redirect()->route('orgdata.index')->withStatus(__('Orgdata successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $orgdata = Orgdata::find($id);
        $orgdata->destroy();
        return redirect()->route('orgdata.index')->withStatus(__('orgdata successfully deleted.'));
    }
}
