<?php

namespace App\Http\Controllers\Web\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Web\Property\PropertyFile;
use App\Models\Api\Property\PropertyRegisterInformation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;



class fileController extends Controller
{
    //
    public function sendFilesPage(){
        $fetchPropertyInformation=PropertyRegisterInformation::get();
        return view('pages.File.manageFile', compact('fetchPropertyInformation'));
    }

    public function PropertyAddImage(Request $request){
        // dd($request->image->extension());
        $newPropertyFile=new PropertyFile();
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,avi,mov,wmv|max:5000000',
        ]);
        if($validator->passes()){
            try{
                $propertyCodeGet=(int)$request->propertyCodeImage;
                $new_image_name=time().'_'.$propertyCodeGet.'.'.$request->image->extension();
                $newPropertyFile->code=$newPropertyFile::giveNewCode();
                $newPropertyFile->propertyCode=$propertyCodeGet;
                $newPropertyFile->filePath=$new_image_name;
                if ($newPropertyFile->save())
                {
                    $request->image->move(($_SERVER['DOCUMENT_ROOT'] .'/LandImages/Property/'), $new_image_name);
                    return back()->with('image_send_success', 'Image has been upload successfully');
                }else{
                    return back()->with('image_send_fail', 'There is an error during upload image');
                }
            }
            catch (\Exception $e){
                Log::error($e);
            }

        }else{
            return back()->with('image_send_fail', 'Please send image or video');
        }
       
    }
}
