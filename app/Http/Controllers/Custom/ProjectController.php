<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\ProjectImgs;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProjectController extends Controller
{

    /**
     * View Project.
     */
    public function ViewProjects()
    {

        // $projects = Project::all();
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('admin.project.view_projects', compact('projects'));

    } //End Method

    /**
     * Project page extras
     */
    public function ViewProjectsExtra()
    {

        return view('admin.project.project_extra');

    } //End Method

    /**
     * Create Project.
     */
    public function CreateProject()
    {

        return view('admin.project.create_project');

    } //End Method

    /**
     * Save Project.
     */
    public function SaveProject(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'category' => 'required',
        ],[
            'image.required' => 'Project image is required',
            'name.required' => 'Project name is required',
            'category.required' => 'Project category is required',
        ]);

        
        // $max_no = ProjectImgs::max('order');
        // $order = $max_no + 1;


            // $images = $request->has('images');
            $details = isset($request->details);
            $images = $request->file('images');
            $image = $request->file('image');

            if($images && $details) {

                // echo('Images and details present!');
                // exit();
        
                if($image) {
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                }

                $project = Project::create([
                    'image' => $save_url,
                    'name' => $request->name,
                    'category' => $request->category,
                    'location' => $request->location,
                    'year' => $request->year,
                    'details' => $request->details,
                ]);


                foreach( $images as $image) {

                    if($image) {
                        $width = 600;
                        $height = 600;
                        $location = 'uploads/projects/details/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                    }
                
                    ProjectImgs::insert([
                        'project_id' => $project->id,
                        'order' => $order,
                        'image' => $save_urls,
                    ]);

                }// End of the foreach

                $notification = array(
                    'message' => 'Project saved',
                    );

                return redirect()->route('view.projects')->with($notification);  

            } elseif($images && !$details) {
                // echo('Image, no details!');
                // exit();
        
                if($image) {
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                }

                $project = Project::create([
                    'image' => $save_url,
                    'name' => $request->name,
                    'category' => $request->category,
                    'location' => $request->location,
                    'year' => $request->year,
                ]);


                foreach( $images as $image) {

                    if($image) {
                        $width = 600;
                        $height = 600;
                        $location = 'uploads/projects/details/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                    }        
                   

                
                     ProjectImgs::insert([
                        'project_id' => $project->id,
                        'order' => $order,
                        'image' => $save_urls,
                    ]);

                }// End of the foreach

                $notification = array(
                    'message' => 'Project saved',
                    // 'message' => 'Project saved, no details',
                    );

                return redirect()->route('view.projects')->with($notification);

            } elseif(!$images && $details) {
                // echo('Details, no image!');
                // exit();
        
                if($image) {
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                }

                $project = Project::create([
                    'image' => $save_url,
                    'name' => $request->name,
                    'category' => $request->category,
                    'location' => $request->location,
                    'year' => $request->year,
                    'details' => $request->details,
                ]);

                $notification = array(
                    'message' => 'Project saved',
                    // 'message' => 'Project details saved, no image',
                    );

                return redirect()->route('view.projects')->with($notification);

            } else {
                    // echo('No details, no image!');
                    // exit();
        
                if($image) {
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                }

                $project = Project::create([
                    'image' => $save_url,
                    'name' => $request->name,
                    'category' => $request->category,
                    'location' => $request->location,
                    'year' => $request->year,
                ]);

                $notification = array(
                    'message' => 'Project saved',
                    // 'message' => 'No image, no details',
                    );

                return redirect()->route('view.projects')->with($notification);            
            }

    } // End Method |-------------------

    /**
     * Edit Project.
     */
    public function EditProject($id)
    {

        $project = Project::findOrFail($id);

        $projectImages = $project->images->sortBy('order');

        return view('admin.project.edit_project', compact('project'), compact('projectImages'));

    } // End Method |-------------------

    /**
     * Edit Project Images.
     */
    public function EditProjectImages($id)
    {

        $project = Project::findOrFail($id);

        $projectImages = $project->images->sortBy('order');

        return view('admin.project.edit_project_imgs', compact('project'), compact('projectImages'));

    } // End Method |-------------------

    /**
     * Update resource in storage.
     */
    public function UpdateProjectImages(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $project_imgs = ProjectImgs::findOrFail($id);        
        $delImg = $project_imgs->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }
                        $width = 600;
                        $height = 600;
                        $location = 'uploads/projects/details/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;


            ProjectImgs::findOrFail($id)->update([
                'image' => $save_urls,
            ]);

        $notification = array(
            'message' => 'Project image updated',
        );

        return redirect()->back()->with($notification);

        } else {

            ProjectImgs::findOrFail($id)->update([
                'caption' => $request->caption,
            ]);

        $notification = array(
            'message' => 'Image Update',
        );

        return redirect()->back()->with($notification);            
        }
    }  //End Method

    /**
     * Sort Project.
     */
     public function SortProject(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $projectId) {
        Project::where('id', $projectId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Project sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Sort Project.
     */
     public function SortProjectImgs(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $projectId) {
        ProjectImgs::where('id', $projectId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Project images sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Delete Project image.
     */
    public function DeleteProjectImg($id)
    {
        
        $image = ProjectImgs::findOrFail($id);        
        $delImg = $image->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        ProjectImgs::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image deleted',
        );

        return redirect()->back()->with($notification);

    } //End Method

    /**
     * Save Project Image.
     */
    public function SaveProjectImg(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'image.required' => 'icon in PNG/JPG is required',
        ]);

        $order = 0;
        $id = $request->project_id;
        
        $image = $request->file('image');

        if($image) {
                    $width = 600;
                    $height = 600;
                    $location = 'uploads/projects/details/';
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $img = $manager->read($image);
                    $img = $img->resize($width, $height);
                    $img->save($location.$name_gen);
                    $save_urls = $location.$name_gen;
        }

            ProjectImgs::insert([
                'order' => $order,
                'project_id' => $id,
                'image' => $save_url,
                'caption' => $request->caption,
            ]);

        $notification = array(
            'message' => 'Image saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Update resource in storage.
     */
    public function UpdateProject(Request $request)
    {

        $id = $request->id;
        $order = 0;
        $image = $request->file('image');
        $images = $request->file('images');

        if($image && $images) {
        $project = Project::findOrFail($id);        
        $delImg = $project->image;

        try {
            if(file_exists($delImg)) {
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;


                foreach( $images as $image) {

                    if($image) {
                    $width = 600;
                    $height = 600;
                    $location = 'uploads/projects/details/';
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $img = $manager->read($image);
                    $img = $img->resize($width, $height);
                    $img->save($location.$name_gen);
                    $save_urls = $location.$name_gen;
                    }
                
                    ProjectImgs::insert([
                        'project_id' => $id,
                        'order' => $order,
                        'image' => $save_urls,
                    ]);

                }// End of the foreach


            Project::findOrFail($id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'location' => $request->location,
                'year' => $request->year,
                'details' => $request->details,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Project updated',
        );

        return redirect()->back()->with($notification);

        } elseif($image && !$images) {
            // No Images just an image
        $project = Project::findOrFail($id);        
        $delImg = $project->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());      
        }
                        $width = 1144;
                        $height = 1300;
                        $location = 'uploads/projects/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;


            Project::findOrFail($id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'location' => $request->location,
                'year' => $request->year,
                'details' => $request->details,
                'image' => $save_urls,
            ]);

        $notification = array(
            'message' => 'Project updated',
        );

        return redirect()->back()->with($notification);


        } elseif(!$image && $images) {
            // No image but there are images

            Project::findOrFail($id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'location' => $request->location,
                'year' => $request->year,
                'details' => $request->details,
            ]);

                foreach( $images as $image) {

                    if($image) {
                        $width = 600;
                        $height = 600;
                        $location = 'uploads/projects/details/';
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        $img = $manager->read($image);
                        $img = $img->resize($width, $height);
                        $img->save($location.$name_gen);
                        $save_urls = $location.$name_gen;
                    }
                
                    ProjectImgs::insert([
                        'project_id' => $id,
                        'order' => $order,
                        'image' => $save_urls,
                    ]);

                }// End of the foreach

        $notification = array(
            'message' => 'Project updated',
        );

        return redirect()->back()->with($notification);

        } else {

            Project::findOrFail($id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'location' => $request->location,
                'year' => $request->year,
                'details' => $request->details,
            ]);

        $notification = array(
            'message' => 'Project updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Delete Project.
     */
    public function DeleteProject($id)
    {
        $images = ProjectImgs::where('project_id', $id)->get();

        foreach($images as $image) {
            unlink(public_path($image->image));
          }

        ProjectImgs::where('project_id', $id)->delete();
        
        $project = Project::findOrFail($id);        
        $delImg = $project->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        Project::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Project deleted',
        );

        return redirect()->route('view.projects')->with($notification);

    } //End Method

    /**
     * Project page(Non-admin page).
     */
   public function ProjectPage()
    {

        return view('public.projects');

    } //End Method |-------------------

    /**
     * Project Details page(Non-admin page).
     */
   public function ProjectDetailedPage($id)
    {

        $project = Project::findOrFail($id);

        $projectImages = $project->images->sortBy('order');


        // $previousProject = Project::where('id', '<', $project->id)->where('details', '!=', '')->orderBy('id', 'desc')->first();
        // $nextProject = Project::where('id', '>', $project->id)->where('details', '!=', '')->orderBy('id', 'asc')->first();

        // return view('public.project_detailed', compact('project', 'projectImages', 'previousProject', 'nextProject'));
        return view('public.project_detailed', compact('project', 'projectImages'));

    } //End Method |-------------------

}
