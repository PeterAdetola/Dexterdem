<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HeroController extends Controller
{


    /**
     * Update the user's profile information.
     */
    public function UpdateHero(Request $request)
    {
        $heroSection = HeroSection::first();
    // Check if a row exists
        // if a row does not exist
        if(!$heroSection){

                // Check if img is submitted
            $img1 = $request->file('imageOne');
            $img2 = $request->file('imageTwo');
            $img = $img1 || $img2;

            if($img){

                // Check which img
                // Resize and Upload accordingly

                if($img1){

                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img1->getClientOriginalExtension();
                    $img = $manager->read($img1);
                    $sizedImg = $img->resize(1302, 1080);
                    $sizedImg->save('uploads/hero/'.$name_gen);
                    $save_url = 'uploads/hero/'.$name_gen;

                    $heroSection = HeroSection::create([
                        'imageOne' => $save_url,
                        'captionOne' => $request->captionOne,
                    ]);

                    $notification = array(
                        'message' => 'Hero Image Saved'
                    );

                    return redirect()->back()->with($notification);                         

                } else {

                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img2->getClientOriginalExtension();
                    $img = $manager->read($img2);
                    $sizedImg = $img->resize(526, 408);
                    $sizedImg->save('uploads/hero/'.$name_gen);
                    $save_url = 'uploads/hero/'.$name_gen;

                    $heroSection = HeroSection::create([
                        'imageTwo' => $save_url,
                        'captionTwo' => $request->captionTwo,
                    ]);

                    $notification = array(
                        'message' => 'Hero Image Saved'
                    );

                    return redirect()->back()->with($notification);

                }

            } else {

                $heroSection = HeroSection::create([
                    'heading' => $request->input('heading'),
                    'summary' => $request->input('summary'),
                    'tagline' => $request->input('tagline'),
                ]);

            }

        $notification = array(
            'message' => 'Hero Saved'
        );

        return redirect()->back()->with($notification);

        // if a row exist
        } else {

            // Check if img is submitted
            $img1 = $request->file('imageOne');
            $img2 = $request->file('imageTwo');
            $img = $img1 || $img2;

            if($img){

                if($img1){
                // Delete existing img, if it exists
                    if ($heroSection->imageOne) {
                        try {
                            if(file_exists($heroSection->imageOne)) {
                            unlink($heroSection->imageOne);
                            }
                        } catch (Exception $e) {
                        Log::error("Error deleting old image: " . $e->getMessage());            
                        }
                    }

                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img1->getClientOriginalExtension();
                    $img = $manager->read($img1);
                    $sizedImg = $img->resize(1302, 1080);
                    // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
                    $sizedImg->save('uploads/hero/'.$name_gen);
                    $save_url = 'uploads/hero/'.$name_gen;

                    $heroSection->update([
                        'imageOne' => $save_url,
                        'captionOne' => $request->captionOne,
                    ]);

                    $notification = array(
                        'message' => 'Hero Image Updated'
                    );

                    return redirect()->back()->with($notification);

                } else {
                // Delete existing img, if it exists
                    if ($heroSection->imageTwo) {
                        try {
                            if(file_exists($heroSection->imageTwo)) {
                            unlink($heroSection->imageTwo);
                            }
                        } catch (Exception $e) {
                        Log::error("Error deleting old image: " . $e->getMessage());            
                        }
                    }

                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$img2->getClientOriginalExtension();
                    $img = $manager->read($img2);
                    $sizedImg = $img->resize(526, 408);
                    // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
                    $sizedImg->save('uploads/hero/'.$name_gen);
                    $save_url = 'uploads/hero/'.$name_gen;

                    $heroSection->update([
                        'imageTwo' => $save_url,
                        'captionTwo' => $request->captionTwo,
                    ]);

                    $notification = array(
                        'message' => 'Hero Image Updated'
                    );

                    return redirect()->back()->with($notification);

            }

        $notification = array(
            'message' => 'Hero Image Updated'
        );

        return redirect()->back()->with($notification);

            } else {

        $heroSection->update($request->all());

            }

        $notification = array(
            'message' => 'Hero Updated'
        );

        return redirect()->back()->with($notification);

        }
    }
}
