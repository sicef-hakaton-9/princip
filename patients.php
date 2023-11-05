<?php include_once 'header.php';

?>
<section class="my-5 py-5 row">
  <div class="container">
    <div class="col-12 mx-auto">
          <div class="container">
        <table id="tabela" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <!--<th>ID</th>-->
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Telefon pacijenta</th>
                    <th>Telefon staratelja</th>
                    <th>Godine</th>
                    <th>JMBG</th>
                    <th>Broj kartona</th>
                    <th>Adresa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM patients";
                $statement = $pdo->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $row) {
                    echo "<tr>";
                    //echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['number'] . "</td>";
                    echo "<td>" . $row['numberGuardian'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['JMBG'] . "</td>";
                    echo "<td>" . $row['carton_id'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php' ?>
