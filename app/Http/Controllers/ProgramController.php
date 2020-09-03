<?php

namespace App\Http\Controllers;

// use App\Tag; 
use App\Program;
// use App\Category;
use Carbon\Carbon;
use App\Http\Requests\ProgramRequest;

class ProgramController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Program::class);
    }

    /**
     * Display a listing of the program
     *
     * @param \App\Program  $model
     * @return \Illuminate\View\View
     */
    public function index(Program $model)
    {
        // print_r("qweqweqweq");die;
        // return view('Program.index', ['Program' => $model->with(['tags', 'category'])->get()]);
        // $this->authorize('manage-items', User::class);

        return view('program.index', ['program' => $model->all()]);
    }

    /**
     * Show the form for creating a new item
     *
     * @param  \App\Tag $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function create(ProgramRequest $request, Program $model)
    {
        // print_r("qweqweqwe");die;
        return view('program.create');
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
    public function store(ProgramRequest $request, Program $model)
    {   
        // echo "<pre>";
        // print_r($request->name);
        // dd($request);
        // die;
        // echo "</pre>";
        $program = $model->create($request->merge([
            'name' => $request->name ? $request->name : "-" ,
            'description' => $request->description ? $request->description : null,
            // 'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
        ])->all());

        // $program->tags()->sync($request->get('tags'));

        return redirect()->route('program.index')->withStatus(__('Item successfully created.'));
    }

    /**
     * Show the form for editing the specified item
     *
     * @param  \App\Item  $item
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit($program)
    {
        $program = Program::find($program);
        return view('program.edit', compact('program'));
    }
    // public function edit(program  $program)
    // {
    //     return view('program.edit', compact('program'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Itemuest  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProgramRequest $request,$program)
    {
        $program = Program::find($program);
        // print_r($request->name);
        // print_r($request->description);
        // dd($request);

        // $item->tags()->sync($request->get('tags'));

        $program = $program->update($request->merge([
            'teras' => $request->teras ? $request->teras : "-" ,
            'name' => $request->name ? $request->name : null,
            'kump_sasaran' => $request->kump_sasaran ? $request->kump_sasaran : null,
            'kategori' => $request->kategori ? $request->kategori : null,
            'sub_kategori' => $request->sub_kategori ? $request->sub_kategori : null,
            'tarikh_mula' => $request->tarikh_mula ? $request->tarikh_mula : null,
            'tarikh_tamat' => $request->tarikh_tamat ? $request->tarikh_tamat : null,
            'obj_program' => $request->obj_program ? $request->obj_program : null,
            'manfaat' => $request->manfaat ? $request->manfaat : null,
            'kos' => $request->kos ? $request->kos : null,
            'kekerapan' => $request->kekerapan ? $request->kekerapan : null,
            'status_pelaksanaan' => $request->status_pelaksanaan ? $request->status_pelaksanaan : null,
            'tidak_aktif' => $request->tidak_aktif ? $request->tidak_aktif : null,
            'syarat_program' => $request->syarat_program ? $request->syarat_program : null,
            'agensi_url' => $request->agensi_url ? $request->agensi_url : null,
            'program_logo' => $request->program_logo ? $request->program_logo : null,
        ])->all());

        // $program->update($request->all());
        return redirect()->route('program.index')->withStatus(__('program successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->destroy();
        return redirect()->route('program.index')->withStatus(__('program successfully deleted.'));
    }
}
