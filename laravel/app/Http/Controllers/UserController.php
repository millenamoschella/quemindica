<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Controller para listar todos os photos
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Controller para criar novos photos
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Controller para salvar os photos criados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $photo = User::findOrFail($id);

        $photoAntiga = 'uploads/photos/' . $photo->photo;

        if ($request->hasFile('photo')) {

            unlink($photoAntiga);

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $photo->photo = $filename;
        } else {
            return $request;
            $photo->photo = '';
        }

        $photo->save();
        return back();
    }

    /**
     * Controller para exibir detalhes das photos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $photo = User::findOrFail($id);
    //     return view('show', compact('photo'));
    // }

    /**
     * Controller para deletar uma photo
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $photo = User::findOrFail($id);

        $image_path = 'uploads/photos' . $photo->photo;
        unlink($image_path);

        $photo->delete();

        return redirect()->route('perfil')
            ->with('success', 'Foto deletada com sucesso');
    }
}
