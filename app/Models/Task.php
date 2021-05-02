<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    // auto ucfirst for attribute
    // public function getNameAttribute($value){
    //     return ucfirst($value);
    // }

    // Use new attribue auto ucfirt value 
    public function getNewNameAttribute(){
        return ucfirst($this->name);
    }
    // demo 
    public function getStatusTextAttribute(){

        if ($this->status == 1) {
            return 'Đang làm';
        }else {
            return 'Đã hoàn thành';
        }
    }

    //Set auto ucfirst value to database
    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }

    //priority
    public function getPriorityTextAttribute(){
        if ($this->priority == 0) {
            return 'Bình thường';
        }else if ($this->priority == 1) {
            return 'Quan trọng';
        }else{
            return 'Khẩn cấp';
        }
    }
}
