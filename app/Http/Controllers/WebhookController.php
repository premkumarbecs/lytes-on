<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Get all the data sent by the webhook
        $data = $request->all();

        // Log the incoming webhook data
        Log::info('Data received: ', $data);

        // Return a 200 OK response to acknowledge the webhook
        return response()->json(['status' => 'success'], 200);
    }
}
