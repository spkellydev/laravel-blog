<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		# processs variable data or params
		# talk to the model
		# receive from the model
		# complie or process data from the model if needed
		# pass that data to the correct view
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);

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