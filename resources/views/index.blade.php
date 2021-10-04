@extends('layouts.app')

@section('content')
	<div class="background-image grid grid-cols-1 m-auto">
		<div class="flex text-gray-100 pt-10">
			<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
				<h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
					Laravel/VueJS Frontend/Backend 
				</h1>
				<a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read More</a>
			</div>
		</div>
	</div>

	<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
		<div>
			<img src="https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg" width="700" alt="">
		</div>

		<div class="m-auto sm:m-auto text-left w-4/5 block">
			<h2 class="text-3xl font-extrabold text-gray-600">
				Using ReactJS & ReactNative
			</h2>
			<p class="py-8 text-gray-500 text-s">
				Note that the development build is not optimized. To create a production build, use yarn build.
			</p>

			<p class="font-extrabold text-gray-600 text-s pb-9">
				Content not from webpack is served from D:\Frameworks\React\ReactJS\myapp\public
			</p>

			<a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
				Find our more
			</a>
		</div>
	</div>

	<div class="text-center p-15 bg-black text-white">
		<h2 class="text-2xl pb-5 text-l">
			I'm an expert in....
		</h2>

		<span class="font-extrabold block text-4xl py-1">
			PHP
		</span>

		<span class="font-extrabold block text-4xl py-1">
			Python
		</span>

		<span class="font-extrabold block text-4xl py-1">
			JavaScript
		</span>

		<span class="font-extrabold block text-4xl py-1">
			Java
		</span>
	</div>

	<div class="text-center py-15">
		<span class="uppercase text-s text-gray-400">
			Blog
		</span>

		<h2 class="text-4xl font-bold py-10">Recent Posts</h2>
		<p class="m-auto w-4/5 text-gray-500">
			Project is running at http://192.168.85.2/
		</p>
	</div>

	<div class="sm:grid grid-cols-2 w-4/5 m-auto">
		<div class="flex bg-yellow-700 text-gray-100 pt-10">
			<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
				<span class="uppercase text-xs">
					PHP
				</span>

				<h3 class="text-xl font-bold py-10">
					Welcome to my website where you learn web development through Laravel/VueJS.
				</h3>

				<a href=""
				class="uppercase bg-transparent border-2 border-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
					Find Out More
				</a>
			</div>
		</div>
			<div>
				<img src="https://cdn.pixabay.com/photo/2017/08/06/14/30/laptop-2593016__340.jpg" width="700" alt="">
			</div>
	</div>
@endsection



