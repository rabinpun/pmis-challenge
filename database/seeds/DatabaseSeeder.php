<?php
use PMIS\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //$this->call('UserSeeder');
        //$this->call('pro_regionsSeeder');
        //$this->call('pro_zonesSeeder');
        //$this->call('pro_trimestersTableSeeder');
        //$this->call('pro_monthsSeeder');
        $this->call('DistrictSeeder');z
}

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        User::create(array(
            'id' => '1',
            'slug' => 'root',
            'user_name' => 'root',
            'email' => 'info@dudbc.gov.np',
            'access' => 'Root Level',
            'created_by' => 1,
            'updated_by' => 1,
            'password' => bcrypt('admin123'),//Hash::make('admin123'),
        ));
    }

}

class DistrictSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pro_districts')->insert([
            ['id' => '', 'slug' => 'taplejung' ,'name' =>'ताप्लेजुंग','name_eng' =>'Taplejung','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'1','status' =>'',],
            ['id' => '', 'slug' => 'panchthar' ,'name' =>'पांचथर','name_eng' =>'Panchthar','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'1','status' =>'',],
            ['id' => '', 'slug' => 'ilam' ,'name' =>'इलाम','name_eng' =>'Ilam','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'1','status' =>'',],
            ['id' => '', 'slug' => 'jhapa' ,'name' =>'झापा','name_eng' =>'Jhapa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'1','status' =>'',],
            ['id' => '', 'slug' => 'morang' ,'name' =>'मोरङ्','name_eng' =>'Morang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'sunsari' ,'name' =>'सुनसरी','name_eng' =>'Sunsari','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'dhankuta' ,'name' =>'धनकुटा','name_eng' =>'Dhankuta','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'terhathum' ,'name' =>'तेर्हथुम','name_eng' =>'Terhathum','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'sankhuwasabha' ,'name' =>'संखुवासभा','name_eng' =>'Sankhuwasabha','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'bhojpur' ,'name' =>'भोजपुर','name_eng' =>'Bhojpur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'2','status' =>'',],
            ['id' => '', 'slug' => 'solukhumbu' ,'name' =>'सोलुखुम्बु','name_eng' =>'Solukhumbu','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'okhaldhunga' ,'name' =>'ओखलढुंगा','name_eng' =>'Okhaldhunga','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'khotang' ,'name' =>'खोटांग','name_eng' =>'Khotang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'udayapur' ,'name' =>'उदयपुर','name_eng' =>'Udayapur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'saptari' ,'name' =>'सप्तरी','name_eng' =>'Saptari','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'siraha' ,'name' =>'सिराहा','name_eng' =>'Siraha','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'3','status' =>'',],
            ['id' => '', 'slug' => 'dhanusa' ,'name' =>'धनुसा','name_eng' =>'Dhanusa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'mahottari' ,'name' =>'महोत्तरी','name_eng' =>'Mahottari','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'sarlahi' ,'name' =>'सर्लाही','name_eng' =>'Sarlahi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'sindhuli' ,'name' =>'सिन्धुली','name_eng' =>'Sindhuli','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'ramechhap' ,'name' =>'रामेछाप','name_eng' =>'Ramechhap','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'dolakha' ,'name' =>'दोलखा','name_eng' =>'Dolakha','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'4','status' =>'',],
            ['id' => '', 'slug' => 'sindhupalchok' ,'name' =>'सिन्धुपाल्चोक','name_eng' =>'Sindhupalchok','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'kavre' ,'name' =>'काभ्रे','name_eng' =>'Kavre','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'lalitpur' ,'name' =>'ललितपुर','name_eng' =>'Lalitpur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'bhaktapur' ,'name' =>'भक्तपुर','name_eng' =>'Bhaktapur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'kathmandu' ,'name' =>'काठमाडौँ','name_eng' =>'Kathmandu','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'nuwakot' ,'name' =>'नुवाकोट','name_eng' =>'Nuwakot','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'rasuwa' ,'name' =>'रसुवा','name_eng' =>'Rasuwa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'dhading' ,'name' =>'धादिङ','name_eng' =>'Dhading','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'5','status' =>'',],
            ['id' => '', 'slug' => 'makwanpur' ,'name' =>'मकवानपुर','name_eng' =>'Makwanpur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'6','status' =>'',],
            ['id' => '', 'slug' => 'rautahat' ,'name' =>'रौतहट','name_eng' =>'Rautahat','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'6','status' =>'',],
            ['id' => '', 'slug' => 'bara' ,'name' =>'बारा','name_eng' =>'Bara','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'6','status' =>'',],
            ['id' => '', 'slug' => 'parsa' ,'name' =>'पर्सा','name_eng' =>'Parsa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'6','status' =>'',],
            ['id' => '', 'slug' => 'chitawan' ,'name' =>'चितवन','name_eng' =>'Chitawan','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'6','status' =>'',],
            ['id' => '', 'slug' => 'gorkha' ,'name' =>'गोर्खा','name_eng' =>'Gorkha','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'lamjung' ,'name' =>'लमजुङ','name_eng' =>'Lamjung','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'tanahu' ,'name' =>'तनहुँ','name_eng' =>'Tanahu','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'syangja' ,'name' =>'स्याङजा','name_eng' =>'Syangja','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'kaski' ,'name' =>'कास्की','name_eng' =>'Kaski','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'manang' ,'name' =>'मनाङ','name_eng' =>'Manang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'7','status' =>'',],
            ['id' => '', 'slug' => 'mustang' ,'name' =>'मुस्ताङ','name_eng' =>'Mustang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'8','status' =>'',],
            ['id' => '', 'slug' => 'myagdi' ,'name' =>'म्याग्दी','name_eng' =>'Myagdi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'8','status' =>'',],
            ['id' => '', 'slug' => 'parbat' ,'name' =>'पर्वत','name_eng' =>'Parbat','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'8','status' =>'',],
            ['id' => '', 'slug' => 'baglung' ,'name' =>'बाग्लुङ','name_eng' =>'Baglung','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'8','status' =>'',],
            ['id' => '', 'slug' => 'gulmi' ,'name' =>'गुल्मी','name_eng' =>'Gulmi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'palpa' ,'name' =>'पाल्पा','name_eng' =>'Palpa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'nawalparasi' ,'name' =>'नवलपरासी','name_eng' =>'Nawalparasi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'rupandehi' ,'name' =>'रुपन्देही','name_eng' =>'Rupandehi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'kapilbastu' ,'name' =>'कपिलबस्तु','name_eng' =>'Kapilbastu','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'arghakhanchi' ,'name' =>'अर्घाखाँची','name_eng' =>'Arghakhanchi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'9','status' =>'',],
            ['id' => '', 'slug' => 'pyuthan' ,'name' =>'प्युठान','name_eng' =>'Pyuthan','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'10','status' =>'',],
            ['id' => '', 'slug' => 'rolpa' ,'name' =>'रोल्पा','name_eng' =>'Rolpa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'10','status' =>'',],
            ['id' => '', 'slug' => 'rukum' ,'name' =>'रुकुम','name_eng' =>'Rukum','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'10','status' =>'',],
            ['id' => '', 'slug' => 'salyan' ,'name' =>'सल्यान','name_eng' =>'Salyan','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'10','status' =>'',],
            ['id' => '', 'slug' => 'dang' ,'name' =>'दाङ','name_eng' =>'Dang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'10','status' =>'',],
            ['id' => '', 'slug' => 'banke' ,'name' =>'बाँके','name_eng' =>'Banke','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'11','status' =>'',],
            ['id' => '', 'slug' => 'bardiya' ,'name' =>'बर्दिया','name_eng' =>'Bardiya','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'11','status' =>'',],
            ['id' => '', 'slug' => 'surkhet' ,'name' =>'सुर्खेत','name_eng' =>'Surkhet','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'11','status' =>'',],
            ['id' => '', 'slug' => 'dailekh' ,'name' =>'दैलेख','name_eng' =>'Dailekh','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'11','status' =>'',],
            ['id' => '', 'slug' => 'jajarkot' ,'name' =>'जाजरकोट','name_eng' =>'Jajarkot','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'11','status' =>'',],
            ['id' => '', 'slug' => 'dolpa' ,'name' =>'डोल्पा','name_eng' =>'Dolpa','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'12','status' =>'',],
            ['id' => '', 'slug' => 'jumla' ,'name' =>'जुम्ला','name_eng' =>'Jumla','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'12','status' =>'',],
            ['id' => '', 'slug' => 'kalikot' ,'name' =>'कालिकोट','name_eng' =>'Kalikot','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'12','status' =>'',],
            ['id' => '', 'slug' => 'mugu' ,'name' =>'मुगु','name_eng' =>'Mugu','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'12','status' =>'',],
            ['id' => '', 'slug' => 'humla' ,'name' =>'हुम्ला','name_eng' =>'Humla','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'12','status' =>'',],
            ['id' => '', 'slug' => 'bajura' ,'name' =>'बाजुरा','name_eng' =>'Bajura','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'13','status' =>'',],
            ['id' => '', 'slug' => 'bajhang' ,'name' =>'बझाङ','name_eng' =>'Bajhang','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'13','status' =>'',],
            ['id' => '', 'slug' => 'achham' ,'name' =>'अछाम','name_eng' =>'Achham','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'13','status' =>'',],
            ['id' => '', 'slug' => 'doti' ,'name' =>'डोटी','name_eng' =>'Doti','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'13','status' =>'',],
            ['id' => '', 'slug' => 'kailali' ,'name' =>'कैलाली','name_eng' =>'Kailali','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'13','status' =>'',],
            ['id' => '', 'slug' => 'kanchanpur' ,'name' =>'कन्चनपुर','name_eng' =>'Kanchanpur','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'14','status' =>'',],
            ['id' => '', 'slug' => 'dadeldhura' ,'name' =>'डडेल्धुरा','name_eng' =>'Dadeldhura','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'14','status' =>'',],
            ['id' => '', 'slug' => 'baitadi' ,'name' =>'बैतडी','name_eng' =>'Baitadi','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'14','status' =>'',],
            ['id' => '', 'slug' => 'darchaula' ,'name' =>'दार्चुला','name_eng' =>'Darchaula','description' => '', 'description_eng'=>'', 'image' => '', 'coordinates' => '','zone_id'=>'14','status' =>'',],
        ]);
    }

}