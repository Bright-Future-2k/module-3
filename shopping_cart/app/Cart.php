<?php

namespace App;

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
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;

        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function remove($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProductDelete = $productsIntoCart[$id]['price'];
                $this->totalPrice -= $priceProductDelete;
                $this->totalQty--;

                unset($productsIntoCart[$id]);
                $this->items = $productsIntoCart;
            }
        }
    }

    public function update($request, $id)
    {
        if ($this->items) {
            $itemsIntoCart = $this->items;
            if (array_key_exists($id, $itemsIntoCart)) {
                $itemUpdate = $itemsIntoCart[$id];

                $qtyUpdate = $request->qty - $itemUpdate['qty'];
                $this->totalQty += $qtyUpdate;

                $priceUpdate = $itemUpdate['item']->price * $request->qty - $itemUpdate['price'];
                //bang = gia mac dinh cua san pham * so luong lay tu ng dung - gia gan nhat trong tong tien
                $this->totalPrice += $priceUpdate;

                $itemUpdate['qty'] = $request->qty;

                $itemUpdate['price'] = $itemUpdate['item']->price * $request->qty;
                $this->items[$id] = $itemUpdate;

            }
        }
    }
    
}

