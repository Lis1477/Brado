<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Item;
use App\Category;

class CategoryComposer
{
    public function compose(View $view) {

    	// собираем 1c_id категорий, где Катана
    	$category_id = Item::where([
                ['1c_category_id', '!=', 0],
                ['1c_category_id', '!=', 3149],
                // ['1c_category_id', '!=', 11395],
                ['name', 'like', '%brado%'],
                ['name', 'not like', ['%skiper%', '%katana%', '%spec%', '%darc%', '%welt%']]
            ])
    		->distinct('1c_category_id')
    		->get(['1c_category_id'])
    		->toArray();

    	// собираем категории, добавляем изображение
    	$cats = Category::whereIn('1c_id', $category_id)->orderBy('name')->get(['name', 'slug', '1c_id']);
        foreach ($cats as $cat) {
            // выбираем код товара из категории, у которого имеется изображение
            $prods = \App\Item::where([
                    ['1c_category_id', $cat->{'1c_id'}],
                    ['name', 'like', '%brado%'],
                    ['name', 'not like', ['%skiper%', '%katana%', '%spec%', '%darc%', '%welt%']]
                ])
                ->orderBy('1c_id')
                ->with('images')
                ->get(['1c_id']);

            foreach($prods as $prod) {
                if($prod->images->count()) {
                    $prod_code = $prod->{'1c_id'};
                    $url = "https://alfastok.by/storage/item-images/".$prod_code."_0.jpg";
                    break;
                }
            }
            // если не нашли, записываем путь к заглушке
            if(!isset($prod_code)) {
                $url = asset('img/brado_trumb.png');
            } unset($prod_code);

            // проверяем существует ли файл
            $headers = @get_headers($url);
            $is_exist = strpos($headers[0], '200');
            // если не существует, записываем путь к заглушке
            if(!$is_exist) $url = asset('img/brado_trumb.png');

            // добавляем ссылку к изображению в коллекцию
            $cat->setAttribute('url', $url);
        }
        return $view->with('cats', $cats);
    }
}