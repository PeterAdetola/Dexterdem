<?php

namespace App\Http\Controllers\Custom;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Process;
use App\Models\Values;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServicesController extends Controller
{
    

    public function ViewServices()
    {

        $services = Service::all()->sortBy('order');

        return view('admin.service.view_services', compact('services'));

    } //End Method

    /**
     * Services page extras
     */
    public function ViewServicesExtra()
    {

        $processes = Process::all()->sortBy('order');
        $values = Values::all()->sortBy('order');

        return view('admin.service.service_extra', compact('processes'), compact('values'));

    } //End Method

    /**
     * Edit values
     */
    public function EditValues()
    {

        $values = Values::all()->sortBy('order');

        return view('admin.service.edit_values', compact('values'));

    } //End Method

    /**
     * Save Service.
     */
    public function SaveValue(Request $request)
    {
        if($request->id){
            $id = $request->id;
            Values::findOrFail($id)->update([
                'value' => $request->value,
            ]);

        }else{
        $request->validate([
            'value' => 'required',
        ],[
            'value.required' => 'value is required',
        ]);

        $max_no = Values::max('order');
        $order = $max_no + 1;

            Values::insert([
                'order' => $order,
                'value' => $request->value,
            ]);

        }


        $notification = array(
            'message' => 'Value saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Save Process.
     */
    public function SaveProcess(Request $request)
    {
        if($request->id){

            $id = $request->id;
            Process::findOrFail($id)->update([
                'process' => $request->process,
                'description' => $request->description,
            ]);

        } else {
            
        $request->validate([
            'process' => 'required',
            'description' => 'required',
        ],[
            'process.required' => 'process is required',
            'description.required' => 'description is required',
        ]);

        $max_no = Process::max('order');
        $order = $max_no + 1;

            Process::insert([
                'order' => $order,
                'process' => $request->process,
                'description' => $request->description,
            ]);

        }


        $notification = array(
            'message' => 'Process saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Sort Value.
     */
     public function SortValue(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $id) {
        Values::where('id', $id)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Values sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Create Services.
     */
    public function CreateService()
    {

        return view('admin.service.create_service');

    } //End Method


    /**
     * Save Service.
     */
    public function SaveService(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'name.required' => 'Service name is required',
            'summary.required' => 'Service summary is required',
            'image.required' => 'icon in PNG is required',
        ]); 

        $max_no = Service::max('order');
        $order = $max_no + 1;

        $image = $request->file('image');

            if($image) {

                $width = 612;
                $height = 344;
                $location = 'uploads/services/';
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize($width, $height);
                $img->save($location.$name_gen);
                $save_url = $location.$name_gen;

            $service = Service::create([
                'order' => $order,
                'name' => $request->name,
                'summary' => $request->summary,
                'image' => $save_url,
            ]);

                $notification = array(
                    'message' => 'Service saved',
                );

            return redirect()->route('view.services')->with($notification);

            } 

    }

    /**
     * Update Service.
     */
    public function UpdateService(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image) {

        $toDelete = Service::findOrFail($id);        
        $delImg = $toDelete->image;

        try {
            if(file_exists($delImg)) {
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }
    
            $width = 612;
            $height = 344;
            $location = 'uploads/services/';
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize($width, $height);
            $img->save($location.$name_gen);
            $save_url = $location.$name_gen;

            Service::findOrFail($id)->update([
                'name' => $request->name,
                'summary' => $request->summary,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Service updated',
        );

        return redirect()->back()->with($notification);

        } else {

            Service::findOrFail($id)->update([
                'name' => $request->name,
                'summary' => $request->summary,
                ]);

            $notification = array(
                'message' => 'Service updated',
                );

            return redirect()->back()->with($notification);
        }

    }  //End Method

    /**
     * Sort Service.
     */
     public function SortService(Request $request)
    {

        $serviceOrder = $request->input('order');

        foreach ($serviceOrder as $index => $serviceId) {
        Service::where('id', $serviceId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Service sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Sort Service Images.
     */
     public function SortServiceImgs(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $serviceId) {
        ServiceImgs::where('id', $serviceId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Service images sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Edit Service.
     */
    public function EditService($id)
    {

        $service = Service::findOrFail($id);

        // $serviceImages = $service->images->sortBy('order');

        // return view('admin.service.edit_service', compact('service'), compact('serviceImages'));
        return view('admin.service.edit_service', compact('service'));

    } // End Method |-------------------


    /**
     * Delete Service.
     */
    public function DeleteService($id)
    {
        // $images = ServiceImgs::where('service_id', $id)->get();

        // foreach($images as $image) {
        //     unlink(public_path($image->image));
        //   }

        // ServiceImgs::where('service_id', $id)->delete();
        
        $service = Service::findOrFail($id);     
        $delImg = $service->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        Service::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service deleted',
        );

        // return redirect()->back()->with($notification);

        return redirect()->route('view.services')->with($notification);

    } //End Method

    /**
     * Service page(Non-admin page).
     */
   public function ServicePage()
    {

        return view('public.services');

    } //End Method |-------------------

    /**
     * Edit Service Images.
     */
    public function EditServiceImages($id)
    {

        $service = Service::findOrFail($id);

        $serviceImages = $service->images->sortBy('order');

        return view('admin.service.edit_service_imgs', compact('service'), compact('serviceImages'));

    } // End Method |-------------------

    /**
     * Update resource in storage.
     */
    public function UpdateServiceImages(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image) {
        $service_imgs = ServiceImgs::findOrFail($id);        
        $delImg = $service_imgs->image;

        try {
            if(file_exists($delImg)) {
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());
        }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            // $img = $img->resize(200, 140);
            // $img->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $img->save('uploads/services/details/'.$name_gen);
            $save_url = 'uploads/services/details/'.$name_gen;


            ServiceImgs::findOrFail($id)->update([
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Service image updated',
        );

        return redirect()->back()->with($notification);

        } else {

        $notification = array(
            'message' => 'No image submitted',
        );

        return redirect()->back()->with($notification); 

        }
    }  //End Method

    /**
     * Delete Service image.
     */
    // public function DeleteServiceImg($id)
    // {
        
    //     $image = ServiceImgs::findOrFail($id);        
    //     $delImg = $image->image;

    //     try {
    //         if(file_exists($delImg)){
    //         unlink($delImg);
    //         }
    //     } catch (Exception $e) {
    //     Log::error("Error deleting old image: " . $e->getMessage());            
    //     }

    //     ServiceImgs::findOrFail($id)->delete();

    //     $notification = array(
    //         'message' => 'Image deleted',
    //     );

    //     return redirect()->back()->with($notification);

    // } //End Method

    /**
     * Save Service Image.
     */
    public function SaveServiceImg(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'image.required' => 'icon in PNG/JPG is required',
        ]);

        $order = 0;
        $id = $request->service_id;
        
        $image = $request->file('image');

        if($image) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            // $img = $img->resize(200, 140);
            // $img->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $img->save('uploads/services/details/'.$name_gen);
            $save_url = 'uploads/services/details/'.$name_gen;
        }

            ServiceImgs::insert([
                'order' => $order,
                'service_id' => $id,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Image saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Service Details page(Non-admin page).
     */
   public function ServiceDetailedPage($id)
    {

        $services = Service::all()->sortBy('order');

        // $service = Service::findOrFail($id);

        // $serviceImages = $service->images->sortBy('order');

        // return view('frontend.service.service_detailed', compact('service', 'services', 'serviceImages'));

        return view('public.services', compact( 'services'));

    } //End Method |-------------------
}
