<?php include_once 'header.php';

?>
<div class="col-6 mx-auto text-center">
  <h3 class="mt-5 mb-4">Lista pacijenata / korisnika</h3>       
</div>

<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-5">
    <button type="button" class="btn bg-gradient-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#dodajOsobuModal">
        Dodaj osobu
  </button>
<table id="tabela" class="table align-items-center mb-0">
            <thead class="thead-dark">
                <tr>
                    <!--<th>ID</th>-->
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Ime</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Prezime</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Telefon pacijenta</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Telefon staratelja</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Godine</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">JMBG</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Broj kartona</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Adresa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 9px;">Intervencije</th>
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
                    echo "<td><h6 class='mb-0 text-sm'>" . $row['firstname'] . "</h6></td>";
                    echo "<td><h6 class='mb-0 text-sm'>" . $row['lastname'] . "</h6></td>";
                    echo "<td><p class='text-xs font-weight-bold mb-0'>" . $row['number'] . "</p></td>";
                    echo "<td><p class='text-xs font-weight-bold mb-0'>" . $row['numberGuardian'] . "</p></td>";
                    echo "<td><h6 class='mb-0 text-sm'>" . $row['age'] . "</h6></td>";
                    echo "<td><p class='text-xs font-weight-bold mb-0'>" . substr($row['JMBG'], 0, -3) . '***' . "</p></td>";
                    echo "<td><p class='text-xs font-weight-bold mb-0'>" . $row['carton_id'] . "</p></td>";
                    echo "<td><p class='text-xs font-weight-bold mb-0'>" . $row['address'] . "</p></td>";

                    $query = "SELECT COUNT(*) FROM intervention WHERE patient_id = :patient_id AND sos = 1";
                    $statement = $pdo->prepare($query);
                    $statement->bindParam(':patient_id', $row['id'], PDO::PARAM_INT);
                    $statement->execute();
                    $count = $statement->fetchColumn();
                    echo "<td><h6 class='mb-0 text-sm' style='color:red;'>" . $count . "</h6></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
  </div>
</section>


  <div class="modal fade" id="dodajOsobuModal" tabindex="-1" aria-labelledby="dodajOsobuModalLabel" aria-hidden="true">
        <form id="formModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dodaj osobu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errors"></div>
                <div class="mb-3">
                  <label for="frmIme" class="form-label">Ime</label>
                  <input type="text" class="form-control" id="frmIme" name="firstname" required>
                </div>
                <div class="mb-3">
                  <label for="frmPrezime" class="form-label">Prezime</label>
                  <input type="text" class="form-control" id="frmPrezime" name="lastname" required>
                </div>
                <div class="mb-3">
                  <label for="fmrGodine" class="form-label">Godine</label>
                  <input type="number" class="form-control" id="fmrGodine" name="age" required>
                </div>
                <div class="mb-3">
                  <label for="fmrJmbg" class="form-label">JMBG</label>
                  <input type="text" class="form-control" id="fmrJmbg" name="JMBG" required>
                </div>
                <div class="mb-3">
                  <label for="frmBrojKartona" class="form-label">Broj kartona</label>
                  <input type="text" class="form-control" id="frmBrojKartona" name="carton_id" required>
                </div>
                <div class="mb-3">
                  <label for="frmAdresa" class="form-label">Adresa</label>
                  <input type="text" class="form-control" id="frmAdresa" name="address" required>
                </div>
                <div class="mb-3">
                  <label for="frmBrojTelefona" class="form-label">Broj telefona</label>
                  <input type="text" class="form-control" id="frmBrojTelefona" name="brojTelefona" required>
                </div>
                <div class="mb-3">
                  <label for="frmBrojTelefonaStaratelja" class="form-label">Broj telefona staratelja</label>
                  <input type="text" class="form-control" id="frmBrojTelefonaStaratelja" name="brojTelefonaStaratelja" required>
                </div>
                <div class="mb-3">
                  <label for="frmPol" class="form-label">Pol</label>
                  <select id="frmPol" name="pol" required class="form-control">
                    <option value="0">Muško</option>
                    <option value="1">Žensko</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="frmRizik" class="form-label">Rizik</label>
                  <select id="frmRizik" name="rizik" required class="form-control">
                    <option value="1">Niskorizično</option>
                    <option value="2">Srednjerizično</option>
                    <option value="3">Visokorizično</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Otkaži</button>
                <button class="btn bg-gradient-primary" type="submit" id="modalSubmit">Dodaj</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php include_once 'footer.php' ?>
