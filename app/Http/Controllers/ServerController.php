<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ServerController extends Controller
{
    // Display a listing of the server
    public function index()
    {
        // Corrected 'Http::get' and added missing comma in 'view()' function
       // $servers = Http::timeout(60)->get('https://jsonplaceholder.typicode.com/users')->json();
        $servers = Http::get('https://jsonplaceholder.typicode.com/users')->json();

        // Format ulang data agar memiliki kunci default
        $servers = array_map(function ($server) {
            return [
                'name' => $server['name'] ?? 'Name',
                'price' => $server['price'] ?? 'Price',
                'quantity' => $server['quantity'] ?? 'Quantity',
            ];
        }, $servers);
        
        return view('servers.index', compact('servers'));
        

        //return view('servers.index', ['servers' => $servers]);
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('servers.create');
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255'
        ]);

        Server::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Display the specified user
    public function show(Server $server)
    {
        return view('servers.show', compact('server'));
    }

    // Show the form for editing the specified user
    public function edit(Server $server)
    {
        return view('servers.edit', compact('server'));
    }

    // Update the specified user in the database
    public function update(Request $request, Server $server)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255'
        ]);

        $server->update([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('server.index')->with('success', 'Server updated successfully.');
    }

    // Remove the specified user from the database
    public function destroy(Server $server)
    {
        $server->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}