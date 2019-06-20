<!DOCTYPE html>
<html>
<head>
    <title>@yield("title","laravel")</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <style >
    	.is-complete{
    		text-decoration: line-through;
    	}
    </style>
</head>
<body>
<h1>@yield("content")</h1>

<a href="/">Home</a>
<a href="/contact">Contact us</a>
<a href="/about">About us</a>
</body>
</html>