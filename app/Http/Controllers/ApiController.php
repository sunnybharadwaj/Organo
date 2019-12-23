<?php

namespace Organo\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function team() {
        $data = \Organo\Member::all();
        return $data;
    }

    public function videos() {
        $data = \Organo\Video::all();
        $store = $data->map(function($record) {
            $videoId = explode('=', $record->url, 3);
            $item = $videoId[(int)count($videoId) - 1];
            $packet = [
                "title" => $record->title,
                "url" => $record->url,
                "video_id" => $item
            ];

            return $packet;
        });

        return $store;
    }
}
