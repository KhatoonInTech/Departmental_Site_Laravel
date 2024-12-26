<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Content;
use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
class ContentController extends Controller
{
    public function showPrograms()
    {
        $bsc = Content::where('Page', 'Programs')
            ->where('Section', 'bsc_computer_engineering')
            ->first();

        $msc = Content::where('Page', 'Programs')
            ->where('Section', 'msc_computer_engineering')
            ->first();

        return view('visitorOnly.department.programs', compact('bsc', 'msc'));
    }
    public function aboutCPE()
    {
        $contents = [
            'introduction' => Content::where('Page', 'about-cpe')
                ->where('Section', 'introduction')
                ->first(),
            'achievements' => Content::where('Page', 'about-cpe')
                ->where('Section', 'achievements')
                ->first(),
            'impact' => Content::where('Page', 'about-cpe')
                ->where('Section', 'impact')
                ->first(),
            'programs' => Content::where('Page', 'about-cpe')
                ->where('Section', 'programs')
                ->first(),
            'facilities' => Content::where('Page', 'about-cpe')
                ->where('Section', 'facilities')
                ->first(),
        ];
        return view('visitorOnly.department.aboutCPE', compact('contents'));

    }
    public function aboutUni()
    {
        $contents = [
            'history' => Content::where('Page', 'AboutUni')
                ->where('Section', 'history')
                ->first(),
            'objectives' => Content::where('Page', 'AboutUni')
                ->where('Section', 'objectives')
                ->first(),
            'goals' => Content::where('Page', 'AboutUni')
                ->where('Section', 'goals')
                ->first(),
            'vision' => Content::where('Page', 'AboutUni')
                ->where('Section', 'vision')
                ->first(),
            'mission' => Content::where('Page', 'AboutUni')
                ->where('Section', 'mission')
                ->first(),
            'vc_message' => Content::where('Page', 'AboutUni')
                ->where('Section', 'vc_message')
                ->first(),
        ];

        return view('visitorOnly.university.aboutuni', compact('contents'));
    }
    public function edit($ID)
    {
        $faculty = Faculty::where('Faculty_ID', $ID)->firstOrFail();

        $contents = Content::all();
        return view('admin.editContent', compact('contents', 'faculty'));
    }



    public function update(Request $request)
    {
        //dd($request->all());
        // Validate incoming request data
        $validatedData = $request->validate([
            'Page' => 'required|string',
            'Section' => 'required|string',
            'Title' => 'nullable|string|max:255',
            'Body' => 'nullable|string',
            'Link' => 'nullable|url',
            'picture_url' => 'required|image|mimes:jpg,jpeg,png|max:2048'

        ]);

        // Find the content record by Page and Section
        $content = Content::where('Page', $validatedData['Page'])
            ->where('Section', $validatedData['Section'])
            ->first();

        if (!$content) {
            return redirect()->back()->with('error', 'Content not found for the selected Page and Section.');
        }

        // Update content fields
        if ($request->Title){
        $content->Title = $validatedData['Title'];}
        elseif($request->Body){
        $content->Body = $validatedData['Body'];}
        elseif($request->Link){
        $content->Link = $request->Link?$validatedData['Link']:"";}
       

        // Handle image upload if a new image is provided
        if ($request->hasFile('picture_url')) {
            $file = $validatedData['picture_url'];


            // Optionally delete old image if necessary
            if ($content->picture_url) {
                Storage::delete($content->picture_url);
            }

            // Store new image and update path in database
            $path = $file->store('content/pictures', 'public');
            $content->picture_url = 'storage/' . $path;
            
        }

        // Save updated content record
        $content->save();

        return redirect()->back()->with('success', 'Content updated successfully.');
    }
}
