<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatSection;

class StatController extends Controller
{

    public function ViewStats()
    {

        $stats = StatSection::all()->sortBy('order');

        return view('admin.stat.view_stats', compact('stats'));

    } //End Method

    /**
     * Save Service.
     */
    public function SaveStat(Request $request)
    {

        $request->validate([
            'key' => 'required',
            'value' => 'required',
        ],[
            'key.required' => 'key is required',
            'value.required' => 'value is required',
        ]);

        $max_no = StatSection::max('order');
        $order = $max_no + 1;

            StatSection::insert([
                'order' => $order,
                'key' => $request->key,
                'value' => $request->value,
            ]);

        $notification = array(
            'message' => 'Stat saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Sort slide.
     */
     public function SortStat(Request $request)
    {

        $order = $request->input('order');

        foreach ($order as $index => $id) {
        StatSection::where('id', $id)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Stat sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Update resource in storage.
     */
    public function UpdateStat(Request $request)
    {

        $id = $request->id;

            StatSection::findOrFail($id)->update([
                'key' => $request->key,
                'value' => $request->value,
                ]);

        $notification = array(
            'message' => 'Stat updated',
            );

        return redirect()->back()->with($notification);
    }  //End Method

    /**
     * Delete Stat.
     */
    public function DeleteStat($id)
    {
        
        $stat = StatSection::findOrFail($id);        
        $delImg = $stat->image;


        StatSection::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Stat deleted',
        );

        // return redirect()->back()->with($notification);

        return redirect()->route('view.stats')->with($notification);

    } //End Method
}
