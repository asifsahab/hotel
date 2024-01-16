<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class BookingController extends Controller
{
    public function bookingsubmit(Request $request)
    {
        $hotelname = Room::where('hotelname', $request->hotelname)->first();
        if (!$hotelname) {
            return redirect()->back()->with('error', 'Room not found');
        }

        $checkin = new \DateTime($hotelname->checkin);

        $checkout = new \DateTime($hotelname->checkout);

        $totalDays = $checkin->diff($checkout)->days;

        $request->validate([
            'checkin' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($checkin) {
                    if (strtotime($value) < $checkin->getTimestamp()) {
                        $fail('The check-in date must be greater than or equal to the room\'s check-in date.');
                    }
                },
            ],
            'checkout' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($checkout) {
                    if (strtotime($value) > $checkout->getTimestamp()) {
                        $fail('The check-out date must be less than or equal to the room\'s check-out date.');
                    }
                },
            ],
            'name' => 'required',
            'email' => 'required',
        ]);

        $userCheckin = new \DateTime($request->checkin);
        $userCheckout = new \DateTime($request->checkout);

        $userTotalDays = $userCheckin->diff($userCheckout)->days;

        $bookingData = new Booking;
        $bookingData->hotelname = $request->input('hotelname');
        $bookingData->price = $request->input('price');
        $bookingData->name = $request->input('name');
        $bookingData->email = $request->input('email');
        $bookingData->checkin = $request->input('checkin');
        $bookingData->checkout = $request->input('checkout');
        $bookingData->city = $request->input('city');
        $bookingData->category = $request->input('category');
        $bookingData->person = $request->input('person');
        $bookingData->room = $request->input('room');
        $bookingData->request = $request->input('request');

        $bookingData->save();


            $name = $request->name;
            $email = $request->email;

        $mail = new PHPMailer(true);

        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'asif.sahab64@gmail.com'; // Replace with your SMTP username
        $mail->Password = 'onfuucjugfpyrlso'; // Replace with your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('asif.sahab64@gmail.com', 'Hotelier');
        $mail->addAddress($email); // Replace with the recipient's email address

        //Content
        $mail->isHTML(true);

        $mail->Subject = 'Booking Confirmation - ' . $name;

      // Construct an HTML email body with Bootstrap styling
$mail->Body .= '<div class="container">';
$mail->Body .= '<div class="jumbotron">';
$mail->Body .= '<h1 class="display-4">Your Booking Confirmed!</h1>';
$mail->Body .= '<p class="lead">Thank you for booking with us.</p>';
$mail->Body .= '<hr class="my-4">';
$mail->Body .= '<p><strong>Name:</strong> ' . $name . '</p>';
$mail->Body .= '<p><strong>Email:</strong> ' . $email . '</p>';
$mail->Body .= '<p class="lead">Company: Hotilier</p>'; // Replace "Your Company Name" with the actual company name
$mail->Body .= '</div>';
$mail->Body .= '</div>';

        $mail->send();

        if ($userTotalDays == $totalDays) {

            $hotelname->status = 0;
            $hotelname->save();
        } else {
            $hotelname->checkin = $userCheckout->modify('+1 day')->format('Y-m-d');
            $hotelname->checkout = $checkout->format('Y-m-d');
            $hotelname->save();
        }

        return redirect()->back()->with('success', 'Booking is Done');
    }

    public function bookingView()
    {
        $data = Booking::all();
        return view('backend.bookingview')->with('data', $data);
    }

}
