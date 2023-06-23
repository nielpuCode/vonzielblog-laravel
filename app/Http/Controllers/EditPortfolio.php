<?php

namespace App\Http\Controllers;

use App\Models\Editprofile;
use App\Models\Editproject;
use Illuminate\Http\Request;
use App\Models\Editeducation;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class EditPortfolio extends Controller
{
    public function NewProject(Request $request) {
        $validatedData = $request->validate([
            'imageProject' => 'required',
            'projectTitle' => 'required',
            'projectLink' => 'required',
            'projectDesc' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        if ($request->hasFile('imageProject')) {
            $image = $request->file('imageProject');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $validatedData['imageProject'] = $imageName;
        }

        Editproject::create($validatedData);

        return redirect('/Editportfolio');
    }

    // untuk delete => Function contohFunction(nama modelnya $namavariabledariroute)
    public function DeleteProject(Editproject $editproject) {
        if (auth()->user()->id === $editproject['user_id']) {
            if ($editproject->imageProject) {
                $imagePath = public_path('storage/images/' . $editproject->imageProject);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Hapus postingan dari database
            $editproject->delete();

            return redirect('/');
        }

        return redirect('/');
    }

    public function NewProfile(Request $request, $id){
        $validatedData = $request->validate([
            'profilePic' => 'image',
            'profileName' => '',
            'profileJob' => '',
            'profileDesc' => '',
        ]);

        $validatedData['user_id'] = auth()->id();

        $theProfile = Editprofile::findOrFail($id);

        // Delete old image if it exists
        if ($theProfile->profilePic) {
            Storage::delete('public/images/' . $theProfile->profilePic);
        }

        if ($request->hasFile('profilePic')) {
            $image = $request->file('profilePic');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the new image
            $image->storeAs('public/images', $imageName);

            $validatedData['profilePic'] = $imageName;
        }

        $theProfile->update($validatedData);

        return redirect('/Editportfolio');
    }

    public function NewEducation(Request $request) {
        $validatedData = $request->validate([
            'iconEdu' => 'required',
            'titleEdu' => 'required',
            'nameEdu' => 'required',
            'linkEdu' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        if ($request->hasFile('iconEdu')) {
            $image = $request->file('iconEdu');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $validatedData['iconEdu'] = $imageName;
        }

        Editeducation::create($validatedData);

        return redirect('/Editportfolio');
    }

}
