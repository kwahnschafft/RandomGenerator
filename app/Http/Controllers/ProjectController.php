<?php namespace App\Http\Controllers;

use Request;

class ProjectController extends Controller {

	public function getIndex() {
		return view('index');
	}
	
	public function getPeople() {
		return view('peopleForm');
	}
	public function postPeople() {
		$numberP = Request::input('numberP');
		$birthday = Request::input('birthday');
		$profile = Request::input('profile');
		$names = $this->getNames($numberP);
		$birthdays = [];
		$profiles = [];
		if($birthday) {
			$birthdays = $this->getBirthday($numberP);
		}
		if($profile) {
			$profiles = $this->getProfile($numberP);
		}
		if($numberP <= 10 && $numberP != 0 && $numberP != ''&& ctype_digit("".$numberP)) {
			return view('resultsPeople')->with('firstNames', $names)->with('number', $numberP)->with('birthdays',$birthdays)->with('profiles',$profiles);
		}
		else {
			return redirect('people');
		}
	}
	public function getText($error = '') {
		return view('textForm')->with('error', $error);
	}
	
	
	public function postText() {
		$numberT = Request::input('numberT');
		$paragraphs = $this->getParagraphs($numberT);
		if($numberT <= 10 && $numberT != 0 && $numberT != '' && ctype_digit("".$numberT)) {
			return view('resultsText')->with('paragraphs',$paragraphs)->with('number',$numberT);
		}
		else {
			return redirect('text');
		}
	}
	
	/*************************************
	 *This is really bad! Separate this in
	 *the future into it's own class.
	**************************************/
	
	public function getParagraphs($numberT) {
		$paragraphs = ["Today you are you! That is truer than true! There is no one alive who is you-er than you!",
			       "The more that you read, the more things you will know. The more that you learn, the more places you'll go.",
			       "You have brains in your head. You have feet in your shoes. You can steer yourself in any direction you choose. You're on your own, and you know what you know. And you are the guy who'll decide where to go.",
				"Think left and think right and think low and think high. Oh, the thinks you can think up if only you try!",
				"I meant what I said and I said what I meant.",
				"A person's a person, no matter how small.",
				"One fish two fish red fish blue fish.",
				"Why fit in when you were born to stand out?",
				"Unless someone like you cares a whole awful lot, nothing is going to get better, it's not.",
				"If you never did you should, these things are fun and fun is good.",
				"When beetles fight these battles in a bottle with their paddles and the bottle's on a pooodle and the poodle's eating noodles.",
				"There's no limit to how much you'll know depending on how far beyond zebra you know.",
				"From there to here, from here to there, funny things are everywhere!",
				"Four empty pants and no one inside them.",
				"You are you. Now isn't that pleasant.",
				"Who sews whose socks, Sue sews Sue's socks.",
				"Be who you are and say what you feel because those who mind don't matter and those who matter don't mind."];
		$max = sizeof($paragraphs) - 1;
		$paragraph_list = array();
		for($i = 0; $i < $numberT; $i++) {
			array_push($paragraph_list, $paragraphs[rand(0, $max)]);
		}
		return $paragraph_list;
	}
	
	public function getNames($numberP) {
		$firstNames = ["Mickey Mouse", "Minney Mouse","Donald Duck","Daffy Duck","Roger Rabbit","Troy Bolton","Sharpay Evans","Bob the Builder", "SpongeBob Squarepants", "Patrick Star", "Bugs Bunny", "Charlie Brown", "Scooby-Doo", "Tweety Bird", "Winnie the Pooh", "Spider-Man", "Superman", "Batman"];
		$max = sizeof($firstNames) -1;
		$name_list = array();
		for($i = 0; $i < $numberP; $i++) {
			array_push($name_list, $firstNames[rand(0,$max)]);
		}
		return $name_list;
	}
	
	public function getBirthday($numberP) {
		$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
		$max = sizeof($months) - 1;
		$birthday_list = array();
		$day = "";
		for($i = 0; $i < $numberP; $i++) {
			$year = rand(1900,2015);
			$month = $months[rand(0,$max)];
			if($month == "January" || $month == "March" || $month == "May" || $month == "July" || $month == "August" || $month == "October" || $month == "December") {
				$day = rand(1,31);	
			}
			else if($month == "February") {
				$day = rand(1,28);
			}
			else {
				$day = rand(1,30);
			}
			$substring = "" . $month . " " . $day . ", " . $year;
			array_push($birthday_list, $substring);
		}
		return $birthday_list;
	}
	
	public function getProfile($numberP) {
		$profiles = ["Hi! My favorite ice cream is mint chocolate chip and my favorite place to go in the whole wide world is Atlantis (not the one in the Bahamas - the one under water!)",
			       "Hello there! I'm 5 years old and I love to tell jokes. Want to hear one? What do you call a fish without an eye? Answer: Fsh.",
			       "I like to write poems in my free time because I think it's fun. Here is my best one yet: Roses are red, violets are blue, If you give me a good grade, I'll give you my shoe!",
				"Hi there! I'm a very exciting person. Just ask my best friend! He loves to eat honey and wears a  red t-shirt a lot. Can you guess who he is?",
				"My favorite activity is to tell jokes. Here is my favorite: Why do fish live in salt water? Answer: Because pepper makes them sneeze!",
				"I love movies and eating cheese. My favorite book is over the moon, which I like to read when I take nap time naps",
				"Hi. I love puppies. Also I like to complain a lot because I'm an annoying person. My favorite thing to do is sing songs, like Ring Around the Rosie!",
				"Want to play hide and seek? That's my favorite game! I also like monopoly even though that goes on FOREVER!",
				"I like to play with Legos and play mobile. I also like to make sand castles when I go to the beach.",
				"I love to tell riddles! Here's a riddle - What is as light as a feather but even the world's strongest man can't hold it...His breath!"];
		$max = sizeof($profiles) - 1;
		$profile_list = array();
		for($i = 0; $i < $numberP; $i++) {
			array_push($profile_list, $profiles[rand(0, $max)]);
		}
		return $profile_list;
	}	
}