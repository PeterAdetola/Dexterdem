<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use App\Models\InnerHero;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class InnerHeroController extends Controller
{

    /**
     * Save Service.
     */
    public function SaveHero(Request $request)
    {
        $innerHeroExists = InnerHero::where('page', $request->page)->exists();        
        $image = $request->file('image');

        if($innerHeroExists){

        $id = $request->id;

            if($image){

        $toDelete = InnerHero::findOrFail($id);        
        $delImg = $toDelete->image;

                try {
                    if(file_exists($delImg)) {
                    unlink($delImg);
                    }
                } catch (Exception $e) {
                Log::error("Error deleting old image: " . $e->getMessage());            
                }

                if($request->page == 'contact'){
                $width = 1536;
                $height = 661;                    
                } else {                    
                $width = 2880;
                $height = 1297;
                }
                $location = 'uploads/hero/';
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize($width, $height);
                $img->save($location.$name_gen);
                $save_url = $location.$name_gen;

            InnerHero::findOrFail($id)->update([
                'image' => $save_url,
            ]);

            } else {

            InnerHero::findOrFail($id)->update([
                'heading' => $request->heading,
                'summary' => $request->summary,
                'page' => $request->page,
            ]);

            }

        } else {

        // dd($request->all());

            if($image){

                if($request->page == 'contact'){
                $width = 1536;
                $height = 661;                    
                } else {                    
                $width = 2880;
                $height = 1297;
                }
                $location = 'uploads/hero/';
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize($width, $height);
                $img->save($location.$name_gen);
                $save_url = $location.$name_gen;

            InnerHero::insert([
                'image' => $save_url,
            ]);

            } else {

            InnerHero::insert([
                'heading' => $request->heading,
                'summary' => $request->summary,
                'page' => $request->page,
            ]);

            }
        }

        $notification = array(
            'message' => 'Hero saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method
}
