<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {

//  -- OPTIONS ALTERNATIV --
//  -- See below *

        $this->validate($request,
        ['body' => 'required|min:10'],
        ['required' => 'Please fill in the :attribute', 'min' => 'The :attribute shoud be of atleast :min characters']
        );

        $note = new Note($request->all());

    	$card->addNote($note, 1);

//  -- END OPTIONS ALTERNATIV --

    	return back();
    }

    public function edit(Note $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());

    	return back();
    }
}



//  -- see here:
//  -- Note: (alternative routes):

//  -- ONE OPTION --

//    	$note = new Note;
//
//    	$note->body = $request->body;
//
//    	$card->notes()->save($note);

//  -- TWO OPTION -- (with file Note.php in app folder).

//    	$card->notes()->save(
//    		new Note(['body' => $request->body])
//    	);

//  -- THREE OPTION --

//    	$card->notes()->create([
//    		'body' => $request->body
//    	]);

//  -- FOUR OPTION --

//    	$card->notes()->create($request->all());