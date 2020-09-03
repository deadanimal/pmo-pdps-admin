<?php

namespace App\Http\Controllers;

// use App\Tag; 
use App\Reqbanner;
// use App\Category;
use Carbon\Carbon;
use App\Http\Requests\ReqbannerRequest;

class ReqbannerController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Reqbanner::class);
    }

    /**
     * Display a listing of the Reqbanner
     *
     * @param \App\Reqbanner  $model
     * @return \Illuminate\View\View
     */
    public function index(Reqbanner $model)
    {
        // print_r("qweqweqweq");die;
        // return view('Reqbanner.index', ['Reqbanner' => $model->with(['tags', 'category'])->get()]);
        // $this->authorize('manage-items', User::class);

        return view('reqbanner.index', ['reqbanner' => $model->all()]);
    }

    /**
     * Show the form for creating a new item
     *
     * @param  \App\Tag $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function create(ReqbannerRequest $request, Reqbanner $model)
    {
        // print_r("qweqweqwe");die;
        return view('reqbanner.create');
        // return view('Program.create', [
        //     'tags' => $tagModel->get(['id', 'name']),
        //     'categories' => $categoryModel->get(['id', 'name'])
        // ]);

        // $model->create($request->all());
        // return redirect()->route('program.index')->withStatus(__('Role successfully created.'));
    }

    /**
     * Store a newly created item in storage
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @param  \App\Item  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ReqbannerRequest $request, Reqbanner $model)
    {   
        // echo "<pre>";
        // print_r($request->name);
        // dd($request);
        // die;
        // echo "</pre>";
        $reqbanner = $model->create($request->merge([
            'req_type' => $request->req_type ? $request->req_type : "-" ,
            'req_name' => $request->req_name ? $request->req_name : null,
            'news_name' => $request->news_name ? $request->news_name : null,
            'news_desc' => $request->news_desc ? $request->news_desc : null,
            'tarikh_mula' => $request->tarikh_mula ? $request->tarikh_mula : null,
            'tarikh_tamat' => $request->tarikh_tamat ? $request->tarikh_tamat : null,
            'banner_image' => $request->banner_image ? $request->banner_image : null,
            // 'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
        ])->all());

        // $reqbanner->tags()->sync($request->get('tags'));

        return redirect()->route('reqbanner.index')->withStatus(__('Item successfully created.'));
    }

    /**
     * Show the form for editing the specified item
     *
     * @param  \App\Item  $item
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit($reqbanner)
    {
        $reqbanner = Reqbanner::find($reqbanner);
        return view('reqbanner.edit', compact('reqbanner'));
    }
    // public function edit(reqbanner  $reqbanner)
    // {
    //     return view('reqbanner.edit', compact('reqbanner'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Itemuest  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ReqbannerRequest $request,$reqbanner)
    {
        $reqbanner = Reqbanner::find($reqbanner);
        // print_r($request->name);
        // print_r($request->description);
        // dd($request);

        // $item->tags()->sync($request->get('tags'));

        $reqbanner = $reqbanner->update($request->merge([
            'req_type' => $request->req_type ? $request->req_type : null ,
            'req_name' => $request->req_name ? $request->req_name : null,
            'news_name' => $request->news_name ? $request->news_name : null,
            'news_desc' => $request->news_desc ? $request->news_desc : null,
            'tarikh_mula' => $request->tarikh_mula ? $request->tarikh_mula : null,
            'tarikh_tamat' => $request->tarikh_tamat ? $request->tarikh_tamat : null,
            'banner_image' => $request->banner_image ? $request->banner_image : null,
        ])->all());

        // $program->update($request->all());
        return redirect()->route('reqbanner.index')->withStatus(__('request banner successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $reqbanner = Reqbanner::find($id);
        $reqbanner->destroy();
        return redirect()->route('reqbanner.index')->withStatus(__('reqbanner successfully deleted.'));
    }
}
