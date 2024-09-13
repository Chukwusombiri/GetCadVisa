<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        $team_members = Team::all();
        return view('admin.team')->with('team_members',$team_members);
    }

    public function create()
    {               
        return view('admin.addteam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string'],
            'position' => ['required','string'],
            'qualification' => ['required','string'],
            'first_shortnote' => ['required','string'],  
            'second_shortnote' => ['string','nullable'],
            'ig_link' => ['string','nullable'],
            'fb_link' => ['string','nullable'],         
            'twitter_link' => ['string','nullable'],
            'linkedIn_link' => ['string','nullable'],
            'photo' => ['required','image','max:1999']
        ]);         
        
        $path = $request->photo->storePublicly('team', 'public');       
        $teamMember =  new Team();
        $teamMember->name= $request->name;
        $teamMember->position= $request->position;
        $teamMember->qualification= $request->qualification;
        $teamMember->first_shortnote= $request->first_shortnote; 
        if ($request->has('second_shortnote')) {
            $teamMember->second_shortnote= $request->second_shortnote;
        }
        if ($request->has('ig_link')) {
            $teamMember->ig_link= $request->ig_link;
        }
        if ($request->has('fb_link')) {
            $teamMember->fb_link= $request->fb_link;
        }               
        if ($request->has('twitter_link')) {
            $teamMember->twitter_link= $request->twitter_link;
        }
        if ($request->has('linkedIn_link')) {
            $teamMember->linkedIn_link= $request->linkedIn_link;
        }
        $teamMember->photo= $path;

        $teamMember->save();

        return redirect()->route('admin.team_members')->with('success','Team member added successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $teamMember = Team::find($id);       
       return view('admin.editteam')->with([          
           'team_member' => $teamMember,
       ]);
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
        $this->validate($request,[
            'name' => ['required','string'],
            'position' => ['required','string'],
            'qualification' => ['required','string'],
            'first_shortnote' => ['required','string'],  
            'second_shortnote' => ['string','nullable'],
            'ig_link' => ['string','nullable'],
            'fb_link' => ['string','nullable'],         
            'twitter_link' => ['string','nullable'],
            'linkedIn_link' => ['string','nullable'],
            'photo' => ['image','max:1999']
        ]);         
                       
        $teamMember =  Team::find($id);
        $teamMember->name= $request->name;
        $teamMember->position= $request->position;
        $teamMember->qualification= $request->qualification;
        $teamMember->first_shortnote= $request->first_shortnote; 
        if ($request->has('second_shortnote')) {
            $teamMember->second_shortnote= $request->second_shortnote;
        }
        if ($request->has('ig_link')) {
            $teamMember->ig_link= $request->ig_link;
        }
        if ($request->has('fb_link')) {
            $teamMember->fb_link= $request->fb_link;
        }               
        if ($request->has('twitter_link')) {
            $teamMember->twitter_link= $request->twitter_link;
        }
        if ($request->has('linkedIn_link')) {
            $teamMember->linkedIn_link= $request->linkedIn_link;
        }
       
        if ($request->hasFile('photo')) {
            $path = $request->photo->storePublicly('team', 'public');
            $oldimage = $teamMember->photo;
            $teamMember->photo = $path;
            if($oldimage != 'team/team_avatar.jpg'){
                Storage::disk('public')->delete($oldimage);
            }            

        }  
        $teamMember->update();

        return redirect()->route('admin.team_members')->with('success', 'Team member modified successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamMember = Team::find($id);
        if($teamMember->photo != 'team/team_avatar.jpg'){
            Storage::disk('public')->delete($teamMember->photo);  
        }
        $teamMember->delete();

        return redirect()->route('admin.team_members')->with('success','team member removed successfully');
    }
}
