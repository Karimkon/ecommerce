<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';

    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord(Request $request)
    {
        $query =  self::select('product.*', 'users.name as created_by_name')
                     ->join('users', 'users.id', '=', 'product.created_by')
                     ->where('product.is_delete', '=', 0)
                     ->orderby('product.id', 'desc');


                     if(!empty($request->get('title'))) {
                        $query->where('product.title', 'like', '%'.$request->get('title').'%');
                    }

                    return $query->paginate(50);
    }

    static public function getImageSingle($product_id)
    {
        return ProductImageModel::where('product_id','=', $product_id)->orderBy('order_by', 'asc')->first();
    }

    static public function getMyWishlist($user_id)
    {
        $return = self::select('product.*', 'users.name as created_by_name', 'category.name as category_name'
            , 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->join('product_wishlist', 'product_wishlist.product_id', '=', 'product.id')
            ->where('product_wishlist.user_id', '=', $user_id)
            ->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->groupBy('product.id')
            ->orderBy('product.id', 'desc')
            ->paginate(9);

        return $return;

    }

    static public function getRecentArrivals(Request $request)
    {
        $return = self::select('product.*', 'users.name as created_by_name', 'category.name as category_name'
            , 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0);

            if (!empty($request->get('category_id'))) {
                $return = $return->where('product.category_id', '=', $request->get('category_id'));
            }

           $return=$return->groupBy('product.id')
            ->orderBy('product.id', 'desc')
            ->limit(8)
            ->get();

        return $return;

    }

    static public function getProductTrendy(Request $request)
    {
        $return = self::select('product.*', 'users.name as created_by_name', 'category.name as category_name'
            , 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->where('product.is_trendy', '=', 1)
            ->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->groupBy('product.id')
            ->orderBy('product.id', 'desc')
            ->limit(20)
            ->get();

        return $return;

    }

    static public function getProduct($category_id ='', $subcategory_id='')
    {
        $return = self::select('product.*', 'users.name as created_by_name', 'category.name as category_name'
            , 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id');

        if (!empty($category_id)) {
            $return = $return->where('product.category_id', '=', $category_id);
        }
        if (!empty($subcategory_id)) {
            $return = $return->where('product.sub_category_id', '=', $subcategory_id);
        }

        if (!empty(request()->input('sub_category_id'))) {
            $sub_category_id = rtrim(request()->input('sub_category_id'), ',');
            $sub_category_id_array = explode(",", $sub_category_id);
            $return = $return->whereIn('product.sub_category_id', $sub_category_id_array);
        } else {
            if (!empty(request()->input('old_category_id'))) {
                $return = $return->where('product.category_id', '=', request()->input('old_category_id'));
            }
            if (!empty(request()->input('old_sub_category_id'))) {
                $return = $return->where('product.sub_category_id', '=', request()->input('old_sub_category_id'));
            }
        }

        if (!empty(request()->get('color_id'))) {
            $color_id = rtrim(request()->get('color_id'), ',');
            $color_id_array = explode(",", $color_id);
            $return = $return->join('product_color', 'product_color.product_id', '=', 'product.id');
            $return = $return->whereIn('product_color.color_id',  $color_id_array);
        }

        if (!empty(request()->get('brand_id'))) {
            $brand_id = rtrim(request()->get('brand_id'), ',');
            $brand_id_array = explode(",", $brand_id);
            $return = $return->whereIn('product.brand_id',  $brand_id_array);
        }

        if (!empty(request()->get('start_price')) && !empty(request()->get('end_price'))) {
            $start_price = str_replace('$', '', request()->get('start_price'));
            $end_price = str_replace('$', '', request()->get('end_price'));
            $return = $return->where('product.price', '>=', $start_price);
            $return = $return->where('product.price', '<=', $end_price);
        }

        if (!empty(request()->get('q'))) {
            $return = $return->where('product.title', 'like', '%'.request()->get('q').'%');
        }

        $return = $return->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->groupBy('product.id')
            ->orderBy('product.id', 'desc')
            ->paginate(12);

        return $return;
    }


    static public function getRelatedProduct($product_id, $sub_category_id)
    {
        $return = self::select('product.*', 'users.name as created_by_name', 'sub_category.name as sub_category_name'
            , 'category.slug as category_slug', 'sub_category.slug as sub_category_slug')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->where('product.id', '!=', $product_id)
            ->where('product.sub_category_id', '=', $sub_category_id)
            ->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->groupBy('product.id')
            ->orderBy('product.id', 'desc')
            ->limit(10)
            ->get();

        return $return;

    }


    static public function getSingleSlug($slug){
        return self::where('slug', '=', $slug)
                     ->where('product.is_delete', '=', 0)
                     ->where('product.status', '=', 0)
                     ->first();
    }

    static public function checkSlug($slug)
    {
        return self::where('slug', '=', $slug)->count();
    }

    static public function checkWishlist($product_id)
    {
        return ProductWishlistModel::checkAlready($product_id, Auth::user()->id);
    }

    public function getColor()
    {
        return $this->hasMany(ProductColorModel::class, "product_id");
    }

    public function getSize()
    {
        return $this->hasMany(ProductSizeModel::class, "product_id");
    }

    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, "product_id")->orderBy('order_by', 'asc');
    }

    public function getCategory()
    {
        return $this->belongsTo(CategoryModel::class, "category_id");
    }

    public function getSubCategory()
    {
        return $this->belongsTo(SubCategoryModel::class, "sub_category_id");
    }

    public function getTotalReview()
    {
        return $this->hasMany(ProductReviewModel::class, "product_id")
                    ->join('users', 'users.id', 'product_review.user_id')
                    ->count();
    }

    static public function getReviewRating($product_id)
    {
        $avg = ProductReviewModel::getRatingAVG($product_id);
        
        if($avg >= 1 && $avg <= 1)
        {
            return 20;
        }
        else if($avg >= 1 && $avg <= 2)
        {
            return 40;
        }

        else if($avg >= 1 && $avg <= 3)
        {
            return 60;
        }

        else if($avg >= 1 && $avg <= 4)
        {
            return 80;
        }

        else if($avg >= 1 && $avg <= 5)
        {
            return 100;
        }

        else

        {
            return 0;
        }
    }
}
