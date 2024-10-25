<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\CustomProduct;
use App\Models\CustomProductsSizeGuide;
use App\Models\CustomProductsSizeStaff;

use Illuminate\Support\Facades\Log;



class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        // Payment form ko render karo
        return view('payment.form');
    }

    public function createPaymentIntent(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $totalPrice = session('totalPrice');
            $amountInCents = $totalPrice * 100;

            $paymentIntent = PaymentIntent::create([
                'amount' =>  1000,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return response()->json(['client_secret' => $paymentIntent->client_secret]);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }




    // Payment successful hone ke baad data store karne wala method
    public function storeCustomProduct(Request $request)
    {

        Log::info('Session Data:', session()->all());

        $formData = session()->get('formData');


        $customerId = session('user')->id ?? null;

        if (!$formData || !$customerId) {
            return response()->json(['success' => false, 'error' => 'Session data is missing.']);
        }

        try {
            // CustomProduct table mein data insert karo
            $customProduct = CustomProduct::create([
                'customer_id' => $customerId,
                'sleeve_length' => $formData['sleeve-length'],
                'team_logo' => $formData['team-logo'],
                'collar_type' => $formData['collar-type'],
                'kit' => $formData['kit'],
                'fit_type' => $formData['fit-type'],
                'inside_collar_message' => $formData['inside-collar-message'],
                'socks' => $formData['socks'],
                'collar_text' => $formData['inside_collar_message_text'],
                'socks_color' => $formData['socks-color'],
                'goalkeeper_kit' => $formData['goalkeeper-kit'],
                'padded' => $formData['padded'],
                'goalkeeper_sleeve' => $formData['goalkeeper-sleeve'],
                'goalkeeper_jersey_design' => $formData['goalkeeper-jersey-design'],
                'jersey_color' => $formData['jersey-color'],
                'staff_other' => $formData['staff-other'],
                'staff_kit' => $formData['staff-kit'],
                'staff_collar_type' => $formData['staff-collar-type'],
                'staff_fit_type' => $formData['staff-fit-type'],
            ]);

            // CustomProductsSizeGuide Store data
            $names = $formData['name'];
            $numbers = $formData['number'];
            $shortSizes = $formData['short_size'];
            $shirtSizes = $formData['shirt_size'];
            $quantities = $formData['quantity'];

            // Loop  for multipal insert data
            for ($i = 0; $i < count($names); $i++) {
                CustomProductsSizeGuide::create([
                    'customer_id' => $customerId, // Customer ID

                    'size_guide_name' => $names[$i],
                    'size_guide_number' => $numbers[$i],
                    'size_guide_short_size' => $shortSizes[$i],
                    'size_guide_shirt_size' => $shirtSizes[$i],
                    'size_guide_quantity' => $quantities[$i],
                ]);
            }



            $staffNames = $formData['staff-name'];
            // $sleevelength = $formData['Pants-Length1'];
            $pantsLengths = $formData['Pants-Length'];
            $shirtSizes = $formData['staff_shirt_size'];
            $pantsSizes = $formData['staff_pant_size'];
            $quantities = $formData['shirt_paint_quantity'];


            // Loop for multipal insert data
            for ($i = 0; $i < count($staffNames); $i++) {
                CustomProductsSizeStaff::create([
                    'customer_id' => $customerId,
                    'staff_name' => $staffNames[$i],
                    // 'staff_sleeves_length' =>  $sleevelength[$i],
                    'staff_pants_length' => $pantsLengths[$i],
                    'staff_shirt_size' => $shirtSizes[$i],
                    'staff_pants_size' => $pantsSizes[$i],
                    'staff_quantity' => $quantities[$i],
                ]);
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
