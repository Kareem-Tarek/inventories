<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate();
        return view('dashboard.pages.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.pages.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     * @return RedirectResponse
     */
    public function store(ClientRequest $request) : RedirectResponse
    {
        try {
            Client::create($request->validated());
            //DB::table('clients')->insert([$request->validate()]);
            return redirect()->route('clients.index')->with('successfully', __('Created successfully'));
        } catch (\Exception $exception){
            return redirect()->route('clients.index')->with('failed', 'Something went wrong');
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return View
     */
    public function edit(Client $client)
    {
        $Client_model = $client;
        return view('dashboard.pages.clients.edit', compact('Client_model'));
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
        try {
            $client->update($request->validated());
            return to_route('clients.index')->with('successfully', __('Updated successfully'));
        } catch (\Exception $exception) {
            return to_route('clients.index')->with('failed', __('Something went wrong'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return RedirectResponse
     */
    public function destroy(Client $client)
    {
        try {
            $client->delete();
            return redirect()->route('clients.index')->with('successfully', __('Deleted successfully'));
        } catch (\Exception $exception) {
            return to_route('clients.index')->with('failed', __('Something went wrong'));
        }
    }
}
