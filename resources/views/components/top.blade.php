
<div id="header">
		<div id="logo">
			<h1>Top Header</h1>
		</div>
	        <div id="menu">
		   <ul>
			<li> <a href="#">Home</a></li>
			<li> <a href="#">Gallery</a></li>
			<li> <a href="#">About</a></li>
			<li> <a href="#">Contact</a></li>
		   </ul>
         </div>
<style>
body {
margin:0px;
}
#header
{
	width:100%;
	float:left;
	text-align:center;
	background-color:skyblue;
}
#logo
{
	width:30%;
	float:left;
}
#logo h1
{
	cursor:pointer;
	transition:1s;
	color:white;
	font-family:cambria;
}
#logo h1:hover
{
	color:black;
}

#menu
{
	float:left;
	width:70%;
}
#menu ul
{
	  margin-right: 10%;
	  padding: 0;
	  float:right;
	  text-align: center;
}
#menu ul li
{
cursor:pointer;
list-style-type:none;
display:inline-block;
padding:8px;
}

#menu ul li a
{
	font-family:cambria;
text-decoration:none;
color:white;
font-size:20px;
}
#menu ul li a:hover
{
color:black;
}
</style>