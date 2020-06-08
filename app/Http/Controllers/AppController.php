<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\Project;
use App\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    /**
     * @return Factory|View
     */
    public function home()
    {
        return view('home.home', [
            'projects' => Project::all()
        ]);
    }

    /**
     * @param $slug
     * @return Factory|View
     */
    public function detail($slug)
    {
        return view('detail.detail', [
            'project' => Project::where('slug', $slug)->firstOrFail()
        ]);
    }

    /**
     * @return Factory|View
     */
    public function pricing()
    {
        return view('pricing.pricing');
    }

    /**
     * @return Factory|View
     */
    public function about()
    {
        return view('about.about', [
            'projects' => Project::all()
        ]);
    }

    /**
     * @return Factory|View
     */
    public function contacts()
    {
        return view('contacts.contacts');
    }

    /**
     * @param OrderRequest $request
     * @return RedirectResponse
     */
    public function order(OrderRequest $request)
    {

        $new_order = new Order();
        $new_order->fill($request->all());
        $new_order->save();
        $new_order->saveAmo();

        return  redirect()->route('contacts')->with('alert', true);
    }
}
