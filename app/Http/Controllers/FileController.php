<?php

namespace App\Http\Controllers;

use Thumbnail;
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
	
    public function showUploadForm()
    {
    	return view('main.upload');
    	// return $request->all();
    }

    public function storeFile(request $request)
    {
    	if($request->hasFile('videoFile'))
    	{       
    		$filename = $request->file('videoFile')->getClientOriginalName();
            $withoutExtFile = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

    		$filesize = $request->file('videoFile')->getClientSize(); // file size in bytes
    		$request->file('videoFile')->storeAs('public/upload',$filename);
            $videoUrl = storage_path('\\app\\public\\upload\\'.$filename);
            $storageUrl = storage_path('\\app\\public\\upload\\thumbs\\');
    		$file = new File;
    		$file->name = $filename;
    		$file->size = $filesize; 
            $file->thumbnail = $withoutExtFile;
    		$file->save();

            // dd($videoUrl);
            // dd($storageUrl);
            // dd($withoutExtFile);
            dd(Thumbnail::getThumbnail('C:\Users\Sanchit\Desktop\Sanchit Files\Laravel5.8\main\storage\app\public\upload\\'.$filename, 'C:\Users\Sanchit\Desktop\Sanchit Files\Laravel5.8\main\storage\app\public\thumbs\\',$withoutExtFile.'.png', 5));

            // dd(Thumbnail::getThumbnail(storage_path('\\app\\public\\upload\\'.$filename), storage_path('\\app\\public\\upload\\thumbs\\'), $withoutExtFile.'.png', 5));
            // dd($thumb);
            return 'done'; 

    	}
    	return $request->all();
    }

    public function display()
    {

        $files = File::all();
        return view('main.index')->with('files',$files);

    }
}
