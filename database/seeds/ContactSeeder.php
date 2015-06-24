<?php

use Illuminate\Database\Seeder;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //DB:table('contacts2')->delete();
        
        
       DB::table('contacts')->delete();
        
         App\Contact::create(array(
            
            'user_id' => '1',
            'name' => 'Mr.Black',
            'designation' => 'CEO-Microsoft',
            'email' => 'black@gmail.com',
             'phone' => '00445656565',
             'workphone' => '00445656565',
             'work_address' => '23,Galle road, South beach street',
             'notes' => 'Met at a conference'
             
            
        ));
         
         
         App\Contact::create(array(
            'user_id' => '1',
            'name' => 'Mr.white',
            'designation' => 'CTO-Etisalat',
            'email' => 'white@gmail.com',
             'phone' => '01123323223',
             'workphone' => '01123323223',
             'work_address' => '23, West floor, WTC',
             'notes' => 'Contact through IFS friend'
             
            
        ));
         
          App\Contact::create(array(
            
              'user_id' => '1',
            'name' => 'Mr.Brown',
            'designation' => 'Manager-Tesla',
            'email' => 'brown@gmail.com',
             'phone' => '00445545545',
             'workphone' => '00445545545',
             'work_address' => '45 R, Race course road, Nadimala',
             'notes' => "Son's friend's father"
             
            
        ));
          
           App\Contact::create(array(
            
               'user_id' => '1',
            'name' => 'Mrs.Purple',
            'designation' => 'CIO-Gilayath National Bank',
            'email' => 'purple@gmail.com',
             'phone' => '00445675667',
             'workphone' => '00445675667',
             'work_address' => '30/63 L Longdon place, colombo 07.',
             'notes' => "Random met contact"
             
            
        ));
          
          
          
    }
}
