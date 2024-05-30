<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use App\Models\PageModel;
use App\Models\SystemSettingsModel;
use App\Models\ContactUsModel;
use App\Models\SliderModel;
use App\Models\PartnerModel;
use App\Models\CategoryModel;
use App\Models\BlogModel;
use App\Models\BlogcategoryModel;
use App\Models\BlogCommentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $getPage = PageModel::getSlug('home');
        
        $data['getPage'] = $getPage;
        $data['meta_title'] = $getPage->meta_title;
        $data['meta_description'] = $getPage->meta_description;
        $data['meta_keywords'] = $getPage->meta_keywords;

        $data['getBlog'] = BlogModel::getRecordActiveHome();
        $data['getSlider'] = SliderModel::getRecordActive();
        $data['getPartner'] = PartnerModel::getRecordActive();
        $data['getCategory'] = CategoryModel::getRecordActiveHome();
        $data['getProduct'] = ProductModel::getRecentArrivals($request);
        $data['getProductTrendy'] = ProductModel::getProductTrendy($request);
        
        return view('home', $data);
    }

    public function recent_arrivals_home_products(Request $request)
    {
        $getProduct = ProductModel::getRecentArrivals($request);
        $getCategory = CategoryModel::getSingle($request->category_id);

        return response()->json([
            "status" => true,
            "success" => view("product._list_recent_arrivals", [
                "getProduct" => $getProduct,
                "getCategory" => $getCategory,
                ])->render(),
        ], 200);

    }

    public function contact()
    {
        $getPage = PageModel::getSlug('contact');

        $data['getPage'] = $getPage;
        $data['getSystemSettingApp'] = SystemSettingsModel::getSingle();
        $data['meta_title'] = $getPage->meta_title;
        $data['meta_description'] = $getPage->meta_description;
        $data['meta_keywords'] = $getPage->meta_keywords;

        return view('page.contact', $data);
    }

    public function submit_contact(Request $request)
    {
        $adminEmail = 'ehsanmarketkla@gmail.com';

        $save = new ContactUsModel;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->subject = $request->subject;
        $save->message = $request->message;
        $save->save();

        Mail::to($adminEmail)->send(new ContactUsMail($save));
        return redirect()->back()->with("success", 'Thank you for submitting your information. We have received it successfully. Please await our prompt response.');

    }

    public function about()
    {
        $getPage = PageModel::getSlug('about');

        $data['getPage'] = $getPage;
        $data['meta_title'] = $getPage->meta_title;
        $data['meta_description'] = $getPage->meta_description;
        $data['meta_keywords'] = $getPage->meta_keywords;
        return view('page.about', $data);
    }

    public function faq()
    {
        $data['getPage'] = PageModel::getSlug('faq');
        return view('page.faq', $data);
    }

    public function payment_method()
    {
        $data['getPage'] = PageModel::getSlug('payment-method');
        return view('page.payment_method');
    }

    public function money_back_guarantee()
    {
        return view('page.money_back_guarantee');
    }

    public function returns()
    {
        return view('page.returns');
    }

    public function shipping()
    {
        return view('page.shipping');
    }

    public function terms_and_conditions()
    {
        return view('page.terms_and_conditions');
    }

    public function privacy_policy()
    {
        return view('page.privacy_policy');
    }

    public function help()
    {
        return view('page.help');
    }

    public function how_to_shop()
    {
        return view('page.how_to_shop');
    }

    public function blog(Request $request)
    {
        $getPage = PageModel::getSlug('blog');

        $data['getPage'] = $getPage;
        $data['meta_title'] = $getPage->meta_title;
        $data['meta_description'] = $getPage->meta_description;
        $data['meta_keywords'] = $getPage->meta_keywords;
        $data['getBlog'] = BlogModel::getBlog($request);
        $data['getBlogCategory'] = BlogcategoryModel::getRecordActive();
        $data['getPopular'] = BlogModel::getPopular();


        return view('blog.list', $data);
    }

    public function blog_detail($slug)
    {
        $getBlog = BlogModel::getSingleSlug($slug);
        if(!empty($getBlog))
        {
            $total_views = $getBlog->total_views;
            $getBlog->total_views = $total_views + 1;
            $getBlog->save();

            $data['getBlog'] = $getBlog;
            $data['meta_title'] = $getBlog->meta_title;
            $data['meta_description'] = $getBlog->meta_description;
            $data['meta_keywords'] = $getBlog->meta_keywords;

            $data['getBlogCategory'] = BlogcategoryModel::getRecordActive();
            $data['getPopular'] = BlogModel::getPopular();
            $data['getRelatedPost'] = BlogModel::getRelatedPost($getBlog->blog_category_id, $getBlog->id);

            return view('blog.detail', $data);
        }

        else
        {
            abort(404);
        }
        
    }

    public function blog_category(Request $request, $slug)
    {
        $getCategory = BlogCategoryModel::getSingleSlug($slug);
        if(!empty($getCategory))
        {

            $data['getCategory'] = $getCategory;
            $data['meta_title'] = $getCategory->meta_title;
            $data['meta_description'] = $getCategory->meta_description;
            $data['meta_keywords'] = $getCategory->meta_keywords;

            $data['getBlogCategory'] = BlogcategoryModel::getRecordActive();
            $data['getPopular'] = BlogModel::getPopular();

            $data['getBlog'] = BlogModel::getBlog($request, $getCategory->id);


            return view('blog.category', $data);
        }

        else
        {
            abort(404);
        }
        
        
    }

    public function submit_blog_comment(Request $request)
    {
        $comment = new BlogCommentModel;
        $comment->user_id = Auth::user()->id;
        $comment->blog_id = $request->blog_id;
        $comment->comment = trim($request->comment);
        $comment->save();

        return redirect()->back()->with("success", 'Thank you, your comment was successfully saved.');

    }

}
