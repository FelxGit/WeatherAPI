<template>
  <div class="container mt-5">
    <alert-box v-show="req_status === 'ERROR'" :data="{type: 'alert alert-danger', message: error_message}"></alert-box>
    <h3>Weather API</h3><hr/>
    <div class="row">
      <div class="col-md-7">
        <div class="form">
            <div class="row">
                <div class="col-4 form-group">
                    <select v-model.trim="name_title" class="form-control">
                        <option value="Mrs">Mrs</option>
                        <option value="Mr">Mr</option>
                        <option value="Ms">Mr</option>
                    </select>
                </div>
                <div class="col-4" >
                    <input type="text" v-model.trim="$v.firstname.$model" placeholder="first name.." :class="{ 'has-error': $v.firstname.$error }" class="form-control">
                </div>
                <div class="col-4">
                    <input type="text" v-model.trim="$v.lastname.$model" placeholder="last name.." :class="{ 'has-error': $v.lastname.$error }" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <select v-model.trim="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select><br/>
                    <label v-show="gender==='Other'" for="other">If other, please specify<br/>
                        <input type="text" v-model.trim="$v.otherGender.$model" id="other" placeholder="..." class="form-control">
                    </label>
                </div>
                <div class="col-6">
                    <input type="tel" v-model.trim="phone_number" placeholder="(xxx)-xxx-xxxx" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" :class="{ 'has-error': $v.phone_number.$error }" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="text" v-model.trim="street_name" placeholder="street name.." :class="{ 'has-error': $v.street_name.$error }" class="form-control">
                </div>
                <div class="col-4">
                    <input type="text" v-model.trim="city" placeholder="city.." :class="{ 'has-error': $v.city.$error }" class="form-control">
                </div>
                <div class="col-4 form-group">
                    <select v-model.trim="country" id="country" name="country" class="form-control">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
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
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
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
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
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
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
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
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>
            <div :class="{ 'has-error': $v.photo.$error }">
                <input id="Upload photo" @input="setPhoto" name="Upload photo" :class="{ 'has-error': $v.city.$error }" class="form-control" type="file">
            </div><br/>
            <button type="submit" @click="onSubmit" class="btn btn-primary">
                <i v-show="loading" class="fa fa-loading"  aria-hidden="true"></i>Submit</button><br/><br/>
        </div>
      </div>
      <div class="col-md-5">
        <div id="weatherapi-weather-widget-4">
            <div id="apixu_container"></div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>Name Title</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>City</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Avghumidity</th>
                <th>Avgtemp_c</th>
                <th>Avgtemp_f</th>
                <th>Avgvis_km</th>
                <th>Avgvis_miles</th>
                <th>Daily_Chance_of_Rain</th>
                <th>Daily_Chance_of_Snow</th>
                <th>Daily_Will_It_Rain</th>
                <th>Daily_Will_It_Snow</th>
                <th>Maxtemp_c</th>
                <th>Maxtemp_f</th>
                <th>Maxwind_kph</th>
                <th>Maxwind_mph</th>
                <th>Mintemp_c</th>
                <th>Mintemp_f</th>
                <th>Totalp  recip_in</th>
                <th>Totalprecip_mm</th>
                <th>UV</th>
                <th>Created_at</th>
                <th>Updated_at</th>
              </tr>
            </thead>
            <tbody v-show="!loading" id="tbody">
                <tr v-for="(user, index) in users_weather.data" :key="index">
                  <td>{{ user.name_title }}</td>
                  <td>{{ user.firstname }}</td>
                  <td>{{ user.lastname }}</td>
                  <td>{{ user.city }}</td>
                  <td>{{ user.phone_number }}</td>
                  <td>{{ user.weather.date }}</td>
                  <td>{{ user.weather.avghumidity }}</td>
                  <td>{{ user.weather.avgtemp_c }}</td>
                  <td>{{ user.weather.avgtemp_f }}</td>
                  <td>{{ user.weather.avgvis_km }}</td>
                  <td>{{ user.weather.avgvis_miles }}</td>
                  <td>{{ user.weather.daily_chance_of_rain }}</td>
                  <td>{{ user.weather.daily_chance_of_snow }}</td>
                  <td>{{ user.weather.daily_will_it_rain }}</td>
                  <td>{{ user.weather.daily_will_it_snow }}</td>
                  <td>{{ user.weather.maxtemp_c }}</td>
                  <td>{{ user.weather.maxtemp_f }}</td>
                  <td>{{ user.weather.maxwind_kph }}</td>
                  <td>{{ user.weather.maxwind_mph }}</td>
                  <td>{{ user.weather.mintemp_c }}</td>
                  <td>{{ user.weather.mintemp_f }}</td>
                  <td>{{ user.weather.totalprecip_in }}</td>
                  <td>{{ user.weather.totalprecip_mm }}</td>
                  <td>{{ user.weather.uv }}</td>
                  <td>{{ user.weather.created_at }}</td>
                  <td>{{ user.weather.updated_at }}</td>
                </tr><br/><hr/>
            </tbody>
          </table>
          <pagination :data="users_weather" @pagination-change-page="loadWeathers"></pagination>
        </div>
    </div>
  </div>
</template>
<script>
import Vue from 'vue'
import { required, minLength } from 'vuelidate/lib/validators'
Vue.component('alert-box', require('../components/AlertBox.vue').default)

export default {
    data() {
        return {
            gender: 'Male',
            name_title: 'Mrs',
            firstname: '',
            lastname: '',
            street_name: '',
            city: '',
            country: 'Philippines',
            phone_number: null,
            photo: null,
            loading: false,
            req_status: '', //app checker
            error_message: '',
            otherGender: null,
            weather: [],
            users_weather: {},
            awaitingSearch: false
        }
    },
    watch: {
      city: function (val) {
        if (!this.awaitingSearch) {
          setTimeout(() => {
            this.getWeatherResults()
            .then(response =>{
                this.weather = response.data
                this.displayWeather()    
                this.req_status = 'OK'
            })
            .catch(err =>{
                this.req_status = 'ERROR'
                this.error_message = 'Error: City location is not available.'
            })
            this.awaitingSearch = false
          }, 2000) // 2 sec delay
        }
        this.awaitingSearch = true
      },
    },
    mounted() {
        this.loadWeathers()
    },
    validations: {
        photo: {
            required
        },
        firstname: {
            required,
            minLength: minLength(4),

        },
        lastname: {
            required,
            minLength: minLength(4)
        },
        gender: {
            required    
        },
        otherGender: {
            required,
            minLength: minLength(4)
        },
        phone_number: {
            required
        },
        street_name: {
            required,
        },
        city: {
            required,
            minLength: minLength(3),
        },
    },
    methods : {
        onSubmit (e) {
            this.$v.$touch()
            this.saveWeatherResult()
        },
        saveWeatherResult() {
            this.req_status = 'PENDING'
            let user_data = this.getUserData()  

            this.$http.post('api/users', user_data)  //first to create users
            .then(response => {
                console.log('user created' + response.data)
                this.$http.post('api/weathers', response.data)//then realations
                .then(response => {
                    this.req_status = 'OK'
                    this.loadWeathers()
                    console.log('weather created' + response.data)
                })
                .catch(err =>{
                    this.req_status = 'ERROR'
                    this.error_message = 'Error: Failed to submit data.'
                })
            })
        },
        getUserData(){    
            let form_data = new FormData()
            form_data.append('gender', this.gender)
            form_data.append('name_title', this.name_title)
            form_data.append('firstname', this.firstname)
            form_data.append('lastname', this.lastname)
            form_data.append('phone', this.phone_number)
            form_data.append('street_name', this.street_name)
            form_data.append('city', this.city)
            form_data.append('country', this.country)
            form_data.append('photo', this.photo)
        
            return form_data
        },  
        getWeatherResults(){
            return this.$http.get('api/weathers/' + this.city)
        },
        displayWeather() {
            let loc = this.weather.id
            Vue.loadScript('https://www.weatherapi.com/weather/widget.ashx?loc='+loc+'&wid=4&tu=2&div=weatherapi-weather-widget-4')
            this.weather = []
        },
        setPhoto(event){
            this.photo = event.target.files[0]
        },
        loadWeathers(page_no=1){
            this.loading = true
            this.$http.get('api/users?page=' + page_no)
            .then(response =>{
                this.users_weather = response.data
                this.loading = false
            })
            .catch(err =>{
                this.loading = false
                this.req_status = true
                this.error_message = 'Error: Failed to load users.'
            })
        }
    },
    computed: {
    }
}
</script>

<style scoped>
.table-responsive {
    margin-top: 20px;
}
.has-error {
    border: thin solid purple
}
input, select {
    border-radius: none;
    border: thin solid lightslategray
}
</style>