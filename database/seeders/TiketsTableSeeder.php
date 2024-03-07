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
                'name' => 'sss',
                'wa' => '3333',
                'email' => '12edes@gfd.cd',
                'qr_code' => 'event_1_FRbj57zHluqyC4guZblH',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '25d527c8-ab0f-40fb-9c7e-72ee62735602',
                'statusPay' => 0,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 16:53:07',
                'updated_at' => '2024-03-05 16:53:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'sdfasfd',
                'wa' => '3232',
                'email' => 'fdsa@sdf.cd',
                'qr_code' => 'event_1_61RTHgIFmuhJHDWItbeA',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => 'f1788ac1-7a4e-4e58-914c-52c5b5b93d2c',
                'statusPay' => 0,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 16:54:15',
                'updated_at' => '2024-03-05 16:54:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'dsfas',
                'wa' => '3242',
                'email' => 'ds@gd.cd',
                'qr_code' => 'event_1_F75J9oZMsEhFsoc2ruAc',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '526bf9b0-1a39-4403-b643-b78eff9039b2',
                'statusPay' => 0,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 16:54:58',
                'updated_at' => '2024-03-05 16:55:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'rifqi',
                'wa' => '4533456789',
                'email' => 'rifqi@gmail.com',
                'qr_code' => 'event_1_4UJlOAWpmSja2nJJvtsZ',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '5748bc64-166f-4b88-8a21-45862a4c4882',
                'statusPay' => 1,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 16:55:30',
                'updated_at' => '2024-03-05 16:57:33',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'r3ef',
                'wa' => '432',
                'email' => 'asdf!@gf.d',
                'qr_code' => 'event_1_pIhHaMW29JrNwUFt7ZMQ',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => 'e53b1470-8d9f-4294-83bb-e2e660f858c9',
                'statusPay' => 1,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 16:57:56',
                'updated_at' => '2024-03-05 17:00:05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'sdfsad',
                'wa' => '3432',
                'email' => 'wefds@gfd',
                'qr_code' => 'event_1_0skEVIAorDxWH7xtMXSy',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '6db6bd15-0a09-4c10-b07b-5b7d152fb132',
                'statusPay' => 1,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 17:00:24',
                'updated_at' => '2024-03-05 17:02:01',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'dsfds',
                'wa' => '4354',
                'email' => 'dsfa@g.csd',
                'qr_code' => 'event_1_ZhFnrPaZ2GC7iLCK6oin',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '2f9a1056-145c-48e7-8755-29820cb081aa',
                'statusPay' => 0,
                'ip_address' => '114.79.49.50',
                'created_at' => '2024-03-05 17:08:31',
                'updated_at' => '2024-03-05 17:08:32',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'rufqu',
                'wa' => '9324',
                'email' => 'kasdf@flka.c',
                'qr_code' => 'event_1_Pa1eYfunxpUOaPSoXom0',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '90996619-4445-4f73-b7c7-eb65049c4ba5',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 08:41:57',
                'updated_at' => '2024-03-06 08:43:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'aaaa',
                'wa' => '1111',
                'email' => 'a1@g.c',
                'qr_code' => 'event_1_hYQprcpAx1cIiHxiip6D',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '3e629987-df83-462b-acd4-21d9e6ef72d4',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 08:43:42',
                'updated_at' => '2024-03-06 08:44:22',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'rifqi',
                'wa' => '989809',
                'email' => 'rjfs@lkfs.com',
                'qr_code' => 'event_2_RaZvNimH3rW14e63wuoi',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => NULL,
                'statusPay' => 0,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 11:29:50',
                'updated_at' => '2024-03-06 11:29:50',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'rifqi',
                'wa' => '989809',
                'email' => 'rjfs@lkfs.com',
                'qr_code' => 'event_2_cNWarHb984SIfn63ywFF',
                'status' => 1,
                'user_id' => NULL,
                'event_id' => '2',
                'snap_token' => '99e1bbe7-80ca-4e6f-a1a6-cfb0a11501aa',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 11:30:19',
                'updated_at' => '2024-03-06 11:33:52',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'aaa',
                'wa' => '3333',
                'email' => 'sd@d.c',
                'qr_code' => 'event_1_YiQwusCnsYdPZDERX5z8',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => '8db52a62-d8c2-4f8d-b053-f83c45b26605',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 23:18:39',
                'updated_at' => '2024-03-06 23:20:15',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'aaa',
                'wa' => '33',
                'email' => 'asa@g.c',
                'qr_code' => 'event_1_MYjvT3FCnMG6qR9oJEGC',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '1',
                'snap_token' => 'afef60b8-f8b9-44ba-a47d-99cdd04f3f64',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 23:20:23',
                'updated_at' => '2024-03-06 23:23:07',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'erew',
                'wa' => '1312',
                'email' => 'afdsa@g.c',
                'qr_code' => 'event_3_PkApsor0RIeeaBHGT7KH',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '3',
                'snap_token' => '7114367b-ade0-4cf9-91e8-bcd74d1b7edf',
                'statusPay' => 1,
                'ip_address' => '203.210.86.20',
                'created_at' => '2024-03-06 23:26:05',
                'updated_at' => '2024-03-06 23:26:47',
            ),
        ));
        
        
    }
}