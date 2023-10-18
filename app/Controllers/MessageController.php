<?php
namespace App\Controllers;
use App\Controllers\BaseController;
class MessageController extends BaseController
{
	public function showSweetAlertMessages()
	{
		// Flash messages settings
		session()->setFlashdata("success", "This is success message");
		session()->setFlashdata("warning", "This is warning message");
		session()->setFlashdata("info", "This is information message");
		session()->setFlashdata("error", "This is error message");
		return view("sweetalert-notification");
	}
}