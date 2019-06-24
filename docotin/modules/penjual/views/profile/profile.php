<!-- modal content here -->
  <!-- Modal -->
<div class="modal fade" id="top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title centered" id="myModalLabel"><strong>Pilih Jenis Penarikan</strong></h4>
        </div>
        <div class="modal-body">
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>BNI</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>BCA</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>Mandiri</label></td></div> 
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a href="/penjual/profile/detail-penarikan"><button type="button" class="btn btn-primary">Next</button></a>
        </div>
      </div>
    </div>
  </div>


  <!-- modal content here -->
  <!-- Modal -->
  <div class="modal fade" id="list_top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title centered" id="myModalLabel"><strong>Perhatian !!!</strong></h4>
          </div>
          <div class="modal-body">
            Data anda belum Lengkap!! Lengkapi biodata untuk melakukan Top Up
          </div>
          <div class="modal-footer">
            <a href="profile.html"><button type="button" class="btn btn-primary">Close</button></a>
          </div>
        </div>
      </div>
    </div>

    
	<div class="content">
    <p style="text-align: center; font-size: 3rem;">Profil Pengguna</p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">User</h3>
      </div>
      <div class="panel-body">
       <div class="panel">
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="login-form">
							<table class="custom-table">
								<tbody>
									<tr class="success">
                    <td><h5> <div class="register">Username</h5></td></div>
                    <td><h5> <div class="register">Floanggita</h5></td></div>
									</tr>
									<tr>
                    <td><h5> <div class="register">Email</h5></td></div>
                    <td><h5> <div class="register">Floanggita@docotel.com</h5></td></div>
									</tr>
									<tr>
                    <td><h5> <div class="register">Password</h5></td></div>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
                    <td><h5> <div class="register">Repassword</h5></td></div>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Biodata</h3>
      </div>
      <div class="panel-body">
        <div class="panel-body">
            <div class="panel">
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="login-form">
                  <div class= "saldo-btn">
                          <!-- Button trigger modal -->
                          <a href="/penjual/profile/list-penarikan"><button type="button" class="btn btn-success">
                          List Penarikan 
                          </button></a>
                        </div>

                    <table class="custom-table">
                      <tbody>
                        <div class= "form-biodata">
                        <tr>
                          <td><div class="register">Jumlah Penarikan
                          </div>
                          </td>
                          <td>
                              <input type="text" class="form-control">
                              </input>
                              </br>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#top_up">
                              Proses</button>
                          </td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Saldo</h5></td></div>
                          <td><h5> <div class="register">Rp. 10.000.000</h5></td></div>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Nama Lengkap</h5></td></div>
                          <td><input type="text" class="form-control" id="inputEmail3"></td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">No HP</h5></td></div>
                          <td><input type="number" class="form-control" id="inputEmail3"></td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Alamat</h5></td></div>
                          <td><input type="number" class="form-control" id="inputEmail3"></td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">No NPWP</h5></td></div>
                          <td><input type="number" class="form-control" id="inputEmail3"></td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Role</h5></td></div>
                          <td><h5> <div class="register">Penjual</h5></td></div>
                        </tr>
                        <tr>
                          <td>
                          Upload KTP
                          </td>
                          <td>
                            <div class="custom-file">
                            <input type="file" name="namabarang" class="custom-file-input">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                            <br/>
                            <button type="button" class="btn btn-primary">Ubah</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                          </td>
                        </tr>
                      </div>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
            </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
		$(document).ready(function(){
			$('.top-up').hide()					

			$('#topUp').on('click', function() {
				$('.top-up').toggle()
        // alert('hallo')
			});
				
		});
	</script>