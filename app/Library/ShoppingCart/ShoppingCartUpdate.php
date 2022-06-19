<?php
/*
|--------------------------------------------------------------------------
| ShoppingCartUpdate.php
|--------------------------------------------------------------------------
| Created by Shawn Legge
| This class is responsible for updating the users cart
*/

namespace App\Library\ShoppingCart;


class ShoppingCartUpdate extends AbstractShoppingCart
{
    /**
     * updates the quantity of a product a user wants
     *
     * @return void
     */
    protected function processResults()
    {
        $this->findItem($this->product->id);
        $this->cart->setQuantity($this->item->rowId, $this->quantity);
    }

    /**
     * sets the result message for the user
     *
     * @return void
     */
    protected function setResult()
    {
        $this->result = "Vous avez mis à jour la quantité de {$this->product->title} à {$this->quantity}";
    }
}