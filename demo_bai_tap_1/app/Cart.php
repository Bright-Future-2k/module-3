<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storeItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id,$this->items)){
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];

        $this->totalPrice = $item->price;
        $this->totalQty++;
        $this->items[$id] = $storeItem;
    }
    public function remove($id)
    {
        if ($this->items){
            $productIntoCart = $this->items;
            if (array_key_exists($id,$productIntoCart)){
                $priceProCart = $productIntoCart[$id]['price'];
                $this->totalPrice -= $priceProCart;
                $this->totalQty--;
                unset($productIntoCart[$id]);
                $this->items = $productIntoCart;
            }
        }
    }
    public function update($request,$id){
        if ($this->items){
            $itemIntoCart = $this->items;
            if (array_key_exists($id,$itemIntoCart)){
                $itemUpdate = $itemIntoCart[$id];

                $qtyUpdate = $request->qty - $itemUpdate['qty'];
                $this->totalQty += $qtyUpdate;

                $priceUpdate = $itemUpdate['item']->price * $request->qty - $itemUpdate['price'];
                $this->totalPrice += $priceUpdate;

                $itemUpdate['qty'] = $request->qty;
                $itemUpdate['price'] = $itemUpdate['item']->price * $request->qty;
                $this->items[$id] = $itemUpdate;
            }
        }
    }
}
