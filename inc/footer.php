<style>
.footer-distributed{
	color: #292c2f;
	box-sizing: border-box;
	width: 1280px;
	text-align: left;
	font: bold 13px;
	padding: 20px 20px;
	margin-top: 5px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 400px;
}

/* The company logo */

.footer-distributed h4 {
	color:  #000000;
	font: normal 13px;
	margin: 10px;
}

	.footer-distributed ul {
		list-style: none;
	}

/* Footer links */

.footer-distributed .footer-links{
	color:  #000000;
	margin: 5px 0 10px;
	padding: 10px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.5;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 13px;
	font-weight: normal;
	margin: 8px;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 400px;
}

.footer-distributed .footer-center i{  /*font image*/
	background-color:  #33383b;
	color: #ffffff;
	font-size: 14px;
	width: 30px;
	height: 28px;
	border-radius: 50%;
	text-align: center;
	line-height: 25px;
	margin: 8px 8px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 13px;
	line-height: 25px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #000000;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:13px;
	line-height:25px;
}

.footer-distributed .footer-center p a{ /*email fonts*/
	color:  #5383d3;
	text-decoration: none;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 400px;
}

.footer-distributed .footer-company-about{
	line-height: 25px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 10px;
	text-align: justify;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #000000;
	font-size: 13px;
	font-weight: bold;
	
	margin-bottom: 10px;
}

.footer-distributed .footer-icons{
	margin-top: 15px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 30px;
	height: 30px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 14px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 10px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>

<footer class="footer-distributed">

			<div class="footer-left">
				<h4>BROWSE</h4>
				<ul class="footer-links">
					<li><a href="#">home</a></li>
					<li><a href="#">portfolio</a></li>		
					<li><a href="#">gallery</a></li>
				</ul>

				<p class="footer-company-name">Copyright &copy; 2019 Belle Florist</p>
			</div>

			<div class="footer-center">
				<h4>WE'D LOVE YOUR COMPANY</h4>
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Penampang Lama Street</span> Kota Kinabalu, Sabah</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+60 13 8817566</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:belleflorist@gmail.com">belleflorist@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<h4>FIND</h4>
					Sending your meassage of love with flowers. We pride ourselves on being the UK's most trusted name in flower delivery.We've been delighting customers since 1923, with a heartfelt passion for flowers. 
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fab fa-facebook-f"></a></i>
					<a href="#"><i class="fab fa-pinterest"></a></i>
					<a href="#"><i class="fab fa-instagram"></a></i>

				</div>

			</div>

		</footer>