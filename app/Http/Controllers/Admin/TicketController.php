<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create()
    {
        return view('product.backend.ticket.create', [
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('ticket_filename')) {
            $image = $request->file('ticket_filename');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('files/'), $imageName);
            $request['ticket_filename'] = 'files/' . $imageName;

            $ticket = new Ticket();
            $ticket->ticket_subject = $request['ticket_subject'];
            $ticket->ticket_content = $request['ticket_content'];
            $ticket->ticket_filename = $imageName;
            $ticket->store_id = $request['store_id'];
            $ticket->user_id = $request['user_id'];
            $ticket->save();
            return back()->with(['success' => 'Support Ticket send successfully']);
        } else {
            $ticket = new Ticket();
            $ticket->fill($request->all());
            $ticket->save();
            return back()->with(['success' => 'Support Ticket send successfully']);
        }
    }
}
