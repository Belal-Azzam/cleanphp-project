<?php
/**
 * Created by PhpStorm.
 * User: belal
 * Date: 2018-11-30
 * Time: 8:20 PM
 */
use CleanPhp\Invoicer\Domain\Model\Invoice;
use CleanPhp\Invoicer\Domain\Model\Order;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;
describe('InvoiceFactory', function () {
    describe('->createFromOrder()', function () {
        it('should return an order object', function () {
            $order = new Order();
            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice)->to->be->instanceof(
                'CleanPhp\Invoicer\Domain\Entity\Invoice'
            );
        });
    });
});
?>