<?php
namespace App\Repositories\Document;
interface DocumentContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function findBySlug($slug);
  public function remove($id);
}