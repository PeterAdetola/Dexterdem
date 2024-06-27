<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSummary;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    /**
     * Get About Summary.
     */

    public function UpdateAboutSummary(Request $request)
    {
        $aboutSummary = AboutSummary::first();
                // Check if img is submitted
            $img = $request->file('image');

        if(!$aboutSummary){

            if($img){

                    $width = 1144;
                    $height = 1300;
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                    $img = $manager->read($img);
                    $img = $img->resize($width, $height);
                    $img->save('uploads/about/'.$name_gen);
                    $save_url = 'uploads/about/'.$name_gen;

                    $aboutSummary = AboutSummary::create([
                        'image' => $save_url,
                    ]);

                    $notification = array(
                        'message' => 'Image Saved'
                    );

                    return redirect()->back()->with($notification);                        

                } 

                $aboutSummary = AboutSummary::create([
                    'summary' => $request->input('summary'),
                ]);

                    $notification = array(
                        'message' => 'Summary Saved'
                    );

                    return redirect()->back()->with($notification);   

        } else {

            if($img){
                // Delete existing img, if it exists
                    if ($aboutSummary->image) {
                        try {
                            if(file_exists($aboutSummary->image)) {
                            unlink($aboutSummary->image);
                            }
                        } catch (Exception $e) {
                        Log::error("Error deleting old image: " . $e->getMessage());            
                        }
                    }

                    $width = 1144;
                    $height = 1300;
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                    $img = $manager->read($img);
                    $img = $img->resize($width, $height);
                    // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
                    $img->save('uploads/about/'.$name_gen);
                    $save_url = 'uploads/about/'.$name_gen;

                    $aboutSummary->update([
                        'image' => $save_url,
                    ]);

                    $notification = array(
                        'message' => 'Image Updated'
                    );

                    return redirect()->back()->with($notification);

            } else {

            $aboutSummary->update($request->all());

                    $notification = array(
                        'message' => 'Summary Saved'
                    );

            return redirect()->back()->with($notification); 

            }

        }

    } //End Method

    /**
     * About page(Non-admin page).
     */
   public function AboutusPage()
    {

        return view('public.aboutus');

    } //End Method |-------------------
}
