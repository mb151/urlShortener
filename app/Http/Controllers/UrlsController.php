<?php

namespace App\Http\Controllers;
use App\Url;
use Illuminate\Http\Request;

//le controller nous permet de controller tout les requetes ce comme un delegué tous passe par lui il se charge
//de rechercher ordoner puis redirigé la reponse vers le requeteur.
class UrlsController extends Controller
{
    public function create()
        {
            return view('welcome');
        }

    public function store(Request $request)
        {
            $rules = ['url' => 'required|url'];
            $this->validate($request, $rules);
            $record = $this->getRecordForUrl($request->url);
                return view('result')->withShortened($record->shortened);
        }

    public function show($shortened){
            $url = Url::whereShortened($shortened)->firstOrFail();
                return redirect($url->url);    
        }
    
    private function getRecordForUrl($url){
                return Url::firstOrCreate(
                    ['url'=> $url],
                    ['shortened' => Url::getUniqueShortUrl() ]);
    }
}


