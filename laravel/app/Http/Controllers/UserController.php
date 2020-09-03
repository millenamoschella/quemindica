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

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos', $filename);
            // $file->move('uploads/photos', $filename);
            $photo->photo = $filename;
        } else {
            return $request;
            $photo->photo = '';
        }

        $photo->save();


        return redirect()->route('perfil')
            ->with('success', 'Foto criada com sucesso');
    }


    /**
     * Controller para exibir detalhes das photos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = User::findOrFail($id);
        return view('show', compact('photo'));
    }

    /**
     * Controller para editar as photos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $photo = User::find($id);
        return view('edit', compact('photo'));
    }

    /**
     * Controller para atualizar a photo no sistema
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        // $userPhoto = User::find($id);
        // $userPhoto->photo = $request->photo;

        // $result = $userPhoto->save();
        // return redirect()->route('perfil');

        $photo = User::findOrFail($id);

        $photoAntiga = 'uploads/photos' . $photo->photo;

        if ($request->hasFile('photo')) {

            unlink($photoAntiga);

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos', $filename);
            $photo->photo = $filename;
        } else {
            return $request;
            $photo->photo = '';
        }

        $photo->save();


        return redirect()->route('perfil')
            ->with('success', 'Foto atualizada com sucesso');
    }

    /**
     * Controller para deletar um photo
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
