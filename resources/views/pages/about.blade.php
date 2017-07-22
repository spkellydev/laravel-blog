@extends('main')
@section('title', 'Contact')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>About Me</h1>
            <p class="lead">Hey there!</p>
            <p>I'm an aspiring full stack developer! Currently I work as an SEO in Asbury Park, NJ. My responsibilites include managing search engine optimization, digital reputations, and front end design.</p>
          </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
      </div> <!-- end of row -->
      <section class="row">
      	<header class="col-md-8"><h2>Some notes about me and this site:</h2></header>
      	<article class="col-md-8">
      		<header><h3>This site is not optimized!</h3></header>
      		<p class="lead">I just wanted to make a few things clear in case anyone decided to look over this site. It is not optimized, indexed in any search engines, or anywhere near what I would consider a finished product.</p>
      		<p>I spend most of my week optimizing sites for clients. Some of them are franchises with locations in multiple states. So it might seem like I would spend extra time on my own site to make it semantically perfect and built to rank in search engines. However, that is not the case. This entire project, thus far, has been to test my knowledge of PHP, basic Javascript, and learning best practices for SSHing into a server. This site is using the Bootstrap framework from Twitter -- nothing against Bootstrap, but I would never use it for a client or production-ready application. I am currently rebuilding the site with Bulma. I feel Bulma gives me the extra freedom I want to design my site.</p>
      		<p>My plan is to start learning the fundamentals of Vue.js and implement some interactive functionality on my site! I think Vue is a really neat Javascript library and I would really like to become a stronger front-end developer with that technology. It's an added bonus that it comes with Laravel, which is how I decided to build this site. If you continue reading this post, you may finds that I'm at odds with myself, but I assure you I have a plan!</p>
      		<p>In October of 2017, I am determined to enter a full-stack coding bootcamp adminsitered by Rutgers University. The focus of that bootcamp is the MERN stack. Yes, this site is using the LEMP stack, and the irony is not lost on me. I want to learn the MERN stack because I would love to become a professional developer and have the full might of Mongo, React, and Node behind my future applications. So, why did I decide to use the LEMP stack to build my website if I want to become a MERN developer?</p>
      		<p>Well. At work, I use Wordpress for nearly every client. My goal is to become proficient enough at PHP to help out with Wordpress developement at work, and take on some extra responsibilies. I have a Wordpress site of my own where I am learning to create a theme using Underscores. That site is based on the LAMP stack -- yes, everything is a little all over the place. With exception to the server though, most of my learning is universal. So the Wordpress develpment is the catalyst for the Laravel development. Currently, I'm not prepared to share the URL, but it is in the works!</p>
      		<footer>Hopefully that puts some things into perspective! Somehow there's never enough time. Onward with the LEMP stack!</footer>
      	</article>
      	<footer>Updated July 2017</footer>
      </section>
@endsection