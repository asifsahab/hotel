<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingsubmit(Request $request)
    {
        $hotelname = Room::where('hotelname', $request->hotelname)->first();

        if (!$hotelname) {
            return redirect()->back()->with('error', 'Room not found');
        }

        $checkin = $hotelname->checkin;
        $checkout = $hotelname->checkout;




        $request->validate([
            'checkin' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($checkin) {
                    if (strtotime($value) < strtotime($checkin)) {
                        $fail('The check-in date must be greater than or equal to the room\'s check-in date.');
                    }
                },
            ],
            'checkout' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($checkout) {
                    if (strtotime($value) > strtotime($checkout)) {
                        $fail('The check-out date must be less than or equal to the room\'s check-out date.');
                    }
                },
            ],
            'name'=>'required',
            'email'=>'required',
        ]);

        $bookingdata = new Booking;
        $bookingdata->hotelname = $request->input('hotelname');
        $bookingdata->price = $request->input('price');
        $bookingdata->name = $request->input('name');
        $bookingdata->email = $request->input('email');
        $bookingdata->checkin = $request->input('checkin');
        $bookingdata->checkout = $request->input('checkout');
        $bookingdata->city = $request->input('city');
        $bookingdata->category = $request->input('category');
        $bookingdata->person = $request->input('person');
        $bookingdata->room = $request->input('room');
        $bookingdata->request = $request->input('request');
        $bookingdata->save();

        $hotelname->status =0;
        $hotelname->save();


        return redirect()->back()->with('success', 'Booking is okay');
    }

}
