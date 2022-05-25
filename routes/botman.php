<?php

use App\Conversations\ButtonConversation;
use App\Conversations\OnboardingConversation;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Middleware\ApiAi;
use BotMan\BotMan\Middleware\Dialogflow;
use BotMan\Drivers\Facebook\Extensions\Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate;

$botman = resolve('botman');

$botman->hears('Started|GET_STARTED', function ($bot) {
    // $url = 'https://api.giphy.com/v1/gifs/search?q=hello&api_key=RgqXzz5DGwceQSuOAUwNsu5bNkTefi9L&limit=1';
    // $result = json_decode(file_get_contents($url));
    // $img = $result->data[0]->images->downsized_large->url;

    // $message = OutgoingMessage::create()->withAttachment(
    //     new Image($img)
    // );
    // $bot->reply($message);
    // px webshop
    // $bot->reply('Chào mừng bạn đến với PXWebShop!');
    // $bot->reply('Bạn muốn sử dụng dịch vụ nào từ chúng tôi?');
    // $bot->reply(
    //     GenericTemplate::create()
    //         ->addElements([
    //             Element::create('Thiết kế web')
    //                 ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
    //                 ->image('https://pxwebshop.com/assets/img/service/service1.png')
    //                 ->addButton(ElementButton::create('Chi tiết')->url('https://pxwebshop.com/'))
    //                 ->addButton(ElementButton::create('Đặt hàng')
    //                     ->payload('tellmemore')->type('postback')),
    //             Element::create('Xây dựng ứng dụng')
    //                 ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
    //                 ->image('https://pxwebshop.com/assets/img/service/service1.png')
    //                 ->addButton(ElementButton::create('Chi tiết')->url('https://pxwebshop.com/'))
    //                 ->addButton(ElementButton::create('Đặt hàng')
    //                     ->payload('tellmemore')->type('postback')),
    //             Element::create('Dịch vụ mạng')
    //                 ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
    //                 ->image('https://pxwebshop.com/assets/img/service/service1.png')
    //                 ->addButton(ElementButton::create('Chi tiết')->url('https://pxwebshop.com/'))
    //                 ->addButton(ElementButton::create('Đặt hàng')
    //                     ->payload('tellmemore')->type('postback')),
    //             Element::create('Thiết kế logo, banner')
    //                 ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
    //                 ->image('https://pxwebshop.com/assets/img/service/service1.png')
    //                 ->addButton(ElementButton::create('Chi tiết')->url('https://pxwebshop.com/'))
    //                 ->addButton(ElementButton::create('Đặt hàng')
    //                     ->payload('tellmemore')->type('postback')),
    //         ])
    // );
    // end: pxwebshop
    
    // ecommerce
    $bot->reply('Chào mừng bạn đến với Web!');
    $bot->reply('Bạn muốn mua sản phẩm nào?');
    $bot->reply(
        GenericTemplate::create()
            ->addElements([
                Element::create('Laptop Gaming')
                    ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
                    ->image('https://fptshop.com.vn/landing-laptop-gaming/Content/Desktop/images/product-banner2.png?v=202205240224')
                    ->addButton(ElementButton::create('Chi tiết')->url('https://xebagachanhphat.online/product/1'))
                    ->addButton(ElementButton::create('Đặt hàng')
                        ->payload('tellmemore')->type('postback')),
                Element::create('Macbook')
                    ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
                    ->image('https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703174146015116_macbook-pro-16-2021-xam-dd.jpg')
                    ->addButton(ElementButton::create('Chi tiết')->url('https://xebagachanhphat.online/product/2'))
                    ->addButton(ElementButton::create('Đặt hàng')
                        ->payload('tellmemore')->type('postback')),
                Element::create('Laptop Văn Phòng')
                    ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
                    ->image('https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/29/637711274464479566_dell-inspiron-n3502-pentium-n5030-win-10-nk-dd.jpg')
                    ->addButton(ElementButton::create('Chi tiết')->url('https://xebagachanhphat.online/product/3'))
                    ->addButton(ElementButton::create('Đặt hàng')
                        ->payload('tellmemore')->type('postback')),
                Element::create('Laptop Đồ họa')
                    ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
                    ->image('https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/12/2/637740492418850393_dell-gaming-g15-5511-xam-1.jpg')
                    ->addButton(ElementButton::create('Chi tiết')->url('https://xebagachanhphat.online/product/4'))
                    ->addButton(ElementButton::create('Đặt hàng')
                        ->payload('tellmemore')->type('postback')),
                Element::create('Laptop Cao Cấp')
                    ->subtitle('Nơi hoàn hảo cho bạn lựa chọn')
                    ->image('https://images.fpt.shop/unsafe/fit-in/800x800/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2020/12/25/637445030472487415_dell-xps-13-9310-bac-1.png')
                    ->addButton(ElementButton::create('Chi tiết')->url('https://xebagachanhphat.online/product/5'))
                    ->addButton(ElementButton::create('Đặt hàng')
                        ->payload('tellmemore')->type('postback')),
            ])
    );
    // end: ecommerce 
});

$botman->hears('tellmemore', function($bot) {
    $bot->reply('Cám ơn bạn đã lựa chọn dịch vụ của chúng tôi.');
    // $bot->reply('Hãy cho chúng tôi biết thêm về thông tin dịch vụ hoặc để lại số điện thoại để nhân viên chúng tôi liên hệ với bạn.');
    $bot->startConversation(new OnboardingConversation);
});

$botman->hears('(.*)giá(.*)|(.*)tiền(.*)|Bảng giá', function ($bot) {
    $bot->reply('Bảng giá dịch vụ của chúng tôi');
    $bot->reply('https://pxwebshop.com/#price');
});

$botman->hears('Hi(.*)|Hello(.*)|(.*)chào(.*)', function ($bot) {
    $bot->reply('Hello!');
});

$botman->fallback(function ($bot) {
    $bot->reply('Nhân viên chúng tôi sẽ liên hệ với bạn sớm.');
});

// $botman->fallback(function ($bot) {
//     $message = $bot->getMessage();
//     $bot->reply('Xin lỗi! Tôi không hiểu "' . $message->getText() . '"');
//     $bot->reply('Tôi mới chỉ được dạy cách chào hỏi thôi :(');
//     $bot->reply('Để tôi kêu thằng ất ơ tạo ra tôi dạy tôi trả lời "' . $message->getText() . '"');
// });

$botman->hears('gif/{name}', function ($bot, $name) {
    $url = 'https://api.giphy.com/v1/gifs/search?q=' . urlencode($name) . '&api_key=RgqXzz5DGwceQSuOAUwNsu5bNkTefi9L&limit=1';
    $result = json_decode(file_get_contents($url));
    $img = $result->data[0]->images->downsized_large->url;

    $message = OutgoingMessage::create($name . ' của bạn đây')->withAttachment(
        new Image($img)
    );
    $bot->reply($message);
});

$botman->hears('animals', function ($bot) {
    $bot->startConversation(new ButtonConversation);
});





// START: botman with dialogflow

// $dialogflow = Dialogflow::create('c26740888a4d3bd3ee54492c84deb96e439449f2')->listenForAction();

// $botman->middleware->received($dialogflow);

// $botman->hears('searchWeather', function($bot) {
//     // $extras = $bot->getMessage()->getExtras();
//     // $locations = $extras['apiParameters']['geo-city'];
//     $bot->reply("this is my reply");
//     // $bot->reply($locations->getText());

// })->middleware($dialogflow);

// $dialogflow = ApiAi::create('c26740888a4d3bd3ee54492c84deb96e439449f2')->listenForAction();
// $botman->middleware->received($dialogflow);
// $botman->hears('searchWeather', function ($bot) {
    // $extras = $bot->getMessage()->getExtras();
    // $bot->reply($extras['apiQueryText']);
    // $bot->reply("this is my reply");
    // $extras = $bot->getMessage()->getExtras();
    // $locations = $extras['apiParameters']['geo-city'];
    // $bot->reply($locations);
//     $bot->reply("this is my reply");
// })->middleware($dialogflow);

// $extras = $bot->getMessage()->getExtras();
// $bot->reply($extras['apiReply']);

//END: DIALOGFLOW