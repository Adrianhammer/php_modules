<?php            
        //Lager det forhånd fylte arrayet som brukes videre
        $medlemmer = array(
            'Fornavn' => "Adrian",
            'Etternavn' => "Hammer",
            'Epost' => "test@gmail.com",
            'Mobilnummer' => 91166190,
            'Adresse' => "Kaserneveien 30",
            'Kjønn' => "Mann",
            'Fødseldato' => '13-11-2000',
            'Interesser' => 'Kode',
            'Kursaktiviteter' => 'Klatring',
            'Kontigentstatus' => 'Betalt'
        );

        echo "<h1>Nåværende medlemsinformasjon</h1>";
        foreach ($medlemmer as $key => $value) {
            print_r("<b>$key</b>: $value</b><br>");
        }
    ?>
<pre>
    <h2>Oppdatert medlemsinformasjon:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Fornavn: <input type="text" name="navn" value="<?php 
            if (empty( $_REQUEST['navn'])) { //Sjekker om input fra bruker er tom eller ikke
                echo $medlemmer['Fornavn']; //Hvis den er tom, tar jeg fra listen
            } else {
                echo $_REQUEST['navn']; //Hvis ikke, tar jeg inputen og bruker den som valuen.
    }?>" placeholder="Fornavn" required/><br>

        Etternavn: <input type="text" name="enavn" value= <?php 
            if (empty( $_REQUEST['enavn'])) {
                echo $medlemmer['Etternavn'];
            } else {
                echo $_REQUEST['enavn'];
    }?> placeholder="Etternavn" required><br>

         E-post: <input type="email" name="epost"  value= <?php 
            if (empty( $_REQUEST['epost'])) {
                echo $medlemmer['Epost'];
            } else {
                echo $_REQUEST['epost'];
    }?> placeholder="E-post" required><br>

        Telefon: <input type="tel" name="tlf"  value= <?php 
            if (empty( $_REQUEST['tlf'])) {
                echo $medlemmer['Mobilnummer'];
            } else {
                echo $_REQUEST['tlf'];
    }?> placeholder="Mobilnummer" required><br>

        Adresse: <input type="text" name="adresse" value= <?php 
            if (empty( $_REQUEST["adresse"])) {
                echo $medlemmer["Adresse"]; 
            } else {
                echo $_REQUEST["adresse"];
    }?> placeholder="Lolipoppveien 45" required><br>
    <h2>Annen Informasjon:</h2>
    <b>Kjønn:</b>  <input type="radio" name="kjønn" value= "Mann" required <?php if ((isset( $_REQUEST['kjønn']) && $_REQUEST['kjønn']=="Mann") || $medlemmer['Kjønn'] == 'Mann') {echo "checked"; } ?>>Mann <input type="radio" name="kjønn" value= "Kvinne" <?php if ((isset( $_REQUEST['kjønn']) && $_REQUEST['kjønn']=="Kvinne") || $medlemmer['Kjønn'] == 'Kvinne') {echo "checked"; } ?>>Kvinne</label><br>
    
    <b>Fødselsdato:</b>  <input type="date" name="fdato"  value= <?php if (empty( $_REQUEST['fdato'])) {echo $medlemmer['Fødseldato'];} else {echo $_REQUEST['fdato'];} ?> required><br>
    
    <h2>Medlemsinformasjon:</h2>
    <b>Interesser:</b> 
                <input type="radio" name="interesser" value= "Trening" required <?php if ((isset( $_REQUEST['interesser']) && $_REQUEST['interesser']=="Trening") || $medlemmer['Interesser'] == 'Trening') {echo "checked"; } ?>>Trening
                <input type="radio" name="interesser" value= "Musikk" <?php if ((isset( $_REQUEST['interesser']) && $_REQUEST['interesser']=="Musikk") || $medlemmer['Interesser'] == 'Musikk') {echo "checked"; } ?>>Musikk
                <input type="radio" name="interesser" value= "Dansing" <?php if ((isset( $_REQUEST['interesser']) && $_REQUEST['interesser']=="Dansing") || $medlemmer['Interesser'] == 'Dansing') {echo "checked"; } ?>>Dansing
                <input type="radio" name="interesser" value= "Gaming" <?php if ((isset( $_REQUEST['interesser']) && $_REQUEST['interesser'] == 'Gaming') || $medlemmer['Interesser'] == 'Gaming') {echo "checked"; } ?>>Gaming</label><br>

    <b>Kursaktiviteter:</b> 
                <input type="radio" name="kursaktiviteter" value= "Klatring" required <?php if ((isset( $_REQUEST['kursaktiviteter']) && $_REQUEST['kursaktiviteter']=="Klatring") || $medlemmer['Kursaktiviteter'] == 'Klatring') {echo "checked"; } ?>>Klatring
                <input type="radio" name="kursaktiviteter" value= "Seiling" <?php if ((isset( $_REQUEST['kursaktiviteter']) && $_REQUEST['kursaktiviteter']=="Seiling") || $medlemmer['Kursaktiviteter'] == 'Seiling') {echo "checked"; } ?>>Seiling
                <input type="radio" name="kursaktiviteter" value= "Programmering" <?php if ((isset( $_REQUEST['kursaktiviteter']) && $_REQUEST['kursaktiviteter']=="Programmering") || $medlemmer['Kursaktiviteter'] == 'Programmering') {echo "checked"; } ?>>Programmering
                <input type="radio" name="kursaktiviteter" value= "Maling" <?php if ((isset( $_REQUEST['kursaktiviteter']) && $_REQUEST['kursaktiviteter'] == 'Maling') || $medlemmer['Kursaktiviteter'] == 'Maling') {echo "checked"; } ?>>Maling</label><br>

    <b>Kontigentstatus:</b> 
                <input type="radio" name="kontigent" value= "Betalt" required <?php if ((isset( $_REQUEST['kontigent']) && $_REQUEST['kontigent']=="Betalt") || $medlemmer['Kontigentstatus'] == 'Betalt') {echo "checked"; } ?>>Betalt 
                <input type="radio" name="kontigent" value= "Ikke betalt" <?php if ((isset( $_REQUEST['kontigent']) && $_REQUEST['kontigent']=="Ikke betalt") || $medlemmer['Kontigentstatus'] == 'Ikke betalt') {echo "checked"; } ?>>Ikke betalt</label><br>

        <input type="submit" name='endre' value="Endre">
    </form>
</pre>
<body>
    <?php 
        //Her vil den listen som er forhåndsfylt bli endret etter knappen "Endre" er trykket.
        //Gir en mer elegant og dynamisk løsning.
        if (isset($_REQUEST['endre'])) {
        $medlemmer = array(
            'Fornavn' => $_REQUEST['navn'],
            'Etternavn' => $_REQUEST['enavn'],
            'Epost' => $_REQUEST['epost'],
            'Mobilnummer' => $_REQUEST['tlf'],
            'Adresse' => $_POST['adresse'],
            'Fødseldato' => $_REQUEST['fdato'],
            'Kjønn' => $_REQUEST['kjønn'],
            'Interesser' => $_REQUEST['interesser'],
            'Kursaktiviteter' => $_REQUEST['kursaktiviteter'],
            'Kontigentstatus' => $_REQUEST['kontigent']
        );

        //Foreach løkke som går gjennom hvert element i listen og printer endring av informasjon til bruker
        echo "<h3>Ny inormasjon registrert:</h3>";
        foreach ($medlemmer as $field => $value) {
            print_r("<b>$field</b>: $value</b><br>");
        }
    }
    ?>
