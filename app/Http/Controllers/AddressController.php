<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Flasher\Toastr\Prime\toastr;

class AddressController extends Controller
{
    public function create()
    {
        return view('components.user.create-address');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'address_line1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postcode' => 'required|string|max:20',
        ]);

        // Create a new address
        $address = Address::create($validated);

        // Attach the address to the authenticated user
        $request->user()->addresses()->attach($address->id);

        toastr()->success('Address added successfully.');
        // Redirect back with success message
        return redirect()->route('profile');
    }

    public function edit(Address $address)
    {
        return view('components.user.update-address', compact('address'));
    }

    public function update(Request $request, Address $address)
    {
        // Validate the request data
        $validated = $request->validate([
            'address_line1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postcode' => 'required|string|max:20',
        ]);

        // Update the address
        $address->update($validated);

        toastr()->success('Address updated successfully.');
        // Redirect back with success message
        return redirect()->route('profile');
    }

    public function destroy(Address $address)
    {
        // Detach the address from the authenticated user
        request()->user()->addresses()->detach($address->id);

        
        toastr()->success('Address deleted successfully.');
        // Redirect back with success message
        return redirect()->route('profile');
    }
}
