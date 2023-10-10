<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    
    protected function get_list() {
        return [
            [
                "id" => 1,
                "product_name" => "Organic Apples",
                "brand" => "Nature's Best",
                "price" => 2.99,
                "quantity" => 10,
                "expiration_date" => "2023-11-15",
            ],
            [
                "id" => 2,
                "product_name" => "Fresh Salmon Fillet",
                "brand" => "Ocean Delights",
                "price" => 12.49,
                "quantity" => 5,
                "expiration_date" => "2023-10-30",
            ],
            [
                "id" => 3,
                "product_name" => "Whole Grain Bread",
                "brand" => "Healthy Bites",
                "price" => 3.49,
                "quantity" => 15,
                "expiration_date" => "2023-11-05",
            ],
            [
                "id" => 4,
                "product_name" => "Crispy Potato Chips",
                "brand" => "SnackMasters",
                "price" => 1.99,
                "quantity" => 20,
                "expiration_date" => "2024-02-28",
            ],
            [
                "id" => 5,
                "product_name" => "Vanilla Bean Ice Cream",
                "brand" => "Sweet Dreams",
                "price" => 4.99,
                "quantity" => 8,
                "expiration_date" => "2023-12-10",
            ]
        ];

    }
    
    public function getall() {
        return response()->json($this->get_list());
    }

    public function get_id($id) {
        foreach($this->get_list() as $item) {
            if ($item['id'] == $id) {
                return response()->json($item);
            }
        }
        abort(404, 'Resource not found.');
    }

    public function get_max_price($price) {
        $filteredItems = [];
    
        foreach($this->get_list() as $item) {
            if ($item['price'] <= $price) {
                $filteredItems[] = $item;
            }
        }
    
        if (!empty($filteredItems)) {
            return response()->json($filteredItems);
        } else {
            abort(404, 'No items found with a price lower than or equal to ' . $price);
        }
    }
    
}
