<?php
namespace App\Repositories\Slider;
interface SliderContract {
  public function create($request);
  public function findAll();
  public function getAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($id);
}