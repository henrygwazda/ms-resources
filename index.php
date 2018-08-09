<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes">
	
<title>AACR Posters</title>
	
<link rel="apple-touch-icon" sizes="72x72" href="form-icons/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="form-icons/apple-icon-114x114.png" />
	
	<script src="https://d3js.org/d3.v4.min.js"></script>
	
<style>

	@import url("https://fonts.googleapis.com/css?family=Ubuntu:300,400,500");

	body {
		position: absolute;
		font-family: 'Ubuntu', Arial, sans-serif;
		font-weight: 300;
		background-color: #ffffff;
		width: 100%;
		height: 100%;
		margin:0 auto;
		padding: 0;
		overflow: hidden;
		
		/*height: 1024px;
		width: 768px;
		border: 1px solid #dadada;*/
	} 
	
	#bacteria {
		position: absolute;
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		top: 0;
		left: 0;
		overflow: hidden;
	}
	
	#main {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		min-width: 768px;
		max-width: 1536px;
		min-height: 1024px;
		max-height: 2048px;
		background-color: #ffffff;
	}
	
	#formHeader {
		text-align: center;
	}
	
	#formHeader h1 {
		font-weight: 300;
		font-size: 50px;
	}
	
	#segments {
		display: flex;
		padding: 0 50px;
	}
	
	.segment {
		text-align: center;
		width: 34%;
		transition: opacity 0.25s;
	}
	
	.segment img {
		width: 150px;
	}
	
	.segment h2 {
		font-weight: 500;
		font-size: 22px;
		margin-top: -5px;
	}
	
	#resourceForm {
		margin: 20px 50px 50px;
		border-top: 1px solid #dadada;
		padding-top: 40px;
		position: absolute;
		top: 30%;
		width: 90%;
		height: 61%;
	}
	
	.resources {
		position: absolute;
		width:100%;
		transition: opacity 0.25s;
	}
	
	.resourceEntry {
		display: table;
		margin-bottom: 18px;
		width: 100%;
	}
	
	.resourceCheck {
		display: inline-block;
		width: 25px;
		height: 25px;
		vertical-align: top;
		margin: 0 15px 0 0;
	}
	
	.resourceCheckAll {
		display: inline-block;
		width: 25px;
		height: 25px;
		vertical-align: top;
		margin: 0 15px 0 0;
	}
	
	.resourceTitle {
		display: inline-block;
		vertical-align: top;
		font-size: 19px;
		margin: 0;
		max-width: 90%;
		line-height: 26px;
	}
	
	.resourceTitle sup {
		line-height: 1px;
		font-size: 11px;
	}
	
	#formFooter {
		position: absolute;
		bottom: 0px;
		text-align: center;
		width: 100%;
	}
	
	#formNextPage {
		border: 1px solid #dadada;
		font-size: 24px;
		padding: 11px 25px;
		font-weight: 300;
		border-radius: 4px;
		background-color: rgba(191,214,240,0.2);
	}
	
	#formContact {
		padding: 0 7%;
		width: 85%;
	}
	
	.form-field {
		font-size: 24px;
		margin-bottom: 40px;
	}
	
	.form-field input {
		height: 26px;
		font-size: 24px;
		margin-left: 10px;
		border: 1px solid #dadada;
	}
	
	.form-field select {
		height: 26px;
		margin-left: 10px;
		border: 1px solid #dadada;
	}
	
	.form-check {
		margin-top: 50px;
	}
	
	.form-check input {
		width: 25px;
		height: 25px;
	}
	
	.form-check label {
		font-size: 22px;
		margin-top: -30px;
		margin-left: 43px;
		padding: 0;
		display: inline-block;
		line-height: 30px;
	}
	
	#formSubmit {
		margin: 0 auto;
		border: 1px solid #dadada;
		font-size: 24px;
		padding: 11px 25px;
		font-weight: 300;
		border-radius: 4px;
		background-color: rgba(191,214,240,0.2);
	}
	
	

	#container {
		width: 100%;
		height: 100%;
	}

	#testCanvas {

	}

	#swarm {
		width: 90%;
		max-width: 1400px;
		height: 70%;
		max-height: 1400px;
		position: absolute;
			top: 11.5%;
			right: 5%;
		background: #000;
	}

	

	#formWindow {
		z-index: 3;
		width: 70%;
		height: 50%;
		padding: 5%;
		position: absolute;
			top: 10%;
			right: 10%;
			left: 10%;
		background-color: rgba(255, 255, 255, 0.85);
		-webkit-box-shadow: 3px 6px 50px 2px rgba(0,0,0,0.15);
		-moz-box-shadow: 3px 6px 50px 2px rgba(0,0,0,0.15);
		box-shadow: 3px 6px 50px 2px rgba(0,0,0,0.15);
		border-radius: 5px;
	}

	#touchBox {
		width: 100%;
		height: 100%;
		z-index: 3;
		position: absolute;
	}

	#wakeText {
		width: 80%;
		position: absolute;
			top: 80%;
			right: 10%;
			left: 10%;
	}

	#wakeTextTop {
		width: 90%;
		position: absolute;
			top: 6%;
			right: 5%;
			left: 5%;
	}

	#wakeText h1 {
		text-align: center;
		text-transform: uppercase;
		font-weight: 300;
		font-size: 2.25em;
		line-height: 1.5em;
		color: #f1f1f1;
		letter-spacing: 0.05em;
	}

	#wakeTextTop h1 {
		text-align: center;
		text-transform: uppercase;
		font-weight: 300;
		font-size: 2.75em;
		line-height: 1.5em;
		color: #f6f6f6;
		letter-spacing: 0.05em;
	}

	#thanks {
		opacity: 0;
		display: block;
		width: 100%;
		height: 100%;
		position: absolute;
			top: 0;
			left: 0;
		transition: opacity 0.5s linear;
	}

	#thanks h1 {
		font-weight: 300;
		text-align: center;
		font-size: 60px;
		color: #bf8688 !important;
		margin-top: 32%;
	}

	#thanks p {
		text-align: center;
		margin: 10px 0 40px 0;
		font-size: 27px;
		color: #666666 !important;
	}

	/* Fade-In Effect */
   .visible {
	   visibility: visible;
	   opacity: 1;
	   transition: opacity 30s linear;
   }   

	.visibleForm {
	   visibility: visible;
	   opacity: 1;
	   transition: opacity 0.25s linear;
		z-index: 3;
   }
   /* Fade-Out Effect */
   .hidden {
	   visibility: hidden;
	   opacity: 0;
	   transition: visibility 10s 0.5s, opacity 0.5s linear;
   }  

	.hiddenForm {
	   visibility: hidden;
	   opacity: 0;
	   transition: visibility 0s 10s, opacity 10s linear;
   } 

	#pardot-form {
		color:#333 !important;
		font-family: 'Ubuntu', Arial, sans-serif !important;
		font-size: 1.3em !important;
		font-weight: 300 !important;
		position: absolute;
			top: 8%;
			left: 7.5%;
		display: block;
		width: 84%;
		height: 84%;
		opacity: 1;
		transition: opacity 0.5s linear;
	}
	
	.formHead {
		text-align: center;
		margin: 10px 0 40px 0;
		font-size: 27px;
		color: #bf8688 !important;
	}
	
	.form-field {
		
	}
	
	.req {
		color: #e29c99;
		font-size: 18px;
		margin-left: 2px;
	}
	
	.form label {
		display: inline-block;
		font-size: 20px !important;
		color: #666666 !important;
		width: 111px;
		text-align: right;
	}
	
	.form-check {
		
	}
	
	form.form p {
		color: #666666;
	}
	
	form.form p label {
		font-weight: 300 !important;
	}
	
	form.form p.required label, form.form span.required label {
		padding-right: 15px !important;
		padding-bottom: 20px !important;
	}
	
	p.form-field.first_name.pd-text.required {
		margin-top: 30px !important;
	}
	
	form.form input {
		padding: 8px 8px 6px 13px;
		border: 1px solid rgba(226, 156, 154, 0.45);
		margin-bottom: 5px;
	}
	
	form.form input:focus {
		outline-color: rgba(226, 156, 154, 1) !important;
		border: 1px solid rgba(226, 156, 154, 0.45);
	}
	
	form.form input.text {
		width: 78% !important;
		font-size: 18px;
		margin-left: 2px !important;
		border: 1px solid rgba(226, 156, 154, 0.45);
		color: #666666;
	}
	
	form.form select {
		border: 1px solid rgba(226, 156, 154, 0.45);
		padding: 8px 8px 6px 13px !important;
		font-size: 18px;
		margin-left: 2px !important;
		color: #666666;
		background: #fff;
		-webkit-appearance: textfield;
	}
	
	form.form select:focus {
		outline-color: rgba(226, 156, 154, 1) !important;
		background: #fff;
		
	}
	
	form.form p label.inline {
		font-size: 0.9em !important;
		font-weight: 300 !important;
		line-height: 1.2em !important;
		color: #666666 !important;
		width: 550px;
		text-align: left;
		margin: -23px 0 0 119px;
	}
	
	#aacr18-checkbox {
		display: inline-block;
		float: left;
		margin: 15px 0px 0px 83px;
		width: 25px;
		height: 25px;
		-webkit-appearance: none;
		background: #ffffff;
		border: 1px solid #666666;
	}
		
	#aacr18-checkbox:checked {
		background: rgba(226, 156, 154, 0.35);
		outline: none !important;
		border: 1px solid #e29c99;
	}
		
	#aacr18-checkbox:focus {
		outline: none !important;
	}
	
	#aacr18-checkbox:after {
		content: "";
		display: none;
		position: relative;
			left: -7px;
			top: -8px;
		width: 8px;
		height: 13px;
		border: solid #e29c99;
		border-width: 0 5px 5px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}	
		
	#aacr18-checkbox:checked:after {
		display: block;
	}
		
	form.form p.submit {
		margin: 60px auto !important;
		padding: 0 !important;
		text-align: center;
	}
	
	form.form p.submit input {
		padding: 15px 25px !important;
		border-radius: 5px !important;
		border: none;
		font-size: 1.25em !important;
		font-weight: 300 !important;
		color: #f1f1f1 !important;
		text-transform: uppercase !important;
		letter-spacing: 0.15em !important;
		background-color: rgb(226, 156, 154) !important;
		-webkit-box-shadow: 2px 0px 49px 0px rgba(0,0,0,0.15) !important;
		-moz-box-shadow: 2px 0px 49px 0px rgba(0,0,0,0.15) !important;
		box-shadow: 2px 0px 49px 0px rgba(0,0,0,0.15) !important;
		-webkit-appearance: none;
	}
	
</style> 	

	
</head>

<body>
	<!--
	To reuse form I need to update all the input ids, supply Kerri with new ids for the form and inputs + the new url. Kerri will set it up and send me back the go.pardot link for the form action tag. I'll need to update the fields and the validator if they want different input fields. The checkbox should return true if checked. The country list should not be messed with, as it maps to Pardot data. All required fields are validated by the js function. 
	-->
	
	<div id="bacteria" style="display:none"></div>
	<div id="main">
		<div id="formHeader"><h1>Select Resources</h1></div>
		<div id="segments">
			<div class="segment" id="endosafe" onclick="toggleForm(this);">
				<img src="img/icons-e.jpg">
				<h2>Endotoxin Testing</h2>
			</div>
			<div class="segment" id="celsis" onclick="toggleForm(this);">
				<img src="img/icons-c.jpg">
				<h2>Rapid Microbial Detection</h2>
			</div>
			<div class="segment" id="accugenix" onclick="toggleForm(this);">
				<img src="img/icons-a.jpg">
				<h2>Microbial Identification</h2>
			</div>
		</div>
		<form accept-charset="UTF-8" action="js/email-resources.php" method="post" id="resourceForm">
			<div class="resources" id="resourcesE" style="opacity:0">
				<div class="resourceEntry">
					<input type="checkbox" class="resourceCheckAll" value="endosafe" onclick="checkAll(this)">
					<p class="resourceTitle"><strong>Select all</strong></p>
				</div>
			</div>
			<div class="resources" id="resourcesC" style="opacity:0">
				<div class="resourceEntry">
					<input type="checkbox" class="resourceCheckAll" value="celsis" onclick="checkAll(this)">
					<p class="resourceTitle"><strong>Select all</strong></p>
				</div>
			</div>
			<div class="resources" id="resourcesA" style="opacity:0">
				<div class="resourceEntry">
					<input type="checkbox" class="resourceCheckAll" value="accugenix" onclick="checkAll(this)">
					<p class="resourceTitle"><strong>Select all</strong></p>
				</div>
			</div>
			
			<div class="resources" id="formContact" style="opacity:0">
				
				<p class="form-field">
					<label class="field-label">First Name:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="ms-resources-first" id="ms-resources-first" value="" class="text" size="30" maxlength="40" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="words" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Last Name:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="ms-resources-last" id="ms-resources-last" value="" class="text" size="30" maxlength="80" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="words" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Email:<span class="req"><sup>*</sup></span></label>
					<input type="email" name="ms-resources-email" id="ms-resources-email" value="" class="text" size="30" maxlength="255" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Company:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="ms-resources-company" id="ms-resources-company" value="" class="text" size="30" maxlength="255" onchange="" onfocus="clearField(this)" autocomplete="off" autocapitalize="words" autocorrect="off" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Country:<span class="req"><sup>*</sup></span></label>
					<select name="ms-resources-country" id="ms-resources-country" class="select" onchange="" onfocus="clearField(this);" required><option value="1823696" selected="selected"></option>
						<option value="1823698">United States</option><option value="1823700">Canada</option><option value="1823702">Afghanistan</option><option value="1823704">Albania</option><option value="1823706">Algeria</option><option value="1823708">American Samoa</option><option value="1823710">Andorra</option><option value="1823712">Angola</option><option value="1823714">Anguilla</option><option value="1823716">Antarctica</option><option value="1823718">Antigua and Barbuda</option><option value="1823720">Argentina</option><option value="1823722">Armenia</option><option value="1823724">Aruba</option><option value="1823726">Australia</option><option value="1823728">Austria</option><option value="1823730">Azerbaijan</option><option value="1823732">Bahamas</option><option value="1823734">Bahrain</option><option value="1823736">Bangladesh</option><option value="1823738">Barbados</option><option value="1823740">Belarus</option><option value="1823742">Belgium</option><option value="1823744">Belize</option><option value="1823746">Benin</option><option value="1823748">Bermuda</option><option value="1823750">Bhutan</option><option value="1823752">Bolivia</option><option value="1823754">Bosnia and Herzegovina</option><option value="1823756">Botswana</option><option value="1823758">Brazil</option><option value="1823760">British Indian Ocean Territory</option><option value="1823762">British Virgin Islands</option><option value="1823764">Brunei</option><option value="1823766">Bulgaria</option><option value="1823768">Burkina Faso</option><option value="1823770">Burundi</option><option value="1823772">Cambodia</option><option value="1823774">Cameroon</option><option value="1823776">Cape Verde</option><option value="1823778">Cayman Islands</option><option value="1823780">Central African Republic</option><option value="1823782">Chad</option><option value="1823784">Chile</option><option value="1823786">China</option><option value="1823788">Christmas Island</option><option value="1823790">Cocos (Keeling) Islands</option><option value="1823792">Colombia</option><option value="1823794">Comoros</option><option value="1823796">Congo</option><option value="1823798">Cook Islands</option><option value="1823800">Costa Rica</option><option value="1823802">Croatia</option><option value="1823804">Cuba</option><option value="1823806">Cura&ccedil;ao</option><option value="1823808">Cyprus</option><option value="1823810">Czech Republic</option><option value="1823812">C&ocirc;te d&rsquo;Ivoire</option><option value="1823814">Democratic Republic of the Congo</option><option value="1823816">Denmark</option><option value="1823818">Djibouti</option><option value="1823820">Dominica</option><option value="1823822">Dominican Republic</option><option value="1823824">Ecuador</option><option value="1823826">Egypt</option><option value="1823828">El Salvador</option><option value="1823830">Equatorial Guinea</option><option value="1823832">Eritrea</option><option value="1823834">Estonia</option><option value="1823836">Ethiopia</option><option value="1823838">Falkland Islands</option><option value="1823840">Faroe Islands</option><option value="1823842">Fiji</option><option value="1823844">Finland</option><option value="1823846">France</option><option value="1823848">French Guiana</option><option value="1823850">French Polynesia</option><option value="1823852">French Southern Territories</option>
						<option value="1823854">Gabon</option>
						<option value="1823856">Gambia</option>
						<option value="1823858">Georgia</option>
						<option value="1823860">Germany</option>
						<option value="1823862">Ghana</option>
						<option value="1823864">Gibraltar</option>
						<option value="1823866">Greece</option>
						<option value="1823868">Greenland</option>
						<option value="1823870">Grenada</option>
						<option value="1823872">Guadeloupe</option>
						<option value="1823874">Guam</option>
						<option value="1823876">Guatemala</option>
						<option value="1823878">Guernsey</option>
						<option value="1823880">Guinea</option>
						<option value="1823882">Guinea-Bissau</option>
						<option value="1823884">Guyana</option>
						<option value="1823886">Haiti</option>
						<option value="1823888">Honduras</option>
						<option value="1823890">Hong Kong S.A.R., China</option>
						<option value="1823892">Hungary</option>
						<option value="1823894">Iceland</option>
						<option value="1823896">India</option>
						<option value="1823898">Indonesia</option>
						<option value="1823900">Iran</option>
						<option value="1823902">Iraq</option>
						<option value="1823904">Ireland</option>
						<option value="1823906">Isle of Man</option>
						<option value="1823908">Israel</option>
						<option value="1823910">Italy</option>
						<option value="1823912">Jamaica</option>
						<option value="1823914">Japan</option>
						<option value="1823916">Jersey</option>
						<option value="1823918">Jordan</option>
						<option value="1823920">Kazakhstan</option>
						<option value="1823922">Kenya</option>
						<option value="1823924">Kiribati</option>
						<option value="1823926">Kuwait</option>
						<option value="1823928">Kyrgyzstan</option>
						<option value="1823930">Laos</option>
						<option value="1823932">Latvia</option>
						<option value="1823934">Lebanon</option>
						<option value="1823936">Lesotho</option>
						<option value="1823938">Liberia</option>
						<option value="1823940">Libya</option>
						<option value="1823942">Liechtenstein</option>
						<option value="1823944">Lithuania</option>
						<option value="1823946">Luxembourg</option>
						<option value="1823948">Macao S.A.R., China</option>
						<option value="1823950">Macedonia</option>
						<option value="1823952">Madagascar</option>
						<option value="1823954">Malawi</option>
						<option value="1823956">Malaysia</option>
						<option value="1823958">Maldives</option>
						<option value="1823960">Mali</option>
						<option value="1823962">Malta</option>
						<option value="1823964">Marshall Islands</option>
						<option value="1823966">Martinique</option>
						<option value="1823968">Mauritania</option>
						<option value="1823970">Mauritius</option>
						<option value="1823972">Mayotte</option>
						<option value="1823974">Mexico</option>
						<option value="1823976">Micronesia</option>
						<option value="1823978">Moldova</option>
						<option value="1823980">Monaco</option>
						<option value="1823982">Mongolia</option>
						<option value="1823984">Montenegro</option>
						<option value="1823986">Montserrat</option>
						<option value="1823988">Morocco</option>
						<option value="1823990">Mozambique</option>
						<option value="1823992">Myanmar</option>
						<option value="1823994">Namibia</option>
						<option value="1823996">Nauru</option>
						<option value="1823998">Nepal</option>
						<option value="1824000">Netherlands</option>
						<option value="1824002">New Caledonia</option>
						<option value="1824004">New Zealand</option>
						<option value="1824006">Nicaragua</option>
						<option value="1824008">Niger</option>
						<option value="1824010">Nigeria</option>
						<option value="1824012">Niue</option>
						<option value="1824014">Norfolk Island</option>
						<option value="1824016">North Korea</option>
						<option value="1824018">Northern Mariana Islands</option>
						<option value="1824020">Norway</option>
						<option value="1824022">Oman</option>
						<option value="1824024">Pakistan</option>
						<option value="1824026">Palau</option>
						<option value="1824028">Palestinian Territory</option>
						<option value="1824030">Panama</option>
						<option value="1824032">Papua New Guinea</option>
						<option value="1824034">Paraguay</option>
						<option value="1824036">Peru</option>
						<option value="1824038">Philippines</option>
						<option value="1824040">Pitcairn</option>
						<option value="1824042">Poland</option>
						<option value="1824044">Portugal</option>
						<option value="1824046">Puerto Rico</option>
						<option value="1824048">Qatar</option>
						<option value="1824050">Romania</option>
						<option value="1824052">Russia</option>
						<option value="1824054">Rwanda</option>
						<option value="1824056">R&eacute;union</option>
						<option value="1824058">Saint Barth&eacute;lemy</option>
						<option value="1824060">Saint Helena</option>
						<option value="1824062">Saint Kitts and Nevis</option>
						<option value="1824064">Saint Lucia</option>
						<option value="1824066">Saint Pierre and Miquelon</option>
						<option value="1824068">Saint Vincent and the Grenadines</option>
						<option value="1824070">Samoa</option>
						<option value="1824072">San Marino</option>
						<option value="1824074">Sao Tome and Principe</option>
						<option value="1824076">Saudi Arabia</option>
						<option value="1824078">Senegal</option>
						<option value="1824080">Serbia</option>
						<option value="1824082">Seychelles</option>
						<option value="1824084">Sierra Leone</option>
						<option value="1824086">Singapore</option>
						<option value="1824088">Slovakia</option>
						<option value="1824090">Slovenia</option>
						<option value="1824092">Solomon Islands</option>
						<option value="1824094">Somalia</option>
						<option value="1824096">South Africa</option>
						<option value="1824098">South Korea</option>
						<option value="1824100">South Sudan</option>
						<option value="1824102">Spain</option>
						<option value="1824104">Sri Lanka</option>
						<option value="1824106">Sudan</option>
						<option value="1824108">Suriname</option>
						<option value="1824110">Svalbard and Jan Mayen</option>
						<option value="1824112">Swaziland</option>
						<option value="1824114">Sweden</option>
						<option value="1824116">Switzerland</option>
						<option value="1824118">Syria</option>
						<option value="1824120">Taiwan</option>
						<option value="1824122">Tajikistan</option>
						<option value="1824124">Tanzania</option>
						<option value="1824126">Thailand</option>
						<option value="1824128">Timor-Leste</option>
						<option value="1824130">Togo</option>
						<option value="1824132">Tokelau</option>
						<option value="1824134">Tonga</option>
						<option value="1824136">Trinidad and Tobago</option>
						<option value="1824138">Tunisia</option>
						<option value="1824140">Turkey</option>
						<option value="1824142">Turkmenistan</option>
						<option value="1824144">Turks and Caicos Islands</option>
						<option value="1824146">Tuvalu</option>
						<option value="1824148">U.S. Virgin Islands</option>
						<option value="1824150">Uganda</option>
						<option value="1824152">Ukraine</option>
						<option value="1824154">United Arab Emirates</option>
						<option value="1824156">United Kingdom</option>
						<option value="1824158">United States Minor Outlying Islands</option>
						<option value="1824160">Uruguay</option>
						<option value="1824162">Uzbekistan</option>
						<option value="1824164">Vanuatu</option>
						<option value="1824166">Vatican</option>
						<option value="1824168">Venezuela</option>
						<option value="1824170">Viet Nam</option>
						<option value="1824172">Wallis and Futuna</option>
						<option value="1824174">Western Sahara</option>
						<option value="1824176">Yemen</option>
						<option value="1824178">Zambia</option>
						<option value="1824180">Zimbabwe</option>
					</select>
				</p>
				<p class="form-check">
					<span class="value"><span><input type="checkbox" name="ms-resources-optin" id="ms-resources-optin" value="false" onchange="" onclick="clearField(this)" required><label class="inline">Yes, I want to receive email communications from Charles River, including any communications regarding posters from AACR.<span class="req"><sup>*</sup></span></label></span></span>
				</p>
				
			</div>
			
			<input type="hidden" id="ms-resources-requested" name="ms-resources-requested">
			<input type="hidden" id="bodyCopy" name="bodyCopy">
			<input type="hidden" id="from" name="from">
			<input type="hidden" id="subject" name="subject">
			
			<div id="formFooter">
				<button type="button" id="formNextPage" onclick="nextPage();">Submit</button>
				<button type="button" id="formSubmit" onclick="submitForm(this);" style="display:none">Send</button>
			</div>
		</form>
		<h3><?php include "email-resources.php"?></h3> 
	</div>
		 
	<script>
		
		var show = "the 4th Annual Data Integrity Validation meeting",
			contactName = "Contact Name",
			contactEmail = "antonio.banderas@crl.com",
			fromEmail = contactEmail,
			emailSubject = "Charles River - Microbial Solutions Literature";
		
		var resourceData, resourceID, parentNode, node, nodeCheck, nodeTitle, checker;
		var resourceDivs = [
			{"business": "endosafe", "id": "resourcesE"},
			{"business": "celsis", "id": "resourcesC"},
			{"business": "accugenix", "id": "resourcesA"}
		];
		var resourceForm = document.getElementById("resourceForm");
		
		loadVars();

		function loadVars() {
			d3.csv("data/ms-resources.csv", function(error, resourceInData) {
				if (error) throw error;
				resourceData = resourceInData;
				
				resourceData.forEach(function(r) {
					resourceDivs.forEach(function(b) {
						if (r.business === b.business) {
							parentNode = document.getElementById(b.id);
							
							node = document.createElement("div"); 
							node.className =  "resourceEntry";

							nodeCheck = document.createElement("input");
							nodeCheck.type = "checkbox";
							nodeCheck.className = "resourceCheck";
							nodeCheck.value = r.id;
							nodeCheck.id = "checkbox" + r.id;

							nodeTitle = document.createElement("p");
							nodeTitle.className = "resourceTitle";
							nodeTitle.innerHTML = getTitle(r.title);

							node.appendChild(nodeCheck);
							node.appendChild(nodeTitle);
							parentNode.appendChild(node);
						}
					});
				});
			});
		}
		
		function toggleForm(b) {
			resourceID = b.id;
			resourceDivs.forEach(function(d) {
				if (d.business === resourceID) {
					document.getElementById(d.business).style.opacity = 1;
					document.getElementById(d.id).style.opacity = 1;
					document.getElementById(d.id).style["z-index"] = 10;
				} else {
					document.getElementById(d.business).style.opacity = 0.5;
					document.getElementById(d.id).style.opacity = 0;
					document.getElementById(d.id).style["z-index"] = 1;
				}
			});
		}
		
		function getTitle(d) { return d.replace(/®/g, "<sup>®</sup>"); }
		
		function checkAll(c) {
			resourceData.forEach(function(d) {
				if (d.business === c.value) {
					checker = document.getElementById("checkbox" + d.id);
					if (checker.checked === false) { checker.checked = true;
					} else { checker.checked = false; }
				}
			});
		}
		
		function nextPage() {
			document.getElementById("formNextPage").style.display = "none";
			document.getElementById("formSubmit").style.display = "block";
			resourceDivs.forEach(function(r) {
				document.getElementById(r.id).style.opacity = 0;
				document.getElementById(r.id).style["z-index"] = 1;
			})
			document.getElementById("formContact").style.opacity = 1;
			document.getElementById("formContact").style["z-index"] = 10;
		}
		
		function clearField(x) {
			x.style.border = "1px solid rgba(191,214,240, 1)";
			x.style.background = "#ffffff";
			//document.getElementById("error").style.display = "none";
			//document.getElementById("toptext").style.display = "block";
		}
		
		
		
		
		
		
		function submitForm(d) {
			console.log("submit");
			var elem, linkNode, title, link, first, last, email, listNode;
			var resourceArray = [];
			var form = document.getElementById("resourceForm");
			for (i = 0; i < form.length; i++) {
				elem = form.elements[i];
				if (elem.type === "checkbox" && elem.id !== "ms-resources-optin" && elem.className !== "resourceCheckAll" && elem.checked === true) { resourceArray.push(elem.value); }
				if (elem.name === "ms-resources-first") { first = elem.value };
				if (elem.name === "ms-resources-last") { last = elem.value };
				if (elem.name === "ms-resources-email") { email = elem.value };
			}
			
			var linkCopy = "",
				resourceList = "";
			
			var pTag = '<p style="font-family:Arial,sans-serif; font-size:14px; font-weight:normal; margin-bottom:20px; text-align:left; line-height:22px;">',
				aStyle = 'font-family:Arial,sans-serif; font-size:14px; font-weight:normal; margin-bottom:20px; text-align:left; line-height:22px; text-decoration:none, outline:none;color:#005baa'; 
			
			resourceArray.forEach(function(v) {
				resourceData.forEach(function(d) {
					if (v === d.id) {
						title = getTitle(d.title);
						link = d.widen;
						linkNode = '<a class="emailLink" href="' + link + '" style="' + aStyle + '">' + title + '</a>';
						linkCopy += linkNode;
						
						listNode = d.title + ", ";
						resourceList += listNode;
					}
				});
			});
			
			resourceList = resourceList.substring(0, resourceList.length - 2);

			var emailCopy = pTag + 'Dear ' + first + ' ' + last + ',<br><br>Thank you for visiting with Charles River at ' + show + '. Here are the links to the Microbial Solutions literature that you requested. You can download and review them at your convenience.</p>' + linkCopy + pTag + 'If you would like any further information, or if you have any additional questions, please do not hesitate to email <a href="mailto:' + contactEmail + '" style="' + aStyle + '">' + contactEmail + '</a> or contact me directly.<br><br>Thank you,<br>' + contactName + '</p>';
			
			document.getElementById("ms-resources-requested").value = resourceList;
			document.getElementById("bodyCopy").value = emailCopy;
			document.getElementById("from").value = fromEmail;
			document.getElementById("subject").value = emailSubject;
			
			console.log(resourceForm);
			resourceForm.submit();
		}
		
		
		
		
		
		
		
		
		
		


		
	</script>
	<!--
	<div id="touchBox" onclick="wake();" class="visible"></div> 
	
	<div id="wakeTextTop" class="visible"><h1>Get all our AACR posters here.</h1></div>
	
	<div id="main">

		<div id="formWindow" style="" class="hiddenForm">
			
			<div id="thanks"><h1>Thank you.</h1><p>Please check your inbox.</p></div>
			
			<form accept-charset="UTF-8" method="post" action="https://go.pardot.com/l/60962/2018-04-02/fr76h5" class="form" id="pardot-form">
				
				<p class="formHead" id="toptext">Enter your information to receive posters from AACR.</p>
				<p class="formHead" id="error" style="display:none;color:red;">Please fill out all required fields.</p>
				<p class="form-field">
					<label class="field-label">First Name:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="aacr18-first" id="aacr18-first" value="" class="text" size="30" maxlength="40" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="words" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Last Name:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="aacr18-last" id="aacr18-last" value="" class="text" size="30" maxlength="80" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="words" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Email:<span class="req"><sup>*</sup></span></label>
					<input type="email" name="aacr18-email" id="aacr18-email" value="" class="text" size="30" maxlength="255" onchange="" onfocus="clearField(this)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Company:<span class="req"><sup>*</sup></span></label>
					<input type="text" name="aacr18-company" id="aacr18-company" value="" class="text" size="30" maxlength="255" onchange="" onfocus="clearField(this)" autocomplete="off" autocapitalize="words" autocorrect="off" spellcheck="false" required>
				</p>
				<p class="form-field">
					<label class="field-label">Country:<span class="req"><sup>*</sup></span></label>
					<select name="aacr18-country" id="aacr18-country" class="select" onchange="" onfocus="clearField(this);" required><option value="1823696" selected="selected"></option>
						<option value="1823698">United States</option>
						<option value="1823700">Canada</option>
						<option value="1823702">Afghanistan</option>
						<option value="1823704">Albania</option>
						<option value="1823706">Algeria</option>
						<option value="1823708">American Samoa</option>
						<option value="1823710">Andorra</option>
						<option value="1823712">Angola</option>
						<option value="1823714">Anguilla</option>
						<option value="1823716">Antarctica</option>
						<option value="1823718">Antigua and Barbuda</option>
						<option value="1823720">Argentina</option>
						<option value="1823722">Armenia</option>
						<option value="1823724">Aruba</option>
						<option value="1823726">Australia</option>
						<option value="1823728">Austria</option>
						<option value="1823730">Azerbaijan</option>
						<option value="1823732">Bahamas</option>
						<option value="1823734">Bahrain</option>
						<option value="1823736">Bangladesh</option>
						<option value="1823738">Barbados</option>
						<option value="1823740">Belarus</option>
						<option value="1823742">Belgium</option>
						<option value="1823744">Belize</option>
						<option value="1823746">Benin</option>
						<option value="1823748">Bermuda</option>
						<option value="1823750">Bhutan</option>
						<option value="1823752">Bolivia</option>
						<option value="1823754">Bosnia and Herzegovina</option>
						<option value="1823756">Botswana</option>
						<option value="1823758">Brazil</option>
						<option value="1823760">British Indian Ocean Territory</option>
						<option value="1823762">British Virgin Islands</option>
						<option value="1823764">Brunei</option>
						<option value="1823766">Bulgaria</option>
						<option value="1823768">Burkina Faso</option>
						<option value="1823770">Burundi</option>
						<option value="1823772">Cambodia</option>
						<option value="1823774">Cameroon</option>
						<option value="1823776">Cape Verde</option>
						<option value="1823778">Cayman Islands</option>
						<option value="1823780">Central African Republic</option>
						<option value="1823782">Chad</option>
						<option value="1823784">Chile</option>
						<option value="1823786">China</option>
						<option value="1823788">Christmas Island</option>
						<option value="1823790">Cocos (Keeling) Islands</option>
						<option value="1823792">Colombia</option>
						<option value="1823794">Comoros</option>
						<option value="1823796">Congo</option>
						<option value="1823798">Cook Islands</option>
						<option value="1823800">Costa Rica</option>
						<option value="1823802">Croatia</option>
						<option value="1823804">Cuba</option>
						<option value="1823806">Cura&ccedil;ao</option>
						<option value="1823808">Cyprus</option>
						<option value="1823810">Czech Republic</option>
						<option value="1823812">C&ocirc;te d&rsquo;Ivoire</option>
						<option value="1823814">Democratic Republic of the Congo</option>
						<option value="1823816">Denmark</option>
						<option value="1823818">Djibouti</option>
						<option value="1823820">Dominica</option>
						<option value="1823822">Dominican Republic</option>
						<option value="1823824">Ecuador</option>
						<option value="1823826">Egypt</option>
						<option value="1823828">El Salvador</option>
						<option value="1823830">Equatorial Guinea</option>
						<option value="1823832">Eritrea</option>
						<option value="1823834">Estonia</option>
						<option value="1823836">Ethiopia</option>
						<option value="1823838">Falkland Islands</option>
						<option value="1823840">Faroe Islands</option>
						<option value="1823842">Fiji</option>
						<option value="1823844">Finland</option>
						<option value="1823846">France</option>
						<option value="1823848">French Guiana</option>
						<option value="1823850">French Polynesia</option>
						<option value="1823852">French Southern Territories</option>
						<option value="1823854">Gabon</option>
						<option value="1823856">Gambia</option>
						<option value="1823858">Georgia</option>
						<option value="1823860">Germany</option>
						<option value="1823862">Ghana</option>
						<option value="1823864">Gibraltar</option>
						<option value="1823866">Greece</option>
						<option value="1823868">Greenland</option>
						<option value="1823870">Grenada</option>
						<option value="1823872">Guadeloupe</option>
						<option value="1823874">Guam</option>
						<option value="1823876">Guatemala</option>
						<option value="1823878">Guernsey</option>
						<option value="1823880">Guinea</option>
						<option value="1823882">Guinea-Bissau</option>
						<option value="1823884">Guyana</option>
						<option value="1823886">Haiti</option>
						<option value="1823888">Honduras</option>
						<option value="1823890">Hong Kong S.A.R., China</option>
						<option value="1823892">Hungary</option>
						<option value="1823894">Iceland</option>
						<option value="1823896">India</option>
						<option value="1823898">Indonesia</option>
						<option value="1823900">Iran</option>
						<option value="1823902">Iraq</option>
						<option value="1823904">Ireland</option>
						<option value="1823906">Isle of Man</option>
						<option value="1823908">Israel</option>
						<option value="1823910">Italy</option>
						<option value="1823912">Jamaica</option>
						<option value="1823914">Japan</option>
						<option value="1823916">Jersey</option>
						<option value="1823918">Jordan</option>
						<option value="1823920">Kazakhstan</option>
						<option value="1823922">Kenya</option>
						<option value="1823924">Kiribati</option>
						<option value="1823926">Kuwait</option>
						<option value="1823928">Kyrgyzstan</option>
						<option value="1823930">Laos</option>
						<option value="1823932">Latvia</option>
						<option value="1823934">Lebanon</option>
						<option value="1823936">Lesotho</option>
						<option value="1823938">Liberia</option>
						<option value="1823940">Libya</option>
						<option value="1823942">Liechtenstein</option>
						<option value="1823944">Lithuania</option>
						<option value="1823946">Luxembourg</option>
						<option value="1823948">Macao S.A.R., China</option>
						<option value="1823950">Macedonia</option>
						<option value="1823952">Madagascar</option>
						<option value="1823954">Malawi</option>
						<option value="1823956">Malaysia</option>
						<option value="1823958">Maldives</option>
						<option value="1823960">Mali</option>
						<option value="1823962">Malta</option>
						<option value="1823964">Marshall Islands</option>
						<option value="1823966">Martinique</option>
						<option value="1823968">Mauritania</option>
						<option value="1823970">Mauritius</option>
						<option value="1823972">Mayotte</option>
						<option value="1823974">Mexico</option>
						<option value="1823976">Micronesia</option>
						<option value="1823978">Moldova</option>
						<option value="1823980">Monaco</option>
						<option value="1823982">Mongolia</option>
						<option value="1823984">Montenegro</option>
						<option value="1823986">Montserrat</option>
						<option value="1823988">Morocco</option>
						<option value="1823990">Mozambique</option>
						<option value="1823992">Myanmar</option>
						<option value="1823994">Namibia</option>
						<option value="1823996">Nauru</option>
						<option value="1823998">Nepal</option>
						<option value="1824000">Netherlands</option>
						<option value="1824002">New Caledonia</option>
						<option value="1824004">New Zealand</option>
						<option value="1824006">Nicaragua</option>
						<option value="1824008">Niger</option>
						<option value="1824010">Nigeria</option>
						<option value="1824012">Niue</option>
						<option value="1824014">Norfolk Island</option>
						<option value="1824016">North Korea</option>
						<option value="1824018">Northern Mariana Islands</option>
						<option value="1824020">Norway</option>
						<option value="1824022">Oman</option>
						<option value="1824024">Pakistan</option>
						<option value="1824026">Palau</option>
						<option value="1824028">Palestinian Territory</option>
						<option value="1824030">Panama</option>
						<option value="1824032">Papua New Guinea</option>
						<option value="1824034">Paraguay</option>
						<option value="1824036">Peru</option>
						<option value="1824038">Philippines</option>
						<option value="1824040">Pitcairn</option>
						<option value="1824042">Poland</option>
						<option value="1824044">Portugal</option>
						<option value="1824046">Puerto Rico</option>
						<option value="1824048">Qatar</option>
						<option value="1824050">Romania</option>
						<option value="1824052">Russia</option>
						<option value="1824054">Rwanda</option>
						<option value="1824056">R&eacute;union</option>
						<option value="1824058">Saint Barth&eacute;lemy</option>
						<option value="1824060">Saint Helena</option>
						<option value="1824062">Saint Kitts and Nevis</option>
						<option value="1824064">Saint Lucia</option>
						<option value="1824066">Saint Pierre and Miquelon</option>
						<option value="1824068">Saint Vincent and the Grenadines</option>
						<option value="1824070">Samoa</option>
						<option value="1824072">San Marino</option>
						<option value="1824074">Sao Tome and Principe</option>
						<option value="1824076">Saudi Arabia</option>
						<option value="1824078">Senegal</option>
						<option value="1824080">Serbia</option>
						<option value="1824082">Seychelles</option>
						<option value="1824084">Sierra Leone</option>
						<option value="1824086">Singapore</option>
						<option value="1824088">Slovakia</option>
						<option value="1824090">Slovenia</option>
						<option value="1824092">Solomon Islands</option>
						<option value="1824094">Somalia</option>
						<option value="1824096">South Africa</option>
						<option value="1824098">South Korea</option>
						<option value="1824100">South Sudan</option>
						<option value="1824102">Spain</option>
						<option value="1824104">Sri Lanka</option>
						<option value="1824106">Sudan</option>
						<option value="1824108">Suriname</option>
						<option value="1824110">Svalbard and Jan Mayen</option>
						<option value="1824112">Swaziland</option>
						<option value="1824114">Sweden</option>
						<option value="1824116">Switzerland</option>
						<option value="1824118">Syria</option>
						<option value="1824120">Taiwan</option>
						<option value="1824122">Tajikistan</option>
						<option value="1824124">Tanzania</option>
						<option value="1824126">Thailand</option>
						<option value="1824128">Timor-Leste</option>
						<option value="1824130">Togo</option>
						<option value="1824132">Tokelau</option>
						<option value="1824134">Tonga</option>
						<option value="1824136">Trinidad and Tobago</option>
						<option value="1824138">Tunisia</option>
						<option value="1824140">Turkey</option>
						<option value="1824142">Turkmenistan</option>
						<option value="1824144">Turks and Caicos Islands</option>
						<option value="1824146">Tuvalu</option>
						<option value="1824148">U.S. Virgin Islands</option>
						<option value="1824150">Uganda</option>
						<option value="1824152">Ukraine</option>
						<option value="1824154">United Arab Emirates</option>
						<option value="1824156">United Kingdom</option>
						<option value="1824158">United States Minor Outlying Islands</option>
						<option value="1824160">Uruguay</option>
						<option value="1824162">Uzbekistan</option>
						<option value="1824164">Vanuatu</option>
						<option value="1824166">Vatican</option>
						<option value="1824168">Venezuela</option>
						<option value="1824170">Viet Nam</option>
						<option value="1824172">Wallis and Futuna</option>
						<option value="1824174">Western Sahara</option>
						<option value="1824176">Yemen</option>
						<option value="1824178">Zambia</option>
						<option value="1824180">Zimbabwe</option>
					</select>
				</p>
				<p class="form-check">
					<span class="value"><span><input type="checkbox" name="aacr18-checkbox" id="aacr18-checkbox" value="false" onchange="" onclick="clearField(this)" required><label class="inline">Yes, I want to receive email communications from Charles River, including any communications regarding posters from AACR.<span class="req"><sup>*</sup></span></label></span></span>
				</p>
				<p class="submit"><input type="button" name="button" accesskey="s" value="Submit" /></p>
			</form> 
		</div>
		<div id="container"><canvas id="testCanvas"></canvas></div>
	</div>

	<div id="wakeText" class="visible"><h1>Tap the screen to sign up.</h1></div>
	-->
	<!--
	<script src="js/proton.min.js"></script>
	<script src="js/TweenLite.min.js"></script>
	<script src="js/stats.min.js"></script>
-->
	<script src="js/tools.js"></script>
	<script src="js/bacteria.js"></script>
	<!--
	<script>
		
		// form validator
		window.onload = function () {
			var form = document.getElementById('pardot-form');
  			form.button.onclick = function (){
					var filled = true;
					for(var i=0; i < form.elements.length; i++){
						if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
							document.getElementById(form.elements[i].id).style.border = "1px solid red";
							document.getElementById(form.elements[i].id).style.background = "rgba(238,108,108,0.15)";
							filled = false;
						} 
					}
					if (form.elements["aacr18-country"].value === "1823696") {
						document.getElementById(form.elements["aacr18-country"].id).style.border = "1px solid red";
						document.getElementById(form.elements["aacr18-country"].id).style.background = "rgba(238,108,108,0.15)";
						filled = false;
					}
					if (form.elements["aacr18-checkbox"].checked !== true) {
						document.getElementById(form.elements["aacr18-checkbox"].id).style.border = "1px solid red";
						document.getElementById(form.elements["aacr18-checkbox"].id).style.background = "rgba(238,108,108,0.15)";
						filled = false;
					}
					if (filled === false) {
						console.log("form not filled");
						document.getElementById("toptext").style.display = "none";
						document.getElementById("error").style.display = "block";
						//return false;
					} else {
						if (form.elements["aacr18-checkbox"].checked) {
							form.elements["aacr18-checkbox"].value = true;
						} else {
							form.elements["aacr18-checkbox"].value = false;
						}
						console.log("form filled");
						document.getElementById("thanks").style.opacity = "1";
						document.getElementById("pardot-form").style.opacity = "0";
						window.setTimeout(function() {
							form.submit();
						}, 5000);
					}
  			}; 
								  
		};
		
		// clear highlight
		function clearField(x) {
			x.style.border = "1px solid rgba(226, 156, 154, 0.45)";
			x.style.background = "#ffffff";
			document.getElementById("error").style.display = "none";
			document.getElementById("toptext").style.display = "block";
		}
		
		// PARTICLES
		var canvas;
        var context;
        var proton;
        var renderer;
        var emitter;
        var stats;
        var mouseObj;
        var attractionForce;
		
		main();
		
		function main() {
            canvas = document.getElementById("testCanvas");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            //addStats();
            loadImage();

            mouseObj = {
                x: canvas.width / 2,
                y: canvas.height / 2 - 50
            };

            resize();
        }

        function addStats() {
            stats = new Stats();
            stats.setMode(2);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
        }

        function loadImage() {
            var image = new Image()
            image.onload = function (e) {
                createProton(e.target);
                tick();
              //  canvas.addEventListener('mousedown', mouseDownHandler, false);
            }
            image.src = 'images/particle.png';
        }

        function createProton(image) {
            proton = new Proton;
            emitter = new Proton.Emitter();
            emitter.rate = new Proton.Rate(new Proton.Span(20, 40), .1);

            emitter.addInitialize(new Proton.Mass(new Proton.Span(50, 30)));
            emitter.addInitialize(new Proton.Body(image));
            emitter.addInitialize(new Proton.CircleZone(0, -50, 600));
            emitter.addInitialize(new Proton.Life(4, 6));
            emitter.addInitialize(new Proton.Velocity(.001, new Proton.Span(0, 360), 'polar'));
			//emitter.addInitialize(new Proton.Alpha(0.1));

           	//emitter.addBehaviour(new Proton.Color('#ffd7d5', '#e29c9a'));
			emitter.addBehaviour(new Proton.Color('#bf8688', '#ffd7d5'));
			//emitter.addBehaviour(new Proton.CircleZone(mouseObj.x, mouseObj.y, 600));
            attractionForce = new Proton.Attraction(mouseObj, 40, 2);
            emitter.addBehaviour(attractionForce);
            emitter.addBehaviour(new Proton.Scale(Proton.getSpan(2, 4), Proton.getSpan(.1, .3)));
			emitter.addBehaviour(new Proton.Alpha(-1.3, 1));
			emitter.addBehaviour(new Proton.Rotate(0, [-5, 5]));
			emitter.addBehaviour(new Proton.RandomDrift(1000, 800, .5));
			emitter.addBehaviour(new Proton.Repulsion(mouseObj, 300, 10));
			

            emitter.p.x = canvas.width / 2;
            emitter.p.y = canvas.height / 2;
            emitter.emit();
            proton.addEmitter(emitter);

            renderer = new Proton.WebGLRenderer(canvas);
           // renderer.blendFunc("SRC_ALPHA", "ZERO");
            proton.addRenderer(renderer);
        }

        function resize() {
            window.onresize = function () {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;

                mouseObj.x = canvas.width / 2;
                mouseObj.y = canvas.height / 2;
                emitter.p.x = canvas.width / 2;
                emitter.p.y = canvas.height / 2;

                renderer.resize(canvas.width, canvas.height);
            }
        }

        function mouseDownHandler(e) {
            TweenLite.to(emitter.p, 1.5, {
                x: e.offsetX,
                y: e.offsetY,
            });

            TweenLite.to(mouseObj, 3.5, {
                x: e.offsetX,
                y: e.offsetY,
            });

            attractionForce.reset(mouseObj, 0, 200);
            setTimeout(function () { attractionForce.reset(mouseObj, 10, 200); }, 500);
        }

        function tick() {
            requestAnimationFrame(tick);


            if (proton) {
                proton.update();
             //   proton.stats.update(2, document.body);
            }

        }
		

		// sleep and wake functions
		function wake() {
			var x = document.getElementById("formWindow");
			if (x.className === "hiddenForm") {
				wakeup();
				sleepTimer();
			} else {
				sleep();
			}
		}
		
		function sleepTimer() {
			setTimeout(sleep, 60000); // 90 sec
			//setTimeout(sleep, 5000);
		}
		
		function wakeup() {
			var x = document.getElementById("formWindow");
			var y = document.getElementById("wakeText");
			var z = document.getElementById("wakeTextTop");
			var t = document.getElementById("touchBox");
			x.className = "visibleForm";
			y.className = "hidden";
			z.className = "hidden";
			t.style.display = "none";
			clearTimeout(sleepTimer);
		}
		
		function sleep() {
			var x = document.getElementById("formWindow");
			var y = document.getElementById("wakeText");
			var z = document.getElementById("wakeTextTop");
			var t = document.getElementById("touchBox");
			x.className = "hiddenForm";
			t.style.display = "inline-block";
			window.setTimeout(function() {y.className = "visible";z.className = "visible";},5000);
		}
		
	</script> 
	-->
</body>
</html>
