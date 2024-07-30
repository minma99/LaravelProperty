<?php

namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Controller;
use App\Models\Api\Property\PropertyRegisterInformation;
use App\Models\PropertyName;
use Illuminate\Http\Request;
use MongoDB\BSON\ObjectId; // Make sure to include this if you're using the MongoDB library


class frontController extends Controller
{
    
    // public function showFrontMainPage(){
    //     $fetchPropertyPlaces=PropertyRegisterInformation::get();
    //     $fetchRegisteredPropertyWithPropertyName=PropertyName::fetchRegisteredPropertyWithPropertyName();
    //     // dd( $fetchRegisteredPropertyWithPropertyName);
    //     return view('Front_Layout.pages.mainPageVer2', compact('fetchPropertyPlaces','fetchRegisteredPropertyWithPropertyName'));
    // }

    public function realEstateCatalogRent(){
        return view('Front_Layout\pages\property\real-estate-catalog-rent'); //
    }
    
    public function realEstateAbout(){
        return view('Front_Layout\pages\property\real-estate-about'); 
    }

    public function realEstateAccountInfo(){
        return view('Front_Layout\pages\property\real-estate-account-info'); 
    }
    public function realEstateAccountNotif(){
        return view('Front_Layout\pages\property\real-estate-account-notifications'); 
    }
    public function realEstateAccountReviews(){
        return view('Front_Layout\pages\property\real-estate-account-reviws'); 
    }
    public function realEstateAccountWishlist(){
        return view('Front_Layout\pages\property\real-estate-account-wishlist'); 
    }
    public function realEstateAddProperty(){
        return view('Front_Layout\pages\property\real-estate-add-property'); 
    }
    public function realEstateBlog(){
        return view('Front_Layout\pages\property\real-estate-blog'); 
    }
    public function realEstateBlogSingle(){
        return view('Front_Layout\pages\property\real-estate-blog-single'); //

    }
    public function realEstateCatalogSale(){
        return view('Front_Layout\pages\property\real-estate-catalog-sale'); //

    }
    public function realEstateAccount(){
        return view('Front_Layout\pages\property\real-estate-account'); 

    }
    public function realEstateHelpCenter(){
        return view('Front_Layout\pages\property\real-estate-help-center'); 

    }
    public function realEstatePropertyPromotion(){
        return view('Front_Layout\pages\property\real-estate-property-promotion'); 

    }
    public function realEstateSingle(){
        return view('Front_Layout\pages\property\real-estate-single-v2'); //

    }
    public function realEstateVendorProperties(){
        return view('Front_Layout\pages\property\real-estate-vendor-properties'); 

    }
    
    public function showFrontMainPage(){
        return view('Front_Layout.pages.mainPageVer2');//
    }

    

    public function realEstateVendorReviews(){
        return view('Front_Layout\pages\property\real-estate-vendor-reviews');

    }


    //new
    public function realEstateMyProperty(){
        return view('Front_Layout\pages\property\real-estate-account-property');

    }
    public function userAccountInfoSecurity(){
        return view('Front_Layout\pages\property\real-estate-account-security'); //add to word

    }
}

