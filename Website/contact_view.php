<head>
    <link href="contact.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
</head>

<div id="main">
    <p id="titel">Neem contact met ons op</p>
    <p></p>
    <div id="justi">
    <form id="formu">
        <label for="fname">Voornaam:</label>
        <input type="text" id="fname" name="fname">
        <label for="lname">Achternaam:</label>
        <input type="text" id="lname" name="lname" >
        <label for="tnum">Telefoonnummer:</label>
        <input type="tel" id="tnum" name="tnum" placeholder="06 xxxxxxxx" pattern="[06]{1}[0-9]{8}" value="06">
        <label for="mail">E-mail:</label>
        <input type="text" id="mail" name="mail" >
        <label for="vraag">Vraag/opmerking:</label>
        <textarea type="text" id="vraag" name="vraag" rows="5"> </textarea>

        <input type="button" id="verzend" name="verzend" value="verzend" class="mouseOverBigger">
    </form>
    </div>
    <div id=line>
        <p>Andere manieren om contact te zoeken</p>
    <div id="outer-div">
        <div id="inner-div1">
            <br>
            <p>Tel: 505-503-4455</p>
            <br>
            <p>E-mail: Info@villatekoop.nl</p>

        </div>
        <div id="inner-div2">
            <br>
            <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
            <br>
            <p><a href="https://twitter.com/" target="_blank">Twitter</a></p>
        </div>
    </div>
    </div>
</div>