@extends('layouts.matri')


@section('content')
<section id="center" class="clearfix">
   <div class="col-sm-12 space_all">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
   <div class="register_right">
    <div class="register_right_inner clearfix">
     <div class="center_3">
      @if(session()->has('message'))
      <p class="alert {{ session('alert-success') }}">{{ session('message') }}</p>
       @endif
      <h2 class="text-center">Your partner search begins with a</br>
                              FREE REGISTRATION!</h2>
     </div>
     <form action="{{route('userreg')}}" method="POST">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Occupation<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <select class="input-text" name="occupation">
    <option value="Religion">Select Occupation</option>
    <option value="Private job">Private job</option>
    <option value="Government Job">Government Job</option>
    <option value="Business">Business</option>
   </select>
     </div>
     </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p> First Name<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="text" name="first_name" class="input-text" placeholder="">
     </div>
           @if ($errors->has('first_name'))
          <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
     </div>
     <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p> last Name<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="text" name="last_name" class="input-text" placeholder="">
     </div>
      @if ($errors->has('last_name'))
          <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
     </div>
     <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Gender<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="radio" name="gender" class="input-text" placeholder="" value="Male">
       <label for="male">Male</label><br>
       <input type="radio" name="gender" class="input-text" placeholder="" value="Female">
       <label for="Female">Female</label>
     </div>
      @if ($errors->has('gender'))
          <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
     </div>
     <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Annual income<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="text" name="annual_income" class="input-text" placeholder="">
        </div>
         @if ($errors->has('annual_income'))
          <span class="text-danger">{{ $errors->first('annual_income') }}</span>
            @endif
     </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Date of birth<p>
        </div>
     </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
        <input type="date" id="birthday" name="dob">
     </div>
      @if ($errors->has('dob'))
          <span class="text-danger">{{ $errors->first('dob') }}</span>
            @endif
     </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Family Type<p>
        </div>
        </div>
        <div class="col-sm-6 register_right_inner_1 space_left">
       <select class="input-text" name="family_type">
    <option value="">Select Family type</option>
    <option value="Joint family">Joint family</option>
    <option value="Nuclear family">Nuclear family</option>
   </select>
     </div>
     </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Manglik<p>
        </div>
        </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
         <select class="input-text" name="Manglik">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
   </select>
        </div>
       </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Email ID<p>
        </div>
        </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="email" name="email" class="input-text" placeholder="">
     </div>
      @if($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
     </div>
      <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Password<p>
        </div>
        </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <input type="text" name="password" class="input-text" placeholder="">
     </div>
     @if($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
     @endif
     </div>
     <h3><b>Partner Preference</b></h3><br>
     <div class="clearfix clear_1">
            <div class="center_4">
            <p>Annual income<p>
            </div><br>
            <div id="slider-range"></div>
            <div class="col-sm-8 register_right_inner_1 space_left">
           <input type="text" id="amount" name="p_annual_income" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </div>
      </div>
     <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Family Type<p>
        </div>
        </div>
        <div class="col-sm-6 register_right_inner_1 space_left">
       <select class="input-text" name="p_family_type">
    <option value="">Select Family type</option>
    <option value="Joint family">Joint family</option>
    <option value="Nuclear family">Nuclear family</option>
   </select>
     </div>
     </div>
     <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Occupation<p>
        </div>
       </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
       <select class="input-text" name="p_occupation">
    <option value="Religion">Select Occupation</option>
    <option value="Private job">Private job</option>
    <option value="Government Job">Government Job</option>
    <option value="Business">Business</option>
   </select>
     </div>
     </div>
       <div class="clearfix clear_1">
        <div class="col-sm-4 register_right_inner_1 space_left">
        <div class="center_4">
        <p>Manglik<p>
        </div>
        </div>
        <div class="col-sm-8 register_right_inner_1 space_left">
         <select class="input-text" name="p_manglik">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
   </select>
        </div>
       </div>

      <div class="clearfix col-sm-12 clear_2 space_all">
       <div class="col-sm-5 space_all">
        <div class="col-sm-12 space_all">
         <div class="col-sm-1 space_all">
          <div class="center_6">
           <h4><a href="#"><input type="checkbox"></a></h4>
          </div>

         </div>
         <div class="col-sm-11 space_all">
          <div class="center_5">
         <a href="#"><span class="well_5">I have read and agree to the T&C and Privacy Policy</span></a>
        </div>
         </div>
        </div>
       </div>
       <div class="col-sm-7 space_all">
        <button class="btn btn-primary" type="submit">REGISTER FREE</p></button>
       </div>
     </div>
   </form>
    </div>
   </div>
  </div>
   </div>
   <div class="col-sm-12 space_all">
    <div class="center_9 clearfix">
     <div class="col-sm-4">
     <div class="col-sm-12">
      <div class="col-sm-2">
       <div class="center_7">
        <i class="fa fa-mobile"></i>
       </div>
      </div>
      <div class="col-sm-10">
       <div class="center_8">
        <p class="well_4 clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
       </div>
      </div>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="col-sm-12">
      <div class="col-sm-2">
       <div class="center_7">
        <i class="fa fa-rocket"></i>
       </div>
      </div>
      <div class="col-sm-10">
       <div class="center_8">
        <p class="well_4 clearfix">Lorem ipsum dolor sit amet consectetur Integer nec</p>
       </div>
      </div>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="col-sm-12">
      <div class="col-sm-2">
       <div class="center_7">
        <i class="fa fa-user"></i>
       </div>
      </div>
      <div class="col-sm-10">
       <div class="center_8">
        <p class="well_6 clearfix">Lorem ipsum dolor sit amet consectetur adipiscing </p>
       </div>
      </div>
     </div>
     </div>
    </div>
   </div>
</section>
<section id="middle">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="middle_1">
     <h2>Sed cursus ante dapibus diam.Sed.</h2>
     <p>FUSCE NEC TELLUS SED AUGUE</p>
    </div>
    </div>
     <div class="col-sm-12 space_all">
       <div class="col-sm-4 space_all">
       <div class="col-sm-12 space_all">
        <div class="col-sm-1 space_all">
         <div class="middle_inner">
          <a href="#"><input type="checkbox"></a>
         </div>
        </div>
        <div class="col-sm-2 space_all">
         <div class="middle_3">
          <h5>Fusce</h5>
         </div>
        </div>
        <div class="col-sm-1 space_all">
         <div class="middle_2">
          <a href="#"><input type="checkbox"></a>
         </div>
        </div>
        <div class="col-sm-2 space_all">
         <div class="middle_3">
          <p>Nulla</p>
         </div>
        </div>
        <div class="col-sm-1 space_all">
         <div class="middle_4">
          <p>Age</p>
         </div>
        </div>
        <div class="col-sm-2 space_all">
         <div class="middle_5">
          <select class="input-text" name="expiry_month" id="expiry_month">
               <option>01</option>
                <option value="01">02</option>
                <option value="02">03</option>
                <option value="03">04</option>
                <option value="04">05</option>
                <option value="05">06</option>
                <option value="06">07</option>
                <option value="07">08</option>
                <option value="08">09</option>
                <option value="09">10</option>
              </select>
         </div>
        </div>
        <div class="col-sm-1 space_all">
         <div class="middle_4">
          <h5>To</h5>
         </div>
        </div>
        <div class="col-sm-2 space_all">
         <div class="middle_5">
          <select class="input-text" name="expiry_month" id="expiry_month">
               <option>05</option>
                <option value="01">02</option>
                <option value="02">03</option>
                <option value="03">04</option>
                <option value="04">05</option>
                <option value="05">06</option>
                <option value="06">07</option>
                <option value="07">08</option>
                <option value="08">09</option>
                <option value="09">10</option>
              </select>
         </div>
        </div>
       </div>
      </div>
      <div class="col-sm-8 space_all">
       <div class="col-sm-12 space_all">
        <div class="col-sm-5">
         <div class="middle_6">
          <select class="input-text">
            <option value="Religion">Select Matrimony Profile for</option>
            <option value="Hindu">Hindu</option>
            <option value="Muslim - Shia">Muslim - Shia</option>
            <option value="Muslim - Sunni">Muslim - Sunni</option>
            <option value="Muslim - Others">Muslim - Others</option>
            <option value="Christian">Christian</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain - Digambar">Jain - Digambar</option>
            <option value="Jain - Shwetambar">Jain - Shwetambar</option>
            <option value="Jain - Others">Jain - Others</option>
            <option value="Parsi">Parsi</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Inter-Religion">Inter-Religion</option>
         </select>
         </div>
        </div>
        <div class="col-sm-5">
         <div class="middle_6">
          <select class="input-text">
            <option value="Religion">Inter-Religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Muslim - Shia">Muslim - Shia</option>
            <option value="Muslim - Sunni">Muslim - Sunni</option>
            <option value="Muslim - Others">Muslim - Others</option>
            <option value="Christian">Christian</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain - Digambar">Jain - Digambar</option>
            <option value="Jain - Shwetambar">Jain - Shwetambar</option>
            <option value="Jain - Others">Jain - Others</option>
            <option value="Parsi">Parsi</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Inter-Religion">Inter-Religion</option>
         </select>
         </div>
        </div>
        <div class="col-sm-2">
         <div class="middle_6">
          <p><a href="#">SEARCH</a></p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-sm-12 space_all">
      <div class="col-sm-10 space_all"></div>
      <div class="col-sm-2 space_all">
        <div class="middle_10 clearfix">
         <div class="col-sm-5 space_all">
         <div class="middle_7">
          <p><a href="#">Search by ID</a></p>
         </div>
        </div>
         <div class="col-sm-1 space_all">
         <div class="middle_8">
          <p>|</p>
         </div>
        </div>
        <div class="col-sm-5 space_all">
         <div class="middle_9">
          <p><a href="#">More Search</a></p>
         </div>
        </div>
        <div class="col-sm-1 space_all"></div>
        </div>
       </div>
      </div>
      <div class="col-sm-12 space_all">
       <div class="middle_11">
        <h3>TORQUENT PER CONUBIA NOSTRA</h3>
       </div>
       <div class="col-sm-3 space_all">
        <div class="middle_12">
          <ul>
              <li><a href="#">Fusce Nec Tellus</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
              <li><a href="#">Fusce Nec Tellus Sed Augue Semper</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
              <li><a href="#">Nibh Elementum Imperdiet</a></li>
          </ul>
        </div>
       </div>
       <div class="col-sm-3 space_all">
        <div class="middle_12">
          <ul>
              <li><a href="#">Nec Tellus Sed Augue</a></li>
              <li><a href="#">Lorem Ipsum Dolor Sit </a></li>
              <li><a href="#">Nulla Quis Sem At Nibh Elementum</a></li>
              <li><a href="#">Praesent Mauris.Fusce</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
          </ul>
        </div>
       </div>
       <div class="col-sm-3 space_all">
        <div class="middle_12">
          <ul>
              <li><a href="#">Fusce Nec Tellus</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
              <li><a href="#">Fusce Nec Tellus Sed Augue Semper</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
              <li><a href="#">Nibh Elementum Imperdiet</a></li>
          </ul>
        </div>
       </div>
       <div class="col-sm-3 space_all">
        <div class="middle_12">
          <ul>
              <li><a href="#">Nec Tellus Sed Augue</a></li>
              <li><a href="#">Lorem Ipsum Dolor Sit </a></li>
              <li><a href="#">Nulla Quis Sem At Nibh Elementum</a></li>
              <li><a href="#">Praesent Mauris.Fusce</a></li>
              <li><a href="#">Sed Dignissim Lacinia</a></li>
          </ul>
        </div>
       </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="work">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-5">
     <div class="work_1">
      <p><a href="#"><img src="img/2.png" width="100%"></a></p>
     </div>
    </div>
    <div class="col-sm-7">
     <div class="work_2">
      <h2>Fusce Nec Tellus Sed</h2>
      <p>Lorem Ipsum Dolor Sit Consectetur Adipiscing</br> Cursus Ante Dapibus Diam!</p>
     </div>
     <div class="col-sm-12 space_all">
      <div class="col-sm-8 space_all">
       <div class="col-sm-12 space_all">
        <div class="col-sm-4 space_all">
         <div class="work_3">
          <select class="input-text">
            <option value="91">+91</option>
            <option value="1">+1</option>
            <option value="44">+44</option>
            <option value="971">+971</option>
            <option value="1">+1</option>
            <option value="60">+60</option>
            <option value="65">+65</option>
            <option value="93">+93</option>
            <option value="355">+355</option>
            <option value="213">+213</option>
            <option value="684">+684</option>
            <option value="376">+376</option>
            <option value="244">+244</option>
            <option value="1200">+1200</option>
            <option value="2001">+2001</option>
            <option value="1201">+1201</option>
            <option value="54">+54</option>
            <option value="374">+374</option>
            <option value="297">+297</option>
            <option value="247">+247</option>
            <option value="61">+61</option>
            <option value="43">+43</option>
            <option value="994">+994</option>
            <option value="1202">+1202</option>
            <option value="973">+973</option>
            <option value="880">+880</option>
            <option value="1203">+1203</option>
            <option value="375">+375</option>
            <option value="32">+32</option>
            <option value="501">+501</option>
            <option value="229">+229</option>
            <option value="1204">+1204</option>
            <option value="975">+975</option>
            <option value="591">+591</option>
            <option value="387">+387</option>
            <option value="267">+267</option>
            <option value="55">+55</option>
            <option value="1205">+1205</option>
            <option value="673">+673</option>
            <option value="359">+359</option>
            <option value="226">+226</option>
            <option value="257">+257</option>
            <option value="855">+855</option>
            <option value="237">+237</option>
            <option value="238">+238</option>
            <option value="1206">+1206</option>
            <option value="236">+236</option>
            <option value="235">+235</option>
            <option value="56">+56</option>
            <option value="86">+86</option>
            <option value="2002">+2002</option>
            <option value="2003">+2003</option>
            <option value="57">+57</option>
            <option value="269">+269</option>
            <option value="242">+242</option>
            <option value="682">+682</option>
            <option value="506">+506</option>
            <option value="385">+385</option>
            <option value="53">+53</option>
            <option value="357">+357</option>
            <option value="420">+420</option>
            <option value="45">+45</option>
            <option value="253">+253</option>
            <option value="1207">+1207</option>
            <option value="1208">+1208</option>
            <option value="670">+670</option>
            <option value="593">+593</option>
            <option value="20">+20</option>
            <option value="503">+503</option>
            <option value="240">+240</option>
            <option value="291">+291</option>
            <option value="372">+372</option>
            <option value="251">+251</option>
            <option value="500">+500</option>
            <option value="298">+298</option>
            <option value="679">+679</option>
            <option value="358">+358</option>
            <option value="33">+33</option>
            <option value="594">+594</option>
            <option value="689">+689</option>
            <option value="241">+241</option>
            <option value="220">+220</option>
            <option value="995">+995</option>
            <option value="49">+49</option>
            <option value="223">+223</option>
            <option value="350">+350</option><option value="30">+30</option><option value="299">+299</option>
            <option value="1209">+1209</option><option value="590">+590</option><option value="1210">+1210</option>
            <option value="502">+502</option><option value="224">+224</option><option value="245">+245</option>
            <option value="592">+592</option><option value="509">+509</option><option value="504">+504</option>
            <option value="852">+852</option><option value="36">+36</option><option value="354">+354</option>
            <option value="91" selected="selected">+91</option><option value="62">+62</option><option value="98">+98</option>
            <option value="964">+964</option><option value="353">+353</option><option value="972">+972</option><option value="39">+39</option>
            <option value="225">+225</option><option value="1211">+1211</option><option value="81">+81</option><option value="962">+962</option>
            <option value="7">+7</option><option value="254">+254</option><option value="686">+686</option><option value="82">+82</option>
            <option value="965">+965</option><option value="996">+996</option><option value="856">+856</option><option value="371">+371</option><option value="961">+961</option><option value="266">+266</option><option value="231">+231</option><option value="218">+218</option><option value="423">+423</option><option value="370">+370</option><option value="352">+352</option><option value="853">+853</option><option value="389">+389</option><option value="261">+261</option><option value="265">+265</option><option value="60">+60</option><option value="960">+960</option><option value="356">+356</option><option value="692">+692</option><option value="596">+596</option><option value="222">+222</option><option value="230">+230</option><option value="52">+52</option><option value="691">+691</option><option value="373">+373</option><option value="377">+377</option><option value="976">+976</option><option value="1212">+1212</option><option value="212">+212</option><option value="258">+258</option><option value="95">+95</option><option value="264">+264</option><option value="674">+674</option><option value="977">+977</option><option value="31">+31</option><option value="599">+599</option><option value="687">+687</option><option value="64">+64</option><option value="505">+505</option><option value="227">+227</option><option value="234">+234</option><option value="683">+683</option><option value="1213">+1213</option><option value="47">+47</option><option value="968">+968</option><option value="92">+92</option><option value="680">+680</option><option value="507">+507</option><option value="675">+675</option><option value="595">+595</option><option value="51">+51</option><option value="63">+63</option><option value="48">+48</option><option value="351">+351</option><option value="1214">+1214</option><option value="974">+974</option><option value="262">+262</option><option value="40">+40</option><option value="7">+7</option><option value="250">+250</option><option value="290">+290</option><option value="1215">+1215</option><option value="1216">+1216</option><option value="1217">+1217</option><option value="685">+685</option><option value="378">+378</option><option value="239">+239</option><option value="966">+966</option><option value="221">+221</option><option value="248">+248</option><option value="232">+232</option><option value="65">+65</option><option value="421">+421</option><option value="386">+386</option><option value="252">+252</option><option value="27">+27</option><option value="34">+34</option><option value="94">+94</option><option value="249">+249</option><option value="597">+597</option><option value="268">+268</option><option value="46">+46</option><option value="41">+41</option><option value="963">+963</option><option value="886">+886</option><option value="992">+992</option><option value="255">+255</option><option value="66">+66</option><option value="228">+228</option><option value="690">+690</option><option value="676">+676</option><option value="1218">+1218</option><option value="216">+216</option><option value="90">+90</option><option value="993">+993</option><option value="1219">+1219</option><option value="688">+688</option><option value="256">+256</option><option value="380">+380</option><option value="971">+971</option><option value="1220">+1220</option><option value="44">+44</option><option value="598">+598</option><option value="998">+998</option><option value="678">+678</option><option value="379">+379</option><option value="58">+58</option><option value="84">+84</option><option value="681">+681</option><option value="967">+967</option><option value="381">+381</option><option value="260">+260</option><option value="263">+263</option><option value="243">+243</option>
                                    </select>
       </select>
         </div>
        </div>
        <div class="col-sm-4 space_all">
         <div class="work_4">
          <input type="text" class="input-text" placeholder="Enter your mobile number">
         </div>
        </div>
        <div class="col-sm-4 space_all">
         <div class="work_5">
          <p><a href="#">SEARCH</a></p>
         </div>
        </div>
       </div>
      </div>
      <div class="col-sm-4"></div>
     </div>
       <div class="col-sm-12 space_all">
        <div class="col-sm-3 space_all">
         <div class="col-sm-12 space_all">
          <div class="work_inner clearfix">
           <div class="col-sm-2 space_all">
           <div class="work_6">
            <p><a href="#"><img src="img/3.png"></a></p>
           </div>
          </div>
          <div class="col-sm-10 space_all">
           <div class="work_7">
            <h5><a href="#">GET IT ON</a></h5>
            <p><a href="#">Google Play</a></p>
           </div>
          </div>
          </div>
         </div>
        </div>
        <div class="col-sm-3 space_all">
         <div class="col-sm-12 space_all">
          <div class="work_inner clearfix">
           <div class="col-sm-2 space_all">
           <div class="work_6">
            <p><a href="#"><i class="glyphicon glyphicon-phone pull-left"></i></a></p>
           </div>
          </div>
          <div class="col-sm-10 space_all">
           <div class="work_7">
            <h5><a href="#">Available on the</a></h5>
            <p><a href="#">App Store</a></p>
           </div>
          </div>
          </div>
         </div>
        </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="service">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-6">
     <div class="service_1">
      <h2>Dignissim Lacinia</h2>
      <h4> Fusce nec tellus sed augue semper porta. Mauris massa.</h4>
      <p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
     </div>
     <div class="service_2">
      <p><a href="#">VIEW MORE</a></p>
     </div>
    </div>
    <div class="col-sm-6">
     <div class="service_3">
      <p><a href="#"><img src="img/5.jpg" width="100%"></a></p>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="reviews">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-5">
    </div>
    <div class="col-sm-7">
     <div class="reviews_1">
      <h2><a href="#"><i class="fa fa-users"></i>Augue</a></h2>
      <p>Dignissim</p>
     </div>
      <div class="reviews_2">
       <p>Dignissim Lacinia<br>Fusce Nec Tellus<br>Vestibulum</p>
      </div>
       <div class="reviews_3">
       <p><a href="#">VIEW MORE</a></p>
       </div>
        <div class="reviews_4">
          <p><a href="#"> Sed Dignissim Lacinia Nunc >></a></p>
        </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="money">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-6">
     <div class="money_1">
      <h2>Consectetur Adipiscing</h2>
      <h4>Torquent Per Conubia Nostra,Per?</br> Vestibulum Lacinia Arcu Eget</br> Mauris Massa.</h4>
     </div>
     <div class="money_2">
      <p><a href="#">VIEW MORE</a></p>
     </div>
    </div>
    <div class="col-sm-6">
     <div class="money_3">
      <p><a href="#"><img src="img/7.jpg" width="100%"></a></p>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="related">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-6">
     <div class="related_1">
      <p><a href="#"><img src="img/9.jpg" width="100%"></a></p>
     </div>
    </div>
    <div class="col-sm-6">
     <div class="related_inner clearfix">
      <div class="related_1">
      <h2>Integer Nec Odionec</h2>
      <h4>Fusce Nec Tellus Sed Augue Semper </br> Vestibulum Lacinia Arcu Eget Nulla.</h4>
      <p>Sed Dignissim Lacinia Nunc<br>Curabitursodales Ligula In Libero.</p>
     </div>
     <div class="related_2">
      <p><a href="#">VIEW MORE</a></p>
     </div>
     </div>
    </div>
   </div>
    <div class="col-sm-12">
     <div class="related_inner_1">
      <div class="col-sm-4">
      <div class="related_3">
       <h3><a href="#"><i class="fa fa-camera"></i>Dignissim</a></h3>
       <p><a href="#">Conubia Nostra</a></p>
      </div>
      <div class="related_4">
       <p><a href="#">View More</a></p>
      </div>
     </div>
     <div class="col-sm-4">
      <div class="related_5">
       <h3><a href="#"><span class="well_16">Imperdiet</span>Nulla Quis</a></h3>
       <p><a href="#">Duis Sagittis</a></p>
      </div>
      <div class="related_4">
       <p><a href="#">View More</a></p>
      </div>
     </div>
     <div class="col-sm-4">
      <div class="related_5">
       <h3><a href="#"><span class="well_16">Elementum</span>Semper Porta</a></h3>
       <p><a href="#">Elementum Imperdiet</a></p>
      </div>
      <div class="related_4">
       <p><a href="#">View More</a></p>
      </div>
     </div>
     </div>
    </div>
  </div>
 </div>
</section>
<section id="success">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="success_1">
     <h2>Fusce Nec Tellus Sed Augue Semper</h2>
    </div>
    <div class="col-sm-4">
     <div class="success_inner clearfix">
      <div class="success_2">
       <p><img src="img/10.jpg"></a></p>
     </div>
      <div class="success_3">
       <h4><a href="#">Dignissim Lacinia</a></h4>
       <p><a href="#">"Nibh Elementum Imperdiet.Duis Sagittis</br> Torquent Per Conubia Nostra."</a></p>
      </div>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="success_inner clearfix">
      <div class="success_2">
       <p><img src="img/11.jpg"></a></p>
     </div>
      <div class="success_3">
       <h4><a href="#">Elementum Imperdiet</a></h4>
       <p><a href="#">"Nibh Elementum Imperdiet.Duis Sagittis</br> Torquent Per Conubia Nostra."</a></p>
      </div>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="success_inner clearfix">
      <div class="success_2">
       <p><img src="img/12.jpg"></a></p>
     </div>
      <div class="success_3">
       <h4><a href="#"> Cursus Dapibus</a></h4>
       <p><a href="#">"Nibh Elementum Imperdiet.Duis Sagittis</br> Torquent Per Conubia Nostra."</a></p>
      </div>
     </div>
    </div>
   </div>
   <div class="col-sm-12 space_all">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
     <div class="success_4">
      <p><a href="#">View More</a></p>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="place">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="place_1">
     <h4>Duis Sagittis Ipsum</h4>
     <p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum.
     Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris
     torquent per conubia nostra,per incepto <a href="#">Nunc,</a> <a href="#">Inceptos,</a> <a href="#"> Elementum Imperdiet,</a> <a href="#">Sagittis,</a>
     <a href="#">Mauris,</a> <a href="#">Nulla,</a> <a href="#">Porta,</a> <a href="#">Conubia Nostra</a> and <a href="#">Ligula.</a></p>

     <p> Nulla Quis Sem At Nibh Elementum Imperdiet.<a href="#">Nulla,</a> <a href="#">Elementum,</a> <a href="#">Ipsum,</a> <a href="#">Arcu Eget,</a>
     <a href="#">Fusce Nec,</a> <a href="#">Dignissim</a> and <a href="#">Sagittis Ipsum.</a></p>

     <p>Torquent Per Conubia Nostra, Per Inceptos . Curabitursodales Ligula In Libero
     <a href="#">Fusce,</a> <a href="#">Fusce Nec Tellus Augue,</a> <a href="#"> Mauris Massa,</a> <a href="#">Vestibulum Lacinia Arcu,</a>
     <a href="#">Dignissim Lacinia,</a>
     <a href="#">Dapibus,</a> <a href="#"> Lacinia,</a> <a href="#">Lacinia,</a> and<a href="#"> Mauris Massa.</a></p>

     <p>Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla
     <a href="#">Fusce Nec, <a href="#">Conubia Nostra,</a> <a href="#">Elementum</a>  and<a href="#">Vestibulum </a> Lacinia Arcu Eget Nulla
     <a href="#">Dapibus,</a> <a href="#">Dignissim,</a> <a href="#">Vestibulum,</a> <a href="#">Conubia,</a> <a href="#">Curabitursodales,
     </a> <a href="#"> Fusce Nec Tellus Sed.</a></p>

      <p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla!</p>
    </div>
   </div>
    <div class="col-sm-12 space_all">
     <div class="place_8 clearfix">
      <div class="col-sm-4">
      <div class="place_4 clearfix">
       <div class="place_2">
        <h4>SED DIGNISSIM LACINIA NUNC</h4>
       </div>
       <div class="col-sm-12 space_all">
       <div class="col-sm-4 space_all">
        <div class="place_3">
           <ul>
            <li><a href="#">› Lacinia</a></li>
            <li><a href="#">› Torquent</a></li>
            <li><a href="#">› Conubia</a></li>
            <li><a href="#">› Lacinia</a></li>
            <li><a href="#">› Semper</a></li>
         </ul>
       </div>
       </div>
       <div class="col-sm-4 space_all">
        <div class="place_3">
           <ul>
            <li><a href="#">› Praesent</a></li>
            <li><a href="#">› Dapibus</a></li>
            <li><a href="#">› Augue</a></li>
            <li><a href="#">› Mauris</a></li>
            <li><a href="#">› Nostra</a></li>
         </ul>
       </div>
       </div>
       <div class="col-sm-4 space_all">
        <div class="place_3">
           <ul>
            <li><a href="#">› Lacinia</a></li>
            <li><a href="#">› Fusce</a></li>
            <li><a href="#">› Conubia</a></li>
            <li><a href="#">› Nostra</a></li>
            <li><a href="#">› Tellus</a></li>
         </ul>
       </div>
       </div>
      </div>
      </div>
     </div>
      <div class="col-sm-3">
      <div class="place_6">
        <h4>PRAESENT MAURIS</h4>
         <ul>
              <li><a href="#">› Fusce Nec Tellus</a></li>
              <li><a href="#">› Fusce Nec</a></li>
              <li><a href="#">› Consectetur</a></li>
              <li><a href="#">› Nunc</a></li>
              <li><a href="#">› Mauris Massa</a></li>
         </ul>
       </div>
     </div>
     <div class="col-sm-3">
      <div class="place_6">
        <h4>DUIS SAGITTIS IPSUM</h4>
         <ul>
              <li><a href="#">› Dignissim Lacinia</a></li>
              <li><a href="#">› Consectetur Adipiscing</a></li>
              <li><a href="#">› Vestibulum Lacinia</a></li>
              <li><a href="#">› Dignissim Lacinia</a></li>
              <li><a href="#">› Elementum Imperdiet</a></li>
         </ul>
       </div>
     </div>
     <div class="col-sm-2">
      <div class="place_7">
        <h4>DIGMISSIM LACINIA</h4>
         <ul>
              <li><a href="#">› Fusce Nec Tellus</a></li>
              <li><a href="#">› Dignissim Lacinia</a></li>
              <li><a href="#">› Vestibulum Lacinia</a></li>
         </ul>
       </div>
     </div>
     </div>
    </div>
    <div class="col-sm-12 space_all">
     <div class="place_9">
      <p><span class="well_17">DIGMISSIM:</span> <a href="#">Duis Sagittis</a> | <a href="#">Conubia Nostra</a> |<a href="#"> Mauris Massa</a> |
      <a href="#"> Sed Nisi</a> |<a href="#"> Conubia</a> | <a href="#">Elementum</a> | <a href="#">Conubia Nostra</a> | <a href="#">Lacinia</a> |
      <a href="#">Cursus Ante</a> | <a href="#"> Adipiscing</a> | <a href="#">Lacinia Nunc</a> | <a href="#">Vestibulum Lacinia</a> |
      <a href="#">Duis Sagittis</a> | <a href="#">Conubia Nostra</a> | <a href="#">Fusce Nec Tellus </a>| <a href="#">Elementum Imperdiet</a> |
      <a href="#">Praesent Mauris</a></p>
     </div>
    </div>
    <div class="col-sm-12 space_all">
     <div class="place_13 clearfix">
      <div class="col-sm-8 space_all">
      <div class="place_10">
      <p><span class="well_17">SED CURSUS ANTE DAPIBUS:</span> <a href="#">Duis Sagittis</a> | <a href="#">Nibh Elementum</a>
      |<a href="#"> Semper Porta</a> | <a href="#"> Fusce Nec</a> |<a href="#"> Integer</a> | <a href="#">Elementum</a>
      | <a href="#">Conubia Nostra</a> | <a href="#">Lacinia</a> <a href="#">Fusce Nec</a> | <a href="#">Vestibulum</a>
      | <a href="#">Praesent Mauris</a> | <a href="#">Dignissim Lacinia</a> | <a href="#">Vestibulum Lacinia</a> |
      <a href="#">Sed Dignissim</a> | <a href="#">Lacinia Arcu Eget </a>| <a href="#">Nibh Elementum</a> | <a href="#">Duis Sagittis</a></p>
     </div>
     </div>
     <div class="col-sm-2">
      <div class="place_11">
       <h4>CONUBIA NOSTRA:</h4>
        <ul>
            <li class="well_18"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="well_19"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="well_20"><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
      </div>
     </div>
     <div class="col-sm-2">
      <div class="place_12">
       <h4>Sed Dignissim Lacinia Nunc</h4>
       <p>Vestibulum Lacinia Arcu Eget Nulla.</p>
      </div>
     </div>
     </div>
    </div>
    <div class="col-sm-12">
     <div class="place_14">
      <p class="text-center">© 2013 Your Website Name. All Rights Reserved. Design by<a href="http://www.TemplateOnWeb.com"> Template On Web</a> </p>
     </div>
    </div>
  </div>
 </div>
</section>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    /*****Fixed Menu******/
    var secondaryNav = $('.cd-secondary-nav'),
       secondaryNavTopPosition = secondaryNav.offset().top;
        $(window).on('scroll', function(){
            if($(window).scrollTop() > secondaryNavTopPosition ) {
                secondaryNav.addClass('is-fixed');
            } else {
                secondaryNav.removeClass('is-fixed');
            }
        });
});

$(document).ready(function() {
  $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
})
    </script>
