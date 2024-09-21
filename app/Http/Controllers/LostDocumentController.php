<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LostDocumentController extends Controller
{
    //
    public function store(Request $request)
    {
        //return $request->all();

        // Validate the form data
        $validated = $request->validate([
            'firstname_on_id' => 'required|string|max:50',
            'lastname_on_id' => 'required|string|max:50',
            'id_number' => 'required|string|max:50',
            'sex' => 'required|string',
            'location_description' => 'required|string',
            'county' => 'required|string',
            'document_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048', // Limit to 2MB
        ]);

        // Handle the file upload
        if ($request->hasFile('document_image')) {
            $fileName = time() . '_' . $request->file('document_image')->getClientOriginalName();
            $filePath = $request->file('document_image')->storeAs('uploads', $fileName, 'public');
        }

        // Insert data using DB facade
        DB::table('tbl_lostdocuments')->insert([
            'first_name' => $validated['firstname_on_id'],
            'last_name' => $validated['lastname_on_id'],
            'doc_no' => $validated['id_number'],
            'gender' => $validated['sex'],
            'status' => 'pending',
            'doc_type' => '1',
            'doc_location' => $validated['location_description'],
            'doc_county' => $validated['county'],
            'doc_link' => $filePath ?? null, // Store the uploaded file path
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Document submitted successfully!');
    }

    public function index()
    {
        // Fetch all records from the 'tbl_lostdocuments' table
        $lostDocuments = DB::table('tbl_lostdocuments')->get();

        // Pass the data to the view
        //return view('lostdocuments.index', ['lostDocuments' => $lostDocuments]);

        $contributions="";

        $data=[
            'lostDocuments' => $lostDocuments,
            

        ];

        return view('dashone.docstable')->with($data);
    }

    public function show($id)
        {
            // Find the document by its ID
            $document = DB::table('tbl_lostdocuments')->where('id', $id)->first();

            // Check if the document exists
            if (!$document) {
                return redirect()->route('lostdocument.index')->with('error', 'Document not found');
            }

            // Pass the document to the view
            return view('lostdocumentsshow', compact('document'));
        }

}
