<?php
namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FeatureController extends Controller
{

    public function ViewFeatures()
    {
       
        $features = Feature::all()->sortBy('order');

        return view('admin.feature.view_features', compact('features'));

    } //End Method

    /**
     * Save Service.
     */
    public function SaveFeature(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg',
        ],[
            'name.required' => 'Feature\'s name is required',
            'image.required' => 'Image in JPG is required',
        ]);

        $entry_no = count(Feature::all());
        $order = $entry_no + 1;
        
        $image = $request->file('image');

        if($image) {
                $width = 612;
                $height = 411;
                $location = 'uploads/features/';

                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize($width, $height);
            $img->save($location.$name_gen);
            $save_url = $location.$name_gen;
        }

            Feature::insert([
                'order' => $order,
                'name' => $request->name,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Feature saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Edit Feature.
     */
    public function EditFeature($id)
    {

        $feature = Feature::findOrFail($id);

        return view('admin.feature.edit_feature', compact('feature'));

    } // End Method

    /**
     * Update Feature.
     */
    public function UpdateFeature(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $feature = Feature::findOrFail($id);        
        $delImg = $feature->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

                $width = 612;
                $height = 411;
                $location = 'uploads/features/';

                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize($width, $height);
            $img->save($location.$name_gen);
            $save_url = $location.$name_gen;


            Feature::findOrFail($id)->update([
                'name' => $request->name,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Feature updated',
        );

        return redirect()->back()->with($notification);

        } else {

            Feature::findOrFail($id)->update([
                'name' => $request->name,
                ]);

        $notification = array(
            'message' => 'Feature updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Sort Feature.
     */
     public function SortFeature(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $featureId) {
        Feature::where('id', $featureId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Feature sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Delete Feature.
     */
    public function DeleteFeature($id)
    {
        
        $delete = Feature::findOrFail($id);        
        $delImg = $delete->image;

        try {
            if(file_exists($delImg)) {
            unlink($delImg);
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        Feature::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Feature deleted',
        );


        return redirect()->route('view.features')->with($notification);

    } //End Method
}
