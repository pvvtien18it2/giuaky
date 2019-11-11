<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds. *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            array('name' =>'TienPham' ,'email'=>'a@gmail.com','password'=>Hash::make('tien2000'), 'admin'=>1,'author'=>0,'editer'=>0),
            array('name' =>'NgocTram' ,'email'=>'b@gmail.com','password'=>Hash::make('tien2000'), 'editer'=>1,'author'=>0,'admin'=>0),
            array('name' =>'VuAn' ,'email'=>'c@gmail.com','password'=>Hash::make('tien2000'),'author'=>1,'admin'=>0,'editer'=>0),
            array('name' =>'VanDong' ,'email'=>'d@gmail.com','password'=>Hash::make('tien2000'), 'admin'=>1,'author'=>0,'editer'=>0),
            array('name' =>'DucCanh' ,'email'=>'e@gmail.com','password'=>Hash::make('tien2000'),'author'=>1,'admin'=>0,'editer'=>0),
            array('name' =>'NgocThuong' ,'email'=>'f@gmail.com','password'=>Hash::make('tien2000'), 'admin'=>1,'author'=>0,'editer'=>0),
            array('name' =>'VanChien' ,'email'=>'g@gmail.com','password'=>Hash::make('tien2000'),'author'=>1,'admin'=>0,'editer'=>0),
            array('name' =>'AnhKhoa' ,'email'=>'@hgmail.com','password'=>Hash::make('tien2000'), 'admin'=>1,'author'=>0,'editer'=>0),
            array('name' =>'KimNgan' ,'email'=>'@igmail.com','password'=>Hash::make('tien2000'), 'editer'=>1,'author'=>0,'admin'=>0),
            array('name' =>'AnhTriet' ,'email'=>'k@gmail.com','password'=>Hash::make('tien2000'), 'editer'=>1,'author'=>0,'admin'=>0),
            array('name' =>'XuanLong' ,'email'=>'l@gmail.com','password'=>Hash::make('tien2000'),'author'=>1,'admin'=>0,'editer'=>0),
            array('name' =>'TanLam' ,'email'=>'m@gmail.com','password'=>Hash::make('tien2000'),'author'=>1,'admin'=>0,'editer'=>0),
            ]);
    }
}
