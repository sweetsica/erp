<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ContactUSApi extends Controller
{
    public function store(Request $request)
    {
        $data = ContactUS::create($request->all());
        $name = $request->input('name');
        $title = $request->input('title');
        $phone = $request->input('phone');
        $content= $request->input('content');
        $botToken = "bot586552946:AAEizFcay2dWNEuSYR2uZIVsjIebaVwYgxc";
        $chat_id = "-1001179610724";
        $bot_url = "https://api.telegram.org/$botToken/";
        $contentdone = urlencode("Yêu cầu mới \n- Từ: ".$name." \n- Tiêu đề: ".$title." \n- Nội dung: ".$content." \n- Liên hệ: ".$phone);
        $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".$contentdone;
        $urldone = file_get_contents($url);
        Session::flash('message', 'Gửi yêu cầu thành công, chúng tôi sẽ liên hệ bạn sớm nhất!');
        Session::flash('type', 'success');
        Session::flash('title', 'Success');
        return Redirect::to('lien_he');
    }
}
