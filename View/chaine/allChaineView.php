<section>
    <table>
        <thead>
        <tr>
            <td>Nom Chaine</td>
            <td>Adresse</td>
            <td>Code postal</td>
            <td>Ville</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($chaines as $dto){ ?>
        <tr>
            <td><?= $dto->getNom_chaine() ?></td>
            <td><?= $dto->getAdresse() ?></td>
            <td><?= $dto->getCode_postal() ?></td>
            <td><?= $dto->getVille() ?></td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</section>

<section>
    <form action="index.php?controller=chaine&action=insert" method="post">
        <fieldset >
            <legend>une nouvelle chaine???</legend>
            <label><input type="text" name="nom_chaine" placeholder="nom de la chaine" required="required"/></label>
            <label><input type="text" name="adresse" placeholder="Adresse" required="required"/></label>
            <label><input type="text" name="code_postal" placeholder="copde postal" required="required"/></label>
            <label><input type="text" name="ville" placeholder="Ville" required="required"/></label>
            <label><input type="tel" name="telephone" placeholder="Téléphone" required="required"/></label>
            <label><input type="tel" name="fax" placeholder="Fax" /></label>
            <fieldset >
                <legend>Chaine cablé????</legend>
                <label>oui<input type="radio" name="chaine_cablee" value="1" id="cable1" checked="checked"/></label>
                <label>non<input type="radio" name="chaine_cablee" value="0" id="cable2" /></label>

            </fieldset>
            <input type="submit" value="Valider"/>
        </fieldset>
    </form>
</section>