<?php
require_once __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51P6i75P5UEO3xQxq0G0w1850UuWU6mWUgku08fyBPVY7D4fHZCG8jgYVvGQRsRYL7N3Ti36W57sVGtqPPDarT1ET00b1lBYQn9";
\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 40000,
                "product_data" => [
                    "name" => "Ticket Tangier To Istanbul",
                    "images" => ["https://media.timeout.com/images/105859738/750/422/image.jpg"] 
                ]
            ]
        ]
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
exit;
?>
