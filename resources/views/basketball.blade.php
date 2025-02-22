<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basketball Kit</title>
    <link rel="stylesheet" href="assets/customizable/styles.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="icon" type="image/png" href="./assets/logo.png" />

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body>
    <!-- Navbar starts -->

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
    <!-- Navbar Ends -->

    <!-- MAIN SECTION STARTS FROM HERE -->

    <div class="main-section">
        <div class="left-section">
            <div class="icon-list">
                <div class="icon" onclick="openTab('categories')">
                    <img src="./assets/categories-icon.png" alt="categories Icon" class="tab-icon" width="50px" />
                    <span class="tab-label"></span>
                </div>

                <div class="icon" onclick="openTab('Shirts')">
                    <img src="./assets/style.png" alt="Shirts Icon" class="tab-icon" width="50px" />

                    <span class="tab-label"></span>
                </div>
                <div class="icon" onclick="openTab('Logos')">
                    <img src="./assets/c-logo.png" alt="Logos Icon" class="tab-icon" width="50px" />
                    <span class="tab-label"></span>
                </div>
                <div class="icon" onclick="openTab('Text')">
                    <img src="./assets/text.png" alt="Text Icon" class="tab-icon" width="50px" />
                    <span class="tab-label"></span>
                </div>



                <div class="icon" onclick="openTab('SocksColor')">
                    <img src="./assets/colors.png" alt="Socks Color Icon" class="tab-icon" width="50px" />
                    <span class="tab-label"></span>
                </div>


                <div class="icon" onclick="openTab('colorpicker')">
                    <img src="./assets/colorbucketicon.png" alt="Socks Color Icon" class="tab-icon" width="50px" />
                    <span class="tab-label"></span>
                </div>

                <!-- <div class="icon" onclick="openTab('Patterns')">
          <img src="./assets/pattern-icon.png" alt="Patterns Icon" class="tab-icon" width="50px" />
          <span class="tab-label"></span>
        </div> -->


                <!-- Add more icons for other categories -->
            </div>
            <div class="items-list">
                <div class="tabcontent" id="Shirts">
                    <img src="./assets/basketball-kit/basketball-kit-1.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-1.png')" alt="Shirt 1" />
                    <img src="./assets/basketball-kit/basketball-kit-2.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-2.png')" alt="Shirt 2" />
                    <img src="./assets/basketball-kit/basketball-kit-3.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-3.png')" alt="Shirt 3" />

                    <img src="./assets/basketball-kit/basketball-kit-4.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-4.png')" alt="Shirt 4" />

                    <img src="./assets/basketball-kit/basketball-kit-5.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-5.png')" alt="Shirt 5" />

                    <img src="./assets/basketball-kit/basketball-kit-6.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-6.png')" alt="Shirt 6" />

                    <img src="./assets/basketball-kit/basketball-kit-7.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-7.png')" alt="Shirt 7" />

                    <img src="./assets/basketball-kit/basketball-kit-8.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-8.png')" alt="Shirt 8" />

                    <img src="./assets/basketball-kit/basketball-kit-9.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-9.png')" alt="Shirt 9" />

                    <img src="./assets/basketball-kit/basketball-kit-10.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-10.png')" alt="Shirt 10" />

                    <img src="./assets/basketball-kit/basketball-kit-11.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-11.png')" alt="Shirt 11" />

                    <img src="./assets/basketball-kit/basketball-kit-12.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-12.png')" alt="Shirt 12" />

                    <img src="./assets/basketball-kit/basketball-kit-13.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-13.png')" alt="Shirt 13" />

                    <img src="./assets/basketball-kit/basketball-kit-14.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-14.png')" alt="Shirt 14" />

                    <img src="./assets/basketball-kit/basketball-kit-15.png" class="shirt"
                        onclick="selectShirt('./assets/basketball-kit/basketball-kit-15.png')" alt="Shirt 15" />
                </div>

                <div class="tabcontent" id="Logos" style="display: none">
                    <img src="./assets/Logos/p-logo1.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo1.png')" alt="Logo 1" />

                    <img src="./assets/Logos/p-logo2.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo2.png')" alt="Logo 2" />

                    <img src="./assets/Logos/p-logo3.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo3.png')" alt="Logo 3" />

                    <img src="./assets/Logos/p-logo4.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo4.png')" alt="Logo 4" />

                    <img src="./assets/Logos/p-logo5.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo5.png')" alt="Logo 5" />

                    <img src="./assets/Logos/p-logo6.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo6.png')" alt="Logo 6" />

                    <img src="./assets/Logos/p-logo7.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo7.png')" alt="Logo 7" />

                    <img src="./assets/Logos/p-logo8.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo8.png')" alt="Logo 8" />

                    <img src="./assets/Logos/p-logo9.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo9.png')" alt="Logo 9" />

                    <img src="./assets/Logos/p-logo10.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo10.png')" alt="Logo 10" />

                    <img src="./assets/Logos/p-logo11.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo11.png')" alt="Logo 11" />

                    <img src="./assets/Logos/p-logo12.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo12.png')" alt="Logo 12" />

                    <img src="./assets/Logos/p-logo13.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo13.png')" alt="Logo 13" />

                    <img src="./assets/Logos/p-logo14.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo14.png')" alt="Logo 14" />

                    <img src="./assets/Logos/p-logo15.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo15.png')" alt="Logo 15" />

                    <img src="./assets/Logos/p-logo16.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo16.png')" alt="Logo 16" />

                    <img src="./assets/Logos/p-logo17.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo17.png')" alt="Logo 17" />

                    <img src="./assets/Logos/p-logo18.png" class="logo"
                        onclick="selectLogo('./assets/Logos/p-logo18.png')" alt="Logo 18" />
                </div>



                <div class="tabcontent" id="Text" style="display: none">
                    <label for="custom-text">Enter Your Text</label>
                    <textarea id="custom-text" name="custom-text" rows="4" cols="36"></textarea><br><br>



                    <label for="font-style">Font Style</label>
                    <select id="font-style" name="font-style" style="width: 87%;">
                        <option value="Arial" selected>Arial</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Comic Sans MS">Comic Sans MS</option>
                        <option value="Trebuchet MS">Trebuchet MS</option>
                        <option value="Lucida Sans">Lucida Sans</option>
                        <option value="Palatino Linotype">Palatino Linotype</option>
                        <option value="Tahoma">Tahoma</option>
                        <option value="Garamond">Garamond</option>
                        <option value="Impact">Impact</option>
                        <option value="Helvetica">Helvetica</option>
                        <option value="Century Gothic">Century Gothic</option>
                        <option value="Calibri">Calibri</option>

                        <option value="Brush Script MT">Brush Script MT</option>
                    </select><br><br>

                    <label for="font-size">Font Size </label>
                    <input type="number" id="font-size" name="font-size" value="22" min="1"
                        style="padding: 10px; width: 20%;"><br>

                    <button id="update-text" style="margin-top: 10px;">Update Text</button>
                </div>

                <script>
                    $(function() {
                        // Update the text in #text-display when the button is clicked
                        $("#update-text").click(function() {
                            var enteredText = $("#custom-text").val();
                            $("#text-display").text(enteredText);

                            // Update font size based on input
                            var fontSize = $("#font-size").val();
                            $("#text-display").css("font-size", fontSize + "px");

                            // Update font style based on selection
                            var fontStyle = $("#font-style").val();
                            $("#text-display").css("font-family", fontStyle);
                        });
                    });
                </script>

                <div class="tabcontent" id="Color" style="display: none">
                    <input type="color" id="colorPicker" onchange="updateColor(this.value)" />
                </div>

                <div class="tabcontent" id="categories" style="display: none">
                    <a href="{{route('soccer')}}"><img src="./assets/soccer-icon.png" /></a>

                    <a href="{{route('cricket')}}"><img src="./assets/Cricketkit.png" /></a>

                    <a href="{{route('basketball')}}"><img src="./assets/basketball-kit.png" /></a>
                </div>


                <script>
                    function updateShirtColor(color) {
                        const selectedShirt = document.getElementById('selected-shirt'); // Select the specific shirt by ID
                        selectedShirt.style.filter = `hue-rotate(${getHueFromColor(color)}deg)`; // Update the filter
                    }

                    function getHueFromColor(color) {
                        const hex = color.slice(1); // Remove the '#' from the color
                        const r = parseInt(hex.substring(0, 2), 16);
                        const g = parseInt(hex.substring(2, 4), 16);
                        const b = parseInt(hex.substring(4, 6), 16);

                        // Convert RGB to HSL and get the Hue
                        const max = Math.max(r, g, b);
                        const min = Math.min(r, g, b);
                        let hue;

                        if (max === min) {
                            hue = 0; // Achromatic
                        } else if (max === r) {
                            hue = (60 * (g - b) / (max - min) + 360) % 360;
                        } else if (max === g) {
                            hue = (60 * (b - r) / (max - min) + 120) % 360;
                        } else {
                            hue = (60 * (r - g) / (max - min) + 240) % 360;
                        }

                        return hue;
                    }
                </script>




                <div class="tabcontent" id="SocksColor" style="display: none">
                    <!-- <input
              type="color"
              id="socksColorPicker"
              onchange="updateSocksColor(this.value)"
            /> -->
                    <img src="./assets/clr/skyblue.png" alt="" />
                    <img src="./assets/clr/black.jpg" alt="" />
                    <img src="./assets/clr/gray.jpg" alt="" />
                    <img src="./assets/clr/lightgreen.jpg" alt="" />
                    <img src="./assets/clr/red.jpg" alt="" />
                    <img src="./assets/clr/purple.jpg" alt="" />
                    <img src="./assets/clr/brown.jpg" alt="" />
                    <img src="./assets/clr/green.jpg" alt="" />
                    <img src="./assets/clr/blue.jpg" alt="" />
                    <img src="./assets/clr/yellow.jpg" alt="" />
                    <img src="./assets/clr/lightblue.png" alt="" />
                    <img src="./assets/clr/orange.png" alt="" />
                </div>


                <div class="tabcontent" id="colorpicker" style="display: none">

                    <div class="picker-div">
                        <label for="color-picker">Choose a Shirt color: &nbsp; &nbsp;</label>
                        <input type="color" id="color-picker" onchange="updateShirtColor(this.value)"><br>
                    </div>

                    <div class="picker-div">
                        <label for="pattern-color-picker">Choose a Pattern color:</label>
                        <input type="color" id="pattern-color-picker" onchange="updatePatternColor(this.value)" />
                    </div>

                </div>


                <div class="tabcontent" id="Patterns" style="display: none;">
                    <h3></h3>
                    <div class="pattern-options">
                        <img src="./assets/soccer-shirts/pattern1.png" alt="Pattern 1" class="pattern-option"
                            onclick="selectPattern('./assets/soccer-shirts/pattern1.png')" />
                        <img src="./assets/soccer-shirts/pattern2.png" alt="Pattern 2" class="pattern-option"
                            onclick="selectPattern('./assets/soccer-shirts/pattern2.png')" />


                        <!-- Add more patterns as needed -->
                    </div>
                </div>

            </div>
            <script>
                function selectPattern(patternPath) {
                    const selectedPattern = document.getElementById('selected-pattern');
                    selectedPattern.src = patternPath; // Change the source of the pattern image
                    selectedPattern.style.display = 'block'; // Show the pattern overlay if hidden
                }


                function openTab(tabName) {
                    const tabcontents = document.querySelectorAll('.tabcontent');
                    tabcontents.forEach((tab) => {
                        tab.style.display = 'none'; // Hide all tab contents
                    });
                    document.getElementById(tabName).style.display = 'block'; // Show the selected tab
                }
            </script>


            <script>
                function updatePatternColor(color) {
                    const selectedPattern = document.getElementById('selected-pattern'); // Select the pattern by ID
                    const hueValue = getHueFromColor(color); // Convert the selected color to hue value
                    selectedPattern.style.filter =
                        `hue-rotate(${hueValue}deg) saturate(1)`; // Apply hue-rotate and other filters as needed
                }

                // Function to convert the selected color to a hue value for the hue-rotate filter
                function getHueFromColor(color) {
                    const hex = color.slice(1); // Remove the '#' from the color code
                    const r = parseInt(hex.substring(0, 2), 16);
                    const g = parseInt(hex.substring(2, 4), 16);
                    const b = parseInt(hex.substring(4, 6), 16);

                    // Convert RGB to HSL and extract the Hue
                    const max = Math.max(r, g, b);
                    const min = Math.min(r, g, b);
                    let hue;

                    if (max === min) {
                        hue = 0; // Achromatic
                    } else if (max === r) {
                        hue = (60 * ((g - b) / (max - min)) + 360) % 360;
                    } else if (max === g) {
                        hue = (60 * ((b - r) / (max - min)) + 120) % 360;
                    } else {
                        hue = (60 * ((r - g) / (max - min)) + 240) % 360;
                    }

                    return hue;
                }
            </script>




            <!-- This section will dynamically show items (product thumbnails) when an icon is clicked -->
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="item-display" style="position: relative;">
                <!-- Add position: relative here -->
                <!-- Display the selected shirt -->
                <img id="selected-shirt" src="assets/basketball-kit/basketball-kit-1.png" alt="Selected Shirt" />

                <!-- Pattern overlay -->
                <img id="selected-pattern" src="./assets/soccer-shirts/Realshirts/pattern1.png" alt="Pattern Overlay"
                    class="pattern-overlay" style="display: none;" />

                <div id="text-display" style="position: absolute;"></div>

                <!-- Draggable and Resizable Logo with Handles -->
                <div id="logo-container" class="resizable-draggable">
                    <img id="selected-logo" src="" alt="" class="draggable" />
                    <div class="resizing-handle top-left"></div>
                    <div class="resizing-handle top-right"></div>
                    <div class="resizing-handle bottom-left"></div>
                    <div class="resizing-handle bottom-right"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN SECTION ENDS HERE -->

    <!-- FORM SECTION STARTS FROM HERE -->
    <form>
        <div class="head-box">
            <p class="mainheading">CUSTOM BASKETBALL KIT</p>

            <div class="m-pr">
                <p class="s-pr">$39.00</p>
                <input type="hidden" name="price" value="39">
                <img src="./assets/mystars.png" style="width: 100px" alt="" />
                <p class="str-r">5 reviews</p>
            </div>

            <!-- <p class="size-guide">Size Guide</p> -->
        </div>



        <div class="flex-form">
            <!-- Left Column -->
            <div class="form-column">
                <label for="sleeve-length">Sleeve Length </label>
                <select id="sleeve-length" name="sleeve-length">
                    <option value="">Select Sleeve Length</option>
                    <option value="short">Short</option>
                    <option value="long">Long $3.00</option>
                </select>

                <div class="form-group"></div>

                <div class="form-group">
                    <label for="collar-type">Collar Type</label>
                    <select id="collar-type" name="collar-type">
                        <option value="">Select Collar Type</option>
                        <option value="round-neck">Round Neck</option>
                        <option value="v-neck">V-Neck</option>
                        <option value="polo-style">Polo style 1$</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fit-type">Fit Type</label>
                    <select id="fit-type" name="fit-type">
                        <option value="">Select Fit Type</option>
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="youth">Youth</option>
                    </select>
                </div>


            </div>

            <!-- Right Column -->
            <div class="form-column">
                <div class="form-group">
                    <label for="team-logo">Team Logo</label>
                    <select id="team-logo" name="team-logo">
                        <option value="">Select Logo Style</option>
                        <option value="sublimated">Sublimated (Printed)</option>
                        <option value="embroidered">Embroidery $1.00</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kit">Kit</label>
                    <select id="kit" name="kit" onchange="toggleShortSize()">
                        <option value="full-kit">Full Kit</option>
                        <option value="shirt-only">Shirt Only</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inside-collar-message">Inside Collar Message</label>
                    <select id="inside-collar-message" name="inside-collar-message">
                        <option value="">Select Message Type</option>
                        <option value="yes">Yes $2</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="message-group" id="message-group" style="display: none;">
                    <label for="inside-collar-text">Enter Your Text</label>
                    <textarea id="inside-collar-text" name="inside_collar_message_text" rows="4" cols="36"></textarea>
                </div>


            </div>

        </div>


        <script>
            document.getElementById('inside-collar-message').addEventListener('change', function() {
                var messageGroup = document.getElementById('message-group');

                if (this.value === 'yes') {
                    messageGroup.style.display = 'block';
                } else if (this.value === 'no') {
                    messageGroup.style.display = 'none';
                }
            });
        </script>



        <!-- SIZING FORM STARTS FROM HERE -->

        <p class="size-guide">Size Guide</p>

        <div class="team-form-container">
            <form>
                <table class="team-roster-table">
                    <thead>
                        <tr>
                            <th>Name:</th>
                            <th>Number:</th>
                            <th>Shirt Size</th>
                            <th class="short-size-td">Short Size</th>
                            <th>Quantity </th>
                            <!-- <th>GK</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Repeatable Rows -->
                        <tr>
                            <td><input type="text" class="fi-name" name="name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <tr>
                            <td><input type="text" class="fi-name" placeholder="--" /></td>
                            <td><input type="text" class="fi-number" placeholder="--" /></td>
                            <td>
                                <select class="shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td class="short-size-td">
                                <select class="short-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>

                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                            <!-- <td><input type="checkbox" class="goalkeeper-checkbox" /></td> -->
                        </tr>

                        <!-- Repeat this block for as many rows as needed -->
                    </tbody>
                </table>
            </form>
        </div>

        <!-- SIZING FORM ENDS HERE -->

        <!-- FORM SECTION ENDS HERE -->







        <!-- Staff Management Section -->

        <!-- Staff Kit Filds Starts-->


        <form class="flex-form">
            <div class="form-group" style="width: 100%;">
                <label for="staff-other">Staff/Other</label>
                <select id="staff-other" name="staff-other">
                    <option value="">Select Option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <!-- Left Column -->
            <div class="form-column">


                <div class="form-group">


                    <div class="form-group" id="staff-kit-group">
                        <label for="staff-kit">Staff Kit</label>
                        <select id="staff-kit" name="staff-kit">
                            <option value="">Select Kit Option</option>
                            <option value="yes">Full Kit</option>
                            <option value="no">Shirt Only</option>
                        </select>
                    </div>




                    <div class="form-group" id="staff-fit-type-group">
                        <label for="staff-fit-type">Staff Fit Type</label>
                        <select id="staff-fit-type" name="staff-fit-type">
                            <option value="">Select Fit Type</option>
                            <option value="slim">Men</option>
                            <option value="regular">Women</option>
                            <option value="loose">Youth</option>
                        </select>
                    </div>

                </div>

            </div>



            <!-- Right Column -->
            <div class="form-column">

                <div class="form-group" id="staff-collar-type-group">
                    <label for="staff-collar-type">Staff Collar Type</label>
                    <select id="staff-collar-type" name="staff-collar-type">
                        <option value="">Select Collar Type</option>
                        <option value="round">Round Neck</option>
                        <option value="vneck">V Neck</option>
                        <option value="polo-style">Polo Style</option>
                    </select>
                </div>

            </div>
        </form>

        <!-- Staff Kit Filds Starts-->



        <!-- Staff Management Size Guide Starts -->


        <div class="team-form-container" id="staff-size-guide">
            <p class="size-guide" style="margin-left: -150px;"><i class="fa-solid fa-ruler"></i> Staff Size Guide</p>
            <form>
                <table class="team-roster-table">
                    <thead>
                        <tr>

                            <th>Staff Shirt Size</th>
                            <th class="pants-cell">Staff Pants Size</th>
                            <th>Quantity</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- Repeatable Rows -->
                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">

                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>

                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>



                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="Staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>

                        </tr>

                        <tr>

                            <td class="pants-cell">
                                <select class="staff-pants-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>
                            <td>
                                <select class="staff-shirt-size">
                                    <option value="">--</option>
                                    <option value="youth-xs">Youth XS</option>
                                    <option value="youth-s">Youth S</option>
                                    <option value="youth-m">Youth M</option>
                                    <option value="youth-l">Youth L</option>
                                    <option value="youth-xl">Youth XL</option>
                                    <option value="adult-xs">Adult XS</option>
                                    <option value="adult-s">Adult S</option>
                                    <option value="adult-m">Adult M</option>
                                    <option value="adult-l">Adult L</option>
                                    <option value="adult-xl">Adult XL</option>
                                </select>
                            </td>


                            <td><input type="number" class="Quantity-input" placeholder="0" min="1" /></td>


                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="btn_box">
            <button class="addtocart_btn">Add to cart</button>
        </div>
    </form>





    <!-- Staff Management Guide Ends -->


    <script>
        document.getElementById('staff-kit').addEventListener('change', function() {
            // Get the selected value
            var staffKitValue = this.value;

            // Get all <td> elements you want to hide
            var pantsCells = document.querySelectorAll('.pants-cell');

            if (staffKitValue === 'no') {
                // Hide all the pants <td> cells if "Shirt Only" is selected
                pantsCells.forEach(function(cell) {
                    cell.style.display = 'none';
                });
            } else {
                // Show all the pants <td> cells if "Full Kit" or any other value is selected
                pantsCells.forEach(function(cell) {
                    cell.style.display = 'table-cell';
                });
            }
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get references to the necessary elements
            const staffOtherSelect = document.getElementById("staff-other");
            const staffKitGroup = document.getElementById("staff-kit-group");
            const staffFitTypeGroup = document.getElementById("staff-fit-type-group");
            const staffCollarTypeGroup = document.getElementById("staff-collar-type-group");
            const staffsizeguide = document.getElementById("staff-size-guide");


            // Define the toggleFields function
            function toggleFields() {
                const selectedValue = staffOtherSelect.value;

                if (selectedValue === "yes") {
                    // Show fields if "Yes" is selected
                    staffKitGroup.style.display = "block";
                    staffFitTypeGroup.style.display = "block";
                    staffCollarTypeGroup.style.display = "block";
                    staffsizeguide.style.display = "block";
                } else {
                    // Hide the fields if "No" is selected or default
                    staffKitGroup.style.display = "none";
                    staffFitTypeGroup.style.display = "none";
                    staffCollarTypeGroup.style.display = "none";
                    staffsizeguide.style.display = "none";
                }
            }

            // Run the toggleFields function initially to set the correct state
            toggleFields();

            // Add an event listener for the select box
            staffOtherSelect.addEventListener("change", toggleFields);
        });
    </script>


    <!-- Staff Management Size Guide Ends -->


    <!-- Staff Management Section -->













    <!-- FOOTER STARTS FROM HERE -->

    <footer class="custom-footer">
        <div class="footer-container">
            <!-- First Div: Logo and Summary -->
            <div class="footer-logo-summary">
                <img src="./assets/logo.png" alt="Logo" class="footer-logo" style="max-width: 100px" />
                <p class="footer-summary">
                    CONNECT 767 unites professionals and business leaders to drive
                    growth.
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
                    <li>
                        <a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px">&nbsp;</i>Professional
                            Networking</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px">&nbsp;</i>Consulting
                            Services</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px">&nbsp;</i>Workshops
                            &
                            Events</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-angles-right" style="font-size: 12px">&nbsp;</i>Partnership
                            Programs</a>
                    </li>
                </ul>
            </div>

            <!-- Fourth Div: Information with Social Media Icons -->
            <div class="footer-info">
                <h4 class="footer-heading">Information</h4>
                <ul class="footer-info-list">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;New York, NY,
                        10001
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i> &nbsp;<a
                            href="mailto:info@connect767.com">info@connect767.com</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Phone: 862-253-2076
                    </li>
                </ul>
                <!-- Social Media Icons with a Different Class Name -->
                <div class="footer-social-media-icons">
                    <a href="#" class="social-icon"><img src="./assets/fb.png" alt="Facebook"
                            style="border-radius: 100%" /></a>
                    <a href="#" class="social-icon"><img src="./assets/twitter.png" alt="Twitter"
                            style="border-radius: 100%" /></a>
                    <a href="#" class="social-icon"><img src="./assets/youtube.png" alt="YouTube"
                            style="border-radius: 100%" /></a>
                    <a href="#" class="social-icon"><img src="./assets/Instagram.webp" alt="Instagram"
                            style="border-radius: 100%" /></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright Section -->
    <div class="footer-copyright">
        <p>&copy; Copyright 2024 NY Creative Studio All Rights Reserved</p>
    </div>

    <!-- FOOTER ENDS HERE -->

    <!-- JAVASCRITP STARTS FROM HERE -->

    <script>
        //for select shirt
        function toggleShortSize() {
            var kit = document.getElementById("kit").value;
            var tdElements = document.querySelectorAll(".short-size-td");

            tdElements.forEach(function(td) {
                if (kit === "shirt-only") {
                    td.style.display = "none";
                } else {
                    td.style.display = "table-cell";
                }
            });
        }

        // Show/hide tab content
        function openTab(tabName) {
            var i;
            var x = document.getElementsByClassName("tabcontent");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }

        // Select shirt and show it in the display area
        function selectShirt(shirtSrc) {
            document.getElementById("selected-shirt").src = shirtSrc;
        }

        // Select logo and make it draggable/resizable
        function selectLogo(logoSrc) {
            var logo = document.getElementById("selected-logo");
            logo.src = logoSrc;
            logo.style.display = "block";
        }

        // Update text display
        function updateText() {
            var text = document.getElementById("customText").value;
            document.getElementById("text-display").innerText = text;
        }

        // Update color of the text
        function updateColor(color) {
            document.getElementById("text-display").style.color = color;
        }

        // Draggable functionality
        dragElement(document.getElementById("logo-container"));

        function dragElement(element) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            element.onmousedown = dragMouseDown;

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                element.style.top = element.offsetTop - pos2 + "px";
                element.style.left = element.offsetLeft - pos1 + "px";
            }

            function closeDragElement() {
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }

        // Resize functionality for resizing handles
        resizeElement(document.getElementById("logo-container"));

        function resizeElement(element) {
            var startX, startY, startWidth, startHeight;

            const topLeft = element.querySelector(".top-left");
            const topRight = element.querySelector(".top-right");
            const bottomLeft = element.querySelector(".bottom-left");
            const bottomRight = element.querySelector(".bottom-right");

            // Handle resizing from bottom-right corner
            bottomRight.addEventListener("mousedown", function(e) {
                e.preventDefault();
                startX = e.clientX;
                startY = e.clientY;
                startWidth = parseInt(
                    document.defaultView.getComputedStyle(element).width,
                    10
                );
                startHeight = parseInt(
                    document.defaultView.getComputedStyle(element).height,
                    10
                );
                document.documentElement.addEventListener(
                    "mousemove",
                    doDragBottomRight,
                    false
                );
                document.documentElement.addEventListener("mouseup", stopDrag, false);
            });

            function doDragBottomRight(e) {
                element.style.width = startWidth + e.clientX - startX + "px";
                element.style.height = startHeight + e.clientY - startY + "px";
            }

            // Handle resizing from top-left corner
            topLeft.addEventListener("mousedown", function(e) {
                e.preventDefault();
                startX = e.clientX;
                startY = e.clientY;
                startWidth = parseInt(
                    document.defaultView.getComputedStyle(element).width,
                    10
                );
                startHeight = parseInt(
                    document.defaultView.getComputedStyle(element).height,
                    10
                );
                document.documentElement.addEventListener(
                    "mousemove",
                    doDragTopLeft,
                    false
                );
                document.documentElement.addEventListener("mouseup", stopDrag, false);
            });

            function doDragTopLeft(e) {
                element.style.width = startWidth - (e.clientX - startX) + "px";
                element.style.height = startHeight - (e.clientY - startY) + "px";
                element.style.left = element.offsetLeft + (e.clientX - startX) + "px";
                element.style.top = element.offsetTop + (e.clientY - startY) + "px";
            }

            function stopDrag() {
                document.documentElement.removeEventListener(
                    "mousemove",
                    doDragBottomRight,
                    false
                );
                document.documentElement.removeEventListener(
                    "mousemove",
                    doDragTopLeft,
                    false
                );
                document.documentElement.removeEventListener(
                    "mouseup",
                    stopDrag,
                    false
                );
            }
        }

        // Update the text content
        function updateText() {
            var text = document.getElementById("customText").value;
            document.getElementById("text-display").innerText = text;
        }

        // Make the text draggable
        dragElement(document.getElementById("text-display"));

        function dragElement(element) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            element.onmousedown = dragMouseDown;

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // Get the initial mouse cursor position
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // Calculate the new cursor position
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // Set the element's new position
                element.style.top = element.offsetTop - pos2 + "px";
                element.style.left = element.offsetLeft - pos1 + "px";
            }

            function closeDragElement() {
                // Stop moving when the mouse button is released
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }
    </script>
</body>

</html>