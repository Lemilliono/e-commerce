<!DOCTYPE html>
    <html>
            <head>
            <link rel="stylesheet" href="{{asset ('css/styleadmin.css') }}">
            <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
            <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,500">
            </head>
        
            <body>
            <nav class="header_menu">
                <div class="name">
                        <a href=>MICROUMANIA</a>
                </div>
                <div class="username">
                    <a href="{{ route('register') }}">REGISTER</a>
                </div>
                <div class="links">
                    <a href=>NEWS</a>
                    <a class="shop" href=>SHOP</a>
                    <a href=>CART</a>
                </div>
                </nav>
            </nav>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="formulaire">
                    <form>
                    <div class="choose_console">
                                <label for="console">Choose a console</label>

                                <select name="console" id="console">
                                    <option value="ps5">PS4</option>
                                    <option value="ps5">PS5</option>
                                    <option value="xbox">XBOX</option>
                                    <option value="nintendo_switch">Nintendo Switch</option>
                                    <option value="pc">PC</option>
                                </select>
                                
                    </div>

                    <div class="game_name">
                                
                                <label for="name">Type the game's name :</label>
                                <input type="text" id="name" name="name">

                                <br>
                    </div>

                    <div class="game_image">
                        <label for="image">Put the game's image.</label>
                        <input type="file" id="image" name="image">
                    </div>
                    
                    <div class="game_price">
                        <label for="price">Type the game's price :</label>
                        <input type="text" id="price" name="price">

                        <br>
                    </div>

                    <div class="game_stock">
                        <label for="quantity">Stock du jeu en question :</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="99">

                    </div>
                    <br><br>
                    <div class="submit_button">
                        <input type="submit" value="Submit">
                    </div>
                    </form>


                </div>
            </body>