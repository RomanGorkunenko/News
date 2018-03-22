<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class News
{
    private $table_name = 'news';
    public function getAllNews() {
        return DB::table($this->table_name)->paginate(5);
                //->get();
    }
        public function insNews($id, $title, $category, $description, $content, $filename){
            return DB::table($this->table_name)->insert(
    ['id' => $id, 'title' => $title, 'category' => $category, 'description' => $description, 'content' => $content, 'filename'=> $filename]       
    );
        }
        public function getId($id1) {
            return DB::table($this->table_name)
                ->where('id', $id1)
                ->first();
    } 
        public function upNews($id1, $title1, $category1, $description1, $content1){
            return DB::table($this->table_name)
                ->where('id', $id1)
                ->update(['title' => $title1, 'category' => $category1, 'description' => $description1, 'content' => $content1]       
    );
    }
        public function delNews($id1){
            return DB::table($this->table_name)
                ->where('id', $id1)
                ->delete();       
    }
            public function getfive() {
            return DB::table($this->table_name)
                ->orderBy('id', 'desc')
                ->paginate(5);
    } 
}