<?php

namespace App\Http\Controllers;

use App\Models\AdsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Lighthouse\Enums\Category;
use Spatie\Lighthouse\Enums\FormFactor;
use Spatie\Lighthouse\Lighthouse;
use Spatie\Lighthouse\CheckAudits;
use Spatie\Lighthouse\LighthouseFacade;

use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Validator;
class LightHouseResultController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function getLightHouseResults(Request $request)
    {
        try {
            
            $validator = Validator::make($request->all(), [
                'url_input' => 'required|url',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $url = $request->url_input;
    
            $html = Lighthouse::url($url)
                ->timeoutInSeconds(120)
                ->run()
                ->html();

            return view('lightHouseResults', compact(['html']));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors("Url does not exist.")->withInput();
        }
    }

    public function newPage(){
        return view('new');
    }

    public function newAdsAdd(Request $request){
        $ad = new AdsModel([
            'heading' => $request->input('heading'),
            'description' => $request->input('description'),
            
        ]);
    
        $ad->save();
        return redirect()->back()->with('success', 'Ad added successfully');
    }
    public function getAds(Request $request){
        $ads = AdsModel::where('id',$request->id)->first();
        return response()->json(['ads'=> $ads]);
    }
   
}
