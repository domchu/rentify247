@extends('layouts.admin')

@section('title', 'Create Team Members')



@section('content')
    <div class="bg-gray-100">
        <div>
            <h2 class="font-semibold text-xl text-[#000] bg-white w-full bottom-4 lg:px-8 md:px-3 sm-2 lg:pt-7 md:pt-5 sm:pt-3">
                Add Team Member
            </h2>
        </div>
        
        <div class="py-12">

            {{-- success mesage --}}
            <x-success-status class="mb-4" :status="session('message')" />

            {{-- Error Message --}}
             <x-validation-errors class="mb-4" :errors="session('message')" />

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="{{ url('team/create')}}" method="POST">
                        @csrf
                        {{-- names --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="surname" :value="old('surname')" required autofocus autocomplete="surname"
                                placeholder="Surname" />
                            <x-input-label for="floatingInput" :value="__('Surname')" />
                            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                        </div>
                        <div class=" form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full px-3" type="text"
                                name="other_name" :value="old('other_name')" required autofocus autocomplete="other_name"
                                placeholder="Other Names" />
                            <x-input-label for="floatingInput" :value="__('Other Names')" />
                            <x-input-error :messages="$errors->get('other_name')" class="mt-2" />
                        </div>
                        {{-- email --}}
                        <div class="form-floating mb-3 ">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="email"
                                placeholder="name@example.com" />
                            <x-input-label for="floatingInput" :value="__('Email Address')" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- phone --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full " type="text"
                                name="contact" :value="old('contact')" required autofocus autocomplete="contact"
                                placeholder="Enter Phone Number" />
                            <x-input-label for="floatingInput" :value="__('Phone Number')" />
                            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                        </div>
                        {{-- position --}}
                        <div>
                            <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0 form-control"
                                aria-label="Large select example" name="position" id="name">
                                <option selected>Title</option>
                                <option value="Chief Tech Officer" name="chief_tech">Chief Tech Officer(CTO)</option>
                                <option value="Project Manager" name="manager">Project Manager</option>
                                <option value="Front-End Developer" name="front_end">Front-End Developer</option>
                                <option value="Back-End Developer" name="back_end">Back-End Developer</option>
                                <option value="Full Stack Developer(MERN)" name="mern">Full Stack Developer(MERN)
                                </option>
                                <option value="Product Designer(UXUI)" name="designer">Product Designer(UXUI)</option>
                                <option value="Penetration Tester" name="pen_test">Penetration Tester</option>
                                <option value="Full Stack Developer(LAMP)" name="lamp">Full Stack Developer(LAMP)
                                </option>
                                <option value="Quality Assurance" name="quality_assurance">Quality Assurance</option>
                                <option value="Cloud Engineer" name="cloud_engineer">Cloud Engineer</option>
                                <option value="Bridgekode Instructor" name="bridgekode instructor">Bridgekode Instructor
                                </option>
                                <option value="Mobile App Developer" name="mobile_app_developer">Mobile App Developer
                                </option>
                            </select>
                        </div>
                       
                        {{-- Date of birth --}}
                        <div class="row justify-content-between">
                            <div class="mb-3 col-6 mt-3">
                            <x-input-label for="date_of_birth" :value="__('Date Of Birth')" />
                            <x-text-input id="date_of_birth" class="block mt-1 w-full my-4 py-3 sm:py-0" type="date"
                                name="date_of_birth" :value="old('date_of_birth')" pattern="\d{4}-\d{2}-\d{2}" required autofocus
                                autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>
                            {{-- photo --}}
                            <div class="mb-3 col-6 mt-3">
                                <label for="formFileMultiple" class="form-label sm:py-0">Photo</label>
                                <input class="form-control" name="Photo" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>
                        {{-- state --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full my-4 py-3 sm:py-0"
                                type="text" name="state_of_origin" :value="old('state_of_origin')" required autofocus autocomplete="state"
                                placeholder="state" />
                            <x-input-label for="floatingInput" :value="__('State of Origin')" />
                            <x-input-error :messages="$errors->get('state_of_origin')" class="mt-2" />
                        </div>
                        {{-- nationality --}}
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0" name="country" id="country"
                                aria-label="Large select example">
                                <option selected>Nationality</option>
                                <option value="United States" name="United States">United States</option>
                                <option value="Afghanistan" name="Afghanistan">Afghanistan</option>
                                <option value="Albania" name="Albania">Albania</option>
                                <option value="Algeria" name="Algeria">Algeria</option>
                            </select>
                        </div>
                        {{-- DUTIES --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control block mt-1 w-full" id="exampleFormControlTextarea1" rows="10" name="description" :value="old('description')" required autofocus autocomplete="description" placeholder="Description"></textarea>
                            <x-input-label  :value="__('Description')" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        {{-- company --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="company" :value="old('company')" required autofocus autocomplete="company"
                                placeholder="Company" />
                            <x-input-label for="floatingInput" :value="__('Company')" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>
                        {{-- Qualification --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="qualification" :value="old('qualification')" required autofocus autocomplete="qualification"
                                placeholder="Qualification" />
                            <x-input-label for="floatingInput" :value="__('Qualification')" />
                            <x-input-error :messages="$errors->get('qualification')" class="mt-2" />
                        </div>
                        {{-- Discipline --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full " type="text"
                                name="discipline" :value="old('discipline')" required autofocus autocomplete="discipline"
                                placeholder="discipline" />
                            <x-input-label for="floatingInput" :value="__('Discipline')" />
                            <x-input-error :messages="$errors->get('discipline')" class="mt-2" />
                        </div>

                        {{-- Experience --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="experience" :value="old('experience')" required autofocus autocomplete="experience"
                                placeholder="experience" />
                            <x-input-label for="floatingInput" :value="__('Experience')" />
                            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                        </div>
                        {{-- check box --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input mb" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Status</label>
                        </div>


                        {{-- Register Button --}}
                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4 text-center btn btn-primary" type="submit">
                                {{ __('Save Member') }}
                            </x-primary-button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

{{-- 
 <option value="United States">United States</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint Lucia">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Serbia">Serbia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option> --}}