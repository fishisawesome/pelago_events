<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Nation;

class CreateUserModalComposer {

    /**
     * Bind data to the view.
     *
     * @param  View $view
     */
    public function compose(View $view)
    {
        $view->with([
            'nations' => Nation::orderBy('name','asc')->get(),
        ]);
    }
}