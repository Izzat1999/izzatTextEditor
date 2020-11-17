<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TxtController extends Controller
{
    public function store()
    {
        $txt = new Text();
        $txt->textcontent = request('textcontent');
        $txt->updated_at = date('Y-m-d H:i');
        $txt->updated_at = date('Y-m-d H:i');
        $txt->save();

        return redirect('/')->with('msg','Saved');
    }
    public function retrieve() 
    {
        $txts = Text::all();

        return view('savedtxt', compact('txts'));
    }
    public function manage() 
    {
        $IDtxt = request('ID');

        if(isset($_POST['delete']))
        {
            $txt = Text::findOrFail($IDtxt);
            $txt->delete();
        }
        else if(isset($_POST['update']))
        {
            $txt = Text::findOrFail($IDtxt);

            return view('updatetxt', compact('txt'));
        }
        
        return redirect('/saved');
    }
    public function update($id) 
    {
        $txt = Text::findOrFail($id);
        $txt->textcontent = request('textcontent');
        $txt->updated_at = date('Y-m-d H:i:s');
        $txt->save();

        return redirect('/saved');
    }
    
}
