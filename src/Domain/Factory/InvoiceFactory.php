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
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new \DateTime());
        $invoice->setTotal($order->getTotal());
        return $invoice;
    }
}

?>