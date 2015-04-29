<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-scroll-header-panel/core-scroll-header-panel.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-toolbar/core-toolbar.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-icon-button/core-icon-button.html">
<link rel="import" href="<?php echo base_url(); ?>bower_components/core-tooltip/core-tooltip.html">
<title>National Logic Competition | Schematics 2015</title>
<style shim-shadowdom>
html, body {
	height: 100%;
	font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
	margin: 0;
	padding: 0;
}
core-scroll-header-panel {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: #fff;
	height: 100%;
}
	    /* background for toolbar when it is at its full size */
	    core-scroll-header-panel::shadow #headerBg {
 background-image: url(<?php echo base_url();
?>assets/images/bg9.jpg);
}

	    /* background for toolbar when it is condensed */
	    core-scroll-header-panel::shadow #condensedHeaderBg {
 background-color: #f4b400;
}
core-toolbar {
	color: white;
	fill: white;
	background-color: transparent;
}
a {
	text-decoration: none;
	color: #fff;
}
a.map {
	text-decoration: none;
	color: #666;
}
.title {
	-webkit-transform-origin: 0;
	transform-origin: 0;
	font-size: 40px;
}
p {
	line-height: 30px;
	margin: 0;
}
h3 {
	margin-top: 30px;
	margin-bottom: 0;
	color: #263238;
}
 @media only screen and (min-width: 200px) {
.content {
	padding: 10px;
}
}
 @media only screen and (min-width: 720px) {
.content {
	padding: 50px;
}
}
.tab1 {
	margin-left: 25px;
}
.tab1 p {
	color: #37474f;
}
.tab2 {
	margin-left: 50px;
	color: #546e7a;
	font-size: 14px;
}
.tab2 p {
	color: #607d8b;
	font-size: 14px;
}
.divider {
	margin-top: 30px;
	border-top: #CCC solid 1px;
}
.divider2 {
	margin-top: 30px;
	border-top: #CCC dotted 1px;
}
</style>
<style shim-shadowdom>
core-tooltip.fancy::shadow .core-tooltip {
 opacity: 0;
 -webkit-transition: all 300ms cubic-bezier(0, 1.92, .99, 1.07);
 transition: all 300ms cubic-bezier(0, 1.92, .99, 1.07);
 -webkit-transform: translate3d(0, -10px, 0);
 transform: translate3d(0, -10px, 0);
}
 core-tooltip.fancy:hover::shadow .core-tooltip, core-tooltip.fancy:focus::shadow .core-tooltip {
 opacity: 1;
 -webkit-transform: translate3d(0, 0, 0);
 transform: translate3d(0, 0, 0);
}
</style>
</head>
<body unresolved>
<core-scroll-header-panel condenses>
	<core-toolbar class="tall">
		<core-tooltip label="Kembali" class="fancy"> <a href="<?php echo base_url(); ?>">
			<core-icon-button icon="arrow-back"></core-icon-button>
			</a> </core-tooltip>
		<div flex></div>
		<core-icon-button icon="more-vert"></core-icon-button>
		<div class="bottom indent title">QUIZ NLC</div>
	</core-toolbar>
		<form action="grade.php" method="post" id="quiz">
			<ol>
				<li>
					<h3>Diketahui sebuah persamaan alfa numerik sebagai berikut (AA)<sup>B</sup> = ABBA </h3>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
						<label for="question-1-answers-A">A) 1 </label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
						<label for="question-1-answers-B">B) 2</label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
						<label for="question-1-answers-C">C) 3</label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
						<label for="question-1-answers-D">D) 4</label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" />
						<label for="question-1-answers-E">E) 5</label>
					</div>
				</li>
				<li>
					<h3>Sederet kartu remi dengan angka terbilang dari 8 hingga As (7 kartu) tersusun dari kiri kekanan dengan aturan seperti berikut:
						<ul>
							<li>Kartu As berada 2 kartu di sebelah kartu 9 (di antaranyaada 1 kartu) </li>
							<li>Kartu 8 berada di antara kartu King dan kartu 10 </li>
							<li>Kartu King berada 4 kartu di sebelah kartu As (di antaranya ada 3 kartu)</li>
							<li>Kartu Jack ada tepat di sebelah kanan kartu As </li>
							<li>Kartu Queen tepat berada di tengah </li>
							<li>Kartu Jack ada di kanan kartu 10 </li>
						</ul>
						Dari informasi diatas, maka dapat disimpulkan bahwa susunan kartu yang tepat adalah: </h3>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
						<label for="question-2-answers-A">A) A-J-9-Q-10-8-K </label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
						<label for="question-2-answers-B">B) A-J-9-Q-K-8-10 </label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
						<label for="question-2-answers-C">C) 10-8-K-Q-A-J-9 </label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
						<label for="question-2-answers-D">D) K-8-10-Q-A-J-9</label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-1-answers-E" value="E" />
						<label for="question-2-answers-E">E) 10-8-K-Q-9-A-J</label>
					</div>
				</li>
				<li>
					<h3>Berapakah A + B + C + D?</h3>
					<img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal3.svg" style="width:250px;">
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
						<label for="question-3-answers-A">A) 15</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
						<label for="question-3-answers-B">B) 16</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
						<label for="question-3-answers-C">C) 19</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
						<label for="question-3-answers-D">D) 20</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-E" value="E" />
						<label for="question-3-answers-E">E) 23</label>
					</div>
				</li>
				<li>
					<h3>Dua dadu sisi-sisinya dicat biru dan hitam. Dadu pertama terdiri dari 2 sisi warna biru dan 4 sisi warna hitam. 
						Ketika kedua dadu tersebut dilempar, peluang munculnya sisi dadu yang berwarna sama adalah  4/9 , 
						ada berapa banyakkah sisi dadu berwarna biru dan hitam pada kedua dadu tersebut?</h3>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
						<label for="question-4-answers-A">A) Biru : 6, Hitam : 6</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
						<label for="question-4-answers-B">B) Biru : 4, Hitam : 8</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
						<label for="question-4-answers-C">C) Biru : 8, Hitam : 4</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
						<label for="question-4-answers-D">D) Biru : 5, Hitam : 7</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-E" value="E" />
						<label for="question-4-answers-E">E) Biru : 5, Hitam : 7</label>
					</div>
				</li>
				<li>
					<h3>Satu hari Coreng sedang bermain listrik dengan teman sekamarnya yang bernama Fajar dari Jurusan Teknik Elektro. 
						Dia dan temannya membuat mainan tombol listrik yang berbentuk:</h3>
					<img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.1.svg" style="width:250px;">
					<h3>Peraturan permainan lampu ini yaitu jika suatu tombol ditekan maka tombol dengan nama yang sama akan berubah dari mati ke hidup atau hidup ke mati, 
						namun tombol yang ditekan tidak akan berubah.
						Jika Fajar memberi pertanyaan ke Coreng, mana dari ke lima kemungkinan di bawah yang tidak bisa dibentuk dari 2 kali menekan tombol? </h3>
					<div>
						<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
						<label style="line-heigth:50px" for="question-5-answers-A">A) <img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.a.svg" style="width:150px;"></label>
					</div>
					<div>
						<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
						<label for="question-5-answers-B">B) <img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.b.svg" style="width:150px;"></label>
					</div>
					<div>
						<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
						<label for="question-5-answers-C">C) <img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.c.svg" style="width:150px;"></label>
					</div>
					<div>
						<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
						<label for="question-5-answers-D">D) <img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.d.svg" style="width:150px;"></label>
					</div>
					<div>
						<input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
						<label for="question-5-answers-E">E) <img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal4.e.svg" style="width:150px;"></label>
					</div>
				</li>
				<li>
					<h3>3, 6, 11, 18, y, z, 59, 78. <br>
						Berapakah nilai z?</h3>
					<div>
						<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
						<label for="question-6-answers-A">A) 30</label>
					</div>
					<div>
						<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
						<label for="question-6-answers-B">B) 38</label>
					</div>
					<div>
						<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
						<label for="question-6-answers-C">C) 42</label>
					</div>
					<div>
						<input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
						<label for="question-6-answers-D">D) 51</label>
					</div>
					<div>
						<input type="radio" name="question-6-answers" id="question-6-answers-E" value="E" />
						<label for="question-6-answers-E">E) 58</label>
					</div>
				</li>
				<li>
					<h3>M, V, B, M, J, S, U, ? <br>
						Jawaban yang tepat untuk mengisi tanda tanya adalah… </h3>
					<div>
						<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
						<label for="question-7-answers-A">A) M</label>
					</div>
					<div>
						<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
						<label for="question-7-answers-B">B) K</label>
					</div>
					<div>
						<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
						<label for="question-7-answers-C">C) N</label>
					</div>
					<div>
						<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
						<label for="question-7-answers-D">D) T</label>
					</div>
					<div>
						<input type="radio" name="question-7-answers" id="question-7-answers-E" value="E" />
						<label for="question-7-answers-E">E) a, b, c, d salah</label>
					</div>
				</li>
				<li>
					<h3>Nalcy has twelve black socks and twelve white socks in her drawer.
						In complete darkness, and without looking, how many socks must she take from the drawer in order to be sure to get a pair that match? </h3>
					<div>
						<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
						<label for="question-8-answers-A">A) 2</label>
					</div>
					<div>
						<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
						<label for="question-8-answers-B">B) 3</label>
					</div>
					<div>
						<input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
						<label for="question-8-answers-C">C) 12</label>
					</div>
					<div>
						<input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
						<label for="question-8-answers-D">D) 13</label>
					</div>
					<div>
						<input type="radio" name="question-8-answers" id="question-8-answers-E" value="E" />
						<label for="question-8-answers-E">E) None of the above</label>
					</div>
				</li>
				<li>
					<h3>Setelah perampokan Kantor Pos setempat, lima tersangka sedang diwawancarai.Di bawah ini adalah ringkasan laporan mereka.<br>
						Brian mengatakan: Bukan Charles, Itu Alan<br>
						Derek berkata: Itu Charles, Bukan Alan <br>
						Charles mengatakan: Itu Brian, Bukan Eric <br>
						Alan mengatakan: Itu Eric, Bukan Brian <br>
						Eric mengatakan: Itu Derek, Itu Alan <br>
						Polisi tahu bahwa setiap dari mereka mengatakan kebenaran dalam salah satu pernyataan dan berbohong di lain. Dari informasi ini tentukan siapa yang melakukan kejahatan? </h3>
					<div>
						<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
						<label for="question-9-answers-A">A) Alan</label>
					</div>
					<div>
						<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
						<label for="question-9-answers-B">B) Brian</label>
					</div>
					<div>
						<input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
						<label for="question-9-answers-C">C) Charles</label>
					</div>
					<div>
						<input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
						<label for="question-9-answers-D">D) Derek</label>
					</div>
					<div>
						<input type="radio" name="question-9-answers" id="question-9-answers-E" value="E" />
						<label for="question-9-answers-E">E) Erik</label>
					</div>
				</li>
				<li>
					<h3>10. How many lines are there in this picture below</h3>
					<img src="<?php echo base_url(); ?>assets/quiz_nlc/img/soal10.svg" style="width:350px;">
					<div>
						<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
						<label for="question-10-answers-A">A) 10</label>
					</div>
					<div>
						<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
						<label for="question-10-answers-B">B) 13</label>
					</div>
					<div>
						<input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
						<label for="question-10-answers-C">C) 16</label>
					</div>
					<div>
						<input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
						<label for="question-10-answers-D">D) 17</label>
					</div>
					<div>
						<input type="radio" name="question-10-answers" id="question-10-answers-E" value="E" />
						<label for="question-10-answers-E">E) a, b, c, and d are false</label>
					</div>
				</li>
			</ol>
			<input type="submit" value="Submit Quiz" />
		</form>
</core-scroll-header-panel>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script> 
<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
</body>
</html>