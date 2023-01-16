<?php
if (!function_exists('upload_image')) {
    
    function upload_image($file, $path){
        $fileName        = $file->getClientOriginalName();
        $extension       = $file->getClientOriginalExtension() ?: 'png';
        $destinationPath = public_path() . $path;
        $safeName        = \Str::random(10).'.'.$extension;
        $file->move($destinationPath, $safeName);

        //delete old pic if exists
        if(isset($fileName) &&  File::exists(public_path() . $path.$fileName))
        {
            File::delete(public_path() . $path.$fileName);
        }

        return $safeName;
    }
}

if (!function_exists('getCountries')) {
    
    function getCountries(){
        $countries = array();
        $countries_list = DB::table('countries')->get();
        return $countries_list->pluck('name','id')->toArray();
    }
}
?>