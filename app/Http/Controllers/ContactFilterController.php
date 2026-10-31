<?php

namespace App\Http\Controllers;

use App\Models\ContactFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Flasher\Toastr\Prime\toastr;

class ContactFilterController extends Controller
{
    public function index() {
        $filters = ContactFilter::all();

        return view('components.admin.contact_filter.index', compact('filters'));
    }

    public function create() {
        return view('components.admin.contact_filter.create');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:contact_filters,email',
            'text' => 'nullable|string',
            'reason' => 'nullable|string',
        ]);

        $contactFilter = new ContactFilter();
        $contactFilter->email = $request->input('email');
        $contactFilter->text = $request->input('text');
        $contactFilter->reason = $request->input('reason');
        $contactFilter->is_active = $request->input('is_active') ? 1 : 0;
        $contactFilter->save();

        return redirect()->route('contact_filter.index')->with('success', 'Contact filter created successfully.');
    }

    public function edit($id) {
        $contactFilter = ContactFilter::findOrFail($id);
        return view('components.admin.contact_filter.edit', compact('contactFilter'));
    }

    public function update(Request $request, $id) {
        // dd($request->input('is_active'));
        $request->validate([
            'email' => 'required|email|unique:contact_filters,email,' . $id,
            'text' => 'nullable|string',
            'reason' => 'nullable|string',
        ]);

        $contactFilter = ContactFilter::findOrFail($id);
        $contactFilter->email = $request->input('email');
        $contactFilter->text = $request->input('text');
        $contactFilter->reason = $request->input('reason');
        $contactFilter->is_active = $request->input('is_active') ? 1 : 0;
        $contactFilter->save();

        return redirect()->route('contact_filter.index')->with('success', 'Contact filter updated successfully.');
    }

    public function destroy($id) {
        $contactFilter = ContactFilter::findOrFail($id);
        $contactFilter->delete();

        return redirect()->route('contact_filter.index')->with('success', 'Contact filter deleted successfully.');
    }
}
