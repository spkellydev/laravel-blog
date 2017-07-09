<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		# processs variable data or params
		# talk to the model
		# receive from the model
		# complie or process data from the model if needed
		# pass that data to the correct view

		return view('pages.welcome');

	}

	public function getAbout() {
		$first = 'Sean';
		$last = 'Kelly';

		$fullname = $first . " " . $last;
		$email = "spk.design";

		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}



}