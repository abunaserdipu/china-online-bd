<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function home()
    {
        return view('app');
    }

    public function accessForm()
    {
        return view('access_token');
    }

    public function accessToken(Request $request)
    {
        $access = Http::withHeaders([
            'email' => $request->email,
        ])->post('https://chinaonlinebd-code-interview.vercel.app/api/v1/get-access-token');

        return view('grant_token', compact('access'));
    }

    public function grantToken(Request $request)
    {
        $grant = Http::withHeaders([
            'token' => $request->access,
        ])->post('https://chinaonlinebd-code-interview.vercel.app/api/v1/grant-token');
        session()->put([
            'token' => $grant['accessToken'],
            'grant' => $grant['grantToken'],
            'limit' => $grant['timeLimit']
        ]);

        return view('question', compact('grant'));
    }

    public function question(Request $request)
    {
        $questions = Http::withHeaders([
            'token' => $request->access,
            'grant' => $request->grant,
        ])->post('https://chinaonlinebd-code-interview.vercel.app/api/v1/get-the-question');




        if (json_decode($questions['status']) == 4000) {
            return $questions['message'];
        } else {
            return $questions;
        }
    }

    public function shortenedQuestion()
    {
        $token = session()->all();
        $questions = Http::withHeaders([
            'token' => $token['token'],
            'grant' => $token['grant'],
        ])->post('https://chinaonlinebd-code-interview.vercel.app/api/v1/get-the-question');

        $groupedData = [];
        if (json_decode($questions['status']) == 4001) {
            return $questions['message'];
        } else {
            foreach ($questions['question'] as $question) {
                $category = $question['PropertyName'];

                if (!isset($groupedData[$category])) {
                    $groupedData[$category] = [];
                }

                $groupedData[$category][] = $question['Value'];
            }

            return response()->json($groupedData);
        }
    }
}
