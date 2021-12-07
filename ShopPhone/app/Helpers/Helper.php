<?php

namespace App\Helpers;

class Helper
{
    public static function category($categories, $parent_id=0, $char=''){
        $html='';
        foreach ($categories as $key=>$category){
            if ($category->parent_id==$parent_id){
                $html .= '
                    <tr>
                        <td>'. $category->id .'</td>
                        <td>'. $char . $category->name .'</td>
                        <td>'. self::active($category->status) .'</td>
                        <td>'. $category->updated_at .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/ShopPhone/ShopPhone/public/admin/category/edit/'. $category->id .'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="removeRow('. $category->id . ',\'/ShopPhone/ShopPhone/public/admin/category/destroy\')">
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
    public static function active($active=0):string
    {
        return $active==0 ? '<span class="btn btn-danger btn-xs">Không</span>' : '<span class="btn btn-success btn-xs">Có</span>';
    }
}
