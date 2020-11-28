<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Project</title>
</head>

<body>
    <!-- create menu bar for the page web -->
    <nav>
        <ul>
            <li>
                <div class="logo"><img src="photos/logo.jpg"></div>
            </li>
            <li class="menu">
                <a href="">Home</a>
            </li>
            <li id="display">
                <a>Custom Menu</a>
            </li>
            <li class="menu">
                <a href="">About Us</a>
            </li>
        </ul>
    </nav>
    <!-- The two tables to color the rows for each one -->
    <table id="one">
        <th>
            Table 1
        </th>
        <tr>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
        </tr>
        <tr>
            <td>9</td>
        </tr>
        <tr>
            <td>10</td>
        </tr>
    </table>
    <table id="two">
        <th>
            Table 2
        </th>
        <tr>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
        </tr>
        <tr>
            <td>9</td>
        </tr>
        <tr>
            <td>10</td>
        </tr>
    </table>



    <!-- the two buttons to handle the actions -->
    <form action="">
        <input type="submit" value="Hover_over" id="button_1">
        <input type="submit" value="Click_on" id="button_2">
    </form>



    <!-- photo-gallery -->
    <div id="container">
        <div class="gallery">
            <img class="carousel" src="photos/image_1.jpg" alt="Cinque Terre">
            <div class="desc">Image 1</div>
        </div>

        <div class="gallery">
            <img class="carousel" src="photos/image_2.jpg" alt="Forest">
            <div class="desc">Image 2</div>
        </div>

        <div class="gallery">
            <img class="carousel" src="photos/image_3.jpg" alt="Northern Lights">
            <div class="desc">Image 3</div>
        </div>

        <div class="gallery">
            <img class="carousel" src="photos/image_4.jpg" alt="Mountains">
            <div class="desc">Image 4</div>
        </div>

        <div class="gallery">
            <img class="carousel" src="photos/image_5.jpg" alt="City">
            <div class="desc">Image 5</div>
        </div>

        <div id="clear">This images were uploaded from Internet</div>
    </div>

    <div class="bigImage">
        <span id="closebtn">&times;</span>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img class="demo" src="photos/image_1.jpg" alt="Cinque Terre">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img class="demo" src="photos/image_2.jpg" alt="Forest">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img class="demo" src="photos/image_3.jpg" alt="Northern Lights">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img class="demo" src="photos/image_4.jpg" alt="Mountains">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img class="demo" src="photos/image_5.jpg" alt="City" width="600" height="400">
        </div>

        <a id="prev">❮</a>
        <a id="next">❯</a>

        <img id="expandedImg">
        <div id="imgtext"></div>
    </div>

    <!-- disply text in div on center the window -->
    <div id="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem
        molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem
        molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem
        molestiae tempore voluptatibus
        obcaecati repellat, cupiditate eaque necessitatibus? Iusto inventore ipsam et animi incidunt corporis, nesciunt
        iste natus debitis cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quidem provident voluptas
        omnis libero assumenda, amet dolor, eligendi suscipit explicabo nihil exercitationem placeat commodi? Eligendi
        voluptatum ipsam labore assumenda repellat.
    </div>
    <script src="scripts.js"></script>
</body>

</html>