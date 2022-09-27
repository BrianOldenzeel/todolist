<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;

class TodolistController extends Controller
{
    
        public function index() {
            return view('welcome', ['listItems' => ListItem::all()]);
        }
    
        public function markComplete() {
            return redirect('/');
        }
    

    public function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        
        return redirect('/');
    }
}
