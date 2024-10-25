<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect 767</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    <link rel="stylesheet" href="searchpage.css">
    <link rel="stylesheet" href="assets/showDirectories/searchpage.css">
    <!-- <link rel="stylesheet" href="assets/showDirectories/style.css"> -->
    <link rel="stylesheet" href="assets/showDirectories/styles.css">




    <link rel="stylesheet" href="searchpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/Logo767.png">




</head>

<body>

    <nav class="navbar">
        <!-- Logo Section -->
        <div class="logo">
            <img src="./assets/logo.png" alt="Logo" />
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links">
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('directoryadd')}}">DIRECTORY</a></li>
            <li><a href="https://shop.connect767.com/" target="_blank">SHOP</a></li>
            <li><a href="{{route('basketball')}}">CUSTOMIZABLE UNIFORMS</a></li>
        </ul>

        <!-- Check if user is logged in -->
        @if(session('user'))
        <!-- Profile Dropdown Button -->
        <div class="dropdown">
            <button class="profile-btn">Profile &#9662;</button>
            <ul class="dropdown-content">
                <!-- Check user role to show appropriate dashboard link -->
                @if(session('role') === 'admin')
                <li><a href="{{ route('admin_dashboard') }}">Admin Dashboard</a></li>
                @else
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @endif
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
        @else
        <!-- Login Button -->
        <button class="login-btn">
            <a style="color:white" href="{{route('login')}}">Login</a> /
            <a style="color:white" href="{{ route('register') }}">Register</a>
        </button>
        @endif
    </nav>



    <div class="directory-body">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>

        <div class="stay-connected-heading">
            <p1>Stay Connected!</p1><br>
            <p2> Be a part of our Directory</p2>
        </div>


        <!-- <div class="search-options">
            Search by Category and Search by Text buttons
            <button class="toggle-btn" id="category-btn" onclick="showCategorySearch()">Search by Category</button>
            <button class="toggle-btn" id="text-btn">Search by Text</button>
        </div> -->

        <div class="search-options">
            <!-- Search by Category and Search by Text buttons -->
            <button class="toggle-btn" id="category-btn" onclick="showCategorySearch()">Search by Category</button>
            <button class="toggle-btn" id="text-btn" onclick="showTextSearch()">Search by Text</button>
        </div>





        <!-- Search by Category Fields -->
        <div class=" search-category-fields" id="category-fields">
            <div class="select-group">
                <form action="{{ route('directory_search') }}" method="POST">
                    @csrf
                    <select id="country-select" class="select-field" name="country" onchange="populateStates()">
                        <option value="" disabled selected>Select Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
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
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                        <option value="Congo (Democratic Republic)">Congo (Democratic Republic)</option>
                        <option value="Costa Rica">Costa Rica</option>
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
                        <option value="Eswatini">Eswatini</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
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
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
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
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City">Vatican City</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>

                    <select id="state-select" class="select-field" name="state">
                        <option value="" disabled selected>Select State</option>
                    </select>

                    <select id="industry-select" class="select-field" name="industry">
                        <option value="" disabled selected>Select Industry</option>


                        <option value="Accounting/Financial Services/Insurance">Accounting/Financial
                            Services/Insurance
                        </option>
                        <option value="Agriculture/Forestry/Fishing/Hunting">Agriculture/Forestry/Fishing/Hunting
                        </option>
                        <option value="Architecture/Engineering/Technical Services">
                            Architecture/Engineering/Technical
                            Services</option>
                        <option value="Arts/Music/Entertainment">Arts/Music/Entertainment</option>
                        <option value="Automotive/Transportation">Automotive/Transportation</option>
                        <option value="Business Administration/Office">Business Administration/Office</option>
                        <option value="Biotech/Science/Life Science">Biotech/Science/Life Science</option>
                        <option value="Construction/Plumbing/ Mining">Construction/Plumbing/ Mining</option>
                        <option value="Cosmetic/Beauty/Barber">Cosmetic/Beauty/Barber</option>
                        <option value="Customer Service/ Consumer Goods & Services">Customer Service/ Consumer Goods
                            &
                            Services</option>
                        <option value="Education/ Professional/Scientific">Education/ Professional/Scientific
                        </option>
                        <option value="Food Services/Beverage">Food Services/Beverage</option>
                        <option value="General Labor/Warehouse">General Labor/Warehouse</option>
                        <option value="Graphic Design/Media Design">Graphic Design/Media Design</option>
                        <option value="Government/Non-Profit">Government/Non-Profit</option>
                        <option value="Graphic Design/Media Design">Graphic Design/Media Design</option>
                        <option value="Healthcare/Social Assistance/Medical">Healthcare/Social Assistance/Medical
                        </option>
                        <option value="Human Resource/Marketing/PR/Advertising">Human
                            Resource/Marketing/PR/Advertising
                        </option>
                        <option value="Hospitality/Tourism/Accommodation">Hospitality/Tourism/Accommodation</option>
                        <option value="Legal/Paralegal">Legal/Paralegal</option>
                        <option value="Real Estate/Rental/Leasing">Real Estate/Rental/Leasing</option>
                        <option value="Retail/Wholesale/Trade">Retail/Wholesale/Trade</option>
                        <option value="Sales/Business Development">Sales/Business Development</option>
                        <option value="Salon/Spa/Fitness">Salon/Spa/Fitness</option>
                        <option value="Security">Security</option>
                        <option value="Skills/Trade/Craft/Utilities">Skills/Trade/Craft/Utilities</option>
                        <option value="Technology/ Technical Support/Web">Technology/ Technical Support/Web</option>
                        <option value="TV/Film/Video">TV/Film/Video</option>





                    </select>

                    <button class="search-btn">Search</button>


                </form>

            </div>
        </div>




        <!-- Search by Text Field -->
        <form action="{{ route('search_bytext') }}" method="GET">
            @csrf
            <div class="search-text-field" id="text-field" style="display: none;">
                <div class="input-group">
                    <input type="text" id="#" class="text-input" placeholder="Enter search text" name="search">
                    <button class="search-btn">Search</button>
                </div>
            </div>
        </form>





        <div class="container">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="rate-section">
                    <h3>Rating</h3>
                    <div class="rate-buttons">
                        <button>Any</button>
                        <button>3.0+</button>
                        <button>4.0+</button>
                        <button>4.5+</button>
                    </div>
                </div>

                <div class="location">
                    <h3>Location</h3>
                    <select>
                        <option>United States</option>
                    </select>
                    <input type="text" placeholder="City or ZIP code">
                </div>

                <div class="company-status">
                    <h3>Company status</h3>
                    <label> Verified<input type="checkbox"></label>
                    <label> Claimed<input type="checkbox"></label>
                </div>

                <div class="subcategories">
                    <h3>Subcategories</h3>
                    <button class="c-btn">Business </button>
                    <button class="c-btn">Education </button>
                    <button class="c-btn">Experience</button>
                    <button class="c-btn">Country</button>
                </div>
            </aside>

            <!-- Main content -->
            <section class="main-content">
                <div class="sorting">
                    <p>1-20 of 72 results</p>
                    <select>
                        <option>Most relevant</option>
                    </select>
                </div>





                <!-- show directory -->
                @if($results->isEmpty())
                <p>No directory entries found for your search.</p>
                @else
                @foreach($results as $directory)
                <div class="company">

                    <div class="company-logo">
                        @if($directory->profile_picture)
                        <img src="{{ Storage::url('profile_pictures/' . $directory->profile_picture) }}" width="50"
                            height="50" alt="Profile Picture">
                        @else
                        <p>No Image</p>
                        @endif
                    </div>
                    <div class="company-info">
                        <h3>{{ $directory->professional_or_business_name }}</h3>
                        <a href="{{ $directory->website }}">{{ $directory->website }}</a>
                        <div class="trust-score">
                            <img src="assets/showDirectories/ratingstars2.png" alt="Star Rating" width="100px">
                            <span>TrustScore 4.9</span>
                        </div>
                        <p>2,376 reviews</p>
                        <div class="company-category">
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="9" viewBox="0 0 384 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg> {{ $directory->country }} &nbsp;{{ $directory->state }}
                            &nbsp;{{ $directory->city }}&nbsp;{{ $directory->street_address}}&nbsp;{{ $directory->building_number}}
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg> {{ $directory->cell_number }}
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg> {{ $directory->email }}


                        </div>

                    </div>
                    <div class="company-reviews">
                        <!-- <a href="#" class="review-link">Latest reviews</a> -->
                        <a href="{{ route('readmore', $directory->id) }}" class="review-link">Read More</a>
                    </div>
                    <div class="most-relevant">Most Relevant</div>

                </div>
                @endforeach
                @endif



            </section>
        </div>












        <!-- data for directory section End -->




        <!-- Search by Text Field -->
        <!-- <form action="{{ route('search_bytext') }}" method="GET">
            @csrf
            <div class="search-text-field" id="text-field" style="display: none;">
                <div class="input-group">
                    <input type="text" id="#" class="text-input" placeholder="Enter search text" name="search">
                    <button class="search-btn">Search</button>
                </div>
            </div>
        </form> -->








        <script>
            function showCategorySearch() {
                document.getElementById("category-fields").style.display = "flex";
                document.getElementById("text-field").style.display = "none";
            }

            function showTextSearch() {
                document.getElementById("category-fields").style.display = "none";
                document.getElementById("text-field").style.display = "flex";
            }

            function populateStates() {
                const country = document.getElementById("country-select").value;
                const stateSelect = document.getElementById("state-select");
                stateSelect.innerHTML = '<option value="" disabled selected>Select State</option>';

                let states = [];

                if (country === "Afghanistan") {
                    states = [
                        "Badakhshan", "Badghis", "Baghlan", "Bamyan", "Daykundi",
                        "Farah", "Faryab", "Ghazni", "Ghor", "Helmand",
                        "Herat", "Jowzjan", "Kabul", "Kandahar", "Kapisa",
                        "Khost", "Kunar", "Laghman", "Nangarhar", "Nimroz",
                        "Nuristan", "Panjshir", "Parwan", "Samangan", "Sar-e Pol",
                        "Takhar", "Urozgan", "Wardak", "Zabul"
                    ];
                } else if (country === "Albania") {
                    states = [
                        "Berat", "Diber", "Durres", "Elbasan",
                        "Shkoder", "Fier", "Korçë", "Tirana", "Vlorë"
                    ];
                } else if (country === "Algeria") {
                    states = [
                        "Adrar", "Chlef", "Laghouat", "Oum El Bouaghi",
                        "Batna", "Béjaïa", "Biskra", "Bordj Bou Arréridj",
                        "Tébessa", "Tlemcen", "Tiaret", "Tizi Ouzou",
                        "Algiers", "Oran", "Annaba", "Sétif", "Saida",
                        "Skikda", "Médéa", "Mostaganem", "Relizane"
                    ];
                } else if (country === "Andorra") {
                    states = [
                        "Andorra la Vella", "Escaldes-Engordany", "Encamp",
                        "Encamp", "La Massana", "Ordino", "Sant Julià de Lòria"
                    ];
                } else if (country === "Angola") {
                    states = [
                        "Bengo", "Benguela", "Bié", "Cabinda",
                        "Cuando Cubango", "Cuanza Norte", "Cuanza Sul",
                        "Cuito Cuanavale", "Malanje", "Namibe",
                        "Huambo", "Luanda", "Lunda Norte", "Lunda Sul", "Moxico"
                    ];
                } else if (country === "Antigua and Barbuda") {
                    states = [
                        "Antigua", "Barbuda"
                    ];
                } else if (country === "Argentina") {
                    states = [
                        "Buenos Aires", "Catamarca", "Chaco", "Chubut",
                        "Córdoba", "Corrientes", "Entre Ríos", "Formosa",
                        "Jujuy", "La Pampa", "La Rioja", "Mendoza",
                        "Misiones", "Neuquén", "Río Negro", "Salta",
                        "San Juan", "San Luis", "Santa Cruz", "Santa Fe",
                        "Santiago del Estero", "Tierra del Fuego", "Tucumán"
                    ];
                } else if (country === "Armenia") {
                    states = [
                        "Aragatsotn", "Ararat", "Armavir", "Gegharkunik",
                        "Kotayk", "Lori", "Shirak", "Syunik",
                        "Tavush", "Vayots Dzor", "Yerevan"
                    ];
                } else if (country === "Australia") {
                    states = [
                        "New South Wales", "Queensland", "South Australia",
                        "Tasmania", "Victoria", "Western Australia",
                        "Australian Capital Territory", "Northern Territory"
                    ];
                } else if (country === "Austria") {
                    states = [
                        "Burgenland", "Carinthia", "Lower Austria",
                        "Upper Austria", "Salzburg", "Styria", "Tyrol",
                        "Vorarlberg", "Vienna"
                    ];
                } else if (country === "Azerbaijan") {
                    states = [
                        "Absheron", "Ganja-Gazakh", "Lankaran",
                        "Milik", "Mingechevir", "Nakhchivan", "Shaki-Zagatala",
                        "Sheki", "Yukhari-Goychay", "Guba-Khachmaz"
                    ];
                }


                if (country === "Bahamas") {
                    states = [
                        "Abaco", "Acklins", "Berry Islands", "Bimini",
                        "Cat Island", "Exuma", "Grand Bahama", "Harbour Island",
                        "Long Island", "New Providence", "Ragged Island",
                        "Rum Cay", "San Salvador"
                    ];
                } else if (country === "Bahrain") {
                    states = [
                        "Capital Governorate", "Northern Governorate", "Southern Governorate",
                        "Muharraq Governorate", "Isa Town", "Sitra"
                    ];
                } else if (country === "Bangladesh") {
                    states = [
                        "Barisal", "Chittagong", "Dhaka", "Khulna",
                        "Rajshahi", "Rangpur", "Sylhet"
                    ];
                } else if (country === "Barbados") {
                    states = [
                        "Christ Church", "Saint Andrew", "Saint George", "Saint James",
                        "Saint John", "Saint Joseph", "Saint Lucy", "Saint Michael",
                        "Saint Peter", "Saint Philip", "Saint Thomas"
                    ];
                } else if (country === "Belarus") {
                    states = [
                        "Brest Region", "Gomel Region", "Grodno Region",
                        "Minsk Region", "Mogilev Region", "Vitebsk Region",
                        "Minsk City"
                    ];
                } else if (country === "Belgium") {
                    states = [
                        "Antwerp", "Brabant", "Brussels-Capital Region",
                        "East Flanders", "Flemish Brabant", "Hainaut",
                        "Liege", "Limburg", "Namur", "Walloon Brabant", "West Flanders"
                    ];
                } else if (country === "Belize") {
                    states = [
                        "Belize District", "Cayo District", "Corozal District",
                        "Orange Walk District", "Stann Creek District", "Toledo District"
                    ];
                } else if (country === "Benin") {
                    states = [
                        "Alibori", "Atakora", "Atlantique", "Borgou",
                        "Collines", "Donga", "Littoral", "Monou", "Ouémé",
                        "Plateau", "Zou"
                    ];
                } else if (country === "Bhutan") {
                    states = [
                        "Bumthang", "Chukha", "Dagana", "Gasa",
                        "Haa", "Lhuentse", "Monggar", "Paro",
                        "Pema Gatshel", "Samdrup Jongkhar", "Sarpang",
                        "Thimphu", "Trashigang", "Trashiyangtse", "Wangdue Phodrang",
                        "Zhemgang"
                    ];
                } else if (country === "Bolivia") {
                    states = [
                        "Chuquisaca", "Cochabamba", "Colcha K", "La Paz",
                        "Oruro", "Pando", "Potosí", "Santa Cruz",
                        "Tarija"
                    ];
                } else if (country === "Bosnia and Herzegovina") {
                    states = [
                        "Federation of Bosnia and Herzegovina", "Republika Srpska",
                        "Brčko District"
                    ];
                } else if (country === "Botswana") {
                    states = [
                        "Botswana", "Central District", "Chobe District",
                        "Ghanzi District", "Kgalagadi District", "Kgatleng District",
                        "Ngami District", "North-East District", "North-West District",
                        "South-East District", "Southern District"
                    ];
                } else if (country === "Brazil") {
                    states = [
                        "Acre", "Alagoas", "Amapá", "Bahia",
                        "Ceará", "Distrito Federal", "Espírito Santo",
                        "Goiás", "Maranhão", "Mato Grosso",
                        "Mato Grosso do Sul", "Minas Gerais", "Pará",
                        "Paraíba", "Paraná", "Pernambuco",
                        "Piauí", "Rio de Janeiro", "Rio Grande do Norte",
                        "Rio Grande do Sul", "Rondônia", "Roraima",
                        "Santa Catarina", "São Paulo", "Sergipe",
                        "Tocantins"
                    ];
                } else if (country === "Brunei") {
                    states = [
                        "Brunei-Muara", "Belait", "Tutong", "Temburong"
                    ];
                } else if (country === "Bulgaria") {
                    states = [
                        "Blagoevgrad", "Burgas", "Dobrich", "Gabrovo",
                        "Kardzhali", "Kyustendil", "Montana", "Pazardzhik",
                        "Pernik", "Plovdiv", "Razgrad", "Ruse",
                        "Shumen", "Sofia City", "Sofia Province", "Sliven",
                        "Smolyan", "Stara Zagora", "Targovishte", "Haskovo",
                        "Varna", "Veliko Tarnovo", "Vidin", "Vratza"
                    ];
                } else if (country === "Burkina Faso") {
                    states = [
                        "Boucle du Mouhoun", "Cascade", "Centre",
                        "Centre-East", "Centre-North", "Centre-West",
                        "Cooperation", "Est", "Haut-Bassins", "Hauts-Bassins",
                        "Nord", "Sahel", "Sud-Ouest", "Centre-South"
                    ];
                } else if (country === "Burundi") {
                    states = [
                        "Bujumbura Mairie", "Bujumbura Rural", "Gitega",
                        "Karuzi", "Kayanza", "Kirundo", "Makamba",
                        "Muramvya", "Mwaro", "Ngozi", "Rumonge",
                        "Rutana", "Cibitoke"
                    ];
                }


                if (country === "Cabo Verde") {
                    states = [
                        "Barlavento", "Sotavento"
                    ];
                } else if (country === "Cambodia") {
                    states = [
                        "Banteay Meanchey", "Battambang", "Kampong Cham",
                        "Kampong Chhnang", "Kampong Speu", "Kampot",
                        "Kandal", "Koh Kong", "Kratie", "Mondulkiri",
                        "Phnom Penh", "Preah Vihear", "Prey Veng",
                        "Pursat", "Siem Reap", "Sihanoukville",
                        "Stung Treng", "Svay Rieng", "Takeo",
                        "Oddar Meanchey"
                    ];
                } else if (country === "Cameroon") {
                    states = [
                        "Adamaoua", "Centre", "East", "Far North",
                        "Littoral", "North", "Northwest", "South",
                        "Southwest", "West"
                    ];
                } else if (country === "Canada") {
                    states = [
                        "Alberta", "British Columbia", "Manitoba",
                        "New Brunswick", "Newfoundland and Labrador", "Nova Scotia",
                        "Ontario", "Prince Edward Island", "Quebec",
                        "Saskatchewan", "Northwest Territories", "Nunavut",
                        "Yukon"
                    ];
                } else if (country === "Central African Republic") {
                    states = [
                        "Bamingui-Bangoran", "Bangui", "Basse-Kotto",
                        "Haute-Kotto", "Haut-Mbomou", "Lobaye",
                        "Mbomou", "Ombella-M'Poko", "Sangha-Mbaéré",
                        "Vakaga"
                    ];
                } else if (country === "Chad") {
                    states = [
                        "Batha", "Borkou", "Chari-Baguirmi",
                        "Guéra", "Hadjer-Lamis", "Kanem",
                        "Lac", "Logone Occidental", "Logone Oriental",
                        "Mandoul", "Middle Chari", "Moïssala",
                        "Niblet", "Sila", "Tandjilé", "Tchad",
                        "Wadi Fira", "Zinder"
                    ];
                } else if (country === "Chile") {
                    states = [
                        "Arica y Parinacota", "Antofagasta", "Atacama",
                        "Coquimbo", "Valparaíso", "Metropolitan",
                        "O'Higgins", "Maule", "Ñuble",
                        "Biobío", "La Araucanía", "Los Ríos",
                        "Los Lagos", "Aysén", "Magallanes"
                    ];
                } else if (country === "China") {
                    states = [
                        "Anhui", "Beijing", "Chongqing", "Fujian",
                        "Gansu", "Guangdong", "Guangxi", "Guizhou",
                        "Hainan", "Hebei", "Heilongjiang", "Henan",
                        "Hubei", "Hunan", "Inner Mongolia", "Jiangsu",
                        "Jiangxi", "Jilin", "Liaoning", "Ningxia",
                        "Qinghai", "Shaanxi", "Shandong", "Shanghai",
                        "Shanxi", "Sichuan", "Tianjin", "Tibet",
                        "Xinjiang", "Yunnan", "Zhejiang"
                    ];
                } else if (country === "Colombia") {
                    states = [
                        "Amazonas", "Antioquia", "Arauca", "Atlántico",
                        "Bolívar", "Boyacá", "Caldas", "Caquetá",
                        "Casanare", "Cauca", "Cesar", "Chocó",
                        "Córdoba", "Guainía", "Guaviare", "Huila",
                        "La Guajira", "Magdalena", "Meta", "Nariño",
                        "Norte de Santander", "Putumayo", "Quindío",
                        "Risaralda", "San Andrés y Providencia", "Santander",
                        "Sucre", "Tolima", "Valle del Cauca",
                        "Vaupés", "Vichada"
                    ];
                } else if (country === "Comoros") {
                    states = [
                        "Anjouan", "Grande Comore", "Mohéli"
                    ];
                } else if (country === "Congo") {
                    states = [
                        "Bouenza", "Brazzaville", "Cuvette", "Cuvette-Ouest",
                        "Kouilou", "Lékoumou", "Likouala", "Niari",
                        "Plateaux", "Pool", "Sangha"
                    ];
                } else if (country === "Costa Rica") {
                    states = [
                        "Alajuela", "Cartago", "Guanacaste", "Heredia",
                        "Limón", "Puntarenas", "San José"
                    ];
                } else if (country === "Croatia") {
                    states = [
                        "Brod-Posavina", "Dubrovačko-Neretvanska", "Istra",
                        "Karlovac", "Koprivnica-Križevci", "Krapina-Zagorje",
                        "Lika-Senj", "Međimurje", "Osijek-Baranja",
                        "Požega-Slavonia", "Primorje-Gorski Kotar", "Šibenik-Knin",
                        "Sisak-Moslavina", "Split-Dalmatia", "Varaždin",
                        "Virovitica-Podravina", "Zadar", "Zagreb",
                        "Zagreb City"
                    ];
                }


                if (country === "Denmark") {
                    states = [
                        "Capital Region of Denmark", "Central Denmark Region",
                        "North Denmark Region", "Region of Southern Denmark",
                        "Zealand"
                    ];
                } else if (country === "Djibouti") {
                    states = [
                        "Ali Sabieh", "Arta", "Dikhil",
                        "Djibouti", "Obock", "Tadjourah"
                    ];
                } else if (country === "Dominica") {
                    states = [
                        "Saint George", "Saint John", "Saint Joseph",
                        "Saint Luke", "Saint Mark", "Saint Patrick",
                        "Saint Paul", "Saint Peter"
                    ];
                } else if (country === "Dominican Republic") {
                    states = [
                        "Azua", "Baoruco", "Barahona",
                        "Dajabón", "Duarte", "El Seibo",
                        "Hato Mayor", "Independencia", "La Altagracia",
                        "La Romana", "La Vega", "María Trinidad Sánchez",
                        "Monte Cristi", "Monte Plata", "Pedernales",
                        "Peravia", "Puerto Plata", "Samaná",
                        "San Cristóbal", "San José de Ocoa", "San Juan",
                        "San Pedro de Macorís", "Sánchez Ramírez", "Santo Domingo",
                        "Valverde"
                    ];
                }


                if (country === "Ecuador") {
                    states = [
                        "Azuay", "Bolívar", "Cañar",
                        "Carchi", "Chimborazo", "Esmeraldas",
                        "Galápagos", "Guayas", "Los Ríos",
                        "Manabí", "Morona Santiago", "Napo",
                        "Orellana", "Pastaza", "Pichincha",
                        "Tungurahua", "Zamora-Chinchipe"
                    ];
                } else if (country === "Egypt") {
                    states = [
                        "Alexandria", "Aswan", "Asyut",
                        "Beheira", "Beni Suef", "Cairo",
                        "Dakahlia", "Damietta", "Faiyum",
                        "Gharbia", "Giza", "Ismailia",
                        "Kafr El Sheikh", "Luxor", "Matruh",
                        "Minya", "Qalyubia", "Qena",
                        "Red Sea", "Sharqia", "Sohag",
                        "South Sinai", "Suez"
                    ];
                } else if (country === "El Salvador") {
                    states = [
                        "Ahuachapan", "Cabañas", "Chalatenango",
                        "Cuscatlán", "La Libertad", "La Paz",
                        "La Unión", "Morazán", "San Miguel",
                        "San Salvador", "Santa Ana", "San Vicente"
                    ];
                } else if (country === "Equatorial Guinea") {
                    states = [
                        "Annobón", "Bioko Norte", "Bioko Sur",
                        "Centro Sur", "Djibloho", "La Litoral",
                        "Wele-Nzas"
                    ];
                } else if (country === "Eritrea") {
                    states = [
                        "Anseba", "Debub", "Gash-Barka",
                        "Maekel", "Semen", "Southern Red Sea"
                    ];
                } else if (country === "Estonia") {
                    states = [
                        "Harju County", "Hiiu County", "Ida-Viru County",
                        "Lääne County", "Lääne-Viru County", "Pärnu County",
                        "Rapla County", "Saare County", "Tartu County",
                        "Valga County", "Viljandi County", "Võru County"
                    ];
                }


                if (country === "Fiji") {
                    states = [
                        "Ba", "Bua", "Cakaudrove",
                        "Kadavu", "Lautoka", "Lomaiviti",
                        "Macuata", "Nadroga-Navosa", "Naitasiri",
                        "Ra", "Rewa", "Serua",
                        "Tailevu", "Western Division"
                    ];
                } else if (country === "Finland") {
                    states = [
                        "Aland Islands", "Uusimaa", "Southwest Finland",
                        "Satakunta", "Pirkanmaa", "Päijänne Tavastia",
                        "Kymenlaakso", "South Karelia", "North Karelia",
                        "Central Finland", "North Savo", "South Savo",
                        "North Ostrobothnia", "Oulu", "Lapland",
                        "Kainuu", "Åland"
                    ];
                } else if (country === "France") {
                    states = [
                        "Auvergne-Rhône-Alpes", "Bourgogne-Franche-Comté", "Brittany",
                        "Centre-Val de Loire", "Grand Est", "Hauts-de-France",
                        "Île-de-France", "Normandy", "Nouvelle-Aquitaine",
                        "Occitanie", "Pays de la Loire", "Provence-Alpes-Côte d'Azur",
                        "Corsica"
                    ];
                }


                if (country === "Gabon") {
                    states = [
                        "Estuaire", "Ogooué-Lolo", "Ogooué-Maritime",
                        "Woleu-Ntem", "Ngounié", "Moukalaba-Doudou",
                        "Nyanga", "Haut-Ogooué"
                    ];
                } else if (country === "Gambia") {
                    states = [
                        "Banjul", "Western Division", "Lower River Division",
                        "Central River Division", "Upper River Division",
                        "North Bank Division", "Janjanbureh", "Basse"
                    ];
                } else if (country === "Georgia") {
                    states = [
                        "Abkhazia", "Ajaria", "Guria",
                        "Imereti", "Kakheti", "Kvemo Kartli",
                        "Mtskheta-Mtianeti", "Racha-Lechkhumi and Kvemo Svaneti", "Samegrelo-Zemo Svaneti",
                        "Samtskhe-Javakheti", "Tbilisi"
                    ];
                } else if (country === "Germany") {
                    states = [
                        "Baden-Württemberg", "Bavaria", "Berlin",
                        "Brandenburg", "Bremen", "Hamburg",
                        "Hesse", "Lower Saxony", "Mecklenburg-Vorpommern",
                        "North Rhine-Westphalia", "Rhineland-Palatinate", "Saarland",
                        "Saxony", "Saxony-Anhalt", "Schleswig-Holstein",
                        "Thuringia"
                    ];
                } else if (country === "Ghana") {
                    states = [
                        "Greater Accra", "Western", "Western North",
                        "Central", "Eastern", "Northern",
                        "Ashanti", "Western Region", "Volta",
                        "Oti", "Upper East", "Upper West"
                    ];
                } else if (country === "Greece") {
                    states = [
                        "Attica", "Central Greece", "Central Macedonia",
                        "Crete", "Epirus", "Thessaly",
                        "Western Greece", "Western Macedonia", "North Aegean",
                        "South Aegean", "Dodecanese", "Ionian Islands",
                        "Peloponnese"
                    ];
                } else if (country === "Grenada") {
                    states = [
                        "Saint George", "Saint David", "Saint Patrick",
                        "Saint Andrew", "Saint John", "Carriacou and Petite Martinique"
                    ];
                } else if (country === "Guatemala") {
                    states = [
                        "Alta Verapaz", "Baja Verapaz", "Chimaltenango",
                        "Chiquimula", "El Progreso", "Escuintla",
                        "Guatemala", "Huehuetenango", "Izabal",
                        "Jalapa", "San Marcos", "Santa Rosa",
                        "Solalá", "Totonicapán", "Zacapa"
                    ];
                } else if (country === "Guinea") {
                    states = [
                        "Beyla", "Boke", "Conakry",
                        "Coyah", "Dabola", "Dinguiraye",
                        "Faranah", "Forecariah", "Fria",
                        "Guéckédou", "Kankan", "Kissidougou",
                        "Labe", "Macenta", "Mali",
                        "Mamou", "Nzérékoré", "Pita",
                        "Tougué", "Yomou"
                    ];
                } else if (country === "Guinea-Bissau") {
                    states = [
                        "Bissau", "Bafatá", "Bolama",
                        "Cacheu", "Gabu", "Oio",
                        "Quinara", "Tombali"
                    ];
                }


                if (country === "Haiti") {
                    states = [
                        "Artibonite", "Center", "Grand'Anse",
                        "Nippes", "Nord", "Nord-Est",
                        "Ouest", "Sud", "Sud-Est"
                    ];
                } else if (country === "Honduras") {
                    states = [
                        "Atlántida", "Choluteca", "Colón",
                        "Copán", "Cortés", "El Paraíso",
                        "Francisco Morazán", "Gracia", "Islas de la Bahía",
                        "La Paz", "Lempira", "Ocotepeque",
                        "Santa Bárbara", "Valle", "Yoro"
                    ];
                } else if (country === "Hungary") {
                    states = [
                        "Bács-Kiskun", "Békés", "Borsod-Abaúj-Zemplén",
                        "Budapest", "Csongrád-Csanád", "Fejér",
                        "Győr-Moson-Sopron", "Hajdú-Bihar", "Heves",
                        "Jász-Nagykun-Szolnok", "Komárom-Esztergom", "Nógrád",
                        "Pest", "Somogy", "Szabolcs-Szatmár-Bereg",
                        "Tolna", "Vas", "Veszprém", "Zala"
                    ];
                }


                if (country === "Iceland") {
                    states = [
                        "Austurland", "Hauteland", "Reykjavík",
                        "Suðurland", "Vestfirðir", "Vesturland"
                    ];
                } else if (country === "India") {
                    states = [
                        "Andhra Pradesh", "Arunachal Pradesh", "Assam",
                        "Bihar", "Chhattisgarh", "Goa",
                        "Gujarat", "Haryana", "Himachal Pradesh",
                        "Jharkhand", "Karnataka", "Kerala",
                        "Madhya Pradesh", "Maharashtra", "Manipur",
                        "Meghalaya", "Mizoram", "Nagaland",
                        "Odisha", "Punjab", "Rajasthan",
                        "Sikkim", "Tamil Nadu", "Telangana",
                        "Tripura", "Uttar Pradesh", "Uttarakhand",
                        "West Bengal"
                    ];
                } else if (country === "Indonesia") {
                    states = [
                        "Aceh", "Bali", "Banten",
                        "Bengkulu", "Central Java", "East Java",
                        "Gorontalo", "Jakarta", "West Java",
                        "West Nusa Tenggara", "East Nusa Tenggara", "Riau",
                        "South Sumatra", "North Sumatra", "South Sulawesi",
                        "North Sulawesi", "West Sulawesi", "Lampung",
                        "Maluku", "North Maluku", "Papua",
                        "West Papua", "Jambi", "Kepulauan Bangka Belitung",
                        "Kepulauan Riau", "Central Kalimantan", "East Kalimantan",
                        "North Kalimantan", "South Kalimantan", "West Kalimantan"
                    ];
                }


                if (country === "Jamaica") {
                    states = [
                        "Clarendon", "Hanover", "Kingston",
                        "Manchester", "Portland", "Saint Andrew",
                        "Saint Ann", "Saint Catherine", "Saint Elizabeth",
                        "Saint James", "Saint Mary", "Saint Thomas",
                        "Trelawny", "Westmoreland"
                    ];
                } else if (country === "Japan") {
                    states = [
                        "Aichi", "Akita", "Aomori",
                        "Chiba", "Ehime", "Fukui",
                        "Fukuoka", "Fukushima", "Gifu",
                        "Gunma", "Hiroshima", "Hokkaido",
                        "Hyōgo", "Ibaraki", "Ishikawa",
                        "Iwate", "Kagawa", "Kagoshima",
                        "Kanagawa", "Kochi", "Kumamoto",
                        "Kyoto", "Mie", "Miyagi",
                        "Miyazaki", "Nagano", "Nagasaki",
                        "Niigata", "Oita", "Okayama",
                        "Okinawa", "Osaka", "Saga",
                        "Saitama", "Shiga", "Shimane",
                        "Shizuoka", "Tochigi", "Tokushima",
                        "Tokyo", "Tottori", "Toyama",
                        "Wakayama", "Yamagata", "Yamaguchi",
                        "Yamanashi"
                    ];
                }


                if (country === "Kazakhstan") {
                    states = [
                        "Akmola", "Aktobe", "Almaty",
                        "East Kazakhstan", "Karaganda", "Kazakhstan",
                        "Kyzylorda", "Mangystau", "Pavlodar",
                        "North Kazakhstan", "Turkistan", "Almaty City",
                        "Shymkent"
                    ];
                } else if (country === "Kenya") {
                    states = [
                        "Bomet", "Bungoma", "Busia",
                        "Elgeyo-Marakwet", "Embu", "Garissa",
                        "Homa Bay", "Isiolo", "Kajiado",
                        "Kakamega", "Kericho", "Kilifi",
                        "Kirinyaga", "Kisii", "Kisumu",
                        "Laikipia", "Lamu", "Machakos",
                        "Makueni", "Mandera", "Marsabit",
                        "Meru", "Migori", "Nairobi City",
                        "Nakuru", "Narok", "Nyandarua",
                        "Nyeri", "Samburu", "Siaya",
                        "Taita-Taveta", "Tana River", "Tharaka-Nithi",
                        "Trans-Nzoia", "Uasin Gishu", "Vihiga",
                        "Wajir", "West Pokot"
                    ];
                } else if (country === "Kiribati") {
                    states = [
                        "Gilbert Islands", "Line Islands",
                        "Phoenix Islands"
                    ];
                } else if (country === "Kuwait") {
                    states = [
                        "Al Ahmadi", "Al Farwaniyah", "Al Jahra",
                        "Hawalli", "Mubarak Al-Kabeer", "Capital Governorate",
                        "Al Asimah"
                    ];
                }



                if (country === "Laos") {
                    states = [
                        "Attapeu", "Bokeo", "Bolikhamsai",
                        "Champasak", "Houaphanh", "Khammouane",
                        "Luang Prabang", "Oudomxay", "Phongsali",
                        "Salavan", "Savannakhet", "Vientiane",
                        "Vientiane Prefecture", "Xaignabouli", "Xekong",
                        "Xieng Khouang"
                    ];
                } else if (country === "Latvia") {
                    states = [
                        "Aizkraukle", "Alūksne", "Bauska",
                        "Cēsis", "Daugavpils", "Dobele",
                        "Jūrmala", "Jelgava", "Liepāja",
                        "Rēzekne", "Riga", "Ventspils",
                        "Rīgas", "Pierīga", "Kurzeme",
                        "Zemgale", "Vidzeme", "Latgale"
                    ];
                } else if (country === "Lebanon") {
                    states = [
                        "Akkar", "Baalbek-Hermel", "Beirut",
                        "Beqaa", "Mount Lebanon", "Nabatieh",
                        "North Governorate", "South Governorate",
                        "South Lebanon"
                    ];
                } else if (country === "Lesotho") {
                    states = [
                        "Berea", "Butha-Buthe", "Leribe",
                        "Mafeteng", "Maseru", "Mohale's Hoek",
                        "Mokhotlong", "Qacha's Nek", "Quthing",
                        "Thaba-Tseka"
                    ];
                } else if (country === "Liberia") {
                    states = [
                        "Bong", "Bomi", "Gbarpolu",
                        "Grand Bassa", "Grand Cape Mount", "Grand Gedeh",
                        "Grand Kru", "Lofa", "Margibi",
                        "Maryland", "Montserrado", "Nimba",
                        "River Cess", "River Gee", "Sinoe"
                    ];
                } else if (country === "Libya") {
                    states = [
                        "Ajdabiya", "Al Bayda", "Al Kufrah",
                        "Al Marj", "Al Wahat", "Azzawiya",
                        "Benghazi", "Derna", "Ghat",
                        "Ghadames", "Jufra", "Misrata",
                        "Murzuq", "Sabha", "Sirt",
                        "Tripoli", "Tubruq", "Zliten"
                    ];
                }


                if (country === "Madagascar") {
                    states = [
                        "Antananarivo", "Antananarivo-Avaradrano", "Antananarivo-Atsimondrano",
                        "Atsimo-Andrefana", "Atsinanana", "Bongolava",
                        "Diana", "Fianarantsoa", "Ihorombe",
                        "Itasy", "Menabe", "Sofia",
                        "Vakinankaratra", "Vatovavy-Fitovinany"
                    ];
                } else if (country === "Malawi") {
                    states = [
                        "Blantyre", "Chikwawa", "Chiradzulu",
                        "Dedza", "Dowa", "Karonga",
                        "Kasungu", "Lilongwe", "Machinga",
                        "Mangochi", "Mulanje", "Nkhata Bay",
                        "Nkhotakota", "Nsanje", "Ntcheu",
                        "Ntchisi", "Salima", "Zomba"
                    ];
                } else if (country === "Malaysia") {
                    states = [
                        "Johor", "Kedah", "Kelantan",
                        "Malacca", "Negeri Sembilan", "Pahang",
                        "Penang", "Perak", "Perlis",
                        "Selangor", "Terengganu", "Kuala Lumpur",
                        "Putrajaya", "Labuan"
                    ];
                } else if (country === "Maldives") {
                    states = [
                        "Alif Dhaal Atoll", "Alif Uthuru Atoll", "Baa Atoll",
                        "Dhaalu Atoll", "Faafu Atoll", "Gaaf Dhaal Atoll",
                        "Gaaf Alif Atoll", "Gnaviyani Atoll", "Haa Dhaal Atoll",
                        "Haa Alif Atoll", "Kaafu Atoll", "Laamu Atoll",
                        "Lhaviyani Atoll", "Meemu Atoll", "Noonu Atoll",
                        "Raa Atoll", "Thaa Atoll", "Vaavu Atoll"
                    ];
                } else if (country === "Mali") {
                    states = [
                        "Bamako", "Gao", "Kayes",
                        "Kidal", "Koulikoro", "Mopti",
                        "Sikasso", "Segou", "Tombouctou"
                    ];
                } else if (country === "Malta") {
                    states = [
                        "Gozo", "Malta"
                    ];
                } else if (country === "Mexico") {
                    states = [
                        "Aguascalientes", "Baja California", "Baja California Sur",
                        "Campeche", "Chiapas", "Chihuahua",
                        "Coahuila", "Colima", "Durango",
                        "Guanajuato", "Guerrero", "Hidalgo",
                        "Jalisco", "Mexico State", "Michoacán",
                        "Morelos", "Nayarit", "Nuevo León",
                        "Oaxaca", "Puebla", "Querétaro",
                        "Quintana Roo", "San Luis Potosí", "Sinaloa",
                        "Sonora", "Tabasco", "Tamaulipas",
                        "Tlaxcala", "Veracruz", "Yucatán",
                        "Zacatecas"
                    ];
                } else if (country === "Moldova") {
                    states = [
                        "Bălți", "Bender", "Chișinău",
                        "Cahul", "Căușeni", "Criuleni",
                        "Drochia", "Edineț", "Fălești",
                        "Florești", "Hîncești", "Ialoveni",
                        "Nisporeni", "Ocnița", "Orhei",
                        "Rîșcani", "Sîngerei", "Soroca",
                        "Strășeni", "Taraclia", "Telenești",
                        "Ungheni"
                    ];
                } else if (country === "Monaco") {
                    states = [
                        "Monaco"
                    ];
                } else if (country === "Mongolia") {
                    states = [
                        "Arhangai", "Bayan-Olgii", "Bayankhongor",
                        "Bulgan", "Darkhan-Uul", "Dornod",
                        "Dornogovi", "Duvankhad", "Gobi-Altai",
                        "Khentii", "Khovd", "Khuvsgul",
                        "Orkhon", "Selenge", "Somon",
                        "Tuv", "Uvs"
                    ];
                } else if (country === "Montenegro") {
                    states = [
                        "Andrijevica", "Bar", "Berane",
                        "Bijelo Polje", "Budva", "Herceg Novi",
                        "Kolašin", "Nikšić", "Plav",
                        "Pljevlja", "Podgorica", "Rožaje",
                        "Tivat", "Užice", "Zabljak"
                    ];
                }


                if (country === "Namibia") {
                    states = [
                        "Caprivi", "Erongo", "Hardap",
                        "Karas", "Kavango East", "Kavango West",
                        "Khomas", "Otjozondjupa", "Omaheke",
                        "Omusati", "Oshana", "Oshikoto",
                        "Zambezi"
                    ];
                } else if (country === "Nauru") {
                    states = [
                        "Ainmari", "Boe", "Buada",
                        "Denigomodu", "Nauru", "Yaren"
                    ];
                } else if (country === "Nepal") {
                    states = [
                        "Bagmati", "Gandaki", "Karnali",
                        "Lumbini", "Mahakali", "Mechi",
                        "Madhesh", "Seti", "Sudurpashchim"
                    ];
                } else if (country === "Netherlands") {
                    states = [
                        "Drenthe", "Flevoland", "Friesland",
                        "Gelderland", "Groningen", "Limburg",
                        "North Brabant", "North Holland", "Overijssel",
                        "South Holland", "Utrecht", "Zeeland"
                    ];
                } else if (country === "New Zealand") {
                    states = [
                        "Auckland", "Bay of Plenty", "Canterbury",
                        "Gisborne", "Hawke's Bay", "Manawatu-Wanganui",
                        "Marlborough", "Nelson", "Northland",
                        "Otago", "Southland", "Taranaki",
                        "Wairarapa", "Waikato", "Wellington"
                    ];
                } else if (country === "Nicaragua") {
                    states = [
                        "Chinandega", "Chontales", "Estelí",
                        "Granada", "Jinotega", "León",
                        "Masaya", "Matagalpa", "Rivas",
                        "Managua"
                    ];
                } else if (country === "Niger") {
                    states = [
                        "Agadez", "Diffa", "Dosso",
                        "Maradi", "Niamey", "Tahoua",
                        "Tillabéri", "Zinder"
                    ];
                } else if (country === "Nigeria") {
                    states = [
                        "Abia", "Adamawa", "Akwa Ibom",
                        "Anambra", "Bauchi", "Bayelsa",
                        "Benue", "Borno", "Cross River",
                        "Delta", "Ebonyi", "Edo",
                        "Ekiti", "Enugu", "Gombe",
                        "Imo", "Jigawa", "Kaduna",
                        "Kano", "Kogi", "Kwara",
                        "Lagos", "Nasarawa", "Niger",
                        "Ogun", "Ondo", "Osun",
                        "Oyo", "Plateau", "Rivers",
                        "Sokoto", "Taraba", "Yobe",
                        "Zamfara"
                    ];
                } else if (country === "North Macedonia") {
                    states = [
                        "Aegean Macedonia", "Vardar", "Eastern Macedonia and Thrace",
                        "Skopje", "Pelagonia", "Polog",
                        "Bitola", "Southeast", "Northwest"
                    ];
                } else if (country === "Norway") {
                    states = [
                        "Akershus", "Aust-Agder", "Buskerud",
                        "Finnmark", "Hedmark", "Hedmark",
                        "More og Romsdal", "Nordland", "Oppland",
                        "Oslo", "Rogaland", "Sogn og Fjordane",
                        "Telemark", "Troms", "Vest-Agder",
                        "Vestfold"
                    ];
                }

                if (country === "Oman") {
                    states = [
                        "Ad Dakhiliyah", "Al Batinah", "Al Dhahirah",
                        "Al Sharqiyah", "Al Wusta", "Dhofar",
                        "Muscat", "Musandam", "North Al Batinah",
                        "North Al Sharqiyah", "South Al Batinah", "South Al Sharqiyah"
                    ];
                }

                if (country === "Pakistan") {
                    states = [
                        "Azad Kashmir", "Balochistan", "Gilgit-Baltistan",
                        "Khyber Pakhtunkhwa", "Punjab", "Sindh"
                    ];
                } else if (country === "Palau") {
                    states = [
                        "Babeldaob", "Koror", "Peleliu",
                        "Angaur", "Sonsorol", "Hatohobei"
                    ];
                } else if (country === "Panama") {
                    states = [
                        "Bocas del Toro", "Chiriquí", "Coclé",
                        "Colón", "Darien", "Herrera",
                        "Los Santos", "Panamá", "Veraguas"
                    ];
                } else if (country === "Papua New Guinea") {
                    states = [
                        "Central", "Gulf", "Milne Bay",
                        "Morobe", "New Ireland", "East New Britain",
                        "West New Britain", "Western", "Southern Highlands",
                        "Enga", "Hela", "Western Highlands",
                        "East Sepik", "West Sepik", "Madang",
                        "Oro"
                    ];
                } else if (country === "Peru") {
                    states = [
                        "Amazonas", "Áncash", "Apurímac",
                        "Arequipa", "Ayacucho", "Cajamarca",
                        "Callao", "Cusco", "Huancavelica",
                        "Huánuco", "Ica", "Junín",
                        "La Libertad", "Lambayeque", "Lima",
                        "Loreto", "Madre de Dios", "Moquegua",
                        "Pasco", "Piura", "Puno",
                        "San Martín", "Tacna", "Tumbes",
                        "Ucayali"
                    ];
                } else if (country === "Philippines") {
                    states = [
                        "Abra", "Agusan del Norte", "Agusan del Sur",
                        "Aklan", "Albay", "Antique",
                        "Apayao", "Aurora", "Basilan",
                        "Bataan", "Batanes", "Batangas",
                        "Benguet", "Bohol", "Bukidnon",
                        "Bulacan", "Cagayan", "Camarines Norte",
                        "Camarines Sur", "Camiguin", "Capiz",
                        "Catanduanes", "Cavite", "Cebu",
                        "Compostela Valley", "Davao del Norte", "Davao del Sur",
                        "Davao Occidental", "Eastern Samar", "Guimaras",
                        "Ifugao", "Ilocos Norte", "Ilocos Sur",
                        "Iloilo", "Isabela", "Kalinga",
                        "La Union", "Laguna", "Lanao del Norte",
                        "Lanao del Sur", "Leyte", "Maguindanao",
                        "Marinduque", "Masbate", "Misamis Occidental",
                        "Misamis Oriental", "Mountain Province", "Negros Occidental",
                        "Negros Oriental", "Northern Samar", "Nueva Ecija",
                        "Nueva Vizcaya", "Occidental Mindoro", "Oriental Mindoro",
                        "Palawan", "Pampanga", "Pangasinan",
                        "Quezon", "Quirino", "Rizal",
                        "Romblon", "Samar", "Sarangani",
                        "Siquijor", "Sorsogon", "South Cotabato",
                        "Southern Leyte", "Sultan Kudarat", "Tarlac",
                        "Tawi-Tawi", "Zambales", "Zamboanga del Norte",
                        "Zamboanga del Sur", "Zamboanga Sibugay"
                    ];
                } else if (country === "Portugal") {
                    states = [
                        "Aveiro", "Beja", "Braga",
                        "Bragança", "Castelo Branco", "Coimbra",
                        "Évora", "Faro", "Guarda",
                        "Leiria", "Lisbon", "Portalegre",
                        "Porto", "Santarém", "Setúbal",
                        "Viana do Castelo", "Vila Real", "Viseu"
                    ];
                }


                if (country === "Qatar") {
                    states = [
                        "Ad Dawhah", "Al Gharbiyah", "Al Khawr",
                        "Al Rayyan", "Al Wakrah", "Ash Shamal",
                        "Az Za'ayin", "Doha", "Umm Salal"
                    ];
                }


                if (country === "Romania") {
                    states = [
                        "Alba", "Arad", "Arges", "Bacau", "Bihor",
                        "Bistrita-Nasaud", "Botosani", "Braila", "Brasov",
                        "Bucuresti", "Buzau", "Calarasi", "Caras-Severin",
                        "Cluj", "Constanta", "Dambovita", "Dolj",
                        "Galati", "Giurgiu", "Gorj", "Harghita",
                        "Hunedoara", "Ialomita", "Iasi", "Ilfov",
                        "Maramures", "Mehedinti", "Mures", "Neamt",
                        "Olt", "Prahova", "Satu Mare", "Salaj",
                        "Sibiu", "Suceava", "Teleorman", "Timis",
                        "Tulcea", "Vaslui", "Valcea", "Vrancea"
                    ];
                } else if (country === "Russia") {
                    states = [
                        "Adygea", "Altai", "Bashkortostan", "Buryatia",
                        "Chechen", "Chelyabinsk", "Chuvashia", "Dagestan",
                        "Ingushetia", "Kabardino-Balkaria", "Kalmykia",
                        "Karelia", "Khakassia", "Komi", "Mari El",
                        "Mordovia", "North Ossetia", "Sakha", "Tatarstan",
                        "Tuva", "Udmurtia", "Volgograd", "Yamalo-Nenets"
                    ];
                }



                if (country === "Saudi Arabia") {
                    states = [
                        "Al Bahah", "Al Jawf", "Al Madinah", "Al Qassim",
                        "Al Riyadh", "Asir", "Eastern Province", "Jizan",
                        "Makkah", "Najran", "Northern Borders", "Tabuk"
                    ];
                } else if (country === "Senegal") {
                    states = [
                        "Dakar", "Diourbel", "Fatick", "Kaolack",
                        "Kedougou", "Kolda", "Louga", "Matam",
                        "Saint-Louis", "Sedhiou", "Tambacounda", "Thies",
                        "Ziguinchor"
                    ];
                } else if (country === "Sierra Leone") {
                    states = [
                        "Bombali", "Bonthe", "Kailahun", "Kambia",
                        "Kenema", "Kono", "Port Loko", "Pujehun",
                        "Western Area"
                    ];
                } else if (country === "Singapore") {
                    states = [
                        "Central Region", "East Region", "North Region",
                        "North-East Region", "West Region"
                    ];
                } else if (country === "Slovakia") {
                    states = [
                        "Bratislava", "Trnava", "Nitra", "Zilina",
                        "Banska Bystrica", "Prešov", "Košice"
                    ];
                } else if (country === "Slovenia") {
                    states = [
                        "Pomurska", "Podravska", "Zasavska", "Posavska",
                        "Savinja", "Central Sava", "Gorenjska", "Goriška",
                        "Jugovzhodna Slovenia"
                    ];
                } else if (country === "South Africa") {
                    states = [
                        "Eastern Cape", "Free State", "Gauteng", "Kwazulu-Natal",
                        "Limpopo", "Mpumalanga", "Northern Cape", "North West",
                        "Western Cape"
                    ];
                } else if (country === "South Korea") {
                    states = [
                        "Seoul", "Busan", "Incheon", "Gwangju",
                        "Daejeon", "Ulsan", "Sejong", "Gyeonggi-do",
                        "Gangwon-do", "Chungcheongbuk-do", "Chungcheongnam-do",
                        "Jeollabuk-do", "Jeollanam-do", "Gyeongsangbuk-do",
                        "Gyeongsangnam-do", "Jeju-do"
                    ];
                } else if (country === "Spain") {
                    states = [
                        "Andalusia", "Aragon", "Asturias", "Balearic Islands",
                        "Basque Country", "Canary Islands", "Cantabria",
                        "Castile and León", "Castilla-La Mancha", "Catalonia",
                        "Extremadura", "Galicia", "La Rioja", "Madrid",
                        "Murcia", "Navarre", "Valencian Community"
                    ];
                } else if (country === "Sweden") {
                    states = [
                        "Stockholm", "Uppsala", "Södermanland", "Östergötland",
                        "Jönköping", "Kronoberg", "Kalmar", "Gotland",
                        "Blekinge", "Skåne", "Halland", "Västra Götaland",
                        "Värmland", "Örebro", "Dalarna", "Gävleborg",
                        "Hälsingland", "Jämtland", "Västernorrland",
                        "Västerbotten", "Norrbotten"
                    ];
                } else if (country === "Switzerland") {
                    states = [
                        "Aargau", "Appenzell Innerrhoden", "Appenzell Ausserrhoden",
                        "Basel-Country", "Basel-City", "Bern", "Fribourg",
                        "Geneva", "Glarus", "Graubünden", "Lucerne",
                        "Neuchâtel", "Nidwalden", "Obwalden", "Schaffhausen",
                        "Solothurn", "Thurgau", "Uri", "Valais",
                        "Vaud", "Zug", "Zurich"
                    ];
                }


                if (country === "Tajikistan") {
                    states = [
                        "Dushanbe", "Gorno-Badakhshan", "Khatlon",
                        "Sughd", "Districts of Republican Subordination"
                    ];
                } else if (country === "Tanzania") {
                    states = [
                        "Arusha", "Dar es Salaam", "Dodoma",
                        "Geita", "Kagera", "Katavi", "Kigoma",
                        "Kilimanjar", "Lindi", "Manyara", "Mara",
                        "Mbeya", "Morogoro", "Mtwara", "Njombe",
                        "Pemba North", "Pemba South", "Rukwa",
                        "Ruvuma", "Shinyanga", "Simiyu",
                        "Singida", "Tabora", "Tanga"
                    ];
                } else if (country === "Thailand") {
                    states = [
                        "Bangkok", "Chiang Mai", "Chonburi",
                        "Krabi", "Lampang", "Nakhon Pathom",
                        "Nakhon Ratchasima", "Nakhon Si Thammarat",
                        "Nonthaburi", "Pathum Thani", "Phetchaburi",
                        "Phuket", "Rayong", "Samut Prakan",
                        "Samut Sakhon", "Saraburi", "Surat Thani",
                        "Ubon Ratchathani", "Uttaradit"
                    ];
                } else if (country === "Togo") {
                    states = [
                        "Maritime", "Plateau", "Central",
                        "Kara", "Savanes"
                    ];
                } else if (country === "Tonga") {
                    states = [
                        "Haʻapai", "Vavaʻu", "Tongatapu", "ʻEua",
                        "Niuas"
                    ];
                } else if (country === "Trinidad and Tobago") {
                    states = [
                        "Trinidad", "Tobago"
                    ];
                } else if (country === "Tunisia") {
                    states = [
                        "Ariana", "Beja", "Ben Arous", "Bizerte",
                        "Gabès", "Gafsa", "Jendouba", "Kairouan",
                        "Kasserine", "Kébili", "Manouba", "Medenine",
                        "Monastir", "Nabeul", "Sfax", "Sousse",
                        "Tunis", "Zaghouan"
                    ];
                } else if (country === "Turkey") {
                    states = [
                        "Adana", "Adiyaman", "Afyonkarahisar",
                        "Ağrı", "Amasya", "Ankara", "Antalya",
                        "Artvin", "Aydın", "Balıkesir", "Bilecik",
                        "Bingöl", "Bitlis", "Bolu", "Burdur",
                        "Bursa", "Çanakkale", "Çankırı", "Denizli",
                        "Diyarbakır", "Edirne", "Elazığ", "Erzincan",
                        "Erzurum", "Eskişehir", "Gaziantep", "Giresun",
                        "Gümüşhane", "Hakkari", "Hatay", "Iğdır",
                        "Isparta", "Istanbul", "Izmir", "Kahramanmaraş",
                        "Karabük", "Kars", "Kastamonu", "Kayseri",
                        "Kırıkkale", "Kırklareli", "Kocaeli", "Konya",
                        "Kütahya", "Malatya", "Manisa", "Mardin",
                        "Mugla", "Nevşehir", "Niğde", "Ordu",
                        "Osmaniye", "Rize", "Sakarya", "Samsun",
                        "Siirt", "Sinop", "Sivas", "Tekirdağ",
                        "Tokat", "Trabzon", "Tunceli", "Şanlıurfa",
                        "Uşak", "Van", "Yalova", "Yozgat",
                        "Zonguldak"
                    ];
                }


                if (country === "Uganda") {
                    states = [
                        "Central Region", "Eastern Region", "Northern Region", "Western Region"
                    ];
                } else if (country === "Ukraine") {
                    states = [
                        "Cherkasy Oblast", "Chernihiv Oblast", "Chernivtsi Oblast",
                        "Dnipropetrovsk Oblast", "Donetsk Oblast", "Ivano-Frankivsk Oblast",
                        "Kharkiv Oblast", "Kherson Oblast", "Khmelnytskyi Oblast",
                        "Kirovohrad Oblast", "Lviv Oblast", "Mykolaiv Oblast",
                        "Odessa Oblast", "Poltava Oblast", "Rivne Oblast",
                        "Sumy Oblast", "Ternopil Oblast", "Vinnytsia Oblast",
                        "Volyn Oblast", "Zaporozhye Oblast", "Zhytomyr Oblast",
                        "Autonomous Republic of Crimea"
                    ];
                } else if (country === "United Arab Emirates") {
                    states = [
                        "Abu Dhabi", "Ajman", "Dubai", "Fujairah",
                        "Ras Al Khaimah", "Sharjah", "Umm Al-Quwain"
                    ];
                } else if (country === "United Kingdom") {
                    states = [
                        "England", "Northern Ireland", "Scotland", "Wales"
                    ];
                } else if (country === "United States of America") {
                    states = [
                        "Alabama", "Alaska", "Arizona", "Arkansas", "California",
                        "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
                        "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
                        "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
                        "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
                        "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
                        "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
                        "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
                        "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
                        "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
                    ];
                } else if (country === "Uruguay") {
                    states = [
                        "Artigas", "Canelones", "Cerro Largo", "Colonia",
                        "Durazno", "Flores", "Florida", "Lavalleja",
                        "Maldonado", "Montevideo", "Paysandú", "Rio Negro",
                        "Rivera", "Rocha", "Salto", "San José",
                        "Soriano", "Tacuarembó", "Treinta y Tres"
                    ];
                }

                if (country === "Vanuatu") {
                    states = [
                        "Malampa", "Penama", "Sanma", "Shefa", "Tafea", "Torba"
                    ];
                } else if (country === "Vatican City") {
                    states = []; // Vatican City is a city-state with no subdivisions
                } else if (country === "Venezuela") {
                    states = [
                        "Amazonas", "Anzoátegui", "Apure", "Aragua", "Barinas",
                        "Bolívar", "Carabobo", "Cojedes", "Delta Amacuro", "Falcon",
                        "Guárico", "Lara", "Merida", "Miranda", "Monagas",
                        "Nueva Esparta", "Portuguesa", "Sucre", "Táchira",
                        "Trujillo", "Vargas", "Yaracuy", "Zulia"
                    ];
                } else if (country === "Vietnam") {
                    states = [
                        "An Giang", "Bac Giang", "Bac Kan", "Bac Ninh",
                        "Binh Dinh", "Binh Duong", "Binh Phuoc", "Ca Mau",
                        "Cao Bang", "Dak Lak", "Dak Nong", "Da Nang",
                        "Dong Nai", "Dong Thap", "Hau Giang", "Hanoi",
                        "Ha Giang", "Ha Nam", "Ha Tinh", "Ho Chi Minh City",
                        "Hoa Binh", "Hung Yen", "Khanh Hoa", "Kien Giang",
                        "Lai Chau", "Lang Son", "Nam Dinh", "Ninh Binh",
                        "Ninh Thuan", "Phu Tho", "Quang Binh", "Quang Nam",
                        "Quang Ngai", "Quang Ninh", "Soc Trang", "Son La",
                        "Tay Ninh", "Thai Binh", "Thai Nguyen", "Thanh Hoa",
                        "Thua Thien-Hue", "Tien Giang", "Tra Vinh", "Vinh Long",
                        "Vinh Phuc", "Yen Bai"
                    ];
                }

                if (country === "Wales") {
                    states = []; // Wales is a country within the United Kingdom and doesn't have separate states.
                } else if (country === "Western Sahara") {
                    states = []; // Western Sahara is a disputed territory, not a country with states.
                }






                if (country === "Yemen") {
                    states = [
                        "Aden", "Amran", "Al-Bayda", "Al-Dhalea", "Al-Jawf",
                        "Al-Mahwit", "Dhamar", "Hajjah", "Ibb", "Lahij",
                        "Marib", "Saada", "Sana'a", "Shabwa", "Hadramaut",
                        "Socotra", "Al-Mahrah"
                    ];
                }

                if (country === "Zimbabwe") {
                    states = [
                        "Bulawayo", "Harare", "Manicaland", "Mashonaland Central",
                        "Mashonaland East", "Mashonaland West", "Masvingo",
                        "Midlands", "Matabeleland North", "Matabeleland South"
                    ];
                }



                if (country === "Iran") {
                    states = [
                        "Alborz", "Ardabil", "Bushehr", "Chaharmahal and Bakhtiari",
                        "East Azerbaijan", "Esfahan", "Fars", "Gilan",
                        "Golestan", "Hamadan", "Hormozgan", "Kerman",
                        "Kermanshah", "Khuzestan", "Kohgiluyeh and Boyer-Ahmad",
                        "Lorestan", "Markazi", "Mazandaran", "Qazvin",
                        "Qom", "Semnan", "Sistan and Baluchestan", "Tehran",
                        "Yazd", "Zanjan"
                    ];
                } else if (country === "Iraq") {
                    states = [
                        "Al Anbar", "Al Qadisiyyah", "Al Sulaymaniyah", "Arbil",
                        "Baghdad", "Dhi Qar", "Diyala", "Karbalā'",
                        "Kirkuk", "Maysan", "Najaf", "Nineveh",
                        "Saladin", "Wasit", "Basra", "Babil"
                    ];
                } else if (country === "Ireland") {
                    states = [
                        "Carlow", "Cavan", "Clare", "Cork",
                        "Donegal", "Dublin", "Galway", "Kerry",
                        "Kildare", "Kilkenny", "Laois", "Leitrim",
                        "Limerick", "Longford", "Louth", "Mayo",
                        "Meath", "Monaghan", "Offaly", "Roscommon",
                        "Sligo", "Tipperary", "Waterford", "Westmeath",
                        "Wexford", "Wicklow"
                    ];
                }








                states.forEach(state => {
                    const option = document.createElement("option");
                    option.value = state;
                    option.textContent = state;
                    stateSelect.appendChild(option);
                });
            }

            function searchCategory() {
                const country = document.getElementById("country-select").value;
                const state = document.getElementById("state-select").value;
                const industry = document.getElementById("industry-select").value;

                alert(`Searching for ${industry} in ${state}, ${country}`);
            }

            function searchText() {
                const searchText = document.getElementById("search-input").value;
                alert(`Searching for: ${searchText}`);
            }
        </script>

    </div>













    <footer class="custom-footer">
        <div class="footer-container">
            <!-- First Div: Logo and Summary -->
            <div class="footer-logo-summary">
                <img src="./assets/logo.png" alt="Logo" class="footer-logo" style="max-width: 100px;">
                <p class="footer-summary">
                    CONNECT 767 unites professionals and business leaders to drive growth.
                </p>
            </div>

            <!-- Second Div: Quick Links -->
            <div class="footer-quick-links">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links-list">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">DIRECTORY</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">CUSTOMIZABLE UNIFORMS</a></li>
                </ul>
            </div>

            <!-- Third Div: Our Services -->
            <div class="footer-services">
                <h4 class="footer-heading">Our Services</h4>
                <ul class="footer-links-list">
                    <li><a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px;">&nbsp;</i>Professional
                            Networking</a></li>
                    <li><a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px;">&nbsp;</i>Consulting
                            Services</a></li>
                    <li><a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px;">&nbsp;</i>Workshops
                            &
                            Events</a></li>
                    <li><a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px;">&nbsp;</i>Partnership
                            Programs</a></li>
                </ul>
            </div>

            <!-- Fourth Div: Information with Social Media Icons -->
            <div class="footer-info">
                <h4 class="footer-heading">Information</h4>
                <ul class="footer-info-list">
                    <li><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;New York, NY, 10001</li>
                    <li> <i class="fa-solid fa-envelope"></i> &nbsp;<a
                            href="mailto:info@connect767.com">info@connect767.com</a></li>
                    <li><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Phone: 862-253-2076</li>
                </ul>
                <!-- Social Media Icons with a Different Class Name -->
                <div class="footer-social-media-icons">
                    <a href="#" class="social-icon"><img src="./assets/fb.png" alt="Facebook"
                            style="border-radius: 100%;"></a>
                    <a href="#" class="social-icon"><img src="./assets/twitter.png" alt="Twitter"
                            style="border-radius: 100%;"></a>
                    <a href="#" class="social-icon"><img src="./assets/youtube.png" alt="YouTube"
                            style="border-radius: 100%;"></a>
                    <a href="#" class="social-icon"><img src="./assets/Instagram.webp" alt="Instagram"
                            style="border-radius: 100%;"></a>
                </div>
            </div>
        </div>




    </footer>


    <!-- Copyright Section -->
    <div class="footer-copyright">
        <p>&copy; Copyright 2024 NY Creative Studio All Rights Reserved</p>
    </div>






</body>

</html>