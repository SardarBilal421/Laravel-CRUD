<?php



namespace App\Http\Controllers;
use App\Models\NewTable;
use Dotenv\Validator;
use Illuminate\Http\Request;

class NewTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  view('Products.NewTable')->with('NewTable',NewTable::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('Products.CreateTable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request);

//        $validateData = \Illuminate\Support\Facades\Validator::make($request->all(),[
//           'name'=>'required',
//           'phone'=>'required',
//           'email'=>'required',
//           'thumbnail'=>'required|image|mine:jpeg,png,jpg,gif,svg|max:2048'
//]);
//
//        if($validateData->fails()){
//          return redirect()->back()
//            ->withErrors($validateData)
//              ->withInput();
//        }

        $product = new NewTable();
        $product->name = $request->name;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $path = $request->file('thumbnail')->store('images','public');
        $product->image = $path;
        $product->save();
        return  view('Products.NewTable')
            ->with('NewTable',NewTable::all())
            ->with('success','Product added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewTable  $newTable
     * @return \Illuminate\Http\Response
     */
    public function show(NewTable $newTable)
    {
        //
        return view("Products.show")->with("NewTable",$newTable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewTable  $newTable
     * @return \Illuminate\Http\Response
     */
    public function edit(NewTable $newTable)
    {
        //
        return view("Products.edit")->with("NewTable",$newTable);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewTable  $newTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewTable $newTable)
    {
        dd($newTable);
//        $newTable->delete();
//        return  view('Products.NewTable')->with('NewTable',NewTable::all());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewTable  $newTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewTable $newTable)
    {
        //

//        $validateData = \Illuminate\Support\Facades\Validator::make($request->all(),[
//           'name'=>'required',
//           'phone'=>'required',
//           'email'=>'required',
//           'thumbnail'=>'required|image|mine:jpeg,png,jpg,gif,svg|max:2048'
//]);
//
//        if($validateData->fails()){
//          return redirect()->back()
//            ->withErrors($validateData)
//              ->withInput();
//        }

        $newTable->name = $request->name;
        $newTable->email = $request->email;
        $newTable->phone = $request->phone;
        $path = $request->file('thumbnail')->store('images','public');
        $newTable->image = $path;
        $newTable->save();
        return  view('Products.NewTable')
            ->with('NewTable',NewTable::all())
            ->with('success','Product Updated successfully');



    }

}
