<!--Created By Pranav V V -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadbar justify-content-end">
		     <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
		    <li class="breadcrumb-item eng_xxxs">Register New User</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown">KSEB Register New User  </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
			<form action="" method="">
				<div class="row customformrow">
					<div class="col-md-12 py-2 mt-4">
						<p class="text-center">Bill number is requested here to authenticate the Consumer. You can attach a maximum of 30 consumers.</p>
					</div> 
					<div class="col-md-2 py-2">
						<label for="CONSUMERNUM" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span> Consumer Number:</label>
					</div> 
					<div class="col-md-3 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CONSUMERNUM" aria-describedby="CONSUMERNUM" placeholder="Consumer Number" required>
						<small id="HELPCONSUMERNUM" class="form-text eng_xxxxs text-muted"> Please provide your 13 digit consumer number</small>
						<label id="CONSUMERNUM_LABEL"></label>
					</div> 

					<div class="col-md-2 py-2">
						<label for="BILLNO" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span> Bill Number:</label>
					</div> 
					<div class="col-md-5 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="BILLNO" aria-describedby="BILLNO" placeholder="Last 5 Digits" required>
						<small id="HELPBILLNO" class="form-text eng_xxxxs text-muted"> Please provide atleast last 5 digits of your regular Bill Number</small>
						<label id="BILLNO_LABEL"></label>
					</div>
				</div> 

				<div class="row customformrow">
					<div class="col-md-2 py-2">
						<label for="USERID" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span> User Id:</label>
					</div> 
					<div class="col-md-3 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="USERID" aria-describedby="USERID" placeholder="User Id" required>
						<small id="HELPCONSUMERNUM" class="form-text eng_xxxxs text-muted"> User ID must be of minimum six characters. User ID must not contain special characters like '/,&,*,#'</small>
						<label id="USERID_LABEL"></label>
					</div> 

					<div class="col-md-2 py-2">
						<label for="PASSWORD" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span> Password:</label>
					</div> 
					<div class="col-md-3 py-2">
						<input type="password" class="form-control customform eng_xxxs fg-darkCrimson" id="PASSWORD" aria-describedby="PASSWORD" placeholder="Password" required>
						<small id="HELPPASSWORD" class="form-text eng_xxxxs text-muted"> Password should be of minimum 8 and maximum of 12 characters having atleast one alphabet, one numeric and one special character.White spaces are not allowed.</small>
						<label id="PASSWORD_LABEL"></label>
					</div> 
					<div class="col-md-2 py-2">
						<input type="password" class="form-control customform eng_xxxs fg-darkCrimson" id="CONFIRMPASSWWORD" aria-describedby="PASSWORD" placeholder="Confirm Password" required>
						<small id="HELPCONFIRMPASSWWORD" class="form-text eng_xxxxs text-muted"><span class="text-danger">*</span>  Confirm Password</small>
						<label id="CONFIRMPASSWWORD_LABEL"></label>
					</div> 
				</div> 

				<div class="row customformrow">

					<div class="col-md-12 mt-4">
						<p class="text-center">This section is to provide details of Registering User and not Consumer Details.</p>
					</div>

					<div class="col-md-2 py-2">
						<label for="USERTITLE" class="eng_xxxs fg-darkBrown">Title:</label>
					</div>

					<div class="col-md-3 py-2">
						<select class="form-control customform eng_xxxs fg-darkCrimson" id="USERTITLE" aria-describedby="USERTITLE" >
							<option value="">Please Select</option>	
							<option value="Dr.">Dr.</option>
							<option value="Mr.">Mr.</option>
							<option value="Miss">Miss</option>
							<option value="Mrs.">Mrs.</option>
							<option value="Prof.">Prof.</option>
						</select>
					</div> 

					<div class="col-md-2 py-2">
						<label for="NAME" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span>  Name:</label>
					</div> 
					<div class="col-md-5 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="NAME" aria-describedby="NAME" placeholder="Enter Your Name" required>
						<label id="NAME_LABEL"></label>
					</div>
				</div> 
			
				<div class="row customformrow">
					<div class="col-md-2 py-2">
						<label for="EMAILID" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span>  Email Id:</label>
					</div>

					<div class="col-md-3 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="EMAILID" aria-describedby="EMAILID" placeholder="Email Id" required>
						<label id="EMAILID_LABEL"></label>
					</div> 

					<div class="col-md-2 py-2">
						<label for="MOBILENUMBER" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span>  Mobile Number:</label>
					</div> 
					<div class="col-md-2 py-2">
						<select class="form-control customform eng_xxxs fg-darkCrimson" id="MOBILECODE" aria-describedby="MOBILECODE" required>
								<option value="0091">0091-
									INDIA</option>
							
						
					
						
							
							
								<option value="001907">001907-
									ALASKA</option>
							
						
					
						
							
							
								<option value="00355">00355-
									ALBANIA</option>
							
						
					
						
							
							
								<option value="00213">00213-
									ALGERIA</option>
							
						
					
						
							
							
								<option value="00376">00376-
									ANDORRA</option>
							
						
					
						
							
							
								<option value="00244">00244-
									ANGOLA</option>
							
						
					
						
							
							
								<option value="001264">001264-
									ANGUILLA</option>
							
						
					
						
							
							
								<option value="001268">001268-
									ANTIGUA</option>
							
						
					
						
							
							
								<option value="0054">0054-
									ARGENTINA</option>
							
						
					
						
							
							
								<option value="00374">00374-
									ARMENIA</option>
							
						
					
						
							
							
								<option value="00297">00297-
									ARUBA</option>
							
						
					
						
							
							
								<option value="00247">00247-
									ASCENSION</option>
							
						
					
						
							
							
								<option value="0061">0061-
									AUSTRALIA</option>
							
						
					
						
							
							
								<option value="0043">0043-
									AUSTRIA</option>
							
						
					
						
							
							
								<option value="00994">00994-
									AZERBAIJAN REPUBLIC</option>
							
						
					
						
							
							
								<option value="00351">00351-
									AZORES</option>
							
						
					
						
							
							
								<option value="001242">001242-
									BAHAMAS</option>
							
						
					
						
							
							
								<option value="00973">00973-
									BAHARIN</option>
							
						
					
						
							
							
								<option value="00880">00880-
									BANGLADESH</option>
							
						
					
						
							
							
								<option value="001246">001246-
									BARBADOS</option>
							
						
					
						
							
							
								<option value="00375">00375-
									BELARUS</option>
							
						
					
						
							
							
								<option value="0032">0032-
									BELGIUM</option>
							
						
					
						
							
							
								<option value="00501">00501-
									BELIZE</option>
							
						
					
						
							
							
								<option value="00229">00229-
									BENIN</option>
							
						
					
						
							
							
								<option value="001441">001441-
									BERMUDA</option>
							
						
					
						
							
							
								<option value="00975">00975-
									BHUTAN</option>
							
						
					
						
							
							
								<option value="00591">00591-
									BOLIVIA</option>
							
						
					
						
							
							
								<option value="0027">0027-
									BOPUPATSWANA</option>
							
						
					
						
							
							
								<option value="00387">00387-
									BOSNIA & HERZEGOVINA</option>
							
						
					
						
							
							
								<option value="00267">00267-
									BOTSWANA, REPUBLIC OF</option>
							
						
					
						
							
							
								<option value="0055">0055-
									BRAZIL</option>
							
						
					
						
							
							
								<option value="00673">00673-
									BRUNEI</option>
							
						
					
						
							
							
								<option value="00359">00359-
									BULGARIA</option>
							
						
					
						
							
							
								<option value="00226">00226-
									BURKINA FASSO</option>
							
						
					
						
							
							
								<option value="00257">00257-
									BURUNDI</option>
							
						
					
						
							
							
								<option value="00237">00237-
									CAMEROON</option>
							
						
					
						
							
							
								<option value="0034">0034-
									CANARY ISLAND</option>
							
						
					
						
							
							
								<option value="00238">00238-
									CAPE VERDE</option>
							
						
					
						
							
							
								<option value="001345">001345-
									CAYMAN ISLAND</option>
							
						
					
						
							
							
								<option value="00236">00236-
									CENTRAL AFRICAN REPUBLIC</option>
							
						
					
						
							
							
								<option value="00235">00235-
									CHAD</option>
							
						
					
						
							
							
								<option value="0056">0056-
									CHILE</option>
							
						
					
						
							
							
								<option value="0086">0086-
									CHINA</option>
							
						
					
						
							
							
								<option value="00672">00672-
									COCOSKEELING ISLAND</option>
							
						
					
						
							
							
								<option value="0057">0057-
									COLOMBIA</option>
							
						
					
						
							
							
								<option value="00269">00269-
									COMOROS</option>
							
						
					
						
							
							
								<option value="00242">00242-
									CONGO</option>
							
						
					
						
							
							
								<option value="00682">00682-
									COOK ISLAND</option>
							
						
					
						
							
							
								<option value="00506">00506-
									COSTA RICA</option>
							
						
					
						
							
							
								<option value="00385">00385-
									CROATIA</option>
							
						
					
						
							
							
								<option value="0053">0053-
									CUBA</option>
							
						
					
						
							
							
								<option value="00357">00357-
									CYPRUS</option>
							
						
					
						
							
							
								<option value="00420">00420-
									CZECH REPUBLIC</option>
							
						
					
						
							
							
								<option value="0045">0045-
									DENMARK</option>
							
						
					
						
							
							
								<option value="00246">00246-
									DIEGO GARCIA</option>
							
						
					
						
							
							
								<option value="00253">00253-
									DJIBOUTI</option>
							
						
					
						
							
							
								<option value="001809">001809-
									DOMANICCAN REPUBLIC</option>
							
						
					
						
							
							
								<option value="001767">001767-
									DOMINICA ISLAND</option>
							
						
					
						
							
							
								<option value="00670">00670-
									EAST TIMOR</option>
							
						
					
						
							
							
								<option value="00593">00593-
									ECUADOR</option>
							
						
					
						
							
							
								<option value="0020">0020-
									EGYPT</option>
							
						
					
						
							
							
								<option value="00503">00503-
									EL SALVADOR</option>
							
						
					
						
							
							
								<option value="00240">00240-
									EQUATORIAL GUINEA</option>
							
						
					
						
							
							
								<option value="00291">00291-
									ERITREA</option>
							
						
					
						
							
							
								<option value="00372">00372-
									ESTONIA</option>
							
						
					
						
							
							
								<option value="00251">00251-
									ETHIOPIA</option>
							
						
					
						
							
							
								<option value="00500">00500-
									FALKLAND ISLAND</option>
							
						
					
						
							
							
								<option value="00298">00298-
									FAROE ISLAND</option>
							
						
					
						
							
							
								<option value="00679">00679-
									FIJI REPUBLIC</option>
							
						
					
						
							
							
								<option value="00358">00358-
									FINLAND</option>
							
						
					
						
							
							
								<option value="0033">0033-
									FRANCE</option>
							
						
					
						
							
							
								<option value="00594">00594-
									FRENCH GUIANA</option>
							
						
					
						
							
							
								<option value="00689">00689-
									FR POLYNESIA</option>
							
						
					
						
							
							
								<option value="00241">00241-
									GABONESE REPUBLIC</option>
							
						
					
						
							
							
								<option value="00220">00220-
									GAMBIA</option>
							
						
					
						
							
							
								<option value="00995">00995-
									GEORGIA</option>
							
						
					
						
							
							
								<option value="0049">0049-
									GERMANY</option>
							
						
					
						
							
							
								<option value="00233">00233-
									GHANA</option>
							
						
					
						
							
							
								<option value="00350">00350-
									GIBRALTOR</option>
							
						
					
						
							
							
								<option value="0030">0030-
									GREECE</option>
							
						
					
						
							
							
								<option value="00299">00299-
									GREENLAND</option>
							
						
					
						
							
							
								<option value="001473">001473-
									GRENEDA</option>
							
						
					
						
							
							
								<option value="00590">00590-
									GUADELOPE</option>
							
						
					
						
							
							
								<option value="001671">001671-
									GUAM</option>
							
						
					
						
							
							
								<option value="00502">00502-
									GUATEMALA</option>
							
						
					
						
							
							
								<option value="00245">00245-
									GUINEA BISSAU</option>
							
						
					
						
							
							
								<option value="00224">00224-
									GUINEA REPUBLIC</option>
							
						
					
						
							
							
								<option value="00592">00592-
									GUYANA REPUBLIC</option>
							
						
					
						
							
							
								<option value="00509">00509-
									HAITI REPUBLIC</option>
							
						
					
						
							
							
								<option value="001808">001808-
									HAWAII</option>
							
						
					
						
							
							
								<option value="00504">00504-
									HONDURAS</option>
							
						
					
						
							
							
								<option value="00852">00852-
									HONGKONG</option>
							
						
					
						
							
							
								<option value="0036">0036-
									HUNGARY</option>
							
						
					
						
							
							
								<option value="00354">00354-
									ICELAND</option>
							
						
					
						
							
							
								<option value="0062">0062-
									INDONESIA</option>
							
						
					
						
							
							
								<option value="0098">0098-
									IRAN</option>
							
						
					
						
							
							
								<option value="00964">00964-
									IRAQ</option>
							
						
					
						
							
							
								<option value="00353">00353-
									IRELAND</option>
							
						
					
						
							
							
								<option value="00972">00972-
									ISRAEL</option>
							
						
					
						
							
							
								<option value="0039">0039-
									ITALY</option>
							
						
					
						
							
							
								<option value="00225">00225-
									IVORY COAST (COTE DIVORIE)</option>
							
						
					
						
							
							
								<option value="001876">001876-
									JAMAICA</option>
							
						
					
						
							
							
								<option value="0081">0081-
									JAPAN</option>
							
						
					
						
							
							
								<option value="00962">00962-
									JORDAN</option>
							
						
					
						
							
							
								<option value="00855">00855-
									KAMPUCHEA (CAMBODIA)</option>
							
						
					
						
							
							
								<option value="007300">007300-
									KAZAKISTAN (7300)</option>
							
						
					
						
							
							
								<option value="00731">00731-
									KAZAKISTAN (731)</option>
							
						
					
						
							
							
								<option value="00732">00732-
									KAZAKISTAN (732)</option>
							
						
					
						
							
							
								<option value="00733">00733-
									KAZAKISTAN (733)</option>
							
						
					
						
							
							
								<option value="00757">00757-
									KAZAKISTAN (757)</option>
							
						
					
						
							
							
								<option value="00254">00254-
									KENYA</option>
							
						
					
						
							
							
								<option value="00996">00996-
									KIRGHISTAN</option>
							
						
					
						
							
							
								<option value="00686">00686-
									KIRIBATI</option>
							
						
					
						
							
							
								<option value="00965">00965-
									KUWAIT</option>
							
						
					
						
							
							
								<option value="00856">00856-
									LAOS</option>
							
						
					
						
							
							
								<option value="00371">00371-
									LATVIA</option>
							
						
					
						
							
							
								<option value="00961">00961-
									LEBANON</option>
							
						
					
						
							
							
								<option value="00266">00266-
									LESOTHO</option>
							
						
					
						
							
							
								<option value="00231">00231-
									LIBERIA</option>
							
						
					
						
							
							
								<option value="00218">00218-
									LIBYA</option>
							
						
					
						
							
							
								<option value="00423">00423-
									LIECHTENSTEIN</option>
							
						
					
						
							
							
								<option value="00370">00370-
									LITHVANIA</option>
							
						
					
						
							
							
								<option value="00352">00352-
									LUXUMBURG</option>
							
						
					
						
							
							
								<option value="00853">00853-
									MACAO</option>
							
						
					
						
							
							
								<option value="00389">00389-
									MACEDONIA</option>
							
						
					
						
							
							
								<option value="00261">00261-
									MADAGASCAR</option>
							
						
					
						
							
							
								<option value="00265">00265-
									MALAWI</option>
							
						
					
						
							
							
								<option value="0060">0060-
									MALAYSIA</option>
							
						
					
						
							
							
								<option value="00960">00960-
									MALDIVES</option>
							
						
					
						
							
							
								<option value="00223">00223-
									MALI</option>
							
						
					
						
							
							
								<option value="00356">00356-
									MALTA</option>
							
						
					
						
							
							
								<option value="00976">00976-
									MANGOLIA</option>
							
						
					
						
							
							
								<option value="001670">001670-
									MARIANA ISLAND</option>
							
						
					
						
							
							
								<option value="00692">00692-
									MARSHALL ISLAND</option>
							
						
					
						
							
							
								<option value="00596">00596-
									MARTINIQUE</option>
							
						
					
						
							
							
								<option value="00222">00222-
									MAURITANIA</option>
							
						
					
						
							
							
								<option value="00230">00230-
									MAURITIUS</option>
							
						
					
						
							
							
								<option value="0052">0052-
									MEXICO</option>
							
						
					
						
							
							
								<option value="00691">00691-
									MICRONESIA</option>
							
						
					
						
							
							
								<option value="00373">00373-
									MOLDOVA</option>
							
						
					
						
							
							
								<option value="00377">00377-
									MONACO</option>
							
						
					
						
							
							
								<option value="001664">001664-
									MONTSERRAT</option>
							
						
					
						
							
							
								<option value="00212">00212-
									MOROCCO</option>
							
						
					
						
							
							
								<option value="00258">00258-
									MOZAMBIQUE</option>
							
						
					
						
							
							
								<option value="0095">0095-
									MYANMAR</option>
							
						
					
						
							
							
								<option value="00264">00264-
									NAMIBIA</option>
							
						
					
						
							
							
								<option value="00674">00674-
									NAURU</option>
							
						
					
						
							
							
								<option value="00977">00977-
									NEPAL</option>
							
						
					
						
							
							
								<option value="0031">0031-
									NETHERLANDS</option>
							
						
					
						
							
							
								<option value="00599">00599-
									NETHERLANDS ANTHILLES</option>
							
						
					
						
							
							
								<option value="00687">00687-
									NEW CALEDONIA</option>
							
						
					
						
							
							
								<option value="0064">0064-
									NEW ZEALAND</option>
							
						
					
						
							
							
								<option value="00505">00505-
									NICARAGUA</option>
							
						
					
						
							
							
								<option value="00227">00227-
									NIGER</option>
							
						
					
						
							
							
								<option value="00234">00234-
									NIGERIA</option>
							
						
					
						
							
							
								<option value="00683">00683-
									NIUE ISLAND</option>
							
						
					
						
							
							
								<option value="00850">00850-
									NORTH KOREA</option>
							
						
					
						
							
							
								<option value="0047">0047-
									NORWAY</option>
							
						
					
						
							
							
								<option value="00968">00968-
									OMAN</option>
							
						
					
						
							
							
								<option value="0092">0092-
									PAKISTAN</option>
							
						
					
						
							
							
								<option value="00680">00680-
									PALAU</option>
							
						
					
						
							
							
								<option value="00970">00970-
									PALESTINE</option>
							
						
					
						
							
							
								<option value="00507">00507-
									PANAMA</option>
							
						
					
						
							
							
								<option value="00675">00675-
									PAPUA NEW GUINEA</option>
							
						
					
						
							
							
								<option value="00595">00595-
									PARAGUAY</option>
							
						
					
						
							
							
								<option value="0051">0051-
									PERU</option>
							
						
					
						
							
							
								<option value="0063">0063-
									PHILIPPINES</option>
							
						
					
						
							
							
								<option value="0048">0048-
									POLAND</option>
							
						
					
						
							
							
								<option value="001787">001787-
									PUERTO RICO</option>
							
						
					
						
							
							
								<option value="00974">00974-
									QATAR</option>
							
						
					
						
							
							
								<option value="00262">00262-
									REUNION</option>
							
						
					
						
							
							
								<option value="0040">0040-
									ROMANIA</option>
							
						
					
						
							
							
								<option value="0070">0070-
									RUSSIAN FEDERATION (70)</option>
							
						
					
						
							
							
								<option value="0071">0071-
									RUSSIAN FEDERATION (71)</option>
							
						
					
						
							
							
								<option value="0072">0072-
									RUSSIAN FEDERATION (72)</option>
							
						
					
						
							
							
								<option value="007301">007301-
									RUSSIAN FEDERATION (7301)</option>
							
						
					
						
							
							
								<option value="007302">007302-
									RUSSIAN FEDERATION (7302)</option>
							
						
					
						
							
							
								<option value="00734">00734-
									RUSSIAN FEDERATION (734)</option>
							
						
					
						
							
							
								<option value="00735">00735-
									RUSSIAN FEDERATION (735)</option>
							
						
					
						
							
							
								<option value="00738">00738-
									RUSSIAN FEDERATION (738)</option>
							
						
					
						
							
							
								<option value="00739">00739-
									RUSSIAN FEDERATION (739)</option>
							
						
					
						
							
							
								<option value="0074">0074-
									RUSSIAN FEDERATION (74)</option>
							
						
					
						
							
							
								<option value="0075">0075-
									RUSSIAN FEDERATION (75)</option>
							
						
					
						
							
							
								<option value="00774">00774-
									RUSSIAN FEDERATION (774)</option>
							
						
					
						
							
							
								<option value="0078">0078-
									RUSSIAN FEDERATION (78)</option>
							
						
					
						
							
							
								<option value="0079">0079-
									RUSSIAN FEDERATION (79)</option>
							
						
					
						
							
							
								<option value="00250">00250-
									RWANDESE REPUBLIC</option>
							
						
					
						
							
							
								<option value="00684">00684-
									SAMOA AMERICAN</option>
							
						
					
						
							
							
								<option value="00685">00685-
									SAMOA WESTERN</option>
							
						
					
						
							
							
								<option value="00378">00378-
									SAN MARINO</option>
							
						
					
						
							
							
								<option value="00966">00966-
									SAUDI ARABIA</option>
							
						
					
						
							
							
								<option value="00221">00221-
									SENEGAL</option>
							
						
					
						
							
							
								<option value="00248">00248-
									SEYCHELLES</option>
							
						
					
						
							
							
								<option value="00232">00232-
									SIERRALEONE</option>
							
						
					
						
							
							
								<option value="0065">0065-
									SINGAPORE</option>
							
						
					
						
							
							
								<option value="00421">00421-
									SLOVAK REPUBLIC</option>
							
						
					
						
							
							
								<option value="00386">00386-
									SLOVENIA</option>
							
						
					
						
							
							
								<option value="00677">00677-
									SOLOMAN ISLAND</option>
							
						
					
						
							
							
								<option value="00252">00252-
									SOMALIA DEMOCRATIC REPUBLIC</option>
							
						
					
						
							
							
								<option value="0082">0082-
									SOUTH KOREA</option>
							
						
					
						
							
							
								<option value="0094">0094-
									SRILANKA</option>
							
						
					
						
							
							
								<option value="00290">00290-
									ST. HELENA</option>
							
						
					
						
							
							
								<option value="001869">001869-
									ST. KITTS/NAVIS ISLAND</option>
							
						
					
						
							
							
								<option value="001758">001758-
									ST. LUCIA</option>
							
						
					
						
							
							
								<option value="00508">00508-
									ST. PIERRE & MIQUELIOM</option>
							
						
					
						
							
							
								<option value="00239">00239-
									ST. TOME & PRINCEP</option>
							
						
					
						
							
							
								<option value="001784">001784-
									ST. VINCENT & THE GRENADIAN</option>
							
						
					
						
							
							
								<option value="00249">00249-
									SUDAN</option>
							
						
					
						
							
							
								<option value="00597">00597-
									SURINAM</option>
							
						
					
						
							
							
								<option value="00268">00268-
									SWAZILAND</option>
							
						
					
						
							
							
								<option value="0046">0046-
									SWEDEN</option>
							
						
					
						
							
							
								<option value="0041">0041-
									SWITZERLAND</option>
							
						
					
						
							
							
								<option value="00963">00963-
									SYRIA</option>
							
						
					
						
							
							
								<option value="00886">00886-
									TAIWAN</option>
							
						
					
						
							
							
								<option value="00255">00255-
									TANZANIA</option>
							
						
					
						
							
							
								<option value="00992">00992-
									TAZAKISTAN</option>
							
						
					
						
							
							
								<option value="0066">0066-
									THAILAND</option>
							
						
					
						
							
							
								<option value="00228">00228-
									TOGOLESE REPUBLIC</option>
							
						
					
						
							
							
								<option value="00690">00690-
									TOKELAU ISLAND</option>
							
						
					
						
							
							
								<option value="00676">00676-
									TONGA</option>
							
						
					
						
							
							
								<option value="001868">001868-
									TRINIDAD & TOBAGO</option>
							
						
					
						
							
							
								<option value="00216">00216-
									TUNISIA</option>
							
						
					
						
							
							
								<option value="0090">0090-
									TURKEY</option>
							
						
					
						
							
							
								<option value="007370">007370-
									TURKMENISTAN (7370)</option>
							
						
					
						
							
							
								<option value="00993">00993-
									TURKMENISTAN (993)</option>
							
						
					
						
							
							
								<option value="001649">001649-
									TURKS & CAICOS ISLANDS</option>
							
						
					
						
							
							
								<option value="00688">00688-
									TUVALU</option>
							
						
					
						
							
							
								<option value="00971">00971-
									UAE</option>
							
						
					
						
							
							
								<option value="00256">00256-
									UGANDA</option>
							
						
					
						
							
							
								<option value="00380">00380-
									UKRAINE</option>
							
						
					
						
							
							
								<option value="0044">0044-
									United Kingdom</option>
							
						
					
						
							
							
								<option value="00598">00598-
									URUGUAY</option>
							
						
					
						
							
							
								<option value="001">001-
									USA/CANADA</option>
							
						
					
						
							
							
								<option value="00998">00998-
									UZBEKISTAN</option>
							
						
					
						
							
							
								<option value="00678">00678-
									VANAUTU</option>



								<option value="0058">0058-
									VENEZUELA</option>



								<option value="0084">0084-
									VIETNAM</option>





								<option value="001284">001284-
									VIRGIN ISLAND (BRI)</option>
							
						

								<option value="001340">001340-
									VIRGIN ISLAND (USA)</option>
							
						
					
						
							
							
								<option value="00681">00681-
									WALLIS & FUTUNA ISLAND</option>
							
						
					
						
							
							
								<option value="00967">00967-
									YEMEN</option>
							
						
					
						
							
							
								<option value="00381">00381-
									YUGOSLAVIA</option>
							
						
					
						
							
							
								<option value="00243">00243-
									ZAIRE</option>
							
						
					
						
							
							
								<option value="00260">00260-
									ZAMBIA</option>
							
						
					
			
								<option value="00263">00263-
									ZIMBABWE</option>
											
							</select>
					</div> 
					<div class="col-md-3 py-2">
						<input type="number" class="form-control customform eng_xxxs fg-darkCrimson" id="MOBILENUMBER" aria-describedby="MOBILENUMBER" placeholder="Mobile Number" required>
						<label id="MOBILENUMBER_LABEL"></label>
					</div> 
				</div> 

				<div class="row customformrow">
					<div class="col-md-2 py-2">
						<label for="VERIFICATIONCODE" class="eng_xxxs fg-darkBrown">Verification Code</label>
					</div> 
					<div class="col-md-3 py-2">
						
					</div> 

					<div class="col-md-2 py-2">
						<label for="VERIFICATIONCODE" class="eng_xxxs fg-darkBrown"><span class="text-danger">*</span>  Verification Code:</label>
					</div> 
					<div class="col-md-5 py-2">
						<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="VERIFICATIONCODE" aria-describedby="VERIFICATIONCODE" placeholder="Enter Verification Code" required>
					</div> 
				</div> 

				<div class="row mb-5">
					<div class="col-md-12 py-2 d-flex">
						<button type="reset" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i> Reset </button> 
						&nbsp;
						<button type="submit" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i> Save </button>
					</div> 
				</div> 

				<!-- <div class="row customformrow mb-5">
					<div class="col-md-6 py-2 justify-content-center d-flex">
						<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i> Reset </button> 
					</div>
					<div class="col-md-6 py-2 justify-content-center d-flex">	
						<button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i> Save </button>
					</div> 
				</div>  -->

			</form>
				
		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->

@endsection

@section('customscripts')
@include('serviceview.kseb_user_registration_script')
@endsection
