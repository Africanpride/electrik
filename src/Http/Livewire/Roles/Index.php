<?php

namespace Electrik\Http\Livewire\Roles;

use Livewire\Component;

class Index extends Component {

    public function mount() {

        // if(!auth()->user()->can('access-management.roles-permissions'))
        //     return redirect()->route('error.access-denied');
    }

    public function render() {

        return view('electrik::livewire.roles.index');
    }
}
