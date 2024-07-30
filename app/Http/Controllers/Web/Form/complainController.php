<?php

namespace App\Http\Controllers\Web\Form;

use App\Http\Controllers\Controller;
use App\Models\MoveIn\Complain;
use App\Models\MoveIn\Need;
use App\Models\MoveIn\Problem;
use App\Models\MoveIn\TenantComplain;
use App\Models\MoveIn\TenantProblem;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class complainController extends Controller
{
    //
    public function complainPage(){
        $complaintList=Complain::withTrashed()->get();
        $fetchRegComplaint=TenantComplain::withTrashed()->get();
        return view('pages.move-in.complain', compact('fetchRegComplaint','complaintList'));
    }

    public function problemPage(){
        $problemList=Problem::withTrashed()->get();
        $fetchRegProblem=TenantProblem::withTrashed()->get();
        return view('pages.move-in.problem', compact('fetchRegProblem','problemList'));

    }

    //api Function

    public function fetchNeeds(){
        return json_encode(Need::get());
    }

    public function AddComplain(Request $request){
        $complain=$request->complainText;
        $newComplain=new Complain();
        $newComplain->code=Complain::giveNewCode();
        $newComplain->complainText=$complain;
        $newComplain->status=1;
        if( $newComplain->save()){
            return 123;
        }else{
            return 321;
        }
    }

    public function fetchComplains(){
        $fetchAll=Complain::where('status',1)->get();
        $fetchAll=json_encode( $fetchAll);
        return $fetchAll;
    }

    public function regTenantComplaint(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'fileName' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,avi,mov,wmv|max:5000000',
            'agreementCode'=>'required|min:1|max:10',
            'tenantCode'=>'required|min:1|max:10',
            'ownerCode'=>'required|min:1|max:10',
            'propertyCode'=>'required|min:1|max:10',
            'complainTextCode'=>'required|min:1|max:10',
        ]);
        if($validator->passes()){
            $newTenantComplain=new TenantComplain();
            $newCode=TenantComplain::giveNewCode();
            $newTenantComplain->code= $newCode;
            $complainCode=(int)$request->complainTextCode;
            $complainText=Complain::where('code', $complainCode)->get()->pluck('complainText')->first();
                $newTenantComplain->complainText=$complainText;
            $newTenantComplain->agreementCode=(int)$request->agreementCode;
            $newTenantComplain->tenantCode=(int)$request->tenantCode;
            $newTenantComplain->ownerCode=(int)$request->ownerCode;
            $newTenantComplain->propertyCode=(int)$request->propertyCode;
            $newTenantComplain->complainTextCode=$complainCode;
            $new_file_name=time().'_'.$newCode.'.'.$request->fileName->extension();
                $newTenantComplain->fileName= $new_file_name;
            $newTenantComplain->statusView=0;
            $newTenantComplain->responseText="";
            $newTenantComplain->seenOwnerDate="";
            $newTenantComplain->sendRespondDate="";
            if($newTenantComplain->save()){
                $request->fileName->move(($_SERVER['DOCUMENT_ROOT'] .'/LandImages/Move_in/Complain'), $new_file_name);
                return 123;
            }else{
                return 321;
            }

        }else{
            return 456;
        }
    }
    public function respondComplaint(Request $request){
        // dd(Carbon::now()->format('Y-m-d H:i:s'));
        $complaintCode=(int)$request->complaintCode;
        if(TenantComplain::where('code',$complaintCode)->update([
            'responseText'=>$request->responseText,
            'sendRespondDate'=>Carbon::now()->format('Y-m-d H:i:s')
        ])){
            return 123;
        }else{
            return 321;
        }
    }

    public function DeleteComplaint(Request $request){
        $complaintCode=(int)$request->complaintCode;
        // dd( $complaintCode);
        if(TenantComplain::where('code',$complaintCode)->delete()){
            return 123;
        }else{
            return 321;
        }
    }

    public function DeleteAdminComplaint(Request $request){
        $complaintCode=(int)$request->complaintCode;
        // dd( $complaintCode);
        if(Complain::where('code',$complaintCode)->delete()){
            return 123;
        }else{
            return 321;
        }

    }

    public function viewComplaintForOwner(Request $request){
        $ownerCode=(int)$request->ownerCode;
        $fetchComplaint=TenantComplain::withTrashed()
                                        ->where('ownerCode',$ownerCode )
                                        ->get();
        $fetchComplaint=json_encode( $fetchComplaint);
        return  $fetchComplaint;
    }

    public function AddProblem(Request $request){
        $problem=$request->problemText;
        $newProblem=new Problem();
        $newProblem->code=Problem::giveNewCode();
        $newProblem->problemText=$problem;
        $newProblem->status=1;
        if( $newProblem->save()){
            return 123;
        }else{
            return 321;
        }
    }
    public function fetchProblems(){
        $fetchAll=Problem::where('status',1)->get();
        $fetchAll=json_encode( $fetchAll);
        return $fetchAll;
    }

    public function regTenantProblem(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'fileName' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,avi,mov,wmv|max:5000000',
            'agreementCode'=>'required|min:1|max:10',
            'tenantCode'=>'required|min:1|max:10',
            'ownerCode'=>'required|min:1|max:10',
            'propertyCode'=>'required|min:1|max:10',
            'problemTextCode'=>'required|min:1|max:10',
            'reason'=>'required|min:1',
        ]);
        if($validator->passes()){
            $newTenantProblem=new TenantProblem();
            $newCode=TenantProblem::giveNewCode();
            $newTenantProblem->code= $newCode;
            $problemCode=(int)$request->problemTextCode;
            $problemText=Problem::where('code', $problemCode)->get()->pluck('problemText')->first();
                $newTenantProblem->problemText=$problemText;
            $newTenantProblem->agreementCode=(int)$request->agreementCode;
            $newTenantProblem->tenantCode=(int)$request->tenantCode;
            $newTenantProblem->ownerCode=(int)$request->ownerCode;
            $newTenantProblem->propertyCode=(int)$request->propertyCode;
            $newTenantProblem->problemTextCode=$problemCode;
            $newTenantProblem->reason=$request->reason;
            $new_file_name=time().'_'.$newCode.'.'.$request->fileName->extension();
                $newTenantProblem->fileName= $new_file_name;
            $newTenantProblem->statusView=0;
            $newTenantProblem->responseText="";
            $newTenantProblem->seenOwnerDate="";
            $newTenantProblem->sendRespondDate="";
            if($newTenantProblem->save()){
                $request->fileName->move(($_SERVER['DOCUMENT_ROOT'] .'/LandImages/Move_in/Problem'), $new_file_name);
                return 123;
            }else{
                return 321;
            }

        }else{
            return 456;
        }
    }

    public function viewProblemForOwner(Request $request){
        $ownerCode=(int)$request->ownerCode;
        $fetchProblem=TenantProblem::withTrashed()
                                        ->where('ownerCode',$ownerCode )
                                        ->get();
        $fetchProblem=json_encode( $fetchProblem);
        return  $fetchProblem;
    }

    public function respondProblem(Request $request){
        // dd(Carbon::now()->format('Y-m-d H:i:s'));
        $problemCode=(int)$request->problemCode;
        if(TenantProblem::where('code',$problemCode)->update([
            'responseText'=>$request->responseText,
            'sendRespondDate'=>Carbon::now()->format('Y-m-d H:i:s')
        ])){
            return 123;
        }else{
            return 321;
        }
    }

    public function DeleteProblem(Request $request){
        $problemCode=(int)$request->problemCode;
        // dd( $complaintCode);
        if(TenantProblem::where('code',$problemCode)->delete()){
            return 123;
        }else{
            return 321;
        }
    }

    public function complaintChangeStatus(Request $request){
        $complaintCode=(int)$request->complaintCode;
        $oldStatus=Complain::where('code',$complaintCode)->pluck('status')->first();
        $newStatus=1-$oldStatus;
        if(Complain::where('code',$complaintCode)
        ->update([
            'status'=>$newStatus
        ])){
            return 123;
        }else{
            return 321;
        }
    }

    public function EditComplaintText(Request $request){
        $complaintCode=(int)$request->complaintCode;
        $complaintTextNew=$request->newComplaintText;
        if(Complain::where('code',$complaintCode)
                    ->update(['complainText'=> $complaintTextNew])){
            return 123;
        }else{
            return 321;
        }
    }

    public function RestoreAdminComplaint(Request $request){
        $complaintCode=(int)$request->complaintCode;
        if(Complain::where('code',$complaintCode)->restore()){
            return 123;
        }else{
            return 321;
        }
    }

    public function problemChangeStatus(Request $request){
        $problemCode=(int)$request->problemCode;
        $oldStatus=Problem::where('code',$problemCode)->pluck('status')->first();
        $newStatus=1-$oldStatus;
        if(Problem::where('code',$problemCode)
        ->update([
            'status'=>$newStatus
        ])){
            return 123;
        }else{
            return 321;
        }
    }

    public function EditProblemText(Request $request){
        $problemCode=(int)$request->problemCode;
        $problemTextNew=$request->newProblemText;
        if(Problem::where('code',$problemCode)
                    ->update(['problemText'=> $problemTextNew])){
            return 123;
        }else{
            return 321;
        }
    }

    public function RestoreAdminProblem(Request $request){
        $problemCode=(int)$request->problemCode;
        if(Problem::where('code',$problemCode)->restore()){
            return 123;
        }else{
            return 321;
        }
    }

    public function DeleteAdminProblem(Request $request){
        $problemCode=(int)$request->problemCode;
        // dd( $complaintCode);
        if(Problem::where('code',$problemCode)->delete()){
            return 123;
        }else{
            return 321;
        }

    }

    // The Need Functions are at the below

    public function needPage(){
        $needList=Need::withTrashed()->get();
        return view('pages.move-in.need', compact('needList'));
    }
    public function AddNeed(Request $request)
    {
        $validatedData = $request->validate([
            'needText' => 'required|string', // Add validation rules as needed
        ]);
        
        $newNeed = new Need();
        $newNeed->code = Need::giveNewCode();
        $newNeed->needText = $validatedData['needText'];
        $newNeed->status = 1;
        
        try {
            if ($newNeed->save()) {
                return response()->json(['Message' => 'OK'], 200);
            }
        } catch (\Exception $e) {
            // Log the exception message
            \Log::error($e->getMessage());
                return response()->json(['Message' => 'NotOK'], 500);
        }
    }

    public function needChangeStatus(Request $request)
    {
        // Validate the needCode input
        $validatedData = $request->validate([
            'needCode' => 'required|integer|string',
        ]);
        
        // Use the validated needCode
        $needCode = (int)$validatedData['needCode'];
        
        try {
            // Retrieve the current status of the Need with the given code
            $oldStatus = Need::where('code', $needCode)->pluck('status')->first();
            
            // Calculate the new status by toggling the old status
            $newStatus = 1 - $oldStatus;
            
            // Update the status of the Need
            $updated = Need::where('code', $needCode)->update(['status' => $newStatus]);
            
            if ($updated) {
                // If the update was successful, return a success response
                return response()->json(['Message' => 'OK'], 200);
            } else {
                // If the update failed, return an error response
                return response()->json(['Message' => 'NotOK'], 500);
            }
            } catch (\Exception $e) {
                // Log the exception and return an error response
                \Log::error($e->getMessage());
                return response()->json(['Message' => 'Error'], 500);
        }
    }

    public function DeleteAdminNeed(Request $request){
       // Validate the needCode input
        $validatedData = $request->validate([
            'needCode' => 'required|integer|string',
            ]);
            
            // Use the validated problemCode
            $needCode =(int) $validatedData['needCode'];
            
            try {
                // Attempt to delete the Problem with the given code
                $deleted = Need::where('code', $needCode)->delete();
                
                if ($deleted) {
                    // If the deletion was successful, return a success response
                    return response()->json(['Message' => 'OK'], 200);
                } else {
                    // If the deletion failed, return an error response
                    return response()->json(['Message' => 'Not Found'], 404);
                }
            } catch (\Exception $e) {
                // Log the exception and return an error response
                \Log::error($e->getMessage());
                return response()->json(['Message' => 'Error'], 500);
            }
    }

    public function EditNeedText(Request $request){
      // Validate the needCode and newNeedText inputs
    $validatedData = $request->validate([
        'needCode' => 'required|integer|string',
        'newNeedText' => 'required|string',
        ]);

        // dd($validatedData);
        
        // Use the validated data
        $needCode =(int) $validatedData['needCode'];
        $needTextNew = $validatedData['newNeedText'];
        
        try {
        // Attempt to update the Need with the given code
        $updated = Need::where('code', $needCode)
        ->update(['needText' => $needTextNew]);
        
        if ($updated) {
            // If the update was successful, return a success response
            return response()->json(['Message' => 'OK'], 200);
        } else {
            // If the update failed, return an error response
            return response()->json(['Message' => 'Not Found'], 404);
        }
        } catch (\Exception $e) {
            // Log the exception and return an error response
            \Log::error($e->getMessage());
            return response()->json(['Message' => 'Error'], 500);
        }
    }

    public function RestoreAdminNeed(Request $request){
       // Validate the needCode input
        $validatedData = $request->validate([
            'needCode' => 'required|integer|string',
            ]);
            
            // Use the validated needCode
            $needCode =(int) $validatedData['needCode'];
            
            try {
                // Attempt to restore the Need with the given code
                $restored = Need::where('code', $needCode)->restore();
                
                if ($restored) {
                // If the restore was successful, return a success response
                return response()->json(['Message' => 'OK'], 200);
                } else {
                // If the restore failed, return an error response
                return response()->json(['Message' => 'Not Found'], 404);
                }
            } catch (\Exception $e) {
                // Log the exception and return an error response
                \Log::error($e->getMessage());
                return response()->json(['Message' => 'Error'], 500);
            }
    }
}
