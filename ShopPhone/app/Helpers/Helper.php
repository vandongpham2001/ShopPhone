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

    public static function image($images){
        $html='';
        $i=1;
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
                <li>
                    <a href="/category/'. $category->id .'-'. Str::slug($category->name, '-') .'.html">
                        '. $category->name .'
                    </a>';
            if (self::isChild($category->id, $producttypes)){
                $html.= '<ul class="sub-menu">';
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

    public static function active($active=0):string
    {
        return $active==0 ? '<span class="btn btn-danger btn-xs">Không</span>' : '<span class="btn btn-success btn-xs">Có</span>';
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
}
