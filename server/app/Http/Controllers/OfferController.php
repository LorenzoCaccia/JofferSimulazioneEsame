<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create_offer(Request $request)
    {
        $newOfferData = json_decode($request->getContent());

        $newOffer = new Offer();
        $newOffer->programming_language = $newOfferData->programming_language;
        $newOffer->img_language = $newOfferData->img_language;
        $newOffer->company = $newOfferData->company;
        $newOffer->ral = $newOfferData->ral;
        $newOffer->experience_required = $newOfferData->experience_required;
        $newOffer->location = $newOfferData->location;
        $newOffer->description = $newOfferData->description;

        $newOffer->save();
        return $newOffer;
    }

    public function list()
    {
        $allOffer = Offer::all();
        return $allOffer;
    }

    public function detail_offer($id)
    {
        return Offer::where('id', $id)->first();
    }
}
