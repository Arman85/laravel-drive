<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObjRequest;
use App\Http\Requests\UpdateObjRequest;
use App\Repositories\ObjRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use Storage;

class ObjController extends AppBaseController
{
    /** @var  ObjRepository */
    private $objRepository;

    public function __construct(ObjRepository $objRepo)
    {
        $this->objRepository = $objRepo;
    }

    /**
     * Display a listing of the Obj.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $objs = $this->objRepository->all();

        // The human readable folder name to get the contents of...
    // For simplicity, this folder is assumed to exist in the root directory.
    //     $folder = 'Тойхана "Еки жулдыз"';
    // // Get root directory contents...
    //     $contents = collect(Storage::cloud()->listContents('/', false));
    // // Find the folder you are looking for...
    //     $dir = $contents->where('type', '=', 'dir')
    //     ->where('filename', '=', $folder)
    //     ->first(); // There could be duplicate directory names!
    //     if ( ! $dir) {
    //         return 'No such folder!';
    //     }
    // // Get the files inside the folder...
    //     $files = collect(Storage::cloud()->listContents($dir['path'], false))
    //     ->where('type', '=', 'file');
    //     return $files->mapWithKeys(function($file) {
    //         $filename = $file['filename'].'.'.$file['extension'];
    //         $path = $file['path'];
    //     // Use the path to download each file via a generated link..
    //     // Storage::cloud()->get($file['path']);
    //         return [$filename => $path];
    //     });

        //dd($dir->filename);

        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        //return $contents->where('type', '=', 'dir'); // directories
        //return $contents->where('type', '=', 'file'); // files
        $dirs = $contents->where('type', '=', 'dir');
        //dd($dirs);

        return view('objs.index')->with('dirs', $dirs);

        // return view('objs.index')
        //     ->with('objs', $objs);
    }

    /**
     * Show the form for creating a new Obj.
     *
     * @return Response
     */
    public function create()
    {
        return view('objs.create');
    }

    /**
     * Store a newly created Obj in storage.
     *
     * @param CreateObjRequest $request
     *
     * @return Response
     */
    public function store(CreateObjRequest $request)
    {
        $input = $request->all();

        //$obj = $this->objRepository->create($input);

        //$test = Storage::cloud()->put('test.txt', 'Hi World today'); 
        //dd($input['name']);    
        Storage::cloud()->makeDirectory($input['name']);

        Flash::success('Папка сделана.');

        return redirect(route('objs.index'));
    }

    /**
     * Display the specified Obj.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obj = $this->objRepository->find($id);

        if (empty($obj)) {
            Flash::error('Obj not found');

            return redirect(route('objs.index'));
        }

        return view('objs.show')->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified Obj.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obj = $this->objRepository->find($id);

        if (empty($obj)) {
            Flash::error('Obj not found');

            return redirect(route('objs.index'));
        }

        return view('objs.edit')->with('obj', $obj);
    }

    /**
     * Update the specified Obj in storage.
     *
     * @param int $id
     * @param UpdateObjRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObjRequest $request)
    {
        $obj = $this->objRepository->find($id);

        if (empty($obj)) {
            Flash::error('Obj not found');

            return redirect(route('objs.index'));
        }

        $obj = $this->objRepository->update($request->all(), $id);

        Flash::success('Obj updated successfully.');

        return redirect(route('objs.index'));
    }

    /**
     * Remove the specified Obj from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obj = $this->objRepository->find($id);

        if (empty($obj)) {
            Flash::error('Obj not found');

            return redirect(route('objs.index'));
        }

        $this->objRepository->delete($id);

        Flash::success('Obj deleted successfully.');

        return redirect(route('objs.index'));
    }
}
