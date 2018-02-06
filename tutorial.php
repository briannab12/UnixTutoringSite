<?php
	////////////////////// UPDATE ME //////////////////////
	$path = './';
	
	$page = 'tutorial';
	include $path.'assets/php/header.php';
?>	
<div id="container">
	<div class="wrapper" id="tutorial-page">
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<!-------------------- UPDATE ME --------------------->
				<h1 class="float-center">Tutorial Broad Section:</h1>
				<h2 class="float-center">Specific Section</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Directories are created using the command: mkdir directoryname
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL1 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-------------------- UPDATE ME --------------------->
				<h4>Type in the command: ls -l</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>
				
			</div>

			<!--TUTORIAL1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-------------------- UPDATE ME --------------------->			
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					A list of your current files and directories is listed. Now we are going to create a directory. 
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-------------------- UPDATE ME --------------------->
				<h4>Type in the command: mkdir mydir</h4>
				
				<input type="text" id="input2" name="input2" value =""/>
				<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>

			</div>

			<!--TUTORIAL2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage2" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input3" name="input3" value ="" />
				<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>
			</div>

			<!--TUTORIAL3 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage3" alt="Unix Screenshot" />
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL4 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL4 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input4" name="input4" value ="" />
				<input type="button"  class="orange" onclick = "tutorialFour()" value="Enter"/>
			</div>

			<!--TUTORIAL4 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage4" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL5 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL5 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input5" name="input5" value ="" />
				<input type="button"  class="orange" onclick = "tutorialFive()" value="Enter"/>
			</div>

			<!--TUTORIAL5 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">		
				
				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage5" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL6 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL6 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input6" name="input6" value ="" />
				<input type="button"  class="orange" onclick = "tutorialSix()" value="Enter"/>
			</div>

			<!--TUTORIAL6 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	
				
				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage6" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL7 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL7 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input7" name="input7" value ="" />
				<input type="button"  class="orange" onclick = "tutorialSeven()" value="Enter"/>
			</div>

			<!--TUTORIAL7 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">		

				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage7" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
	

			
			<!--TUTORIAL8 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL8 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input8" name="input8" value ="" />
				<input type="button"  class="orange" onclick = "tutorialSeven()" value="Enter"/>
			</div>

			<!--TUTORIAL8 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	

				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage8" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			

			<!--TUTORIAL9 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL9 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input9" name="input9" value ="" />
				<input type="button"  class="orange" onclick = "tutorialNine()" value="Enter"/>
			</div>

			<!--TUTORIAL9 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage9" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL10 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL10 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input10" name="input10" value ="" />
				<input type="button"  class="orange" onclick = "tutorialTen()" value="Enter"/>
			</div>

			<!--TUTORIAL10 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	

				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage10" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL11 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL11 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input11" name="input11" value ="" />
				<input type="button"  class="orange" onclick = "tutorialElevin()" value="Enter"/>
			</div>

			<!--TUTORIA11 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				
				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage11" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL12 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-------------------- UPDATE ME --------------------->
					Now list all your current files to see your directory. You have just created a directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL12 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-------------------- UPDATE ME --------------------->
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input12" name="input12" value ="" />
				<input type="button"  class="orange" onclick = "tutorialTwelve()" value="Enter"/>
			</div>

			<!--TUTORIA12 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				
				<!-------------------- UPDATE ME --------------------->
				<img src="assets/images/tutorial/unix-screenshot.png" id="tutorialImage12" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

<!-------------------- UPDATE ME --------------------->
<script src = "assets/js/tutorial/myJavaScript.js"> </script>
