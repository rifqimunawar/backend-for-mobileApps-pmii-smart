<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TiketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tikets')->delete();
        
        \DB::table('tikets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rifqi',
                'wa' => '0000',
                'email' => 'a@gmail.com',
                'qr_code' => 'XwozoDvcwVdvWEXj0KNp',
                'status' => 0,
                'user_id' => '0',
                'event_id' => '1',
                'snap_token' => NULL,
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'terakhir',
                'wa' => '33',
                'email' => 'email@gmao.com',
                'qr_code' => 'event_1_jWqx11tifHOEmwOFYgvO',
                'status' => 1,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => 'c400ae4a-5022-4b43-9e2e-0100587ba6d2',
                'statusPay' => 1,
                'ip_address' => NULL,
                'created_at' => '2024-03-02 23:21:40',
                'updated_at' => '2024-03-02 23:24:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'rifqi',
                'wa' => '99990',
                'email' => 'rifqi@gmail.com',
                'qr_code' => 'event_2_FusUg3Q645NuFJa7QEwA',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '21ca5bdd-67b8-4b9f-8a3f-3d2f5368d9ca',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-02 23:55:09',
                'updated_at' => '2024-03-02 23:55:09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'rifqi',
                'wa' => '888',
                'email' => 'r@gmail.com',
                'qr_code' => 'event_2_SMbYq0bnF7QVwaDSXtzk',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'dcb67c7e-7dc7-4ae7-bce7-1424287cd84e',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-02 23:56:31',
                'updated_at' => '2024-03-02 23:56:31',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'a',
                'wa' => '2',
                'email' => 'a@g.co',
                'qr_code' => 'event_2_XUs74NO04AFYzCBik19t',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'fed17ba4-109e-474f-b6b1-20cd190c8051',
                'statusPay' => 1,
                'ip_address' => NULL,
                'created_at' => '2024-03-02 23:56:41',
                'updated_at' => '2024-03-02 23:57:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'rifqi',
                'wa' => '7777',
                'email' => 'ri@gm.com',
                'qr_code' => 'event_2_E0TyNLUCOkq1P7jnxqUk',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '71fbe2bb-b369-4028-b8d9-b0563f906801',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:40:38',
                'updated_at' => '2024-03-03 00:40:38',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'rifqi',
                'wa' => '8888',
                'email' => 'r@gmail.com',
                'qr_code' => 'event_2_HNTt8gdbheCvYoFKL0RW',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '79b3b360-e699-48dc-9b9e-4d23aba3a6ab',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:44:21',
                'updated_at' => '2024-03-03 00:44:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'kkk',
                'wa' => '444',
                'email' => '666@fm.no',
                'qr_code' => 'event_2_F0iRx7XYLdzEF2xw1vyl',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '9b64c2be-9519-4a57-a3ef-32740d5865b8',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:44:59',
                'updated_at' => '2024-03-03 00:44:59',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'www',
                'wa' => '333',
                'email' => 'ee@f.c',
                'qr_code' => 'event_2_li2EDOBseHsMU5LxAJsA',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'd7346a41-b402-4ced-ba58-8f30beca3aa9',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:46:23',
                'updated_at' => '2024-03-03 00:46:23',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'rrr',
                'wa' => '333',
                'email' => 'hjdsf@gk',
                'qr_code' => 'event_2_kCoAxng7PVxwyfrH3oG4',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '40ca3b34-1dec-4105-a3f3-7cbf03599d5e',
                'statusPay' => 1,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:46:37',
                'updated_at' => '2024-03-03 00:48:03',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'kontol',
                'wa' => '888',
                'email' => 'jj@gm.com',
                'qr_code' => 'event_2_Tt1WQF9vt3NmStsCLUQ7',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'f08bb5b3-fc56-4783-ad5a-04b313fe0df3',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 00:51:26',
                'updated_at' => '2024-03-03 00:51:26',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'anjinq',
                'wa' => '9999',
                'email' => 'anjing@ng',
                'qr_code' => 'event_2_4yzl8W3eQQMw9d63Nrpi',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '629140a2-eee7-4ccc-9c7e-8de4fc943de9',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:00:18',
                'updated_at' => '2024-03-03 01:00:21',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'bayar',
                'wa' => '888',
                'email' => 'b@yar.com',
                'qr_code' => 'event_2_PH4YWL2EELelIIcjyh3C',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '98cc3286-0748-4e01-9a47-444e929f2f64',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:19:31',
                'updated_at' => '2024-03-03 01:19:31',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'aa',
                'wa' => '333',
                'email' => 'kdsfj@g.co',
                'qr_code' => 'event_2_cOtzz4dZcFsQQnJdZdyD',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '00427e86-d656-44a5-8a10-022893cb67e1',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:19:46',
                'updated_at' => '2024-03-03 01:19:49',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'eee',
                'wa' => '444',
                'email' => 'r@g.vom',
                'qr_code' => 'event_2_loyUwTl0hnLop4OKdw6f',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'ce0f582a-f316-42ac-86e4-1bdd600ae263',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:22:28',
                'updated_at' => '2024-03-03 01:22:28',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'a',
                'wa' => '444',
                'email' => 'r@g.co',
                'qr_code' => 'event_2_E6F2XpR1J0TAevJIwKe2',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'f6a7adf7-8217-4534-a4cb-ab3515b7abca',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:22:40',
                'updated_at' => '2024-03-03 01:22:42',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'www',
                'wa' => '222',
                'email' => 'rrr@g.c',
                'qr_code' => 'event_2_kcqDoZkqmhB790P7tmRf',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'fa4bb6a9-6a7c-4dd2-b8dc-33eda17bfb4f',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:23:09',
                'updated_at' => '2024-03-03 01:23:09',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'fff',
                'wa' => '44',
                'email' => 'uu@g.co',
                'qr_code' => 'event_2_EcSYWenaJBDbHtbXHlro',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => 'd9d8a15c-12c5-4e60-aaf2-cfe69003cb7a',
                'statusPay' => 1,
                'ip_address' => NULL,
                'created_at' => '2024-03-03 01:23:19',
                'updated_at' => '2024-03-03 01:24:56',
            ),
        ));
        
        
    }
}