<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        echo "Welcome to the damavand Framework";
    }
    public function damavand()
    {
        echo "Welcome to the damavand Framework "."<br>"."
            A framework based on MVC and object-oriented architecture that can make your work easy and enjoyable to use.";
    }
    public function store(){
        echo "thsi is a store method";
    }
}