<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Articles extends Model
{
 public $id;
 public $title;
 public $author;
 public $description;
 public $validate;
 public $creationdate;
 public $category;
 function __construct(){
 }

 public function id() {
    return $this->id;
 }

 public function validate() {
    return $this->validate;
 }

 public function author() {
    return $this->author;
 }

 public function title() {
    return $this->title;
 }

 public function description() {
    return $this->description;
 }

 /*public static function createArticle($title, $description, $author, $category)
 {
     return self::create([
         'title' => $title,
         'description' => $description,
         'author' => $author,
         'category' => $category,
     ]);
 }*/
 public static function insertArticle($updateData)
 {
     return DB::table('articles')
         ->insert($updateData);
 }

 public static function updateArticle($updateData)
 {
     return DB::table('articles')
         ->where('id', $updateData["id"])
         ->update($updateData);
 }
}
