<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

class SiteController extends Controller
{
    public function index(){
    	$dir = '/';
	    $recursive = false; // Get subdirectories also?
	    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

	    //return $contents->where('type', '=', 'dir'); // directories
	    //$contents->where('type', '=', 'file'); // files
	    $contents = $contents->toArray();
	    dd($contents);
	    return view('frontend.index', compact('contents'));
    }
}
