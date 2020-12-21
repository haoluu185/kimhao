<style> 
* {margin: 0;padding: 0}
		input {outline: none;}
		button {outline: none;}
		a {color: #000}
		a:hover {color: #000}
		ul {margin: 0;padding: 0}
		.col-md-2 {padding: 0;margin: 0}
		.row {padding: 0;margin: 0}
		nav{background: #fabe12;}
		nav li:hover a {text-decoration: none;font-size: 14px;}
		nav ul{display: flex;}
		nav> ul li{list-style: none;}
		nav > ul li a {
			font-family: courier new;
			font-size: 20px;
		    display: block;
		    padding: 0 20px;
		    line-height: 60px;
		    color: #000;
		    text-decoration: none;
		    font-weight: bolder;}
		/*Ẩn các menu con cấp 1,2,3*/
		nav li ul{
		    display: none;
		    min-width: 140px;
		    position: absolute;}
		nav li>ul li{
		    width: 100%;
		    border: none;

		   
		    background: #fff;
		    text-align: left;
		}
		nav li > ul li {height: 40px;}
		nav li>ul li a {color: #000;font-size: 14px;font-weight: bold;line-height: 40px;}
		nav li > ul li:hover > a {color: #C41010;}
		/*khi hover thì hiện menu con*/
		nav  li:hover > ul{ display:  block;}
		/*Hiển thị menu con cấp 2,3,4 bên cạnh phải*/
		nav > ul li > ul li >ul{
		    margin-left: 143px;
		    margin-top: -40px;
		    min-width: 170px;}
		.fa .fa-chevron-down {font-size: 100px;}
		.fa {font-size: 7px;}
		 h2 {
		 	font-family: courier new;
		 	color: #ffffff;
		 	margin-top:0px;
		 	margin-bottom: 20px;
		 	background-color: black;
    		font-size: 50px;
    		padding-top: 20px;
    		padding-bottom: 20px;
    		font-family: courier new;
    		font-weight: bold;
		 }
		h2:hover {color: #fabe12}
		a h2:hover {text-decoration: none;}
		a:hover {text-decoration: none;}
		.thumbnail img {max-width: 100%;border-radius: 20px;}
		.thumbnail {border: none;}
		.thumbnail a {font-weight: bold;}
		.thumbnail a:hover {color: red}
		button {background: #fff;border: none;}
		button:click {border: none;}
		.container-fluid > .navbar-collapse {
		    margin-right: 0;
		    margin-left: 0;}
		.navbar-collapse {padding: 0}
		.glyphicon {font-size: 20px;}
		.col-md-3 {position: static;}

	
		</style>