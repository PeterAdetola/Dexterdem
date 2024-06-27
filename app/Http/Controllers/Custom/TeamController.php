<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\TeamIntro;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeamController extends Controller
{

    public function ViewTeamIntro()
    {

        $intro = TeamIntro::all()->first();

        return view('admin.team.team_intro', compact('intro'));

    } //End Method

    /**
     * Save Service.
     */
    public function SaveTeamIntro(Request $request)
    {
        $teamIntro = TeamIntro::first();

        if($teamIntro){

            $teamIntro->update([
                'heading' => $request->heading,
                'intro' => $request->intro,
            ]);

        } else {

            TeamIntro::insert([
                'heading' => $request->heading,
                'intro' => $request->intro,
            ]);
            
        }

        $notification = array(
            'message' => 'Intro saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    public function ViewMembers()
    {

        $members = TeamMember::all()->sortBy('order');

        return view('admin.team.view_members', compact('members'));

    }

    /**
     * Save Service.
     */
    public function SaveMember(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'name.required' => 'Fullname is required',
            'role.required' => 'Role/Office is required',
            'image.required' => 'Image in JPG/PNG is required',
        ]);

        $max_no = TeamMember::max('order');
        $order = $max_no + 1;
        $image = $request->file('image');

        if($image) {
                    $width = 440;
                    $height = 440;
                    $location = 'uploads/team/';
                    
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $img = $manager->read($image);
                    $img = $img->resize($width, $height);
            $img->save($location.$name_gen);
            $save_url = $location.$name_gen;
        }

            TeamMember::insert([
                'order' => $order,
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Member saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Sort slide.
     */
     public function SortMember(Request $request)
    {

        $memberOrder = $request->input('order');

        foreach ($memberOrder as $index => $memberId) {
        TeamMember::where('id', $memberId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Team members sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Edit Service.
     */
    public function EditMember($id)
    {

        $member = TeamMember::findOrFail($id);

        return view('admin.team.edit_member', compact('member'));

    } // End Method

    /**
     * Update resource in storage.
     */
    public function UpdateMember(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $service = Service::findOrFail($id);        
        $delImg = $service->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }
                    $width = 440;
                    $height = 440;
                    $location = 'uploads/team/';
                    
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $img = $manager->read($image);
                    $img = $img->resize($width, $height);
            $img->save($location.$name_gen);
            $save_url = $location.$name_gen;


            TeamMember::findOrFail($id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Member updated',
        );

        return redirect()->back()->with($notification);

        } else {

            TeamMember::findOrFail($id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                ]);

        $notification = array(
            'message' => 'Member details updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Delete Member.
     */
    public function DeleteMember($id)
    {
        
        $member = TeamMember::findOrFail($id);        
        $delImg = $member->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        TeamMember::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Member deleted',
        );

        // return redirect()->back()->with($notification);

        return redirect()->route('view.members')->with($notification);

    } //End Method
}
