<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all()->toArray();
        return array_reverse($notices);
    }

    public function add(Request $request)
    {
        $ntitle = $request->input('ntitle');
        $ndescription = $request->input('ndescription');

        $notices = new Notice([
            'ntitle' => $ntitle,
            'ndescription' => $ndescription,
        ]);

        $notices->save();

        return response()->json('add Notice successfully');
    }

    public function delete($id)
    {
        $notices = Notice::find($id);
        $notices->delete();

        return response()->json('selected row are delete successfully');
    }
}
