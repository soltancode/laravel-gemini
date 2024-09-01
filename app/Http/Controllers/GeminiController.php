<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class GeminiController extends Controller
{
    public function askQuestion(Request $request)
    {
        $result = Gemini::geminiPro()->generateContent($request->question);

        return view('gemini', [
            'question' => $request->question,
            'answer' => $result->text()
        ]);
    }
}
