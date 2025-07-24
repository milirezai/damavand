<?php
namespace App;

use System\Database\ORM\Model;


class User extends Model
{
    # table => نام جدولی که این کلاس نماینده اونه
    # fillable => نام فیلد هایی که از این جدول می تونه پر شه
    # hidden => فیلد هایی که اطلاعات اون مخفی باشه 
    # casts =>  هستند casts فیلد هایی که جزو 
    # primaryKey => جدول فعلی اگر پیشفرض ای دی است
    # createdAT => اسم این فیلد درون جدول
    # updatedAT => اسم این فیلد درون جدول
    # deletedAT => به اسم این فیلد درون جدول

     protected $table;
     protected $fillable= [];
     protected $hidden= [];
     protected $casts= [];
     protected $primaryKey= 'id';
     protected $createdAT= 'createdAT';
     protected $updatedAT= 'updatedAT';
     protected $deletedAT= null;
     
}