<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
      return view ('gallery');
    }
    public function our_president()
    {
      return view ('our_president');
    }
    public function obc_bjp_morcha()
    {
      return view ('obc_bjp_morcha');
    }
    public function national_team()
    {
      return view ('national_team');
    }
    public function national_socialmediamember()
    {
      return view ('national_socialmediamember');
    }
    public function obc_ministers()
    {
      return view ('obc_ministers');
    }
    public function History_development()
    {
      return view ('History_development');
    }
}
