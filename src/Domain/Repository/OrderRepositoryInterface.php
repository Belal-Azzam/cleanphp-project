<?php
/**
 * Created by PhpStorm.
 * User: belal
 * Date: 2018-11-30
 * Time: 8:09 PM
 */

namespace CleanPhp\Invoicer\Domain\Repository;
interface OrderRepositoryInterface
    extends RepositoryInterface {
    public function getUninvoicedOrders();
}
?>