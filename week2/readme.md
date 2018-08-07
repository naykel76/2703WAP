	index.php->PostSeeder.php->Post.php 
	Post.php->PostSeeder.php->index.php


- index.php sets the $Posts array = `PostSeeder::seed()`. This function instantiates the new posts as objects and adds them to the $posts array. Each object contains the post data such as username, message, date ect.
$posts = [param=>data, param=>data, param=>data]. 

- PostSeeder.php `seed()` function passes the $posts array data as parameters to the Post.php constructor which in turn sets the values to the member variables. index.php accesses these parameters by looping through the post objects and accessing the appropriate data with the getFunctions(). `$post->getSomething()`


- The getter functions allow the data to be made publicly available in the index.php file by calling the `getXXX()` functions. 
- 


- the comments are returned in the Post object as an empty array
$posts = [PostObject, PostObject, PostObject]. 




Post Object ( 
	[username] => '', 
	[message] => '', 
	[comments] => Array ( ) 
) [1] => wp\

Post Object ( 
	[username] => sue_zipy 
	[message] => Lorem ipsum dolor sit amet! 
	[comments] => Array ( ) 
) [2] => wp\

Post Object ( 
[username] => joXyz 
[message] => Lorem ipsum dolor sit amet! 
[comments] => Array ( ) ) ) 




## Research
Why not just extend the PostSeeder class? 
	


