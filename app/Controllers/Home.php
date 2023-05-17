<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page']='index';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/index');
        echo view('default/footer');
        // return view('welcome_message');
    }

    //company_profile
    public function company_profile()
    {
        $data['page']='company_profile';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/company_profile');
        echo view('default/footer');
    }

    //contactUs
    public function contactUs()
    {
        $data['page']='contactUs';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/contactUs');
        echo view('default/footer');
    }

    //enquiry
    public function enquiry()
    {
        $data['page']='enquiry';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/enquiry');
        echo view('default/footer');
    }

    //MT5Desktop
    public function MT5Desktop()
    {
        $data['page']='MT5Desktop';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/MT5Desktop');
        echo view('default/footer');
    }

    //MT5Mobile
    public function MT5Mobile()
    {
        $data['page']='MT5Mobile';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/MT5Mobile');
        echo view('default/footer');
    }

    //Account_Types
    public function Account_Types()
    {
        $data['page']='Account_Types';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/Account_Types');
        echo view('default/footer');
    }

    //depositWithdrawals
    public function depositWithdrawals()
    {
        $data['page']='depositWithdrawals';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/depositWithdrawals');
        echo view('default/footer');
    }

    //forex
    public function forex()
    {
        $data['page']='forex';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/forex');
        echo view('default/footer');
    }

    //indices
    public function indices()
    {
        $data['page']='indices';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/indices');
        echo view('default/footer');
    }

    //commodity
    public function commodity()
    {
        $data['page']='commodity';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/commodity');
        echo view('default/footer');
    }

    //stocks
    public function stocks()
    {
        $data['page']='stocks';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/stocks');
        echo view('default/footer');
    }


    //metals
    public function metals()
    {
        $data['page']='metals';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/metals');
        echo view('default/footer');
    }


    //exchangeFuture
    public function exchangeFuture()
    {
        $data['page']='exchangeFuture';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/exchangeFuture');
        echo view('default/footer');
    }

    //webTrader
    public function webTrader()
    {
        $data['page']='webTrader';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/webTrader');
        echo view('default/footer');
    }

    //economic_calender
    public function economic_calender()
    {
        $data['page']='economic_calender';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/economic_calender');
        echo view('default/footer');
    }

    //booklet
    // public function booklet()
    // {
    //     $data['page']='booklet';
    //     echo view('default/header',$data);
    //     echo view('default/navbar');
    //     echo view('pages/booklet');
    //     echo view('default/footer');
    // }

    public function enquiry_message()
    {
     $session = session();
     $email = \Config\Services::email();
     $from = $this->request->getVar('cust_email');
     $name = $this->request->getVar('name');
     $to = 'sales@mxbull.com';
     $phone = $this->request->getVar('phone');
     $city = $this->request->getVar('city');
     $state = $this->request->getVar('state');
     $country = $this->request->getVar('country');
     $comment =$this->request->getVar('comment');

     //send message
         $email->setFrom($from, $name);
         $email->setTo($to);
         $email->setSubject($city);
         $email->setMessage('<table style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"
         width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
            <tbody>
                <tr>
                    <td valign="top" align="center">
                        <table class="mobile-shell" width="650" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td class="td container" style="width: 650px; min-width: 650px; font-size: 0pt; line-height: 0pt; margin: 0px; font-weight: normal; padding: 55px 0px;">
                                        <div style="text-align: center;"><img src="https://mxbull.com/public/assets/img/logo/logo.png" style="margin-bottom: 20px;"></div>
                                        <table style="width: 650px; margin: 0px auto;" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-bottom: 10px;">
                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" >
                                                            <tbody>
                                                                <tr>
                                                                    <td class="tbrr p30-15" style="padding-left: 50px;    background-color: #402500;" >
                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align;margin-top: 50px;padding-bottom: 30px;">
                                                                            <tbody>
                                                                                <tr><td  style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 46px; padding-bottom: 25px; font-weight: bold;">Hi '.$name.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Email </b></td><td>:</td><td>'.$from.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Phone </b></td><td>:</td><td>'.$phone.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> City </b></td><td>:</td><td>'.$city.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> State </b></td><td>:</td><td>'.$state.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Country </b></td><td>:</td><td>'.$country.'</td></tr>
                                                                                <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Comment <b/></td><td>:</td><td>'.$comment.'</td></tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <br/><br/>
                                                            </tbody>
                                                            
                                                        </table>
                                                        <tr><td style="color: rgb(64 37 0); font-family: Muli, Arial, sans-serif; font-size: 18px; line-height: 30px; text-align: center; padding-bottom: 10px;">All Rights Reserved. © MX Bull International </td></tr>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>');
        //  print_r($email);
    
          if($email->send())
          {
            echo $action="success";
               session()->setFlashdata('message', 'Message Send Successfully!');
               session()->setFlashdata('alert-class', 'alert-success');
          }
          else
          {
             echo $action="failed";
              session()->setFlashdata('message', 'Message Not Send, Please Check Your Email Id...!!!');
              session()->setFlashdata('alert-class', 'alert-danger');
          }

          return $this->response->redirect(site_url("enquiry"));
    }


}
