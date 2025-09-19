<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index()
    {
        return view('notifications.mailbox');
    }

    public function showDiterima($id)
    {
        // Sample booking data - in real app, fetch from database
        $booking = (object) [
            'id' => $id,
            'customer_name' => 'John Doe',
            'customer_email' => 'john.doe@email.com',
            'customer_phone' => '+62 812-3456-7890',
            'division' => 'IT Department',
            'status' => 'diterima',
            'keterangan_dinas' => 'Perjalanan dinas ke Jakarta - Rapat klien',
            'flight_details' => [
                'airline' => 'Garuda Indonesia',
                'route' => 'Jakarta → Bali',
                'date' => '15 Jan 2024',
                'time' => '08:30 - 11:45'
            ],
            'hotel_details' => [
                'name' => 'Grand Hyatt Bali',
                'room_type' => 'Deluxe Room',
                'checkin' => '15 Jan 2024, 14:00',
                'checkout' => '18 Jan 2024, 12:00'
            ]
        ];

        return view('notifications.diterima', compact('booking'));
    }

    public function showDitolak($id)
    {
        // Sample rejected booking data - in real app, fetch from database
        $booking = (object) [
            'id' => $id,
            'customer_name' => 'Jane Smith',
            'customer_email' => 'jane.smith@email.com',
            'customer_phone' => '+62 821-9876-5432',
            'division' => 'Marketing Department',
            'status' => 'ditolak',
            'keterangan_dinas' => 'Kunjungan kerja ke Yogyakarta untuk koordinasi event',
            'rejection_reason' => 'Budget tidak mencukupi untuk permintaan tiket business class. Silakan ajukan kembali dengan kelas ekonomi atau tunggu approval budget tambahan dari finance department.'
        ];

        return view('notifications.ditolak', compact('booking'));
    }
}
