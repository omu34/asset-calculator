<?php

// namespace App\Http\Controllers\Asset;

// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Http\Requests\StoreAssetRequest;
// use App\Http\Requests\UpdateAssetRequest;
// use App\Models\Asset;

// class AssetController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//         $assets = Asset::all();

//         return view('asset.index', compact('assets'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//         return view('asset.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */


//     public function store(StoreAssetRequest $request)
//     {
//         $validatedData = $request->validate([
//             'asset_description' => 'required|string',
//             'asset_price' => 'required|numeric|between:0,9999.99',
//             'asset_location' => 'required|string',
//         ]);

//         Asset::create($validatedData);

//         return redirect()->route('asset.index');
//     }



//     /**
//      * Display the specified resource.
//      */
//     public function show(Asset $asset)
//     {
//         // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//         return view('asset.show', compact('asset'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Asset $asset)
//     {
//         // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//         return view('asset.edit', compact('asset'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateAssetRequest $request, Asset $asset)
//     {
//         $asset->update($request->validated());

//         return redirect()->route('asset.index');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Asset $asset)
//     {
//         // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//         $asset->delete();

//         return redirect()->route('asset.index');
//     }
// }





namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use App\Models\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();

        return view('asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asset.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //     public function store(StoreAssetRequest $request)
    // {
    //     // Retrieve the authenticated user
    //     $user = auth()->user();

    //     // Validate the request data
    //     $validatedData = $request->validated();

    //     // Add the user_id to the validated data
    //     // $validatedData['user_id'] = $user->id;
    //     $validatedData['asset_price'] = $user->asset_price;
    //     $validatedData['asset_location'] = $user->asset_location;


    //     // Create the asset
    //     $asset = Asset::create($validatedData);

    //     if ($asset) {
    //         return redirect()->route('asset.index')->with('success', 'Asset created successfully.');
    //     } else {
    //         return back()->withInput()->with('error', 'Failed to create asset.');
    //     }
    // }



    public function store(StoreAssetRequest $request)
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Validate the request data
        $validatedData = $request->validated();

        // Add the user_id to the validated data
        $validatedData['user_id'] = $user->id;

        // Create the asset
        $asset = Asset::create($validatedData);

        if ($asset) {
            return redirect()->route('asset.index')->with('success', 'Asset created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create asset.');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        return view('asset.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        return view('asset.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        $updated = $asset->update($request->validated());

        if ($updated) {
            return redirect()->route('asset.index')->with('success', 'Asset updated successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to update asset.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $asset)
    {
        $deleted = $asset->delete();

        if ($deleted) {
            return redirect()->route('asset.index')->with('success', 'Asset deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete asset.');
        }
    }
}
