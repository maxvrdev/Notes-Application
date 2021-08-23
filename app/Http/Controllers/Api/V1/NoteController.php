<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Note::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->fill($request->only($note->getFillable()));
        $note->save();

        return response()->json($note, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Note $note)
    {
        return $note;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Note    $note
     *
     * @return Response
     */
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return response()->json($note, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Note $note
     *
     * @return JsonResponse
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json(null, 204);
    }
}
