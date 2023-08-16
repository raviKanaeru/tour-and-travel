<!-- Modal Structure -->
  <div id="book">
                <form class="col s12" method="post">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Silahkan Isi Nama Lengkap" id="first_name" type="text" class="validate" name="nama_lengkap" required autocomplete="off">
                      <label for="first_name">Nama Lengkap</label>
                    </div>
                  </div>
                  <input type="hidden" value="<?php echo $_SESSION["username"]; ?>">
                  <input type="hidden" value="Pending" name="status">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Isi Jumlah Tiket" name="jumlah_tiket" id="first_name" type="number" class="validate" min="1" max="5" maxlength="2" required autocomplete="off">
                      <label for="first_name">Jumlah Tiket</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <select name="tanggal_berangkatan" required>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="<?php echo $dtl["tanggal_berangkat"]; ?>"><?php $tgg = $dtl["tanggal_berangkat"];
                        echo date("l, d-F-Y", strtotime($tgg)); ?></option>
                        <option value="<?php echo $dtl["tanggal_berangkat2"]; ?>"><?php $tgg2 = $dtl["tanggal_berangkat2"];
                        echo date("l, d-F-Y", strtotime($tgg2)); ?></option>
                        <option value="<?php echo $dtl["tanggal_berangkat3"]; ?>"><?php $tgg3 = $dtl["tanggal_berangkat3"];
                        echo date("l, d-F-Y", strtotime($tgg3)); ?></option>
                      </select>
                      <label>Tanggal Keberangkatan</label>
                    </div>
                  </div>
                  <input type="hidden" name="harga" value="<?php echo $dtl["harga"]; ?>">
                  <input type="hidden" name="nama_tour" value="<?php echo $dtl["nama_tour"]; ?>">
                  <div class="row">
                    <div class="row">
                      <?php if( !isset($_SESSION["username"])) {?>
                      <div class="input-field col s6">
                        <a href="login.php" class="btn blue darken-2">Book Now</a>
                      </div>
                      <?php } else { ?>
                    <div class="input-field col s6">
                      <button type="submit" name="pesan" class="btn blue darken-2">Book Now</button>
                    </div>
                  <?php } ?>
                    </div>
                  </div>
                  
                </form>
              </div>