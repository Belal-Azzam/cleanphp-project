<?php
/**
 * Created by PhpStorm.
 * User: belal
 * Date: 2018-11-30
 * Time: 8:22 PM
 */
namespace CleanPhp\Invoicer\Domain\Factory;
use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;
class InvoiceFactory {
    public function createFromOrder(Order $order) {
        return new Invoice();
    }
}

?>