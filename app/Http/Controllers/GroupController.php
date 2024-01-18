<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::all();
        return view('show_group', ['group' => $group]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_g' => 'required|unique:groups|max:30',
            'group_semester' => 'required|max:50|string',
            'group_turn' => 'required|max:11|string',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $gro = new Group();

        $gro->group_g=$request->input('group_g');
        $gro->group_semester=$request->input('group_semester');
        $gro->group_turn=$request->input('group_turn');


        
        if($gro->save()){
            return redirect()->route('group.create')->with('success','Se guardo el registro correctamente!');

        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $group = Group::find($group->id);
    
        return view('Group.edit', ['group' => $group]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group = Group::find($group->id);

        $group->group_g = $request->group_g;
        $group->group_semester = $request->group_semester;
        $group->group_turn = $request->group_turn;

        
        if($group->save()){
            return redirect()->route('group.index')->with('success', 'El registro de '.$group-> group_g.' ha sido actualizado exitosamente');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $g =Group::find($group->id);

        if($g->delete()){
            return redirect()->route('group.index')->with('sucess', "El registro ha sido eliminado!" );
        }
    }
}
