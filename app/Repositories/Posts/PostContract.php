<?php
namespace App\Repositories\Posts;
interface PostContract {
  public function create($request);
  public function findAll();
  public function getAll();
  public function findById($id);
  public function findBySlug($slug);
  public function update($request, $id);
  public function remove($id);
}