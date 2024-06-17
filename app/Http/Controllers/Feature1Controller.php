<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    public ?Feature $feature = null;

    public function __construct()
    {

        $this->feature = Feature::where("route_name", "feature1.index")
          ->where('active', true)
          ->firstOrFail();
    }
    public function index()
    {
        return inertia('Feature/Index', [
            'feature' => new FeatureResource($this->feature),
            'answer' => session('answer')

        ]);

    }
    public function calculate(Request $request)
    {
        $user = $request->user();
        if ($user->available_credits < this->feature->required_credits){
            return back();
        }
    }
}
