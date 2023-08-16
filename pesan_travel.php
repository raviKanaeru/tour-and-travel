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
                      <input type="text" class="datepicker" placeholder="Silahkan Isi Tanggal" name="tanggal_berangkat">
                      <label for="first_name">Tanggal Berangkat</label>
                    </div>
                  </div>

    
                  <input type="hidden" name="harga" value="<?php echo $data["harga"]; ?>">
                  <input type="hidden" name="nama_travel" value="<?php echo $data["nama_travel"]; ?>">
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