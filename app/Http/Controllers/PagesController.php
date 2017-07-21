<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;


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

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email', 
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->to('spkellydev@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your email was sent!!');

		return redirect('/');
	}



}