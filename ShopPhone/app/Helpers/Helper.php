<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function category($categories, $parent_id=0, $char=''){
        $html='';
        $i=1;
//        $dm='DM';
        foreach ($categories as $key=>$category){
            if ($category->parent_id==$parent_id){
                $html .= '
                    <tr>
                        <td>'. $categories->firstItem()+$key .'</td>
                        <td>'. $char . $category->name .'</td>
                        <td>'. $category->description .'</td>
                        <td><a href="'. $category->image .'" target="_blank"><img src="'. $category->image .'" width="100px"></a></td>
                        <td>'. self::active($category->status) .'</td>
                        <td>'. $category->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/category/edit/'. $category->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $category->id . ',\'/admin/category/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';

                unset($categories[$key]);

                $html.= self::category($categories, $category->id, $char.' --- ');
            }
        }
        return $html;
    }

    public static function producttype($productTypes){
        $html='';
        $i=1;
        foreach ($productTypes as $key=>$productType){
                $html .= '
                    <tr>
                        <td>'. $productTypes->firstItem()+$key .'</td>
                        <td>'. $productType->name .'</td>
                        <td>'. $productType->category->name .'</td>
                        <td>'. $productType->description .'</td>
                        <td><a href="'. $productType->image .'" target="_blank"><img src="'. $productType->image .'" width="100px"></a></td>
                        <td>'. self::active($productType->status) .'</td>
                        <td>'. $productType->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/producttype/edit/'. $productType->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $productType->id . ',\'/admin/producttype/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }

    public static function product($products){
        $html='';
        $i=1;
        foreach ($products as $key=>$product){
            $html .= '
                    <tr>
                        <td>'. $products->firstItem()+$key .'</td>
                        <td>'. $product->name .'</td>
                        <td>'. $product->producttype->name .'</td>
                        <td>'. $product->NhaSX .'</td>
                        <td>'. $product->ThoiGianBaoHanh .'</td>
                        <td>'. self::active($product->status) .'</td>
                        <td>'. $product->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/product/edit/'. $product->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $product->id . ',\'/admin/product/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }
    public static function users($users){
        $html='';
        $i=1;
        foreach ($users as $key=>$user){
            $html .= '
                    <tr>
                        <td>'. $users->firstItem()+$key .'</td>
                        <td>'. $user->name .'</td>
                        <td>'. date('d-m-Y', strtotime($user->NgaySinh))   .'</td>
                        <td>'. self::gender($user->GioiTinh)  .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/users/edit/'. $user->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $user->id . ',\'/admin/users/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }
    public static function image($images){
        $html='';
        foreach ($images as $key=>$image){
            $html .= '
                    <tr>
                        <td>'. $images->firstItem()+$key .'</td>
                        <td>'. $image->product->name .'</td>
                        <td><a href="'. $image->image .'" target="_blank"><img src="'. $image->image .'" width="100px"></a></td>
                        <td>'. $image->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/image/edit/'. $image->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $image->id . ',\'/admin/image/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }
    public static function productdetail($productdetails){
        $html='';
        $i=1;
        foreach ($productdetails as $key=>$productdetail){
            $html .= '
                    <tr>
                    <td>'. $productdetails->firstItem()+$key .'</td>
                        <td>'. $productdetail->product->name .'</td>
                        <td>'. $productdetail->ROM .'</td>
                        <td>'. $productdetail->RAM .'</td>
                        <td>'. $productdetail->CPU .'</td>
                        <td>'. $productdetail->Color .'</td>
                        <td>'. number_format($productdetail->DonGia, 0, ',', '.') . " VNĐ" .'</td>
                        <td>'. $productdetail->SoLuong .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/productdetails/edit/'. $productdetail->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $productdetail->id . ',\'/admin/productdetails/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
                $i++;
        }
        return $html;
    }
    public static function banner($banners){
        $html='';
        $i=1;
        foreach ($banners as $key=>$banner){
            $html .= '
                    <tr>
                        <td>'. $banners->firstItem()+$key .'</td>
                        <td>'. $banner->noiDung .'</td>
                        <td><a href="'. $banner->image .'" target="_blank"><img src="'. $banner->image .'" width="100px"></a></td>
                        <td>'. $banner->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/banner/edit/'. $banner->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $banner->id . ',\'/admin/banner/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }

    public static function menus($categories, $producttypes){
        $html='';
        foreach ($categories as $key => $category){
            $html.='
                <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                    <a class="nav-link dropdown-toggle" href="/category/'. $category->id .'-'. Str::slug($category->name, '-') .'.html">
                        '. $category->name .'
                    </a>';
            if (self::isChild($category->id, $producttypes)){
                $html.= '<div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">'. $category->name .'</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">';
                foreach ($producttypes as $k=>$producttype) {
                    if ($producttype->category_id == $category->id){
                        $html .= '
                    <li>
                    <a href="/category/producttype' . $producttype->id . '-' . Str::slug($producttype->name, '-') . '.html">
                        ' . $producttype->name . '
                    </a>
                    </li>
                    ';
                }
                }
//                unset($producttypes[$k]);
                $html.="</ul>";
            }
            $html .='</li>
                ';
            unset($categories[$key]);
        }
        return $html;
    }

    public static function producttypes($producttypes){
        $html='';
        foreach ($producttypes as $key => $producttype){
            $html.='
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">'. $producttype->name .'</span>';
            $html .='</li>
                ';
            unset($producttypes[$key]);
        }
        return $html;
    }
    public static function categories($categories){
        $html='';
        foreach ($categories as $key => $category){
            $html.='
                <li>
                    <option value="'. $category->id .'">'. $category->name .'</option>';
            $html .='</li>
                ';
        }
        return $html;
    }

    public static function active($active=0):string
    {
        return $active==0 ? '<span class="btn btn-danger btn-xs">Không</span>' : '<span class="btn btn-success btn-xs">Có</span>';
    }

    public static function gender($gender=1):string
    {
        return $gender==1 ? 'Nam' : 'Nữ';
    }

    public static function isChild($id, $producttypes)
    {
        $i=0;
        foreach ($producttypes as $key => $producttype)
        {
            if ($producttype->category_id==$id)
            {
                $i++;
            }
        }
        if($i>0)
            return true;
        return false;
    }
    public static function price($price=0, $priceSale=0){
        if ($priceSale!=0)
            return $priceSale;
        if ($price!=0)
            return $price;
        return '<a href="/lien-he.html">Liên hệ</a>';
    }
}
