<?php
/**
 * Created by PhpStorm.
 * User: belal
 * Date: 2018-11-30
 * Time: 8:08 PM
 */

namespace CleanPhp\Invoicer\Domain\Repository;
interface RepositoryInterface {
    public function getById($id);
    public function getAll();
    public function persist($entity);
    public function begin();
    public function commit();
}
?>