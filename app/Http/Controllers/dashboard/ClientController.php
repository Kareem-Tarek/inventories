<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $clients = Client::latest()->paginate();
        return view('dashboard.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     * @return RedirectResponse
     */
    public function store(ClientRequest $request) : RedirectResponse
    {
        Client::create($request->validated());
        return redirect()->route('clients.index')->with('successfully', __('Created successfully'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return View
     */
    public function edit(Client $client) :  View
    {
        $Client_model = $client;
        return view('dashboard.clients.edit', compact('Client_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param Client        $client
     * @return RedirectResponse
     */
    public function update(ClientRequest $request, Client $client)
    {
        $client->update($request->validated());
        return to_route('clients.index')->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return RedirectResponse
     */
    public function destroy(Client $client) : RedirectResponse
    {
        $client->delete();
        return redirect()->route('clients.index')->with('successfully', __('Deleted successfully'));
    }
}
