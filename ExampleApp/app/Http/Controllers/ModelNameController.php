<?php

    namespace App\Http\Controllers;

    use App\Models\model_Name;
    use Illuminate\Http\Request;

    class ModelNameController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //

            return model_Name::all();
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'is_completed'=>'required'
            ]);

            return model_Name::create($request->all());

        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\model_Name  $model_Name
         * @return \Illuminate\Http\Response
         */
        public function show(model_Name $model_Name)
        {
            //
            return $model_Name;
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\model_Name  $model_Name
         * @return \Illuminate\Http\Response
         */
        public function edit(model_Name $model_Name)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\model_Name  $model_Name
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, model_Name $model_Name)
        {
            //
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'is_completed'=>'required'
            ]);

             $model_Name->update($request->all());
                return @$model_Name;

        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\model_Name  $model_Name
         * @return \Illuminate\Http\Response
         */
        public function destroy(model_Name $model_Name)
        {
            //

            return $model_Name->delete();
        }
    }
